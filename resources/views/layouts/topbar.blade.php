<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo.svg')}}" alt="" height="22">
                        <!-- <img src="assets/images/logo.svg" alt="" height="22"> -->
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/logo_dark.png')}}" alt="" height="17">
                        <!-- <img src="assets/images/logo-dark.png" alt="" height="17"> -->
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo_dark.png')}}" alt="" height="22">
                        <!-- <img src="assets/images/logo-light.svg" alt="" height="22"> -->
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/logo_dark.png')}}" alt="" height="50">
                        <!-- <img src="assets/images/logo-light.png" alt="" height="19"> -->
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block" style="margin-left:15px;">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="@lang('translation.Search')">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('translation.Search')"
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item waves-effect"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @switch(Session::get('lang'))
                    @case('ru')
                    <img src="{{ URL::asset('/assets/images/flags/russia.jpg')}}" alt="Header Language" height="16">
            <span class="align-middle">Russian</span>
            @break
            @case('it')
            <img src="{{ URL::asset('/assets/images/flags/italy.jpg')}}" alt="Header Language" height="16"> <span
                class="align-middle">Italian</span>
            @break
            @case('de')
            <img src="{{ URL::asset('/assets/images/flags/germany.jpg')}}" alt="Header Language" height="16"> <span
                class="align-middle">German</span>
            @break
            @case('es')
            <img src="{{ URL::asset('/assets/images/flags/spain.jpg')}}" alt="Header Language" height="16"> <span
                class="align-middle">Spanish</span>
            @break
            @default
            <img src="{{ URL::asset('/assets/images/flags/us.jpg')}}" alt="Header Language" height="16"> <span
                class="align-middle">English</span>
            @endswitch
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="{{ url('index/en') }}" class="dropdown-item notify-item">
                    <img src="{{ URL::asset('/assets/images/flags/us.jpg')}}" alt="user-image" class="mr-1" height="12">
                    <span class="align-middle">English</span>
                </a>

                <!-- item-->
                <a href="{{ url('index/es') }}" class="dropdown-item notify-item">
                    <img src="{{ URL::asset('/assets/images/flags/spain.jpg')}}" alt="user-image" class="mr-1"
                        height="12"> <span class="align-middle">Spanish</span>
                </a>

                <!-- item-->
                <a href="{{ url('index/de') }}" class="dropdown-item notify-item">
                    <img src="{{ URL::asset('/assets/images/flags/germany.jpg')}}" alt="user-image" class="mr-1"
                        height="12"> <span class="align-middle">German</span>
                </a>

                <!-- item-->
                <a href="{{ url('index/it') }}" class="dropdown-item notify-item">
                    <img src="{{ URL::asset('/assets/images/flags/italy.jpg')}}" alt="user-image" class="mr-1"
                        height="12"> <span class="align-middle">Italian</span>
                </a>

                <!-- item-->
                <a href="{{ url('index/ru') }}" class="dropdown-item notify-item">
                    <img src="{{ URL::asset('/assets/images/flags/russia.jpg')}}" alt="user-image" class="mr-1"
                        height="12"> <span class="align-middle">Russian</span>
                </a>
            </div>
        </div> --}}

        {{-- <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="px-lg-2">
                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset('/assets/images/brands/github.png')}}" alt="Github">
        <span>GitHub</span>
        </a>
    </div>
    <div class="col">
        <a class="dropdown-icon-item" href="#">
            <img src="{{ URL::asset('/assets/images/brands/bitbucket.png')}}" alt="bitbucket">
            <span>Bitbucket</span>
        </a>
    </div>
    <div class="col">
        <a class="dropdown-icon-item" href="#">
            <img src="{{ URL::asset('/assets/images/brands/dribbble.png')}}" alt="dribbble">
            <span>Dribbble</span>
        </a>
    </div>
    </div>

    <div class="row no-gutters">
        <div class="col">
            <a class="dropdown-icon-item" href="#">
                <img src="{{ URL::asset('/assets/images/brands/dropbox.png')}}" alt="dropbox">
                <span>Dropbox</span>
            </a>
        </div>
        <div class="col">
            <a class="dropdown-icon-item" href="#">
                <img src="{{ URL::asset('/assets/images/brands/mail_chimp.png')}}" alt="mail_chimp">
                <span>Mail Chimp</span>
            </a>
        </div>
        <div class="col">
            <a class="dropdown-icon-item" href="#">
                <img src="{{ URL::asset('/assets/images/brands/slack.png')}}" alt="slack">
                <span>Slack</span>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div> --}}

    <div class="dropdown d-none d-lg-inline-block ml-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
            <i class="bx bx-fullscreen"></i>
        </button>
    </div>

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-bell bx-tada"></i>
            <span class="badge badge-danger badge-pill" style="font-size: 5px; color:#f46a6a">.</span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
            aria-labelledby="page-header-notifications-dropdown">
            <div class="p-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0"> @lang('translation.Notifications') </h6>
                    </div>
                    <div class="col-auto">
                        <a href="#!" class="small"> @lang('translation.View_All')</a>
                    </div>
                </div>
            </div>
            <div data-simplebar style="max-height: 230px;">
                <a href="" class="text-reset notification-item">
                    <div class="media">
                        <div class="avatar-xs mr-3">
                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                <i class="bx bx-cart"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h6 class="mt-0 mb-1">You have purchased 1st video course.</h6>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1">Purchased it at 32$.</p>
                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="" class="text-reset notification-item">
                    <div class="media">
                        <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg')}}"
                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="media-body">
                            <h6 class="mt-0 mb-1">James Lemire</h6>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1">User uploaded new video.</p>
                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 10 min ago</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="" class="text-reset notification-item">
                    <div class="media">
                        <div class="avatar-xs mr-3">
                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                <i class="bx bx-badge-check"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h6 class="mt-0 mb-1">Your account is approved.</h6>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1">Enjoy with our online video learning course!</p>
                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="p-2 border-top">
                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                    <i class="mdi mdi-arrow-right-circle mr-1"></i> @lang('translation.View_More')..
                </a>
            </div>
        </div>
    </div>

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user"
                src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/default.jpg') }}"
                alt="Header Avatar">
            <span class="d-none d-xl-inline-block ml-1">{{ucfirst(Auth::user()->first_name)}}
                {{ucfirst(Auth::user()->last_name)}}</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <!-- item-->
            <a class="dropdown-item" href="javascript:loadAccountSettingModal()" {{-- data-toggle="modal"
                    data-target="#accountsettingModal" --}}><i
                    class="fas fa-sliders-h  font-size-16 align-middle mr-1"></i> @lang('translation.Settings')</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="javascript:void();"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                    class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> @lang('translation.Logout')
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    </div>
    </div>


</header>

<!-- sample modal content -->
<div id="accountsettingModal" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">

</div><!-- /.modal -->

<script>
    function loadAccountSettingModal(){       
        $.ajax({
            url: '{{route('user_settingmodal')}}',
            success:function(content){
                $("#accountsettingModal").html(content);
                $("#accountsettingModal").modal('show');
            }
        })
    }
    
</script>