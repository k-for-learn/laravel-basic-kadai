<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrentDateController extends Controller
{

    public function index()
    {
        // 今日の日付を取得
        $current_date = date('n月j日');

        // ビューに渡す
        return view('current-date', compact('current_date'));
    }

}
