<?php
/* Smarty version 3.1.30, created on 2017-02-27 11:53:22
  from "/Users/paco/repos/elenaetc/property-management/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b40522f2f1e0_31241016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ba459e0d112610153ea2699fccf21596d3cfd3' => 
    array (
      0 => '/Users/paco/repos/elenaetc/property-management/templates/header.tpl',
      1 => 1488192799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b40522f2f1e0_31241016 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" id="menu-principal">
	<nav class="navbar navbar-default" role="navigation">
	  <!-- El logotipo y el icono que despliega el menú se agrupan
	  para mostrarlos mejor en los dispositivos móviles -->
	  <div class="navbar-header">
	  	<button type="button" class="navbar-toggle" data-toggle="collapse"
	  	data-target=".navbar-ex1-collapse">
	  	<span class="sr-only">Desplegar navegación</span>
	  	<span class="icon-bar"></span>
	  	<span class="icon-bar"></span>
	  	<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../img/logo-menu.jpg" alt="ETC" /></a>
	</div>

	  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
	  otro elemento que se pueda ocultar al minimizar la barra -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	  	<ul class="nav navbar-nav">
	  		<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../elena-franco-alvarez.php">Elena Franco Álvarez</a></li>
	  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../que-hacemos.php">qué hacemos</a></li>
	  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../como-lo-hacemos.php">cómo lo hacemos</a></li>
	  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../para-quien-lo-hacemos.php">para quién lo hacemos</a></li>
	  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../contacto.php">contacto</a></li>
	  	</ul>
	  </div>

	  <div class="visible-lg c2a-encargo-lg">
	  	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../hoja-de-encargo.php"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../img/c2a-encargo.png" alt="Rellene aquí la hoja de encargo" /></a>
	  </div>

	  <div class="visible-sm visible-md c2a-encargo-md">
	  	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../hoja-de-encargo.php"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../img/c2a-encargo-horizontal.png" alt="Rellene aquí la hoja de encargo" class="img-responsive" /></a>
	  </div>

	  <div class="visible-xs c2a-encargo-md">
	  	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../hoja-de-encargo.php"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
../img/c2a-encargo-movil.png" alt="Rellene aquí la hoja de encargo" class="img-responsive" /></a>
	  </div>
	</nav>
</div><?php }
}
