<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('page.index');
    }

    public function aboutUs(){
        return view('page.aboutUs');
    }
    public function contact(){
        return view('page.contact');
    }
    //SERVICIOS
    public function optimizationService(){
        return view('page.services.searchEngineOptimization');
    }

    public function marketingService(){
        return view('page.services.socialMediaMarketing');
    }

    public function webService(){
        return view('page.services.webDesign');
    }

    public function audioVisual(){
        return view('page.services.audioVisualProduction');
    }

    public function branding(){
        return view('page.services.branding');
    }

    public function nebulaEdu(){
        return view('page.services.nebulaEdu');
    }
    //BLOG
    public function blog(){
        return view('page.blog.blog');
    }

    public function objetivePublic(){
        return view('page.blog.objetivePublic');
    }

    public function positionBrand(){
        return view('page.blog.positionBrand');
    }

    public function audioVideo(){
        return view('page.blog.audioVideo');
    }

    public function createPageWeb(){
        return view('page.blog.createPageWeb');
    }

    public function startVirtualStore(){
        return view('page.blog.startVirtualStore');
    }

    public function marketingB2B(){
        return view('page.blog.marketingB2B');
    }

    public function organizeWebContent(){
        return view('page.blog.organizeWebContent');
    }

    public function brandingImportance(){
        return view('page.blog.brandingImportance');
    }    
}
