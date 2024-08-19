<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
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