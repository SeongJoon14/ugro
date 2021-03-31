<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FBADLib;
class FacebookAdlibrary extends Controller
{
    //contruct
    public function __construct()
    {
        $this->middleware('auth');
    }

    // proven_winner
    public function index(Request $request)
    {
        $fbLib = FBADLib::get();
        return view('fackbook.overview', ['fbLib' => $fbLib]);
        
    }
    public function store(Request $request)
    {
        $flib = new FBADLib;
        $flib->title = $request->title;
        $flib->group = $request->group;
        $flib->url = $request->url;
        $flib->logo_img_url = $request->logo_img_url;
        $flib->publish_time = $request->publish_time;
        $flib->description = $request->description;
        $flib->main_img_or_video = $request->main_img_or_video;
        $flib->emoji = $request->emoji;
        $flib->views = $request->views;
        $flib->comments = $request->comments;
        $flib->share = $request->share;
        $flib->ratio = $request->ratio;
        $flib->star = $request->star;
        $flib->save();
        return response()->json($request);
    }
    public function favourite_store(Request $request){
        var_dump($request);
        $fb_favourite_store = new FBENJOYDB;
        $fb_favourite_store->title = $request->title;
        $fb_favourite_store->group = $request->group;
        $fb_favourite_store->url = $request->url;
        $fb_favourite_store->save();
        return response()->json($request);
    }

    // Create new thumbnail vault
    public function thumbnail_create(Request $request){
        $Thumbnail = FBTHUMBNAIL::create($request->all());
        dd ($Thumbnail);
    }

    
}
