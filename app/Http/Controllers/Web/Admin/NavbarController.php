<?php

namespace App\Http\Controllers\Web\Admin;

use Inertia\Inertia;
use App\Models\Navbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavbarController extends Controller
{
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

    public function navbarEdit($id)
    {
        $navbar = Navbar::find($id);
        return Inertia::render('Home/Navbar/NavbarEdit', compact('navbar'));
    }

    public function navbarUpdate(Request $request, $id)
    {
        $navbar = Navbar::find($id);
        $navbar->language = $request->language;
        $navbar->title_eng = $request->title_eng;
        $navbar->url = $request->url;
        $navbar->title_fr = $request->title_fr;
        $navbar->url = $request->url;
        $navbar->save();

        return redirect()->route('home.navbar')->with('message', 'Navbar updated successfully');
    }

    public function navbarDestroy($id)
    {
        $navbar = Navbar::find($id);
        $navbar->delete();
        return redirect()->route('home.navbar')->with('message', 'Navbar deleted successfully');
    }
}
