<?php
/*
Package         :   Bidibidi Origin
Filename        :   BidibidiOriginController.php
Descriptions    :   Controller Pages. 


*/

namespace Bidibidi\Origin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class BidibidiOriginController extends Controller
{
    //
    public function startPage()
    {
    	
    	return view('bidibidi-origin::pages.index');

    }

        public function aboutus()
    {
    	return view('bidibidi-origin::pages.aboutus');
    }

            public function contact()
    {
    	return view('bidibidi-origin::pages.contact');
    }
            public function faq()
    {
    	return view('bidibidi-origin::pages.faq');
    }    
            public function sitemap()
    {
    	return view('bidibidi-origin::pages.sitemap');
    }
            public function terms()
    {
    	return view('bidibidi-origin::pages.terms');
    }
            public function privacy()
    {
    	return view('bidibidi-origin::pages.privacy');
    }
    
}
