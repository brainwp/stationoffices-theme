<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>

<script language="javascript">
var win = null;
function NovaJanela(pagina,nome,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	win = window.open(pagina,nome,settings);
}

</script>


</head>

<body>

<div id="projeto">

	<div id="cabecalho-interno">
    
        <div id="logo-home"><a class="a-logo-home" href="<?php echo home_url( '/' ) ?>"></a></div>
        <div id="info-home"><h2>Salas comercias de <span class="destaque">35 a 580m&sup2; priv</span>.</h2></div>
       			<div id="home-menu">
			  <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #home-menu -->
		<div id="botoes-home">
        <a href="<?php echo home_url( '/' ) ?>contato"><img src="<?php echo home_url( '/' ) ?>/wp-content/themes/stationoffices-theme/images/informacoes-por-email.jpg" alt="Informa&ccedil;&otilde;es por e-mail" /></a>
        
		<?php include ("links-corretores.php"); ?><a class="a-infos-corretor" href="<?php echo "$url[$caminho]" ?>" onClick="NovaJanela(this.href,'nomeJanela','600','500','yes');return false"><img src="<?php echo home_url( '/' ) ?>/wp-content/themes/stationoffices-theme/images/corretor-online.jpg" width="219" height="44" alt="Corretor online" /></a>
        </div><!-- #botoes-home -->
            
	</div><!-- #cabecalho-interno -->