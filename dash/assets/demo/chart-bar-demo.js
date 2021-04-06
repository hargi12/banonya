// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Communication", "Play & Interaction", "Behavior", "Self-Help", "Motor & Fine"],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [42, 34, 25, 41, 21],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        Screening: {
          unit: 'Domain'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 48,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
