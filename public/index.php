<?php
require_once('../private/initialize.php');
$page_title = COMPANY_NAME;
include(SHARED_PATH . '/header.php');

?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVmWE-Jc2-9VQNAv-62kto0frFvEIwK6c&libraries=places&callback=initAutocomplete" async defer></script>
<script src="stylesheets/vendor/jquery/autocomplete.js"></script>


<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">You leave the ride. The ride never leaves you.</h1>
        <h1 class="masthead-subheading mb-0">#ComeRent</h1>
        <br>
        <div class="container">
          <input id="test" class="geographical" placeholder="From?" onFocus="geolocate()" type="text" class="form-control">
          <input class="geographical" placeholder="To?" onFocus="geolocate()" type="text" class="form-control">
            </div>
            <!-- source: https://www.solodev.com/blog/web-design/adding-an-auto-complete-address-field-to-your-forms.stml -->
        </div>        

        <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>
  </header>


  <?php
  include(SHARED_PATH . "/footer.php");
  ?>