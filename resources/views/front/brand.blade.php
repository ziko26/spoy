@extends('layouts.front.front')
@section('title', 'النشاط التجاري')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('front.index')}}"> الصفحة الرئيسية</a></li>
    <li class="breadcrumb-item"><a href="{{route('front.categories', $brand->category->slug)}}"> {{$brand->category->name}}</a></li>
    <li class="breadcrumb-item active" aria-current="page"> {{$brand->name}}</li>
  </ol>
</nav>
<!-- start brand section -->
<div class="brand">
    <div class="container">
        <div class="business-card">
            <div class="row">
                <div class="col-md-8">
                    <div class="brand-info">
                        <img src="{{asset('public/images/user/brand/'.$brand->image)}}" alt="{{$brand->name}}">
                        <h2>{{$brand->name}}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-contact">
                        <ul class="list-unstyled">
                            <li><a class="phone" href="tel:{{$brand->user->phone}}"><i class="ft-phone"></i> {{$brand->user->phone}}</a><li>
                            @if(isset($brand->user->address))    
                            <li><i class="ft-map-pin mr-1"></i>{{$brand->user->address}}</li>
                            @else
                            <li><i class="ft-map-pin mr-1"></i> العنوان غير متوفر</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="about"><i class="ft-edit-3"></i> عن النشاط التجاري :</h3>
        <div class="business-about">
            @if(strlen($brand->description) > 11)
            {!! $brand->description !!}
            @else
            <p class="lead">لا يوجد أي معومات عن هذا النشاط التجاري</p>
            @endif
        </div>

    </div>
</div>
<!-- end brand section -->
@if($brand->user->active == 1)
<!-- start item section -->
<div class="item">
    <div class="container">
        <div class="row">
        @foreach($items as $item)
        <div class="col-sm-6 col-md-4">
            <div class="card">
            @php 
                $images = explode ("|", $item->image);
            @endphp
            
           @if(count($images) > 1)
            <div id="carousel{{$item->id}}" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                   @foreach($images as $image)
                    <div class="carousel-item @if($loop->first) active @endif">
                    <img class="card-img-top" src="{{asset('public/images/user/items/'.$image)}}" alt="First slide">
                    </div>
                    @endforeach   
                </div>
                <a class="carousel-control-prev" href="#carousel{{$item->id}}" role="button" data-slide="prev">
                    <span aria-hidden="true"><i class="ft-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel{{$item->id}}" role="button" data-slide="next">
                    <span aria-hidden="true"><i class="ft-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @else
            <img class="card-img-top" style="max-height:300px" src="{{asset('public/images/user/items/'.$item->image)}}" alt="{{$brand->name}}">
            @endif
            
                <div class="card-body">
                
                <h3 class="text-center">{{$item->name}}</h3>
                @if(isset($item->price_descount))
                <div class="pricing d-flex justify-content-center align-items-center">
                <span class="text-right"><strike>{{$item->price}} درهم</strike></span>
                <span class="text-left">{{$item->price_descount}} درهم</span>
                </div>
                @else
                <span class="text-right">{{$item->price}} درهم</span>
                @endif
                <div>{!! $item->description !!}</div>
                @if($brand->category->id == 3)
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                إحجز الآن
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$item->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="{{route('customer.order', $item->id)}}">
                       @csrf
                        <div class="form-group">
                        <input class="form-control" type="text" name="customer_name" placeholder="الإسم الكامل">
                        </div>
                        <div class="form-group"> 
                        <input class="form-control" type="tel" name="customer_phone" placeholder="رقم الهاتف">
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                        <button type="submit" class="btn btn-success">تأكيد</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                @else
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                <i class="ft-shopping-cart"></i>  إطلب الآن 
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$item->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <form method="post" action="{{route('customer.order', $item->id)}}">
                       @csrf
                        <div class="form-group">
                        <input class="form-control" type="text" name="customer_name" placeholder="الإسم الكامل">
                        </div>
                        <div class="form-group">
                        <input class="form-control" type="tel" name="customer_phone" placeholder="رقم الهاتف">
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                        <button type="submit" class="btn btn-success">تأكيد</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                @endif
                </div>
            </div>
        </div>
        @endforeach 

        </div>
    </div>
</div>
<!-- end item section -->
@else
<p class="lead text-center mb-4">هذا النشاط التجاري غير مفعل</p>
@endif
@endsection

