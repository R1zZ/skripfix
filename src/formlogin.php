     <?php
    session_start();
    if (isset($_SESSION['username'])){
    echo"Anda Telah Login, Silahkan masuk ke <a href='admin.php'>Admin</a><br>Jika Anda Ingin Logout <a href='logout.php'>Klik Di Sini</a>"
    ?>

    <?php
    }else{
    ?>
    <html>
    <meta charset="UTF-8">
    <title>Login Admin</title>
      <link rel="stylesheet" href="../css/login.css">
        <body>
          <form method="post" action="login.php">
            <div class="login">
              <div class="login-screen">
                <div class="app-title">
                <h1>Login</h1>
                </div>
                <div class="login-form">
                  <div class="control-group">
                    <input type="text" name="username" placeholder="username" />
                      <label class="login-field-icon fui-user" for="login-name"></label>
                  </div>

                  <div class="control-group">
                    <input type="password" name="password" placeholder="password" />
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                  </div>
                  <input type="submit" name="Submit" value="Login" class="btn btn-primary btn-large btn-block" />
                  </p>
                  <a href="../index.html">Back</a>
                </div>
              </div>
            </div>
        </body>
     </html>    <?php
    }
    ?>