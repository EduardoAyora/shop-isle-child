<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Shop Isle
 */
?>
<?php do_action( 'shop_isle_before_footer' ); ?>

	<footer>
		<div class="container shop-footer">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<h3>IMPORPRIMA</h3>
					<p>Encuentra productos en Cuenca a buen precio</p>
					<h3>Redes sociales</h3>
					<a href="https://www.facebook.com/Imporprima-115183470323611/" target="_blank">
						<i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-sm-6 col-md-4">
					<h3>Secciones</h3>
					<ul>
						<li><a href="<?php echo site_url() ?>">Inicio</a></li>
						<li><a href="<?php echo site_url('/tienda') ?>">Tienda</a></li>
						<li><a href="<?php echo site_url('/carrito') ?>">Carrito</a></li>
						<li><a href="<?php echo site_url('/finalizar-compra') ?>">Finalizar Compra</a></li>
						<li><a href="<?php echo site_url('/acerca-de-nosotros') ?>">Acerca de nosotros</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-4">
					<h3>Contactos:</h3>
					<ul>
						<li><a href = "mailto: imporprima4@gmail.com">imporprima4@gmail.com</a></li>
						<li>Maria José Ochoa: 0997122275</li>
						<li>Tamara Salamea: 0981273552</li>
						<li>Valeria Ochoa: 0985334377</li>
						<li>Jenny Salamea: 0996321890</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- Wrapper end -->
	<!-- Scroll-up -->
	<div class="scroll-up">
		<a href="#totop"><i class="arrow_carrot-2up"></i></a>
	</div>

	<?php do_action( 'shop_isle_after_footer' ); ?>

<?php wp_footer(); ?>

</body>
</html>
