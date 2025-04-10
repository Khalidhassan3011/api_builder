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
                Projects(14)
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
    <div class="modal-content max-w-[600px] top-[20%]">
        <div class="modal-header">
            <h3 class="modal-title">
                Modal Title
            </h3>
            <button class="btn btn-xs btn-icon btn-light" data-modal-dismiss="true">
                <i class="ki-outline ki-cross">
                </i>
            </button>
        </div>
        <div class="modal-body">
            Modal components are commonly used for various purposes such as displaying login forms, confirming actions, presenting multimedia content, or showing detailed information.
            They provide a non-intrusive way to engage users and guide them through specific tasks or actions while maintaining the context of the underlying webpage.
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
                    <label class="switch switch-sm">
                        <input class="order-2" name="check" type="checkbox" value="1" />
                        <span class="switch-label order-1">
                            Only Active Groups
                        </span>
                    </label>
                </div>
            </div>
            <div class="card-body">
                <div data-datatable="true" data-datatable-page-size="10" id="teams_table">
                    <div class="scrollable-x-auto">
                        <table class="table table-fixed table-border" data-datatable-table="true">
                            <thead>
                                <tr>
                                    <th class="w-[60px] text-center">
                                        <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox" />
                                    </th>
                                    <th class="w-[350px]">
                                        <span class="sort asc">
                                            <span class="sort-label text-gray-700 font-normal">
                                                Team
                                            </span>
                                            <span class="sort-icon">
                                            </span>
                                        </span>
                                    </th>
                                    <th class="w-[200px]">
                                        <span class="sort">
                                            <span class="sort-label text-gray-700 font-normal">
                                                Rating
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
                                    <th class="w-[200px]">
                                        <span class="sort asc">
                                            <span class="sort-label text-gray-700 font-normal">
                                                Members
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
                                <tr>
                                    <td class="text-center">
                                        <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1" />
                                    </td>
                                    <td>
                                        <div class="flex flex-col gap-1.5">
                                            <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                                                Product Management
                                            </a>
                                            <span class="text-2sm text-gray-700 font-normal">
                                                Overseeing product development and lifecycle
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating">
                                            <div class="rating-label checked">
                                                <i class="rating-on ki-solid ki-star text-base leading-none">
                                                </i>
                                                <i class="rating-off ki-outline ki-star text-base leading-none">
                                                </i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="rating-on ki-solid ki-star text-base leading-none">
                                                </i>
                                                <i class="rating-off ki-outline ki-star text-base leading-none">
                                                </i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="rating-on ki-solid ki-star text-base leading-none">
                                                </i>
                                                <i class="rating-off ki-outline ki-star text-base leading-none">
                                                </i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="rating-on ki-solid ki-star text-base leading-none">
                                                </i>
                                                <i class="rating-off ki-outline ki-star text-base leading-none">
                                                </i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="rating-on ki-solid ki-star text-base leading-none">
                                                </i>
                                                <i class="rating-off ki-outline ki-star text-base leading-none">
                                                </i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-sm text-gray-800 font-normal">
                                        21 Oct, 2024
                                    </td>
                                    <td>
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-1.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png" />
                                            </div>
                                            <div class="flex">
                                                <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                                                    +10
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                                            <i class="ki-filled ki-notepad-edit">
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                                            <i class="ki-filled ki-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>

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

@endsection
