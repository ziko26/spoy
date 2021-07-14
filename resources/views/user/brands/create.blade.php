@extends('layouts.user.user')
@section('title', 'Setup Your Brand')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
        @if($errors->all())
              @foreach($errors->all() as $error)
              <div class="alert alert-danger">
              {{ $error }}
              </div>
              @endforeach
              @endif 
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('user.brands.store')}}" enctype="multipart/form-data">
            @csrf
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-tag"></i> Create New brand</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="brand_name">brand Name</label>
                              <input type="text" id="brand_name" class="form-control" placeholder="Name : Shirt, Choeses" name="name">
                              @error('name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="brand_slug">Slug</label>
                              <input type="text" id="brand_slug" class="form-control" placeholder="Slug" name="slug">
                              @error('slug')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-12">
                          <div class="form-group">
                          <label for="category_id">Select Category</label>
                            <select name="category_id" class="form-control">
                                <option selected disabled>Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                          <div class="form-group">
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