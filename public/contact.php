<?php 

    define("TITLE", "Contact | The Handy Gringo");

?>


<?php include("includes/header.php"); ?>

<?php include("includes/newsletter.php"); ?>
<br />
<!--Social Media Links-->
<div class="container-fluid">
	<div id="socialRow" class="row">
		<div class="col-sm-3">
			<a href="#"><img class="img-responsive" src="/img/yelp.png" alt="Yelp"></a>
		</div>
		<div class="col-sm-3">
			<a href="#"><img class="img-responsive" src="/img/facebook.png" alt="Facebook"></a>
		</div>
		<div class="col-sm-3">
			<a href="tel:+1-520-455-8186"><img class="img-responsive" src="/img/phone.png" alt="Phone"></a>
		</div>
		<div class="col-sm-3">
			<a href="mailto:handygringo@gmail.com" subject="Website Message"><img class="img-responsive" src="/img/email.png" alt="Email"></a>
		</div>
    </div>
</div>

<!--Contact section -->
 <div class="container-fluid text-center" id="contactDiv">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<span class="contactHead"><h2>Drop Me A Line!</h2></span>
			<br>
			
			
<?php
	
	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    
		if ($_POST['submit']) {
		if ($name != '' && $email != '') {
		if ($human == '4') {				 
			echo '<p>Your message has been sent!</p>';
			} else { 
			echo '<p>Something went wrong, go back and try again!</p>'; 
			} 
			
			} else if ($_POST['submit'] && $human != '4') {
			echo '<p>You answered the anti-spam question incorrectly!</p>';
			}
			
			} else {
			echo '<p>You need to fill in all required fields!!</p>';
		}
	

?> 

			
			<!--Start of Form-->
			<form action="https://formspree.io/dorianlazaro@gmail.com" method="POST">
				<!-- Name Input -->
				<div class="form-group">
  				    <label for="usr">Name:</label>
 				    <input type="text" name="name" class="form-control" id="usr" required placeholder="Please Enter Your Name">
				</div>
				<!-- Email Input -->
				<div class="form-group">
					 <label for="email">Email:</label>
					 <input type="email" name="email" class="form-control" id="email" required placeholder=" Please Enter a Valid Email Address">
				</div>
				<!-- Message Input -->
				<div class="form-group">
      				  <label for="comment">Message:</label>
      				  <textarea class="form-control" name="message" rows="5" id="message" required placeholder="What Can I Help You With?"></textarea>
				</div>
				<!--Anti-Spam-->
				<div class="form-group">
					<label>*What is 2+2? (Anti-spam)</label>
					<input name="human" placeholder="Type Here">
				</div>
				<!--Submit Button-->
				<div id="commentSubmit">
					<input type="submit" class="btn btn-success" value="Send">
				</div>
				<input type="hidden" name="_next" value="/contact.php" />
			</form>
			<!-- Form End -->
		</div>
	</div>
</div>




<?php

include("includes/footer.php");

?>