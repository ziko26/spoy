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
            <h2><i class="ft-box"></i> Orders</h2>
            </div>
          </div>
          <div class="row" id="card-drag-area">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-pencil info font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>278</h3>
                        <span>New Posts</span>
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
                        <i class="icon-speech warning font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>156</h3>
                        <span>New Comments</span>
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
                        <i class="icon-graph success font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>64.89 %</h3>
                        <span>Bounce Rate</span>
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
                        <i class="icon-pointer danger font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>423</h3>
                        <span>Total Visits</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger">278</h3>
                        <span>New Projects</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-rocket danger font-large-2 float-right"></i>
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
                      <div class="media-body text-left">
                        <h3 class="success">156</h3>
                        <span>New Clients</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-user success font-large-2 float-right"></i>
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
                      <div class="media-body text-left">
                        <h3 class="warning">64.89 %</h3>
                        <span>Conversion Rate</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-pie-chart warning font-large-2 float-right"></i>
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
                      <div class="media-body text-left">
                        <h3 class="info">423</h3>
                        <span>Support Tickets</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-support info font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-3 mb-1">
            <h2><i class="ft-dollar"></i> Earnings</h2>
            </div>
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="info">278</h3>
                        <span>New Posts</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-book-open info font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <div class="media-body text-left">
                        <h3 class="warning">156</h3>
                        <span>New Comments</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-bubbles warning font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <div class="media-body text-left">
                        <h3 class="success">64.89 %</h3>
                        <span>Bounce Rate</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-cup success font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <div class="media-body text-left">
                        <h3 class="danger">423</h3>
                        <span>Total Visits</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-direction danger font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
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