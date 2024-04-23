 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    
      Projects 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Projects</a></li>
        <li class="active">Projects</li>
      </ol>
    </section>




<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="projs" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NAME</th>
                  <th>BUSINESS</th>
                   <th>CONTACT</th>
                   <th >AREA</th>
                   <th>TECNOLOGIES</th>
                   <th>BENEFITS</th>
                    <th>DESCRIPTIONS</th>
                    <th>HOSTING</th>
                     <th>OPERATION DATE</th>
                      <th>USAGE</th>
                      <th>DEVELOPMENT</th>
                      <th>STARTUP</th>
                  
                  <th>SETINGS</th>
             
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($projects as $val) { ?>
                  
              

                <tr>
                  <td><?php echo $val['name_projects']; ?></td>
                   <td><?php echo $val['business_projects']; ?></td>
                    <td><?php echo $val['responsible_projects']; ?></td>
                     <td><?php echo $val['area_projects']; ?></td>
                      <td><?php echo $val['tecnologies_projects']; ?></td>
                       <td><?php echo $val['benefits_projects']; ?></td>
                        <td><?php echo $val['description_projects']; ?></td>
                         <td><?php echo $val['host_projects']; ?></td>
                            <td><?php echo $val['spec_app_projects']; ?></td>
                              <td><?php echo $val['acquisition_type_projects']; ?></td>
                              <?php if($val['startup_projects']!="" && $val['startup_projects']!=null){?>
                              <td><?php echo $val['startup_projects']; ?></td>
                             <?php } else{ ?>
            
                      <td>Without Startup Involvement!</td>
      <?php } ?>
                     <td>

                       <?php  } ?>

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
