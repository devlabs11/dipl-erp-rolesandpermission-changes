<!--begin::Menu-->
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
    id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">






    <div class="menu-item">
        <a class="menu-link href="{{ URL::to('dashboard') }}">
            <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect x="2" y="2" width="9" height="9" rx="2"
                            fill="black" />
                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                            fill="black" />
                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                            fill="black" />
                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Dashboards</span>
        </a>
    </div>


    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class="fa fa-user fa-2x" style="color:green"></i>
                </span>
                <span class="menu-title">ACL</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                @can('role-show')
                    <div class="menu-item">
                        <a class="menu-link" href="/showRoles">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles</span>
                        </a>
                    </div>
                    @endcan
                    @can('permission-show')
                    <div class="menu-item">
                        <a class="menu-link" href="/showPermission">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Permissions</span>
                        </a>
                    </div>
                    @endcan

                    <div class="menu-item">
                        <a class="menu-link" href="/showroles_and_permission">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles Has Permissions</span>
                        </a>
                    </div>

            </div>
        </div>





    
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class="fa fa-database fa-2x" aria-hidden="true" style="color:rgb(145, 129, 249)"></i>
                </span>
                <span class="menu-title">Master</span>
                <span class="menu-arrow"></span>
            </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Company Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('master/2') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Site Master</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('company') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Company Master</span>
                                    </a>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Material Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('material') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Material Master</span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('rmcategory') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">RM Category</span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('rmproductcategory') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">RM Product Category</span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('unit') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Unit Master</span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('spare') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Spare Master</span>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Job Order Setup</span>
                            <span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('product-size-master') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Product Size Master</span>
                                    </a>
                                </div>
                           
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Product Description Master</span>
                                            <span class="menu-arrow"></span>
                                        </span>

                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{ route('product-description') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Parent Description Master</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{ route('product-sub-description') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sub Description Master</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{ route('product-item-description') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Description</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('job-card-type') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Job Card Type Master</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('productcategory') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Product Category Master</span>

                                </a>
                                </div>
                        </div>

                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('product') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Product Master</span>

                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('master/6') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Ink Make</span>

                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('master/7') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Paper Make</span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('master/9') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Gum Make</span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('master/10') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Colors</span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('master/8') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Color Shades</span>
                                    </a>
                                </div>
                            </div>
                       
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('master/11') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Paper Color Shade</span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('advance-feature') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Advance Printing Security Feature Master</span>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Production Process Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('process-category') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Process Category</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('process') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Process Master</span>
                                    </a>
                                </div>
                        </div>

                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('qcmaster') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Process QC Master</span>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Machine Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('machine') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Machine Master</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Accounts Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('tax-master') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">GST</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('tax-structure-master') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tax Structure Master</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('excise') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Excise</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('tax') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tax</span>
                                    </a>
                                </div>
                        </div>
                    </div>

                </div>

                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Party Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('prospect-master') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Prospect Master</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('customer') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Customer</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('transport') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Transport</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">User Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('user-operator') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User Operator</span>
                                    </a>
                                </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('sales-master') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sales Master</span>
                                </a>
                            </div>

                            @can('show-user')
                            <div class="menu-item">
                                <a class="menu-link" href="/showUsers">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Users</span>
                                </a>
                            </div>
                            @endcan

               
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('role') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Role</span>
                                </a>
                            </div>

                       

                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('master/3') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Designation</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('master/4') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Position</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">General Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('terms-condition-master') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Terms and Condition Master</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('master/1') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Country</span>

                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('state') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">State</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('city') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">City</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    

    
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class='fas fa-search-dollar fa-2x' style="color:rgb(91, 240, 240)"></i>
                </span>
                <span class="menu-title">Sales</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
               
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('quotation-master') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Quotation</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ URL::to('quotation') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Old Quotation</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('proforma-invoice') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Manage Proforma Invoice</span>
                        </a>
                    </div>


            </div>
        </div>


    
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class="fa fa-suitcase fa-2x" style="color:rgb(226, 43, 202)"></i>
                </span>
                <span class="menu-title">Jobs</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ URL::to('jobcard') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Manage Job Card</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link" href="{{ URL::to('salesworkorder') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Manage Sales Work Order</span>
                        </a>
                    </div>

            </div>
        </div>


        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class="fas fa-receipt fa-2x text-success"></i>
                </span>
                <span class="menu-title">FG & Challan</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="display: none; overflow: hidden;">
                {{-- <div class="menu-item">
                                            <a class="menu-link" href="{{ route('fg-entry') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add FG Entry</span>
                                            </a>
                                        </div> --}}
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('fg-entry') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Manage Finished Goods</span>
                    </a>
                </div>
                















                {{-- <div class="menu-item">
                                            <a class="menu-link" href="{{ route('challan') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Manage Challan</span>
                                            </a>
                                        </div> --}}
                {{-- <div class="menu-item">
                                            <a class="menu-link" href="{{ route('fg-entry') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Invoice Master</span>
                                            </a>
                                        </div> --}}
                {{-- <div class="menu-item">
                                            <a class="menu-link" href="{{ route('fg-entry') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Purchase Order</span>
                                            </a>
                                        </div> --}}
                {{-- <div class="menu-item">
                                            <a class="menu-link" href="{{ route('fg-entry') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Debit Note</span>
                                            </a>
                                        </div> --}}
                {{-- <div class="menu-item">
                                            <a class="menu-link" href="{{ route('fg-entry') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Credit Note</span>
                                            </a>
                                        </div> --}}
            </div>
        </div>
   
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class="fas fa-file-contract fa-2x text-danger"></i>
                </span>
                <span class="menu-title">Sales-Contract</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="display: none; overflow: hidden;">
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('sales-contract') }}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Manage Sales Contract</span>
                    </a>
                </div>
            </div>
        </div>
</div>
<!--end::Menu-->