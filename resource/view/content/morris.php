<script src="asset('plugins/morris/raphael.min.js')"></script>
<script src="asset('plugins/morris/morris.min.js')"></script>

<script type="text/javascript">
   "use strict";

   function formatDate(myDate) {
      let monthName = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
      let newDate = new Date(myDate);
      let currentMonth = newDate.getMonth();
      return (monthName[currentMonth]);
   }

   function formatDay(myDay) {
      let weekdays = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
      let newDate = new Date(myDay);
      let currentDay = newDate.getDay();
      return (weekdays[currentDay]);
   }

   function formatHoverLabel(row) {
      let monthName = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      let newDate = new Date(row.month);
      let currentMonth = newDate.getMonth();
      let salesText = "Inventory for " + monthName[currentMonth];

      let a = 1;
      salesText = '<div class="morris-hover-row-label">' + salesText + '</div>';
      for (let i in lineChartLableInGraph) {
         salesText += '<div class="morris-hover-point">' + lineChartLableInGraph[i] + ': ' + row['data' + (a++)] + '</div>';
      }
      return salesText;
   }

   const lineChartLableInGraph = ['Purchase Amount', 'Sell Amount', 'Profit Amount'];

   //Line chart
   const lineChart = function(element, data, xkey, ykeys, labels, lineColors) {
      new Morris.Line({
         element: element,
         data: data,
         xkey: xkey,
         xLabelFormat: function(str) {
            return formatDate(str);
         },
         xLabels: 'month',
         ykeys: ykeys,
         labels: labels,
         hideHover: 'auto',
         hoverCallback: function(index, options, content, row) {
            return formatHoverLabel(row, options);
         },
         gridLineColor: '#eef0f2',
         resize: true,
         lineColors: lineColors,
         lineWidth: 3,
      });
   }

   //Bar chart
   const barChart = function(element, data, xkey, ykeys, labels, lineColors) {
      new Morris.Bar({
         element: element,
         data: data,
         xkey: xkey,
         ykeys: ykeys,
         labels: labels,
         gridLineColor: '#eef0f2',
         barSizeRatio: 0.3,
         resize: true,
         hideHover: 'auto',
         barColors: lineColors
      });
   }

   //Area chart
   const areaChart = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
      new Morris.Area({
         element: element,
         pointSize: 0,
         lineWidth: 0,
         data: data,
         xkey: xkey,
         xLabels: 'year',
         ykeys: ykeys,
         labels: labels,
         resize: true,
         gridLineColor: '#eee',
         hideHover: 'auto',
         lineColors: lineColors,
         fillOpacity: .6,
         behaveLikeLine: true
      });
   }

   //Donut chart
   const donutChart = function(element, data, colors) {
      new Morris.Donut({
         element: element,
         data: data,
         resize: true,
         colors: colors
      });
   }

   //Stacked chart
   const stackedChart = function(element, data, xkey, ykeys, labels, lineColors) {
      new Morris.Bar({
         element: element,
         data: data,
         xkey: xkey,
         ykeys: ykeys,
         stacked: true,
         labels: labels,
         hideHover: 'auto',
         barSizeRatio: 0.5,
         resize: true,
         gridLineColor: '#eeeeee',
         barColors: lineColors
      });
   }

   const lineChartData = [];
   const barChartData = [];
   const areaChartData = [];
   const stckedChartData = [];

   // const lineChartData = [<?php echo $linechart; ?>];
   // const barChartData = [<?php echo $barChart; ?>];
   // const areaChartData = [<?php echo $areaChart; ?>];
   // const stckedChartData = [<?php echo $stackedChart; ?>];

   lineChart('lineChart', lineChartData, 'month', ['data1', 'data2', 'data3'], ['Purchase Amount', 'Sell Amount', 'Profit Amount'], ['#ccc', '#f16c69', '#28bbe3']);
   barChart('barChart', barChartData, 'y', ['a', 'b'], ['Cash In', 'Cash Out'], ['#ccc', '#ff9800']);
   areaChart('areaChart', 0, 0, areaChartData, 'y', ['a', 'b', 'c'], ['Purchase', 'Sale', 'Stock'], ['#ccc', '#f16c69', '#28bbe3']);
   stackedChart('stackedChart', stckedChartData, 'y', ['a', 'b', 'c'], ['Series A', 'Series B', 'Series C'], ['#ccc', '#ff9800', '#f16c69']);
</script>
