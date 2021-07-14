@extends('layouts.user.user')
@section('title', 'Edit Your Information')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
        @include('user.includes.alerts.success')
        @include('user.includes.alerts.errors')
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('user.information.update', $user->id)}}">
            @csrf
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-edit"></i>Edit Your Information</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="user_name">Full Name</label>
                              <input type="text" id="user_name" value="{{$user->fullName}}" class="form-control" name="fullName">
                              @error('name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="user_slug">Phone Number</label>
                              <input type="text" id="user_slug" value="{{$user->phone}}" class="form-control" name="phone">
                              @error('slug')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <label>Company Name</label>
                              <input type="text" value="{{$user->comany_name}}" class="form-control" name="comany_name">
                              @error('phone')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                          </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="user_address">Address</label>
                              <input type="text"  id="user_address" value="{{$user->address}}" class="form-control" name="address">
                              @error('address')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                          </div>
                          </div>
                          <div class="col-md-12">
                          <div class="form-group">
                            <label for="city">Choose City</label>
                            <select class="form-control required" id="city" name="city_id">
                              @foreach($cities as $city)
                                <option   
                                {{$user->city_id === $city->id ? 'selected' : ''}}
                                value="{{$city->id}}">{{$city->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('city_id')
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