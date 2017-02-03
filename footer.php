<?php
	$parada_footer = parada_ot_get_option( 'parada_footer' );
?>
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-12"> 
		    <?php echo balancetags($parada_footer) ?>
		</div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container-fluid --> 
</footer>
<!-- end footer -->
<?php wp_footer(); ?>
</body>
</html>