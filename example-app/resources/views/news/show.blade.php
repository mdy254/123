@extends('layouts.app')

@section('content')
    <h1>{{ $newsItem->title }}</h1>
    <h2>проверка гита</h2>
    <p>{{ $newsItem->content }}</p>

    <div class="actions">
        <a href="{{ route('news.edit', $newsItem->id) }}" class="edit-link">Редактировать заметку</a>
        <a href="{{ route('news.index') }}" class="back-link">Назад к списку заметок</a>
    </div>
@endsection
