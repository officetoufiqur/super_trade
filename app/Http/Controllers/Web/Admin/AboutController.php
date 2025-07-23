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
        $aboutBannerEng = About::where('language', 'english')->where('section', 'banner')->select('id', 'language', 'banner_title_eng','banner_sort_title_eng','banner_image')->first();
        $aboutBannerFr = About::where('language', 'france')->where('section', 'banner')->select('id', 'language', 'banner_title_fr','banner_sort_title_fr','banner_image')->first();
        return Inertia::render('About/Banner/Index', compact('aboutBannerEng', 'aboutBannerFr'));
    }

    public function aboutBannerEdit($id)
    {
        $aboutBanner = About::findOrFail($id);
        return Inertia::render('About/Banner/Edit', compact('aboutBanner'));
    }

    public function aboutBannerupdate(Request $request, $id)
    {
        $aboutBanner = About::findOrFail($id);

        $aboutBanner->banner_title_eng = $request->banner_title_eng;
        $aboutBanner->banner_title_fr = $request->banner_title_fr;
        $aboutBanner->banner_sort_title_eng = $request->banner_sort_title_eng;
        $aboutBanner->banner_sort_title_fr = $request->banner_sort_title_fr;
        $aboutBanner->banner_image = $request->banner_image;
        $aboutBanner->save();

        return redirect()->route('about.banner')->with('message', 'Banner updated successfully');
    }

    public function about()
    {
        $aboutEng = About::where('language', 'english')->where('section', 'about')->select('id', 'language', 'about_header_eng', 'about_title_eng','about_sub_title_eng')->first();

        $aboutFr = About::where('language', 'france')->where('section', 'about')->select('id', 'language','about_header_fr', 'about_title_fr','about_sub_title_fr')->first();

        $aboutCards = About::where('section', 'about_card')->get();

        return Inertia::render('About/About/Index', compact('aboutEng', 'aboutFr', 'aboutCards'));
    }

    public function aboutEdit($id)
    {
        $about = About::findOrFail($id);
        return Inertia::render('About/About/Edit', compact('about'));
    }

    public function aboutUpdate(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $about->about_header_eng = $request->about_header_eng;
        $about->about_header_fr = $request->about_header_fr;
        $about->about_title_eng = $request->about_title_eng;
        $about->about_title_fr = $request->about_title_fr;
        $about->about_sub_title_eng = $request->about_sub_title_eng;
        $about->about_sub_title_fr = $request->about_sub_title_fr;
        $about->save();

        return redirect()->route('about')->with('message', 'About updated successfully');
    }

    public function cardCreate()
    {
        return Inertia::render('About/AboutCard/Create');
    }

    public function cardStore(Request $request)
    {
        $card = new About();

        $card->section = 'about_card';
        $card->language = $request->language;
        $card->card_title_eng = $request->card_title_eng;
        $card->card_title_fr = $request->card_title_fr;
        $card->card_percentage_eng = $request->card_percentage_eng;
        $card->card_percentage_fr = $request->card_percentage_fr;
        $card->card_image = $request->card_image;
        $card->save();
        return redirect()->route('about')->with('message', 'Card added successfully');
    }

    public function cardEdit($id)
    {
        $card = About::findOrFail($id);
        return Inertia::render('About/AboutCard/Edit', compact('card'));
    }

    public function cardUpdate(Request $request, $id)
    {
        $card = About::findOrFail($id);

        $card->card_title_eng = $request->card_title_eng;
        $card->card_title_fr = $request->card_title_fr;
        $card->card_percentage_eng = $request->card_percentage_eng;
        $card->card_percentage_fr = $request->card_percentage_fr;
        $card->card_image = $request->card_image;
        $card->save();

        return redirect()->route('about')->with('message', 'Card updated successfully');
    }

    public function cardDestroy($id)
    {
        $card = About::findOrFail($id);
        $card->delete();
        return redirect()->route('about')->with('message', 'Card deleted successfully');
    }

    public function mission()
    {
        $missionEng = About::where('language', 'english')->where('section', 'mission')->first();
        $missionFr = About::where('language', 'france')->where('section', 'mission')->first();
        return Inertia::render('About/Mission/Index', compact('missionEng', 'missionFr'));
    }

    public function missionEdit($id)
    {
        $mission = About::findOrFail($id);
        return Inertia::render('About/Mission/Edit', compact('mission'));
    }

    public function missionUpdate(Request $request, $id)
    {
        $mission = About::findOrFail($id);

        $mission->language = $request->language;
        $mission->mission_title_eng = $request->mission_title_eng;
        $mission->mission_description_eng = $request->mission_description_eng;
        $mission->mission_sub_title1_eng = $request->mission_sub_title1_eng;
        $mission->mission_sort_desc1_eng = $request->mission_sort_desc1_eng;
        $mission->mission_sub_title2_eng = $request->mission_sub_title2_eng;
        $mission->mission_sort_desc2_eng = $request->mission_sort_desc2_eng;
        $mission->mission_title_fr = $request->mission_title_fr;
        $mission->mission_description_fr = $request->mission_description_fr;
        $mission->mission_sub_title1_fr = $request->mission_sub_title1_fr;
        $mission->mission_sort_desc1_fr = $request->mission_sort_desc1_fr;
        $mission->mission_sub_title2_fr = $request->mission_sub_title2_fr;
        $mission->mission_sort_desc2_fr = $request->mission_sort_desc2_fr;
        $mission->mission_image = $request->mission_image;
        $mission->save();

        return redirect()->route('about.mission')->with('message', 'Mission updated successfully');
    }
}
