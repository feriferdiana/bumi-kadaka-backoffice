/* partisipan */
var canvas = document.getElementById("partisipan");
var ctx = canvas.getContext('2d');
var data = {
    labels: ["Pengunjung", "Pengirim Email"],
      datasets: [
        {
            fill: true,
            backgroundColor: [
                '#307060',
                '#EFAE93'
            ],
            data: [100000, 5000],
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

/* range city */
var canvas1 = document.getElementById("city");
var ctx = canvas1.getContext('2d');
var data = {
    labels: ["Jakarta", "Tangerang", "Makasar", "Depok", "Malang", "Banten", "Surabaya", "Maluku", "New York", "Lainnya"],
      datasets: [
        {
            fill: true,
            backgroundColor: [
                '#E0E3FA',
                '#C2C8F5',
                '#9CA3E3',
                '#7A81C8',
                '#4F56A4',
                '#393F8D',
            ],
            data: [901, 875, 765, 614, 542, 541, 442, 401, 51, 1430 ],
        }
    ]
};
var options = {
    plugins: {
        legend: {
            display: false,
            position: 'bottom',
            labels: {
                usePointStyle: true,
            },
        },
        title: {
            display: true,
            text: 'Sebaran lokasi peserta berdasarkan kota',
            position: 'bottom'
        }
    },
    title: {
        display: true,
        text: 'Status ',
        position: 'top'
    },
};
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options,
});

/* product variation */
var canvas2 = document.getElementById("category");
var ctx = canvas2.getContext('2d');
var data = {
    labels: ["Alat Masak", "Elektronik", "Alat Kesehatan", "Makanan", "Pakaian", "Sepatu", "Lainnya"],
      datasets: [
        {
            fill: true,
            backgroundColor: [
                '#E0E3FA',
                '#C2C8F5',
                '#9CA3E3',
                '#7A81C8',
                '#4F56A4',
                '#393F8D',
            ],
            data: [100, 490, 200, 987, 87, 201, 830 ],
        }
    ]
};
var options = {
    responsive: false,
    cutout: 80,
    plugins: {
        legend: {
            display: false,
            position: 'bottom',
            labels: {
                usePointStyle: true,
            },
        },
        title: {
            display: true,
            text: '',
            position: 'bottom',
        }
    },
};
var myDonutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options,
});