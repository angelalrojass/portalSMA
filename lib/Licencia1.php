<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Licencia</title>

</head>

<body>

  
  <table width="810" border="1">
  </table>
  <form id="formaRegistro">
  				
                                   <div class="form-group col-sm-4">
                                        <label for="idEstado">Nombre(s) <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="idEstado" type="text" class="form-control" id="idEstado" data-msg-required="Ingresa Nombre" required>
                                    </div>
                                    

                                  




                                    <div class="form-group col-sm-4" id="ContMunicipio">
                                        <label for="idMunicipio">Municipio <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idMunicipio" id="idMunicipio" class="form-control" required>
                                            <option value="0"> ----- Seleccionar ----- </option>
                                                <option value="1"></option>
                                                
										</select>
									</div>


									<form id="formulario" method="Post">

<input type="text" id="texto"/>
<input type="button" name="enviar" value="Enviar" onclick="recibir();"/><br>
<div id="txt"></div>
</form>
                                    
                             </form>
  

 <script type="text/javascript">
			
			
				
				$('#idEstado').change(function(n) {
				
				var consulta;
													 
				 	//obtenemos el texto introducido en el campo
				 	consulta = $("#idEstado").val();
										  
				 	//hace la búsqueda
											   
					$.ajax({
						  type: "POST",
						  url: "municipios2.php",
						  data: "idMunicipio"+consulta,
						  dataType: "html",
						  
						  error: function(){
								alert("error petición ajax");
						  },
						  success: function(data){   
						  
						  		$('#ContMunicipio').html(data);

						  }
					  });
				});


	

        </script>
 
