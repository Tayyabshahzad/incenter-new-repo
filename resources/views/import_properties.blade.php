@extends('layouts.consortia')
@section('page_css')

@endsection
@section('content') 
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
                    Import Properties</h1>
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
                    <li class="breadcrumb-item text-muted">Import Properties</li>
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
                                    {{ $total_properties }}
                                </span>
                                <!--end::Amount-->

                                <!--begin::Subtitle-->
                                <span class="text-white  pt-1 fw-semibold fs-3 text-center">Total
                                    Import Properties</span>
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
                                <span
                                    class="fs-2hx fw-bold text-white mb-4 me-2 lh-1 ls-n2 text-center">   {{ $boa_properties }}
                                </span>
                                <!--end::Amount-->

                                <!--begin::Subtitle-->
                                <span class="text-white  pt-1 fw-semibold fs-3 text-center">BOA
                                    Imported Source</span>
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
                                <span
                                    class="fs-2hx fw-bold text-white mb-4 me-2 lh-1 ls-n2 text-center"> {{ $citi_bank_properties }}
                                </span>
                                <!--end::Amount-->

                                <!--begin::Subtitle-->
                                <span class="text-white  pt-1 fw-semibold fs-3 text-center">Citi
                                    Bank Imported Source</span>
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
            <div class="d-flex justify-content-center mb-10">
                <a href="#" class="btn btn-primary mb-2 me-3" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_new_card"> Import Properties</a>
                    <a href="{{ asset('assets/sample-import.xlsx') }}"  download="Property-Import-Sample.xlsx" class="btn btn-dark me-2 mb-2"><i
                        class="bi bi-cloud-download fs-3 pe-2"></i>Download Sample Format
                    </a>
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
                        <table  class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="property-table">
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
<div class="modal fade" id="kt_modal_new_card" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Import Properties</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor"></rect>
                        </svg>
                    </span>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <div class="row">
                    <div class="col-12 text-end">
                        
                    </div>
                </div>
                <!--begin::Form-->
                <form   class="form fv-plugins-bootstrap5 fv-plugins-framework"  id="uploadForm" enctype="multipart/form-data">
                    @csrf
                    
                    <!--begin::Input group-->
                    <div class="row fv-row fv-plugins-icon-container">
                        <div class="col-xl-12">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">
                                    Source
                                </span>
                            </label>
                            <select name="source"  id="source" class="form-select form-select-solid" data-control="select2"
                                data-hide-search="true">
                                <option value="" selected>SELECT</option>
                                <option value="boa">BOA</option>
                                <option value="citi_bank">Citi Bank</option>   
                            </select>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Browse Upload File</span>
                            </label>
                            <input type="file" name="file"  id="fileInput" class="form-control bg-transparent" required> 
                            <div class="fv-plugins-message-container"> Supported Format CSV/XLS/SLSX
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div id="response" class="text-center p-5"></div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">  
                        <button type="button" id="uploadBtn" class="btn btn-primary">
                            Upload
                        </button>
                        <div class="spinner-border text-danger loader d-none" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
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
@endsection
@section('page_js')  
<script>
    $(document).ready(function() {
        $('#property-table').DataTable({
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
                 { data: 'create_date', name: 'create_date' },

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
    
<script>  
        $(document).ready(function () {
            $('#uploadBtn').on('click', function () { 
                $('.loader').removeClass('d-none')
                $('#uploadBtn').addClass('d-none')
                const optionSelect = document.getElementById('source');
                const fileInput = document.getElementById('fileInput');

                if (optionSelect.value === '' || fileInput.files.length === 0) {
                     alert('Please select an option and choose a file before uploading.');
                     $('.loader').addClass('d-none')
                     $('#uploadBtn').removeClass('d-none')
                     return;
                }
                let formData = new FormData($('#uploadForm')[0]);

                $.ajax({
                    url: '{{ route("import.properties.via.excel") }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function (xhr) {
                        $('.loader').removeClass('d-none')
                        $('#uploadBtn').addClass('d-none')
                    },
                    success: function (response) { 
                         $('.loader').addClass('d-none')
                         $('#uploadBtn').removeClass('d-none')
                        // Handle the successful response from the server
                        $('#response').text(response.message + ' Page Reloading ...... ');
                        if(response.status == false){
                            $('#response').addClass('alert alert-danger')
                        }else{
                            $('#response').addClass('alert alert-success')
                        }
                        setTimeout(function () {
                        location.reload();
                        }, 2000); // 5000 milliseconds = 5 seconds
                       
                    },
                    error: function (xhr, status, error) {
                         $('.loader').addClass('d-none')
                         $('#uploadBtn').removeClass('d-none')
                        // Handle the error response from the server
                        $('#response').text('Error: ' + xhr.responseText);
                    },
                    complete: function () {

                        // Any cleanup or UI changes after the request completes
                    }
                });
            });
        });


    
</script>


@endsection

 