<?php
/* Smarty version 3.1.30, created on 2017-03-06 12:24:59
  from "/home/paco/repos/elenaetc/property-management/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bd470b8ba632_98892011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61210d1a49150fc6cba396a78b7c47728c2dfda6' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/admin.tpl',
      1 => 1488799492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd470b8ba632_98892011 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid cuerpo-admin">
	<div class="row">
		<div class="col-md-2" id="filtros">
			<div class="flex-parent titulo-filtros">
				<div class="flex-child">
					Filtros
				</div>
				<div class="flex-child text-right">
					<a href="#" id="cerrar-filtros">
						<i class="fa fa-angle-double-left" aria-hidden="true"></i>
					</a>					
				</div>
			</div>
			<div id="formulario_filtros">
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" name="filtros" id="filtros">
					<div class="grupo_filtros">
						Nombre<br />
						<input type="text" name="fnombre" id="fnombre" value="<?php echo $_smarty_tpl->tpl_vars['fnombre']->value;?>
" />
					</div>
					<div class="grupo_filtros">
						Referencia<br />
						<input type="text" name="freferencia" id="freferencia" value="<?php echo $_smarty_tpl->tpl_vars['freferencia']->value;?>
" />
					</div>
					<div class="grupo_filtros">
						Provincia<br />
						<select name="fprovincia" id="fprovincia">
							<option value="0"></option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provincias']->value, 'provincia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['provincia']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['provincia']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['provincia']->value['id'] === $_smarty_tpl->tpl_vars['fprovincia']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['provincia']->value['nombre'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
					</div>
					<div class="grupo_filtros">
						Municipio<br />
						<select name="fmunicipio" id="fmunicipio">
							<option value="0"></option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['municipios']->value, 'municipio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['municipio']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['municipio']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['municipio']->value['id'] === $_smarty_tpl->tpl_vars['fmunicipio']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['municipio']->value['nombre'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
					</div>
					<div class="grupo_filtros">
						Régimen<br />
						<select name="fregimen" id="fregimen">
							<option value="0"></option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regimenes']->value, 'regimen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['regimen']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['regimen']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['regimen']->value['id'] === $_smarty_tpl->tpl_vars['fregimen']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['regimen']->value['nombre'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
					</div>
					<div class="grupo_filtros">
						Precio entre<br />
						<input type="text" name="preciomayor" id="preciomayor" value="<?php echo $_smarty_tpl->tpl_vars['preciomayor']->value;?>
" /> y <input type="text" name="preciomenor" id="preciomenor" value="<?php echo $_smarty_tpl->tpl_vars['preciomenor']->value;?>
" />
					</div>
					<div class="grupo_filtros grupo_fechas">
						Fecha entre<br />
						<input type="text" name="diamenor" id="diamenor" placeholder="dd" value="<?php echo $_smarty_tpl->tpl_vars['diamenor']->value;?>
" />/
						<input type="text" name="mesmenor" id="mesmenor" placeholder="mm" value="<?php echo $_smarty_tpl->tpl_vars['mesmenor']->value;?>
" />/
						<input type="text" name="anomenor" id="anomenor" placeholder="aaaa" value="<?php echo $_smarty_tpl->tpl_vars['anomenor']->value;?>
" /> y
						<input type="text" name="diamayor" id="diamayor" placeholder="dd" value="<?php echo $_smarty_tpl->tpl_vars['diamayor']->value;?>
" />/
						<input type="text" name="mesmayor" id="mesmayor" placeholder="mm" value="<?php echo $_smarty_tpl->tpl_vars['mesmayor']->value;?>
" />/
						<input type="text" name="anomayor" id="anomayor" placeholder="aaaa" value="<?php echo $_smarty_tpl->tpl_vars['anomayor']->value;?>
" />
					</div>
					<div class="grupo_filtros">
						Activa<br />
						<select name="factiva" id="factiva">
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['factiva']->value == '1') {?>selected="selected"<?php }?>>Sí</option>
							<option value="0" <?php if ($_smarty_tpl->tpl_vars['factiva']->value == '0') {?>selected="selected"<?php }?>>No</option>
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['factiva']->value == '2') {?>selected="selected"<?php }?>>Todas</option>
						</select>
					</div>
					<div class="grupo_filtros">
						<input type="submit" name="filtrar" id="filtrar" value="filtrar" class="boton" />
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-10" id="tabla-propiedades">
			<div id="capa-cerrar-filtros">
				<a href="#" id="mostrar-filtros">
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</a>
			</div>
			<div class="text-right" id="acciones">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/accion=crear" id="nueva-propiedad">
					<i class="fa fa-plus-circle" aria-hidden="true"></i>
				</a>
			</div>
			<div>
				<table>
					<thead>
						<tr>
							<th>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=id<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'id') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									id
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'id') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a>
							</th>
							<th>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=nombre<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'nombre') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									nombre
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'nombre') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a>
							</th>
							<th>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=referencia<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'referencia') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									referencia
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'referencia') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a>
							</th>
							<th>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=provincia<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'provincia') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									provincia
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'provincia') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a>
							</th>
							<th>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=municipio<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'municipio') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									municipio
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'municipio') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a>
							</th>
							<th>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=regimen<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'regimen') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									régimen
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'regimen') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a>
							</th>
							<th>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=precio<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'precio') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									precio
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'precio') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a>
							</th>
							<th>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=fecha<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'fecha') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									fecha
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'fecha') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a>
							</th>
							<th><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/orderby=activa<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'activa') {
if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'asc') {?>&ascdesc=desc<?php } else { ?>&ascdesc=asc<?php }
}?>">
									activa
									<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'activa') {?>
										<?php if ($_smarty_tpl->tpl_vars['ascdesc']->value == 'desc') {?>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										<?php } else { ?>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										<?php }?>
									<?php }?>
								</a></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<?php if ($_smarty_tpl->tpl_vars['propiedades']->value) {?>
						<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propiedades']->value, 'prop');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prop']->value) {
?>
							<tr>
								<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['prop']->value->id;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['prop']->value->referencia;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre_provincia;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre_municipio;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre_regimen;?>
</td>
								<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['prop']->value->precio;?>
€</td>
								<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['prop']->value->fecha;?>
</td>
								<td class="text-center"><?php if ($_smarty_tpl->tpl_vars['prop']->value->activa == 1) {?>Sí<?php } else { ?>No<?php }?></td>
								<td class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
accion=actualizar&propiedad=<?php echo $_smarty_tpl->tpl_vars['prop']->value->id;?>
"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
								<td class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
borrar=<?php echo $_smarty_tpl->tpl_vars['prop']->value->id;?>
" class="confirmar" data-confirm-msg="Se va a eliminar la propiedad <?php echo $_smarty_tpl->tpl_vars['prop']->value->nombre;?>
"><i class="fa fa-times" aria-hidden="true"></i></a></td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</tbody>
					<?php }?>
				</table>
			</div>
		</div>
	</div>
</div><?php }
}
