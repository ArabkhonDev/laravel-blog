<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view("main");
    }
    public function about()
    {
        return view("about");
    }
    public function project()
    {
        return view("project");
    }
    public function news()
    {
        return view("news");
    }
    public function contact()
    {
        return view("contact");
    }
    public function vacancy()
    {
        return view("vacancy");
    }
    public function latestNews()
    {
        return view("latestNews");
    }
    public function products()
    {
        return view("products");
    }
}
