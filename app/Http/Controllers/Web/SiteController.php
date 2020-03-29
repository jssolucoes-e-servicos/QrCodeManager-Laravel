<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function Index()
    {
        return view('web.home');
    }

    public function AboutUs()
    {
        return view('web.about-us');
    }

    public function Benefits()
    {
        return view('web.benefits');
    }

    public function Customers()
    {
        return view('web.customers');
    }

    public function Plains()
    {
        return view('web.plains');
    }

    public function Policy()
    {
        return view('web.policy');
    }

    public function Contact()
    {
        return view('web.contact');
    }

    Public function InvalidQrCode()
    {
        return view('web.invalid-qrcode');
    }
}
