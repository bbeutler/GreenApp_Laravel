
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Green Finance</title>
<meta name="description" content="Borderless Banking Simplified With green finance, sending money abroad is made easier, faster, cheaper and better from your phone or computer">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
          <div class="logo"> <a class="d-flex" href="index.html" title="Payyed - HTML Template"><img src="images/dashboard-logo.png" alt="Payyed" /></a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="active"><a href="/dashboard">Dashboard</a></li>
                <li><a href="/transactions">Transactions</a></li>
                <li><a href="/send-money">Send Money</a></li>
                <!-- <li><a href="profile-cards-and-bank-accounts.html">Add Card</a></li> -->
              </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <!-- <li><a href="profile.html">Settings</a> </li> -->
              <li class="align-items-center h-auto ml-sm-3">
                 <a class="btn btn-outline-primary shadow-none d-none d-sm-block" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </li>
            </ul>
          </nav>
     
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <div class="row">
        <!-- Left Panel
        ============================================= -->
        <aside class="col-lg-3">
          
          <!-- Profile Details
          =============================== -->
          <div class="bg-light shadow-sm rounded text-center p-3 mb-4">
            <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="images/profile-thumb.jpg" alt="">
              <div class="profile-thumb-edit custom-file bg-primary text-white" data-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                <input type="file" class="custom-file-input" id="customFile">
              </div>
            </div>
            <p class="text-3 font-weight-500 mb-2">Hello, Smith Rhodes</p>
            <p class="mb-2"><a href="profile.html" class="text-5 text-light" data-toggle="tooltip" title="Edit Profile"><i class="fas fa-edit"></i></a></p>
          </div>
          <!-- Profile Details End -->
          
          <!-- Available Balance
          =============================== -->
          <div class="bg-light shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
            <h3 class="text-9 font-weight-400">$2956.00</h3>
            <p class="mb-2 text-muted opacity-8">Available Balance</p>
            <hr class="mx-n3">
            <div class="d-flex"><a href="withdraw-money.html" class="btn-link mr-auto">Withdraw</a> <a href="deposit-money.html" class="btn-link ml-auto">Deposit</a></div>
          </div>
          <!-- Available Balance End -->
          
          <!-- Need Help?
          =============================== -->
          <div class="bg-light shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
            <h3 class="text-3 font-weight-400 my-4">Need Help?</h3>
            <p class="text-muted opacity-8 mb-4">Have questions or concerns regrading your account?<br>
              Our experts are here to help!.</p>
            <a href="#" class="btn btn-primary btn-block">Email Us</a> 
          </div>
          <!-- Need Help? End -->
          
        </aside>
        <!-- Left Panel End -->
        
        <!-- Middle Panel
        ============================================= -->
        <div class="col-lg-9">
          <!-- Recent Activity
          =============================== -->
          <div class="bg-light shadow-sm rounded py-4 mb-4">
            <h3 class="text-5 font-weight-400 d-flex align-items-center px-4 mb-3">Recent Activity</h3>
            
            <!-- Title
            =============================== -->
            <div class="transaction-title py-2 px-4">
              <div class="row">
                <div class="col-2 col-sm-1 text-center"><span class="">Date</span></div>
                <div class="col col-sm-7">Description</div>
                <div class="col-auto col-sm-2 d-none d-sm-block text-center">Status</div>
                <div class="col-3 col-sm-2 text-right">Amount</div>
              </div>
            </div>
            <!-- Title End -->
            
            <!-- Transaction List
            =============================== -->
            <div class="transaction-list">
              <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-warning" data-toggle="tooltip" data-original-title="In Progress"><i class="fas fa-ellipsis-h"></i></span> </div>
                  <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">15</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">Envato Pty Ltd</span> <span class="text-muted">Payment Received</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">04</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $106</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">28</span> <span class="d-block text-1 font-weight-300 text-uppercase">MAR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span class="text-muted">Refund</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">28</span> <span class="d-block text-1 font-weight-300 text-uppercase">MAR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span class="text-muted">Payment Sent</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-danger" data-toggle="tooltip" data-original-title="Cancelled"><i class="fas fa-times-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">15</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">Envato Pty Ltd</span> <span class="text-muted">Payment Received</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
            </div>
            <!-- Transaction List End -->
            
            <!-- Transaction Item Details Modal
            =========================================== -->
            <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row no-gutters">
                      <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-left py-4">
                        <div class="my-auto text-center">
                          <div class="text-17 text-white my-3"><i class="fas fa-building"></i></div>
                          <h3 class="text-4 text-white font-weight-400 my-3">Envato Pty Ltd</h3>
                          <div class="text-8 font-weight-500 text-white my-4">$557.20</div>
                          <p class="text-white">15 March 2019</p>
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <h5 class="text-5 font-weight-400 m-3">Transaction Details
                          <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </h5>
                        <hr>
                        <div class="px-3">
                          <ul class="list-unstyled">
                            <li class="mb-2">Payment Amount <span class="float-right text-3">$562.00</span></li>
                            <li class="mb-2">Fee <span class="float-right text-3">-$4.80</span></li>
                          </ul>
                          <hr class="mb-2">
                          <p class="d-flex align-items-center font-weight-500 mb-4">Total Amount <span class="text-3 ml-auto">$557.20</span></p>
                          <ul class="list-unstyled">
                            <li class="font-weight-500">Paid By:</li>
                            <li class="text-muted">Envato Pty Ltd</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="font-weight-500">Transaction ID:</li>
                            <li class="text-muted">26566689645685976589</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="font-weight-500">Description:</li>
                            <li class="text-muted">Envato March 2019 Member Payment</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="font-weight-500">Status:</li>
                            <li class="text-muted">Completed</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Transaction Item Details Modal End -->
            
            <!-- View all Link
            =============================== -->
            <div class="text-center mt-4"><a href="transactions.html" class="btn-link text-3">View all<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
            <!-- View all Link End -->
            
          </div>
          <!-- Recent Activity End -->
        </div>
        <!-- Middle Panel End -->
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
          <ul class="social-icons justify-content-center">
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/greenfinanceHQ" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.instagram.com/greenfinancehq" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright pt-3 pt-lg-2 mt-2">
        <div class="row">
          <div class="col-lg">
            <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright &copy; 2021 <a href="#">Green Finance</a>. All Rights Reserved.</p>
          </div>
          <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
            <ul class="nav justify-content-center">
              <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->
  
</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Script -->
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>