<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <title>Login - Sakura.id</title>
  </head>
    <body>
      <header class="header">
        <div class="container header__container">
            <div class="header__logo">
                <a href="index.php">
                    <img src="assets/logoweb.png" alt="">
                </a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="header__menu">
                <nav id="navbar" class="header__nav collapse">
                    <ul class="header__elenco">
                        <li class="header__el"><a href="index.php" class="header__link">Home</a></li>
                        <li class="header__el"><a href="kompensasi/data-kompen.php" class="header__link">Data Kompensasi</a></li>
                        <li class="header__el"><a href="total/data-total.php" class="header__link">Data Total</a></li>
                        <li class="header__el"><a href="#contactus" class="header__link">Contact us</a></li>
                        <li class="header__el header__el--blue"><a href="login.php" class="btn btn--white">Login →</a></li>
                        <li class="header__el header__el--blue"><a href="register.php" class="btn btn--white">Sign In →</a></li>
                    </ul>
                </nav>
            </div>
        </div>
      </header>
      <center>
            <section >
                <h2 >Login</h2>
                <div class="login-form">
                    <form action="../BAB 7/login-proses.php" method="POST" >
                        <input type="text" name="username" placeholder="Username"  />
                        <input type="password" name="password" placeholder="Password" />
                        <button type="submit" class="btn-login" name="login">
                            Sign in
                        </button>
                        <p class="message-login">Not registered? <a href="register.php">Create an account</a></p>
                    </form>
                </div>
            </section>
            <section id="contactus"></section>
        </center>
        <section id="contactus"></section>
        <div class="sosmed__lr">
          <strong>sakuraid@gmail.com | +6285852153554</strong>
          <h5>&copy; Administrator Sakura ID  </h5>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
