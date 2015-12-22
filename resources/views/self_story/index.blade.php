@extends('layout.layout')

@section('title', 'Self Stories List')

@section('content')

    <div class="pull-right">
        {!! $selfStories->render() !!}
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
        @foreach ($selfStories as $selfStory)
            <tr>
                <td class="col-md-1">{{ $selfStory->id }}</td>
                <td class="">{{ $selfStory->title }}</td>
                <td class="col-md-2">{{ $selfStory->creatorname }}</td>
                <td class="col-md-1"><img src="{{ $selfStory->portrait }}" class="img-responsive avatar-img" alt="Avatar"></td>
                <td class="col-md-2">{{ date('Y-m-d H:i:s', $selfStory->createtime) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="pull-right">
        {!! $selfStories->render() !!}
    </div>

@endsection