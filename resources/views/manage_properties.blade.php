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
                            Manage Properties</h1>
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
                            <li class="breadcrumb-item text-muted">Manage Properties</li>
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
                        <div class="col-lg-4 h-50">
                            <!--begin::Card widget 20-->
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                                style="background-color: #ffa420">
                                <!--begin::Header-->
                                <div class="card-header p-5 d-flex justify-content-center">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column align-items-center">
                                        <img src="{{ asset('assets/consortia/house.png') }}" alt="" width="80"
                                            height="80" srcset="" class="mb-5 text-center"> 
                                            
                                        <!--begin::Amount-->
                                        <span
                                            class="fs-2hx fw-bold text-white mb-4 me-2 lh-1 ls-n2 text-center"> 
                                            {{ $properties->count() }}
                                        </span>
                                        <!--end::Amount-->

                                        <!--begin::Subtitle-->
                                        <span class="text-white  pt-1 fw-semibold fs-3 text-center">Total
                                            Properties</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->

                            </div>
                            <!--end::Card widget 20-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-4 h-50">
                            <!--begin::Card widget 20-->
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                                style="background-color:#ffa420">
                                <!--begin::Header-->
                                <div class="card-header p-5 d-flex justify-content-center">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column align-items-center">
                                        <img src="{{ asset('assets/consortia/house.png') }}" alt="" width="80"
                                            height="80" srcset="" class="mb-5 text-center">
                                        <!--begin::Amount-->
                                        <span   class="fs-2hx fw-bold text-white mb-4 me-2 lh-1 ls-n2 text-center">
                                                {{ $properties_verified }}
                                        </span>
                                        <!--end::Amount-->

                                        <!--begin::Subtitle-->
                                        <span class="text-white  pt-1 fw-semibold fs-3 text-center">Verified
                                            Properties</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->

                            </div>
                            <!--end::Card widget 20-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-4 h-50">
                            <!--begin::Card widget 20-->
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                                style="background-color:#ffa420">
                                <!--begin::Header-->
                                <div class="card-header p-5 d-flex justify-content-center">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column align-items-center">
                                        <img src="{{ asset('assets/consortia/house.png') }}" alt="" width="80"
                                            height="80" srcset="" class="mb-5 text-center">
                                        <!--begin::Amount-->
                                        <span  class="fs-2hx fw-bold text-white mb-4 me-2 lh-1 ls-n2 text-center"> 
                                            {{ $properties_unverified }}
                                        </span>
                                        <!--end::Amount-->

                                        <!--begin::Subtitle-->
                                        <span
                                            class="text-white  pt-1 fw-semibold fs-3 text-center">Un-Verified
                                            Properties</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->

                            </div>
                            <!--end::Card widget 20-->
                        </div>
                        <!--end::Col-->

                    </div>
                    <div id="kt_app_toolbar_container"
                        class="container-fluid d-flex justify-content-end mx-0 px-0 my-10">
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <!--begin::Secondary button-->
                            <a href="#"
                                class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary">
                                Force Update </a>
                            <!--end::Secondary button-->

                           
                        </div>
                        <!--end::Actions-->
                    </div>
                    <div class="row my-4">
                        
                        <div class="col-12 d-flex justify-content-end">
                            <div class="m-0" data-select2-id="select2-data-128-y22s">
                                <!--begin::Menu toggle-->
                                <a href="#"
                                    class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    Filter
                                </a>
                               
                                <button   type="button"  class="run_propmix  btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"  >
                                    Get Properties Status
                                </button>

                                <!--end::Menu toggle-->



                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                    data-kt-menu="true" id="kt_menu_645e6f43e2248"
                                    data-select2-id="select2-data-kt_menu_645e6f43e2248" style="">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Form-->
                                    <div class="px-7 py-5" data-select2-id="select2-data-127-8k3l">
                                        <!--begin::Input group-->
                                        <div class="mb-10" data-select2-id="select2-data-126-wazi">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="role" class="form-select form-select-solid mb-3"
                                                data-control="select2" data-hide-search="true">
                                                <option value="Verified" selected>Verified</option>
                                                <option value="Un Verified">Un Verified</option>
                                            </select>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">House
                                                Estimate</label>
                                            <!--end::Label-->
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <input type="number" name="start" value=""
                                                        placeholder="Start Amount"
                                                        class="form-control bg-transparent">
                                                </div>
                                                <div class="col-12">
                                                    <input type="number" name="end" value=""
                                                        placeholder="End Amount"
                                                        class="form-control bg-transparent">
                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>

                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Manage Properties</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table  class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="property-table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-dark fs-6"> 
                                            <th class="min-w-150px"> Owner Full Name</th>
                                            <th class="min-w-150px"> Address </th>
                                            <th class="min-w-150px"> State</th>
                                            <th class="min-w-150px"> County</th>
                                            <th class="min-w-150px"> CLR</th>
                                            <th class="min-w-150px"> Assessment</th>
                                            <th class="min-w-150px"> Assessed Market Value </th>
                                            <th class="min-w-150px"> Assessed Market Value (Propmix)</th>
                                            <th class="min-w-150px"> Status </th>
                                            <th class="min-w-150px"> Details </th>  
                                        </tr>
                                    </thead> 
                                    <tbody>
 
                                    </tbody>
                                    <!--end::Table body-->
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

        

         <div class="modal fade bd-example-modal-lg" id="kt_modal_property_details" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content" style="padding:50px">

               
                    <table class="table table-hover table-striped" id="fetch_property_table">
                        <thead>
                            <tr>
                                <th style="font-weight: bold" >Date</th>
                                <th style="font-weight: bold">Post Code</th>
                                <th style="font-weight: bold">Unique Id</th>
                                <th style="font-weight: bold">Type</th>
                                <th style="font-weight: bold"> Current Tax</th>
                            </tr>
                        </thead>

                        <tbody></tbody>
                    </table>
              </div>
            </div>
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
            $('#property-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("manage.properties") }}', // Replace "users.data" with your data route in Laravel
                columns: [
                    
                    { data: 'owner1fullname', name: 'owner1fullname' },
                    { data: 'address', name: 'address' },   
                    { data: 'state', name: 'state' },   
                    { data: 'county', name: 'county' },    
                    { data: 'clr_if_any', name: 'clr_if_any' },
                    { data: 'assessment', name: 'assessment' },
                    { data: 'assessed_market_value', name: 'assessed_market_value' },  
                    { data: 'estimated_market_value_api', name: 'estimated_market_value_api' },               
                    { data: 'status', name: 'status' },
                    { data: 'view_details', name: 'view_details' },
                     
                ],
                dom: 'Bfrtip', // Add 'Bfrtip' to enable the buttons
                    buttons: [
                        'csv' // Add the "Export to CSV" button
                    ]
            });
            
            $('.run_propmix').click(function(){
                $(this).html('Loading .....')
                $.ajax({
                    type: 'GET',
                    url: "{{ route('propmix') }}", 
                    dataType: 'json', 
                    success:function(response) {
                        // Handle the response from the controller 
                        alert(response.message);
                        setTimeout(function () {
                        location.reload();
                        }, 500); 
                    },
                    error: function(xhr, status, error) {
                        alert(error);
                        console.log(xhr);

                        console.log(status);
                        console.log(error);
                    }
                });
                // Start updating progress bar
                
            });

            

            $(document).on('click', '.fetch_property', function() {
                var id = $(this).data('id'); 
                $.ajax({
                    type: 'GET',
                    url: "{{ route('fetch_property') }}", 
                    data: {
                        id: id
                    },
                    success:function(response) {
                        console.log(response.property)
                        $('#fetch_property_table tbody').empty();
                        var row = '<tr>' +
                        '<td>' + response.property.date + '</td>' +
                        '<td>' + response.property.postcode + '</td>' +
                        '<td>' + response.property.unique_id + '</td>' +
                        '<td>' + response.property.type + '</td>' +
                        '<td>' + response.property.current_taxes + '</td>' +
                        // Add other table data here
                        '</tr>';
                        $('#fetch_property_table tbody').append(row);
                    },
                    error: function(xhr, status, error) {
                        alert(error); 
                    }
                });
            });


            
           
        });

       
    </script>
@endsection    

 