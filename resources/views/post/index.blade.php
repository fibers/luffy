@extends('layout.layout')

@section('title', 'Posts List')

@section('content')

    <div class="pull-right">
        {!! $posts->render() !!}
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nick</th>
            <th>Avatar</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td class="col-md-1">{{ $post->id }}</td>
                <td class="">{{ $post->nick }}</td>
                <td class="col-md-1"><img src="{{ $post->avatar }}" class="img-responsive avatar-img" alt="Avatar"></td>
                <td class="col-md-1">{{ $post->created }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="pull-right">
        {!! $posts->render() !!}
    </div>

@endsection