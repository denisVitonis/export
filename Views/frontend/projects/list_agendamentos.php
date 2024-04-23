 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    
      Agendamentos 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Agendamentos</a></li>
        <li class="active">Agendamentos</li>
      </ol>
    </section>




<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="projs" class="table table-bordered table-hover">
                <thead>
                <tr>
                <tr>
                  <th>tabela</th>
                  <th>horarios</th>
                   <th>envolvidos</th>
                   <th>acao</th>
                   <th>registro</th>
                   <th>realizacao</th>
                    <th>agendamento_un</th>
        
                </tr>
             
                </tr>
                </thead>
                <tbody>
         

                <?php foreach ($agendamentos as $agendamento) : ?>
                <tr>
                    <td><?= $agendamento->getId(); ?></td>
                    <td><?= $agendamento->getHorario()->format('Y-m-d H:i:s'); ?></td>
                    <td><?= $agendamento->getEnvolvidos(); ?></td>
                    <td><?= $agendamento->getAcao(); ?></td>
                    <td><?= $agendamento->getRegistro(); ?></td>
                    <td><?= $agendamento->getRealizacao(); ?></td>
                    <td><?= $agendamento->getAgendamentoUnd(); ?></td>
                </tr>
            <?php endforeach; ?>


                </tbody>
         
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

       
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
