<?php

namespace App\Http\Controllers\Web\Frontend\Admin;

use Inertia\Inertia;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Navbar;
use App\Trait\ApiResponse;

class HomeController extends Controller
{
    use ApiResponse;
    public function banner()
    {
        $bannerEng = Banner::where('language', 'english')->first();
        $bannerFr = Banner::where('language', 'french')->first();
        return Inertia::render('Home/Banner', compact('bannerEng', 'bannerFr'));
    }

    public function bannerApi()
    {
        $bannerEng = Banner::where('language', 'english')->select('title_eng', 'sub_title_eng', 'btn_text1_eng', 'btn_text2_eng', 'video_eng')->first();
        $bannerFr = Banner::where('language', 'french')->select('title_fr', 'sub_title_fr', 'btn_text1_fr', 'btn_text2_fr', 'video_fr')->first();

        $data = compact('bannerEng', 'bannerFr');

        if (!$bannerEng && !$bannerFr) {
            return $this->errorResponse('No data found', 404);
        }

        return $this->successResponse($data, 'Users fetched successfully', 200, 'homePage');
    }

    public function navbarApi() {
        $navbarEng = Navbar::where('language', 'english')->select('id', 'language','title_eng','url')->get();
        $navbarFr = Navbar::where('language', 'france')->select('id', 'language','title_fr','url')->get();
        $data = compact('navbarEng', 'navbarFr');

        if (!$navbarEng && !$navbarFr) {
            return $this->errorResponse('No data found', 404);
        }
        return $this->successResponse($data, 'Navbar fetched successfully', 200, 'navbar');
    }

    public function bannerEdit(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        //return $banner;
        return Inertia::render('Home/BannerEdit', compact('banner'));
    }

    public function bannerUpdate(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $banner->title_eng = $request->title_eng;
        $banner->sub_title_eng = $request->sub_title_eng;
        $banner->btn_text1_eng = $request->btn_text1_eng;
        $banner->btn_text2_eng = $request->btn_text2_eng;
        $banner->video_eng = $request->video_eng;

        $banner->title_fr = $request->title_fr;
        $banner->sub_title_fr = $request->sub_title_fr;
        $banner->btn_text1_fr = $request->btn_text1_fr;
        $banner->btn_text2_fr = $request->btn_text2_fr;
        $banner->video_fr = $request->video_fr;

        $banner->save();
        return redirect()->route('banner')->with('message', 'Banner updated successfully');
    }


    public function navbar()
    {
        $navbar = Navbar::all();
        return Inertia::render('Home/Navbar/Navbar', compact('navbar'));
    }

    public function navbarCreate()
    {
        return Inertia::render('Home/Navbar/NavbarCreate');
    }   

    public function navbarStore(Request $request)
    {
        $navbar = new Navbar();
        $navbar->language = $request->language;
        $navbar->title_eng = $request->title_eng;
        $navbar->url = $request->url;
        $navbar->title_fr = $request->title_fr;
        $navbar->url = $request->url;
        $navbar->save();

        return redirect()->route('home.navbar')->with('message', 'Navbar created successfully');
    }
}
