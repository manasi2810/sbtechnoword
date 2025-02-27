 
 <style>
  .partner-logo {
            margin-right: 100px; /* Adjust the margin as needed */
        } 
        .partners {
    padding: 0 0 10px;
}
 </style>
  <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <marquee behavior="scroll" direction="left" scrollamount="10">
                        <img class="partner-logo" src="images/Saitrack Foundation.png" title="2" alt="2" style="width:200px; height:60px;">
                        <img class="partner-logo" src="images/Saitrack solutions.png" title="3" alt="3" style="width:220px; height:90px;">
                        <img class="partner-logo" src="images/universal logo.png" title="1" alt="1" style="width:200px; height:100px;">
                        <img class="partner-logo" src="images/sb.png" title="4" alt="4" style="width:200px; height:50px;">
                        <img class="partner-logo" src="images/ved tax.png" title="5" alt="5" style="width:130px; height:70px;">
                        <!-- Add more partner logos as needed -->
                    </marquee>
                </div>
            </div>
        </div>
    </div>
  <footer class="footer-area bg-img" >
        <div class="footer-content-area " >
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-12 col-md-5">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text wow fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="updated-img/SBTWSLogo.png" style="width:150px; height:70px;" alt="logo"> </a>
                                </div>
                               <p>SB TechnoWorld solutions LLP is the partners of choice for many of the the india's leading companies.
                                Building on a strong base of IT Techonology and solutions expertise, strategic partnerships and professional consulting services.</p>
                            </div>
                             <!--Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="https://www.facebook.com/sbtechnoworld/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.google.com/search?q=sb+technoworld&amp;sca_esv=469084b56d0a10d6&amp;sca_upv=1&amp;sxsrf=ACQVn08KYklnQeghwF7TUUrrzcV3XQv-8g%3A1712314686672&amp;ei=PtkPZsfTKLuJjuMP4KCvgAI&amp;gs_ssp=eJzj4tVP1zc0LMtKMjbIzSsyYLRSMagwTko1T7Q0TLVISks0NE1OsTKoME9KMk-xMEg1SUpJMk9N8eIrTlIoSU3OyMsvzy_KSQEA0noV7g&amp;oq=sbtechnoworld&amp;gs_lp=Egxnd3Mtd2l6LXNlcnAiDXNidGVjaG5vd29ybGQqAggAMhAQLhiABBgNGMcBGK8BGLADMg4QABiABBiKBRiGAxiwA0jBCVAAWABwAXgAkAEAmAEAoAEAqgEAuAEByAEAmAIBoAIImAMAiAYBkAYCkgcBMaAHAA&amp;sclient=gws-wiz-serp" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="https://wa.me/9137854184" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>                         
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info text-center wow fadeInUp" data-wow-delay="0.2s">
                                <h5>Products</h5>
                                <a href="laptop.php"><p>Laptop</p></a>
                                <a href="server.php"><p>Server</p></a>
                                <a href="biometric.php"><p>Biometric</p></a>
                                <a href="printer.php"><p>Printer</p></a>
                                <a href="cctv.php"><p>CCTV</p></a>
                            </div>
                            <!-- Content Info -->
                            <div class="contact_info text-center wow fadeInUp" data-wow-delay="0.3s">
                                <h5>Our Services</h5>
                                <a href="amc_servicesdetails.php"><p>AMC</p></a>
                                <a href="HardwareInstallation&Upgradation.php"><p>Hardware Installation And Upgradation</p></a>
                                <a href="SoftwareSupport&Installation.php"><p>Software Support And Installation</p></a>
                                <a href="Repair& Maintanainance.php"><p>Repair And Maintenance</p></a>
                                <a href="RentalServices.php"><p>Rental Services</p></a>
                            </div>
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>  
                                <p>Ground Floor,  A4, Mitul </p>  
                                <p>Industrial Estate, Sativali Road, </p>
                                <p>Next to Nicholas Sai Service,</p>
                                <p>Opposit ICICI Bank,</p>  
                                <p>Vasai East - 401208</p> 
                                <p>+91 91378 54184</p>
                                <p>info@sbtechnoworld.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
      	/**********************/
	/*	Client carousel   */
	/**********************/
	$('.carousel-client').bxSlider({
		auto: true,
	    slideWidth: 234,
	    minSlides: 2,
	    maxSlides: 5,
	    controls: false
	});
    </script>