<?php

namespace App\Models;

class post 

{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Canva Narendra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur esse molestiae ea eum natus iusto officia, iste, fugiat quod, veniam nisi aliquam hic repudiandae sequi cupiditate quae sunt quaerat! Iure repudiandae velit voluptatem animi, obcaecati harum dolore architecto soluta exercitationem itaque voluptas dolorem quibusdam quod ipsa, assumenda ad sit repellendus excepturi non eaque ipsum reprehenderit quo veritatis rerum! Necessitatibus pariatur quis praesentium modi! Odit qui obcaecati dolorem mollitia magni ipsum tempora ut. Ipsam quod sequi omnis natus accusamus eveniet ut?."
        ],
        [
            "title" => "Judul Tulisan Canva",
            "slug" => "judul-tulisan-kedua",
            "author" => "Argantara Reynand",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum aspernatur labore autem ullam iure, possimus assumenda laborum odit, doloribus nisi, excepturi molestias at quaerat. Veritatis libero consectetur eius nam alias molestias rem quam. Laborum officiis perspiciatis provident nisi, distinctio repudiandae dolores neque ea tempore facere sed recusandae sequi sunt numquam a delectus, iste, eveniet dicta saepe consectetur repellat laboriosam eaque! Maxime minima ipsa sed animi totam in praesentium qui velit dolor facilis culpa quaerat veniam, nulla minus placeat ab aliquam officiis nemo. Tempora repudiandae nemo sint, corrupti commodi, sequi qui voluptate blanditiis possimus quidem cumque error rem ab aliquam a!"
        ],
    ];
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }


public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}