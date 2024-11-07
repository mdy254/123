@extends('layouts.app')

@section('content')
    <h1 class="edit-title">Редактировать заметку</h1>

    <form action="{{ route('news.update', $newsItem->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Заголовок</label>
            <input type="text" name="title" value="{{ $newsItem->title }}" required>
        </div>

        <div>
            <label for="content">Содержимое</label>
            <textarea name="content" required>{{ $newsItem->content }}</textarea>
        </div>

        <button type="submit">Сохранить изменения</button>
    </form>

    <a href="{{ route('news.index') }}" class="back-link">Назад к списку заметок</a>
@endsection

