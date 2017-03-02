<?php
/* Smarty version 3.1.30, created on 2017-03-02 10:10:32
  from "/home/paco/repos/elenaetc/property-management/templates/crear-propiedad.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b7e18882b335_57506952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d18f81bfb86eb0afadf7beef244b6604d3a26b3' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/crear-propiedad.tpl',
      1 => 1488445827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b7e18882b335_57506952 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container cuerpo-admin">
	<?php if ($_smarty_tpl->tpl_vars['errores']->value !== false) {?>
		<div class="row panel error-panel">
			<div class="col-xs-12" id="errores">
				<?php echo $_smarty_tpl->tpl_vars['errores']->value;?>

			</div>
		</div>
	<?php }?>

	<form name="formulario-propiedad" id="formulario-propiedad" method="post" action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">
		<div class="row panel">
			<div class="col-xs-12 panel-heading">
				<i class="fa fa-file-text" aria-hidden="true"></i> Datos
			</div>
			<div class="col-md-4 text-right etiquetas hidden-xs">
				<label for="nombre">Nombre</label>
				<label for="referencia">Referencia</label>
				<label for="provincia">Provincia</label>
				<label for="municipio">Municipio</label>
				<label for="régimen">Régimen</label>
				<label for="precio">Precio</label>
			</div>
			<div class="col-md-6 campos">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" />
				<input type="text" name="referencia" id="referencia" placeholder="Referencia" value="<?php echo $_smarty_tpl->tpl_vars['referencia']->value;?>
" />
				<select name="provincia" id="provincia">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provincias']->value, 'provincia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['provincia']->value) {
?>
						<?php if (!$_smarty_tpl->tpl_vars['id_provincia']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['provincia']->value['nombre'] === 'Cádiz') {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['provincia']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['provincia']->value['nombre'];?>
</option>
							<?php } else { ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['provincia']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['provincia']->value['nombre'];?>
</option>
							<?php }?>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['provincia']->value['id'] === $_smarty_tpl->tpl_vars['id_provincia']->value) {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['provincia']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['provincia']->value['nombre'];?>
</option>
							<?php } else { ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['provincia']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['provincia']->value['nombre'];?>
</option>
							<?php }?>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
				<select name="municipio" id="municipio"></select>
				<select name="regimen" id="regimen">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regimenes']->value, 'regimen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['regimen']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['id_regimen']->value && $_smarty_tpl->tpl_vars['regimen']->value['id'] === $_smarty_tpl->tpl_vars['id_regimen']->value) {?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['regimen']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['regimen']->value['nombre'];?>
</option>
						<?php } else { ?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['regimen']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['regimen']->value['nombre'];?>
</option>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
				<input type="text" name="precio" id="precio" placeholder="Precio" value="<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
" />
			</div>
		</div>

		<div class="row panel">
			<div class="col-xs-12 panel-heading">
				<i class="fa fa-camera" aria-hidden="true"></i> Fotos
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-right capa-botones">
				<input type="submit" name="enviar" value="Enviar" class="boton" />	
			</div>
		</div>
	</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		var municipios = <?php echo json_encode($_smarty_tpl->tpl_vars['municipios']->value);?>
;
		var id_municipio = <?php echo json_encode($_smarty_tpl->tpl_vars['id_municipio']->value);?>
;
		
		refrescaMunicipios(municipios, id_municipio);

		$("#provincia").change(function(event) {
			refrescaMunicipios(municipios, id_municipio);
		});
	});
<?php echo '</script'; ?>
><?php }
}
