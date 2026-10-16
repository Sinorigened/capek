<?php if (!defined('ABSPATH')) exit; ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="nav">
  <a class="brand" href="<?php echo capek_home(); ?>">Čapek <em>Seeds</em></a> <img src="<?php echo capek_img('logofooter.jpg'); ?>" alt="Sala de floración">
  <nav class="nav-links">
    <a href="<?php echo capek_home(); ?>">Inicio</a>
    <a href="<?php echo capek_home(); ?>#proceso">Método</a>
    <a href="<?php echo capek_home(); ?>#faq">Preguntas</a>
    <a href="<?php echo capek_concierge(); ?>">Concierge</a>
    <a class="nav-cta" href="<?php echo capek_concierge('#agendar'); ?>">Consulta gratis</a>
  </nav>
  <button class="burger" type="button" aria-label="Menú" onclick="document.getElementById('drawer').classList.toggle('open')">
    <span></span><span></span><span></span>
  </button>
</header>
<div class="drawer" id="drawer">
  <a href="<?php echo capek_home(); ?>">Inicio</a>
  <a href="<?php echo capek_home(); ?>#proceso">Método</a>
  <a href="<?php echo capek_home(); ?>#faq">Preguntas</a>
  <a href="<?php echo capek_concierge(); ?>">Concierge</a>
  <a href="<?php echo capek_concierge('#agendar'); ?>">Consulta gratis</a>
</div>
