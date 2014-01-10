<?php
/* Template name: Home */
get_header( home );
?>

<div id="home">
	<div id="titulo-home"></div>
		<div id="conteudo-home">
        
        <div id="logo-home"><a class="a-logo-home" href="<?php echo home_url( '/' ) ?>"></a></div>
        <div id="info-home"><h2>Salas comercias de <span class="destaque">35 a 580m&sup2; priv</span>.</h2></div>
       			<div id="home-menu">
			  <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #home-menu -->
		<div id="botoes-home">
        <a href="<?php echo home_url( '/' ) ?>contato"><img src="<?php echo home_url( '/' ) ?>/wp-content/themes/stationoffices-theme/images/informacoes-por-email.jpg" alt="Informa&ccedil;&otilde;es por e-mail" /></a>
        
		<?php include ("links-corretores.php"); ?><a class="a-infos-corretor" href="<?php echo "$url[$caminho]" ?>" onClick="NovaJanela(this.href,'nomeJanela','600','500','yes');return false"><img src="<?php echo home_url( '/' ) ?>/wp-content/themes/stationoffices-theme/images/corretor-online.jpg" width="219" height="44" alt="Corretor online" /></a>
        </div><!-- #botoes-home -->
            
		</div><!-- #conteudo-home -->
</div><!-- #home -->
        
<?php get_footer( home ); ?>