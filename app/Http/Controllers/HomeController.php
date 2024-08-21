<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    // Activity 1
    public function about(): View
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page ... ";
        $viewData["author"] = "Developed by: Evelyn Zapata";
        return view('home.about')->with("viewData", $viewData);
    }    

    // Activity 2
    public function contact(): View
    {
        $viewData = [];
        $viewData["title"] = "Contact us - Online Store";
        $viewData["subtitle"] = "Contact us";
        $viewData["email"] = "online_store@gmail.com";
        $viewData["address"] = "P. Sherman, 42 Wallaby Way, Sydney, Australia";
        $viewData["phone"] = "04 1234 5678";
        return view('home.contact')->with("viewData", $viewData);
    }
}