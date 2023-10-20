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

    {{-- Master --}}
    @php
        $site = \Helper::getPermission('common-list') ? 1 : 0; //master url
        $company = \Helper::getPermission('company-list') ? 1 : 0;

        $mm = \Helper::getPermission('mm-list') ? 1 : 0;
        $rm_category = \Helper::getPermission('rm-category-list') ? 1 : 0;
        $rm_product_category = \Helper::getPermission('rm-product-category-list') ? 1 : 0;
        $um_category = \Helper::getPermission('um-category-list') ? 1 : 0;
        $sm_category = \Helper::getPermission('sm-category-list') ? 1 : 0;

        $prospect_master = \Helper::getPermission('prospect-master-list') ? 1 : 0;
        $customer = \Helper::getPermission('customer-list') ? 1 : 0;
        $transport = \Helper::getPermission('transport-list') ? 1 : 0;

        $product_size = \Helper::getPermission('product-size-m-list') ? 1 : 0;
        $p_desc = \Helper::getPermission('parent-description-m-list') ? 1 : 0;
        $s_desc = \Helper::getPermission('sub-description-m-list') ? 1 : 0;
        $desc = \Helper::getPermission('description-list') ? 1 : 0;

        $jc_type = \Helper::getPermission('jc-type-m-list') ? 1 : 0;
        $product_cat = \Helper::getPermission('product-category-m-list') ? 1 : 0;
        $product = \Helper::getPermission('product-m-list') ? 1 : 0;
        $ink = \Helper::getPermission('common-list') ? 1 : 0;//master url
        $paper_make = \Helper::getPermission('common-list') ? 1 : 0;//master url
        $gum_make = \Helper::getPermission('common-list') ? 1 : 0;//master url
        $colors = \Helper::getPermission('common-list') ? 1 : 0;//master url
        $color_shade = \Helper::getPermission('common-list') ? 1 : 0;//master url
        $paper_color_shade = \Helper::getPermission('common-list') ? 1 : 0; //master url
        $advance_security_feature = \Helper::getPermission('advance-security-feature-list') ? 1 : 0;

        $process_cat = \Helper::getPermission('process-category-list') ? 1 : 0;
        $process_master = \Helper::getPermission('process-m-list') ? 1 : 0;
        $process_qc = \Helper::getPermission('process-qc-m-list') ? 1 : 0;

        $machine = \Helper::getPermission('machine-m-list') ? 1 : 0;

        $gst = \Helper::getPermission('gst-list') ? 1 : 0;
        $tax_structure = \Helper::getPermission('tax-structure-m-list') ? 1 : 0;
        $excise = \Helper::getPermission('excise-list') ? 1 : 0;
        $tax = \Helper::getPermission('tax-list') ? 1 : 0;

        $operator = \Helper::getPermission('operator-list') ? 1 : 0;
        $sales_m = \Helper::getPermission('sales-m-list') ? 1 : 0;
        $users = \Helper::getPermission('users-list') ? 1 : 0;
        $role = \Helper::getPermission('role-list') ? 1 : 0;
        $designation = \Helper::getPermission('common-list') ? 1 : 0; //master url
        $position = \Helper::getPermission('common-list') ? 1 : 0; //master url

        $tc_m = \Helper::getPermission('tc-m-list') ? 1 : 0;
        $country = \Helper::getPermission('common-list') ? 1 : 0; //master url
        $state = \Helper::getPermission('state-list') ? 1 : 0;
        $city = \Helper::getPermission('city-list') ? 1 : 0;

    @endphp

    {{-- Master --}}
    @if ($site==1 || $company==1 || $mm==1 || $rm_category==1 || $rm_product_category==1 || $um_category==1 || $sm_category==1 || $advance_security_feature == 1 || $product_size==1 || $p_desc==1 || $s_desc==1 || $desc==1 || $jc_type==1||$product_cat==1 || $product==1 || $ink==1 || $paper_make==1 || $gum_make==1 || $colors==1 || $color_shade==1 || $paper_color_shade==1 || $process_cat==1 || $process_master==1 || $process_qc==1 || $machine == 1 ||  $gst==1 ||  $tax_structure==1 ||  $excise==1 ||  $tax==1 || $prospect_master==1 || $customer == 1 || $transport == 1 || $operator == 1 || $sales_m ==1 || $users ==1 || $role ==1 || $designation ==1 || $position==1 || $tc_m ==1 || $country ==1 || $state ==1 || $city ==1)
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class="fa fa-database fa-2x" aria-hidden="true" style="color:rgb(145, 129, 249)"></i>
                </span>
                <span class="menu-title">Master</span>
                <span class="menu-arrow"></span>
            </span>
            {{-- Company Setup --}}
            @if ($site==1 || $company==1)
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
                            @if ($site==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('master/2') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Site Master</span>
                                    </a>
                                </div>
                            @endif

                            @if ($company==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('company') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Company Master</span>
                                    </a>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            @endif
            {{-- Company Setup END--}}

            {{-- Material Setup  --}}
            @if ($mm==1 || $rm_category==1 || $rm_product_category==1 || $um_category==1 || $sm_category==1)
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Material Setup</span>
                            <span class="menu-arrow"></span>
                        </span>
                        @if ($mm==1)
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
                        @endif
                        @if ($rm_category==1)
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
                        @endif
                        @if ($rm_product_category==1)
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
                        @endif
                        @if ($um_category==1)
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
                        @endif
                        @if ($sm_category==1)
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
                        @endif
                    </div>
                </div>
            @endif
            {{-- Material Setup END  --}}

            {{-- Job Order Setup --}}
            @if ($advance_security_feature == 1 || $product_size==1 || $p_desc==1 || $s_desc==1 || $desc==1 || $jc_type==1||$product_cat==1 || $product==1 || $ink==1 || $paper_make==1 || $gum_make==1 || $colors==1 || $color_shade==1 || $paper_color_shade==1)
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
                            @if ($product_size==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('product-size-master') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Product Size Master</span>
                                    </a>
                                </div>
                            @endif

                            @if ($p_desc==1 || $s_desc==1 || $desc==1)
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
                                            @if ($p_desc==1)
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{ route('product-description') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Parent Description Master</span>
                                                </a>
                                            </div>
                                            @endif
                                            @if ($s_desc==1)
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{ route('product-sub-description') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sub Description Master</span>
                                                </a>
                                            </div>
                                            @endif
                                            @if ($desc==1)
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{ route('product-item-description') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Description</span>
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ($jc_type==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('job-card-type') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Job Card Type Master</span>
                                    </a>
                                </div>
                            @endif
                            @if ($product_cat==1)
                                <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('productcategory') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Product Category Master</span>

                                </a>
                                </div>
                            @endif
                        </div>

                        @if ($product==1)
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
                        @endif
                        @if ($ink==1)
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
                        @endif
                        @if ($paper_make==1)
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
                        @endif
                        @if ($gum_make==1)
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
                        @endif
                        @if ($colors==1)
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
                        @endif
                        @if ($color_shade==1)
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
                        @endif
                        @if ($paper_color_shade==1)
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
                        @endif
                        @if ($advance_security_feature==1)
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
                        @endif
                    </div>
                </div>
            @endif
            {{-- Job Order Setup End --}}

            {{-- Production Process Setup --}}
            @if ($process_cat==1 || $process_master==1 || $process_qc==1)
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
                            @if ($process_cat==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('process-category') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Process Category</span>
                                    </a>
                                </div>
                            @endif

                            @if ($process_master==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('process') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Process Master</span>
                                    </a>
                                </div>
                            @endif
                        </div>

                        @if ($process_qc==1)
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
                        @endif
                    </div>
                </div>
            @endif
            {{--Production Process Setup End --}}

            {{-- Machine Setup --}}
            @if($machine == 1)
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
            @endif
            {{-- Machine Setup End--}}

            {{--  Accounts SetupStart--}}
            @if ( $gst==1 ||  $tax_structure==1 ||  $excise==1 ||  $tax==1)
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
                            @if ( $gst==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('tax-master') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">GST</span>
                                    </a>
                                </div>
                            @endif

                            @if ($tax_structure==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('tax-structure-master') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tax Structure Master</span>
                                    </a>
                                </div>
                            @endif

                            @if ($excise==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('excise') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Excise</span>
                                    </a>
                                </div>
                            @endif
                            @if ($tax==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ URL::to('tax') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tax</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            @endif
            {{-- Accounts Setup End --}}

            {{-- Party Setup Start --}}
            @if ($prospect_master==1 || $customer == 1 || $transport == 1)
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
                            @if ($prospect_master==1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('prospect-master') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Prospect Master</span>
                                </a>
                            </div>
                            @endif
                            @if ($customer == 1 )
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('customer') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Customer</span>
                                </a>
                            </div>
                            @endif
                            @if ($transport == 1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('transport') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Transport</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            {{-- Party Setup End --}}

            {{-- user  Start--}}
            @if($operator == 1 || $sales_m ==1 || $users ==1 || $role ==1 || $designation ==1 || $position==1)
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
                            @if($operator ==1)
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('user-operator') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User Operator</span>
                                    </a>
                                </div>
                            @endif
                            @if($sales_m ==1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('sales-master') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sales Master</span>
                                </a>
                            </div>
                            @endif
                            @if($users ==1 )
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('user') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Users</span>
                                </a>
                            </div>
                            @endif
                            @if($role ==1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('role') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Role</span>
                                </a>
                            </div>
                            @endif

                            @if($designation ==1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('master/3') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Designation</span>
                                </a>
                            </div>
                            @endif
                            @if($position==1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('master/4') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Position</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            {{-- user  End  --}}

            {{--  General Setup--}}
            @if($tc_m ==1 || $country ==1 || $state ==1 || $city ==1)
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
                            @if($tc_m ==1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('terms-condition-master') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Terms and Condition Master</span>
                                </a>
                            </div>
                            @endif
                            @if($country ==1 )
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('master/1') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Country</span>

                                </a>
                            </div>
                            @endif
                            @if($state ==1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('state') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">State</span>
                                </a>
                            </div>
                            @endif
                            @if($city ==1)
                            <div class="menu-item">
                                <a class="menu-link" href="{{ URL::to('city') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">City</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            {{--  General End--}}
        </div>
    @endif
    {{-- Master End --}}

    {{-- Sales --}}
    @php
        $quotation =  \Helper::getPermission('quotations-list') ? 1 : 0;
        $old_quotation = \Helper::getPermission('old-quotations-list') ? 1 : 0;
        $pi = \Helper::getPermission('pi-list') ? 1 : 0;
    @endphp

    @if ($quotation == 1 || $old_quotation == 1 || $pi == 1)
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class='fas fa-search-dollar fa-2x' style="color:rgb(91, 240, 240)"></i>
                </span>
                <span class="menu-title">Sales</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                @if ($quotation == 1)
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('quotation-master') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Quotation</span>
                        </a>
                    </div>
                @endif
                @if ($old_quotation == 1)
                    <div class="menu-item">
                        <a class="menu-link" href="{{ URL::to('quotation') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Old Quotation</span>
                        </a>
                    </div>
                @endif

                @if ($pi == 1)
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('proforma-invoice') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Manage Proforma Invoice</span>
                        </a>
                    </div>
                @endif


            </div>
        </div>
    @endif


    {{-- Jobs --}}
    @php
        $jc =  \Helper::getPermission('jc-list') ? 1 : 0;
        $so = \Helper::getPermission('so-list') ? 1 : 0;
    @endphp

    @if ($jc == 1 || $so == 1)
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-icon">
                    <i class="fa fa-suitcase fa-2x" style="color:rgb(226, 43, 202)"></i>
                </span>
                <span class="menu-title">Jobs</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                @if ($jc == 1)
                    <div class="menu-item">
                        <a class="menu-link" href="{{ URL::to('jobcard') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Manage Job Card</span>
                        </a>
                    </div>
                @endif

                @if ($so == 1)
                    <div class="menu-item">
                        <a class="menu-link" href="{{ URL::to('salesworkorder') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Manage Sales Work Order</span>
                            <!-- {{ URL::to('user') }} -->
                        </a>
                    </div>
                @endif

            </div>
        </div>
    @endif

    {{-- FG & Challan--}}
    @php
        $fg =  \Helper::getPermission('fg-list') ? 1 : 0;
        // $so = \Helper::getPermission('so-list') ? 1 : 0;
    @endphp

    @if ($fg == 1)
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
    @endif

    {{-- Sales Contract  --}}
    @php
        $sc =  \Helper::getPermission('sc-list') ? 1 : 0;
        // $so = \Helper::getPermission('so-list') ? 1 : 0;
    @endphp
    @if ($sc == 1)
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
    @endif
</div>
<!--end::Menu-->
