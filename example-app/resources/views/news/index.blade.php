@extends('layouts.app')

@section('content')
    <h1>Заметки</h1>
    <ul>
        @foreach($news as $newsItem)
            <li>
                <a href="{{ route('news.show', $newsItem->id) }}" class="news-title">{{ $newsItem->title }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('news.create') }}" class="add-note">Добавить заметку</a>
@endsection

