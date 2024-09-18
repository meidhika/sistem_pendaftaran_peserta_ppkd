@extends('layouts.dashboard')
@section('content')
    <h3>Jumlah Peserta per Jurusan</h3>


    <!-- Bar Chart -->
    <canvas id="barChart" width="400" height="200"></canvas>

    <!-- Pie Chart -->
    <canvas id="pieChart" width="400" height="200"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <script>
        var jurusanNames = {!! json_encode($jurusanNames) !!}; // Mengambil data nama jurusan dari controller
        var pesertaCounts = {!! json_encode($pesertaCounts) !!}; // Mengambil data jumlah peserta dari controller
        var totalPeserta = pesertaCounts.reduce((a, b) => a + b, 0);
        // Bar Chart
        var barCtx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: jurusanNames, // Nama-nama jurusan sebagai label
                datasets: [{
                    label: 'Jumlah Peserta',
                    data: pesertaCounts, // Data jumlah peserta
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna bar chart
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna border bar chart
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Pie Chart
        var pieCtx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: jurusanNames, // Nama jurusan
                datasets: [{
                    data: pesertaCounts, // Jumlah peserta
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    datalabels: {
                        formatter: function(value, context) {
                            // Hitung persen
                            var percentage = (value / totalPeserta * 100).toFixed(2) + '%';
                            // Gabungkan jumlah peserta dengan persentase
                            return value + ' Peserta (' + percentage + ')';
                        },
                        color: '#000', // Warna teks
                        align: 'center', // Penyelarasan label
                        anchor: 'end', // Posisi label
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
@endsection
