<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\User;

class NewsController extends Controller
{
    public function index()
    {
        $newspage = News::latest();

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in ' . $category->cat_name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = 'by ' . $author->name;
        }

        return view('newspage', [
            "title" => "Newspage " . $title,
            'newspage' => $newspage->Search(request(['search','category','author']))->paginate(20)->withQueryString()
        ]);
    }

    public function show(News $news)
    {
        return view('news', [
            "title" => $news->title,
            "news" => $news
        ]);
    }
}
