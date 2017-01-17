<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GitHub;

class GitHubController extends Controller
{
    public function status()
    {
        $user_information = GitHub::me()->show();
        $followers = Github::me()->followers();

        return view('status', [
            'info' => $user_information,
            'avatar' => $user_information['avatar_url'],
            'user_name' => $user_information['login'],
            'category_name' => 'プレイヤーステータス',
            'followers' => count($followers),
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
        $equipments = [
            'MacBook Pro 13inch',
            'Windows',
        ];

        return view('equipment', [
            'category_name' => '装備一覧',
            'equipments' => $equipments,
        ]);
    }

    public function title()
    {
        $former_titles = [
            '再生と破壊の', '奇跡の', '時の', '神の', '時空の', '大空の',
            '追放されし', '乱世の', '史上最強の', '殲滅の', '隻腕の', '天空の',
            '紅蓮の', '煉獄の', '断罪の', '封印されし', '幻想の', '失われし',
            '忌まわしき',
        ];
        $latter_titles = [
            'シュヴァルツ・ゲゼルシャフト',
            'クーゲルシュライバー',
            'ナーゼンシュライム',
            'ズィーベン・エルフ',
            'シュヴァルツシュヴァイン',
            'プリンツェッスィン',
            'シュタインフルス',
            'オストハウプトシュタット',
            'グローセンハンク',
            'サーヴァント',
            'ジークフリート',
            'ドルフファーレン',
        ];

        return view('title', [
            'category_name' => '称号一覧',
            'former_titles' => $former_titles,
            'latter_titles' => $latter_titles,
        ]);
    }
}
