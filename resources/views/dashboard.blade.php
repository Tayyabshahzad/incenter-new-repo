@extends('layouts.consortia')
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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Dashboard</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Dashboard</li>
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
                    <div class="row mb-4">  
                        <div class="col-12">
                            <div class="d-flex justify-content-between flex-column w-100% mx-auto mx-md-0 pt-3 pb-10">
                                 
                                <div class="mx-auto d-flex">
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center me-3">
                                         
                                        <div class="fs-5 fw-semibold text-dark"> <h2> Total Properties ({{ $properties }}) </h2> </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center me-3">
                                         
                                        <div class="fs-5 fw-semibold text-dark"> <h2> Total Contracts Signed ({{ $total_contracts }}) </h2> </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center me-3">
                                         
                                        <div class="fs-5 fw-semibold text-dark"> <h2> Total Savings ({{ $total_savings }}) </h2> </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Recent Import List</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="recent_import_properties">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-dark fs-6">  
                                            <th class="min-w-100px">Source</th>
                                            <th class="min-w-150px">Date</th>
                                            <th class="min-w-150px">Imported By</th>
                                            <th class="min-w-150px">Total Imported Properties</th>
                                            <th class="min-w-150px">Successfully Imported</th>
                                            <th class="min-w-150px">Un- Successfully Imported</th>
                                            <th class="min-w-50px text-end">Status</th>
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
        $('#recent_import_properties').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("import.properties") }}', // Replace "users.data" with your data route in Laravel
            columns: [ 
                { 
                        data: 'source.src', 
                        name: 'source.src',
                        render: function(data, type, full, meta) {
                                // Access the source ID data and display it in the table
                            return data;
                        }
                 },
                 { data: 'created_at', name: 'created_at' },

                 { 
                        data: 'user.name', 
                        name: 'user.name',
                        render: function(data, type, full, meta) {
                                // Access the source ID data and display it in the table
                            return data;
                        }
                 },

                 { 
                        data: 'user.name', 
                        name: 'user.name',
                        render: function(data, type, full, meta) {
                                // Access the source ID data and display it in the table
                            return '--';
                        }
                 },


                 { 
                        data: 'user.name', 
                        name: 'user.name',
                        render: function(data, type, full, meta) {
                                // Access the source ID data and display it in the table
                            return '--';
                        }
                 },


                 
                 { 
                        data: 'user.name', 
                        name: 'user.name',
                        render: function(data, type, full, meta) {
                                // Access the source ID data and display it in the table
                            return '--';
                        }
                 },


                 
                 { 
                        data: 'user.name', 
                        name: 'user.name',
                        render: function(data, type, full, meta) {
                                // Access the source ID data and display it in the table
                            return '--';
                        }
                 },


                 


                 
                  
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
