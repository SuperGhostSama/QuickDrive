
    @extends('layouts.dashboard')
    @section('content')

    <!-- =============== Navigation ================ -->
    <div class="containers">
        @include('includes.dashboard-sidebar')


            @include('includes.dashboard-cards')

            <!-- ================ Order Details List ================= -->
            <div class="details ">
                <!-- ================= ChartJS ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Statistic Graph</h2>
                    </div>
                    <canvas id="myChart" ></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Cars', 'Brands', 'Users', 'Reservations'],
      datasets: [{
        label: 'Statistics',
        data: [{{ $car }}, {{ $brand }}, {{ $user }}, {{ $reservation }}],
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
</script>

    @stop
