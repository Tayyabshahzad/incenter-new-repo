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
                        <h1
                            class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Manage Counties</h1>
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
                            <li class="breadcrumb-item text-muted">Counties</li>
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
                    <div id="kt_app_toolbar_container"
                        class="container-fluid d-flex justify-content-end mx-0 px-0 my-10">
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <!--begin::Secondary button-->
                           

                                <a href="#" class="btn btn-primary fw-semibold"
                                            data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_card">    Add Counties</a>
                            <!--end::Secondary button-->

                            <!--begin::Primary button-->
                            <a href="#" class="btn btn-sm fw-bold btn-primary">
                                Export CSV/XLS </a>
                            <!--end::Primary button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <div class="row my-4">
                        <div class="col-6">
                            <input type="text"
                                class="search-input form-control form-control border-0 h-lg-40px  ps-5"
                                name="search" value="" placeholder="Search by Counties "
                                data-kt-search-element="input">
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            
                        </div>
                    </div>
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Manage Counties</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table
                                    class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-dark fs-6">
                                            <th class="w-25px">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="1" data-kt-check="true"
                                                        data-kt-check-target=".widget-9-check">
                                                </div>
                                            </th>
                                            <th class="min-w-150px">County</th>
                                            <th class="min-w-150px">Tax Rate </th>
                                            <th class="min-w-150px">Deadline </th>
                                            <th class="min-w-150px">CLR    </th>
                                            <th class="min-w-150px">Modify</th> 
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>

                                        @foreach ($counties as $county )
                                            
                                      
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input widget-9-check"
                                                            type="checkbox" value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark text-hover-primary d-block fs-7"> {{  $county->country }}  </a>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark  text-hover-primary d-block fs-7">
                                                        {{  $county->tax_rate }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark  text-hover-primary d-block fs-7">
                                                        {{  $county->deadline }}             
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark  text-hover-primary d-block fs-7">
                                                        {{  $county->clr }}       
                                                    </a>
                                                </td>
                                                <td>
                                                   Edit
                                                </td>
                                            

                                            </tr>

                                        @endforeach
                                        
                                          
                                       

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
                <div class="modal fade" id="kt_modal_new_card" tabindex="-1" style="display: none;"
                    aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Add New County</h2>
                                <!--end::Modal title-->

                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary"
                                    data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="currentColor"></rect>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                        </svg>
                                    </span>
                                </div>
                                <!--end::Close-->
                            </div> 
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="post" action="{{  route('add.counties') }}">
                                    @csrf
                                    <!--begin::Input group-->
                                    <div class="row fv-row fv-plugins-icon-container">
                                        <!--begin::Col-->
                                        <div class="col-xl-6">
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Country</span>
                                            </label>
                                            <input type="text" name="country" required
                                                class="form-control bg-transparent">
                                            <div class="fv-plugins-message-container invalid-feedback">
                                            </div>

                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-xl-6">
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Tax Rate</span>
                                            </label>
                                            <input type="text" name="tax_rate" required
                                                class="form-control bg-transparent">
                                            <div class="fv-plugins-message-container invalid-feedback">
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-6">
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Dead Line</span>
                                            </label>
                                            <input type="date" name="deadline" required
                                                class="form-control bg-transparent">
                                            <div class="fv-plugins-message-container invalid-feedback">
                                            </div>
                                        </div>


                                         <!--begin::Col-->
                                         <div class="col-xl-6">
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">CLR</span>
                                            </label>
                                            <input type="text" name="clr" required
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
                                        <button type="submit" id="kt_modal_new_card_submit"
                                            class="btn btn-primary">
                                            <span class="indicator-label">
                                                Submit
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
     
    <!--end::Footer--> 
@endsection

 