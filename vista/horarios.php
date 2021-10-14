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

	<?php 
   include ("../controlador/conexion.php");
   
 
$query="SELECT * FROM ficha";
$resul=mysqli_query($conn,$query);
$query2="SELECT * FROM ficha";
$result2=mysqli_query($conn,$query2);
$query3="SELECT * FROM ficha";
$result3=mysqli_query($conn,$query3);
$query4="SELECT * FROM ficha";
$result4=mysqli_query($conn,$query4);
$query5="SELECT * FROM ficha";
$result5=mysqli_query($conn,$query5);
$query6="SELECT * FROM ficha";
$result6=mysqli_query($conn,$query6);
$query7="SELECT * FROM ficha";
$result7=mysqli_query($conn,$query7);
$query8="SELECT * FROM ficha";
$result8=mysqli_query($conn,$query8);
$query9="SELECT * FROM ficha";
$result9=mysqli_query($conn,$query9);
$query10="SELECT * FROM ficha";
$result10=mysqli_query($conn,$query10);
$query11="SELECT * FROM ficha";
$result11=mysqli_query($conn,$query11);
$query12="SELECT * FROM ficha";
$result12=mysqli_query($conn,$query12);
$query13="SELECT * FROM ficha";
$result13=mysqli_query($conn,$query13);
$query14="SELECT * FROM ficha";
$result14=mysqli_query($conn,$query14);
$query15="SELECT * FROM ficha";
$result15=mysqli_query($conn,$query15);
$query16="SELECT * FROM ficha";
$result16=mysqli_query($conn,$query16);
$query17="SELECT * FROM ficha";
$result17=mysqli_query($conn,$query17);
$query18="SELECT * FROM ficha";
$result18=mysqli_query($conn,$query18);
$query19="SELECT * FROM ficha";
$result19=mysqli_query($conn,$query19);
$query20="SELECT * FROM ficha";
$result20=mysqli_query($conn,$query20);
$query21="SELECT * FROM ficha";
$result21=mysqli_query($conn,$query21);
$query22="SELECT * FROM ficha";
$result22=mysqli_query($conn,$query22);
$query23="SELECT * FROM ficha";
$result23=mysqli_query($conn,$query23);
$query24="SELECT * FROM ficha";
$result24=mysqli_query($conn,$query24);
$query25="SELECT * FROM ficha";
$result25=mysqli_query($conn,$query25);
$query26="SELECT * FROM ficha";
$result26=mysqli_query($conn,$query26);
$query27="SELECT * FROM ficha";
$result27=mysqli_query($conn,$query27);
$query28="SELECT * FROM ficha";
$result28=mysqli_query($conn,$query28);
$query29="SELECT * FROM ficha";
$result29=mysqli_query($conn,$query29);
$query30="SELECT * FROM ficha";
$result30=mysqli_query($conn,$query30);
$query31="SELECT * FROM ficha";
$result31=mysqli_query($conn,$query31);
$query32="SELECT * FROM ficha";
$result32=mysqli_query($conn,$query32);
$query33="SELECT * FROM ficha";
$result33=mysqli_query($conn,$query33);
$query34="SELECT * FROM ficha";
$result34=mysqli_query($conn,$query34);
$query35="SELECT * FROM ficha";
$result35=mysqli_query($conn,$query35);
$query36="SELECT * FROM ficha";
$result36=mysqli_query($conn,$query36);
$query37="SELECT * FROM ficha";
$result37=mysqli_query($conn,$query37);
$query38="SELECT * FROM ficha";
$result38=mysqli_query($conn,$query38);
$query39="SELECT * FROM ficha";
$result39=mysqli_query($conn,$query39);
$query40="SELECT * FROM ficha";
$result40=mysqli_query($conn,$query40);
$query41="SELECT * FROM ficha";
$result41=mysqli_query($conn,$query41);
$query42="SELECT * FROM ficha";
$result42=mysqli_query($conn,$query42);
$query43="SELECT * FROM ficha";
$result43=mysqli_query($conn,$query43);
$query44="SELECT * FROM ficha";
$result44=mysqli_query($conn,$query44);
$query45="SELECT * FROM ficha";
$result45=mysqli_query($conn,$query45);
$query46="SELECT * FROM ficha";
$result46=mysqli_query($conn,$query46);
$query47="SELECT * FROM ficha";
$result47=mysqli_query($conn,$query47);
$query48="SELECT * FROM ficha";
$result48=mysqli_query($conn,$query48);
$queryx="SELECT * FROM instructor";
$in1=mysqli_query($conn,$queryx);
$querys="SELECT * FROM instructor";
$ins=mysqli_query($conn,$querys);
/*

  for ($i=1; $i <=45 ; $i++) { 
      echo '$query',$i,'="SELECT * FROM ficha"; <br>
            $result',$i,'=mysqli_query($conn,$query',$i,');<br>';
  }*/

   ?>   
