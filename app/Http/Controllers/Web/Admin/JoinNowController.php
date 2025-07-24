<?php

namespace App\Http\Controllers\Web\Admin;

use Inertia\Inertia;
use App\Models\JoinNow;
use App\Models\JoinCard;
use App\Models\JoinForm;
use App\Models\BannerCMS;
use Illuminate\Http\Request;
use App\Models\JoinWhyChoose;
use App\Http\Controllers\Controller;

class JoinNowController extends Controller
{
    public function joinNowBanner()
    {
        $joinBannerEng = BannerCMS::where('language', 'english')->where('section', 'join_now')->select('id', 'language', 'title_eng', 'sub_title_eng', 'image')->first();
        $joinBannerFr = BannerCMS::where('language', 'france')->where('section', 'join_now')->select('id', 'language', 'title_fr', 'sub_title_fr')->first();

        return Inertia::render('JoinNow/Banner/Index', compact('joinBannerEng', 'joinBannerFr'));
    }

    public function joinNowBannerEdit($id)
    {
        $joinBanner = BannerCMS::findOrFail($id);

        return Inertia::render('JoinNow/Banner/Edit', compact('joinBanner'));
    }

    public function joinNowBannerUpdate(Request $request, $id)
    {
        $joinBanner = BannerCMS::findOrFail($id);

        $joinBanner->language = $request->language;
        $joinBanner->section = 'join_now';
        $joinBanner->title_eng = $request->title_eng;
        $joinBanner->sub_title_eng = $request->sub_title_eng;
        $joinBanner->title_fr = $request->title_fr;
        $joinBanner->sub_title_fr = $request->sub_title_fr;
        $joinBanner->image = $request->image;
        $joinBanner->save();

        return redirect()->route('join.now.banner')->with('message', 'Banner updated successfully');
    }

    public function joinNow()
    {
        $joinNowEng = JoinNow::where('language', 'english')->first();
        $joinNowFr = JoinNow::where('language', 'france')->first();

        $joinNowFr = collect($joinNowFr)->filter();
        $joinNowEng = collect($joinNowEng)->filter();

        return Inertia::render('JoinNow/Join/Index', compact('joinNowEng', 'joinNowFr'));
    }

    public function joinNowEdit($id)
    {
        $joinNow = JoinNow::findOrFail($id);
        return Inertia::render('JoinNow/Join/Edit', compact('joinNow'));
    }

    public function joinNowUpdate(Request $request, $id)
    {
        $joinNow = JoinNow::findOrFail($id);

        $joinNow->update([
            'language' => $request->language,
            'join_heading_eng' => $request->join_heading_eng,
            'join_sub_heading_eng' => $request->join_sub_heading_eng,
            'join_title_eng' => $request->join_title_eng,
            'join_description_eng' => $request->join_description_eng,
            'join_video_eng' => $request->join_video_eng,
            'join_list1_eng' => $request->join_list1_eng,
            'join_list2_eng' => $request->join_list2_eng,
            'join_list3_eng' => $request->join_list3_eng,
            'join_list4_eng' => $request->join_list4_eng,
            'join_list5_eng' => $request->join_list5_eng,
            'join_card_icon1_eng' => $request->join_card_icon1_eng,
            'join_card_icon2_eng' => $request->join_card_icon2_eng,
            'join_card_icon3_eng' => $request->join_card_icon3_eng,
            'join_card_title1_eng' => $request->join_card_title1_eng,
            'join_card_title2_eng' => $request->join_card_title2_eng,
            'join_card_title3_eng' => $request->join_card_title3_eng,
            'join_card_sub_title1_eng' => $request->join_card_sub_title1_eng,
            'join_card_sub_title2_eng' => $request->join_card_sub_title2_eng,
            'join_card_sub_title3_eng' => $request->join_card_sub_title3_eng,
            'join_heading_fr' => $request->join_heading_fr,
            'join_sub_heading_fr' => $request->join_sub_heading_fr,
            'join_title_fr' => $request->join_title_fr,
            'join_description_fr' => $request->join_description_fr,
            'join_video_fr' => $request->join_video_fr,
            'join_list1_fr' => $request->join_list1_fr,
            'join_list2_fr' => $request->join_list2_fr,
            'join_list3_fr' => $request->join_list3_fr,
            'join_list4_fr' => $request->join_list4_fr,
            'join_list5_fr' => $request->join_list5_fr,
            'join_card_icon1_fr' => $request->join_card_icon1_fr,
            'join_card_icon2_fr' => $request->join_card_icon2_fr,
            'join_card_icon3_fr' => $request->join_card_icon3_fr,
            'join_card_title1_fr' => $request->join_card_title1_fr,
            'join_card_title2_fr' => $request->join_card_title2_fr,
            'join_card_title3_fr' => $request->join_card_title3_fr,
            'join_card_sub_title1_fr' => $request->join_card_sub_title1_fr,
            'join_card_sub_title2_fr' => $request->join_card_sub_title2_fr,
            'join_card_sub_title3_fr' => $request->join_card_sub_title3_fr,
        ]);

        return redirect()->route('join.now')->with('message', 'Join Now updated successfully');
    }

    public function joinForm()
    {
        $joinFormEng = JoinForm::where('language', 'english')->first();
        $joinFormFr = JoinForm::where('language', 'france')->first();

        $joinFormEng = collect($joinFormEng)->filter();
        $joinFormFr = collect($joinFormFr)->filter();

        return Inertia::render('JoinNow/Form/Index', compact('joinFormEng', 'joinFormFr'));
    }

    public function joinFormEdit($id)
    {
        $joinForm = JoinForm::findOrFail($id);
        return Inertia::render('JoinNow/Form/Edit', compact('joinForm'));
    }

    public function joinFormUpdate(Request $request, $id)
    {
        $joinForm = JoinForm::findOrFail($id);

        $joinForm->update([
            'language' => $request->language,
            'join_form_icon_eng' => $request->join_form_icon_eng,
            'join_form_title_eng' => $request->join_form_title_eng,
            'join_form_sub_title_eng' => $request->join_form_sub_title_eng,
            'join_form_cname_label_eng' => $request->join_form_cname_label_eng,
            'join_form_cname_placeholder_eng' => $request->join_form_cname_placeholder_eng,
            'join_form_name_label_eng' => $request->join_form_name_label_eng,
            'join_form_name_placeholder_eng' => $request->join_form_name_placeholder_eng,
            'join_form_phone_label_eng' => $request->join_form_phone_label_eng,
            'join_form_phone_placeholder_eng' => $request->join_form_phone_placeholder_eng,
            'join_form_email_label_eng' => $request->join_form_email_label_eng,
            'join_form_email_placeholder_eng' => $request->join_form_email_placeholder_eng,
            'join_form_business_label_eng' => $request->join_form_business_label_eng,
            'join_form_business_placeholder_eng' => $request->join_form_business_placeholder_eng,
            'join_form_address_label_eng' => $request->join_form_address_label_eng,
            'join_form_address_placeholder_eng' => $request->join_form_address_placeholder_eng,
            'join_form_about_us_label_eng' => $request->join_form_about_us_label_eng,
            'join_form_about_us_placeholder_eng' => $request->join_form_about_us_placeholder_eng,
            'join_form_about_us_menu1_eng' => $request->join_form_about_us_menu1_eng,
            'join_form_about_us_menu2_eng' => $request->join_form_about_us_menu2_eng,
            'join_form_about_us_menu3_eng' => $request->join_form_about_us_menu3_eng,
            'join_form_about_us_menu4_eng' => $request->join_form_about_us_menu4_eng,
            'join_form_about_us_menu5_eng' => $request->join_form_about_us_menu5_eng,
            'join_form_about_us_menu6_eng' => $request->join_form_about_us_menu6_eng,
            'join_form_icon_fr' => $request->join_form_icon_fr,
            'join_form_title_fr' => $request->join_form_title_fr,
            'join_form_sub_title_fr' => $request->join_form_sub_title_fr,
            'join_form_cname_label_fr' => $request->join_form_cname_label_fr,
            'join_form_cname_placeholder_fr' => $request->join_form_cname_placeholder_fr,
            'join_form_name_label_fr' => $request->join_form_name_label_fr,
            'join_form_name_placeholder_fr' => $request->join_form_name_placeholder_fr,
            'join_form_phone_label_fr' => $request->join_form_phone_label_fr,
            'join_form_phone_placeholder_fr' => $request->join_form_phone_placeholder_fr,
            'join_form_email_label_fr' => $request->join_form_email_label_fr,
            'join_form_email_placeholder_fr' => $request->join_form_email_placeholder_fr,
            'join_form_business_label_fr' => $request->join_form_business_label_fr,
            'join_form_business_placeholder_fr' => $request->join_form_business_placeholder_fr,
            'join_form_address_label_fr' => $request->join_form_address_label_fr,
            'join_form_address_placeholder_fr' => $request->join_form_address_placeholder_fr,
            'join_form_about_us_label_fr' => $request->join_form_about_us_label_fr,
            'join_form_about_us_placeholder_fr' => $request->join_form_about_us_placeholder_fr,
            'join_form_about_us_menu1_fr' => $request->join_form_about_us_menu1_fr,
            'join_form_about_us_menu2_fr' => $request->join_form_about_us_menu2_fr,
            'join_form_about_us_menu3_fr' => $request->join_form_about_us_menu3_fr,
            'join_form_about_us_menu4_fr' => $request->join_form_about_us_menu4_fr,
            'join_form_about_us_menu5_fr' => $request->join_form_about_us_menu5_fr,
            'join_form_about_us_menu6_fr' => $request->join_form_about_us_menu6_fr,
        ]);

        return redirect()->route('join.form')->with('message', 'Join Form updated successfully');
    }

