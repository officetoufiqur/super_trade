<?php

namespace App\Http\Controllers\Web\Frontend\Admin;

use Inertia\Inertia;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        return $this->successResponse($data, 'Banner data fetched successfully');
    }

    public function bannerEdit(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        return Inertia::render('Home/BannerEdit', compact('banner'));
    }
}
