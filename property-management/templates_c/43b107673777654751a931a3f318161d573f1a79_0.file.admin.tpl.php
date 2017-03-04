<?php
/* Smarty version 3.1.30, created on 2017-03-05 00:42:35
  from "/Users/paco/repos/elenaetc/property-management/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bb50ebae6004_20523936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43b107673777654751a931a3f318161d573f1a79' => 
    array (
      0 => '/Users/paco/repos/elenaetc/property-management/templates/admin.tpl',
      1 => 1488670941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bb50ebae6004_20523936 (Smarty_Internal_Template $_smarty_tpl) {
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
							<?php if ($_smarty_tpl->tpl_vars['prop']->value->activa == $_smarty_tpl->tpl_vars['mostrar_activas']->value || $_smarty_tpl->tpl_vars['mostrar_activas']->value > 1) {?>
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
							<?php }?>
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
