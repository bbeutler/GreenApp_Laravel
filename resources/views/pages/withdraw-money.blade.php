
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
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css" />
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
          <div class="logo"> <a class="d-flex" href="index.html" title="Payyed - HTML Template"><img src="images/logo.png" alt="Payyed" /></a> </div>
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
                <li class="active"><a href="dashboard.html">Dashboard</a></li>
                <li><a href="transactions.html">Transactions</a></li>
                <li><a href="send-money.html">Send Money</a></li>
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
              <li><a href="profile.html">Settings</a> </li>
              <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-outline-primary shadow-none d-none d-sm-block" href="">Sign out</a></li>
            </ul>
          </nav>
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  
  <!-- Secondary menu
  ============================================= -->
  <div class="bg-white">
    <div class="container d-flex justify-content-center">
      <ul class="nav secondary-nav alternate">
        <li class="nav-item"> <a class="nav-link" href="deposit-money.html">Deposit</a></li>
        <li class="nav-item"> <a class="nav-link active" href="withdraw-money.html">Withdraw</a></li>
      </ul>
    </div>
  </div>
  <!-- Secondary menu end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <h2 class="font-weight-400 text-center mt-3 mb-4">Withdraw Money</h2>
      <div class="row">
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto"> 
        <!-- Withdraw Money Form
        ============================================= -->
          <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
            <div class="text-center bg-primary p-4 rounded mb-4">
              <h3 class="text-10 text-white font-weight-400">$2956.00</h3>
              <p class="text-white">Available Balance</p>
              <a href="" class="btn btn-outline-light btn-sm shadow-none text-uppercase rounded-pill text-1">Withdraw Full Amount</a> </div>
            <form id="form-send-money" method="post">
              <div class="form-group">
                <label for="withdrawto">Withdraw to</label>
                <select id="withdrawto" class="custom-select" required="">
                  <option value="">HDFC Bank - XXXXXXXXXXXX-9025</option>
                  <option>Bank A/c 2 - XXXXXX-1211</option>
                  <option>Bank A/c 3 - XXXXXX-2011</option>
                  <option>Bank A/c 4 - XXXXXX-2011</option>
                </select>
              </div>
              <div class="form-group">
                <label for="youSend">Amount</label>
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                  <input type="text" class="form-control" data-bv-field="youSend" id="youSend" value="1,000" placeholder="">
                </div>
              </div>
              <p class="text-muted mt-4">Transactions fees <span class="float-right d-flex align-items-center">5.00 USD</span></p>
              <p class="font-weight-500">Amount to Withdraw <span class="text-3 float-right">1,000.00 USD</span></p>
              <button class="btn btn-primary btn-block">Continue</button>
            </form>
          </div>
          <!-- Withdraw Money Form end --> 
        </div>
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
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>