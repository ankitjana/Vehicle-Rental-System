<?php
// initialising stuff
require_once('../private/initialize.php');
$page_title = COMPANY_NAME;

include(SHARED_PATH . '/header.php');

?>
<!-- 
TODO:  
integrate Google api for autocompletion on from and to fields
enable detect location to get current location and fill in as value/placeholder in from and to fields 
-->

<!-- masthead -->
<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">You leave the ride. The ride never leaves you.</h1>
        <h1 class="masthead-subheading mb-0">#ComeRent</h1>
        <br>


        <!-- search form -->
        <form action="<?php echo url_for('/search.php'); ?>" method="post">

          <div class="form-row">
            <!-- source -->
            <div class="form-group col-md-6">
              <input id="place_from" name="place_from" class="form-control" type="text" placeholder="From">
            </div>
            <!-- from time -->
            <div class="form-group col-md-6 picker">
              <input type="text" id="timestamp_from" class="form-control" placeholder="Departing">
            </div>
          </div>

          <div class="form-row">
            <!-- destination -->
            <div class="form-group col-md-6">
              <input id="place_to" name="place_to" class="form-control" type="text" placeholder="To">
            </div>
            <!-- to time -->
            <div class="form-group col-md-6 picker">
              <input type="text" id="timestamp_to" class="form-control" placeholder="Returning">
            </div>
          </div>

          <input type="submit" name="submit" value="Search" class="btn btn-primary btn-xl rounded-pill mt-5">  
        </form>

    </div>
  </header>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#timestamp_from').datetimepicker();
        $('#timestamp_to').datetimepicker();
    });    

  </script>


<!-- ending stuff -->
  <?php
  include(SHARED_PATH . "/footer.php");
  ?>