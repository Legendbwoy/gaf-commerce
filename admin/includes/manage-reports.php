admin/includes/header.php

<body>

  <!-- Header -->
  <?php include('header.php'); ?>

  <!-- Sidebar -->
  <?php include('sidebar.php'); ?>

  <!-- Main Content -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Manage Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item active">Manage Reports</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Report List</h5>

              <!-- Reports Table -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Report Type</th>
                    <th scope="col">Reported User</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // PHP logic to fetch reports and loop through them
                  // Sample data shown here for illustration
                  $reports = [
                    ['id' => 1, 'type' => 'Abuse', 'user' => 'johndoe', 'status' => 'Pending'],
                    ['id' => 2, 'type' => 'Spam', 'user' => 'janedoe', 'status' => 'Resolved']
                  ];
                  foreach ($reports as $report) {
                    echo "<tr>
                            <th scope='row'>{$report['id']}</th>
                            <td>{$report['type']}</td>
                            <td>{$report['user']}</td>
                            <td><span class='badge bg-" . ($report['status'] == 'Resolved' ? 'success' : 'warning') . "'>{$report['status']}</span></td>
                            <td>
                              <a href='view-report.php?id={$report['id']}' class='btn btn-primary btn-sm'><i class='bi bi-eye'></i> View</a>
                              <a href='resolve-report.php?id={$report['id']}' class='btn btn-success btn-sm'><i class='bi bi-check-circle'></i> Resolve</a>
                            </td>
                          </tr>";
                  }
                  ?>
                </tbody>
              </table>
              <!-- End Reports Table -->

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
admin/includes/footer.php