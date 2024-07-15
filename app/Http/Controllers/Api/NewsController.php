<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

/**
 * Class NewsController
 *
 * @package App\Http\Controllers\Api
 * @author: Joost Raemakers <jraemakers@freedom.nl>
 */
class NewsController extends Controller
{
    /**
     * Returns news.
     *
     * @return Response
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function index()
    {
        $news = News::get();

        return response(['news' => $news]);
    }
}
