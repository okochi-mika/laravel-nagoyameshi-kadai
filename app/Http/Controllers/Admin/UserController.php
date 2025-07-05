<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // 会員一覧ページを表示
    public function index(Request $request)
    {
        // 検索キーワードを取得
        $keyword = $request->input('keyword');

        // 検索あり・なしで取得データを分ける
        $query = User::query();

        if (!empty($keyword)) {
            $query->where('name', 'like', "%{$keyword}%")
                  ->orWhere('email', 'like', "%{$keyword}%");
        }

        // ページネーション（例：10件ずつ）
        $users = $query->paginate(10)->withQueryString();

        return view('admin.users.index', [
            'users' => $users,
            'keyword' => $keyword,
            'total' => $users->total(),
        ]);
    }

    // 会員詳細ページを表示
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', [
            'user' => $user,
        ]);
    }
}
