<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return
            [
                [
                    'id' => 1,
                    'slug' => 'judul-artikel-1',
                    'title'  => 'Judul Artikel 1',
                    'author' => 'Rizky Maulana',
                    'body'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet omnis, vero ab
                               facilis nisi qui. Facilis, possimus illum necessitatibus, est praesentium placeat deserunt enim rerum quis magni hic ipsum quas.'
                ],
                [
                    'id' => '2',
                    'slug' => 'judul-artikel-2',
                    'title'  => 'Judul Artikel 2',
                    'author' => 'Rizky Maulana',
                    'body'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet omnis, vero ab
                               facilis nisi qui. Facilis, possimus illum necessitatibus, est praesentium placeat deserunt enim rerum quis magni hic ipsum quas.'
                ]
            ];
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
