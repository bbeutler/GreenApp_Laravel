
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
          <div class="logo"> <a class="d-flex" href="index.html" title="Green finance"><img src="images/dashboard-logo.png" alt="green finance" /></a> </div>
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
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <!-- <li><a href="profile.html">Settings</a> </li> -->
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
  <div class="bg-primary">
    <div class="container d-flex justify-content-center">
      <!-- <ul class="nav secondary-nav">
        <li class="nav-item"> <a class="nav-link active" href="send-money.html">Send</a></li>
      </ul> -->
    </div>
  </div>
  <!-- Secondary menu end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <h2 class="font-weight-400 text-center mt-3">Send </h2>
      <p class="text-4 text-center mb-4">Send money with ease to over 100+ countries.</p>
      <div class="row">
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
          <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
            <h3 class="text-5 font-weight-400 mb-3">Recipient Details</h3>
            <!-- Send Money Form
            ============================================= -->
            <form id="form-send-money" method="POST" action = "{{ route('sendmoney')}}" >
              @csrf
              <div class="form-group">
                <label for="firstName">FirstName</label>
                <input type="text" name = "firstName" value="{{old('firstName')}}" class="form-control" data-bv-field="firstname" id="firstName"placeholder="Enter FirstName" required>
                @error('firstName')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>
              <div class="form-group">
                <label for="lastName">LastName</label>
                <input type="text" name ="lastName" value="{{old('lastName')}}" class="form-control" data-bv-field="lastname" id="lastName" required placeholder="Enter LastName">
                @error('lastName')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="phoneNum">Phone Number</label>
                <input type="number"name ="phoneNumber" value="{{old('phoneNumber')}}" class="form-control" data-bv-field="phonenNum" id="phonenNum" required placeholder="Enter Phone Number">
                @error('phoneNumber')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="state">State</label>
                <input type="text" name ="state" value="{{old('state')}}" class="form-control" data-bv-field="state" id="States" required placeholder="Enter State">
                @error('state')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input type="number" name ="postalCode" value="{{old('postalCode')}}" class="form-control" data-bv-field="postalCode" id="postalCode" required placeholder="Enter Postal Code">
                @error('postalCode')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                  @error('amountToRecieve')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                <label for="youSend">Recipient recieves</label>
                <div class="input-group">
                  <!-- <div class="input-group-prepend"> <span class="input-group-text">₦</span> </div> -->
               
                  <input type="text" class="form-control"  name ="amountToRecieve" data-bv-field="youSend" id="input_amount" value=""
                    placeholder="">
                  
                  <div class="input-group-append"> <span class="input-group-text p-0">
                      <select id="input_currency"  name ="recieveCurrency" data-style="custom-select bg-transparent border-0"
                        data-container="body" data-live-search="true"
                        class="selectpicker form-control bg-transparent" required="">
                        <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira"
                             value="NGN">NGN</option>
                            <option data-icon="currency-flag currency-flag-usd mr-1"
                            data-subtext="United States dollar" selected="selected" value="USD">USD</option>
                            <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="CAD">CAD</option>
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound"
                            value="GBP">GBP</option>
                            <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro"
                            value="EUR">EUR</option>
                        </optgroup>
                      </select>
                    </span> </div>
                </div>
              </div>
              <div class="form-group">
                   @error('amountToSend')
                       <div class="text-danger">{{ $message }}</div>
                     @enderror
                <label for="recipientGets">You pay</label>
                <div class="input-group">
               
                  <!-- <div class="input-group-prepend"> <span class="input-group-text">NG</span> </div> -->
                  <input type="text" name ="amountToSend" class="form-control" data-bv-field="recipientGets" id="output_amount"
                    value="" placeholder="">
                   
                  <div class="input-group-append"> <span class="input-group-text p-0">
                      <select id="output_currency" name ="sendCurrency" data-style="custom-select bg-transparent border-0"
                        data-container="body" data-live-search="true"
                        class="selectpicker form-control bg-transparent" required="">
                        <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-usd mr-1"
                            data-subtext="United States dollar" value="USD">USD</option>
                            <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="CAD">CAD</option>
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound"
                            value="GBP">GBP</option>
                            <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira"
                            selected="selected" value="NGN">NGN</option>
                            <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro"
                             value="EUR">EUR</option>
                        </optgroup>
                      </select>
                    </span> </div>
                </div>
              </div>
              <div class="rate" id="rate"></div>
              <p class="text-muted text-center">Transaction fee <span class="font-weight-500">$40</span></p>
              <button type = "submit"  class="btn btn-primary btn-block" >PAY</button>
            </form>
            <!-- Send Money Form end --> 
          </div>
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
<script>
  const input_currency = document.querySelector('#input_currency');
  const output_currency = document.querySelector('#output_currency');
  const input_amount = document.querySelector('#input_amount');
  const output_amount = document.querySelector('#output_amount');
  input_currency.addEventListener('change', compute);
  output_currency.addEventListener('change', compute);
  input_amount.addEventListener('input', compute);
  output_amount.addEventListener('input', compute);

  function compute() {
    const input_currency1 = input_currency.value;
    const output_currency1 = output_currency.value;
    const url = `https://v6.exchangerate-api.com/v6/89ea5330f4f56e118095221d/latest/${input_currency1}`
    fetch(url).then(res => res.json()).then(res => {
      const new_rate = res.conversion_rates[output_currency1];
      rate.innerText = `1 ${input_currency1} = ${new_rate} ${output_currency1}`
      output_amount.value = (input_amount.value * new_rate).toFixed(2);
    })
  }
  compute();

</script>
</body>
</html>