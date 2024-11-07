<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
        $news = News::orderBy('created_at', 'asc')->get();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $newsItem = News::where('id', $id)->first();
        if ($newsItem) {
            return view('news.show', compact('newsItem'));
        }
        return redirect()->route('404');
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        News::create($request->all());

        return redirect()->route('news.index');
    }

    public function edit($id)
    {
        $newsItem = News::where('id', $id)->first();

        return view('news.edit', compact('newsItem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $newsItem = News::where('id', $id)->first();
        if ($newsItem) {
            $newsItem->title = $request->title;
            $newsItem->content = $request->content;
            $newsItem->save();
            return redirect()->route('news.index')->with('success', 'Заметка обновлена!');
        } else {
            return redirect()->route('404');
        }
    }
}
