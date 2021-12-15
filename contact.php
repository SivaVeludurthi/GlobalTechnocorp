<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Globaltechnocorp | Contact</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('inc/css.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="hidden-bar-wrapper">
<!-- Preloader -->
<!-- <div class="preloader"></div> -->

<div class="page-wrapper">
 	<?php include('inc/header.php'); ?>

<!--Page Title-->
<section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Contact us</h2>
			<ul class="page-breadcrumb">
				<li><a href="index-2.html">home</a></li>
				<li>Contact us</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="title-box">
				<div class="title">GET IN TOUCH</div>
				<h2>A Monthly Project Fee <br> Price Plans</h2>
				<div class="text">For genereal enquires you can touch with our front desk supporting team <br> at <a href="mailto:info@globaltechnocorp.com">info@globaltechnocorp.com</a> or call on <a href="tel:+8.555.55.55">+8.555.55.55</a></div>
			</div>
			
			<div class="row clearfix">
			
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-pin"></span></div>
							<ul>
								<li><strong>Address</strong></li>
								<li>125, Suitland Street, USA</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-phone-call"></span></div>
							<ul>
								<li><strong>Phone</strong></li>
								<li>+ 786 875 864 75</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-email-1"></span></div>
							<ul>
								<li><strong>E-Mail</strong></li>
								<li>info@globaltechnocorp.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="lower-text">We are at 36 places over the country, <a href="#">see our branches.</a></div> -->
		</div>
	</section>
	<!-- End Contact Info Section -->
	
	<!-- Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!-- Contact Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">SEND YOUR MESSAGE</div>
						<h2>Send Your Message</h2>
					</div>
					<div class="pull-right">
						<div class="text">Our goal is to help our companies maintain or achieve best- in-class <br> positions in their respective industries and our team works.</div>
					</div>
				</div>
			</div>
			
			<!-- Contact Form -->
			<div class="contact-form">
					
				<!-- Contact Form -->
				<form id="contact-form">
					<div class="row clearfix">
					
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Your name *</label>
							<input type="text" id="name" name="name" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Email address *</label>
							<input type="text" id="email" name="email" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Phone number *</label>
							<input type="text" id="ph_number" name="ph_number" placeholder="" required>
						</div>
						
						<!-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Website</label>
							<input type="text" name="subject" placeholder="" required>
						</div> -->
						
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
							<label>Your Message *</label>
							<textarea name="message" id="msg" placeholder=""></textarea>
						</div>
						
						<div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
							<button class="theme-btn btn-style-three" id="submit" name="submit-form"><span class="txt">Send Now</span></button>
						</div>
						
					</div>
				</form>
			</div>
			<!-- End Contact Form -->
			
		</div>
	</section>
	<!-- End Contact Map Section -->

    <?php include('inc/footer.php'); ?>
	
</div>
<!--End pagewrapper-->

<?php include('inc/js.php'); ?>

<script>
	$("#submit").click(function () { 
			var name = $("#name").val();
			var ph_number = $("#ph_number").val();
			var email = $("#email").val();
			var message = $("#msg").val();
			if(name,ph_number,email,message == ''){
				Swal.fire({
								position: 'center',
								icon: 'error',
								title: 'Fill all the fields.',
								showConfirmButton: false,
								timer: 1500
					})
			}
			else{
            $.ajax({
                type: 'POST',
                url: "SendMail.php",
                data: {
						name: name,
						ph_number: ph_number,
						email: email,
						message: message,
				},
				success: function(result){
					$("#loading-image").hide();
					Swal.fire({
								position: 'center',
								icon: 'success',
								title: 'Your Message Sent Success',
								showConfirmButton: false,
								timer: 1500
					})
                }
			});
	}
            return false;
    });
</script>

</body>
</html>