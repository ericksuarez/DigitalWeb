<?php echo $this->load->view('common/header_view');?>
    
    <div class="container">

      <div class="row">
      <div class="col-md-12">
    <h1 align="center">Solicita el <strong>complemento Thinkstock</strong> para tu paquete presencia web
            <br>
            <img src="images/puntos.gif" alt="EstrategiasDigitales®">
    </h1>

      <div class="row">
  <div class="col-md-6">
      <div class="panel panel-naranja">
         <div class="panel-body">
            <div class="row">
            <div class="col-md-6">
            <img src="images/logo-thinkstock.jpg" width="260" height="260" alt="Thinkstock logotipo" class="img-responsive" style="text-align:center"/>
            </div>
            <div class="col-md-6">
			<h3><strong>5 imágenes</strong> de <em>stock</em> <br>
				<strong>$870</strong> con IVA incluido</h3>
                </div>
                </div>
            </div>
          </div>
          </div>
    <div class="col-md-6">
						<form action='' method='POST'>
			  <div class="input-group">
				<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
				<input type="name" name='nombre_cl' id='nombre_cl' class="form-control necesario" onblur='desbloquea();' placeholder="Nombre completo">
			  </div><br>

			  <div class="input-group">
				<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
				<input type="email" name='mail_cl' id='mail_cl' class="form-control necesario" placeholder="mail@mail.com" onblur='desbloquea();'>
			  </div><br>

              <div class="input-group">
				<span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
				<input type="number" name='tel_cl' id='tel_cl' class="form-control necesario" placeholder="5555-5555" onblur='desbloquea();'>
              </div><br>

			  <div class="input-group">
				<span class="input-group-addon" id="basic-addon1"><i class="fa fa-keyboard-o"></i></span>
				<textarea cols="5" name='msj_cl' id='msj_cl' class="form-control necesario" placeholder="Escribe aquí tu mensaje" type="text" onblur='desbloquea();'></textarea>
			  </div><br>
			  
              <span class="label label-success">Cuando llenes los campos, el botón de Enviar aparecerá aquí.</span>
			  <input type="submit" name='envia' id='envia' class="btn btn-info pull-right" value='Contratar complemento Thinkstock'>
			</form>

  </div>
    </div><!--/row-->
</div>
        
 <?php $this->load->view('common/footer_view');?>
<script>
	$('#envia').hide();
	
	function desbloquea(){
		if( ( $('#nombre_cl').val().length === 0 ) || ( $('#mail_cl').val().length === 0 ) || ( $('#tel_cl').val().length === 0 )) {
			$('#envia').hide();
		}else{
			$('#envia').show();
		}
	}
	
	$('.necesario').blur(function(){
		if( $(this).val().length === 0 ) {
           $(this).css('border','1px solid red');
           $(this).attr('placeholder','campo obligatorio');
		}else{
			$(this).css('border','1px solid black');
		}
	});
	
</script>
