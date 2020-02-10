<?php 
require_once('../private/initialize.php');
$page_title = "List your car";
include(SHARED_PATH . '/header.php');


?>
<header class="masthead text-center">
        <h1 class="masthead-subheading mb-0">List your car</h1>
</header>
<br>
  <section>
    <div class="container">
      <form action="#" method="post">
      	<div class="form-row">
      		<div class="form-group col-8">
      			<!-- where is your car located? -->
      			<label class="control-label" for="car_location">Where is your car located?</label> 
				<input id="car_location" name="car_location" type="text" class="form-control input-md">
      		</div>
      		<div class="form-group col">
      			<!-- license plate -->
      			<label class="control-label" for="car_license">License plate number</label>
      			<input id="car_license" name="car_license" type="text" class="form-control input-md">
      		</div>
      	</div>
      	<div class="form-row">
      		<div class="form-group col">
      			<!-- year -->
      			<label class="control-label" for="car_year">Year</label>
      			<input id="car_year" name="car_year" type="text" class="form-control input-md">
      		</div>
      		<div class="form-group col">
      			<!-- make -->
      			<label class="control-label" for="car_make">Make</label>
      			<input id="car_make" name="car_make" type="text" class="form-control input-md">
      		</div>
      		<div class="form-group col">
      			<!-- model -->
      			<label class="control-label" for="car_model">Model</label>
      			<input id="car_model" name="car_model" type="="text class="form-control input-md">
      		</div>
      	</div>
      	<div class="form-row">
      		<div class="form-group col">
      			<!-- DL number -->
      			<label class="control-label" for="dl">Drivers license number</label>
      			<input id="dl" name="dl" type="="text class="form-control input-md">
      		</div>
      		<div class="form-group col">
      			<!-- issuing country -->
      			<label class="control-label" for="dl_country">Issuing country</label>
      			<input id="dl_country" name="dl_country" type="="text class="form-control input-md">
      		</div>
      		<div class="form-group col">
      			<!-- province -->
      			<label class="control-label" for="dl_province">Province</label>
      			<input id="dl_province" name="dl_province" type="="text class="form-control input-md">
      		</div>
      	</div>
      	<div class="form-row">
      		<div class="form-group col-8">
      			<!-- DL name-->
      			<label class="control-label" for="dl_name">Enter your name as it appears on your driver's license</label>
      			<input id="dl_name" name="dl_name" type="="text class="form-control input-md">
      		</div>
      		<div class="form-group col">
      			<!-- date of birth -->
      			<label class="control-label" for="dl_dob">Date of Birth</label>
      			<input id="dl_dob" name="dl_dob" type="="text class="form-control input-md">
      		</div>
      	</div>
      	<div class="form-row">
      		<div class="form-group col">
      			<!-- car description-->
      			<label class="control-label" for="car_desc">Describe your car</label>
    			<textarea class="form-control" id="car_desc" name="car_desc" rows="3"></textarea>
      		</div>
      		<div class="form-group col">
      			<!-- car features -->
      		</div>
      	</div>
      	<div class="form-row">
      		<div class="form-group col">
      			<!-- drop your car photos -->
      			<label for="car_photos">Car photos</label>
    			<input type="file" class="form-control-file" id="car_photos" name="car_photos">
      		</div>
      	</div>
      	<div class="form-row">
      		<div class="form-group col-8">
      			<!-- agree to terms -->
      			<input class="form-check-input" type="checkbox" name="terms" id="term" value="">
				<label class="form-check-label" for="exampleRadios1">I agree to the <a href="#">Quality and Safety Standards</a></label>
      		</div>
      		<div class="form-group col">
      			<input type="submit" name="submit" value="Publish" class="btn btn-primary btn-xl rounded-pill mt-5"> 
      		</div>
      	</div>
      </form>
    </div>
  </section>
<br>
<br>
<br>

<script type="text/javascript">
	$(document).ready(function() {
        $('#dl_dob').datepicker({
        	format: 'dd-mm-yyyy'
        });
        $('#car_year').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });
    });
	


</script>


<?php 
include(SHARED_PATH . '/footer.php');

?>