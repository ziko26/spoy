@extends('layouts.admin.admin')
@section('title', 'Add User')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card"> 
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('admin.users.store')}}" enctype="multipart/form-data">
            @csrf
                      <div class="form-body">
                      @if($errors->all())
              @foreach($errors->all() as $error)
              <div class="alert alert-danger">
              {{ $error }}
              </div>
              @endforeach
              @endif 
                      @include('admin.includes.alerts.success')
                      @include('admin.includes.alerts.errors')
                        <h4 class="form-section"><i class="ft-user"></i> Create New User</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="fullName">FullName User</label>
                              <input type="text" id="fullName" value="{{ old('fullName') }}" placeholder="fullName" class="form-control" name="fullName">
                              @error('fullName')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="email">Email User</label>
                              <input type="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}" name="email">
                              @error('email')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phone">Phone User</label>
                              <input type="text" id="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}" name="phone">
                              @error('phone')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="comany_name">Comany name User</label>
                              <input type="text" id="comany_name" class="form-control" placeholder="comany name" value="{{ old('comany_name') }}" name="comany_name">
                              @error('comany_name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="address">Address User</label>
                              <input type="text" id="address" class="form-control" placeholder="Address" value="{{ old('address') }}" name="address">
                              @error('address')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="password">Password User</label>
                              <input type="password" id="password" class="form-control" placeholder="password" value="{{ old('password') }}" name="password">
                              @error('password')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="city">User City</label>
                              <select class="c-select form-control required" id="city" name="city_id">
                                @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                              </select>
                              @error('city_id')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="city">User Active</label>
                              <select class="c-select form-control required" id="active" name="active">
                                  <option value="1">Active</option>
                                  <option value="0">InActive</option>
                              </select>
                              @error('city_id')
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