<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GitHub;

class GitHubController extends Controller
{
    public function status()
    {
        $user_information = GitHub::me()->show();

        return view('status', [
            'info' => $user_information,
            'avatar' => $user_information['avatar_url'],
            'user_name' => $user_information['login'],
            'category_name' => 'プレイヤーステータス'
        ]);
    }

    public function skills()
    {
        return view('skills', [
            'category_name' => 'スキル一覧'
        ]);
    }

    public function equipment()
    {
        return view('equipment', [
            'category_name' => '装備一覧'
        ]);
    }

    public function title()
    {
        return view('title', [
            'category_name' => '称号一覧'
        ]);
    }
}
