<?php

namespace App\Http\Controllers\Web\Frontend\Admin;

use Inertia\Inertia;
use App\Models\Banner;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\SuperFait;
use App\Models\Supertrade;
use App\Trait\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    use ApiResponse;
    public function banner()
    {
        $bannerEng = Banner::where('language', 'english')->first();
        $bannerFr = Banner::where('language', 'french')->first();
        return Inertia::render('Home/Banner', compact('bannerEng', 'bannerFr'));
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

    public function supertrade()
    {
        $supertrade = Supertrade::all();
        return Inertia::render('Home/Supertrade/Supertrade', compact('supertrade'));
    }

    public function supertradeCreate()
    {
        return Inertia::render('Home/Supertrade/SupertradeCreate');
    }

    public function supertradeStore(Request $request)
    {
        $supertrade = new Supertrade();
        $supertrade->language = $request->language;

        $supertrade->card_title_eng = $request->card_title_eng;
        $supertrade->card_description_eng = $request->card_description_eng;

        $supertrade->card_title_fr = $request->card_title_fr;
        $supertrade->card_description_fr = $request->card_description_fr;
        $supertrade->save();

        return redirect()->route('supertrade')->with('message', 'Supertrade created successfully');
    }

    public function supertradeEdit($id)
    {
        $supertrade = Supertrade::findOrFail($id);
        return Inertia::render('Home/Supertrade/SupertradeEdit', compact('supertrade'));
    }

    public function supertradeUpdate(Request $request, $id)
    {
        $supertrade = Supertrade::findOrFail($id);

        $supertrade->title_eng = $request->title_eng;
        $supertrade->card_title_eng = $request->card_title_eng;
        $supertrade->card_description_eng = $request->card_description_eng;

        $supertrade->title_fr = $request->title_fr;
        $supertrade->card_title_fr = $request->card_title_fr;
        $supertrade->card_description_fr = $request->card_description_fr;
        $supertrade->image = $request->image;
        $supertrade->save();
        return redirect()->route('supertrade')->with('message', 'Supertrade updated successfully');
    }

    public function supertradeDestroy($id)
    {
        $supertrade = Supertrade::findOrFail($id);
        $supertrade->delete();
        return redirect()->route('supertrade')->with('message', 'Supertrade deleted successfully');
    }

    public function superfacts()
    {
        $superfactsEng = SuperFait::where('language', 'english')->first();
        $superfactsFr = SuperFait::where('language', 'france')->first();

        //return $superfactsFr;

        return Inertia::render('Home/Superfacts/Superfacts', compact('superfactsEng', 'superfactsFr'));
    }

    public function superfactsEdit($id)
    {
        $superfacts = SuperFait::findOrFail($id);
        return Inertia::render('Home/Superfacts/SuperfactsEdit', compact('superfacts'));
    }

    public function superfactsUpdate(Request $request, $id)
    {
        $superfacts = SuperFait::findOrFail($id);

        $superfacts->title_eng = $request->title_eng;
        $superfacts->description_eng = $request->description_eng;

        $superfacts->title_fr = $request->title_fr;
        $superfacts->description_fr = $request->description_fr;
        $superfacts->image = $request->image;
        $superfacts->save();
        return redirect()->route('superfacts')->with('message', 'Superfacts updated successfully');
    }

    public function footer()
    {
        $footer = Footer::all();
        return Inertia::render('Home/Footer/Footer', compact('footer'));
    }

    public function footerCreate()
    {
        return Inertia::render('Home/Footer/FooterCreate');
    }

    public function footerStore(Request $request)
    {
        $footer = new Footer();
        $footer->language = $request->language;

        $footer->section_title_eng = $request->section_title_eng;
        $footer->label_eng = $request->label_eng;
        $footer->url = $request->url;

        $footer->section_title_fr = $request->section_title_fr;
        $footer->label_fr = $request->label_fr;
        $footer->url = $request->url;
        $footer->save();

        return redirect()->route('footer')->with('message', 'Footer created successfully');
    }

    public function footerEdit($id)
    {
        $footer = Footer::findOrFail($id);
        return Inertia::render('Home/Footer/FooterEdit', compact('footer'));
    }

    public function footerUpdate(Request $request, $id)
    {
        $footer = Footer::findOrFail($id);

        $footer->language = $request->language;
        $footer->section_title_eng = $request->section_title_eng;
        $footer->section_title_fr = $request->section_title_fr;
        $footer->label_eng = $request->label_eng;
        $footer->label_fr = $request->label_fr;
        $footer->url = $request->url;
        $footer->save();
        return redirect()->route('footer')->with('message', 'Footer updated successfully');
    }
    
    public function footerDestroy($id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();
        return redirect()->route('footer')->with('message', 'Footer deleted successfully');
    }
}
