<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id){ 
		\Auth::user()->favorite($id); // 認証済みユーザ（閲覧者）が、idの投稿をお気に入り追加する
		return back(); // 前のURLへリダイレクトさせる
	}
	
	public function destroy($id){
		\Auth::user()->unfavorite($id); // 認証済みユーザ（閲覧者）が、idの投稿をお気に入り削除する
		return back(); // 前のURLへリダイレクトさせる
	}
}
