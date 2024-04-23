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

			<div class="col-md-12">
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
				        
				    
				    echo form_open('usuarios/register', $atrributes);
				?>
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



<div class="form-group">
                  <label>Tipo</label>
                  <select class="form-control" onChange="pagoOnChange(this)" name="type">

                  
                 


               <option value="S">Colaborador - Usuário</option>
               <option value="N">Colaborador</option>
               

                    
               
                  </select>
                </div>


				<div  class="form-group">
				    <?php
				        echo form_label('Usuário');
				        
				        $data = array(
				            'class' => 'form-control',
				            'name' => 'usuario',
				            'placeholder' => '',
				            'value' => set_value('usuario')
				            
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
				            'value' => set_value('usuario')
				            
				            );
				        
				        echo form_input($data);
				    ?>
				</div>

				<div id="senha" class="form-group">
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

				<div id="senha2" class="form-group">
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
				            'value' => set_value('email')
				            
				            );
				        
				        echo form_input($data);
				    ?>
				</div>



					<div class="form-group">
                  
				    <?php
				        
				        $data = array(
				            'class' => 'btn btn-primary pull-right',
				            'value' => 'Salvar',
				            'id' => 'criar_usuario'
				            
				            );
				        
				        echo form_submit($data);
				        
				    ?>
                   <a class="pull-left btn btn-warning"   href="listar">Voltar</a>
				</div>

</div>
				<div class="col-md-6">
					<div class="form-group">
                  <label>Cargo</label>
                  <select class="form-control" name="cargo">

                  
                 


               <option value="">analista</option>
               <option value="">gerencia</option>
               <option value="">diretoria</option>

                    
               
                  </select>
                </div>


				<div class="form-group">
				    <label for="nivel">Nivel</label>
					    <select class="form-control" id="nivel" name="nivel">
					      <option value="2">Usuário</option>
					      <option value="1">Administrador</option>
					    </select>
				</div>





				</div>

			


				<?php
    
				    echo form_close();

				?>

			</div>
		</div>
	</div>
	
</section>


    <script>
$(document).ready(function() {
   
    $(".chosen-select").chosen();   
    
    $(".changeFilial").change(function(){
        var  selection = $('.filialM').val();
        $.ajax({
            url: "filiais/getFilialByMatriz/"+$(this).val(),
            dataType: "json",
            success: function(result){
                $('.filialM').find('option').remove().end();// remove todos
                $.each(result, function(i, value) {
                    $('.filialM').append("<option value="+value.id_filiais+">"+value.nome_filiais+"</option>");
                });
                $('.filialM').val(selection);  
                $('.filialM').trigger("chosen:updated");
            }   
        });
    });
  });  
    
</script>








<script type="text/javascript">
	var nivel = "<?php echo set_value('nivel') ;?>";

	if(nivel == "1" || nivel == "2"){
		$("#nivel option[value='"+nivel+"']").attr("selected", "selected");
	}
	
</script>