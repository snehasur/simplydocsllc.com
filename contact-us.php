<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Simply Documents LLC ....</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Prominent" />
   <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href="css/merged.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/app.css">

</head>

<body>

    <div class="adsense_fixed">
        <div class="banner_c" id="home">
           <?php
            include('header.php');
          ?>
            <div class="col-md-12 text-center phno">
                <h2>For More Update : <span class="sp"> <a href="tel:833-817-6170">833-817-6170</a></span></h2>
            </div>
        </div>
    </div>


    <div class="contact">
        <div class="container">
            <div class="contact-bottom">
                <div class="col-md-5 contact-left">
                    <h4>Contact Info</h4>
                    <div class="c-bottom">
                        <div class="c-l-left">
                            <span class="address"> </span>
                        </div>
                        <div class="c-l-right">
                            <h6>
                                11322 Miramar Parkway<br>
Suite #104<br>
Miramar FL 33025

                              
                                </h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="c-bottom">
                        <div class="c-l-left">
                            <span class="phone"> </span>
                        </div>
                        <div class="c-l-right">
                            <h6>PHONE:  <a href="tel:833-817-6170">833-817-6170</a></h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="c-bottom">
                        <div class="c-l-left">
                            <span class="mail"> </span>
                        </div>
                        <div class="c-l-right">
                            <h6><a href="mailto:info@simplydocsllc.com">info@simplydocsllc.com</a></h6>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-7 contact-left">
                  <!--    <form id="form_data"class="free_call_form" name="checkout" method="post" id="checkout"> -->
<form id="form_data"class="free_call_form contactsubmitform" name="checkout" method="post" id="contactsubmitform" enctype="multipart/form-data">
                        <div class="contact-text">
                            <!-- <input type="text" name="fullname" id="fullname" class="form-control frm-submit" placeholder="Your Name" data-error-message="Please enter your fullName!"> -->

                            <input type="text" class="form-control required" id="fullname" placeholder="Full Name" data-error-message="Please enter your fullname!" name="fullname" required>

                            <span id="fullnameerror"></span>
                           <!--  <input type="text" name="contact" id="contact" class="form-control" placeholder="Your Phone" data-error-message="Please enter your contact"> -->

                            <input type="text" class="form-control required" id="phone" placeholder="contact" data-error-message="Please enter your contact!" name="phone" required  onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" maxlength="10" minlength="10" >

                            <span id="phoneerror"></span>
                           <!--  <input type="email" name="email" id="email" class="form-control" placeholder="Email" data-error-message="Please enter your email"> -->

                             <input type="text" class="form-control required" id="email" placeholder="email" data-error-message="Please enter your email" name="email" required>
                             <span id="emailerror"></span>
                             </div>
                   
                         <br>
                        <div class="contact-textarea">
                            <textarea type="text" class="form-control required" name="message" id="message" placeholder="Message" data-error-message="Please enter your message" required></textarea>
                            <span id="messageerror"></span>
                        </div>
                        <br>
                        <div class="contact-but">
                         <!--    <input type="button" class="form-control" onclick="submitForm()"  value="Submit"> -->
                         <button type="button" class="form-control contactsubmit" id="btn">Submit</button>
                           <span id="output"></span>
                        </div>
                       


                  </form>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

<p id="loading-indicator" style="display:none;">Processing...</p>
    <!--start-footer-->
    <div class="footer">
        <div class="container">
            <div class="footer-main">
                <div class="col-md-6 footer-left">
                    <p>Powered by : <a href="#" target="_blank">Simply Documents LLC.</a></p>
                </div>
                <div class="col-md-6 footer-right">
                    <p>&copy  <script>
                        var CurrentYear = new Date().getFullYear()
                        document.write(CurrentYear)
                    </script>  Simply Documents LLC. All Rights Reserved </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
    <!--end-footer-->


<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>

<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/easing.js"></script>
<!----start-top-nav-script---->
<script type="text/javascript" src="js/responsive-nav.js"></script>
<!----//End-top-nav-script---->
<script src="js/jquery.wmuSlider.js"></script>

    <script type="text/javascript" src="js/error_handler.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    <script>
   $(document).ready(function() {
        $(document).on('click','.contactsubmit',function(e){
            e.preventDefault(0);
            var fullname = message = email = phone == "";
            fullname = $('#fullname').val();
        
            if (fullname =='') {
              $('#fullnameerror').text("Please give fullname.");
              return false;
            } else {
              $('#fullnameerror').text(" ");
            }
            phone = $('#phone').val();
            if (phone =='') {
              $('#phoneerror').text("Please give phone no.");
              return false;
            } else {
              $('#phoneerror').text(" ");
            }
            var phone_pattern = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/; 
            if (!phone_pattern.test(phone)) {
              $('#phoneerror').text("Please give valid phone no.");
              return false;
            } else {
              $('#phoneerror').text(" ");
            }
            email = $('#email').val();
            if (email =='') {
              $('#emailerror').text("Please give email.");
              return false;
            } else {
              $('#emailerror').text(" ");
            }
            if (IsEmail(email) == false) {
              $('#emailerror').text("Please give valid email.");
              return false;
            } else {
              $('#emailerror').text(" ");
            }
            message = $('textarea#message').val();
            // if (message == 'Message') {
            //   $('#messageerror').text("Please give message.");
            //   return false;
            // } else {
            //   $('#messageerror').text(" ");
            // }
        
              var form = $('.contactsubmitform')[0];

       // Create an FormData object 
        var data = new FormData(form);


       // disabled the submit button
        $(".contactsubmit").prop("disabled", true);

        console.log(data);
   
        
                    $.ajax({
                        type: "POST",
                        url: "contactusmail.php",
                        data: data,
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType:"json",
                        timeout: 800000,
                        success: function (data) {
            console.log(data);
                            $("#output").text("Mail send successfully...");
                            
                            $('#fullname').val("");
                            $('#email').val("");
                            $('#phone').val("");
                            $('textarea#message').val("");
                           
                            setTimeout(function(){
                                $("#output").hide();
                            }, 2000);
            
                        },
                        error: function (e) {
            
                        }
        });
    });
    function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (!regex.test(email)) {
        return false;
      } else {
        return true;
      }
    }
});

        

        </script>
                                             




</html>