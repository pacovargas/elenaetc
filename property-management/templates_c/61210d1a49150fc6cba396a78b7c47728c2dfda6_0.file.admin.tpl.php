<?php
/* Smarty version 3.1.30, created on 2017-03-02 16:48:32
  from "/home/paco/repos/elenaetc/property-management/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b83ed0e31b36_51158887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61210d1a49150fc6cba396a78b7c47728c2dfda6' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/admin.tpl',
      1 => 1488469704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b83ed0e31b36_51158887 (Smarty_Internal_Template $_smarty_tpl) {
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
							<th>id</th>
							<th>nombre</th>
							<th>referencia</th>
							<th>provincia</th>
							<th>localidad</th>
							<th>régimen</th>
							<th>precio</th>
							<th>fecha</th>
							<th>activa</th>
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
									<td><?php echo $_smarty_tpl->tpl_vars['prop']->value->id;?>
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
									<td><?php echo $_smarty_tpl->tpl_vars['prop']->value->precio;?>
€</td>
									<td><?php echo $_smarty_tpl->tpl_vars['prop']->value->fecha;?>
</td>
									<td><?php if ($_smarty_tpl->tpl_vars['prop']->value->activa == 1) {?>Sí<?php } else { ?>No<?php }?></td>
									<td>X</td>
									<td><a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
accion=actualizar&propiedad=<?php echo $_smarty_tpl->tpl_vars['prop']->value->id;?>
"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
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
