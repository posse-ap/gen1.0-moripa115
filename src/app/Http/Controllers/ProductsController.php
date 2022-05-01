<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class ProductsController
{
    public function index()
    {
        $user_id = 1;
        // 学習時間
        $dt_from = new \Carbon\Carbon();
        $dt_from->startOfMonth();

        $dt_to = new \Carbon\Carbon();
        $dt_to->endOfMonth();
        // $reports = DB::table('study')
        // ->whereBetween('date', [$dt_from, $dt_to])
        // ->sum('time');

        // dd($reports);
        $today = Carbon::today();

        $days = DB::table('study')
            ->where('date', $today)
            ->where('user_id', $user_id)
            ->sum('time');

        $months =  DB::table('study')
            ->whereBetween('date', [$dt_from, $dt_to])
            ->where('user_id', $user_id)
            ->sum('time');

        $total = DB::table('study')
            ->where('user_id', $user_id)
            ->sum('time');

        // modal(学習コンテンツ)
        $contents = DB::table('contents')
            ->pluck('name');

        // modal(学習言語)
        $language = DB::table('languages')
            ->pluck('name');

        //chart(学習言語)
        $html = DB::table('study')
            ->where('languages_id', 1)
            ->where('user_id', $user_id)

            ->sum('time');
        //chart(学習言語)
        $css = DB::table('study')
            ->where('languages_id', 2)
            ->where('user_id', $user_id)

            ->sum('time');
        //chart(学習言語)
        $javascript = DB::table('study')
            ->where('languages_id', 3)
            ->where('user_id', $user_id)

            ->sum('time');
        //chart(学習言語)
        $php = DB::table('study')
            ->where('languages_id', 4)
            ->where('user_id', $user_id)

            ->sum('time');


        //chart(コンテンツ)
        $nyobi = DB::table('study')
            ->where('contents_id', 1)
            ->where('user_id', $user_id)

            ->sum('time');
        //chart(コンテンツ)
        $dot = DB::table('study')
            ->where('contents_id', 2)
            ->where('user_id', $user_id)

            ->sum('time');
        //chart(コンテンツ)
        $pkadai = DB::table('study')
            ->where('contents_id', 3)
            ->where('user_id', $user_id)
            ->sum('time');

        //barchart
        $times = DB::table('study')
            ->where('user_id', $user_id)
            ->pluck('time');
        // dd($times);

        return view('top', ['days' => $days, 'months' => $months, 'total' => $total, 'today' => $today, 'contents' => $contents, 'languages' => $language, 'html' => $html, 'css' => $css, 'javascript' => $javascript, 'php' => $php, 'nyobi' => $nyobi, 'dot' => $dot, 'pkadai' => $pkadai, 'times' => $times]);
    }

    public function news()
    {
        $url = 'https://bkrs3waxwg.execute-api.ap-northeast-1.amazonaws.com/default/news';
        $client = new Client();
        $response = $client->request('GET', $url)->getBody()->getContents();
        $json = json_decode($response);

        return view('news', ['blogs' => $json]);
    }

    public function detail($id)
    {
        $url = 'https://bkrs3waxwg.execute-api.ap-northeast-1.amazonaws.com/default/news/' . $id;
        $client = new Client();
        $response = $client->request('GET', $url)->getBody()->getContents();
        $json = json_decode($response);
        $detail = $json;
        // dd($detail);
        return view('detail', ['detail' => $detail]);
    }

    public function add(Request $request)
    {
        // dd($request->languages);
        $user_id = 1;

        DB::table('study')
            ->insert([
                'contents_id' => $request->contents,
                'languages_id' => $request->languages,
                'date' => $request->date,
                'time' => $request->time,
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => $user_id,
            ]);
        return redirect('/');
    }
}
