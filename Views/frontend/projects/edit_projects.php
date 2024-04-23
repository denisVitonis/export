

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
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Projects</h3>
            </div>

            <h1>
     
      </h1>
              <?php 


               foreach ($projects as $proj) { 

                $my_areas=explode(',',$proj['area_projects']);
                $my_tec=explode(',',$proj['tecnologies_projects']);
                 $my_host=explode(',',$proj['host_projects']);
                  $my_bene=explode(',',$proj['benefits_projects']);

                ?>
           
               <form role="form" action="<?php echo base_url('projects/editar'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="sgid" value="<?php echo $_SESSION['sgid']; ?>">
                 <input type="hidden" name="id_projects" value="<?php echo $proj['id_projects']; ?>">
              <div class="box-body">
                 <div class="col-md-6">
                 <div class="form-group">
                  <label>Name Project</label>
                  <input type="text" class="form-control" name="name_projects" value="<?php echo $proj['name_projects']; ?>" >
              
                </div>
                  <div class="form-group">
                  <label>Responsible</label>
                  <input type="text" class="form-control" name="responsible" value="<?php echo $proj['responsible_projects']; ?>">
              
                </div>
                 <div class="form-group">
                  <label>Business</label>
                  <input type="text" class="form-control" name="business" value="<?php echo $proj['business_projects']; ?>">
              
                </div>
             <div class="form-group">
                  <label>Description</label>
                    
                  <textarea name="description" class="form-control" rows="3" placeholder="Enter a description..."><?php echo $proj['description_projects']; ?></textarea>
              
                </div>
                <label>Operation Date</label>
                <div class="input-group date">
                  <div class="input-group-addon"> 
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right"  name="operate_date" id="d1" value="<?php echo $proj['operate_date_projects']; ?>">
                </div>

   




                </div>
<br><br><br>

                     <div class="col-md-6"> 

 
                <label>Select Areas</label>
<div class="form-group">
  
  <select id="first-disabled2" class="selectpicker" name="area[]" multiple data-hide-disabled="true" data-size="5">
                        <?php foreach($areas as $ar) { ?>

                          <option value="<?php echo $ar['name_area'] ?>"  

                          <?php foreach($my_areas as $mareas){ 

                            if($ar['name_area']==$mareas) {echo "selected";} } ?>>
                            <?php echo $ar['name_area'] ?>
                              
                            </option>
                         
                          <?php } ?>
  </select>
   <button class="btn bg-yellow text-white btn-add my-2" type="button" id="areaatuacao"><i class="fa fa-plus-square px-2"></i>Add new area</button>
                   
 
    </div>

             <label>Select Benefits</label>
<div class="form-group">
  
  <select id="first-disabled3" class="selectpicker" name="benefits[]" multiple data-hide-disabled="true" data-size="5">


                                <?php foreach($benefits as $ben) { ?>

                          <option value="<?php echo $ben['name_benefits'] ?>"  

                          <?php foreach($my_bene as $bene){ 

                            if($ben['name_benefits']==$bene) {echo "selected";} } ?>>
                            <?php echo $ben['name_benefits'] ?>
                              
                            </option>
                         
                          <?php } ?>
  </select>
   <button class="btn bg-yellow text-white btn-add my-2" type="button" id="addbenefits"><i class="fa fa-plus-square px-2"></i>Add new Benefits</button>
                   
 
    </div>

 <label>Select Tecnologies</label>
<div class="form-group">
  
  <select id="first-disabled4" class="selectpicker" name="tecnologies[]" multiple data-hide-disabled="true" data-size="5">
   <?php foreach($tecnologies as $tec) { ?>

                          <option value="<?php echo $tec['name_tecnologies'] ?>"  

                          <?php foreach($my_tec as $tecno){ 

                            if($tec['name_tecnologies']==$tecno) {echo "selected";} } ?>>
                            <?php echo $tec['name_tecnologies'] ?>
                              
                            </option>
                         
                          <?php } ?>
  </select>
   <button class="btn bg-yellow text-white btn-add my-2" type="button" id="addtecnologies"><i class="fa fa-plus-square px-2"></i>Add new tecnologies</button>
                   
 
    </div>
<label>Select Hostings</label>
<div class="form-group">
  
  <select id="first-disabled5" class="selectpicker" name="host[]" multiple data-hide-disabled="true" data-size="5">
   <?php foreach($host as $ho) { ?>
                   <option value="<?php echo $ho['name_host'] ?>"  
                          <?php foreach($my_host as $h){ 

                            if($ho['name_host']==$h) {echo "selected";} } ?>>
                            <?php echo $ho['name_host'] ?>
                              
                            </option>
                         
                          <?php } ?>
  </select>
   <button class="btn bg-yellow text-white btn-add my-2" type="button" id="addhost"><i class="fa fa-plus-square px-2"></i>Add new host</button>
                   
 
    </div>



                     </div>
                 <div class="col-md-12">  
      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Do you consider it an especific application for your business or it can be replicated to others?</label>
<div class="form-group">
  
  <select class="form-control" name="spec" >

                          <option value="Replicable" <?php if($proj['acquisition_type_projects']=="Replicable") {echo "selected";} ?>>Replicable</option>
                           <option value="Specific" <?php if($proj['acquisition_type_projects']=="Specific") {echo "selected";} ?>>Specific</option>
                         
                        
  </select>
 
                   
 
    </div>
 </div>


  <div class="col-md-12">  
  <div class="form-group">
   <label class="control-label" > <input type="checkbox" name="check"  <?php if($proj['startup_projects']!="" or $proj['startup_projects']!=null)
    {echo "checked";} ?> id="check" value="true" /> Startup Involvement?</label>
    <div class="form-group" id="lab" style="display:none;">
<label class="control-label"  for="inputSuccess" style="color:red;"><i class="fa fa-check"></i>Type startup name!</label>
<input type="optional" name="startup" id="startup" value="<?php echo $proj['startup_projects']; ?>"style="display:none;"/>
</div>
</div>
</div>

  <div class="col-md-12">  
      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Is it a development or software acquistion?</label>
<div class="form-group">
  
  <select class="form-control" name="acquisition_type_projects" >

                          <option value="Development"  <?php if($proj['acquisition_type_projects']=="Development") {echo "selected";} ?> >Development</option>
                           <option value="Acquisition"  <?php if($proj['acquisition_type_projects']=="Acquisition") {echo "selected";} ?>>Acquisition</option>
                           <option value="Both"  <?php if($proj['acquisition_type_projects']=="Both") {echo "selected";} ?>>Both</option>
                         
                        
  </select>
 
                   
 
    </div>
 </div>

<?php } ?>
            
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>


          </div>


      </div>
            </div>

    </section>


