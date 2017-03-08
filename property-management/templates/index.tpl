<script type="text/javascript">
	var municipios = {$municipios|json_encode}
	var id_municipio = {$id_municipio|json_encode}
</script>

<div class="container">
	<div class="row text-center">
		<div class="col-xs-12">
			<h2 class="mays champan-bold no-margin-top"><span class="alreves">e</span><span class="gris">tc</span><span class="naranja">.</span> house <span class="naranja">management</span></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2" id="filtros">
			<form id="filtros" method="post" action="{$current_url}" name="filtros">
				<h3 class="champan-bold naranja no-margin-top">Filtros</h3>
				<div class="grupo-filtros">
					<label for="tipo">Tipo</label>
					<select name="tipo" id="tipo">
						<option value="0"></option>
						{foreach from=$tipos item=tipo}
							<option value="{$tipo.id}" {if $tipo.id == $id_tipo}selected="selected"{/if}>{$tipo.nombre}</option>
						{/foreach}
					</select>
				</div>
				<div class="grupo-filtros">
					<label for="regimen">Régimen</label>
					<select name="regimen" id="regimen">
						<option value="0"></option>
						{foreach from=$regimenes item=regimen}
							<option value="{$regimen.id}" {if $regimen.id == $id_regimen}selected="selected"{/if}>{$regimen.nombre}</option>
						{/foreach}
					</select>
				</div>
				<div class="grupo-filtros">
					<label for="provincia">Provincia</label>
					<select name="provincia" id="provincia">
						<option value="0"></option>
						{foreach from=$provincias item=provincia}
							<option value="{$provincia.id}" {if $provincia.id == $id_provincia}selected="selected"{/if}>{$provincia.nombre}</option>
						{/foreach}
					</select>
				</div>
				<div class="grupo-filtros">
					<label for="municipio">Localidad</label>
					<select name="municipio" id="municipio"></select>
				</div>
				<div class="grupo-filtros">
					<input type="submit" name="filtrar" id="filtrar" value="Aplicar filtros" class="boton" />
				</div>
			</form>
		</div>
		<div class="col-sm-10" id="propiedades">
			{foreach from=$propiedades item=prop}
				<div class="row fila-datos">
					<div class="col-sm-7 carrusel-fotos">
						{if $prop->fotos}
							{foreach from=$prop->fotos item=foto}
								<div class="foto">
									<a href="{$base_url}img/propiedades/{$foto.nombre}" data-fancybox data-caption="">
										<img src="{$base_url}img/propiedades/{$foto.nombre}" class="img-responsive" />
									</a>
								</div>
							{/foreach}
						{/if}
					</div>
					<div class="col-sm-5 datos">
						<h3 class="champan-bold naranja no-margin-top">{$prop->nombre}</h3>
						<p>Referencia nº {$prop->referencia}</p>
						<p class="capital">{$prop->nombre_tipo}</p>
						<p>{$prop->nombre_municipio} ({$prop->nombre_provincia})</p>
						<p class="capital">{$prop->nombre_regimen}</p>
						<p>{$prop->precio_formateado} Euros</p>
						<div class="enlaces-datos flex-parent">
							<div class="sobre flex-child"><a href="#" class="negro"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>
							<div class="enlace-info naranja flex-child"><a href="#">solicitud de información</a></div>
							{if $prop->doc}
								<div class="enlace-docu naranja flex-child"><a class="naranja" href="{$base_url}docs/{$prop->doc.nombre}"><i class="fa fa-file-text" aria-hidden="true"></i></a></div>
							{/if}
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>