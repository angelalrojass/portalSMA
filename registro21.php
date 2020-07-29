
                               
                                
                          		
                            
                             
                                    
                                        <input  type="text"  id="nombreU1"  >
                                   
                                        <input  type="text"  id="apellido1U1" onKeyUp="habilitar()" >


                <button type="submit" id="btnsend1" d value="btnsend1">hola</button>
                                                                   
                                 
                     
                               
          						

        
        
        <script type="text/javascript">
			
			function habilitar()


{

var a =document.getElementById("nombreU1");

var b =document.getElementById("apellido1U1");

var c =document.getElementById("btnsend1");


if(a.value != b.value)
{


c.disabled=true;

}else 



{
  c.disabled=false;
}


		
        </script>

