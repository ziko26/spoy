
@extends('layouts.front.front')
@section('title', 'الصفحة الرئيسية')
@section('content')
<!-- start search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
        <div class="col-sm-3 col-md-3">
        <form action="{{route('front.search')}}">
            <div class="form-group">
                <select name="category" class="form-control">
                    <option selected value="all">جميع التصنيفات</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach    
                </select>
            </div>
        </div>
        <div class="col-sm-8 col-md-8">
        <div class="form-group">
            <input name="q" type="search" placeholder="عن ماذا تبحث؟" class="form-control">
        </div>
        </div>
        <div class="col-sm-1 col-md-1">
        <div class="text-right search-button">
            <button type="submit" class="btn btn-primary"><i class="ft-search"></i></button>
        </div>
        </div>
        </form>
        </div>

        <div>
        </div>
        </div>
        </div>

        @if(Request::routeIs('front.search'))
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
       @endif

<!-- end search area -->
<!-- start categories section -->
@if(Request::routeIs('front.index'))
<div class="categories">
    <div class="container">
        <h2 class="text-right">إختر تصنيف</h2>
        <div class="row">
            @foreach($categories as $category)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="category">
                <a href="{{route('front.categories', $category->slug)}}">
                <img src="{{asset('images/admin/categories/'.$category->image)}}" alt="{{$category->name}}">
                    <span>{{$category->name}}</span>
                </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endif
<!-- end categories section -->
@endsection

