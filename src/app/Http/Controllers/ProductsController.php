<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class ProductsController
{
    public function index()
    {
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
            ->value('time');

        $months =  DB::table('study')
            ->whereBetween('date', [$dt_from, $dt_to])
            ->sum('time');

        $total = DB::table('study')
            ->sum('time');

        // modal(学習コンテンツ)
        $contents = DB::table('contents')
            ->pluck('name');

        // modal(学習言語)
        $language = DB::table('languages')
            ->pluck('name');

        return view('top', ['days' => $days, 'months' => $months, 'total' => $total, 'today' => $today, 'contents' => $contents, 'languages' => $language]);
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
        $url = 'https://bkrs3waxwg.execute-api.ap-northeast-1.amazonaws.com/default/news/' .$id ;
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
    
        DB::table('study')
            ->insert([
                'contents_id' => $request->contents,
                'languages_id' => $request->languages,
                'date' => $request->date,
                'time' => $request->time,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect('/');    }
}
