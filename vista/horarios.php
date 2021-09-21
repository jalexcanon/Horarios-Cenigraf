<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>beta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

 <select>
	<?php 
   include ("../controlador/conexion.php");
   
   $query="SELECT * FROM ficha";
   $resul=mysqli_query($conn,$query);

   $query2="SELECT * FROM instructor";
   $result=mysqli_query($conn,$query2);

     while ($row=mysqli_fetch_array($resul)) {
   ?>
      <option value="<?php echo $row["ID_F"]?>"><?php echo $row["Nº ficha"]?></option>

    <?php
}
    ?>    </select>
<div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <center>
			<img class="img" src="../img/cenigraf.png" >
			<img class="img2" src="../img/logo1.png" >
	</center>
  </div>
 </div>
 <div>
 	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		  <a class="navbar-brand" onclick="window.open('../index.php','_Self')">Cenigraf</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link">Consultar</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Actualizar</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Eliminar </a>
		      </li>    
		    </ul>
  </div>  
</nav>
 </div>
		
  <div class="container">
 <div class="jumbotron">  <!--bg-dark-->
	<center>
		
		<h2>Formulario horarios</h2>
<p>Primer beta</p>
<table style="width:92% " border="1px solid black"  bgcolor="white" > <!--86-->
  <tr>    <!--fila 1 titulo-->
    <th colspan="10" WIDTH="150" HEIGHT="100" bgcolor="E69138"> <!--<left><img src="img/logotabla.jpg" width="100" height="100"></left>--> 
      <center><br><h10>SERVICIO NACIONAL DE APRENDIZAJE SENA<h10>
             <br><h7>Sistema integrado de gestion<h7>
             <br><h10>HORARIOS ACADEMICOS<h10>
             <br><h7>Proseso de gestion<h7></center> </th>
    <th colspan="4" bgcolor="E69138"><p>fecha</p> <p><input type="date" bgcolor="E69138"></p></th>
  </tr>
    <tr>  <!--fila 2 informacion general-->
    <th colspan="3" WIDTH="8"HEIGHT="8" bgcolor="CBC3BB"> Grupos 
                                         <select style="width:200px">
                                              <option value="value1">instructor1</option>
                                              <option value="value2">instructor2</option>
                                              <option value="value3">instructor3</option>
                                         </select> INTRUCTOR <select>
                                         <?php while ($row2=mysqli_fetch_array($result)) {
                                         ?>
                                   <option value="<?php echo $row2["ID"]?>"><?php echo $row2["Nombre"]?></option>

                                        <?php
                                    }
                                        ?>    </select>
    <th colspan="7" WIDTH="8"HEIGHT="8" bgcolor="CBC3BB"> Taller <input type="textarea"></th>
    <th colspan="4" WIDTH="8"HEIGHT="8" bgcolor="CBC3BB"> <p><h8> Fecha inicio <input type="date"  style="width:150px"><h8></p>
                                         <p><h8> Fecha fin <input type="date" style="width:150px"><h8></p>
    </th>   
  </tr>
  <tr>  <!--fila 3 dias-->
    <td colspan="2" bgcolor="E69138">Horas</td>     
    <td colspan="2" bgcolor="E69138">Lunes</td>
    <td colspan="2" bgcolor="E69138">Martes</td>
    <td colspan="2" bgcolor="E69138">Miercoles</td>
    <td colspan="2" bgcolor="E69138">Jueves</td>
    <td colspan="2" bgcolor="E69138">Viernes</td>
    <td colspan="2" bgcolor="E69138">Sabado</td>
  </tr>
  <!--fila 4-->
  <tr>
    <th colspan="2"> <center> 6:00 - 7:40 </center>
      <td>
          <select style="width:100px">
            <option value="value1">ficha1</option>
            <option value="value2">ficha2</option>
            <option value="value3">ficha3</option>
          </select>
         <br>
           <select>
              <option value="value1">instructor1</option>
              <option value="value2">instructor2</option>
              <option value="value3">instructor3</option>
           </select>
         </br>
      </td>
    </th> 
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> </center>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> 
  </tr>
  <!--fila 5-->
 <tr>
    <th colspan="2" bgcolor="EFD5BA"> <center> 7:40 - 8:00 </center></th>
    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
 </tr>
  <!--fila 6-->
  <tr>
    <th colspan="2"> <center> 8:00 -9:40 </center>
      <td>
          <select style="width:100px">
            <option value="value1">ficha1</option>
            <option value="value2">ficha2</option>
            <option value="value3">ficha3</option>
          </select>
         <br>
           <select>
              <option value="value1">instructor1</option>
              <option value="value2">instructor2</option>
              <option value="value3">instructor3</option>
           </select>
         </br>
      </td>
    </th> 
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> 
  </tr>
  <!--fila 7-->
 <tr>
    <th colspan="2" bgcolor="EFD5BA"> <center> 9:40 - 10:00 </center></th>
    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
 </tr>
  <!--fila 8-->
 <tr>
    <tr>
    <th colspan="2"> <center> 10:00 - 11:40 </center>
      <td>
          <select style="width:100px">
            <option value="value1">ficha1</option>
            <option value="value2">ficha2</option>
            <option value="value3">ficha3</option>
          </select>
         <br>
           <select>
              <option value="value1">instructor1</option>
              <option value="value2">instructor2</option>
              <option value="value3">instructor3</option>
           </select>
         </br>
      </td>
    </th> 
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> 
  </tr>
  <!--fila 9-->
 <tr>
    <th colspan="2" bgcolor="EFD5BA"> <center> 11:40 - 12:00 </center></th>
    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
 </tr>
  <!--fila 10-->
