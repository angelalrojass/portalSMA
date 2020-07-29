<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Licencia</title>

</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  
  <table width="810" border="1">
  </table>
  
  <table width="810" border="1">
    <tr valign="top">
      <td width="552" height="24" class="letra9"><p>NOMBRE DEL TITULAR O APODERADO LEGAL EN CASO DE SER PERSONA JURIDICA COLECTIVA<br />
        <input type="text" name="nomtit" value="" size="50" />
      </p></td>
      <td width="242" class="letra9">RFC<br />
      <input type="text" name="rfc" value="" size="15" /></td>
    </tr>
  </table>

 
?>

 <script type="text/javascript">
			
			$('#codigoPostal').focusout(function(n) {
				
				var consulta;
													 
				 	//obtenemos el texto introducido en el campo
				 	consulta = $("#codigoPostal").val();
										  
				 	//hace la búsqueda
											   
					$.ajax({
						  type: "POST",
						  url: "lib/codigos-postales.php",
						  data: "CodPostal="+consulta,
						  dataType: "html",
						  
						  error: function(){
								alert("error petición ajax");
						  },
						  success: function(data){   
						  
						  		$('#contColonia').html(data);

						  }
					  });
				});
				
				$('#idEstado').change(function(n) {
				
				var consulta;
													 
				 	//obtenemos el texto introducido en el campo
				 	consulta = $("#idEstado").val();
										  
				 	//hace la búsqueda
											   
					$.ajax({
						  type: "POST",
						  url: "municipios1.php",
						  data: "idEstado="+consulta,
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