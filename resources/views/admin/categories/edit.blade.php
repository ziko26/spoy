@extends('layouts.admin.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('admin.categories.update', $category->id)}}" enctype="multipart/form-data">
            @csrf
                      <div class="form-body">
                      @include('admin.includes.alerts.success')
                      @include('admin.includes.alerts.errors')
                        <h4 class="form-section"><i class="ft-tag"></i> Edit {{$category->name}} Category</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="product_name">Category Name</label>
                              <input type="text" id="product_name" value="{{$category->name}}" class="form-control" placeholder="Name : Shirt, Choeses" name="name">
                              @error('name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="product_slug">Slug</label>
                              <input type="text" id="product_slug" class="form-control" placeholder="Slug" value="{{$category->slug}}" name="slug">
                              @error('slug')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                            @if(isset($category->image))
                            <img width="200" height="200" src="{{asset('images/admin/categories/'.$category->image)}}" alt="{{$category->name}}">
                            @endif
                              <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" value="{{$category->image}}" class="form-control">
                              @error('image')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions left">
                        <button type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
            </div>
        </div>
    </div>
</div

@endsection