<tr>
    <th colspan="2"> <center> 12:00 - 13:40 </center>
      <td>
          <select style="width:100px">
            <option value="value1">ficha1</option>
            <option value="value2">ficha2</option>
            <option value="value3">ficha3</option>
          </select>
         <br>
           <select>
              <option value="value1">instructor1</option>
              <option value="value2">instructor2</option>
              <option value="value3">instructor3</option>
           </select>
         </br>
      </td>
    </th> 
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> 
  </tr>
  <!--fila 11-->
 <tr>
    <th colspan="2" bgcolor="EFD5BA"> <center> 13:40 - 14:20 </center></th>
    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> ALMUERZO </center></th>
 </tr>
  <!--fila 12-->
<tr>
    <th colspan="2"> <center> 14:20 - 16:00 </center>
      <td>
          <select style="width:100px">
            <option value="value1">ficha1</option>
            <option value="value2">ficha2</option>
            <option value="value3">ficha3</option>
          </select>
         <br>
           <select>
              <option value="value1">instructor1</option>
              <option value="value2">instructor2</option>
              <option value="value3">instructor3</option>
           </select>
         </br>
      </td>
    </th> 
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> 
  </tr>
  <!--fila 13-->
 <tr>
    <th colspan="2" bgcolor="EFD5BA"> <center> 16:00 - 16:20 </center></th>
    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
 </tr>
  <!--fila 14-->
<tr>
    <th colspan="2"> <center> 16:20 - 18:00 </center>
      <td>
          <select style="width:100px">
            <option value="value1">ficha1</option>
            <option value="value2">ficha2</option>
            <option value="value3">ficha3</option>
          </select>
         <br>
           <select>
              <option value="value1">instructor1</option>
              <option value="value2">instructor2</option>
              <option value="value3">instructor3</option>
           </select>
         </br>
      </td>
    </th> 
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> 
  </tr>
  <!--fila 15-->
<tr>
    <th colspan="2"> <center> 18:15 - 19:45 </center>
      <td>
          <select style="width:100px">
            <option value="value1">ficha1</option>
            <option value="value2">ficha2</option>
            <option value="value3">ficha3</option>
          </select>
         <br>
           <select>
              <option value="value1">instructor1</option>
              <option value="value2">instructor2</option>
              <option value="value3">instructor3</option>
           </select>
         </br>
      </td>
    </th> 
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> 
  </tr>
  <!--fila 16-->
 <tr>
    <th colspan="2" bgcolor="EFD5BA"> <center> 19:45 - 20:00 </center></th>
    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
 </tr>
  <!--fila 17-->
<tr>
    <th colspan="2"> <center> 20:00 - 21:40 </center>
      <td>
          <select style="width:100px">
            <option value="value1">ficha1</option>
            <option value="value2">ficha2</option>
            <option value="value3">ficha3</option>
          </select>
         <br>
           <select>
              <option value="value1">instructor1</option>
              <option value="value2">instructor2</option>
              <option value="value3">instructor3</option>
           </select>
         </br>
      </td>
    </th> 
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th>
    <th>
      <td> 
           <select style="width:100px">
              <option value="value1">ficha1</option>
              <option value="value2">ficha2</option>
              <option value="value3">ficha3</option>
           </select>
           <br>
             <select>
                <option value="value1">instructor1</option>
                <option value="value2">instructor2</option>
                <option value="value3">instructor3</option>
             </select>
           </br>
      </td>
    </th> 
  </tr>
</table>
	</center>
</div>
</div> 

</body>
</html>