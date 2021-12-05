
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="images/favicon.png" rel="icon" />
  <title>Green Finance</title>
  <meta name="description"
    content="Borderless Banking Simplified With green finance, sending money abroad is made easier, faster, cheaper and better from your phone or computer">


  <!-- Web Fonts
============================================= -->
  <link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

  <!-- Stylesheet
============================================= -->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.css" />
  <link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
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
    <header id="header" class="bg-transparent header-text-light">
      <div class="container">
        <div class="header-row">
          <div class="header-column justify-content-start">
            <!-- Logo
          ============================= -->
            <div class="logo"> <a class="d-flex" href="/" title="Green finance"><img src="images/logo.png"
                  alt="green finance" /></a> </div>
            <!-- Logo end -->
            <!-- Collapse Button
          ============================== -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span>
              <span></span> <span></span> </button>
            <!-- Collapse Button end -->

          </div>
          <div class="header-column justify-content-end">
            <!-- Login & Signup Link
          ============================== -->
            <nav class="login-signup navbar navbar-expand">
              <ul class="navbar-nav">
                <li><a href="/login">Login</a> </li>
                <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary d-none d-sm-block"
                    href="/signup">Sign Up</a></li>
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
    <div id="content">

      <!-- Send/Request Money
    ============================================= -->
      <section class="hero-wrap section shadow-md pb-4">
        <div class="hero-mask opacity-7 bg-dark"></div>
        <div class="hero-bg" style="background-image:url('images/bg/image-5.jpg');"></div>
        <div class="hero-content py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-xl-7 my-auto text-center text-lg-left pb-4 pb-lg-0">
                <h2 class="text-14 font-weight-400 text-white mb-4">Borderless Banking Simplified.</h2>
                <p class="text-4 text-white mb-4">With green finance, sending money abroad is made easier, faster,
                  cheaper and better from your phone or computer.</p>
              </div>
              <div class="col-lg-6 col-xl-5 my-auto">
                <ul class="nav nav-tabs nav-justified bg-white style-5 rounded-top" id="myTab" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" id="send-money-tab" data-toggle="tab"
                      href="#send-money" aria-controls="send-money" aria-selected="true">Send Money Quickly</a> </li>
                  <!-- <li class="nav-item"> <a class="nav-link" id="request-money-tab" data-toggle="tab" href="#request-money" role="tab" aria-controls="request-money" aria-selected="false">Request Money</a> </li> -->
                </ul>
                <div class="tab-content p-4 bg-white rounded-bottom" id="myTabContent">
                  <div class="tab-pane fade show active" id="send-money" role="tabpanel"
                    aria-labelledby="send-money-tab">
                    <form id="form-send-money" method="post">
                      <div class="form-group">
                        <label for="youSend">You Send</label>
                        <div class="input-group">
                          <div class="input-group-prepend"> <span class="input-group-text">₦</span> </div>
                          <input type="text" class="form-control" data-bv-field="youSend" id="input_amount" value=""
                            placeholder="">
                          <div class="input-group-append"> <span class="input-group-text p-0">
                              <select id="input_currency" data-style="custom-select bg-transparent border-0"
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
                        <label for="recipientGets">Recipient Gets</label>
                        <div class="input-group">
                          <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                          <input type="text" class="form-control" data-bv-field="recipientGets" id="output_amount"
                            value="" placeholder="">
                          <div class="input-group-append"> <span class="input-group-text p-0">
                              <select id="output_currency" data-style="custom-select bg-transparent border-0"
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
                      <div class="result">
                        <div class="rate" id="rate"></div>
                        <a href="/login" class="btn btn-primary btn-block">Continue</a>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Send/Request Money End -->
    </div>
    <!-- Content end -->

    <!-- Footer
  ============================================= -->
    <footer id="foot" class="pb">
      <div class="footer-copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg">
              <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright &copy; 2021 <a href="#">Green Finance</a>. All
                Rights Reserved.</p>
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
  <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
      class="fa fa-chevron-up"></i></a>

  <!-- Video Modal
============================================= -->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content bg-transparent border-0">
        <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal"
          aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-body p-0">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Video Modal end -->

  <!-- Script -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
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
