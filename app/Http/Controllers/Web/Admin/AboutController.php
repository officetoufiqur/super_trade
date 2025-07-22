<?php

namespace App\Http\Controllers\Web\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function aboutBanner()
    {
        $aboutBannerEng = About::where('language', 'english')->where('section', 'banner')->select('language', 'banner_title_eng','banner_sort_title_eng','banner_image')->first();
        $aboutBannerFr = About::where('language', 'france')->where('section', 'banner')->select('language', 'banner_title_fr','banner_sort_title_fr','banner_image')->first();
        return Inertia::render('About/Banner/Index', compact('aboutBannerEng', 'aboutBannerFr'));
    }
}
