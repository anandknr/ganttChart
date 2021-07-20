<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://code.highcharts.com/gantt/highcharts-gantt.js"></script>
<script src="https://code.highcharts.com/gantt/modules/exporting.js"></script>



<script>


$(document).ready(function() {

    options =   {

title: {
  text: 'Left Axis as Table'
},

xAxis: {
  tickPixelInterval: 70
},

yAxis: {
  type: 'category',
  grid: {
    enabled: true,
    borderColor: 'rgba(0,0,0,0.3)',
    borderWidth: 1,
    columns: [{
      title: {
        text: 'Project'
      },
      labels: {
        format: '{point.name}'
      }
    }, {
      title: {
        text: 'assignee1'
      },
      labels: {
        format: '{point.assignee}'
      }
    }, {
      title: {
        text: 'Est. days'
      },
      labels: {
        formatter: function () {
          var point = this.point,
            days = (1000 * 60 * 60 * 24),
            number = (point.x2 - point.x) / days;
          return Math.round(number * 100) / 100;
        }
      }
    }, {
      labels: {
        format: '{point.start:%e. %b}'
      },
      title: {
        text: 'Start date'
      }
    }, {
      title: {
        text: 'End date'
      },
      offset: 30,
      labels: {
        format: '{point.end:%e. %b}'
      }
    }]
  }
},

tooltip: {
  xDateFormat: '%e %b %Y, %H:%M'
},

series: [],

exporting: {
  sourceWidth: 1000
}

}; // options {}

	      $.getJSON("getChartData", function(json) {
          console.log(JSON.stringify(json));

          options.series = json.slice();
          Highcharts.ganttChart('container', options);

	        });

});







</script>






<div class="scrolling-container">
	<div id="container"></div>
</div>

<style>
#container {
  max-width: 1200px;
  min-width: 800px;
  min-height: 800px;
  margin: 1em auto;
}
.scrolling-container {
	overflow-x: auto;
	-webkit-overflow-scrolling: touch;
}
</style>