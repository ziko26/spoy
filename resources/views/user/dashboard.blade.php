@extends('layouts.user.user')
@section('title', 'Your Dashboard')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
    @if($user->active == 0)
    <div class="alert alert-danger">
    we sent you an email  <a href="{{route('user.resend', $user->email)}}"><strong>send again</strong></a>
    </div>
    @endif
    @if(count($brand) == 0)
    <div class="alert alert-info">
    Please Set up your Brand  <a class="text-white" href="{{route('user.brand.setup')}}"><strong>Here</strong></a>
    </div>
    @endif
    @include('user.includes.alerts.success')
    @include('user.includes.alerts.errors')
    <h1 class="text-center">Welcome Back <span class="text-danger">{{$user->fullName}}<span></h1>
        <div class="content-body" >
        <section id="drag-area">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
            <h2><i class="ft-box"></i> Orders</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-social-dropbox info font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>{{count($orders)}}</h3>
                        <span>All Orders</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="ft-box warning font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>{{count($NewOrders)}}</h3>
                        <span>New Orders</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-check success font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>{{count($delevraids)}}</h3>
                        <span>Delevraid Orders</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-close danger font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>{{count($canceleds)}}</h3>
                        <span>Canceled orders</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="row">
            <div class="col-12 mt-3 mb-1">
            <h2><i class="icon-wallet"></i> Earning</h2>
            </div>
          </div>
          <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <h3>Today :</h3>
                      </div>
                      <div class="media-body text-right">
                        <h4>{{$todayEr}} MAD</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <h3>Yesterday :</h3>
                      </div>
                      <div class="media-body text-right">
                        <h4>{{$yesterdayEr}} MAD</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </section>
        </div>
    </div>
</div

@endsection