    public function joinChoose()
    {
        $joinChooseEng = JoinWhyChoose::where('language', 'english')->first();
        $joinChooseFr = JoinWhyChoose::where('language', 'france')->first();

        $joinChooseEng = collect($joinChooseEng)->filter();
        $joinChooseFr = collect($joinChooseFr)->filter();

        return Inertia::render('JoinNow/WhyChoose/Index', compact('joinChooseEng', 'joinChooseFr'));
    }

    public function joinChooseEdit($id)
    {
        $joinChoose = JoinWhyChoose::findOrFail($id);
        return Inertia::render('JoinNow/WhyChoose/Edit', compact('joinChoose'));
    }

    public function joinChooseUpdate(Request $request, $id)
    {
        $joinWhyChoose = JoinWhyChoose::findOrFail($id);

        $joinWhyChoose->update([
            'language' => $request->language,
            'join_why_chooses_count_eng' => $request->join_why_chooses_count_eng,
            'join_why_chooses_count_title_eng' => $request->join_why_chooses_count_title_eng,
            'join_why_chooses_image_eng' => $request->join_why_chooses_image_eng,
            'join_why_chooses_title_eng' => $request->join_why_chooses_title_eng,
            'join_why_chooses_list1_eng' => $request->join_why_chooses_list1_eng,
            'join_why_chooses_list2_eng' => $request->join_why_chooses_list2_eng,
            'join_why_chooses_list3_eng' => $request->join_why_chooses_list3_eng,
            'join_why_chooses_list4_eng' => $request->join_why_chooses_list4_eng,
            'join_why_chooses_list5_eng' => $request->join_why_chooses_list5_eng,
            'join_why_chooses_list6_eng' => $request->join_why_chooses_list6_eng,
            'join_why_chooses_list7_eng' => $request->join_why_chooses_list7_eng,
            'join_why_chooses_list8_eng' => $request->join_why_chooses_list8_eng,
            'join_why_chooses_offer_number_eng' => $request->join_why_chooses_offer_number_eng,
            'join_why_chooses_offer_title_eng' => $request->join_why_chooses_offer_title_eng,
            'join_why_chooses_count_fr' => $request->join_why_chooses_count_fr,
            'join_why_chooses_count_title_fr' => $request->join_why_chooses_count_title_fr,
            'join_why_chooses_image_fr' => $request->join_why_chooses_image_fr,
            'join_why_chooses_title_fr' => $request->join_why_chooses_title_fr,
            'join_why_chooses_list1_fr' => $request->join_why_chooses_list1_fr,
            'join_why_chooses_list2_fr' => $request->join_why_chooses_list2_fr,
            'join_why_chooses_list3_fr' => $request->join_why_chooses_list3_fr,
            'join_why_chooses_list4_fr' => $request->join_why_chooses_list4_fr,
            'join_why_chooses_list5_fr' => $request->join_why_chooses_list5_fr,
            'join_why_chooses_list6_fr' => $request->join_why_chooses_list6_fr,
            'join_why_chooses_list7_fr' => $request->join_why_chooses_list7_fr,
            'join_why_chooses_list8_fr' => $request->join_why_chooses_list8_fr,
            'join_why_chooses_offer_number_fr' => $request->join_why_chooses_offer_number_fr,
            'join_why_chooses_offer_title_fr' => $request->join_why_chooses_offer_title_fr,
        ]);

        return redirect()->route('join.choose')->with('message', 'Join Why Choose updated successfully');
    }

