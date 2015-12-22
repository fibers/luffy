@extends('layout.layout')

@section('title', 'Users List')

@section('content')

    <div class="pull-right">
        {!! $self_stories->render() !!}
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
        @foreach ($self_stories as $self_story)
            <tr>
                <td class="col-md-1">{{ $self_story->id }}</td>
                <td class="">{{ $self_story->title }}</td>
                <td class="col-md-2">{{ $self_story->creatorname }}</td>
                <td class="col-md-1"><img src="{{ $self_story->portrait }}" class="img-responsive avatar-img" alt="Avatar"></td>
                <td class="col-md-2">{{ date('Y-m-d H:i:s', $self_story->createtime) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="pull-right">
        {!! $self_stories->render() !!}
    </div>

@endsection