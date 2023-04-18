
    @extends('layouts.dashboard')
    @section('content')

    <!-- =============== Navigation ================ -->
    <div class="containers">
        @include('includes.dashboard-sidebar')


            @include('includes.dashboard-cards')

            <!-- ================ Order Details List ================= -->
            <div class="details row justify-content-around">
                <!-- ================= ChartJS ================ -->
                <div class="recentCustomers row col-lg-6 col-12 ms-3">
                    <div class="cardHeader">
                        <h2>Statistic Graph</h2>
                    </div>
                    <canvas id="myChart" style="max-width: 100%" ></canvas>
                </div>

                <!-- ================= RecentCustomer ================ -->
                <div class="recentCustomers row col-lg-5 col-12 ms-3">
                  <div class="cardHeader">
                      <h2>Recent Users</h2>
                  </div>

                  <table>
                      <tbody>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="https://picsum.photos/640/360" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Role</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="https://picsum.photos/640/360" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Role</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="https://picsum.photos/640/360" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Role</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="https://picsum.photos/640/360" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Role</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="https://picsum.photos/640/360" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Role</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="https://picsum.photos/640/360" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Role</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="https://picsum.photos/640/360" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Role</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="https://picsum.photos/640/360" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Role</span></h4>
                            </td>
                        </tr>

                      </tbody>
                  </table>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Cars', 'Brands', 'Users', 'Reservations'],
      datasets: [{
        label: 'Statistics',
        data: [{{ $car }}, {{ $brand }}, {{ $user }}, {{ $reservation }}],
        borderWidth: 1
      }]
    },
    options: {
    
      responsive: true,
    }
  });
</script>

    @stop
