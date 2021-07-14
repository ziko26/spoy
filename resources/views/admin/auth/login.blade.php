@extends('layouts.admin.login')
@section('content')
<section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                      <!-- begin alet section-->
                           @include('user.includes.alerts.errors')
                           @include('user.includes.alerts.success')
                            <!-- end alet section-->

                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" action="{{route('admin.login')}}" method="post"
                                          novalidate>
                                          @csrf
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" name="email"
                                                   class="form-control form-control-lg input-lg"
                                                   id="email" placeholder="E-mail">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>

                                            @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror 

                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password"
                                                   class="form-control form-control-lg input-lg"
                                                   id="user-password"
                                                   placeholder="Password">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            @error('password')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror 
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-md-left">
                                                <fieldset>
                                                    <input type="checkbox" name="remember_me" id="remember-me"
                                                           class="chk-remember">
                                                    <label for="remember-me">  Remember Me</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-lg btn-block"><i
                                                class="ft-unlock"></i>
                                                Log In
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection