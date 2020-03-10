<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function translate (Request $request)
    {
        //Google dịch
        $keyword   = request('keyword');
        $translate = '';
        if ($keyword && $request->isMethod('POST')) {
            $url = 'https://translation.googleapis.com/language/translate/v2';
            $response = Http::get($url, [
                'key'    => 'AIzaSyBorl4Phglb8h8k4AzOiWu7kyZ_mmsi60Q',
                'q'      => $keyword,
                'source' => 'vi',
                'target' => 'zh'
            ]);

            $response  = json_decode($response->body());
            $translate = data_get($response, 'data.translations.0.translatedText');
        }

        return view('translate', compact('translate'));
    }

    public function fluentString()
    {
        return (string) Str::of('  Laravel Framework 6.x ')
            ->trim()
            ->replace('6.x', '7.x')
            ->slug();
    }

    public function posts ()
    {
        $posts = Post::paginate(15);

        return view ('posts', compact('posts'));
    }
}
