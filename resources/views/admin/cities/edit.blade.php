@extends('layouts.admin.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('admin.cities.update', $city->id)}}">
            @csrf
                      <div class="form-body">
                      @include('admin.includes.alerts.success')
                      @include('admin.includes.alerts.errors')
                        <h4 class="form-section"><i class="ft-tag"></i> Edit {{$city->name}} City</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="product_name">city Name</label>
                              <input type="text" id="product_name" value="{{$city->name}}" class="form-control" placeholder="Name : Shirt, Choeses" name="name">
                              @error('name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="product_slug">Slug</label>
                              <input type="text" id="product_slug" class="form-control" placeholder="Slug" value="{{$city->slug}}" name="slug">
                              @error('slug')
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