<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Contact;
use App\Models\AboutUs;
use App\Models\Service;

class ManagementController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('company.home', 
        [
            'title' => 'Home',
            'home' => $home,
        ]);
    }
    public function aboutus()
    {
        $aboutUs = AboutUs::find(6);
        $about = AboutUs::all();
        
        return view('company.aboutus', [
            'title' => 'About Us',
            'aboutUs' => $aboutUs,
            'about' => $about,
        ]);
    }
    public function contact()
    {
        $contact = Contact::first();

        return view('company.contact', [
            'title' => 'Contact',
            'contact' => $contact,

        ]);
    }   

    public function visimisi(){
        return view('company.visimisi', [
            'title' => 'Visi Misi',
        ]);
    }

    public function service(){

        $service = Service::all();

        return view('company.service', [
            'title' => 'Service',
            'service' => $service,

        ]);
    }

    public function client(){
        return view('company.client', [
            'title' => 'Client',
        ]);
    }

    public function other()
    {
        return view('company.client', [
            'title' => 'Client',
        ]);
    }

    public function galeri()
    {
        return view('company.galeri', [
            'title' => 'Galeri',
        ]);
    }
}
