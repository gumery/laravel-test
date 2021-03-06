<?php

namespace App\Http\Controllers;

use App\Article;

use Carbon\Carbon;


use Illuminate\Http\Request;
//use Request;
use App\Http\Requests;

//use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //显示文章列表
    public function index()
    {
        $articles = Article::latest()->published()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    //文章详情
    public function show($id)
    {
        $article = Article::findOrFail($id);
//        if (is_null($article)) return ;

        return view ('articles.show', ['article' => $article]);
    }

    //创建文章
    public function create()
    {
        return view('articles.create');
    }

    //保存文章
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $form = $request->all();

        $data['title'] = $form['title'];
        $data['content'] = $form['content'];
        $data['intro'] = mb_substr($form['content'],0,64);
        $data['published_time'] = $form['published_time'];
        $data['ctime'] = Carbon::now();
        $bool = Article::create($data);

        if (!$bool) return '数据保存异常';

        return redirect('/articles');
    }

}
