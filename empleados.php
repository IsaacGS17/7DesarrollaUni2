<?php include('miplantilla/header.php');?> 

<section class="principal">>
<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Sitio web para registrar el pago a empleados</h1>
			</div>
            <div class="articulo">
				<article>
                <img src="lasimagenes/empleados.jpg" width="550" height="250" alt="tienda"/>
				<br>
				<br>
				<?php
 error_reporting(0);

 $empleado=$_POST['txtEmpleado'];
 $categoria=$_POST['selCategoria'];
 $horas=$_POST['txtHoras'];

 if ($categoria=='Jefe')
  $selJ='SELECTED'; 
  else
 $selJ="";
 if ($categoria=='Administrativo')
 $selA='SELECTED';
 else
 $selA="";
 if ($categoria=='Operario')
 $selO='SELECTED';
 else
 $selO="";
 if ($categoria=='Practicante')
 $selP='SELECTED';
 else
 $selP="";
 ?>
 <form method="POST" name="frmSalario" action="empleados.php">
 <table border="0" cellspacing="0" cellpadding="0" >
 <tr>
 <td width="150">Empleado</td>
 <td><input type="text" name="txtEmpleado" size="70"
 value="<?php echo $empleado; ?>" />
 </td>
 </tr>
 <tr>
 <td>Horas</td>
 <td><input type="text" name="txtHoras"
 value="<?php echo $horas; ?>" /></td>
 </tr>
 <tr>
 <td>Categoria</td>
 <td>
 <select name="selCategoria">
 <option value="Jefe" <?php echo $selJ;?> >Jefe</option>
 <option value="Administrativo" <?php echo $selA; ?> >
 Administrativo </option>
 <option value="Operario" <?php echo $selO; ?> >
 Operario</option>
 <option value="Practicante" <?php echo $selP; ?> >
 Practicante</option>
 </select>
 </td>
 </tr>
 <tr>
 <td></td>
 <td>
 <input type="submit" value="Calcular"
 name="btnCalcular"/>
 <input type="reset" value="Limpiar controles"
 name="btnLimpiar"/>
 </td>
 </tr>
 <?php
 if ($categoria=='Jefe') $pagoHora=50;
 if ($categoria=='Administrativo') $pagoHora=30;
 if ($categoria=='Operario') $pagoHora=15;
 if ($categoria=='Practicante') $pagoHora=5;

 $sBruto=$pagoHora*$horas;
 $descuento=$sBruto*15.0/100.0;
 $sNeto=$sBruto-$descuento;
 ?>
<tr>
 <td>Salario Bruto</td>
 <td>
 <?php echo "$ ".number_format($sBruto, 2,'.','');?>
 </td>
 </tr>
 <tr>
 <td>Descuento</td>
 <td>
 <?php echo "$ ".number_format($descuento,2,'.',''); ?>
 </td>
 </tr>
 <tr>
 <td>Salario Neto</td>
 <td>
 <?php echo "$ ".number_format($sNeto,2,'.','');?></td>
 </tr>
 </table>
 </form> 
  <br><h2>Explicacion del problema para ver el pago a empleados</h2> <br>
					<p>Lo que realiza este programa es determinar el salario bruto, descuento y salario neto de un empleado<br>
					el cual en base a sus horas trabajadas y su categoria como empleado, se determinaran<br>
					 los tres factores anteriormente escritos.</p>
					<br/>
					<p>
                     
					</p>
					<br/>
					<p>Para descargar el codigo recuerde clickear en mi link de Github.</p>
</article>
			</div>
 
 <?php include('miplantilla/sidebar.php');?> 
  
 </div>
 </section>

 <?php include('miplantilla/footer.php');?> 
 </section>