<?php

namespace App\Http\Controllers\Builders;

use App\Http\Controllers\Controller;
use App\Models\ProjectAdvanced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule; // For unique validation rule

class ProjectAdvancedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get projects belonging to the authenticated user, latest first
        $projects = Auth::user()->projectsAdvanced()->latest()->get();

        // Pass the projects to the view
        return view('builders.advanced.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => [
                    'required',
                    'string',
                    'max:255',
                    // Ensure the name is unique for the current user's projects
                    Rule::unique('projects_advanced')->where(function ($query) {
                        return $query->where('user_id', Auth::id());
                    }),
                ],
                'description' => ['nullable', 'string'],
            ]);
    
            // Create the project associated with the authenticated user
            $project = Auth::user()->projectsAdvanced()->create([
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                // 'tables' and 'total_data' will use default values from migration
            ]);
    
            // If it's an AJAX request, return JSON response
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Project created successfully!',
                    'project' => $project
                ]);
            }
    
            // For regular form submissions, redirect with success message
            return redirect()->route('builders.advanced.index')->with('success', 'Project created successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }
            
            // Re-throw for regular form submissions to let Laravel handle it
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectAdvanced $projectAdvanced)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectAdvanced $projectAdvanced)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectAdvanced $projectAdvanced)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectAdvanced $projectAdvanced)
    {
        //
    }
}
