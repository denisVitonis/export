	 

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SG | DPROJECTS</title>
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


	 <div class="login-box-body" style="background-image:url('<?php echo base_url('assets/img/back1.jpg'); ?>'); background-position: center;
  background-repeat: no-repeat; background-size: cover; padding-bottom: 500px; height:90%; ">
	<div class="container ">
    
	<div class="login-box-body " style="margin-left:30%; width:40%;">
	<div style="text-align: center; width:100%;">
	<!-- <img src="<?php //echo base_url('assets/img/logosaint.png'); ?>" alt="SG">-->
     <img src="<?php echo base_url('assets/logproject.png'); ?>" alt="SG">
	</div>

	 <div class="row">
	 
	        <div class="col-md-6">

				<h3>Login</h3>

	         
				<div class="form-group">
			
                    <a class="btn btn-warning  btn-flat" href="../sso" role="button">Single Sign On</a>
				</div>

			
				
			<!--	<a href="<?php //echo base_url('home/check_email')?>">Redefinir Senha</a>	-->		
	            
	        </div>	
	      
	         
	    </div>
    </div>
	</div>


</div>



</div>
  <!--<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">Saint-Gobain</a>.</strong> All rights
    reserved.
  </footer>-->

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


<script>


function carrega(id){
    
    var parametros = 'id='+id;
    action = 'ajaxlista';
    $.ajax({
        type: "POST",
        url: action,
        data: parametros,
        beforeSend: function() {
            $('#sel2').empty().append('<option value="0">Aguarde...</option>');
        },        
        success: function(txt) {  
            $('#sel2').empty().append(txt);
        },
        error: function(txt) {
            $('#sel2').empty().append('<option value="0">Erro!</option>');
        }
    });
}


</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#relat').bootstrapValidator();
    });
</script>




<script>

$('.loops').keyup
(function () {
 
  var converter = 60000;

    $('.loops').each(function() {
        converter = Number($(this).val())/converter;
    });

    $('#resultado_loops').val(converter);
     
});

$('.timers_loops').keyup
(function () {
 
  var converter2 = 60000;

    $('.timers_loops').each(function() {
        converter2 = Number($(this).val())/converter2;
    });

    $('#resultado_timers_loops').val(converter2);
     
});
</script>
<script>
$(document).ready(function() {
  // DataTable initialisation
  $('#exam').DataTable(
    {
      "paging": false,
      "autoWidth": true,
      "footerCallback": function ( row, data, start, end, display ) {
        var api = this.api();
        nb_cols = api.columns().nodes().length;
        var j = 3;
        while(j < nb_cols){
          var pageTotal = api
                .column( j, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return Number(a) + Number(b);
                }, 0 );
          // Update footer
          $( api.column( j ).footer() ).html(pageTotal);
          j++;
        } 
      }
    }
  );
});
</script>
<script>
    $(function () {
        $('#simples').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': false,
            'autoWidth': true,
             'responsive': true,
            "language":{
              "sEmptyTable": "Nenhum registro encontrado",
              "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
              "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
              "sInfoFiltered": "(Filtrados de _MAX_ registros)",
              "sInfoPostFix": "",
              "sInfoThousands": ".",
              "sLengthMenu": "_MENU_ resultados por página",
              "sLoadingRecords": "Carregando...",
              "sProcessing": "Processando...",
              "sZeroRecords": "Nenhum registro encontrado",
              "sSearch": "Pesquisar",
              "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior",
                  "sFirst": "Primeiro",
                  "sLast": "Último"
              },
              "oAria": {
                  "sSortAscending": ": Ordenar colunas de forma ascendente",
                  "sSortDescending": ": Ordenar colunas de forma descendente"
              }
            }
})
        $('#inteiro').DataTable({
           //  'processing': true,
            'paging': true,
            'lengthChange': true,
             'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth':true,
             "language":{
              "sEmptyTable": "Nenhum registro encontrado",
              "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
              "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
              "sInfoFiltered": "(Filtrados de _MAX_ registros)",
              "sInfoPostFix": "",
              "sInfoThousands": ".",
              "sLengthMenu": "_MENU_ resultados por página",
              "sLoadingRecords": "Carregando...",
              "sProcessing": "Processando...",
              "sZeroRecords": "Nenhum registro encontrado",
              "sSearch": "Pesquisar",
              "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior",
                  "sFirst": "Primeiro",
                  "sLast": "Último"
              },
              "oAria": {
                  "sSortAscending": ": Ordenar colunas de forma ascendente",
                  "sSortDescending": ": Ordenar colunas de forma descendente"
              }
            },

            "footerCallback": function ( row, data, start, end, display ) {
        var api = this.api();
        nb_cols = api.columns().nodes().length;
        var j = 13;
        while(j < nb_cols){
          var pageTotal = api
                .column( j, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return Number(a) + Number(b);
                }, 0 );
          // Update footer
          $( api.column( j ).footer() ).html(pageTotal);
          j++;
        } 
      }
    
 






        })

         $('#inteiro3').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
           


        })
    })
