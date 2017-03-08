<?php
/* Smarty version 3.1.30, created on 2017-03-08 19:51:45
  from "/home/paco/repos/elenaetc/property-management/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c052c16cc515_90775639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f4634fff9138b67db81f4de8b324e69d0eb501' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/index.tpl',
      1 => 1488999083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c052c16cc515_90775639 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	var municipios = <?php echo json_encode($_smarty_tpl->tpl_vars['municipios']->value);?>

	var id_municipio = <?php echo json_encode($_smarty_tpl->tpl_vars['id_municipio']->value);?>

<?php echo '</script'; ?>
>
<pre><?php echo $_smarty_tpl->tpl_vars['num_paginas']->value;?>
</pre>
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
					<label for="preciomenor">Precio entre</label>
					<input type="text" name="preciomenor" id="preciomenor" value="<?php echo $_smarty_tpl->tpl_vars['preciomenor']->value;?>
" />
					<label for="preciomayor" class="labely"> y </label>
					<input type="text" name="preciomayor" id="preciomayor" value="<?php echo $_smarty_tpl->tpl_vars['preciomayor']->value;?>
" />
				</div>
				<div class="grupo-filtros registros">
					<label for="registros">Resultados por página</label>
					<select name="registros" id="registros">
						<option value="3" <?php if ($_smarty_tpl->tpl_vars['registros']->value == 3) {?>selected='selected'<?php }?>>3</option>
						<option value="10" <?php if ($_smarty_tpl->tpl_vars['registros']->value == 10) {?>selected='selected'<?php }?>>10</option>
						<option value="25" <?php if ($_smarty_tpl->tpl_vars['registros']->value == 25) {?>selected='selected'<?php }?>>25</option>
					</select>
					
				</div>
				<input type="hidden" name="pagina" id="pagina" value="1" />
				<div class="grupo-filtros">
					<input type="submit" name="filtrar" id="filtrar" value="Aplicar filtros" class="boton" />
				</div>
			</form>
		</div>
		<div class="col-sm-10" id="propiedades">
			<?php if ($_smarty_tpl->tpl_vars['propiedades']->value) {?>
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

			<?php } else { ?>
				<div class="sin-resultados text-center">
					<p class="naranja">La búsqueda no ha devuelto ningún resultado.</p>
				</div>
			<?php }?>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['num_paginas']->value > 1) {?>
		<div class="row paginacion text-center">
			<div class="col-xs-12">
				<p class="naranja">Páginas</p>
				<p>
					<?php if ($_smarty_tpl->tpl_vars['pagina']->value > 1) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" class="paginador" data-pagina="1"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" class="paginador" data-pagina="<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
					<?php } else { ?>
						<i class="fa fa-angle-double-left" aria-hidden="true"></i>
						<i class="fa fa-angle-left" aria-hidden="true"></i>
					<?php }?>

					<?php
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['p']->step = 1;$_smarty_tpl->tpl_vars['p']->total = (int) ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->tpl_vars['num_paginas']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['num_paginas']->value)+1)/abs($_smarty_tpl->tpl_vars['p']->step));
if ($_smarty_tpl->tpl_vars['p']->total > 0) {
for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1;$_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total;$_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++) {
$_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration == 1;$_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration == $_smarty_tpl->tpl_vars['p']->total;?>
						<?php if ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['pagina']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" class="paginador" data-pagina="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
						<?php }?>
					<?php }
}
?>


					<?php if ($_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['num_paginas']->value) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" class="paginador" data-pagina="<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" class="paginador" data-pagina="<?php echo $_smarty_tpl->tpl_vars['num_paginas']->value;?>
"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					<?php } else { ?>
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<i class="fa fa-angle-double-right" aria-hidden="true"></i>
					<?php }?>
				</p>
			</div>
		</div>
	<?php }?>
</div><?php }
}
