<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        $video = Video::create([
           'title' => $request->title,
           'detail' => $request->detail
        ]);

        Category::create([
            'title' => $video->title,
            'categoryable_id' => $video->id,
            'categoryable_type' => 'App\Models\Video'
            ]);

        return $video;
    }
}
