<footer class="page-footer orange">
  <div class="container">
    <div class="row">
      <h5 class="white-text">Abut Project</h5>
      <p class="grey-text text-lighten-4">This is an automated lottery management system designed for my final year project.</p>
    </div>
  <div class="footer-copyright">
    <div class="container">
    Made by Hemen Edward Aondona </div>
  </div>
</footer>

<div class="container">
  <div class="error">
    <div id="message">
      <?php
      try {

      } catch (Exception $e) {
        print_r($e);
      }
      ?>
    </div>
  </div>
  <div class="session">
    <?php
    # var_dump($_SESSION);
    ?>
  </div>
</div>
<script>
(function($){
  $(function(){
    $('.button-collapse').sideNav();
  });
})(jQuery);
</script>
