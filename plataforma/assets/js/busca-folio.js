// JavaScript Document
(function () {
	'use strict';
	
//Buscardor de Giros Comerciales
	$('#buscGiros').autocomplete({
		source:'lib/giros_comerciales.php', 
		minLength:3,
		select: function(event,ui){	var code = ui.item.id;
			if(code != '') {
				//location.href = '/index.php?id_categoria=' + code;
				 $("#requisitos").load('ib/class_requisitos.php?idr='+code);
			}
		},
				// optional
		html: true, 
		// optional (if other layers overlap the autocomplete list)
		open: function(event, ui) {
			$(".ui-autocomplete").css("z-index", 1000);
		}
	});


	
});