<?php	

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario))
{

	header("location: login2.php?cod=1");
	
}

?>	
<?php	


$env = $_REQUEST['env'];
 

switch ($env)
			
{
		
			
	case "1":
		 echo '<p class="alert alert-success agileits" role="alert">Mensaje enviado correctamente!, será contactado a la brevedad.';
	break;
		
	case "2":
		 echo '<p class="alert alert-success agileits" role="alert">Error al enviar mensaje, favor intente nuevamente.';
	break;
		
	
}

?>	

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>INVERSIONES Y NEGOCIOS HUCS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body> <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">GM Importaciones & Transportes</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.html"></a></li>
                <li class="has-children">
                  <a href="services.html"></a>
                  <ul class="dropdown">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </li>
                <li><a href="industries.html"></a></li>
                <li><a href="blog.html"></a></li>
                <li><a href="contact.html"></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      
      
    </header>
</div>
  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Sistema Control de Vehículos</h1>
          <!--	   <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>-->

          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <!--  <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
          	 <h2 class="my-4 heading">24/7 Support</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p>
          </div>-->
        </div>
        <div class="col-md-4">
		
		 <?php

$servername = "localhost";
$database = "zbmhgelv_cfcodehu_hucs";
$username = "zbmhgelv_cfcodehu_hucs1";
$password = "!23Qweasd";
// Create connection
//$conn = mysqli($servername, $username, $password, $database);
$conn = new mysqli($servername, $username, $password, $database);            
// if($conn->connect_error)
// {
                
	// die("Conexión fallida: " . $conn->connect_error);
            
// }

//$mysqli = new mysqli('localhost', 'root', 'root', 'php_llenarselect');
?>

	<div class="free-quote bg-dark h-100">
    <h2 class="my-4 heading  text-center">Seleccione</h2>
           

	<form action="guardaInventario1.php" method="post" enctype="multipart/form-data">	    
		 
		 <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Consignatario</label>
            <select id="consigna" name ="consigna" class="form-group" >
              <option value="0">Seleccione Consignatario:</option>
              <?php
			  
				$query = $conn -> query ("SELECT cod_consig, consignatario FROM CONSIGNATARIOS");
				while ($valores = mysqli_fetch_array($query)) {
				echo '<option value="'.$valores[cod_consig].'">'.$valores[consignatario].'</option>';
			}
        ?>
            </select>
          </div>
		   <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">DESTINO1</label>
            <select id="ida" name ="ida" class="form-group" >
              <option value="0">Seleccione Ida:</option>
              <?php
			  
			  
			  
          $query = $conn -> query ("SELECT cod_destino1, destino1 FROM DESTINOS1");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[cod_destino1].'">'.$valores[destino1].'</option>';
          }
        ?>
            </select>
          </div>
		   <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">DESTINO2</label>
            <select id="vuelta" name ="vuelta" class="form-group" >
              <option value="0">Seleccione Vuelta:</option>
              <?php
			  
			  
			  
          $query = $conn -> query ("SELECT cod_destino2, destino2 FROM DESTINOS2");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[cod_destino2].'">'.$valores[destino2].'</option>';
          }
        ?>
            </select>
          </div>
		   <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Placa Camión:</label>
            <select id="placa" name ="placa" class="form-group" >
              <option value="0">Seleccione Placa:</option>
              <?php
			  
			  
			  
          $query = $conn -> query ("SELECT cod_camion, placa_camion FROM CAMIONES");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[cod_camion].'">'.$valores[placa_camion].'</option>';
          }
        ?>
            </select>
          </div>
		  		   <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Conductor</label>
            <select id="conductores" name ="conductores" class="form-group" >
              <option value="0">Seleccione Conductor:</option>
              <?php
			  
			  
			  
          $query = $conn -> query ("SELECT cod_conduct, nombre FROM CONDUCTORES");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[cod_conduct].'">'.$valores[nombre].'</option>';
          }
        ?>
            </select>
          </div>

		<div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Tipo Vehículo</label>
            <select id="tipo_vehiculo" name ="tipo_vehiculo" class="form-group" >
              <option value="0">Seleccione Tipo Vehículo:</option>
              <?php
			  
			  
			  
          $query = $conn -> query ("SELECT cod_tipov, tipo FROM TIPO_VEHICULOS");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option text="'.$valores[tipo].'" value="'.$valores[cod_tipov].'">'.$valores[tipo].'</option>';
          }
        ?>
            </select>
          </div>
		  
		    <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Marcas</label>
            <select name ="cod_marca"id="cod_marca" class="form-group" >
              <option value="0">Seleccione Marca:</option>
              <?php
			  
			  
			  
          $query = $conn -> query ("SELECT cod_marca, marca FROM MARCAS");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[cod_marca].'">'.$valores[marca].'</option>';
          }
        ?>
            </select>
          </div>
		  
		    <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Modelo</label>
            <select id="cod_modelo" name ="cod_modelo" class="form-group">
              <option value="0">Seleccione Modelo:</option>
             
            </select>
          </div>
		  
		      <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Chasis</label>
            <select id="cod_chasis" name ="cod_chasis" class="form-group" >
              <option value="0">Seleccione N° Chasis:</option>
             
            </select>
          </div>
		  
		      <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Color</label>
            <select id="color" name ="color" class="form-group" >
              <option value="0">Seleccione Color:</option>
              <?php
			  
			  
			  
          $query = $conn -> query ("SELECT cod_color, color FROM COLORES");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[cod_color].'">'.$valores[color].'</option>';
          }
        ?>
            </select>
			</div>
			
			<div class="form-group mx-sm-3 mb-2">
							<input type="hidden" id="usuario" value="<?php echo $usuario;?>"  name="usuario">

		  	<input align = "center" type="file" name="foto" id="foto" class="form-group" src="images/5563.jpg" accept="images/5563.jpg" capture="camera" />
								<label for="foto">
								<figure>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
								</svg>
								</figure> 
								<span>Capturar imagen...</span></label>
		 
			
			
			   <button name="submit" class="btn btn-primary">Siguiente...</button>
			  </div>  
			   
          
		  </form> 
			
		  <!-- <div class="row">-->

		  
          		  
		  </div>
        </div>
        <div class="col-md-4">
          <!--  <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
          	 <h2 class="my-4 heading">24/7 Support</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p>
          </div>-->
        </div>
      </div>
    </div>

 
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
<script src="js/jquery-1.10.2.min.js"></script>

<script>
    
    $(document).ready(function(){
    
        var modelo = $('#cod_modelo');
       
        $('#cod_marca').change(function(){
          var cod_marca = $(this).val();        

            $.ajax({
              data: {cod_marca:cod_marca}, 
              dataType: 'html', 
              type: 'POST', 
              url: 'get_modelo.php', 

              }).done(function(data){   
                modelo.html(data);       
              });      
            
        });

    });
</script>

<script>
    
    $(document).ready(function(){
    
        var chasis = $('#cod_chasis');
       
        $('#cod_modelo').change(function(){
          var cod_modelo = $(this).val();        

            $.ajax({
              data: {cod_modelo:cod_modelo}, 
              dataType: 'html', 
              type: 'POST', 
              url: 'get_chasis.php', 

              }).done(function(data){   
                chasis.html(data);       
              });      
            
        });

    });
</script>

<script>
	$(function(){
		$(".DanosVisibles").click(function(event) {
			var x = $(this).is(':checked');
			if (x == true) {
				$(this).parents(".checks").find('.select').show();
			
			}
			else{
				$(this).parents(".checks").find('.select').hide();
	
			}
		});
	})
</script>	
						
  </body>
</html>