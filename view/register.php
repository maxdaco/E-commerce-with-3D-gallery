<?php
require_once 'innerhead_unregistered.php';
require_once '../control/register_process.php'
?>


<section class="vh-100">
  <div class="mask d-flex align-items-center h-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 0px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase lead text-center mb-5">Please create an account to continue shopping.</h2>

              <form method="post" class="needs-validation" novalidate>
                <?php
                if (isset($err_empty)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex"">' . $err_empty . '</div>';
                }
                if (isset($err_firstName)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex">' . $err_firstName . '</div>';
                }
                if (isset($err_lastName)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex"">' . $err_lastName . '</div>';
                }
                if (isset($err_email)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex"">' . $err_email . '</div>';
                }
                if (isset($err_password)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex"">' . $err_password . '</div>';
                }
                if (isset($err_repassword)) {
                  echo '<div class="alert alert-danger alert dismissable align-items-center fade show d-flex"">' . $err_repassword . '</div>';
                }
                ?>

                <div class="mb-4">
                  <label class="form-label">First Name</label>
                  <input type="text" name="firstname" id="firstname" class="form-control" />


                </div>

                <div class="mb-4">
                  <label class="form-label">Last Name</label>
                  <input type="text" name="lastname" id="lastname" class="form-control form-control-lg" />

                </div>

                <div class="mb-4">
                  <label class="form-label">Your Email</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg" />

                </div>

                <div class="mb-4">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control form-control-lg" />

                </div>

                <div class="mb-4">
                  <label class="form-label">Repeat your password</label>
                  <input type="password" name="repassword" id="repassword" class="form-control form-control-lg" />

                </div>



                <div class="d-flex justify-content-center">
                  <input type="submit" name='submit' value="Register" class="btn btn-success btn-block btn-lg text-body"></input>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

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