<?php
/* Smarty version 3.1.30, created on 2017-03-08 14:11:02
  from "/home/paco/repos/elenaetc/property-management/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c002e6c908f3_85824787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f4634fff9138b67db81f4de8b324e69d0eb501' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/index.tpl',
      1 => 1488978612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c002e6c908f3_85824787 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	var municipios = <?php echo json_encode($_smarty_tpl->tpl_vars['municipios']->value);?>

	var id_municipio = <?php echo json_encode($_smarty_tpl->tpl_vars['id_municipio']->value);?>

<?php echo '</script'; ?>
>

<div class="container">
	<div class="row text-center">
		<div class="col-xs-12">
			<h2 class="mays champan-bold no-margin-top"><span class="alreves">e</span><span class="gris">tc</span><span class="naranja">.</span> house <span class="naranja">management</span></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2" id="filtros">
			<form id="filtros" method="post" action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" name="filtros">
				<h3 class="champan-bold naranja no-margin-top">Filtros</h3>
				<div class="grupo-filtros">
					<label for="tipo">Tipo</label>
					<select name="tipo" id="tipo">
						<option value="0"></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['tipo']->value['id'] == $_smarty_tpl->tpl_vars['id_tipo']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
				</div>
				<div class="grupo-filtros">
					<label for="regimen">Régimen</label>
					<select name="regimen" id="regimen">
						<option value="0"></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regimenes']->value, 'regimen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['regimen']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['regimen']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['regimen']->value['id'] == $_smarty_tpl->tpl_vars['id_regimen']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['regimen']->value['nombre'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
				</div>
				<div class="grupo-filtros">
					<label for="provincia">Provincia</label>
					<select name="provincia" id="provincia">
						<option value="0"></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provincias']->value, 'provincia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['provincia']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['provincia']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['provincia']->value['id'] == $_smarty_tpl->tpl_vars['id_provincia']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['provincia']->value['nombre'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
				</div>
				<div class="grupo-filtros">
					<label for="municipio">Localidad</label>
					<select name="municipio" id="municipio"></select>
				</div>
				<div class="grupo-filtros">
					<input type="submit" name="filtrar" id="filtrar" value="Aplicar filtros" class="boton" />
				</div>
			</form>
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
							<?php if ($_smarty_tpl->tpl_vars['prop']->value->doc) {?>
								<div class="enlace-docu naranja flex-child"><a class="naranja" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
docs/<?php echo $_smarty_tpl->tpl_vars['prop']->value->doc['nombre'];?>
"><i class="fa fa-file-text" aria-hidden="true"></i></a></div>
							<?php }?>
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
