<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Services\TweetService; // TweetServiceのインポート
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function __invoke(Request $request)
    public function __invoke(Request $request,TweetService $tweetService)
    {
        //
        // return 'Single Action!';
        // return view('tweet.index',['name' => 'laravel']);

        // $tweets = Tweet::all();
        // $tweets = Tweet::orderBy('created_at','DESC')->get();

        // $tweetService = new TweetService(); // TweetServiceのインスタンスを作成
        $tweets = $tweetService->getTweets(); // つぶやきの一覧を取得

        // dump($tweets);
        // app(\App\Exceptions\Handler::class)->render(request(),throw new \Error('dumpreport.'));

        // dd($tweets);
        // return view('tweet.index')
        // ->with('name','laravel')
        // ->with('version','8');

        return view('tweet.index')
            ->with('tweets',$tweets);
        
    }
}
