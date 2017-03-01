<div class="container-fluid cuerpo-admin">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h2 class="mays">Propiedades</h2>
		</div>
	</div>

	<div class="row" id="acciones">
		<div class="col-xs-12 text-right">
			<a href="{$base_url}admin/accion=crear" id="nueva-propiedad">
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
</div>