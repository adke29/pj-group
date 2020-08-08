<!DOCTYPE html>
<html>
<head>
    <?php include 'head.php'?>
    <title>Sign In</title>
    <link rel="stylesheet" href="./styles/signin.css">
</head>
<body>
    <?php include 'navbar.php'?>
    <main>
        <div class="cont">
            <div class="form sign-in">
              <form action="">
              <h2>Sign In</h2>
              <label>
                <span>Username</span>
                <input type="email" name="email">
              </label>
              <label>
                <span>Password</span>
                <input type="password" name="password">
              </label>
              <button class="submit" type="button">Sign In</button>
            </form>
              <p class="forgot-pass"><a href="./forget.html"> Forgot Password ?</a></p>
              <div class="social-media">
                <ul>
                  <li><img src="./assets/facebook.png"></li>
                  <li><img src="./assets/twitter.png"></li>
                  <li><img src="./assets/linkedin.png"></li>
                  <li><img src="./assets/instagram.png"></li>
                </ul>
              </div>
              <div class="img-btn2">
                <span class="m-up"><i class="fas fa-arrow-left"></i> Sign Up </span>
                </div>
            </div>
        
            <div class="sub-cont">
              <div class="img">
                <div class="img-text m-up">
                  <h2>Ingin Bergabung?</h2>
                  <p>Sign Up dan Mari Mulai Manfaatkan Kesempatan Ini!</p>
                </div>
                <div class="img-text m-in">
                  <h2>Sudah Punya Akun?</h2>
                  <p>Jika Anda Sudah Memiliki Akun, Silahkan Sign In ke Akun Anda!</p>
                </div>
                <div class="img-btn">
                  <span class="m-up">Sign Up</span>
                  <span class="m-in">Sign In</span>
                </div>
              </div>
              <div class="form sign-up">
                <form action="">
                <h2>Sign Up</h2>
                <label>
                  <span>Nama</span>
                  <input type="text">
                </label>
                <label>
                  <span>Username</span>
                  <input type="text">
                </label>
                <label>
                <label>
                  <span>Email</span>
                  <input type="email">
                </label>
                <label>
                  <span>Password</span>
                  <input type="password">
                </label>
                <label>
                  <span>Kode Referal</span>
                  <input type="text">
                </label>
              </form>
                <button type="button" class="submit">Sign Up Now</button>
                <div class="img-btn3">
                  <span class="m-in"> Sign In <i class="fas fa-arrow-right"></i> </span>
                </div>
                </div>
            </div>
          </div>
        <script type="text/javascript" src="./scripts/script.js"></script>
    </main>
</body>
</html>