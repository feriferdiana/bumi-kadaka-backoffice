var countVisit = document.getElementById("countVisit").value;
var countEmail = document.getElementById("countEmail").value;

var canvas = document.getElementById("partisipan");
var ctx = canvas.getContext('2d');
var data = {
    labels: ["Total Pengunjung", "Total Pengirim Email"],
      datasets: [
        {
            fill: true,
            backgroundColor: [
                '#307060',
                '#EFAE93'
            ],
            data: [countVisit, countEmail],
        }
    ]
};
var options = {
    plugins: {
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                usePointStyle: true,
            },
        },
        title: {
            display: true,
            text: 'Statistik Pengunjung',
            position: 'top',
        }
    },
    rotation: -0.7 * Math.PI
};
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: options,
});