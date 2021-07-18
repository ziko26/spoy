@extends('layouts.front.front')
@section('title', e($page->page_name))
@section('content')
<style>
body{background:white}
</style>
<div class="page_content">
    <div class="container">
        <h1 class="text-center">{{$page->page_name}}</h1>
        <div class="content">{!! $page->page_content !!}</div>
    </div>
</div>
@endsection

