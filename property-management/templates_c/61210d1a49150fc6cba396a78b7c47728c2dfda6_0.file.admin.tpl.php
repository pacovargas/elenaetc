<?php
/* Smarty version 3.1.30, created on 2017-03-01 13:49:12
  from "/home/paco/repos/elenaetc/property-management/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b6c348c85224_30355044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61210d1a49150fc6cba396a78b7c47728c2dfda6' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/admin.tpl',
      1 => 1488372545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b6c348c85224_30355044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid cuerpo-admin">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h2 class="mays">Propiedades</h2>
		</div>
	</div>

	<div class="row" id="acciones">
		<div class="col-xs-12 text-right">
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/accion=crear" id="nueva-propiedad">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</div>
	</div>

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
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div><?php }
}
