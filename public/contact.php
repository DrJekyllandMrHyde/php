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
			<form>
				<span class="contactHead"><h2>Drop Me A Line!</h2></span>
				<br>
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
      				  <textarea class="form-control" name="message" rows="5" id="comment" required placeholder="What Can I Help You With?"></textarea>
				</div>
				<div id="commentSubmit">
					<button type="button" class="btn btn-success" ><i class="fa fa-paper-plane fa-4x" style="color:white"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>




<?php

include("includes/footer.php");

?>