    public function joinHappens()
    {
        // what happens heading
        $whatHappensheadingEng = JoinCard::where('language', 'english')->where('section', 'happens_heading')->select('id', 'language', 'join_card_heading_eng', 'join_card_sub_heading_eng')->first();
        $whatHappensheadingFr = JoinCard::where('language', 'france')->where('section', 'happens_heading')->select('id', 'language', 'join_card_heading_fr', 'join_card_sub_heading_fr')->first();

        // what happens card
        $whatHappens = JoinCard::where('section', 'happens')->get();

        return Inertia::render('JoinNow/Happens/Index', compact('whatHappensheadingEng', 'whatHappensheadingFr', 'whatHappens'));
    }

    public function joinHappensHeddingEdit($id)
    {
        $joinCard = JoinCard::findOrFail($id);
        return Inertia::render('JoinNow/Happens/Heading/Edit', compact('joinCard'));
    }

    public function joinHappensHeddingUpdate(Request $request, $id)
    {
        $joinCard = JoinCard::findOrFail($id);

        $joinCard->update([
            'join_card_heading_eng' => $request->join_card_heading_eng,
            'join_card_sub_heading_eng' => $request->join_card_sub_heading_eng,
            'join_card_heading_fr' => $request->join_card_heading_fr,
            'join_card_sub_heading_fr' => $request->join_card_sub_heading_fr
        ]);

        return redirect()->route('join.happens')->with('message', 'Join Happens Heading updated successfully'); 
    }

    public function joinHappensCreate()
    {
        return Inertia::render('JoinNow/Happens/Create');
    }

    public function joinHappensStore(Request $request)
    {
        JoinCard::create([
            'language' => $request->language,
            'section' => 'happens',
            'join_card_icon_eng' => $request->join_card_icon_eng,
            'join_card_title_eng' => $request->join_card_title_eng,
            'join_card_sub_title_eng' => $request->join_card_sub_title_eng,
            'join_card_icon_fr' => $request->join_card_icon_fr,
            'join_card_title_fr' => $request->join_card_title_fr,
            'join_card_sub_title_fr' => $request->join_card_sub_title_fr,
        ]);

        return redirect()->route('join.happens')->with('message', 'Join Happens created successfully');
    }

    public function joinHappensEdit($id)
    {
        $joinCard = JoinCard::findOrFail($id);
        return Inertia::render('JoinNow/Happens/Edit', compact('joinCard'));
    }

    public function joinHappensUpdate(Request $request)
    {
        $joinCard = JoinCard::findOrFail($request->id);

        $joinCard->update([
            'language' => $request->language,
            'section' => 'happens',
            'join_card_icon_eng' => $request->join_card_icon_eng,
            'join_card_title_eng' => $request->join_card_title_eng,
            'join_card_sub_title_eng' => $request->join_card_sub_title_eng,
            'join_card_icon_fr' => $request->join_card_icon_fr,
            'join_card_title_fr' => $request->join_card_title_fr,
            'join_card_sub_title_fr' => $request->join_card_sub_title_fr,
        ]);

        return redirect()->route('join.happens')->with('message', 'Join Happens updated successfully');
    }

    public function joinHappensDestroy($id)
    {
        $joinCard = JoinCard::findOrFail($id);
        $joinCard->delete();
        return redirect()->route('join.happens')->with('message', 'Join Happens deleted successfully');
    }
}
