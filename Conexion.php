<html lang="es">
 <head>
  <title>Conexion</title>
  <link href="Estilo.css" rel="stylesheet" type="text/css">
 </head>

 <body>
 <?php	
  class conexion
  {	
    function recuperarDatos()
    {
     $con = mysql_connect('localhost','root','') or die ("NO CONECTO BASE DE DATOS"); 
     mysql_select_db('programacion',$con);
   
   	  $query="SELECT * FROM practica7;";
	  $resultado = mysql_query($query);
	
	  echo "<table border='5' cellspacing='5' >";
	  echo "<th>ID</th><th>NOMBRE</th><th>TELEFONO</th><th>CORREO</th>";
	
  	  while($fila = mysql_fetch_array($resultado))
	  {
	   echo "<tr>";
	   echo "<td>$fila[Id]</td><td>$fila[Nombre]</td><td>$fila[Telefono]</td><td>$fila[Correo]</td>";
	   echo "</tr>";
	  }
	  echo "</table>";
    }
  
    function Insertar($Nombre,$Telefono,$Correo)
    {
	  if(!empty($Nombre) && !empty($Telefono) && !empty($Correo))
	   {
        $Con = mysql_connect('localhost','root','');
	    mysql_select_db('programacion',$Con);
	 
	    $sql="INSERT INTO practica7 (Nombre,Telefono,Correo)VALUES('".$Nombre."','".$Telefono."','".$Correo."')";
	    //var_dump($query);
	    mysql_query($sql) or die ("NO CONECTADO BASE DE DATOS");
	 
	    echo "<script>alert(\"GUARDADO CON EXITO.\");</script>";
	    echo "<a href='Insertar.php'>Regresar</a>";
      }
	  else
	  {
        echo "<script>alert(\"FAVOR DE LLENAR TODOS LOS CAMPOS.\");</script>";
	    echo "<a href='Insertar.php'>Regresar</a>";
	  }
    }
  }
 ?>
 </body>
</html>