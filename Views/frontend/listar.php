<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    
    Lista de Usuários
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Usuários</a></li>
        <li class="active">lista</li>
      </ol>
    </section>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<?php

    if($this->session->flashdata('errors')){
        echo $this->session->flashdata('errors');
    }

    if($this->session->flashdata('user_registered')){
        echo $this->session->flashdata('user_registered');
    }			

?>

    <section class="content">
        <section class="connectedSortable">
            <!-- quick email widget -->
            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Lista de Usuarios</h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <div class="box-body">
                    <table id="examplelist1" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Nivel</th>
                                <th>Ferramentas</th>
                                

                            </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>                    
                    <div class="box-footer clearfix pull-right">
                        <a href="<?=base_url('usuarios/cadastro_usuarios');?>" class="btn btn-primary">
                           Inserir Usuario&nbsp;<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>


<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#box-body').fadeOut('slow');
        }, 2000);
        $("#examplelist1").dataTable({
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
                info: "Páginas  _PAGE_ de _PAGES_",
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
                url: "/dproject/usuarios/listUsers",
                type: 'GET'
            },
        });  
    });
</script>

