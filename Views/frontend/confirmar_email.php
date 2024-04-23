	 

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGTS | TEL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">


  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css') ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/morris.js/morris.css') ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/jvectormap/jquery-jvectormap.css') ?>">

      <script src="<?php echo base_url('assets/dist/sweetalert.min.js')?>"></script>



<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>



    <link rel="stylesheet" href="<?php echo base_url('assets/dist/sweetalert.css')?>" charset=utf-8>
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/btn_on_off.css') ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrapValidator.css')?>" />
    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/bootstrapValidator.js')?>"></script>

  <script type="text/javascript">
function excluir_registro() {
        confirm("Deseja realmente excluir este registro?") 
}
</script>

</head>



<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header>
  
  </header>


	 <div class="login-box-body" style="background-image:url('<?php echo base_url('assets/img/sgtelbackf.jpg'); ?>'); background-position: center;
  background-repeat: no-repeat; background-size: cover; padding-bottom: 400px; ">
	<div class="container">
    
	<div class="login-box-body" style="margin-left:30%; width:40%;">
	<div style="text-align: center; width:100%;">
	 <img src="<?php echo base_url('assets/img/logosaint.png'); ?>" alt="SG">
     <img src="<?php echo base_url('assets/log1.png'); ?>" alt="SG">
	</div>

	 <div class="row">
	 <section class="content-header">
      <h1>
        Redefinir Senha
        <small></small>
      </h1>      
</section><br>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php			    

				    if($this->session->flashdata('errors')){
				        echo $this->session->flashdata('errors');
				    }

				    if($this->session->flashdata('user_registered')){
				        echo $this->session->flashdata('user_registered');
				    }				   

					if($this->session->flashdata('notfound')){
						echo $this->session->flashdata('notfound');
					}

				    $atrributes = array(
				        "id" => "login_form",
				        "class" => "form_horizontal"
				        );
				        
				    
				    echo form_open('usuarios/confirmar_email', $atrributes);
				?>

				<div class="form-group">
				    <?php
				        echo form_label('E-mail');
				        
				        $data = array(
				            'class' => 'form-control',
				            'name' => 'email',
				            'placeholder' => '',
							'type' => 'email',
				            'value' => set_value('email')
				            
				            );
				        
				        echo form_input($data);
				    ?>
				</div>

				

				<div class="form-group">
				    <?php
				        
				        $data = array(
				            'class' => 'btn btn-primary',
				            'value' => 'Confirmar e-mail'
				            
				            );
				        
				        echo form_submit($data);
				        
				    ?>
				</div>



				<?php
    
				    echo form_close();

				?>
			</div>
		</div>
	</div>
	
</section>
	       
	      
	         
	    </div>
    </div>
	</div>


</div>



</div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">Saint-Gobain</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/bower_components/raphael/raphael.min.js') ?>"></script>

<!-- Sparkline -->
<script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<!-- Slimscroll -->

<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js') ?>"></script>
<!-- AdminLTE App -->


<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/chart.js/Chart.js') ?>"></script>

<script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js') ?>"></script>

<script src="<?php echo base_url('assets/bower_components/morris.js/morris.min.js') ?>"></script>

<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('assets/bower_components/Flot/jquery.flot.js') ?>"></script>


<script src="<?php echo base_url('assets/js/duplicaInput.js')?>"></script>








</body>
</html>