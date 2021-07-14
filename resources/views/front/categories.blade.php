@extends('layouts.front.front')
@section('title', 'التصنيفات')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('front.index')}}">الصفحة الرئيسية</a></li>
    <li class="breadcrumb-item active" aria-current="page"> {{$category->name}}</li>
  </ol>
</nav>
<!-- start brands section -->
<div class="brands"> 
<div class="container">
    <div class="row">
    @foreach($brands as $brand)
        <div class="col-sm-6 col-md-4">
        <a href="{{route('front.brand', $brand->slug)}}">
        <div class="card">
            <img class="card-img-top" src="{{asset('images/user/brand/'.$brand->image)}}" alt="{{$brand->name}}">
            <div class="card-body">
            <h3 class="text-center">{{$brand->name}}</h3>
            <div class="d-flex justify-content-center align-items-center info">
              <span class="date">{{\Carbon\Carbon::parse($brand->created_at)->format('Y/m/d')}} <i class="ft-calendar"></i></span>
              <span class="city"><i class="ft-map-pin"></i> {{$brand->user->city->name}}</span>
            </div>
            </div>
        </div>
        </a>    
        </div>
    @endforeach    
    </div>
</div>
</div>
<!-- end brands section -->
@endsection

