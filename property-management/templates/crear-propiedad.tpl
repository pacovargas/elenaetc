<div class="container cuerpo-admin" id="plantilla-create">
	{if $errores !== false}
		<div class="row panel error-panel">
			<div class="col-xs-12" id="errores">
				{$errores}
			</div>
		</div>
	{/if}

	<form name="formulario-propiedad" id="formulario-propiedad" method="post" action="{$current_url}">
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
				<input type="hidden" name="id_propiedad" id="id_propiedad" value="{$id_propiedad}" />
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{$nombre}" />
				<input type="text" name="referencia" id="referencia" placeholder="Referencia" value="{$referencia}" />
				<select name="tipo" id="tipo">
					{foreach from=$tipos item=tipo}
						{if $id_tipo && $tipo['id'] === $id_tipo}
							<option value="{$tipo['id']}" selected="selected">{$tipo['nombre']}</option>
						{else}
							<option value="{$tipo['id']}">{$tipo['nombre']}</option>
						{/if}
					{/foreach}
				</select>
				<select name="provincia" id="provincia">
					{foreach from=$provincias item=provincia}
						{if !$id_provincia}
							{if $provincia['nombre'] === 'Cádiz'}
								<option value="{$provincia['id']}" selected="selected">{$provincia['nombre']}</option>
							{else}
								<option value="{$provincia['id']}">{$provincia['nombre']}</option>
							{/if}
						{else}
							{if $provincia['id'] === $id_provincia}
								<option value="{$provincia['id']}" selected="selected">{$provincia['nombre']}</option>
							{else}
								<option value="{$provincia['id']}">{$provincia['nombre']}</option>
							{/if}
						{/if}
					{/foreach}
				</select>
				<select name="municipio" id="municipio"></select>
				<select name="regimen" id="regimen">
					{foreach from=$regimenes item=regimen}
						{if $id_regimen && $regimen['id'] === $id_regimen}
							<option value="{$regimen['id']}" selected="selected">{$regimen['nombre']}</option>
						{else}
							<option value="{$regimen['id']}">{$regimen['nombre']}</option>
						{/if}
					{/foreach}
				</select>
				<input type="text" name="precio" id="precio" placeholder="Precio" value="{$precio}" />
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-right capa-botones">
				<input type="submit" name="accion-formulario" value="{$accion}" class="boton" />
				<input type="button" name="cancelar" id="cancelar" value="volver" class="boton" />
			</div>
		</div>
	</form>


		{if $accion === "actualizar"}
			<div class="row panel">
				<div class="col-xs-12 panel-heading">
					<i class="fa fa-camera" aria-hidden="true"></i> Fotos
				</div>
				{if $fotos}
					<div class="col-xs-12 flex-parent contenedor-fotos">
					{foreach from=$fotos item=foto}
						<div class="foto flex-child">
							<div class="eliminar-foto">
								<a href="{$base_url}admin/accion=eliminar&foto={$foto.id}&propiedad={$foto.propiedad}" class="confirmar" data-confirm-msg="Se va a eliminar la foto"><i class="fa fa-times" aria-hidden="true"></i> Eliminar</a>
							</div>
							<img src="{$base_url}img/propiedades/{$foto.nombre}" />
						</div>
					{/foreach}
					</div>
				{/if}
				<div class="col-xs-12" id="formulario-subir">
					<form enctype="multipart/form-data" action="{$current_url}" method="POST" name="subir-foto" id="subir-foto">
						<p>Subir nueva foto:</p>
						<input name="foto" type="file" />
						<input type="submit" value="subir" class="boton" name="subir" />
					</form>
				</div>
			</div>
		{/if}
</div>

<script type="text/javascript">
	$(function(){
		var municipios = {$municipios|json_encode};
		var id_municipio = {$id_municipio|json_encode};
		
		refrescaMunicipios(municipios, id_municipio);

		$("#provincia").change(function(event) {
			refrescaMunicipios(municipios, id_municipio);
		});

		$("#cancelar").click(function(event) {
			event.preventDefault();
			window.location = "{$base_url}admin/";
		});
	});
</script>