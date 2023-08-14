<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'name' => 'Resources',
            'slug' => 'resources',
        ],
        [
            'id' => 2,
            'name' => 'Documentation',
            'slug' => 'docs',
        ],
        [
            'id' => 3,
            'name' => 'News',
            'slug' => 'news',
        ],
        [
            'id' => 4,
            'name' => 'FAQs',
            'slug' => 'faqs',
        ],
    ];
}
