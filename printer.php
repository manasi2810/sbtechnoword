 
   <!-- ##### Header Area Start ##### -->
    <?php include'header.php' ?>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix dzsparallaxer auto-init" data-options='{direction: "normal"}'>
        <div class="divimage dzsparallaxer--target" style="width: 101%;  background-image: url(img/bg-img/bg-2.jpg)"></div>
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100" >
                <div class="row h-100 align-items-center">
                    <div class="col-12" >
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">PRINTER</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="products.php">Product</li>
                                <li class="breadcrumb-item active" aria-current="page">Printer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->
    <!-- ##### Contact Area Start ##### -->
 <section class="section-padding-100 contact_us_area" id="contact" style="padding:10px">
        <div class="container">
            <div class="row">
                <div class="col-12"> 
                    <div class="row">
                    <div class="col-12 col-md-4">  
                </div>
                 <div class="col-12 col-md-3"> 
                   <div class="service_single_content text-center mb-100 fadeInUp" style="padding: 10px 10px;" data-wow-delay="0.2s">
                            <div>
                                <img src="img/products/Printer.jpg"  alt="">
                            </div><br>
                              <h6>Printer</h6>
                            </div>
                </div>
                 <div class="col-12 col-md-5">  
                </div> 
                </div>
            </div>
            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact_form">
                        <form  method="POST" >
                            <div class="row">
                                
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.1s">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.3s">
                                        <input type="text" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="subject" id="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" name="send" class="btn dream-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
  <?php include'footer.php'; ?>
    <!-- ##### Footer Area End ##### -->
    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>
    <!-- Active js -->
    <script src="js/script.js"></script>
</body>
</html>
<?php
   //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $name = $_POST['name'];
     $email = $_POST['email'];
      $subject = $_POST['subject'];
   $message = $_POST['message'];
    

//Load Composer's autoloader
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Port       = 26;    
    $mail->Username   = 'it.support@sbexpresscargo.com';                     //SMTP username
    $mail->Password   = 'xxsuvqilcgvsbggv';                               //SMTP password
   $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
     $mail->Port = '587';                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('it.support@sbexpresscargo.com', 'Website');
    $mail->addAddress('info@sbtechnoworld.com', 'SBTW');     //Add a recipient
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enquiry ';
    $mail->Body    = "Sender Name -$name <br> Sender Email - $email<br> Subject- $subject <br> Message -$message"  ; 
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>