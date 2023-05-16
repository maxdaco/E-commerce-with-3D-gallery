
<footer class="bg-dark text-center text-white  ">

  <div class=" footer mt-auto container">
    <!-- Section: Social media -->
    <section class="mb-4">
     
      <a class="btn btn-outline-light btn-floating mx-2 mt-3" href="https://www.facebook.com/jason.wise.7" role="button"><i class="fa fa-facebook-f"></i></a>

   
      <a class="btn btn-outline-light btn-floating mx-2 mt-3" href="https://www.instagram.com/artbwise/" role="button"><i class="fa fa-instagram"></i></a>

    

      <!-- Section: Form -->
      <section class="">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
       
          <div class="row d-flex justify-content-center">
          
            <div class="">
              <p class="pt-3">
                <strong>Sign up now<br></strong>
                Subscribe to my newsletter to never miss an update!
              </p>
            </div>
     

      
            <div class="col-md-5 col-12">
        

              <input type="text" name="reg_email" id="reg_email" placeholder="Email Address" value="<?php echo $inputs['reg_email'] ?? '' ?>" class="<?php echo isset($errors['reg_email']) ? 'error' : '' ?> form-control ">
              <small><?php echo $errors['reg_email'] ?? '' ?></small>

            </div>
          </div>
         

          
          <div class="">
           
            <button type="submit" class="btn btn-outline-light  mt-3">
              Subscribe
            </button>
          </div>
          

        
        </form>
      </section>
  </div>
  <div class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link text-light small" href="./view/unregistered_refound_policy.php">Refound Policy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light small" href="./view/unregistered_privacy_policy.php">Privacy Policy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light small" href="./view/unregistered_terms_and_condition.php">Terms and Conditions</a>
    </li>
  </div>
  
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); width:100%">

    <p class="text-white"> © 2020 Sparkle Passion All Rights Reserved</p>
  </div>
  
</footer>


</body>

</html>