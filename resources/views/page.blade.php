@extends('layouts.default')


@section('title', $page->title)



@section('content')

    <img src="{{ asset('storage/pages/'.$page->image->filename.'.'.$page->image->extension) }}">
	{!! $page->body !!}

@stop
