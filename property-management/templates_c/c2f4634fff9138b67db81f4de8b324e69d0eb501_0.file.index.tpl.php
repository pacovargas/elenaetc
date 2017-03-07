<?php
/* Smarty version 3.1.30, created on 2017-03-07 17:32:58
  from "/home/paco/repos/elenaetc/property-management/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bee0ba52fd64_07182409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f4634fff9138b67db81f4de8b324e69d0eb501' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/index.tpl',
      1 => 1488904367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bee0ba52fd64_07182409 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="row text-center">
		<div class="col-xs-12">
			<h2 class="mays champan-bold no-margin-top"><span class="alreves">e</span><span class="gris">tc</span><span class="naranja">.</span> house <span class="naranja">management</span></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2" id="filtros">
			filtros
		</div>
		<div class="col-sm-10" id="propiedades">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propiedades']->value, 'prop');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prop']->value) {
?>
				<div class="row fila-datos">
					<div class="col-sm-7 carrusel-fotos">
						<?php if ($_smarty_tpl->tpl_vars['prop']->value->fotos) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prop']->value->fotos, 'foto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foto']->value) {
?>
								<div class="foto">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/propiedades/<?php echo $_smarty_tpl->tpl_vars['foto']->value['nombre'];?>
" data-fancybox data-caption="">
										<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/propiedades/<?php echo $_smarty_tpl->tpl_vars['foto']->value['nombre'];?>
" class="img-responsive" />
									</a>
								</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<?php }?>
					</div>
					<div class="col-sm-5 datos">
						datos
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
	</div>
</div><?php }
}
