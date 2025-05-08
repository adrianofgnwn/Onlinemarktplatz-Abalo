<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $query = DB::table('ab_article')
            ->join('ab_user', 'ab_article.ab_creator_id', '=', 'ab_user.id')
            ->select('ab_article.*', 'ab_user.ab_name as creator_name');

        if ($search) {
            $query->where('ab_article.ab_name', 'ILIKE', "%{$search}%");
        }

        $articles = $query->get();

        return view('articles.index', compact('articles'));
    }
}

