<?php 

    define("TITLE", "Contact | The Handy Gringo");

?>


<?php

include("includes/header.php"); 

?>

<!--Social Media Links-->
<div class="container-fluid text-center">
    <div class="row">
           <div class="col-sm-12">
                <h2>
                    <a href="#" class="yelp" title="Yelp"><i style="color: #6b8e23;" class="fa fa-yelp fa-3x"></i></a>
                    <a href="#" class="facebook" title="Facebook"><i style="color: #6b8e23" class="fa fa-facebook fa-3x"></i></a>
                    <a href="#" class="email" title="Emailr"><i style="color: #6b8e23" class="fa fa-envelope fa-3x"></i></a>
                    <a href="#" class="phone" title="Phone"><i style="color: #6b8e23" class="fa fa-phone fa-3x"></i></a>
                </h2>		
			</div>
        </div>
    </div>
</div>

<!--Contact section -->
 <div class="container-fluid text-center" id="contactSection">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="" id="">
				<span class="contactHead"><h2>Contact Me</h2></span>
				<br>
				<!-- Name Input -->
				<div class="form-group">
  				    <label for="usr">Name:</label>
 				    <input type="text" class="form-control" id="usr">
				</div>
				<!-- Email Input -->
				<div class="form-group">
					 <label for="email">Email:</label>
					 <input type="text" class="form-control" id="email">
				</div>
				<!-- Message Input -->
				<div class="form-group">
      				  <label for="comment">Message:</label>
      				  <textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
					<button type="button" class="btn" style="background-color: #6b8e23" ><i class="fa fa-paper-plane fa-4x" style="color:white"></i></button>
				</div>
		</div>
	</div>
</div>




<?php

include("includes/footer.php");

?>