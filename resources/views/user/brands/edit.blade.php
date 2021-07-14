@extends('layouts.user.user')
@section('title', 'Edit Your Brand')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('user.brands.update', $brand->id)}}" enctype="multipart/form-data">
            @csrf
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-tag"></i> Create New brand</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="brand_name">brand Name</label>
                              <input type="text" id="brand_name" value="{{$brand->name}}" class="form-control" placeholder="Name : Shirt, Choeses" name="name">
                              @error('name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="brand_slug">Slug</label>
                              <input type="text" id="brand_slug" value="{{$brand->slug}}" class="form-control" placeholder="Slug" name="slug">
                              @error('slug')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-12">
                          <div class="form-group">
                          <label for="category_id">Select Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                <option   
                                {{$brand->category_id === $category->id ? 'selected' : ''}}
                                value="{{$category->id}}">{{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                          <div class="form-group">
                            <img width="200" height="200" src="{{asset('images/user/brand/'.$brand->image)}}" alt="{{$brand->name}}">
                            </div>
                            <div class="form-group">
                                <input type="file"  name="image" class="form-control">
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
                            {!! $brand->description !!}
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