document.write("<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js'></script>");
document.write("<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js'></script>");

$(document).ready(function() {
    var data = {
        labels: ['소통', '친절', '빠름', '신뢰', '최악'],
        datasets: [{
            data: [54, 17, 12, 10, 7],
            borderWidth: 0,
            backgroundColor: ['#F3A7A7', '#F3F084', '#B6DBB4', '#F9CFAE', '#DCB6D5'],
            hoverBackgroundColor: ['#F3A7A7', '#F3F084', '#B6DBB4', '#F9CFAE', '#DCB6D5'],
        }],
    };
    var options = {
        animation: {
            animateRotate: true,
            // animateScale:true
        },
        maintainAspectRatio: false,
        cutoutPercentage: 85,

        legend: false,

        tooltips: {
            custom: function(tooltip) {

            },
            mode: 'single',
            callbacks: {
                label: function(tooltipItems, data) {
                    var sum = data.datasets[0].data.reduce(add, 0);

                    function add(a, b) {
                        return a + b;
                    }
                    return parseInt((data.datasets[0].data[tooltipItems.index] / sum * 100),
                        10) + ' %';
                },
            },
            xAlign: 'center',

        }
    }

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options
    });
});