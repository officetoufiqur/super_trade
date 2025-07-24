<?php

namespace App\Http\Controllers\Web\Admin;

use Inertia\Inertia;
use App\Models\Service;
use App\Models\BannerCMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function serviceBanner()
    {
        $serviceBannerEng = BannerCMS::where('language', 'english')->where('section', 'service')->select('id', 'language', 'title_eng', 'sub_title_eng', 'image')->first();
        $serviceBannerFr = BannerCMS::where('language', 'france')->where('section', 'service')->select('id', 'language', 'title_fr', 'sub_title_fr')->first();

        return Inertia::render('Services/Banner/Index', compact('serviceBannerEng', 'serviceBannerFr'));
    }

    public function serviceBannerEdit($id)
    {
        $serviceBanner = BannerCMS::findOrFail($id);
        return Inertia::render('Services/Banner/Edit', compact('serviceBanner'));
    }

    public function serviceBannerUpdate(Request $request, $id)
    {
        $serviceBanner = BannerCMS::findOrFail($id);

        $serviceBanner->language = $request->language;
        $serviceBanner->title_eng = $request->title_eng;
        $serviceBanner->sub_title_eng = $request->sub_title_eng;
        $serviceBanner->title_fr = $request->title_fr;
        $serviceBanner->sub_title_fr = $request->sub_title_fr;
        $serviceBanner->save();

        return redirect()->route('service.banner')->with('message', 'Banner updated successfully');
    }

    public function serviceCard()
    {
        // service card
        $serviceCardEng = Service::where('language', 'english')->where('section', 'service_card')->select('id', 'language', 'section_card_icon', 'section_card_title_eng', 'section_card_sub_title_eng')->get();
        $serviceCardFr = Service::where('language', 'france')->where('section', 'service_card')->select('id', 'language', 'section_card_icon', 'section_card_title_fr', 'section_card_sub_title_fr')->get();

        //return $serviceCardEng;
        return Inertia::render('Services/Card/Index', compact('serviceCardEng', 'serviceCardFr'));
    }

    public function serviceCardDelete($id)
    {
        $serviceCard = Service::findOrFail($id);
        $serviceCard->delete();
        return redirect()->route('service.card')->with('message', 'Card deleted successfully');
    }

    public function serviceCardCreate()
    {
        return Inertia::render('Services/Card/Create');
    }

    public function serviceCardStore(Request $request)
    {
        $serviceCard = new Service();

        $serviceCard->language = $request->language;
        $serviceCard->section = 'service_card';
        $serviceCard->section_card_icon = $request->section_card_icon;
        $serviceCard->section_card_title_eng = $request->section_card_title_eng;
        $serviceCard->section_card_sub_title_eng = $request->section_card_sub_title_eng;
        $serviceCard->section_card_title_fr = $request->section_card_title_fr;
        $serviceCard->section_card_sub_title_fr = $request->section_card_sub_title_fr;
        $serviceCard->save();

        return redirect()->route('service.card')->with('message', 'Card created successfully');
    }

    public function serviceCardEdit($id)
    {
        $serviceCard = Service::findOrFail($id);
        return Inertia::render('Services/Card/Edit', compact('serviceCard'));
    }

    public function serviceCardUpdate(Request $request, $id)
    {
        $serviceCard = Service::findOrFail($id);

        $serviceCard->language = $request->language;
        $serviceCard->section = 'service_card';
        $serviceCard->section_card_icon = $request->section_card_icon;
        $serviceCard->section_card_title_eng = $request->section_card_title_eng;
        $serviceCard->section_card_sub_title_eng = $request->section_card_sub_title_eng;
        $serviceCard->section_card_title_fr = $request->section_card_title_fr;
        $serviceCard->section_card_sub_title_fr = $request->section_card_sub_title_fr;
        $serviceCard->save();

        return redirect()->route('service.card')->with('message', 'Card updated successfully');
    }

    public function serviceTrading()
    {
        // trading hedding
        $tradingHeaderEng = Service::where('language', 'english')->where('section', 'trading_hedding')->select('id', 'language', 'trading_header_eng', 'trading_sub_header_eng')->first();
        $tradingHeaderFr = Service::where('language', 'france')->where('section', 'trading_hedding')->select('id', 'language', 'trading_header_fr', 'trading_sub_header_fr')->first();

        $tradingCard = Service::where('section', 'trading')->get();

        return Inertia::render('Services/Trading/Index', compact('tradingHeaderEng', 'tradingHeaderFr', 'tradingCard'));
    }

    public function serviceTradingCreate()
    {
        return Inertia::render('Services/Trading/Create');
    }

    public function serviceTradingStore(Request $request)
    {
        $serviceTrading = new Service();

        $serviceTrading->language = $request->language;
        $serviceTrading->section = 'trading';
        $serviceTrading->trading_card_image = $request->trading_card_image;
        $serviceTrading->trading_card_title_eng = $request->trading_card_title_eng;
        $serviceTrading->trading_card_sub_title_eng = $request->trading_card_sub_title_eng;
        $serviceTrading->trading_card_list1_eng = $request->trading_card_list1_eng;
        $serviceTrading->trading_card_list2_eng = $request->trading_card_list2_eng;
        $serviceTrading->trading_card_list3_eng = $request->trading_card_list3_eng;
        $serviceTrading->trading_card_title_fr = $request->trading_card_title_fr;
        $serviceTrading->trading_card_sub_title_fr = $request->trading_card_sub_title_fr;
        $serviceTrading->trading_card_list1_fr = $request->trading_card_list1_fr;
        $serviceTrading->trading_card_list2_fr = $request->trading_card_list2_fr;
        $serviceTrading->trading_card_list3_fr = $request->trading_card_list3_fr;
        $serviceTrading->save();

        return redirect()->route('service.trading')->with('message', 'Trading created successfully');
    }

    public function serviceTradingHeddingEdit($id)
    {
        $serviceTrading = Service::findOrFail($id);
        return Inertia::render('Services/Trading/Heading/Edit', compact('serviceTrading'));
    }

    public function serviceTradingHeddingUpdate(Request $request, $id)
    {
        $serviceTrading = Service::findOrFail($id);

        $serviceTrading->language = $request->language;
        $serviceTrading->section = 'trading_hedding';
        $serviceTrading->trading_header_eng = $request->trading_header_eng;
        $serviceTrading->trading_sub_header_eng = $request->trading_sub_header_eng;
        $serviceTrading->trading_header_fr = $request->trading_header_fr;
        $serviceTrading->trading_sub_header_fr = $request->trading_sub_header_fr;
        $serviceTrading->save();

        return redirect()->route('service.trading')->with('message', 'Trading hedding updated successfully');
    }

    public function serviceTradingEdit($id)
    {
        $serviceTrading = Service::findOrFail($id);
        return Inertia::render('Services/Trading/Edit', compact('serviceTrading'));
    }

    public function serviceTradingUpdate(Request $request, $id)
    {
        $serviceTrading = Service::findOrFail($id);

        $serviceTrading->language = $request->language;
        $serviceTrading->section = 'trading';
        $serviceTrading->trading_card_image = $request->trading_card_image;
        $serviceTrading->trading_card_title_eng = $request->trading_card_title_eng;
        $serviceTrading->trading_card_sub_title_eng = $request->trading_card_sub_title_eng;
        $serviceTrading->trading_card_list1_eng = $request->trading_card_list1_eng;
        $serviceTrading->trading_card_list2_eng = $request->trading_card_list2_eng;
        $serviceTrading->trading_card_list3_eng = $request->trading_card_list3_eng;
        $serviceTrading->trading_card_title_fr = $request->trading_card_title_fr;
        $serviceTrading->trading_card_sub_title_fr = $request->trading_card_sub_title_fr;
        $serviceTrading->trading_card_list1_fr = $request->trading_card_list1_fr;
        $serviceTrading->trading_card_list2_fr = $request->trading_card_list2_fr;
        $serviceTrading->trading_card_list3_fr = $request->trading_card_list3_fr;
        $serviceTrading->save();

        return redirect()->route('service.trading')->with('message', 'Trading updated successfully');
    }

    public function serviceTradingDestroy($id)
    {
        $serviceTrading = Service::findOrFail($id);
        $serviceTrading->delete();
        return redirect()->route('service.trading')->with('message', 'Trading deleted successfully');
    }


    // serviceChoose
    public function serviceChoose()
    {
        // service choose
        $chooseHeaderEng = Service::where('language', 'english')->where('section', 'service_choose_header')->select('id', 'language', 'service_choose_header_eng', 'service_choose_sub_header_eng')->first();
        $chooseHeaderFr = Service::where('language', 'france')->where('section', 'service_choose_header')->select('id', 'language', 'service_choose_header_fr', 'service_choose_sub_header_fr')->first();


        $chooseCard = Service::where('section', 'service_choose')->get();

        return Inertia::render('Services/Choose/Index', compact('chooseHeaderEng', 'chooseHeaderFr', 'chooseCard'));
    }

    public function serviceChooseHeddingEdit($id)
    {
        $serviceChoose = Service::findOrFail($id);
        return Inertia::render('Services/Choose/Heading/Edit', compact('serviceChoose'));
    }

    public function serviceChooseHeddingUpdate(Request $request, $id)
    {
        $serviceChoose = Service::findOrFail($id);

        $serviceChoose->language = $request->language;
        $serviceChoose->section = 'service_choose_header';
        $serviceChoose->service_choose_header_eng = $request->service_choose_header_eng;
        $serviceChoose->service_choose_sub_header_eng = $request->service_choose_sub_header_eng;
        $serviceChoose->service_choose_header_fr = $request->service_choose_header_fr;
        $serviceChoose->service_choose_sub_header_fr = $request->service_choose_sub_header_fr;
        $serviceChoose->save();

        return redirect()->route('service.choose')->with('message', 'Choose hedding updated successfully');
    }

    public function serviceChooseCreate()
    {
        return Inertia::render('Services/Choose/Create');
    }

    public function serviceChooseStore(Request $request)
    {
        $serviceChoose = new Service();
        $serviceChoose->language = $request->language;
        $serviceChoose->section = 'service_choose';
        $serviceChoose->service_choose_card_icon = $request->service_choose_card_icon;
        $serviceChoose->service_choose_card_title_eng = $request->service_choose_card_title_eng;
        $serviceChoose->service_choose_card_sub_title_eng = $request->service_choose_card_sub_title_eng;
        $serviceChoose->service_choose_card_title_fr = $request->service_choose_card_title_fr;
        $serviceChoose->service_choose_card_sub_title_fr = $request->service_choose_card_sub_title_fr;
        $serviceChoose->save();

        return redirect()->route('service.choose')->with('message', 'Choose created successfully');
    }

    public function serviceChooseEdit($id)
    {
        $serviceChoose = Service::findOrFail($id);
        return Inertia::render('Services/Choose/Edit', compact('serviceChoose'));
    }

    public function serviceChooseUpdate(Request $request, $id)
    {
        $serviceChoose = Service::findOrFail($id);

        $serviceChoose->language = $request->language;
        $serviceChoose->section = 'service_choose';
        $serviceChoose->service_choose_card_icon = $request->service_choose_card_icon;
        $serviceChoose->service_choose_card_title_eng = $request->service_choose_card_title_eng;
        $serviceChoose->service_choose_card_sub_title_eng = $request->service_choose_card_sub_title_eng;
        $serviceChoose->service_choose_card_title_fr = $request->service_choose_card_title_fr;
        $serviceChoose->service_choose_card_sub_title_fr = $request->service_choose_card_sub_title_fr;
        $serviceChoose->save();

        return redirect()->route('service.choose')->with('message', 'Choose updated successfully');
    }

    public function serviceChooseDestroy($id)
    {
        $serviceChoose = Service::findOrFail($id);
        $serviceChoose->delete();
        return redirect()->route('service.choose')->with('message', 'Choose deleted successfully');
    }
}
