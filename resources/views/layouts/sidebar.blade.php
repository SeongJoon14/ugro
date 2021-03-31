<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- This project Menu Start -->
                <li>
                    <a href="/" class=" waves-effect">
                        <i class="bx bx-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">training</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cube "></i>
                        <span>Training System</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">The Gameplan</a></li>
                        <li><a class="ajax-menu" href="#lesson-overview-1">Phase 1: Product Selection</a>
                        </li>
                        <li><a class="ajax-menu" href="#lesson-overview-2">Phase 2: Store Creation</a>
                        </li>
                        <li><a class="ajax-menu" href="#lesson-overview-3">Phase 3: Facebook Ads</a></li>
                        <li><a class="ajax-menu" href="#lesson-overview-4">Phase 4: Scaling</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#playbook-overview" class=" waves-effect ajax-menu">
                        <i class="bx bx-cart"></i>
                        <span>Playbook</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-video "></i>
                        <span>Coaching Calls</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Call 1</a></li>
                        <li><a href="#">Call 2</a></li>
                    </ul>
                </li>

                <li class="menu-title">products</li>

                <li>
                    <a href="/ad-input" class="waves-effect">
                        <i class="bx bx-dock-left"></i>
                        <span>Potential Products</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bx-link "></i>
                        <span>My Products</span>
                    </a>
                </li>

                <li class="menu-title">tools</li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bx-video "></i>
                        <span>Elite Theme</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('fbad.index') }}" class=" waves-effect">
                        <i class="bx bx-cart"></i>
                        <span>Ad Library</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bx-trending-up "></i>
                        <span>Store Library</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bx-link "></i>
                        <span>Creative Assets</span>
                    </a>
                </li>

                <li class="menu-title"></li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bx-help-circle "></i>
                        <span>Help</span>
                    </a>
                </li>

                <li class="menu-title">Admin</li>
                <li>
                    <a href="{{ route('lesson_index') }}" class=" waves-effect">
                        <i class="fas fa-border-all"></i>
                        <span>Lessons Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('playbook_index') }}" class="waves-effect">
                        <i class="fas fa-border-all"></i>
                        <span>Playbooks Management</span>
                    </a>
                </li>



                <!-- This project Menu End -->

                {{-- Origin menu --}}
                @if (1 == 1)
                    <li class="menu-title">@lang('translation.Menu')</li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bx-home-circle"></i><span
                                class="badge badge-pill badge-info float-right">03</span>
                            <span>@lang('translation.Dashboard')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index">@lang('translation.Default')</a></li>
                            <li><a href="dashboard-saas">@lang('translation.Saas')</a></li>
                            <li><a href="dashboard-crypto">@lang('translation.Crypto')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>@lang('translation.Layouts')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="layouts-horizontal">@lang('translation.Horizontal')</a></li>
                            <li><a href="layouts-light-sidebar">@lang('translation.Light_Sidebar')</a></li>
                            <li><a href="layouts-compact-sidebar">@lang('translation.Compact_Sidebar')</a></li>
                            <li><a href="layouts-icon-sidebar">@lang('translation.Icon_Sidebar')</a></li>
                            <li><a href="layouts-boxed">@lang('translation.Boxed_Layout')</a></li>
                            <li><a href="layouts-preloader">@lang('translation.Preloader')</a></li>
                            <li><a href="layouts-colored-sidebar">@lang('translation.Colored_Sidebar')</a></li>
                            <li><a href="layouts-scrollable">@lang('translation.Scrollable')</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">@lang('translation.Apps')</li>

                    <li>
                        <a href="calendar" class=" waves-effect">
                            <i class="bx bx-calendar"></i>
                            <span>@lang('translation.Calendar')</span>
                        </a>
                    </li>

                    <li>
                        <a href="chat" class=" waves-effect">
                            <i class="bx bx-chat"></i>
                            <span class="badge badge-pill badge-success float-right">@lang('translation.New')</span>
                            <span>@lang('translation.Chat')</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span>@lang('translation.Ecommerce')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ecommerce-products">@lang('translation.Products')</a></li>
                            <li><a href="ecommerce-product-detail">@lang('translation.Product_Detail')</a></li>
                            <li><a href="ecommerce-orders">@lang('translation.Orders')</a></li>
                            <li><a href="ecommerce-customers">@lang('translation.Customers')</a></li>
                            <li><a href="ecommerce-cart">@lang('translation.Cart')</a></li>
                            <li><a href="ecommerce-checkout">@lang('translation.Checkout')</a></li>
                            <li><a href="ecommerce-shops">@lang('translation.Shops')</a></li>
                            <li><a href="ecommerce-add-product">@lang('translation.Add_Product')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-bitcoin"></i>
                            <span>@lang('translation.Crypto')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="crypto-wallet">@lang('translation.Wallet')</a></li>
                            <li><a href="crypto-buy-sell">@lang('translation.Buy_Sell')</a></li>
                            <li><a href="crypto-exchange">@lang('translation.Exchange')</a></li>
                            <li><a href="crypto-lending">@lang('translation.Lending')</a></li>
                            <li><a href="crypto-orders">@lang('translation.Orders')</a></li>
                            <li><a href="crypto-kyc-application">@lang('translation.KYC_Application')</a></li>
                            <li><a href="crypto-ico-landing">@lang('translation.ICO_Landing')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-envelope"></i>
                            <span>@lang('translation.Email')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="email-inbox">@lang('translation.Inbox')</a></li>
                            <li><a href="email-read">@lang('translation.Read_Email')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span>@lang('translation.Invoices')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="invoices-list">@lang('translation.Invoice_List')</a></li>
                            <li><a href="invoices-detail">@lang('translation.Invoice_Detail')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-briefcase-alt-2"></i>
                            <span>@lang('translation.Projects')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="projects-grid">@lang('translation.Projects_Grid')</a></li>
                            <li><a href="projects-list">@lang('translation.Projects_List')</a></li>
                            <li><a href="projects-overview">@lang('translation.Project_Overview')</a></li>
                            <li><a href="projects-create">@lang('translation.Create_New')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-task"></i>
                            <span>@lang('translation.Tasks')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="tasks-list">@lang('translation.Task_List')</a></li>
                            <li><a href="tasks-kanban">@lang('translation.Kanban_Board')</a></li>
                            <li><a href="tasks-create">@lang('translation.Create_Task')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bxs-user-detail"></i>
                            <span>@lang('translation.Contacts')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="contacts-grid">@lang('translation.User_Grid')</a></li>

                            <li><a href="contacts-list">@lang('translation.User_List')</a></li>
                            <li><a href="contacts-profile">@lang('translation.Profile')</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">@lang('translation.Pages')</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-user-circle"></i>
                            <span>@lang('translation.Authentication')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="auth-login">@lang('translation.Login')</a></li>
                            <li><a href="auth-register">@lang('translation.Register')</a></li>
                            <li><a href="auth-recoverpw">@lang('translation.Recover_Password')</a></li>
                            <li><a href="auth-lock-screen">@lang('translation.Lock_screen')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-file"></i>
                            <span>@lang('translation.Utility')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="pages-starter">@lang('translation.Starter_Page')</a></li>
                            <li><a href="pages-maintenance">@lang('translation.Maintenance')</a></li>
                            <li><a href="pages-comingsoon">@lang('translation.Coming_Soon')</a></li>
                            <li><a href="pages-timeline">@lang('translation.Timeline')</a></li>
                            <li><a href="pages-faqs">@lang('translation.FAQs')</a></li>
                            <li><a href="pages-pricing">@lang('translation.Pricing')</a></li>
                            <li><a href="pages-404">@lang('translation.Error_404')</a></li>
                            <li><a href="pages-500">@lang('translation.Error_500')</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">@lang('translation.Components')</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-tone"></i>
                            <span>@lang('translation.UI_Elements')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ui-alerts">@lang('translation.Alerts')</a></li>
                            <li><a href="ui-buttons">@lang('translation.Buttons')</a></li>
                            <li><a href="ui-cards">@lang('translation.Cards')</a></li>
                            <li><a href="ui-carousel">@lang('translation.Carousel')</a></li>
                            <li><a href="ui-dropdowns">@lang('translation.Dropdowns')</a></li>
                            <li><a href="ui-grid">@lang('translation.Grid')</a></li>
                            <li><a href="ui-images">@lang('translation.Images')</a></li>
                            <li><a href="ui-lightbox">@lang('translation.Lightbox')</a></li>
                            <li><a href="ui-modals">@lang('translation.Modals')</a></li>
                            <li><a href="ui-rangeslider">@lang('translation.Range_Slider')</a></li>
                            <li><a href="ui-session-timeout">@lang('translation.Session_Timeout')</a></li>
                            <li><a href="ui-progressbars">@lang('translation.Progress_Bars')</a></li>
                            <li><a href="ui-sweet-alert">@lang('translation.Sweet_Alert')</a></li>
                            <li><a href="ui-tabs-accordions">@lang('translation.Tabs_Accordions')</a></li>
                            <li><a href="ui-typography">@lang('translation.Typography')</a></li>
                            <li><a href="ui-video">@lang('translation.Video')</a></li>
                            <li><a href="ui-general">@lang('translation.General')</a></li>
                            <li><a href="ui-colors">@lang('translation.Colors')</a></li>
                            <li><a href="ui-rating">@lang('translation.Rating')</a></li>
                            <li><a href="ui-notifications">@lang('translation.Notifications')</a></li>
                            <li><a href="ui-image-cropper">@lang('translation.Image_Cropper')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bxs-eraser"></i>
                            <span class="badge badge-pill badge-danger float-right">10</span>
                            <span>@lang('translation.Forms')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="form-elements">@lang('translation.Elements')</a></li>
                            <li><a href="form-layouts">@lang('translation.Forms_Layouts')</a></li>
                            <li><a href="form-validation">@lang('translation.Validation')</a></li>
                            <li><a href="form-advanced">@lang('translation.Advanced')</a></li>
                            <li><a href="form-editors">@lang('translation.Editors')</a></li>
                            <li><a href="form-uploads">@lang('translation.File_Upload')</a></li>
                            <li><a href="form-xeditable">@lang('translation.X_editable')</a></li>
                            <li><a href="form-repeater">@lang('translation.Form_Repeater')</a></li>
                            <li><a href="form-wizard">@lang('translation.Wizard')</a></li>
                            <li><a href="form-mask">@lang('translation.Mask')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span>@lang('translation.Tables')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="tables-basic">@lang('translation.Basic_Tables')</a></li>
                            <li><a href="tables-datatable">@lang('translation.Data_Tables')</a></li>
                            <li><a href="tables-responsive">@lang('translation.Responsive_Table')</a></li>
                            <li><a href="tables-editable">@lang('translation.Editable_Table')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bxs-bar-chart-alt-2"></i>
                            <span>@lang('translation.Charts')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="charts-apex">@lang('translation.Apexcharts')</a></li>
                            <li><a href="charts-echart">@lang('translation.ECharts')</a></li>
                            <li><a href="charts-chartjs">@lang('translation.Chartjs')</a></li>
                            <li><a href="charts-flot">@lang('translation.Flot')</a></li>
                            <li><a href="charts-tui">@lang('translation.Toast_UI')</a></li>
                            <li><a href="charts-knob">@lang('translation.Jquery')</a></li>
                            <li><a href="charts-sparkline">@lang('translation.Sparkline')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-aperture"></i>
                            <span>@lang('translation.Icons')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="icons-boxicons">@lang('translation.Boxicons')</a></li>
                            <li><a href="icons-materialdesign">@lang('translation.Material_Design')</a></li>
                            <li><a href="icons-dripicons">@lang('translation.Dripicons')</a></li>
                            <li><a href="icons-fontawesome">@lang('translation.Font_awesome')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-map"></i>
                            <span>@lang('translation.Maps')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="maps-google">@lang('translation.Google_Maps')</a></li>
                            <li><a href="maps-vector">@lang('translation.Vector_Maps')</a></li>
                            <li><a href="maps-leaflet">@lang('translation.Leaflet_Maps')</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-share-alt"></i>
                            <span>@lang('translation.Multi_Level')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="javascript: void(0);">@lang('translation.Level_1_1')</a></li>
                            <li><a href="javascript: void(0);" class="has-arrow">@lang('translation.Level_1_2')</a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">@lang('translation.Level_2_1')</a></li>
                                    <li><a href="javascript: void(0);">@lang('translation.Level_2_2')</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endif



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
