<?php 


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/bus.png" rel="icon">
  <link href="../../assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/admin.css">
</head>

<body>

  <!-- Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin Dashboard</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <!-- Notifications and User Profile dropdowns can be here -->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Administrator</span>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item d-flex align-items-center" href="settings.php"><i class="bi bi-gear"></i>Settings</a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="Dashboard.php?action=signout"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Sidebar -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item"><a class="nav-link" href="Dashboard.php"><i class="bi bi-grid"></i>Dashboard</a></li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-management-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Manage Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-management-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li><a href="manage-users.php"><i class="bi bi-circle"></i> All Users</a></li>
        </ul>
      </li>
      <li class="nav-item"><a class="nav-link" href="manage-reports.php"><i class="bi bi-file-earmark-text"></i>Manage Reports</a></li>
      <li class="nav-item"><a class="nav-link" href="settings.php"><i class="bi bi-gear"></i>Settings</a></li>
      <li class="nav-item"><a class="nav-link" href="Dashboard.php?action=signout"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
    </ul>
  </aside>

  <!-- Main Content -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Statistics Cards -->
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Users <span>| Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1,244</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Reports <span>| This Year</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>150</h6>
                      <span class="text-danger small pt-1 fw-bold">3%</span> <span class="text-muted">decrease</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Recent Activity</h5>
              <div class="activity">
                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success'></i>
                  <div class="activity-content">Updated user roles</div>
                </div>
                <div class="activity-item d-flex">
                  <div class="activite-label">1 hr</div>
                  <i class='bi bi-circle-fill activity-badge text-warning'></i>
                  <div class="activity-content">Reviewed a report</div>
                </div>
                <div class="activity-item d-flex">
                  <div class="activite-label">3 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-danger'></i>
                  <div class="activity-content">Suspended a user account</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Reports Overview Chart -->
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Reports Overview</h5>
              <div id="reportsChart" style="height: 350px;"></div>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var chart = echarts.init(document.querySelector("#reportsChart"));
                  chart.setOption({
                    xAxis: { type: 'category', data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
                    yAxis: { type: 'value' },
                    series: [{ data: [150, 200, 170, 210, 240, 220], type: 'line' }]
                  });
                });
              </script>
            </div>
          </div>
        </div>

      </div>
    </section>


    <!-- <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div> -->

    <section class="section dashboard">
      <div class="row">

        <!-- Existing Statistics and Reports Overview -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Place your existing statistics cards here (Users, Revenue, Reports) -->
          </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-lg-4">
          <!-- Existing Recent Activity card goes here -->
        </div>

        <!-- New Charts for Statistical Analysis -->

        <!-- Top-Selling Goods Chart -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Top-Selling Goods</h5>
              <div id="topSellingGoodsChart" style="height: 400px;"></div>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var chart = echarts.init(document.querySelector("#topSellingGoodsChart"));
                  chart.setOption({
                    tooltip: {
                      trigger: 'item',
                      formatter: '{a} <br/>{b} : {c} ({d}%)'
                    },
                    legend: {
                      orient: 'vertical',
                      left: 'left',
                      data: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E']
                    },
                    series: [
                      {
                        name: 'Top-Selling Goods',
                        type: 'pie',
                        radius: '50%',
                        data: [
                          { value: 1048, name: 'Product A' },
                          { value: 735, name: 'Product B' },
                          { value: 580, name: 'Product C' },
                          { value: 484, name: 'Product D' },
                          { value: 300, name: 'Product E' }
                        ],
                        emphasis: {
                          itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                          }
                        }
                      }
                    ]
                  });
                });
              </script>
            </div>
          </div>
        </div>

        <!-- Top Sellers with Ratings Chart -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Top Sellers with Ratings</h5>
              <div id="topSellersChart" style="height: 400px;"></div>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var chart = echarts.init(document.querySelector("#topSellersChart"));
                  chart.setOption({
                    tooltip: {
                      trigger: 'axis',
                      axisPointer: {
                        type: 'shadow'
                      }
                    },
                    legend: {
                      data: ['Sales', 'Ratings']
                    },
                    grid: {
                      left: '3%',
                      right: '4%',
                      bottom: '3%',
                      containLabel: true
                    },
                    xAxis: {
                      type: 'value',
                      boundaryGap: [0, 0.01]
                    },
                    yAxis: {
                      type: 'category',
                      data: ['Seller A', 'Seller B', 'Seller C', 'Seller D', 'Seller E']
                    },
                    series: [
                      {
                        name: 'Sales',
                        type: 'bar',
                        data: [18203, 23489, 29034, 104970, 131744]
                      },
                      {
                        name: 'Ratings',
                        type: 'bar',
                        data: [4.5, 4.2, 3.8, 4.7, 4.9]
                      }
                    ]
                  });
                });
              </script>
            </div>
          </div>
        </div>

      </div>
    </section>


  </main>

   <!-- ======= Footer ======= -->
 

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/chart.js/chart.umd.js"></script>
<script src="../../assets/vendor/echarts/echarts.min.js"></script>
<script src="../../assets/vendor/quill/quill.min.js"></script>
<script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
  });
</script>

</body>
</html>