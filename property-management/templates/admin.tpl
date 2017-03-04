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
				<a href="{$base_url}admin/accion=crear" id="nueva-propiedad">
					<i class="fa fa-plus-circle" aria-hidden="true"></i>
				</a>
			</div>
			<div>
				<table>
					<thead>
						<tr>
							<th>
								<a href="{$base_url}admin/orderby=id{if $orderby=='id'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									id
									{if $orderby=='id'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a>
							</th>
							<th>
								<a href="{$base_url}admin/orderby=nombre{if $orderby=='nombre'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									nombre
									{if $orderby=='nombre'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a>
							</th>
							<th>
								<a href="{$base_url}admin/orderby=referencia{if $orderby=='referencia'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									referencia
									{if $orderby=='referencia'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a>
							</th>
							<th>
								<a href="{$base_url}admin/orderby=provincia{if $orderby=='provincia'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									provincia
									{if $orderby=='provincia'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a>
							</th>
							<th>
								<a href="{$base_url}admin/orderby=municipio{if $orderby=='municipio'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									municipio
									{if $orderby=='municipio'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a>
							</th>
							<th>
								<a href="{$base_url}admin/orderby=regimen{if $orderby=='regimen'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									régimen
									{if $orderby=='regimen'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a>
							</th>
							<th>
								<a href="{$base_url}admin/orderby=precio{if $orderby=='precio'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									precio
									{if $orderby=='precio'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a>
							</th>
							<th>
								<a href="{$base_url}admin/orderby=fecha{if $orderby=='fecha'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									fecha
									{if $orderby=='fecha'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a>
							</th>
							<th><a href="{$base_url}admin/orderby=activa{if $orderby=='activa'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									activa
									{if $orderby=='activa'}
										{if $ascdesc=='desc'}
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										{else}
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										{/if}
									{/if}
								</a></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					{if $propiedades}
						<tbody>
						{foreach from=$propiedades item=prop}
							{if $prop->activa == $mostrar_activas || $mostrar_activas > 1}
								<tr>
									<td class="text-center">{$prop->id}</td>
									<td>{$prop->nombre}</td>
									<td>{$prop->referencia}</td>
									<td>{$prop->nombre_provincia}</td>
									<td>{$prop->nombre_municipio}</td>
									<td>{$prop->nombre_regimen}</td>
									<td class="text-right">{$prop->precio}€</td>
									<td class="text-right">{$prop->fecha}</td>
									<td class="text-center">{if $prop->activa == 1}Sí{else}No{/if}</td>
									<td class="text-center"><a href="{$current_url}accion=actualizar&propiedad={$prop->id}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
									<td class="text-center"><a href="{$current_url}borrar={$prop->id}" class="confirmar" data-confirm-msg="Se va a eliminar la propiedad {$prop->nombre}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								</tr>
							{/if}
						{/foreach}
						</tbody>
					{/if}
				</table>
			</div>
		</div>
	</div>
</div>