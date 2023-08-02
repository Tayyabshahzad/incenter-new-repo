@extends('layouts.consortia')
@section('page_css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js" integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1
                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Manage Users</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="dashboard.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Manage Users</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row justify-content-center align-items-center">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 17-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Title-->
                                    <h4 class="fw-bold text-gray-800 m-0">Employees</h4>
                                    <!--end::Title-->
                                </div> 
                              
                                <!--begin::Content-->
                                <div class="text-center w-100 position-relative z-index-1"    >
                                
                                    <!--begin::Action-->
                                    <div class="mb-9 mb-xxl-1">
                                        <a href="#" class="btn btn-primary fw-semibold"
                                            data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_card">Add New Users</a>

                                            <h2 class="mt-10">
                                                Total Users : {{ $users->count() }}
                                            </h2>
                                    </div>
                                    <!--ed::Action-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->

                            <!--begin::Footer-->
                            <div class="card-footer d-flex flex-center py-5">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center flex-shrink-0">
                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <span class="fw-semibold text-gray-400 fs-6">Total Employees</span>
                                    <!--end::Label-->
                                </div>
                                <!--ed::Item-->
                            </div>
                            <!--ed::Info-->
                        </div>
                        <!--end::Mixed Widget 17-->
                    </div>
                    <!--end::Col-->
                </div>


                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">User Lists</span>
                        </h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table   class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="user_table">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bold text-dark fs-6"> 
                                        <th class="min-w-150px">Name</th>
                                        <th class="min-w-150px">Email</th>
                                        <th class="min-w-150px">Join Date</th>
                                        <th class="min-w-150px">Action</th> 
                                    </tr>
                                </thead>  
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>


            </div>
            <div class="modal fade" id="kt_modal_new_card" tabindex="-1" style="display: none;"
                aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Add New User</h2>
                            <!--end::Modal title-->

                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary"
                                data-bs-dismiss="modal">
                                <span class="svg-icon svg-icon-1">
                                     x
                                </span>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->

                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form   method="post"   class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('addUser') }}">
                                <!--begin::Input group-->
                                @csrf
                                <div class="row fv-row fv-plugins-icon-container">
                                    <!--begin::Col-->
                                    <div class="col-xl-6">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">First Name</span>
                                        </label>
                                        <input type="text" name="name" required
                                            class="form-control bg-transparent">
                                        <div class="fv-plugins-message-container invalid-feedback">
                                        </div>

                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-6">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Last Name</span>
                                        </label>
                                        <input type="text" name="last_name" required
                                            class="form-control bg-transparent">
                                        <div class="fv-plugins-message-container invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-6">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Email</span>
                                        </label>
                                        <input type="email" name="email"  required
                                            class="form-control bg-transparent">
                                        <div class="fv-plugins-message-container invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Password</span>
                                        </label>
                                        <input type="password" name="password"  required
                                            class="form-control bg-transparent">
                                        <div class="fv-plugins-message-container invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                     
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                     

                                    <button type="submit"  
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer">
        <!--begin::Footer container-->
        <div
            class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 justify-content-center text-center">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-dark fw-bold fs-5 me-1">&copy;Copyright 2023. All rights reserved by
                    <a href="#" class="purple-color" target="_blank">Incenter Tax Solutions.</a></span>
            </div>
            <!--end::Copyright-->
        </div>
        <!--end::Footer container-->
    </div>
    <!--end::Footer-->
</div>
@endsection

@section('page_js')
<script>
    $(document).ready(function() {
        $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("manageusers") }}', // Replace "users.data" with your data route in Laravel
            columns: [ 
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action',orderable: false, searchable: false },


                 


                 
                  
                // Add more columns as needed
            ],
            dom: 'Bfrtip', // Add 'Bfrtip' to enable the buttons
                buttons: [
                    'csv' // Add the "Export to CSV" button
                ]
        });
    });
</script>
@endsection

 