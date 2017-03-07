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
				<form method="post" action="{$current_url}" name="filtros" id="filtros">
					<div class="grupo_filtros">
						Nombre<br />
						<input type="text" name="fnombre" id="fnombre" value="{$fnombre}" />
					</div>
					<div class="grupo_filtros">
						Referencia<br />
						<input type="text" name="freferencia" id="freferencia" value="{$freferencia}" />
					</div>
					<div class="grupo_filtros">
						Tipo<br />
						<select name="ftipo" id="ftipo">
							<option value="0"></option>
							{foreach from=$tipos item=tipo}
								<option value="{$tipo.id}" {if $tipo.id === $ftipo}selected="selected"{/if}>{$tipo.nombre}</option>
							{/foreach}
						</select>
					</div>
					<div class="grupo_filtros">
						Provincia<br />
						<select name="fprovincia" id="fprovincia">
							<option value="0"></option>
							{foreach from=$provincias item=provincia}
								<option value="{$provincia.id}" {if $provincia.id === $fprovincia}selected="selected"{/if}>{$provincia.nombre}</option>
							{/foreach}
						</select>
					</div>
					<div class="grupo_filtros">
						Municipio<br />
						<select name="fmunicipio" id="fmunicipio">
							<option value="0"></option>
							{foreach from=$municipios item=municipio}
								<option value="{$municipio.id}" {if $municipio.id === $fmunicipio}selected="selected"{/if}>{$municipio.nombre}</option>
							{/foreach}
						</select>
					</div>
					<div class="grupo_filtros">
						Régimen<br />
						<select name="fregimen" id="fregimen">
							<option value="0"></option>
							{foreach from=$regimenes item=regimen}
								<option value="{$regimen.id}" {if $regimen.id === $fregimen}selected="selected"{/if}>{$regimen.nombre}</option>
							{/foreach}
						</select>
					</div>
					<div class="grupo_filtros">
						Precio entre<br />
						<input type="text" name="preciomayor" id="preciomayor" value="{$preciomayor}" /> y <input type="text" name="preciomenor" id="preciomenor" value="{$preciomenor}" />
					</div>
					<div class="grupo_filtros grupo_fechas">
						Fecha entre<br />
						<input type="text" name="diamenor" id="diamenor" placeholder="dd" value="{$diamenor}" />/
						<input type="text" name="mesmenor" id="mesmenor" placeholder="mm" value="{$mesmenor}" />/
						<input type="text" name="anomenor" id="anomenor" placeholder="aaaa" value="{$anomenor}" /> y
						<input type="text" name="diamayor" id="diamayor" placeholder="dd" value="{$diamayor}" />/
						<input type="text" name="mesmayor" id="mesmayor" placeholder="mm" value="{$mesmayor}" />/
						<input type="text" name="anomayor" id="anomayor" placeholder="aaaa" value="{$anomayor}" />
					</div>
					<div class="grupo_filtros">
						Activa<br />
						<select name="factiva" id="factiva">
							<option value="1" {if $factiva == '1'}selected="selected"{/if}>Sí</option>
							<option value="0" {if $factiva == '0'}selected="selected"{/if}>No</option>
							<option value="2" {if $factiva == '2'}selected="selected"{/if}>Todas</option>
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
								<a href="{$base_url}admin/orderby=tipo{if $orderby=='tipo'}{if $ascdesc=='asc'}&ascdesc=desc{else}&ascdesc=asc{/if}{/if}">
									tipo
									{if $orderby=='tipo'}
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
							<tr>
								<td class="text-center">{$prop->id}</td>
								<td>{$prop->nombre}</td>
								<td>{$prop->referencia}</td>
								<td>{$prop->nombre_tipo}</td>
								<td>{$prop->nombre_provincia}</td>
								<td>{$prop->nombre_municipio}</td>
								<td>{$prop->nombre_regimen}</td>
								<td class="text-right">{$prop->precio}€</td>
								<td class="text-right">{$prop->fecha}</td>
								<td class="text-center">{if $prop->activa == 1}Sí{else}No{/if}</td>
								<td class="text-center"><a href="{$current_url}accion=actualizar&propiedad={$prop->id}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
								<td class="text-center"><a href="{$current_url}borrar={$prop->id}" class="confirmar" data-confirm-msg="Se va a eliminar la propiedad {$prop->nombre}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
							</tr>
						{/foreach}
						</tbody>
					{/if}
				</table>
			</div>
		</div>
	</div>
</div>