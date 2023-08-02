@extends('layouts.consortia')

@section('page_css')
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

 
<!-- DataTables Buttons CSS -->
<link href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.bootstrap4.min.css" rel="stylesheet"> 
<script src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
<!-- Other JavaScript and Bootstrap JavaScript here -->
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
                        Review Properties</h1>
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
                        <li class="breadcrumb-item text-muted">Review Properties</li>
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
                <div class="row">
                    <!--begin::Col-->
                    
                    <!--end::Col-->
                    <!--begin::Col-->
                    
                    <!--end::Col-->

                </div>
                <div id="kt_app_toolbar_container"
                    class="container-fluid d-flex justify-content-end mx-0 px-0 my-10">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                         
                    </div>
                    <!--end::Actions-->
                </div>
                
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Review  Properties</span>
                        </h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table  class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="review_property">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bold text-dark fs-6"> 
                                        <th class="min-w-150px">Owner Legal Name</th>
                                        <th class="min-w-150px">Address </th>
                                        <th class="min-w-150px">Record Added</th>
                                        <th class="min-w-150px">Source</th>
                                        <th class="min-w-150px">Status</th>
                                        <th class="min-w-150px">House Estimate $</th>
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
            $('#review_property').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("review.properties") }}', // Replace "users.data" with your data route in Laravel
                columns: [
                    
                    { data: 'owner1fullname', name: 'owner1fullname' },
                    { data: 'owner1fullname', name: 'owner1fullname' },
                    { data: 'owner1fullname', name: 'owner1fullname' },
                    { data: 'owner1fullname', name: 'owner1fullname' },
                    { data: 'owner1fullname', name: 'owner1fullname' },
                    { data: 'owner1fullname', name: 'owner1fullname' },
                     
                     
                     
                ],
                dom: 'Bfrtip', // Add 'Bfrtip' to enable the buttons
                    buttons: [
                        'csv' // Add the "Export to CSV" button
                    ]
            });
            
            
        });

       
    </script>
@endsection    


 