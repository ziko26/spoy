@extends('layouts.user.user')
@section('title', 'Edit Item')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('user.items.update', $item->id)}}" enctype="multipart/form-data">
            @csrf
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-tag"></i> Create New item</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="item_name">item Name</label>
                              <input type="text" id="item_name" value="{{$item->name}}" class="form-control" placeholder="Name : Shirt, Choeses" name="name">
                              @error('name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="item_price">Price</label>
                              <input type="number" step=".01" id="item_price" value="{{$item->price}}" class="form-control" placeholder="Add Price" name="price">
                              @error('price')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                          </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="item_price_descount">Price after discount</label>
                              <input type="number" step=".01" id="item_price_descount" value="{{$item->price_descount}}" class="form-control" placeholder="Add Price after discount" name="price_descount">
                              @error('price_descount')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                          </div>
                          </div>
                          <div class="col-md-12">
                          <div class="form-group">
                          @php 
                              $images = explode ("|", $item->image);
                          @endphp
                          @foreach($images as $img)
                            <img width="200" height="200" src="{{asset('public/images/user/items/'.$img)}}" alt="{{$item->name}}">
                          @endforeach
                            </div>
                            <div class="form-group">
                                <input type="file" accept=".png, .jpg, .jpeg"  name="image[]" class="form-control" multiple="multiple">
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group mt-5">
                            <label class="mb-2">Add Description</label>
                            <input type="hidden" name="description" id="quill_html">
                            <div id="editor">
                            {!! $item->description !!}
                            </div>
                             @error('description')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions left">
                        <button id="submit" type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
            </div>
        </div>
    </div>
</div

@endsection