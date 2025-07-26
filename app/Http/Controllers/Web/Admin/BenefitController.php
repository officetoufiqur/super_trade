<?php

namespace App\Http\Controllers\Web\Admin;

use Inertia\Inertia;
use App\Models\Benefit;
use App\Models\BannerCMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BenefitController extends Controller
{
    public function benefitBanner()
    {
        $benefitBannerEng = BannerCMS::where('language', 'english')->where('section', 'benefit')->select('id', 'language', 'title_eng', 'sub_title_eng', 'image')->first();
        $benefitBannerFr = BannerCMS::where('language', 'france')->where('section', 'benefit')->select('id', 'language', 'title_fr', 'sub_title_fr')->first();

        return Inertia::render('Benefit/Banner/Index', compact('benefitBannerEng', 'benefitBannerFr'));
    }

    public function benefitBannerEdit($id)
    {
        $benefitBanner = BannerCMS::findOrFail($id);

        return Inertia::render('Benefit/Banner/Edit', compact('benefitBanner'));
    }

    public function benefitBannerUpdate(Request $request, $id)
    {
        $benefitBanner = BannerCMS::findOrFail($id);
        $benefitBanner->update($request->all());

        return redirect()->route('benefit.banner')->with('message', 'Benefit banner updated successfully');
    }

    public function benefitMembership()
    {
        // benefit heading
        $benefitHeadingEng = Benefit::where('language', 'english')->where('section', 'heading')->select('id', 'language', 'heading_eng', 'sub_heading_eng')->first();
        $benefitHeadingFr = Benefit::where('language', 'france')->where('section', 'heading')->select('id', 'language', 'heading_fr', 'sub_heading_fr')->first();

        $benefitMembership = Benefit::where('section', 'card')->get();

        return Inertia::render('Benefit/Membership/Index', compact('benefitMembership', 'benefitHeadingEng', 'benefitHeadingFr'));
    }

    public function benefitMembershipCreate()
    {
        return Inertia::render('Benefit/Membership/Create');
    }

    public function benefitHeadingEdit($id)
    {
        $benefitCardHeading = Benefit::findOrFail($id);

        return Inertia::render('Benefit/Membership/Heading/Edit', compact('benefitCardHeading'));
    }

    public function benefitMembershipStore(Request $request)
    {
        $benefitCard = new Benefit();

        $benefitCard->language = $request->language;
        $benefitCard->section = 'card';
        $benefitCard->image = $request->image;
        $benefitCard->icon = $request->icon;
        $benefitCard->card_title_eng = $request->card_title_eng;
        $benefitCard->card_description_eng = $request->card_description_eng;
        $benefitCard->card_btn_text_eng = $request->card_btn_text_eng;
        $benefitCard->card_title_fr = $request->card_title_fr;
        $benefitCard->card_description_fr = $request->card_description_fr;
        $benefitCard->card_btn_text_fr = $request->card_btn_text_fr;
        $benefitCard->save();

        return redirect()->route('benefit.membership')->with('message', 'Benefit heading updated successfully');
    }

    public function benefitMembershipEdit($id)
    {
        $benefitMembership = Benefit::findOrFail($id);

        return Inertia::render('Benefit/Membership/Edit', compact('benefitMembership'));
    }

    public function benefitMembershipUpdate(Request $request, $id)
    {
        $benefitMembership = Benefit::findOrFail($id);
        $benefitMembership->update($request->all());

        return redirect()->route('benefit.membership')->with('message', 'Benefit membership updated successfully');
    }

    public function benefitMembershipDestroy($id)
    {
        $benefitMembership = Benefit::findOrFail($id);
        $benefitMembership->delete();

        return redirect()->route('benefit.membership')->with('message', 'Benefit membership deleted successfully');
    }

    public function benefitNewsletter()
    {
        $benefitNewsletterEng = Benefit::where('language', 'english')->where('section', 'newsletter')->select('id', 'language', 'newsletter_title_eng', 'newsletter_sub_title_eng', 'newsletter_btn_text_eng')->first();
        $benefitNewsletterFr = Benefit::where('language', 'france')->where('section', 'newsletter')->select('id', 'language', 'newsletter_title_fr', 'newsletter_sub_title_fr', 'newsletter_btn_text_fr')->first();

        return Inertia::render('Benefit/Newsletter/Index', compact('benefitNewsletterEng', 'benefitNewsletterFr'));
    }

    public function benefitNewsletterEdit($id)
    {
        $benefitNewsletter = Benefit::findOrFail($id);
        return Inertia::render('Benefit/Newsletter/Edit', compact('benefitNewsletter'));
    }

    public function benefitNewsletterUpdate(Request $request, $id)
    {
        $benefitNewsletter = Benefit::findOrFail($id);
        $benefitNewsletter->update($request->all());

        return redirect()->route('benefit.newsletter')->with('message', 'Benefit newsletter updated successfully');
    }
}
