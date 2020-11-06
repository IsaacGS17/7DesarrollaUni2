<?php include('miplantilla/header.php');?> 

	<section class="principal">
    <div class="menuhorizontal">
			<div class="mensaje">
				<h1>Funcion str_pad</h1>
			</div>

			<div class="articulo">
				<article>
                <img src="lasimagenes/rellenar.jpg" alt="" width="600" height="300">
                <br>
                <?php
                $n = 1;
               echo str_pad($n,5,'0',STR_PAD_LEFT); //Resp:00001
                ?>
            <br><h2>Explicacion del problema para calcular salario</h2> <br>
					<p>este programa es muy sencillo es una funcion la cual se trata de<br>
                     rellenar una cadena en otra un numero predeterminado de veces</p>
					<br/>
					<br>
                    <br>
                    <br>

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