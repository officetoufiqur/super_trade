<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Faq;
use Inertia\Inertia;
use App\Models\BannerCMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
   public function faq(Request $request)
    {
        // faq banner
        $faqBannerEng = BannerCMS::where('language', 'english')->where('section', 'faq')->select('id', 'language', 'sub_title_eng', 'image')->first();
        $faqBannerFr = BannerCMS::where('language', 'france')->where('section', 'faq')->select('id', 'language', 'sub_title_fr')->first();

        // faq heading
        $faqHeadingEng = Faq::where('language', 'english')->where('section', 'heading')->select('id', 'language', 'heading_eng', 'sub_heading_eng')->first();
        $faqHeadingFr = Faq::where('language', 'france')->where('section', 'heading')->select('id', 'language', 'heading_fr', 'sub_heading_fr')->first();

        // faq card
        $faq = Faq::where('section', 'faq')->get();
        
        return Inertia::render('Faq/Index', compact('faqBannerEng', 'faqBannerFr', 'faqHeadingEng', 'faqHeadingFr', 'faq'));
    }

    public function faqCreate()
    {
        return Inertia::render('Faq/Create');
    }

    public function faqStore(Request $request)
    {
        Faq::create([
            'language' => $request->language,
            'section' => 'faq',
            'question_eng' => $request->question_eng,
            'answer_eng' => $request->answer_eng,
            'question_fr' => $request->question_fr,
            'answer_fr' => $request->answer_fr
        ]);
        return redirect()->route('faq')->with('message', 'Faq created successfully');
    }

    public function faqEdit($id)
    {
        $faq = Faq::find($id);
        return Inertia::render('Faq/Edit', compact('faq'));
    }

    public function faqUpdate(Request $request, $id)
    {
        Faq::find($id)->update([
            'language' => $request->language,
            'section' => 'faq',
            'question_eng' => $request->question_eng,
            'answer_eng' => $request->answer_eng,
            'question_fr' => $request->question_fr,
            'answer_fr' => $request->answer_fr
        ]);
        return redirect()->route('faq')->with('message', 'Faq updated successfully');
    }

    public function faqDestroy($id)
    {
        Faq::find($id)->delete();
        return redirect()->route('faq')->with('message', 'Faq deleted successfully');
    }
}
