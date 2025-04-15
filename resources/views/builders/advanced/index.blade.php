@extends('layouts.main')

@section('breadcrumbs')
<span class="text-gray-700">
    API Builders
</span>
<i class="ki-filled ki-right text-gray-500 text-3xs">
</i>
<span class="text-gray-700">
    Advanced
</span>
@endsection

@section('content')

<div class="container-fixed">
    <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
        <div class="flex flex-col justify-center gap-2">
            <h1 class="text-xl font-medium leading-none text-gray-900">
                Projects({{ count($projects) }})
            </h1>
            <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
                efficient project organization with real-time updates
            </div>
        </div>
        <div class="flex items-center gap-2.5">
            <button class="btn btn-sm btn-light" data-modal-toggle="#advanced_project_add_modal">
                Add New Project
            </button>
        </div>
    </div>
</div>


<div class="modal" data-modal="true" id="advanced_project_add_modal">
    <div class="modal-content max-w-[500px] top-[20%]">
        <button class="btn btn-xs btn-icon btn-light absolute top-7.5 right-7.5" data-modal-dismiss="true">
            <i class="ki-outline ki-cross"></i>
        </button>
        <div class="modal-body">
            {{-- Update form action, method, add csrf --}}
            <form action="{{ route('builders.advanced.store') }}" class="card-body flex flex-col gap-5 p-10" id="add_project_form" method="POST">
                @csrf
                <div class="text-center mb-5">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white leading-none mb-2.5">
                        Create New Advanced Project
                    </h3>
                    <div class="flex items-center justify-center font-medium">
                        <span class="text-2sm text-gray-500 me-1.5">
                            Kickstart Your Next Project
                        </span>
                    </div>
                </div>
                {{-- Add name attribute and error display --}}
                <div class="flex flex-col gap-1">
                    <label for="project_name" class="form-label font-normal text-gray-900 dark:text-gray-300">Project Name</label>
                    <input id="project_name" name="name" class="input dark:bg-coal-400 dark:border-coal-300 dark:text-white" placeholder="Enter project name" type="text" value="{{ old('name') }}" required />
                    @error('name')
                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Add name attribute and error display --}}
                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between gap-1">
                        <label for="project_description" class="form-label font-normal text-gray-900 dark:text-gray-300">Description</label>
                    </div>
                    {{-- Use textarea for potentially longer descriptions --}}
                    <textarea id="project_description" name="description" class="input dark:bg-coal-400 dark:border-coal-300 dark:text-white" placeholder="Enter short description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary flex justify-center grow mt-5">Save Project</button>
            </form>

        </div>
    </div>
</div>



<!-- Container -->
<div class="container-fixed">
    <div class="grid gap-5 lg:gap-7.5">
        <div class="card card-grid min-w-full">
            <div class="card-header flex-wrap py-5">
                <h3 class="card-title">
                    Teams
                </h3>
                <div class="flex gap-6">
                    <div class="relative">
                        <i class="ki-filled ki-magnifier leading-none text-md text-gray-500 absolute top-1/2 start-0 -translate-y-1/2 ms-3">
                        </i>
                        <input class="input input-sm ps-8" data-datatable-search="#teams_table" placeholder="Search Teams" type="text" />
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div data-datatable="true" data-datatable-page-size="10" id="teams_table">
                    <div class="scrollable-x-auto">
                        <table class="table table-fixed table-border" data-datatable-table="true">
                            <thead>
                                <tr>
                                    <th class="w-[60px] text-center">#</th> {{-- Changed header --}}
                                    <th class="w-[350px]">
                                        <span class="sort"> {{-- Removed default 'asc' sort --}}
                                            <span class="sort-label text-gray-700 font-normal">
                                                Project
                                            </span>
                                            <span class="sort-icon">
                                            </span>
                                        </span>
                                    </th>
                                    <th class="w-[100px]">
                                        <span class="sort">
                                            <span class="sort-label text-gray-700 font-normal">
                                                Tables
                                            </span>
                                            <span class="sort-icon">
                                            </span>
                                        </span>
                                    </th>
                                    <th class="w-[100px]">
                                        <span class="sort">
                                            <span class="sort-label text-gray-700 font-normal">
                                                Records
                                            </span>
                                            <span class="sort-icon">
                                            </span>
                                        </span>
                                    </th>
                                    <th class="w-[200px]">
                                        <span class="sort">
                                            <span class="sort-label text-gray-700 font-normal">
                                                Last Modified
                                            </span>
                                            <span class="sort-icon">
                                            </span>
                                        </span>
                                    </th>
                                    <th class="w-[60px]">
                                    </th>
                                    <th class="w-[60px]">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $project)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }} {{-- Display ascending row number (1, 2, 3...) --}}
                                    </td>
                                    <td>
                                        <div class="flex flex-col gap-1.5">
                                            {{-- TODO: Add route for showing project details --}}
                                            <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                                                {{ $project->name }}
                                            </a>
                                            <span class="text-2sm text-gray-700 font-normal">
                                                {{ $project->description ?? 'No description' }}
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $project->tables }} {{-- Assuming 'tables' is a column --}}
                                    </td>
                                    <td class="text-sm text-gray-800 font-normal">
                                        {{ $project->total_data }} {{-- Assuming 'total_data' is a column --}}
                                    </td>
                                    <td>
                                        {{ $project->updated_at->format('d M, Y h:i A') }} {{-- Added time with AM/PM --}}
                                    </td>
                                    <td>
                                        {{-- TODO: Add route for editing project --}}
                                        <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                                            <i class="ki-filled ki-notepad-edit">
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        {{-- TODO: Add route/logic for deleting project --}}
                                        <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                                            <i class="ki-filled ki-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center py-5 text-gray-500">
                                        No projects found. Create one using the button above!
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                        <div class="flex items-center gap-2 order-2 md:order-1">
                            Show
                            <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
                            </select>
                            per page
                        </div>
                        <div class="flex items-center gap-4 order-1 md:order-2">
                            <span data-datatable-info="true">
                            </span>
                            <div class="pagination" data-datatable-pagination="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Container -->

