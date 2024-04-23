

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
<script src="<?php //echo base_url('assets/js/duplicaInput.js')?>"></script>
<!-- jQuery 3 -->
<script src="<?php //echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php //echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
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
<!--//<script src="<?php// echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>-->

<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<!-- Slimscroll -->

<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js') ?>"></script>
<!-- AdminLTE App -->


<!-- FastClick -->
<script src="<?php //echo base_url('assets/bower_components/chart.js/Chart.js') ?>"></script>

<script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php //echo base_url('assets/dist/js/demo.js') ?>"></script>

<script src="<?php // echo base_url('assets/bower_components/morris.js/morris.min.js') ?>"></script>

<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>

<script src="<?php // echo base_url('assets/bower_components/Flot/jquery.flot.js') ?>"></script>


<script src="<?php //echo base_url('assets/bower_components/select2/dist/js/select2.full.min.js')?>"></script>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="<?php //echo base_url('assets/plugins/bootstrap_multselect/js/bootstrap-select.js')?>"></script> 
<script>

    $('#projs').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false,
             'responsive':true,

           //'scrollY':        "300px",
        'scrollX':        true,
        'scrollCollapse': true,
        "columnDefs": [
    { "width": "20", "targets":3 }
  ],
  fixedColumns: true
    });

</script>

<script>
  $(function () {
    $('#dp1').DataTable()
    $('#dp').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
        "columnDefs": [
    { "width": "3em", "targets": 1 }
  ]
    })
  })
</script>


<script>
    $(function () {
    //Date picker
    $('#operatedate2').datepicker({
      autoclose: true
    })
      })
</script>


<script>  
  $(function () {
    //Date picker
     $.fn.datepicker.defaults.format = "yyyy-mm-dd";
     
     $.fn.datepicker.dates['pt-BR']; 


     $('#d1').datepicker({
    dateFormat: 'dd-mm-yy',
    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    nextText: 'Próximo',
    prevText: 'Anterior',
    autoclose: true
    }),

    $('#d2').datepicker({
    dateFormat: 'dd-mm-yy',
    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    nextText: 'Próximo',
    prevText: 'Anterior',
    autoclose: true
    }),

    $('#d3').datepicker({
    dateFormat: 'dd-mm-yy',
    autoclose: true
    })
    
    });
</script>

<script>
$(document).ready(function() {

  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  $(window).scroll(function() {
    $('.scroll-animations .animated').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass(this.id);
      }
    });
  });
});
    
    $("#imgInp").change(function(){

        readURL(this);
        $('#target').show();
    });

$('#areaatuacao').click(function(){

  swal({
  title: "",
  text: "Insert a area name",
  type: "input",
   showCancelButton: true,
  closeOnConfirm: false
   
}, function (inputValue) {
  if (!inputValue) return; 
    $.ajax({
          url: "<?php echo base_url('areas/add_areas')?>",
          data: {valida_area: inputValue},
          type: "POST",
          Datatype:"html",
          success: function(data) {
            
              swal({
                    title: "Success!",
                    text: "Area was created on the menu successfully!",
                    type: "success",
                    button: "OK!",
                  }, function () {
                     $('#first-disabled2').html(data);
                     //$('#first-disabled2').multiselect('rebuild');
                     $('#first-disabled2').selectpicker('refresh');
                  });
              
        
        },

        });
  
 
});

});

$('#addbenefits').click(function(){

  swal({
  title: "",
  text: "Insert a benefits name",
  type: "input",
   showCancelButton: true,
  closeOnConfirm: false
   
}, function (inputValue) {
  if (!inputValue) return; 
    $.ajax({
          url: "<?php echo base_url('benefits/add_benefits')?>",
          data: {valida_benefits: inputValue, slug_area: inputValue},
          type: "POST",
          Datatype:"html",
          success: function(data) {
            
              swal({
                    title: "Success!",
                    text: "Benefits was created on the menu successfully!",
                    type: "success",
                    button: "OK!",
                  }, function () {
                     $('#first-disabled3').html(data);
          //$('#first-disabled3').multiselect('rebuild');
          $('#first-disabled3').selectpicker('refresh');
                  });
              
        
        },

        });
  
 
});

});

$('#addtecnologies').click(function(){

  swal({
  title: "",
  text: "Insert a tecnologies name",
  type: "input",
   showCancelButton: true,
  closeOnConfirm: false
   
}, function (inputValue) {
  if (!inputValue) return; 
    $.ajax({
          url: "<?php echo base_url('tecnologies/add_tecnologies')?>",
          data: {valida_tecnologies: inputValue, slug_area: inputValue},
          type: "POST",
          Datatype:"html",
          success: function(data) {
            
              swal({
                    title: "Success!",
                    text: "tecnologies was created on the menu successfully!",
                    type: "success",
                    button: "OK!",
                  }, function () {
                     $('#first-disabled4').html(data);
         // $('#first-disabled4').multiselect('rebuild');

         $('#first-disabled4').selectpicker('refresh');
                  });
              
        
        },

        });
  
 
});

});

$('#addhost').click(function(){

  swal({
  title: "",
  text: "Insert a host name",
  type: "input",
   showCancelButton: true,
  closeOnConfirm: false
   
}, function (inputValue) {
  if (!inputValue) return; 
    $.ajax({
          url: "<?php echo base_url('host/add_host')?>",
          data: {valida_host: inputValue, slug_area: inputValue},
          type: "POST",
          Datatype:"html",
          success: function(data) {
            
              swal({
                    title: "Success!",
                    text: "Host was created on the menu successfully!",
                    type: "success",
                    button: "OK!",
                  }, function () {
                     $('#first-disabled5').html(data);
                    // $('#first-disabled5').multiselect('rebuild');
                    $('#first-disabled5').selectpicker('refresh');
                  });
              
        
        },

        });
  
 
});

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

  var nw = $(window).width();
  if(nw <= 520){
   
    
    $("#selectCampos").addClass("col-12");
    $("#selectCampos").removeClass("col-6");
    
    $("#boxRight").addClass("col-12");
    $("#boxRight").removeClass("col-8");
    
    $("#boxLeft").addClass("col-12");
    $("#boxLeft").removeClass("col-4");

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

        $('#simples2').DataTable({
            'paging': false,
            'lengthChange': true,
            'searching': false,
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
            'paging': false,
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


<script>
$(document).ready(function() {
   
 /*   $("#formulario").submit(function( event ) {
        if($('#MyPass').val() != $('#repeatMypass').val()  ||  $('#result').attr('class') !='strong'){
            alert('Senha Invalida, corrija antes de enviar ');
            return false;
        }
    });*/
    
    $('#MyPass').keyup(function() {
    $('#result').html(checkStrength($('#MyPass').val()))
    })
    
    
    function checkStrength(password) {
        var strength = 0
        
        if(password.length==0){
            $('#result').removeClass();
            return '';
        }
        if (password.length <8) {
        $('#result').removeClass()
        $('#result').addClass('short');
        return 'Senha curta!';
        }
        
        if (password.length >= 8) strength += 1
        if (password.match(/([a-z])/)) strength += 1
        if (password.match(/([A-Z])/)) strength += 1
        if (password.match(/([0-1])/)) strength += 1
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
  
        if(strength==5){
             $('#result').removeClass();
             $('#result').addClass('strong');
             return 'Senha Forte!';
               
        }else{
             $('#result').removeClass();
             $('#result').addClass('weak');
             return 'Senha Fraca!';
        }
        
    }
    
  });  
    
</script>
















</body>
</html>