</script>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#box-body').fadeOut('slow');
        }, 5000);
        $("#example").dataTable({
            processing: true,
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: true,
            responsive: true,
            language: {
                lengthMenu: "Display _MENU_ records per page",
                zeroRecords: "Nothing found  sorry",
                info: "Páginas page _PAGE_ of PAGES",
                infoEmpty: "No recordsavailable",
                infoFiltered: "(filtered from _MAX_ total records)", 
                paginate: {
                    firs: "Primeira",
                    last: "Utima",
                    next: "Proxima",
                    previous: "Anterior"
                },
            },
            ajax: {
                url: "/faturas/sel_faturas2",
                type: 'POST'
            },
        });  
    });
</script>
<script>
$(document).ready(function() {
    $('#test').DataTable( {
       // "processing": true,


 'paging': true,
            'lengthChange': true,
             'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth':true,
             "language":{
              "sEmptyTable": "Nenhum registro encontrado",
              "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
              "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
              "sInfoFiltered": "(Filtrados de _MAX_ registros)",
              "sInfoPostFix": "",
              "sInfoThousands": ".",
              "sLengthMenu": "_MENU_ resultados por página",
              "sLoadingRecords": "Carregando...",
              "sProcessing": "Processando...",
              "sZeroRecords": "Nenhum registro encontrado",
              "sSearch": "Pesquisar",
              "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior",
                  "sFirst": "Primeiro",
                  "sLast": "Último"
              },
              "oAria": {
                  "sSortAscending": ": Ordenar colunas de forma ascendente",
                  "sSortDescending": ": Ordenar colunas de forma descendente"
              }
            },


        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 12 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 12, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 12 ).footer() ).html(
                'R$'+pageTotal +' ( R$'+ Math.round(total) +' total)'
            );
        },


    } );
} );
  </script>


<script>
$(document).ready(function() {
    $('#net').DataTable( {
        "processing": true,


            'paging': true,
            'lengthChange': true,
             'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth':true,
             "language":{
              "sEmptyTable": "Nenhum registro encontrado",
              "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
              "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
              "sInfoFiltered": "(Filtrados de _MAX_ registros)",
              "sInfoPostFix": "",
              "sInfoThousands": ".",
              "sLengthMenu": "_MENU_ resultados por página",
              "sLoadingRecords": "Carregando...",
              "sProcessing": "Processando...",
              "sZeroRecords": "Nenhum registro encontrado",
              "sSearch": "Pesquisar",
              "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior",
                  "sFirst": "Primeiro",
                  "sLast": "Último"
              },
              "oAria": {
                  "sSortAscending": ": Ordenar colunas de forma ascendente",
                  "sSortDescending": ": Ordenar colunas de forma descendente"
              }
            },



    } );
} );
  </script>

<script>  
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    }),
     $('#datepicker2').datepicker({
    dateFormat: 'dd-mm-yy',
    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    nextText: 'Próximo',
    prevText: 'Anterior',
    autoclose: true
    })

    $(".data").datepicker({
    dateFormat: 'dd/mm/yy',
    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    nextText: 'Próximo',
    prevText: 'Anterior'
    })
    
    });
</script>




    <script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#box-body').fadeOut('slow');
        }, 5000);
        $("#aja").dataTable({
            serverSide: true,
            processing: true,
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: true,
            responsive: true,
            language: {
                lengthMenu: "Display _MENU_ records per page",
                zeroRecords: "Nothing found  sorry",
                info: "Páginas page _PAGE_ of PAGES",
                infoEmpty: "No recordsavailable",
                infoFiltered: "(filtered from _MAX_ total records)", 
                paginate: {
                    firs: "Primeira",
                    last: "Utima",
                    next: "Proxima",
                    previous: "Anterior"
                },
            },
            ajax: {
                url: "/faturas/sel_faturas2",
                type: 'GET'
            },
        });  
    });
</script>




<script>
  $(function () {
  
    $('#inteiro4').DataTable({

            "pageLength": 3,
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'responsive': true,
            'info': false,
            'autoWidth': true,
            "order": [[ 4, "desc" ], [ 1, "desc" ] ],

            "language":{
              "sEmptyTable": "Nenhum registro encontrado",
              "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
              "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
              "sInfoFiltered": "(Filtrados de _MAX_ registros)",
              "sInfoPostFix": "",
              "sInfoThousands": ".",
              "sLengthMenu": "_MENU_ resultados por página",
              "sLoadingRecords": "Carregando...",
              "sProcessing": "Processando...",
              "sZeroRecords": "Nenhum registro encontrado",
              "sSearch": "Pesquisar",
              "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior",
                  "sFirst": "Primeiro",
                  "sLast": "Último"
              },
              "oAria": {
                  "sSortAscending": ": Ordenar colunas de forma ascendente",
                  "sSortDescending": ": Ordenar colunas de forma descendente"
              }
            }
    })
  })
</script>




</body>
</html>