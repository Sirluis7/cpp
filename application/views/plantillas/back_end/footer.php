<script type="text/javascript">
	$(function(){
		 $(window).on('load', function(){
		    window.setTimeout(function(){
		      $('#body').addClass('loaded');
		    } , 0);
		 });
	})
	
</script>
<footer class="footer text-center">
	<?php 
    if($this->session->userdata('empresaCPP')=="km"){
	    ?>
				<p> &copy; KM Telecomunicaciones <?php echo date("Y");?></p>
	    <?php
    }elseif ($this->session->userdata('empresaCPP')=="splice") {
	    ?>
				<p> &copy; Splice Chile <?php echo date("Y");?></p>

	    <?php
    }
  ?>

</footer>


<script src="<?php echo base_url();?>assets/back_end/js/popper.min.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/back_end/js/bootstrap.min.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/back_end/js/jquery.dataTables.min.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/back_end/js/moment-with-locales.min.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/back_end/js/notify.min.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/back_end/js/select2.min.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/back_end/js/clockpicker.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/back_end/js/bootstrap-datetimepicker.min2.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/back_end/js/rut.min.js" charset="UTF-8"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/select.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/clockpicker.css" >
<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/bootstrap-datetimepicker.min2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/normalize.min.css" rel="stylesheet">

<?php 
    if($this->session->userdata('empresaCPP')=="km"){
	    ?>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/estilos_km.css">
	    <?php
    }elseif ($this->session->userdata('empresaCPP')=="splice") {
	    ?>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/estilos_splice.css">
	    <?php
    }
  ?>

<link rel="stylesheet" href="<?php echo base_url();?>assets/back_end/css/fontawesome-all.min.css">
<script src="<?php echo base_url();?>assets/back_end/js/dataTables.select.min.js"></script>
</body>
</html>