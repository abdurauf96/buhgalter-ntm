<?php

namespace App\Http\Controllers;
use App\Message;
use App\Review;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $process=\App\Proccess::withTranslation(\App::getLocale())->get();
        $features=\App\Feature::withTranslation(\App::getLocale())->get();
        $about=\App\About::withTranslation(\App::getLocale())->first();
        $workers=\App\Worker::withTranslation(\App::getLocale())->get();
        $images=\App\Image::all();
        $partners=\App\Partner::all();
        $ad=\App\Advert::first();
       
        return view('welcome', compact('process', 'features', 'about','workers', 'images', 'ad','partners'));
    }

    public function aboutUs()
    {
        $about=\App\Page::whereSlug('about')->withTranslation(\App::getLocale())->first();
        return view('about', compact('about'));
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function discounts()
    {
        $discounts=\App\Discount::withTranslation(\App::getLocale())->get();
        return view('discounts', compact('discounts'));
    }

    public function viewDiscount($id)
    {
        $discount=\App\Discount::withTranslation(\App::getLocale())->findOrFail($id);
        return view('viewDiscount', compact('discount'));
    }

    public function courses()
    {
        return view('courses');
    }

    public function viewCourse($id)
    {
        $course=\App\Course::withTranslation(\App::getLocale())->findOrFail($id);
        return view('viewCourse', compact('course'));
    }

    public function informations()
    {
        return view('info');
    }

    public function search(Request $request)
    {
        $results=\App\Course::where('title', 'like', '%'.$request->q.'%')
        ->orWhere('body','like', '%'.$request->q.'%')
        ->get();
        return view('search', compact('results'));
    }

    public function callback(Request $request)
    {
        $message=new Message();
        $message->name=$request->name;
        $message->phone=$request->phone;
        $message->save();

        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $message=<<<TEXT
        Murojat qoldirildi:
        Telefon raqami: {$request->phone},
        Ismi: {$request->name},
TEXT;

        $data = [
            'chat_id' => '-1001248043398',
            'text' => $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
        return back();
    }

    public function review(Request $request)
    {
        $rev=new Review();
        $rev->name=$request->name;
        $rev->phone=$request->phone;
        $rev->email=$request->email;
        $rev->message=$request->message;
        $rev->save();
        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $message=<<<TEXT
        Fikr qoldirildi:
        Phone: {$request->phone},
        Name: {$request->name},
        Email: {$request->email},
        Fikr: {$request->message}
TEXT;

        $data = [
            'chat_id' => '-1001248043398',
            'text' => $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        return back();
    }
}
