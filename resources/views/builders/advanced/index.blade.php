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
         <input class="input input-sm ps-8" data-datatable-search="#teams_table" placeholder="Search Teams" type="text"/>
        </div>
        <label class="switch switch-sm">
         <input class="order-2" name="check" type="checkbox" value="1"/>
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
             <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox"/>
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
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1"/>
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
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-1.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png"/>
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="2"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Marketing Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Developing campaigns, market analysis
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             15 Oct, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] uppercase text-warning-inverse ring-warning-light bg-warning">
                g
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="3"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               HR Department
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Talent acquisition, employee welfare
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
             10 Oct, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-1.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                +A
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="4"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Sales Division
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Customer relations, sales strategy execution
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
             05 Oct, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-24.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-7.png"/>
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="5"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               IT Support
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Maintaining IT infrastructure, user support
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
              <div class="rating-label">
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
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                +s
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="6"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Research and Development
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Innovating and developing new products
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             28 Sep, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-3.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-6.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-warning-inverse ring-warning-light bg-warning">
                +4
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="7"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Finance Department
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Managing company finances
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
             22 Sep, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-8.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-9.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                +8
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="8"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Operations Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Ensuring smooth day-to-day operations
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
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             15 Sep, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-10.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-11.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                +5
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="9"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Legal Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Handling all legal matters
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
             10 Sep, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-12.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-13.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-warning-inverse ring-warning-light bg-warning">
                +7
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="10"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Customer Service
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Providing customer support and assistance
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             05 Sep, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-14.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-15.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                +3
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="11"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Procurement Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Sourcing and purchasing materials
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             30 Aug, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-16.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-17.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                +6
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="12"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Quality Assurance
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Ensuring product quality
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
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             25 Aug, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-18.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-19.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                +2
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="13"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Logistics Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Managing supply chain and distribution
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
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             20 Aug, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-20.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-21.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-warning-inverse ring-warning-light bg-warning">
                +9
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="14"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Design Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Creating visual content and UI designs
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
             15 Aug, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-22.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-23.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                +4
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="15"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Technical Writing
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Documenting product features and guides
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             10 Aug, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-24.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-25.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                +3
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="16"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Data Analytics
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Analyzing data and generating insights
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
             05 Aug, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-26.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-27.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                +6
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="17"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Security Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Ensuring data and system security
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             30 Jul, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-28.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-29.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                +2
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="18"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Admin Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Handling administrative tasks
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             25 Jul, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-30.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-31.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-warning-inverse ring-warning-light bg-warning">
                +3
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="19"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Customer Relations
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Managing customer interactions
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
             20 Jul, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-32.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-33.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                +7
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="20"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Training Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Training employees on new systems
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
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             15 Jul, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-34.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-1.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                +5
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="21"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Project Management
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Managing company projects
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
             10 Jul, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-3.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                +8
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="22"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Business Analysis
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Analyzing business processes
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             05 Jul, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-5.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-warning-inverse ring-warning-light bg-warning">
                +4
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="23"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Corporate Communications
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Managing internal and external communications
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
             30 Jun, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-6.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-7.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                +6
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="24"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Compliance Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Ensuring regulatory compliance
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
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             25 Jun, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-8.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-9.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                +7
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="25"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Risk Management
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Identifying and managing risks
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
             20 Jun, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-10.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-11.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-warning-inverse ring-warning-light bg-warning">
                +5
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="26"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Strategy Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Developing and implementing strategies
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
             15 Jun, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-12.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-13.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                +6
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="27"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Executive Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Leading the company
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
             10 Jun, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-14.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-15.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                +8
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="28"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Social Media Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Managing social media channels
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             05 Jun, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-16.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-17.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                +4
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="29"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Supply Chain Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Overseeing the supply chain
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
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
              <div class="rating-label">
               <i class="rating-on ki-solid ki-star text-base leading-none">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             30 May, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-18.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-19.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-warning-inverse ring-warning-light bg-warning">
                +5
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
           <tr>
            <td class="text-center">
             <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="30"/>
            </td>
            <td>
             <div class="flex flex-col gap-1.5">
              <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
               Content Team
              </a>
              <span class="text-2sm text-gray-700 font-normal">
               Creating and managing content
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
              <div class="rating-label indeterminate">
               <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
               </i>
               <i class="rating-off ki-outline ki-star text-base leading-none">
               </i>
              </div>
             </div>
            </td>
            <td class="text-sm text-gray-800 font-normal">
             25 May, 2024
            </td>
            <td>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-20.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-21.png"/>
              </div>
              <div class="flex">
               <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                +3
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
     <div class="card">
      <div class="card-header">
       <h3 class="card-title">
        FAQ
       </h3>
      </div>
      <div class="card-body py-3">
       <div data-accordion="true" data-accordion-expand-all="true">
        <div class="accordion-item [&:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
         <button class="accordion-toggle py-4" data-accordion-toggle="#faq_1_content">
          <span class="text-base text-gray-900">
           How is pricing determined for each plan ?
          </span>
          <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
          </i>
          <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
          </i>
         </button>
         <div class="accordion-content hidden" id="faq_1_content">
          <div class="text-gray-700 text-md pb-4">
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
          Understanding the factors influencing each plan's pricing helps you make an informed decision. 
          Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
          Understanding the factors influencing each plan's pricing helps you make an informed decision.
          Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
          Understanding the factors influencing each plan's pricing helps you make an informed decision
          </div>
         </div>
        </div>
        <div class="accordion-item [&:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
         <button class="accordion-toggle py-4" data-accordion-toggle="#faq_2_content">
          <span class="text-base text-gray-900">
           What payment methods are accepted for subscriptions ?
          </span>
          <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
          </i>
          <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
          </i>
         </button>
         <div class="accordion-content hidden" id="faq_2_content">
          <div class="text-gray-700 text-md pb-4">
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
          Understanding the factors influencing each plan's pricing helps you make an informed decision
          </div>
         </div>
        </div>
        <div class="accordion-item [&:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
         <button class="accordion-toggle py-4" data-accordion-toggle="#faq_3_content">
          <span class="text-base text-gray-900">
           Are there any hidden fees in the pricing ?
          </span>
          <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
          </i>
          <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
          </i>
         </button>
         <div class="accordion-content hidden" id="faq_3_content">
          <div class="text-gray-700 text-md pb-4">
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
          Understanding the factors influencing each plan's pricing helps you make an informed decision
          </div>
         </div>
        </div>
        <div class="accordion-item [&:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
         <button class="accordion-toggle py-4" data-accordion-toggle="#faq_4_content">
          <span class="text-base text-gray-900">
           Is there a discount for annual subscriptions ?
          </span>
          <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
          </i>
          <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
          </i>
         </button>
         <div class="accordion-content hidden" id="faq_4_content">
          <div class="text-gray-700 text-md pb-4">
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
          Understanding the factors influencing each plan's pricing helps you make an informed decision
          </div>
         </div>
        </div>
        <div class="accordion-item [&:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
         <button class="accordion-toggle py-4" data-accordion-toggle="#faq_5_content">
          <span class="text-base text-gray-900">
           Do you offer refunds on subscription cancellations ?
          </span>
          <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
          </i>
          <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
          </i>
         </button>
         <div class="accordion-content hidden" id="faq_5_content">
          <div class="text-gray-700 text-md pb-4">
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
          Understanding the factors influencing each plan's pricing helps you make an informed decision
          </div>
         </div>
        </div>
        <div class="accordion-item [&:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
         <button class="accordion-toggle py-4" data-accordion-toggle="#faq_6_content">
          <span class="text-base text-gray-900">
           Can I add extra features to my current plan ?
          </span>
          <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
          </i>
          <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
          </i>
         </button>
         <div class="accordion-content hidden" id="faq_6_content">
          <div class="text-gray-700 text-md pb-4">
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
          Understanding the factors influencing each plan's pricing helps you make an informed decision
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5">
      <div class="card">
       <div class="card-body px-10 py-7.5 lg:pr-12.5">
        <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
         <div class="flex flex-col items-start gap-3">
          <h2 class="text-1.5xl font-medium text-gray-900">
           Questions ?
          </h2>
          <p class="text-sm text-gray-800 leading-5.5 mb-2.5">
           Visit our Help Center for detailed assistance on billing, payments, and subscriptions.
          </p>
         </div>
         <img alt="image" class="dark:hidden max-h-[150px]" src="assets/media/illustrations/29.svg"/>
         <img alt="image" class="light:hidden max-h-[150px]" src="assets/media/illustrations/29-dark.svg"/>
        </div>
       </div>
       <div class="card-footer justify-center">
        <a class="btn btn-link" href="">
         Go to Help Center
        </a>
       </div>
      </div>
      <div class="card">
       <div class="card-body px-10 py-7.5 lg:pr-12.5">
        <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
         <div class="flex flex-col items-start gap-3">
          <h2 class="text-1.5xl font-medium text-gray-900">
           Contact Support
          </h2>
          <p class="text-sm text-gray-800 leading-5.5 mb-2.5">
           Need assistance? Contact our support team for prompt, personalized help your queries & concerns.
          </p>
         </div>
         <img alt="image" class="dark:hidden max-h-[150px]" src="assets/media/illustrations/31.svg"/>
         <img alt="image" class="light:hidden max-h-[150px]" src="assets/media/illustrations/31-dark.svg"/>
        </div>
       </div>
       <div class="card-footer justify-center">
        <a class="btn btn-link" href="https://devs.keenthemes.com/unresolved">
         Contact Support
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- End of Container -->

@endsection
