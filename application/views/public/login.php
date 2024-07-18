<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Cache-Control" content="no-cache">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">

        <link rel="apple-touch-icon" href="<?=base_url('assetsbg/')?>logo.png">
        <link rel="icon" href="<?=base_url('assetsbg/')?>logo.png">

        <title>WebGL Fluid Simulation</title>
        <meta name="description" content="A WebGL fluid simulation that works in mobile browsers.">

        <meta property="og:type" content="website">
        <meta property="og:title" content="Webgl Fluid Simulation">
        <meta property="og:description" content="A WebGL fluid simulation that works in mobile browsers.">
        <meta property="og:url" content="https://paveldogreat.github.io/WebGL-Fluid-Simulation/">
        <meta property="og:image" content="https://paveldogreat.github.io/WebGL-Fluid-Simulation/logo.png">
        <link rel="shortcut icon" href="<?=base_url('assetsdb/')?>images/favicon.svg" />
        <link rel="stylesheet" href="<?=base_url('assetsdb/')?>fonts/bootstrap/bootstrap-icons.css" />
        <link rel="stylesheet" href="<?=base_url('assetsdb/')?>css/main.min.css" />

        <script type="text/javascript" src="<?=base_url('assetsbg/')?>dat.gui.min.js"></script>
        <style>
            html, body {
    overflow: hidden;   
}

body {
    margin: 0;
    width: 100vw;
  height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

canvas {
    width: 100%;
    height: 100%;
}

h1 {
    font-family: 'Cinzel', sans-serif;
    color: snow;
    position: absolute;
    font-size: 3vw;
    font-weight: 400;
    letter-spacing: 0.8vw;
    transition: color 0.3s;
}

h1:hover {
    color: silver;
}
        </style>
        <script>
            window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
            ga('create', 'UA-105392568-1', 'auto');
            ga('send', 'pageview');
        </script>
        <script async src="https://www.google-analytics.com/analytics.js"></script>
    </head>
    <body class="login-bg">
      <!--outside div......inside canvas-->  <canvas>
          <!-- Container start -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
          <form action="https://www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/index.html" class="my-5">
            <div class="login-form rounded-4 p-4 mt-5">
              <a href="index.html" class="mb-4 d-flex">
                <img src="<?=base_url('assetsdb/')?>images/logo.svg" class="img-fluid login-logo" alt="Unity Admin Dashboard" />
              </a>
              <h2 class="fw-light mb-4">Login</h2>
              <div class="mb-3">
                <label class="form-label" for="yEmail">Your Email</label>
                <input type="text" id="yEmail" class="form-control border-0" placeholder="Enter your email" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="pwd">Your Password</label>
                <input type="password" id="pwd" class="form-control border-0" placeholder="Enter password" />
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <div class="form-check m-0">
                  <input class="form-check-input border-0" type="checkbox" value="" id="rememberPassword" />
                  <label class="form-check-label" for="rememberPassword">Remember</label>
                </div>
                <a href="forgot-password.html" class="text-white text-decoration-underline">Lost password?</a>
              </div>
              <div class="d-grid py-3 mt-3">
                <button type="submit" class="btn btn-lg btn-primary">
                  Login
                </button>
              </div>
              <div class="text-center py-3">or Login with</div>
              <div class="d-flex gap-2 justify-content-center">
                <button type="submit" class="btn btn-outline-light">
                  <i class="bi bi-google me-2"></i>Gmail
                </button>
                <button type="submit" class="btn btn-outline-light">
                  <i class="bi bi-facebook me-2"></i>Facebook
                </button>
              </div>
              <div class="text-center pt-4">
                <span>Not registered?</span>
                <a href="signup.html" class="text-white text-decoration-underline ms-2">
                  SignUp</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Container end -->
      </canvas>
<!--<h1>WELCOME AVISAKE</h1>-->
        <script src="<?=base_url('assetsbg/')?>script.js"></script>
    </body>
</html>