@extends('layouts.app')

@section('content')
    <h1>Добавить заметку</h1>
    <form action="{{ route('news.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Заголовок</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="content">Содержимое</label>
            <textarea name="content" required></textarea>
        </div>
        <button type="submit">Сохранить</button>
    </form>
    <a href="{{ route('news.index') }}" class="back-note">Назад к списку заметок</a>
@endsection
