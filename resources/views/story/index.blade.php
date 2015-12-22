@extends('layout.layout')

@section('title', 'Stories List')

@section('content')

    <div class="pull-right">
        {!! $stories->render() !!}
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Creator Name</th>
            <th>Portrait</th>
            <th>Create Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($stories as $story)
            <tr>
                <td class="col-md-1">{{ $story->id }}</td>
                <td class="">{{ $story->title }}</td>
                <td class="col-md-2">{{ $story->creatorname }}</td>
                <td class="col-md-1"><img src="{{ $story->portrait }}" class="img-responsive avatar-img" alt="Avatar"></td>
                <td class="col-md-2">{{ date('Y-m-d H:i:s', $story->createtime) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="pull-right">
        {!! $stories->render() !!}
    </div>

@endsection