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
        </section>

        <div id="chart_div" style="width: 950px; height: 500px;"></div>
        </div>
    </div>
    <div class="card container">
            <div class="card-body card-dashboard">
                <table
                    class="table table-striped display table-bordered">
                    <thead>
                    <tr>
                        <th>Url</th>
                        <th>Page Name</th>
                        <th>Number Of Visitors</th>
                    </tr>
                    </thead>
                    <tbody>

                     
                      @foreach($pages as $page)
                      <tr> 
                          <td>{{$page['url']}}</td>
                          <td>{{$page['pageTitle']}}</td>
                          <td>{{$page['pageViews']}}</td>
                      </tr>   
                      @endforeach    
                     
                    </tbody>
                </table>
            </div>
            </div>
</div>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Visitors', 'Page Viwes',],
          @php
              foreach($visitors as $visitor) {
                  echo "['".$visitor['date']."', ".$visitor['visitors'].", ".$visitor['pageViews']."],";
              }
          @endphp
        ]);

        var options = {
          title : 'Analytics For This week',
          vAxis: {title: 'Numbers'},
          hAxis: {title: 'Date'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

@endsection