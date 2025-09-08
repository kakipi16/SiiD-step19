<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //\App\Models\Post::factory(3)->create();これ使うのに必要だった。
    use HasFactory;
    //fillableで設定した値以外は、一括保存・更新処から除外するようにする。
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //カラムが多い時はこっちを使ったほうがいい。
    //guardedプロパティは一括で保存・更新しないカラムを指定する。
    // protected $guarded = [
    //     'id',
    // ];
}
