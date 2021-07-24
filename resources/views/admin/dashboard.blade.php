@extends('layouts.admin.admin')
@section('title', 'Your Dashboard')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.errors')
        <div class="content-body" >
        <section id="drag-area">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
            <h2><i class="ft-users"></i> Users</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-user info font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>{{count($users)}}</h3>
                        <span>All Users</span>
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
                        <h3>{{count($ActiveUsers)}}</h3>
                        <span>Active Users</span>
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
                        <h3>{{$visitors}}</h3>
                        <span>Visitores</span>
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