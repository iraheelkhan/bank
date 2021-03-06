<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SC Bank
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <?php $this->load->view('inc/headerscripts') ?>
</head>

<body class="">
  <div class="wrapper ">
    <?php $this->load->view('inc/sidemenu') ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php $this->load->view('inc/header') ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">attach_money</i>
                  </div>
                  <p class="card-category">USD</p>
                  <h3 class="card-title">$<?=$account->balance?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-success">attach_money</i>
                    <a href="#pablo">Total Balance</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">settings_cell</i>
                  </div>
                  <p class="card-category">Service Charges</p>
                  <h3 class="card-title">$5.46</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Per Month Month
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Reversed</p>
                  <h3 class="card-title">$0</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Since Joined
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Followers</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
<<<<<<< HEAD
                <div class="card-header card-header-success">
                  <h4 class="card-title">Transaction Stats - 2019</h4>
=======
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Transaction Stats</h4>
>>>>>>> 6eabb6d25c2e598ca774cb784db26d63c72f3ef2
                  <p class="card-category"></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
<<<<<<< HEAD
                    <thead class="text-success">
                      <th>No</th>
                      <th>Amount</th>
                      <th>Location</th>
                      <th>Date</th>
                    </thead>
                    <tbody>
                      <?php $index = 1;
                       foreach($transactions as $trans): ?>
                        <tr>
                          <td><?= $index++?></td>
                          <td>$<?= $trans->amount?></td>
                          <td><?= $trans->location?></td>
                          <td><?= $trans->created_at?></td>
                        </tr>
                      <?php endforeach;?>
=======
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Amount</th>
                      <th>Date</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>Curaçao</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>Korea, South</td>
                      </tr>
>>>>>>> 6eabb6d25c2e598ca774cb784db26d63c72f3ef2
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="card">
<<<<<<< HEAD
                <div class="card-header card-header-success">
                  <h4 class="card-title">Withdrawl Stats - 2019</h4>
=======
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Withdrawl Stats</h4>
>>>>>>> 6eabb6d25c2e598ca774cb784db26d63c72f3ef2
                  <p class="card-category"></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
<<<<<<< HEAD
                    <thead class="text-success">
                      <th>No</th>
                      <th>Amount</th>
                      <th>To Account No</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Created</th>
=======
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Amount</th>
                      <th>Type</th>
>>>>>>> 6eabb6d25c2e598ca774cb784db26d63c72f3ef2
                    </thead>
                    <tbody>
                      <?php $index = 1;
                       foreach($transfers as $transfer): ?>
                        <tr>
                          <td><?= $index++?></td>
                          <td>$<?= $transfer->amount?></td>
                          <td><?= $transfer->to_account_no?></td>
                          <td><?= $transfer->email?></td>
                          <td><?= $transfer->type?></td>
                          <td><?= $transfer->created_at?></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <?php $this->load->view('inc/footerscripts') ?>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
