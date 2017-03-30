<?php
/* Smarty version 3.1.30, created on 2017-03-07 23:22:44
  from "/Users/paco/repos/elenaetc/property-management/templates/crear-propiedad.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bf32b461ba28_37722656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c8339398fcfc58ff7538100c8831e4995e924f2' => 
    array (
      0 => '/Users/paco/repos/elenaetc/property-management/templates/crear-propiedad.tpl',
      1 => 1488921871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bf32b461ba28_37722656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container cuerpo-admin" id="plantilla-create">
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
				<label for="tipo">Tipo</label>
				<label for="provincia">Provincia</label>
				<label for="municipio">Municipio</label>
				<label for="régimen">Régimen</label>
				<label for="precio">Precio</label>
			</div>
			<div class="col-md-6 campos">
				<input type="hidden" name="id_propiedad" id="id_propiedad" value="<?php echo $_smarty_tpl->tpl_vars['id_propiedad']->value;?>
" />
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" />
				<input type="text" name="referencia" id="referencia" placeholder="Referencia" value="<?php echo $_smarty_tpl->tpl_vars['referencia']->value;?>
" />
				<select name="tipo" id="tipo">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['id_tipo']->value && $_smarty_tpl->tpl_vars['tipo']->value['id'] === $_smarty_tpl->tpl_vars['id_tipo']->value) {?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>
</option>
						<?php } else { ?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>
</option>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
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

		<div class="row">
			<div class="col-xs-12 text-right capa-botones">
				<input type="submit" name="accion-formulario" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
" class="boton" />
				<input type="button" name="cancelar" id="cancelar" value="volver" class="boton" />
			</div>
		</div>
	</form>


		<?php if ($_smarty_tpl->tpl_vars['accion']->value === "actualizar") {?>
			<div class="row panel">
				<div class="col-xs-12 panel-heading">
					<i class="fa fa-camera" aria-hidden="true"></i> Fotos
				</div>
				<?php if ($_smarty_tpl->tpl_vars['fotos']->value) {?>
					<div class="col-xs-12 flex-parent contenedor-fotos">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fotos']->value, 'foto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foto']->value) {
?>
						<div class="foto flex-child">
							<div class="eliminar-foto">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/accion=eliminar&foto=<?php echo $_smarty_tpl->tpl_vars['foto']->value['id'];?>
&propiedad=<?php echo $_smarty_tpl->tpl_vars['foto']->value['propiedad'];?>
" class="confirmar" data-confirm-msg="Se va a eliminar la foto"><i class="fa fa-times" aria-hidden="true"></i> Eliminar</a>
							</div>
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/propiedades/<?php echo $_smarty_tpl->tpl_vars['foto']->value['nombre'];?>
" />
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>
				<?php }?>
				<div class="col-xs-12" id="formulario-subir">
					<form enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="POST" name="subir-foto" id="subir-foto">
						<p>Subir nueva foto:</p>
						<input name="foto" type="file" />
						<input type="submit" value="subir" class="boton" name="subir" />
					</form>
				</div>
			</div>

			<div class="row panel">
				<div class="col-xs-12 panel-heading">
					<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Documentación
				</div>
				<?php if (!$_smarty_tpl->tpl_vars['docs']->value) {?>
					<div class="col-xs-12" id="formulario-doc">
						<form enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="POST" name="subir-doc" id="subir-doc">
							<p>Subir documentación:</p>
							<input name="doc" type="file" />
							<input type="submit" value="subir" class="boton" name="subir-doc" />
						</form>
					</div>
				<?php } else { ?>
					<div class="col-xs-12" id="docus">
						<i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['docs']->value['nombre'];?>
 - <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/accion=eliminardoc&doc=<?php echo $_smarty_tpl->tpl_vars['docs']->value['id'];?>
&propiedad=<?php echo $_smarty_tpl->tpl_vars['docs']->value['propiedad'];?>
" class="confirmar" data-confirm-msg="Se va a eliminar el documento"><i class="fa fa-times" aria-hidden="true"></i>Eliminar</a>
					</div>
				<?php }?>
			</div>
		<?php }?>
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

		$("#cancelar").click(function(event) {
			event.preventDefault();
			window.location = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/";
		});
	});
<?php echo '</script'; ?>
><?php }
}
