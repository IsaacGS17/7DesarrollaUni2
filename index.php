<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Bienvenidos! a mi sitio web</h1>
			</div>

			<div class="articulo">
				<article>
				<img src="lasimagenes/problema.jpg" width="550" height="250" alt="tienda"/>
				<br>
				<br>
					<p>El problema 1 evalua los datos que ingresas de tu compra para ver que descuento te llevas <br>
					y que obsequio se te otorga por tu numero de ticket</p>
					<br/>
					<p>El problema 2 es en base a una funcion que sirve para rellenar cadenas con un caracter <br>
					el numero de veces que le asignemos.
					</p>
					<br/>
					<p>El problema 3 nos ayuda a determinar el salario bruto, el descuento y el salario neto<br>
					de los empleados de una empresa para determinar cuanto recebira cada uno en base a sus horas<br>
					trabajadas y su categoria de trabajador.</p>

				</article>
			</div>
		<!-- {El archivo siderbar.php dentro de miplantilla} -->
		<?php include('miplantilla/sidebar.php');?> 

		</div>
	</section>
	<!-- {El archivo footer.php dentro de miplantilla} -->
	<?php include('miplantilla/footer.php');?> 
</body>
</html>