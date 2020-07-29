$(function() {
	//Carga los documentos
					var btn_seis = document.getElementById('ActaConsBtn'),
	  				    progressBar_seis = document.getElementById('progressBar_seis'),
						progressOuter_seis = document.getElementById('progressOuter_seis'),
					    msgBox_seis = document.getElementById('msgBox_seis');
						
						
		  
					var uploader_seis = new ss.SimpleUpload({
						button: btn_seis,
						url: 'lib/file_upload06.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_seis.style.display = 'block'; 
							this.setProgressBar( progressBar_seis );
						},
						onSubmit: function() {
							msgBox_seis.innerHTML = ''; 
							btn_seis.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_seis.style.display = 'block';
							btn_seis.innerHTML = 'Cargar de nuevo'; 
							progressOuter_seis.style.display = 'none';
				
							if ( !response ) {
								msgBox_seis.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_seis.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_seis.innerHTML = response.msg;
				
								} else {
									msgBox_seis.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_seis.style.display = 'none';
							msgBox_seis.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
				
					//Carga los documentos
					var btn_cinco = document.getElementById('Foto2IntBtn'),
	  				    progressBar_cinco = document.getElementById('progressBar_cinco'),
						progressOuter_cinco = document.getElementById('progressOuter_cinco'),
					    msgBox_cinco = document.getElementById('msgBox_cinco');
						
						
		  
					var uploader_cinco = new ss.SimpleUpload({
						button: btn_cinco,
						url: 'lib/file_upload05.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_cinco.style.display = 'block'; 
							this.setProgressBar( progressBar_cinco );
						},
						onSubmit: function() {
							msgBox_cinco.innerHTML = ''; 
							btn_cinco.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_cinco.style.display = 'block';
							btn_cinco.innerHTML = 'Cargar de nuevo'; 
							progressOuter_cinco.style.display = 'none';
				
							if ( !response ) {
								msgBox_cinco.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_cinco.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_cinco.innerHTML = response.msg;
				
								} else {
									msgBox_cinco.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_cinco.style.display = 'none';
							msgBox_cinco.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
				
					//Carga los documentos
					var btn_cuatro = document.getElementById('Foto1IntBtn'),
	  				    progressBar_cuatro = document.getElementById('progressBar_cuatro'),
						progressOuter_cuatro = document.getElementById('progressOuter_cuatro'),
					    msgBox_cuatro = document.getElementById('msgBox_cuatro');
						
						
		  
					var uploader_cuatro = new ss.SimpleUpload({
						button: btn_cuatro,
						url: 'lib/file_upload04.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_cuatro.style.display = 'block'; 
							this.setProgressBar( progressBar_cuatro );
						},
						onSubmit: function() {
							msgBox_cuatro.innerHTML = ''; 
							btn_cuatro.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_cuatro.style.display = 'block';
							btn_cuatro.innerHTML = 'Cargar de nuevo'; 
							progressOuter_cuatro.style.display = 'none';
				
							if ( !response ) {
								msgBox_cuatro.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_cuatro.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_cuatro.innerHTML = response.msg;
				
								} else {
									msgBox_cuatro.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_cuatro.style.display = 'none';
							msgBox_cuatro.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
				
					//Carga los documentos
					var btn_tres = document.getElementById('Foto2FBtn'),
	  				    progressBar_tres = document.getElementById('progressBar_tres'),
						progressOuter_tres = document.getElementById('progressOuter_tres'),
					    msgBox_tres = document.getElementById('msgBox_tres');
						
						
		  
					var uploader_tres = new ss.SimpleUpload({
						button: btn_tres,
						url: 'lib/file_upload03.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_tres.style.display = 'block'; 
							this.setProgressBar( progressBar_tres );
						},
						onSubmit: function() {
							msgBox_tres.innerHTML = ''; 
							btn_tres.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_tres.style.display = 'block';
							btn_tres.innerHTML = 'Cargar de nuevo'; 
							progressOuter_tres.style.display = 'none';
				
							if ( !response ) {
								msgBox_tres.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_tres.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_tres.innerHTML = response.msg;
				
								} else {
									msgBox_tres.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_tres.style.display = 'none';
							msgBox_tres.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
				
				
					//Carga los documentos
					var btn_dos = document.getElementById('Foto1FBtn'),
	  				    progressBar_dos = document.getElementById('progressBar_dos'),
						progressOuter_dos = document.getElementById('progressOuter_dos'),
					    msgBox_dos = document.getElementById('msgBox_dos');
						
						
		  
					var uploader_dos = new ss.SimpleUpload({
						button: btn_dos,
						url: 'lib/file_upload02.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_dos.style.display = 'block'; 
							this.setProgressBar( progressBar_dos );
						},
						onSubmit: function() {
							msgBox_dos.innerHTML = ''; 
							btn_dos.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_dos.style.display = 'block';
							btn_dos.innerHTML = 'Cargar de nuevo'; 
							progressOuter_dos.style.display = 'none';
				
							if ( !response ) {
								msgBox_dos.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_dos.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_dos.innerHTML = response.msg;
				
								} else {
									msgBox_dos.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_dos.style.display = 'none';
							msgBox_dos.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
				
				
				
				//Carga los documentos
					var btn_uno = document.getElementById('CompDomBtn'),
	  				    progressBar_uno = document.getElementById('progressBar_uno'),
						progressOuter_uno = document.getElementById('progressOuter_uno'),
					    msgBox_uno = document.getElementById('msgBox_uno');
						
						
		  
					var uploader_uno = new ss.SimpleUpload({
						button: btn_uno,
						url: 'lib/file_upload01.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_uno.style.display = 'block'; 
							this.setProgressBar( progressBar_uno );
						},
						onSubmit: function() {
							msgBox_uno.innerHTML = ''; 
							btn_uno.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_uno.style.display = 'block';
							btn_uno.innerHTML = 'Cargar de nuevo'; 
							progressOuter_uno.style.display = 'none';
				
							if ( !response ) {
								msgBox_uno.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_uno.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_uno.innerHTML = response.msg;
				
								} else {
									msgBox_uno.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_uno.style.display = 'none';
							msgBox_uno.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
						
				
				//Carga los documentos
					var btn_cero = document.getElementById('IneBtn'),
	  				    progressBar_cero = document.getElementById('progressBar_cero'),
						progressOuter_cero = document.getElementById('progressOuter_cero'),
					    msgBox_cero = document.getElementById('msgBox_cero');
						
						
		  
					var uploader_cero = new ss.SimpleUpload({
						button: btn_cero,
						url: 'lib/file_upload00.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_cero.style.display = 'block'; 
							this.setProgressBar( progressBar_cero );
						},
						onSubmit: function() {
							msgBox_cero.innerHTML = ''; 
							btn_cero.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_cero.style.display = 'block';
							btn_cero.innerHTML = 'Cargar de nuevo'; 
							progressOuter_cero.style.display = 'none';
				
							if ( !response ) {
								msgBox_cero.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_cero.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_cero.innerHTML = response.msg;
				
								} else {
									msgBox_cero.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_cero.style.display = 'none';
							msgBox_cero.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
});
