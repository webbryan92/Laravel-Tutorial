@extends('layout')

@section('title', 'Laracasts')

@section('content')
    <h1>My {{ $foo }} Website!</h1>
<ul>
    <?php foreach($tasks as $task) : ?>
        <li><?= $task; ?></li>
    <?php endforeach; ?>
    @foreach($tasks as $task)
        <li>{{ $task  }}</li>
    @endforeach
</ul>
@endsection
