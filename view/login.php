<?php
require_once 'innerhead_unregistered.php';
require_once '../control/login_process.php'
?>

<section class="vh-100">
  <div class="mask d-flex align-items-center h-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login</h2>

              <form method="post">
                <?php
                if (isset($err_empty)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex"">' . $err_empty . '</div>';
                }
                if (isset($err_firstName)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex">' . $err_firstName . '</div>';
                }
                if (isset($err_lastName)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex">' . $err_lastName . '</div>';
                }
                if (isset($err_password)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex">' . $err_password . '</div>';
                }
                ?>

                <div class="form-outline mb-4">
                  <input type="text" name="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control form-control-lg" />
                  <label class="form-label">Password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <input type="submit" name='login' value="Login" class="btn btn-success btn-block btn-lg text-body"></input>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="register.php" class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

require_once 'innerfooter.php';
?>