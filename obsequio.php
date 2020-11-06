
<?php include('miplantilla/header.php');?> 
 



 <section class="principal">>
 <div class="menuhorizontal">
			<div class="mensaje">
				<h1>Caja para pagar</h1>
			</div>
            <div class="articulo">
				<article>
              <img src="lasimagenes/obsequio.jpg" width="550" height="250" alt="tienda"/>
              <?php
       error_reporting(0);
       $monto=$_POST['txtMonto'];
       $ticket=$_POST['txtNumero'];
 ?>
              <form name="frmObsequio" action="obsequio.php" method="POST">
              <table border="0" width="550" cellspacing="0" cellpadding="0" align="center">
          <tr>
              <td>Nombre del Cliente</td>
               <td><input type="text" name="txtCliente" size="60"
                   value="<?php echo $_POST[txtCliente]; ?>"
                placeholder="Ingrese nombre del cliente" />
              </td>
               </tr>
               <tr>
               <td>Monto total $</td>
               <td><input type="text" name="txtMonto" value="<?php echo $monto; ?>"
             placeholder="Ingrese monto a pagar"/>
               </td>
               </tr>
             <tr>
             <td>numero de Ticket</td>
               <td><input type="text" name="txtNumero" size="40" value="<?php echo $ticket; ?>"
                 placeholder="Ingrese numero de ticket obtenido"/>
                    </td>
               </tr>
                      <tr>
                <td></td>
                <td><input type="submit" value="Procesar" /></td>
              </tr>
 <?php
 if ($ticket>=1 && $ticket<=4){
 $obsequio='Canasta con productos diversos';
 $descuento=16.0/100.0 * $monto;
 }

 if ($ticket>=5 && $ticket<=9){
 $obsequio='Saco de azúcar de 50kg.';
 $descuento=13.0/100.0 * $monto;
 }

 if ($ticket>=10 && $ticket<=14){
 $obsequio='Aceite 5 litros.';
 $descuento=6.0/100.0 * $monto;
 }

 if ($ticket>=15 && $ticket<=19){
 $obsequio='Caja de leche de 24 latas grandes.';
 $descuento=12.0/100.0 * $monto;
 }

 if ($ticket==20){
 $obsequio='Saco de arroz de 50kg.';
 $descuento=10.0/100.0 * $monto;
 }

 if ($ticket<1 || $ticket>20){
 echo '<script>
 alert("Ticket No valido..!!");
 </script>';
 }

 $nuevoMonto=$monto-$descuento;
 ?>
 <tr>
 <td>Monto a cancelar</td>
 <td>
 <?php echo '$'.number_format($nuevoMonto,2,'.',''); ?>
 </td>
 </tr>
 <tr>
 <td>Obsequio obtenido</td>
 <td>
 <?php echo $obsequio; ?>
 </td>
 </tr>
 </table>
 </form>
 <br><h2>Explicacion del problema para recibir un obsequio</h2> <br>
					<p>Lo que realiza este programa es pedirte datos de tu ticket, junto con el total de pago y tu nombre <br>
                    para evaluar si logras obtener un buen descuento y aparte te llevas un regalo sorpresa.</p>
					<br/>
					<p>El programa tien un numero limitado de ticket's que son validos si el numero del ticket es<br>
                      mayor a 20 o menor a 1 el ticket es invalido y por lo tanto no se puede realizar el pago y no se puede<br>
                       no recibira su descuento ni su obsequio.    
					</p>
					<br/>
					<p>Para descargar el codigo recuerde clickear en mi link de Github.</p>
</article>
			</div>
 
 <?php include('miplantilla/sidebar.php');?> 
  
 </div>
 </section>

 <?php include('miplantilla/footer.php');?> 
</body>
</html>