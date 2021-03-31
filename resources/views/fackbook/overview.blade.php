@extends('layouts.master')

@section('title') Playbook Management @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/custom-style.css')}}">
@endsection

@section('content')
    @component('common-components.facebook-breacrumb')
        @slot('title') The Facebook Ad Library @endslot
        @slot('li_1') ADLibrary @endslot
        @slot('li_2') List @endslot
    @endcomponent
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <div class="col-8">
                <ul class="nav nav-pills ugro-nav-pills" role="tablist"></ul>
            </div>
            <div class="col-4">
                <ol class="breadcrumb m-0">
                    <li class="">
                        <form class="app-search d-none d-lg-block" style="margin-left:15px; padding:0 0 !important">
                            <div class="position-relative">
                                <input type="text" id="edit_search" onkeyup="find_ads()" class="form-control" placeholder="@lang('translation.Ad_Library')">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </li>
                    <li class="">
                        <div class="dropdown">
                            <div class="btn btn-outline-default waves-effect waves-light" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-sort-variant"></i> Sort Groups <i class="mdi mdi-chevron-down"></i>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item alphabetically" href="#">Alphabetically</a>
                                <a class="dropdown-item lastmodified" href="#">Last modified</a>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="dropdown">
                            <div class="btn btn-outline-default waves-effect waves-light" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-auto-upload"></i> Sort ADs <i class="mdi mdi-chevron-down"></i>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item sort-ads" href="#">Most Like ADs</a>
                                <a class="dropdown-item sort-viewed" href="#">Most Viewed Ads</a>
                                <a class="dropdown-item sort-commended" href="#">Most Commended Ads</a>
                                <a class="dropdown-item sort-shared" href="#">Most shared Ads</a>
                                <a class="dropdown-item sort-highlight" href="#">Highlight Video View</a>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-12">
            <div class="tab-content" style="padding:0 8%">
                <div class="tab-pane active" id="proven-winner" role="tabpanel">
                    <div class="row ads" >
                        @foreach ($fbLib as $item)
                        <div id={{"product_".($item->id)}} class="card ugro-video-tile col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 name">
                            <div class="card-body row">
                                <div class="col-3">
                                    <img src={{$item->logo_img_url."/".$item->id.".png"}} alt="" style="border-radius:50%;">
                                </div>
                                <div class="col-7">
                                    <a href={{$item->url}} target="_blank" class="card-title mt-0">{{$item->title}}</a>
                                    <pre>{{$item->publish_time}}</pre>
                                </div>
                                <div class="col-2">
                                    <i class="{{$item->star==1?"mdi mdi-star":"mdi mdi-star-outline"}}" id="sa-position"></i>
                                </div>
                            </div>
                            <div class="row" style="padding:0 10px">
                                <p class="poster-description">{{$item->description}}</p>
                            </div>
                            <div style="position: relative" class="videocontainer">
                                <div class="embed-responsive embed-responsive-4by3 ">
                                    <video class="previewVideo" muted="muted" loop
                                        poster={{"/uploads/main/".$item->id.".jpg"}}
                                        style="object-fit: cover;"  onclick="">
                                        <source
                                            src="uploads/lesson/1609786968fZX.mp4"
                                            type="video/mp4">
                                        <source src="" type="video/ogg">
                                        Your browser does not support HTML video.
                                    </video>
                                </div>
                            </div>
                            <div class=" card-body row">
                                <div class="col-6">
                                    <p class="fb-views">{{(($item->views)/1000)."K Likes"}}</p>
                                </div>
                                <div class="col-6">
                                    <p class="fb-comments">{{(($item->comments)/1000)."K Comments"}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @component('common-components.fb-pop-up-ads')@endcomponent
                    </div>
                </div>
                <div class="tab-pane" id="my-favourite" role="tabpanel"></div>
                <div class="tab-pane" id="my-ad-library" role="tabpanel"></div>
                <div class="tab-pane" id="my-ads" role="tabpanel"></div>
                <div class="tab-pane" id="thumbnail-vault" role="tabpanel">
                    <div class="mt-3">
                        <div class="button-items">
                            <a type="button" class="btn btn-outline-success waves-effect waves-light w-sm" data-toggle="modal"
                            data-target=".createThumbnail">
                                <i class="mdi mdi-plus"></i> New Thumbnail
                            </a>
                        </div>
                        @component('common-components.create-thumbnail')@endcomponent
                    </div>
                    <div class="mt-3">
                        <h5>Favourite Groups</h5>
                        <div class="row favourite-group">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <i class="mdi mdi-star" id="thumbnail-star" onclick="signLike()"></i>
                                    <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="btn-group">
                                            <div class="btn btn-sm btn-outline-default">
                                                Download <i class="mdi mdi-cloud-download-outline"></i>
                                            </div>
                                            <div class="btn btn-sm btn-primary">Preview</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>normal Groups</h5>
                        <div class="row normal-group">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <i class="mdi mdi-star-outline" id="thumbnail-star" onclick="signLike()"></i>
                                    <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="btn-group">
                                            <div class="btn btn-sm btn-outline-default">
                                                Download <i class="mdi mdi-cloud-download-outline"></i>
                                            </div>
                                            <div class="btn btn-sm btn-primary">Preview</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Custom javascript-->
    <script src="{{ URL::asset('assets/js/custom-js.js') }}"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js -->
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
@endsection
