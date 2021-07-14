@extends('layouts.user.user')
@section('title', 'Create New Item')
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
            <form method="post" action="{{route('user.items.store')}}" enctype="multipart/form-data">
            @csrf
                      <div class="form-body">
                      @include('user.includes.alerts.success')
                      @include('user.includes.alerts.errors')
                        <h4 class="form-section"><i class="ft-tag"></i> Create New Item</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="product_name">Item Name</label>
                              <input type="text" id="product_name" class="form-control" placeholder="Name : Shirt, Choeses" value="{{ old('name') }}" name="name">
                              @error('name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                       
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="product_price">Price</label>
                              <input type="number" step=".01" id="product_price" class="form-control" placeholder="Add Price" value="{{ old('price') }}" name="price">
                              @error('price')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                          </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="product_price_descount">Price after discount</label>
                              <input type="number" step=".01" id="product_price_descount" class="form-control" placeholder="Add Price after discount" value="{{ old('price_descount') }}" name="price_descount">
                              @error('price_descount')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                          </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="file" accept=".png, .jpg, .jpeg" name="image[]" value="{{ old('image') }}" class="form-control" multiple="multiple">
                              @error('image')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group mt-5">
                            <label class="mb-2">Add Description</label>
                            <input type="hidden" name="description" id="quill_html">
                            <div style="height:200px" id="editor">
                            {!! old('description') !!}
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