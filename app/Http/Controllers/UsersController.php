<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class UsersController extends Controller
{
    // Userの一覧表示
    public function index()
    {
        // ユーザ一覧をidの降順で取得
        $users = User::orderBy('id', 'desc')->paginate(10);
        
        // ユーザ一覧ビューでそれを表示
        return view('users.index', [
            'users' => $users,
        ]);
    }

    // Userの詳細情報の表示
    public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
        ]);
    }

    //  Userの更新画面表示
    public function edit($id)
    {
        //
    }

    // Userの更新処理
    public function update(Request $request, $id)
    {
        //
    }

    // Userの削除処理
    public function destroy($id)
    {
        //
    }
}
