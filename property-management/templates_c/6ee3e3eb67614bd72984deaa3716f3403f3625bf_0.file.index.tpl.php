<?php
/* Smarty version 3.1.30, created on 2017-03-07 23:10:38
  from "/Users/paco/repos/elenaetc/property-management/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bf2fde7dff46_38216468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ee3e3eb67614bd72984deaa3716f3403f3625bf' => 
    array (
      0 => '/Users/paco/repos/elenaetc/property-management/templates/index.tpl',
      1 => 1488924632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bf2fde7dff46_38216468 (Smarty_Internal_Template $_smarty_tpl) {
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
						<h3 class="champan-bold naranja no-margin-top"><?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre;?>
</h3>
						<p>Referencia nº <?php echo $_smarty_tpl->tpl_vars['prop']->value->referencia;?>
</p>
						<p class="capital"><?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre_tipo;?>
</p>
						<p><?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre_municipio;?>
 (<?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre_provincia;?>
)</p>
						<p class="capital"><?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre_regimen;?>
</p>
						<p><?php echo $_smarty_tpl->tpl_vars['prop']->value->precio_formateado;?>
 Euros</p>
						<div class="enlaces-datos flex-parent">
							<div class="sobre flex-child"><a href="#" class="negro"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>
							<div class="enlace-info naranja flex-child"><a href="#">solicitud de información</a></div>
							<div class="enlace-docu naranja flex-child"><a class="naranja" href="#"><i class="fa fa-file-text" aria-hidden="true"></i></a></div>
						</div>
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
