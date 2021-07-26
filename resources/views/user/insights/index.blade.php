@extends('layouts.user.user')
@section('title', 'Your Dashboard')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
    <div class="content-body">
        <section>
        <div id="user_chart" style="width: 700px; height:400"></div>
        </section>
        <section>
        <div id="curve_chart" style="width: 700px; height: 500px"></div>
        </section>
</div>
</div>
</div>
<script type="text/javascript">
     var data;
     var chart;

      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        
          var NewOrders = <?php echo count($NewOrders)?>;
          var delevraids = <?php echo count($delevraids)?>;
          var canceleds = <?php echo count($canceleds)?>;

        // Create our data table.
        data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['New Orders', NewOrders],
          ['Canceled Order', canceleds],
          ['Delevraid Order', delevraids],
        ]);

        // Set chart options
        var options = {'title':'The Insights of Orders',
                       'width':700,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        chart = new google.visualization.PieChart(document.getElementById('user_chart'));
        google.visualization.events.addListener(chart, 'select', selectHandler);
        chart.draw(data, options);
      }

      function selectHandler() {
        var selectedItem = chart.getSelection()[0];
        var value = data.getValue(selectedItem.row, 0);
        
      }

    </script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var date =  Date();
          var YesterdayOrders = <?php echo count($YesterdayOrders) ?>;
          var CurrentOrders = <?php echo count($CurrentOrders) ?>;

        var data = google.visualization.arrayToDataTable([
          ['Time', 'Sales'],
          ['last week',  6],
          ['yes',  YesterdayOrders],
          ['today',  CurrentOrders],
        ]);

        var options = {
          title: 'The Orders Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
@endsection        