<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    protected $guarded = array('id');

    public static $rules = array(

        // 必須・文字数はマックス255文字
        'body' => 'required|max:255',
    );


    // Userモデルに関連付けを行う
    public function user()
    {
      return $this->belongsTo('App\User');
    }


    // 論理削除
    use SoftDeletes;
}