<div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <center>
			<img class="img" src="../img/cenigraf.png" >
			<img class="img2" src="../img/logo1.png" >
	</center>
  </div>
 </div>
 <div>
 	<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
		  <a class="navbar-brand" onclick="window.open('../index.php','_Self')">Cenigraf</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" data-toggle="modal" data-target="#myModal">Crear Horaio</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">--------</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">--------</a>
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
<form action="../controlador/x.php" method="POST">
<table class="table table-responsive" style="width:92% " border="1px solid black"  bgcolor="white" > <!--86-->
  <tr>    <!--fila 1 titulo-->
    <th colspan="10" WIDTH="150" HEIGHT="100" bgcolor="E69138"> <!--<left><img src="img/logotabla.jpg" width="100" height="100"></left>--> 
      <center><br><h10>SERVICIO NACIONAL DE APRENDIZAJE SENA<h10>
             <br><h7>Sistema integrado de gestion<h7>
             <br><h10>HORARIOS ACADEMICOS<h10>
             <br><h7>Proseso de gestion<h7></center> </th>
    <th colspan="4" bgcolor="E69138"><p>fecha</p> <p><input type="date" bgcolor="E69138"></p></th>
  </tr>
    <tr>  <!--fila 2 informacion general-->
    <th colspan="3" WIDTH="8"HEIGHT="8" bgcolor="CBC3BB"> Trimestre 
                                         <select style="width:200px" >
                                              <option value="value1">Trimestre 1</option>
                                              <option value="value2">Trimestre 2</option>
                                              <option value="value3">Trimestre 3</option>
                                              <option value="value3">Trimestre 4</option>
                                              <option value="value3">Trimestre 5</option>
                                              <option value="value3">Trimestre 6</option>
                                         </select> INTRUCTOR <select name="ins">
                                         <?php while ($x1=mysqli_fetch_array($in1)) {
                                         ?>
                                   <option value="<?php echo $x1["ID"]?>"><?php echo $x1["Nombre"];?></option>

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
  <form action="../controlador/x.php" method="POST">
  <tr>
    <th colspan="2"> <center> 6:00 - 7:40 </center>
      <td>
          <select style="width:100px" name="sfl">
            <option value="0">Selecionar</option><?php
             while ($row1=mysqli_fetch_array($resul)) {
   ?>
      <option value="<?php echo $row1["ID_F"]?>"><?php echo $row1["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="sfm">
              <option value="0">Selecionar</option><?php
             while ($row2=mysqli_fetch_array($result2)) {
   ?>
      <option value="<?php echo $row2["ID_F"]?>"><?php echo $row2["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="sfx">
             <option value="0">Selecionar</option><?php
             while ($row3=mysqli_fetch_array($result3)) {
   ?>
      <option value="<?php echo $row3["ID_F"]?>"><?php echo $row3["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="sfj">
             <option value="0">Selecionar</option><?php
             while ($row4=mysqli_fetch_array($result4)) {
   ?>
      <option value="<?php echo $row4["ID_F"]?>"><?php echo $row4["Nº ficha"]?></option>

    <?php
}
    ?>
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
      <select style="width:100px" name="sfv"> 
         <option value="0">Selecionar</option><?php
             while ($row5=mysqli_fetch_array($result5)) {
   ?>
      <option value="<?php echo $row5["ID_F"]?>"><?php echo $row5["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="sfs">
             <option value="0">Selecionar</option><?php
             while ($row6=mysqli_fetch_array($result6)) {
   ?>
      <option value="<?php echo $row6["ID_F"]?>"><?php echo $row6["Nº ficha"]?></option>

    <?php
}
    ?>
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
          <select style="width:100px" name="ofl">
             <option value="0">Selecionar</option><?php
             while ($row7=mysqli_fetch_array($result7)) {
   ?>
      <option value="<?php echo $row7["ID_F"]?>"><?php echo $row7["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="ofm">
             <option value="0">Selecionar</option><?php
             while ($row8=mysqli_fetch_array($result8)) {
   ?>
      <option value="<?php echo $row8["ID_F"]?>"><?php echo $row8["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="ofx">
             <option value="0">Selecionar</option><?php
             while ($row9=mysqli_fetch_array($result9)) {
   ?>
      <option value="<?php echo $row9["ID_F"]?>"><?php echo $row9["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="ofj">
             <option value="0">Selecionar</option><?php
             while ($row10=mysqli_fetch_array($result10)) {
   ?>
      <option value="<?php echo $row10["ID_F"]?>"><?php echo $row10["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="ofv">
             <option value="0">Selecionar</option><?php
             while ($row11=mysqli_fetch_array($result11)) {
   ?>
      <option value="<?php echo $row11["ID_F"]?>"><?php echo $row11["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="ofs">
             <option value="0">Selecionar</option><?php
             while ($row12=mysqli_fetch_array($result12)) {
   ?>
      <option value="<?php echo $row12["ID_F"]?>"><?php echo $row12["Nº ficha"]?></option>

    <?php
}
    ?>
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
          <select style="width:100px" name="dfl">
             <option value="0">Selecionar</option><?php
             while ($row13=mysqli_fetch_array($result13)) {
   ?>
      <option value="<?php echo $row13["ID_F"]?>"><?php echo $row13["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="dfm">
             <option value="0">Selecionar</option><?php
             while ($row14=mysqli_fetch_array($result14)) {
   ?>
      <option value="<?php echo $row14["ID_F"]?>"><?php echo $row14["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="dfx">
             <option value="0">Selecionar</option><?php
             while ($row15=mysqli_fetch_array($result15)) {
   ?>
      <option value="<?php echo $row15["ID_F"]?>"><?php echo $row15["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="dfj">
             <option value="0">Selecionar</option><?php
             while ($row16=mysqli_fetch_array($result16)) {
   ?>
      <option value="<?php echo $row16["ID_F"]?>"><?php echo $row16["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="dfv">
             <option value="0">Selecionar</option><?php
             while ($row17=mysqli_fetch_array($result17)) {
   ?>
      <option value="<?php echo $row17["ID_F"]?>"><?php echo $row17["Nº ficha"]?></option>

    <?php
}
    ?>
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
           <select style="width:100px" name="dfs">
             <option value="0">Selecionar</option><?php
             while ($row18=mysqli_fetch_array($result18)) {
   ?>
      <option value="<?php echo $row18["ID_F"]?>"><?php echo $row18["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row19=mysqli_fetch_array($result19)) {
   ?>
      <option value="<?php echo $row19["ID_F"]?>"><?php echo $row19["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row20=mysqli_fetch_array($result20)) {
   ?>
      <option value="<?php echo $row20["ID_F"]?>"><?php echo $row20["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row21=mysqli_fetch_array($result21)) {
   ?>
      <option value="<?php echo $row21["ID_F"]?>"><?php echo $row21["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row22=mysqli_fetch_array($result22)) {
   ?>
      <option value="<?php echo $row22["ID_F"]?>"><?php echo $row22["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row23=mysqli_fetch_array($result23)) {
   ?>
      <option value="<?php echo $row23["ID_F"]?>"><?php echo $row23["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row24=mysqli_fetch_array($result24)) {
   ?>
      <option value="<?php echo $row24["ID_F"]?>"><?php echo $row24["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row25=mysqli_fetch_array($result25)) {
   ?>
      <option value="<?php echo $row25["ID_F"]?>"><?php echo $row25["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row26=mysqli_fetch_array($result26)) {
   ?>
      <option value="<?php echo $row26["ID_F"]?>"><?php echo $row26["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row27=mysqli_fetch_array($result27)) {
   ?>
      <option value="<?php echo $row27["ID_F"]?>"><?php echo $row27["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row28=mysqli_fetch_array($result28)) {
   ?>
      <option value="<?php echo $row28["ID_F"]?>"><?php echo $row28["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row29=mysqli_fetch_array($result29)) {
   ?>
      <option value="<?php echo $row29["ID_F"]?>"><?php echo $row29["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row30=mysqli_fetch_array($result30)) {
   ?>
      <option value="<?php echo $row30["ID_F"]?>"><?php echo $row30["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row31=mysqli_fetch_array($result31)) {
   ?>
      <option value="<?php echo $row31["ID_F"]?>"><?php echo $row31["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row32=mysqli_fetch_array($result32)) {
   ?>
      <option value="<?php echo $row32["ID_F"]?>"><?php echo $row32["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row33=mysqli_fetch_array($result33)) {
   ?>
      <option value="<?php echo $row33["ID_F"]?>"><?php echo $row33["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row34=mysqli_fetch_array($result34)) {
   ?>
      <option value="<?php echo $row34["ID_F"]?>"><?php echo $row34["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row35=mysqli_fetch_array($result35)) {
   ?>
      <option value="<?php echo $row35["ID_F"]?>"><?php echo $row35["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row36=mysqli_fetch_array($result36)) {
   ?>
      <option value="<?php echo $row36["ID_F"]?>"><?php echo $row36["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row37=mysqli_fetch_array($result37)) {
   ?>
      <option value="<?php echo $row37["ID_F"]?>"><?php echo $row37["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row38=mysqli_fetch_array($result38)) {
   ?>
      <option value="<?php echo $row38["ID_F"]?>"><?php echo $row38["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row39=mysqli_fetch_array($result39)) {
   ?>
      <option value="<?php echo $row39["ID_F"]?>"><?php echo $row39["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row40=mysqli_fetch_array($result40)) {
   ?>
      <option value="<?php echo $row40["ID_F"]?>"><?php echo $row40["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row41=mysqli_fetch_array($result41)) {
   ?>
      <option value="<?php echo $row41["ID_F"]?>"><?php echo $row41["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row42=mysqli_fetch_array($result42)) {
   ?>
      <option value="<?php echo $row42["ID_F"]?>"><?php echo $row42["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row43=mysqli_fetch_array($result43)) {
   ?>
      <option value="<?php echo $row43["ID_F"]?>"><?php echo $row43["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row44=mysqli_fetch_array($result44)) {
   ?>
      <option value="<?php echo $row44["ID_F"]?>"><?php echo $row44["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row45=mysqli_fetch_array($result45)) {
   ?>
      <option value="<?php echo $row45["ID_F"]?>"><?php echo $row45["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row46=mysqli_fetch_array($result46)) {
   ?>
      <option value="<?php echo $row46["ID_F"]?>"><?php echo $row46["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row47=mysqli_fetch_array($result47)) {
   ?>
      <option value="<?php echo $row47["ID_F"]?>"><?php echo $row47["Nº ficha"]?></option>

    <?php
}
    ?>
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
             <option value="0">Selecionar</option><?php
             while ($row48=mysqli_fetch_array($result48)) {
   ?>
      <option value="<?php echo $row48["ID_F"]?>"><?php echo $row48["Nº ficha"]?></option>

    <?php
}
    ?>
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
<button>ahh</button></form>
	</center>
</div>
</div>
<!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <!--Contenido-->
                  <div class="modal-header">
                    <h4 class="modal-title">Crear Horario Instructor</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  <div class="modal-body">
                   <form class="form-horizontal" action="horarios_beta.php" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="ins">Instructor:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="ins" name="inst">
                            <option value="0" >Seleccionar Instructor</option>
                            <?php
                                         while ($w=mysqli_fetch_array($ins)) {
                               ?>
                                   <option value="<?php echo $w["ID"]?>"><?php echo $w["Nombre"];?></option>

                                <?php
                            }
                                ?>
                          </select>
                        </div>
                      </div>
                     </div>
                      <div class="form-group">
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-warning">Crear</button>
                        </div>
                      </div>
                    </form>
                 </div>   
              </div>
           </div>
<div id="abajo" class="container">
            <h6>Servicio Nacional de Aprendizaje SENA- Centro para la industria de la Comunicación Gráfica Cenigraf -</h6> 
            <h6>Regional Distrito Capital Dirección: Calle 15 # 31 - 42 – Teléfonos: 546 1500 o 596 0100 Ext.: 15 463</h6>
            <h6>conmutador Nacional (57 1) 5461500 - Ext.: 15 463</h6>
            <h6>Atención telefónica: lunes a viernes 7:00 a.m. a 7:00 p.m. - sábados 8:00 a.m. a 1:00 p.m.</h6>
            <h6>Atención al ciudadano: Bogotá (57 1) 3430111 - Línea gratuita y resto del país 018000 910270</h6>
            <h6>Atención al empresario: Bogotá (57 1) 3430101 - Línea gratuita y resto del país 018000 910682</h6>
    </div>   

</body>
</html>