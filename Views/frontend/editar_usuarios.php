
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    
      Cadastro de Usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Usuários</a></li>
        <li class="active">Cadastro</li>
      </ol>
    </section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">


<script>
function pagoOnChange(sel) {
      if (sel.value=="S"){
           divC = document.getElementById("pass");
           divC.style.display = "block";

           divT = document.getElementById("passconfirm");
           divT.style.display = "block";


           divS = document.getElementById("senha");
           divS.style.display = "block";

           divS2 = document.getElementById("senha2");
           divS2.style.display = "block";

      }else{

           divC = document.getElementById("pass");
           divC.style.display="none";

           divT = document.getElementById("passconfirm");
           divT.style.display = "none";

           
           divS = document.getElementById("senha");
           divS.style.display = "none";

           divS2 = document.getElementById("senha2");
           divS2.style.display = "none";
      }
}

</script>









				<?php			    

				    if($this->session->flashdata('errors')){
				        echo $this->session->flashdata('errors');
				    }

				    if($this->session->flashdata('user_registered')){
				        echo $this->session->flashdata('user_registered');
				    }				    

				    $atrributes = array(
				        "id" => "login_form",
				        "class" => "form_horizontal"
				        );
				        
				    
				    echo form_open('usuarios/alterar', $atrributes);
				?>


			 <?php foreach ($perfil as $per) { //var_dump($array_matriz); die(); ?>

<div class="form-group">
                  <label>Tipo</label>
                  <select class="form-control" onChange="pagoOnChange(this)" name="type">

                
               <option value="S"<?php if($per['type']=="S") echo 'selected="selected"'; ?> >Colaborador - Usuário</option>
               <option value="N" <?php if($per['type']=="N") echo 'selected="selected"'; ?>>Colaborador</option>

                  </select>
 </div>





				<div class="form-group">
				    <?php
				        echo form_label('Usuário');
				        
				        $data = array(
				            'class' => 'form-control',
				            'name' => 'usuario',
				            'placeholder' => '',
				            'value' => $per['usuario']
				            
				            );
				        
				        echo form_input($data);
				    ?>
				</div>
                
                <div class="form-group">
				    <?php
				        echo form_label('SGID');
				        
				        $data = array(
				            'class' => 'form-control',
				            'name' => 'sgid',
				            'placeholder' => '',
				            'value' => $per['sgid']
				            
				            );
				        
				        echo form_input($data);
				    ?>
				</div>

				<div id="senha"class="form-group" <?php if($per['type']=="N"){ echo 'style="display: none;"';} ?> >
				    <?php
				        echo form_label('Senha');
				        
				        $data = array(
				            'class' => 'form-control',
				            'name' => 'senha',
				            'id'=>'pass',
				            'placeholder' => ''
				            
				            );
				        
				        echo form_password($data);
				        
				    ?>
				</div>

				<div id="senha2" class="form-group" <?php if($per['type']=="N"){ echo 'style="display: none;"';} ?>>
				    <?php
				        echo form_label('Confirmação da senha');
				        
				        $data = array(
				            'class' => 'form-control',
				            'name' => 'confirmar_senha',
				            'id'=>'passconfirm',
				            'placeholder' => ''
				            
				            );
				        
				        echo form_password($data);
				        
				    ?>
				</div>

				<div class="form-group">
				    <?php
				        echo form_label('E-mail');
				        
				        $data = array(
				            'class' => 'form-control',
				            'name' => 'email',
				            'placeholder' => '',
				            'value' =>  $per['email']
				            
				            );
				        
				        echo form_input($data);
				    ?>
				</div>

				<div class="form-group">
				    <label for="nivel">Nivel</label>
					    <select class="form-control" id="nivel" name="nivel">
					      <option value="2" <?php if($per['nivel']==2) echo 'selected="selected"'; ?> >Usuário</option>
					      <option value="1" <?php if($per['nivel']==1) echo 'selected="selected"'; ?>>Administrador</option>
					    </select>
				</div>

</div>

  
<div class="col-md-6">




  <?php  } ?>
</div>


				<div class="form-group">
				    <?php
				        
				        $data = array(
				            'class' => 'btn btn-primary pull-right',
				            'value' => 'Salvar',
				            'id' => ''
				            
				            );
				        
				        echo form_submit($data);
				        
				    ?>
                   
				</div>


                <input type='hidden' name='id' value="<?php echo $per['id']; ?>">
				<?php
    
				    echo form_close();

				?>







<div class="form-group">

			 <a class="pull-left btn btn-warning"   href="<?php echo base_url('usuarios/listar') ?>">Voltar</a>

</div>




		</div>
	</div>


	
</section>

<script type="text/javascript">
	var nivel = "<?php echo set_value('nivel') ;?>";

	if(nivel == "1" || nivel == "0"){
		$("#nivel option[value='"+nivel+"']").attr("selected", "selected");
	}
	
</script>