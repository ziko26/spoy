@extends('layouts.user.user')
@section('title', 'Edit Your Information')
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
        @include('user.includes.alerts.success')
        @include('user.includes.alerts.errors')
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('user.password.update', $user->id)}}">
            @csrf
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-lock"></i>Change Your Password</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="user_name">Old Password</label>
                              <input type="password" id="user_name"  class="form-control" name="oldPassword">
                              @error('oldPassword')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="user_slug">New Password</label>
                              <input type="password" id="user_slug"  class="form-control" name="password">
                              @error('password')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                          <div class="form-group">
                              <label>Company Name</label>
                              <input type="password" class="form-control" name="passwordRepeat">
                              @error('passwordRepeat')
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