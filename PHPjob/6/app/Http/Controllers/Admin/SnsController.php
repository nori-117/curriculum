<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでPosts Modelが扱えるようになる
use App\Posts;

class SnsController extends Controller
{
    //
    // public function add()
    // {
    //     return view('admin.sns.create');
    // }


    // public function create(Request $request)
    // {

    //     // Varidationを行う
    //     $this->validate($request, Posts::$rules);

    //     $posts = new Posts;
    //     $form = $request->all();

    //     // フォームから送信されてきた_tokenを削除する
    //     unset($form['_token']);


    //     // データベースに保存する
    //     $posts->fill($form);
    //     $posts->save();

    //     // admin/sns/createにリダイレクトする
    //     return redirect('admin/sns/create');
    // } 


















    public function add()
    {

        // 全ての投稿データを取得
        // $allposts = Posts::all();

        $allposts = Posts::latest()->get();

        // admin/sns/createを表示
        return view('admin/sns/create', ['allposts' => $allposts]);
       
    }


    public function create(Request $request)
    {

        // Varidationを行う
        $this->validate($request, Posts::$rules);

        $posts = new Posts;
        $form = $request->all();

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);


        // データベースに保存する
        $posts->fill($form);
        $posts->save();

        // 全ての投稿データを取得
        // $allposts = Posts::all();

        $allposts = Posts::latest()->get();

        // admin/sns/createを表示
        return view('admin/sns/create', ['allposts' => $allposts]);
    } 



    public function postDelete(Request $request)
    {
        // 該当するPosts Modelを取得
        $post = Posts::find($request->id);

        // 削除する
        $post->delete();
        return redirect('admin/sns/create');
    }  
}
