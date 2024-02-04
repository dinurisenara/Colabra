<!-- resources/views/analytics/index.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Analytics</h2>

        <div class="row">
            <div class="col-md-4">
                <h4>Total Users</h4>
                <p>{{ $totalUsers }}</p>
            </div>
            <div class="col-md-4">
                <h4>Business Users</h4>
                <p>{{ $businessUsers }}</p>
            </div>
            <div class="col-md-4">
                <h4>Personal Users</h4>
                <p>{{ $personalUsers }}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <h4>Reservations</h4>
                <p>{{ $reservationCount }}</p>
            </div>
            <div class="col-md-4">
                <h4>Space Types</h4>
                <p>{{ $spaceTypeCount }}</p>
            </div>
            <div class="col-md-4">
                <h4>Spaces</h4>
                <p>{{ $spaceCount }}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <h4>Bookings</h4>
                <p>{{ $bookingCount }}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-6">
                <h4>User Distribution</h4>
                <div id="userDistributionChartContainer" style="width: 400px; height: 400px;">
                    <canvas id="userDistributionChart" width="150" height="150"></canvas>
                </div>
            </div>

            <div class="col-md-6">
                <h4>Spaces Type Distribution</h4>
                <div id="spacesByTypeChartContainer" style="width: 400px; height: 400px;">
                    <canvas id="spacesByTypeChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>

    </div>



    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // User Distribution Chart
            var userDistributionCtx = document.getElementById('userDistributionChart').getContext('2d');
            var userDistributionData = {
                labels: [
                    'Business Users (' + {{ $businessUsers }} + ')',
                    'Personal Users (' + {{ $personalUsers }} + ')'
                ],
                datasets: [{
                    data: [{{ $businessUsers }}, {{ $personalUsers }}],
                    backgroundColor: ['#007bff', '#28a745'],
                }]
            };
            var userDistributionOptions = {
                responsive: true,
                title: {
                    display: true,
                    text: 'User Distribution',
                },
            };
            var userDistributionChart = new Chart(userDistributionCtx, {
                type: 'pie',
                data: userDistributionData,
                options: userDistributionOptions
            });

            // Spaces By Type Chart
            var spacesByTypeCtx = document.getElementById('spacesByTypeChart').getContext('2d');

            // Extract space type labels and counts from the PHP variable
            var spaceTypeData = {!! $spacesByType !!};

            // Extract labels and counts from the spaceTypeData
            var spaceTypeLabels = Object.keys(spaceTypeData);
            var spaceTypeCounts = spaceTypeLabels.map(function (typeId) {
                return spaceTypeData[typeId].count;
            });
            var spaceTypeTypes = spaceTypeLabels.map(function (typeId) {
                return spaceTypeData[typeId].type;
            });

            // Generate dynamic colors based on the number of space types
            var dynamicColors = generateColors(spaceTypeLabels.length);

            var spacesByTypeData = {
                labels: spaceTypeTypes.map(function (type, index) {
                    return type + ' (' + spaceTypeCounts[index] + ')';
                }),
                datasets: [{
                    data: spaceTypeCounts,
                    backgroundColor: dynamicColors,
                }]
            };

            var spacesByTypeOptions = {
                responsive: true,
                title: {
                    display: true,
                    text: 'Spaces By Type',
                },
            };

            var spacesByTypeChart = new Chart(spacesByTypeCtx, {
                type: 'pie',
                data: spacesByTypeData,
                options: spacesByTypeOptions
            });

            // Function to generate dynamic colors
            function generateColors(numColors) {
                var colors = [];
                for (var i = 0; i < numColors; i++) {
                    colors.push(dynamicColor());
                }
                return colors;
            }

            // Function to generate a random dynamic color
            function dynamicColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }


        });
    </script>
@endsection
