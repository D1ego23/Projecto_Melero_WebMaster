<?php include('header.php')?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Danos la informacion de como quieres que sea tu pagina!</h1>
			</div>

			<div class="articulo">
				<article>
				<section class="form-register">
    				<h4>Tu Pagina Web</h4>
    				<input class="controls" type="text" name="nombre" id="nombres" placeholder="Nombre de la Pagina">
    				<input class="controls" type="text" name="url" id="url" placeholder="URL">
    				<input class="controls" type="text" name="text" id="tema" placeholder="Tema de la Pagina">
					<input class="controls" type="text" name="text" id="contacto" placeholder="Manera de Contacto">
					<input class="controls" type="text" name="text" id="presupuesto" placeholder="Presupuesto">
    				<input class="botons" type="submit" value="Enviar">
  				</section>
				</article>
			</div>
            <?php include('sidebar.php')?>
		</div>
	</section>
    <?php include('footer.php')?>
</body>
</html>