<script>

// Add this script to your page (can be in a separate JS file or inline in the blade file)
document.addEventListener('DOMContentLoaded', function() {
    const projectForm = document.getElementById('add_project_form');
    
    if (projectForm) {
        projectForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state on button
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...';
            submitButton.disabled = true;
            
            // Gather form data
            const formData = new FormData(this);

            // Get CSRF token safely
            let headers = {
                'X-Requested-With': 'XMLHttpRequest'
            };

            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            if (csrfToken) {
                headers['X-CSRF-TOKEN'] = csrfToken.getAttribute('content');
            } else {
                // Fallback to input token if meta tag is not present
                const inputToken = document.querySelector('input[name="_token"]');
                if (inputToken) {
                    headers['X-CSRF-TOKEN'] = inputToken.value;
                } else {
                    console.error('CSRF token not found');
                }
            }
            
            // Send AJAX request
            fetch(this.getAttribute('action'), {
                method: 'POST',
                body: formData,
                headers: headers
            })
            .then(response => response.json())
            .then(data => {
                // Reset button state
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
                
                if (data.success) {
                    // Success case
                    // Show success message
                    showNotification('Success!', data.message, 'success');
                    
                    // Close modal
                    const modal = document.getElementById('advanced_project_add_modal');
                    if (modal && typeof KTModal !== 'undefined') { // Added null check for modal
                        const modalInstance = KTModal.getInstance(modal);
                        if (modalInstance) {
                            modalInstance.hide();
                        }
                    } else {
                        // Fallback for simpler modal systems
                        modal.classList.remove('show');
                        document.querySelector('[data-modal-backdrop]')?.remove();
                    }
                    
                    // Reset form
                    projectForm.reset();
                    
                    // Optionally refresh the table or add the new item to it
                    if (data.project) {
                        // addProjectToTable(data.project);
                    } else {
                        // If you prefer to refresh the entire list
                        // window.location.reload();
                    }
                } else {
                    // Error case
                    // Display validation errors if any
                    if (data.errors) {
                        displayFormErrors(data.errors);
                    } else {
                        showNotification('Error!', data.message || 'Something went wrong', 'error');
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
                showNotification('Error!', 'An unexpected error occurred', 'error');
            });
        });
    }
});

// Helper function to display validation errors
function displayFormErrors(errors) {
    // Clear existing error messages
    document.querySelectorAll('.error-message').forEach(el => el.remove());
    
    // Reset input borders
    document.querySelectorAll('.input').forEach(input => {
        input.classList.remove('border-red-500');
    });
    
    // Display new error messages
    for (const field in errors) {
        const input = document.querySelector(`[name="${field}"]`);
        if (input) {
            input.classList.add('border-red-500');
            
            const errorMessage = document.createElement('p');
            errorMessage.className = 'mt-1 text-xs text-red-600 dark:text-red-400 error-message';
            errorMessage.textContent = errors[field][0]; // Take the first error message
            
            input.parentNode.appendChild(errorMessage);
        }
    }
}

// Helper function to show notifications
function showNotification(title, message, type = 'info') {
        Swal.fire({
            title: title,
            text: message || 'Project created successfully!',
            icon: type,
            confirmButtonText: 'OK'
        });
}

// Function to add a new project to the table (if needed)
function addProjectToTable(project) {
    // This would be customized based on your table structure
    // Example implementation (adjust based on your actual table)
    
    // For now, simplest solution is to reload the page
    // In a real implementation, you would dynamically add the new row
    window.location.reload(); // Reload to see the new project in the list
}

// Function to re-number table rows sequentially after datatable initialization/updates
function renumberTableRows(tableId) {
    const tableBody = document.querySelector(`#${tableId} tbody`);
    if (!tableBody) return;

    const renumber = () => {
        const rows = tableBody.querySelectorAll('tr');
        let counter = 1;
        rows.forEach(row => {
            // Skip the 'empty' row if it exists
            if (row.querySelector('td[colspan]')) {
                return; 
            }
            const firstCell = row.querySelector('td:first-child');
            if (firstCell) {
                firstCell.textContent = counter++;
            }
        });
    };

    // Initial numbering
    renumber();

    // Use MutationObserver to re-number whenever the table body changes (sorting, pagination, search)
    const observer = new MutationObserver(renumber);
    observer.observe(tableBody, { childList: true, subtree: true });

    // Optional: If using a specific datatable library with events, hook into its draw/render event
    // Example for DataTables.net:
    // $(`#${tableId}`).on('draw.dt', renumber); 
}

// Call the renumber function after the datatable is likely initialized
document.addEventListener('DOMContentLoaded', function() {
    // ... existingDOMContentLoaded code ...

    // Renumber the table rows
    renumberTableRows('teams_table'); 
});

</script>

@endsection
