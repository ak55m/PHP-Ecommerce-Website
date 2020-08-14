<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>



 <?php include(TEMPLATE_FRONT . DS . "header.php")?>




        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>Contact Us </h1>

<!--                    <p class="lead">This is a demo for our tutorial dedicated to crafting working Bootstrap contact form with PHP and AJAX background.</p>-->

                    <!-- We're going to place the form here in the next step -->
                    
<form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">
        
        <?php send_message(); ?>
        

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
                    <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Phone Number *</label>
                    <input id="form_email" type="tel" name="phonenumber" class="form-control" placeholder="Please enter your phone number *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            

        </div>
          <div class="row">
                  <div class="col-md-12">
                <div class="form-group">
                    <label for="form_need">Please specify your need *</label>
                    <select id="form_need" name="subject" class="form-control" required="required" data-error="Please specify your need.">
                        <option value="Specific issue"></option>
                        <option value="Other">Cancel order</option>
                        <option value="Managing your orders">Managing your orders</option>
                        <option value="Returns and Refunds">Returns and Refund</option>
                        <option value="Seller Account">Seller Account</option>
                        <option value="Contact Seller">Contact Seller</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
    
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-primary btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are required. Contact form template by
                    <a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form" target="_blank">Bootstrapious</a>.</p>
            </div>
        </div>
    </div>

</form>
                    
                    
                   

                </div>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>


<?php include(TEMPLATE_FRONT . DS . "footer.php")?>