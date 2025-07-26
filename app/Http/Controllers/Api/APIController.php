<?php

namespace App\Http\Controllers\Api;

use App\Models\Faq;
use App\Models\About;
use App\Models\Banner;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Benefit;
use App\Models\JoinNow;
use App\Models\Service;
use App\Models\JoinCard;
use App\Models\JoinForm;
use App\Models\BannerCMS;
use App\Models\SuperFait;
use App\Models\Supertrade;
use App\Trait\ApiResponse;
use Illuminate\Http\Request;
use App\Models\JoinWhyChoose;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    use ApiResponse;

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

    public function navbarApi()
    {
        $navbarEng = Navbar::where('language', 'english')->select('id', 'language', 'title_eng', 'url')->get();
        $navbarFr = Navbar::where('language', 'france')->select('id', 'language', 'title_fr', 'url')->get();
        $data = compact('navbarEng', 'navbarFr');

        if (!$navbarEng && !$navbarFr) {
            return $this->errorResponse('No data found', 404);
        }
        return $this->successResponse($data, 'Navbar fetched successfully', 200, 'navbar');
    }

    public function supertradeApi()
    {
        $headerEng = Supertrade::where('language', 'english')->select('title_eng', 'image')->first();
        $supertradeCardEng = Supertrade::where('language', 'english')->whereNotNull('card_title_eng')->select('card_title_eng', 'card_description_eng')->get();

        $headerFr = Supertrade::where('language', 'france')->select('title_fr', 'image')->first();
        $supertradeCardFr = Supertrade::where('language', 'france')->select('card_title_fr', 'card_description_fr')->get();

        $data = compact('headerEng', 'supertradeCardEng', 'headerFr', 'supertradeCardFr');

        return $this->successResponse($data, 'Supertrade fetched successfully', 200, 'homeSupertrade');
    }

    public function superFaitApi()
    {
        $superFaitEng = SuperFait::where('language', 'english')->select('title_eng', 'btn_text_eng', 'description_eng', 'image')->get();
        $superFaitFr = SuperFait::where('language', 'france')->select('title_fr', 'btn_text_fr', 'description_fr', 'image')->get();

        $data = compact('superFaitEng', 'superFaitFr');

        return $this->successResponse($data, 'SuperFait fetched successfully', 200, 'homeSuperFait');
    }

    public function footerApi()
    {
        $footerEng = Footer::where('language', 'english')->select('section_title_eng', 'label_eng', 'url')->get();
        $footerFr = Footer::where('language', 'france')->select('section_title_fr', 'label_fr', 'url')->get();

        $footer = compact('footerEng', 'footerFr');

        return $this->successResponse($footer, 'Footer fetched successfully', 200, 'footer');
    }

    public function aboutApi()
    {
        $aboutBannerEng = About::where('language', 'english')->where('section', 'banner')->select('banner_title_eng', 'banner_sort_title_eng', 'banner_image')->first();
        $aboutBannerFr = About::where('language', 'france')->where('section', 'banner')->select('banner_title_fr', 'banner_sort_title_fr', 'banner_image')->first();

        $aboutEng = About::where('language', 'english')->where('section', 'about')->select('about_header_eng', 'about_title_eng', 'about_sub_title_eng')->first();
        $aboutFr = About::where('language', 'france')->where('section', 'about')->select('about_header_fr', 'about_title_fr', 'about_sub_title_fr')->first();

        $aboutCardEng = About::where('language', 'english')->where('section', 'about_card')->select('card_image', 'card_title_eng', 'card_percentage_eng')->get();
        $aboutCardFr = About::where('language', 'france')->where('section', 'about_card')->select('card_title_fr', 'card_percentage_fr')->get();

        $missionEng = About::where('language', 'english')->where('section', 'mission')->select('mission_title_eng', 'mission_description_eng', 'mission_sub_title1_eng', 'mission_sort_desc1_eng', 'mission_sub_title2_eng', 'mission_sort_desc2_eng', 'mission_image')->first();
        $missionFr = About::where('language', 'france')->where('section', 'mission')->select('mission_title_fr', 'mission_description_fr', 'mission_sub_title1_fr', 'mission_sort_desc1_fr', 'mission_sub_title2_fr', 'mission_sort_desc2_fr', 'mission_image')->first();

        $data = compact('aboutBannerEng', 'aboutBannerFr', 'aboutEng', 'aboutFr', 'aboutCardEng', 'aboutCardFr', 'missionEng', 'missionFr');

        return $this->successResponse($data, 'About fetched successfully', 200, 'about');
    }

    public function servicesApi()
    {
        // service banner
        $serviceBannerEng = BannerCMS::where('language', 'english')->where('section', 'service')->select('id', 'title_eng', 'sub_title_eng', 'image')->first();
        $serviceBannerFr = BannerCMS::where('language', 'france')->where('section', 'service')->select('id', 'title_fr', 'sub_title_fr')->first();

        // service card
        $serviceCardEng = Service::where('language', 'english')->where('section', 'service_card')->select('id', 'section_card_icon', 'section_card_title_eng', 'section_card_sub_title_eng')->get();
        $serviceCardFr = Service::where('language', 'france')->where('section', 'service_card')->select('id', 'section_card_icon', 'section_card_title_fr', 'section_card_sub_title_fr')->get();

        // trading hedding
        $tradingHeaderEng = Service::where('language', 'english')->where('section', 'trading_hedding')->select('id', 'trading_header_eng', 'trading_sub_header_eng')->first();
        $tradingHeaderFr = Service::where('language', 'france')->where('section', 'trading_hedding')->select('id', 'trading_header_fr', 'trading_sub_header_fr')->first();

        // trading card
        $tradingCardEng = Service::where('language', 'english')->where('section', 'trading')->select('id', 'trading_card_image', 'trading_card_title_eng', 'trading_card_sub_title_eng', 'trading_card_list1_eng', 'trading_card_list2_eng', 'trading_card_list3_eng')->get();
        $tradingCardFr = Service::where('language', 'france')->where('section', 'trading')->select('id', 'trading_card_image', 'trading_card_title_fr', 'trading_card_sub_title_fr', 'trading_card_list1_fr', 'trading_card_list2_fr', 'trading_card_list3_fr')->get();

        // service choose
        $chooseHeaderEng = Service::where('language', 'english')->where('section', 'service_choose_header')->select('id', 'service_choose_header_eng', 'service_choose_sub_header_eng')->first();
        $chooseHeaderFr = Service::where('language', 'france')->where('section', 'service_choose_header')->select('id', 'service_choose_header_fr', 'service_choose_sub_header_fr')->first();

        // choose card
        $chooseCardEng = Service::where('language', 'english')->where('section', 'service_choose')->select('id', 'service_choose_card_icon', 'service_choose_card_title_eng', 'service_choose_card_sub_title_eng')->get();
        $chooseCardFr = Service::where('language', 'france')->where('section', 'service_choose')->select('id', 'service_choose_card_icon', 'service_choose_card_title_fr', 'service_choose_card_sub_title_fr')->get();

        $data = compact('serviceBannerEng', 'serviceBannerFr', 'serviceCardEng', 'serviceCardFr', 'tradingHeaderEng', 'tradingHeaderFr', 'tradingCardEng', 'tradingCardFr', 'chooseHeaderEng', 'chooseHeaderFr', 'chooseCardEng', 'chooseCardFr');

        return $this->successResponse($data, 'Services fetched successfully', 200, 'services');
    }

    public function joinNowApi()
    {
        // join now banner
        $joinBannerEng = BannerCMS::where('language', 'english')->where('section', 'join_now')->select('id', 'title_eng', 'sub_title_eng', 'image')->first();
        $joinBannerFr = BannerCMS::where('language', 'france')->where('section', 'join_now')->select('id', 'title_fr', 'sub_title_fr')->first();

        // join now
        $joinNowEng = JoinNow::where('language', 'english')->first();
        $joinNowFr = JoinNow::where('language', 'france')->first();

        // join form
        $joinFormEng = JoinForm::where('language', 'english')->first();
        $joinFormFr = JoinForm::where('language', 'france')->first();

        // join why choose
        $joinChooseEng = JoinWhyChoose::where('language', 'english')->first();
        $joinChooseFr = JoinWhyChoose::where('language', 'france')->first();

        // what happens heading
        $whatHappensheadingEng = JoinCard::where('language', 'english')->where('section', 'happens_heading')->select('id', 'join_card_heading_eng', 'join_card_sub_heading_eng')->first();
        $whatHappensheadingFr = JoinCard::where('language', 'france')->where('section', 'happens_heading')->select('id', 'join_card_heading_fr', 'join_card_sub_heading_fr')->first();

        // what happens card
        $whatHappensEng = JoinCard::where('language', 'english')->where('section', 'happens')->select('id', 'join_card_icon_eng', 'join_card_title_eng','join_card_sub_title_eng')->get();
        $whatHappensFr = JoinCard::where('language', 'france')->where('section', 'happens')->select('id', 'join_card_icon_fr', 'join_card_title_fr','join_card_sub_title_fr')->get();

        // what questions heading
        $whatQuestionsheadingEng = JoinCard::where('language', 'english')->where('section', 'questions_heading')->select('id', 'join_card_heading_eng', 'join_card_sub_heading_eng')->first();
        $whatQuestionsheadingFr = JoinCard::where('language', 'france')->where('section', 'questions_heading')->select('id', 'join_card_heading_fr', 'join_card_sub_heading_fr')->first();

        // what questions card
        $whatQuestionsEng = JoinCard::where('language', 'english')->where('section', 'questions')->select('id', 'join_card_icon_eng', 'join_card_title_eng','join_card_sub_title_eng')->get();
        $whatQuestionsFr = JoinCard::where('language', 'france')->where('section', 'questions')->select('id', 'join_card_icon_fr', 'join_card_title_fr','join_card_sub_title_fr')->get();

        $joinChooseEng = collect($joinChooseEng)->filter();
        $joinChooseFr = collect($joinChooseFr)->filter();

        $joinFormEng = collect($joinFormEng)->filter();
        $joinFormFr = collect($joinFormFr)->filter();

        $joinNowFr = collect($joinNowFr)->filter();
        $joinNowEng = collect($joinNowEng)->filter();


        $data = compact('joinBannerEng', 'joinBannerFr', 'joinNowEng', 'joinNowFr', 'joinFormEng', 'joinFormFr', 'joinChooseEng', 'joinChooseFr', 'whatHappensheadingEng', 'whatHappensheadingFr', 'whatHappensEng', 'whatHappensFr', 'whatQuestionsheadingEng', 'whatQuestionsheadingFr', 'whatQuestionsEng', 'whatQuestionsFr');

        return $this->successResponse($data, 'Join Now fetched successfully', 200, 'joinNow');
    }

    public function benefitApi()
    {
        // benefit banner
        $benefitBannerEng = BannerCMS::where('language', 'english')->where('section', 'benefit')->select('id', 'title_eng', 'sub_title_eng', 'image')->first();
        $benefitBannerFr = BannerCMS::where('language', 'france')->where('section', 'benefit')->select('id', 'title_fr', 'sub_title_fr')->first();

        // benefit heading
        $benefitHeadingEng = Benefit::where('language', 'english')->where('section', 'heading')->select('id', 'heading_eng', 'sub_heading_eng')->first();
        $benefitHeadingFr = Benefit::where('language', 'france')->where('section', 'heading')->select('id', 'heading_fr', 'sub_heading_fr')->first();

        // benefit membership
        $benefitMembershipEng = Benefit::where('language', 'english')->where('section', 'card')->select('id', 'image', 'icon','card_title_eng', 'card_description_eng')->get();
        $benefitMembershipFr = Benefit::where('language', 'france')->where('section', 'card')->select('id', 'card_title_fr', 'card_description_fr')->get();
        
        // benefit newsletter
        $benefitNewsletterEng = Benefit::where('language', 'english')->where('section', 'newsletter')->select('id', 'newsletter_title_eng', 'newsletter_sub_title_eng', 'newsletter_btn_text_eng')->first();
        $benefitNewsletterFr = Benefit::where('language', 'france')->where('section', 'newsletter')->select('id', 'newsletter_title_fr', 'newsletter_sub_title_fr', 'newsletter_btn_text_fr')->first();

        $data = compact('benefitBannerEng', 'benefitBannerFr', 'benefitHeadingEng', 'benefitHeadingFr', 'benefitMembershipEng', 'benefitMembershipFr', 'benefitNewsletterEng', 'benefitNewsletterFr');

        return $this->successResponse($data, 'Benefit fetched successfully', 200, 'benefit');
    }

    public function faqApi()
    {
        // faq banner
        $faqBannerEng = BannerCMS::where('language', 'english')->where('section', 'faq')->select('id', 'sub_title_eng', 'image')->first();
        $faqBannerFr = BannerCMS::where('language', 'france')->where('section', 'faq')->select('id', 'sub_title_fr')->first();

        // faq heading
        $faqHeadingEng = Faq::where('language', 'english')->where('section', 'heading')->select('id', 'heading_eng', 'sub_heading_eng')->first();
        $faqHeadingFr = Faq::where('language', 'france')->where('section', 'heading')->select('id', 'heading_fr', 'sub_heading_fr')->first();

        // faq card
        $faqCardEng = Faq::where('language', 'english')->where('section', 'faq')->select('id', 'question_eng', 'answer_eng')->get();
        $faqCardFr = Faq::where('language', 'france')->where('section', 'faq')->select('id', 'question_fr', 'answer_fr')->get();

        $data = compact('faqBannerEng', 'faqBannerFr', 'faqHeadingEng', 'faqHeadingFr', 'faqCardEng', 'faqCardFr');

        return $this->successResponse($data, 'Faq fetched successfully', 200, 'faq');
    }
}
