<?php
require_once 'innerhead.php';
require_once '../control/form_validation.php';
?>




<section class="container">


    <h2 class="display-4 text-center mt-5">Contact</h2>

    <p class="text-center w-responsive mx-auto my-5 lead">Hi! I am available for commissions! <br>Feel free to reach out to ask any questions. We will reply in a timely manner of 1-3 business days. <br>Thank you! </p>

    <div class="row">


        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">


                <div class="row">


                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">

                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">

                        </div>
                    </div>


                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-4">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">

                        </div>
                    </div>
                </div>



                <div class="row">


                    <div class="col-md-12">

                        <div class="md-form mb-4">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>

                        </div>

                    </div>
                </div>


            </form>
            <div class="status"></div>

            <div class="text-center text-md-left">
                <a class="btn btn-outline-dark mb-5" onclick="validateForm();">Send</a>
            </div>
            
        </div>



        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><img src="../images/icons8-location-48.png" alt="">
                    <p>Liverpool, Merseyside</p>
                </li>

                <li><img src="../images/icons8-phone-48.png" alt="">
                    <p>+44 7541 108586</p>
                </li>

                <li><img src="../images/icons8-mail-48.png" alt="">
                    <p>jasonwise@gmail.com</p>
                </li>
            </ul>
        </div>


    </div>

</section>


<?php

require_once 'innerfooter.php';
?>