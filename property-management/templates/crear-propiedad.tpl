<div class="container cuerpo-admin">
	<form name="formulario-propiedad" id="formulario-propiedad">
		<div class="row panel">
			<div class="col-xs-12 panel-heading">
				<i class="fa fa-file-text" aria-hidden="true"></i> Datos
			</div>
			<div class="col-md-4 text-right etiquetas hidden-xs">
				<label for="nombre">Nombre</label>
				<label for="referencia">Referencia</label>
				<label for="provincia">Provincia</label>
				<label for="municipio">Municipio</label>
				<label for="régimen">Régimen</label>
				<label for="precio">Precio</label>
			</div>
			<div class="col-md-6 campos">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" />
				<input type="text" name="referencia" id="referencia" placeholder="Referencia" />
				<select name="provincia" id="provincia">
					{foreach from=$provincias item=provincia}
						{if $provincia['nombre'] === 'Cádiz'}
							<option value="{$provincia['id']}" selected="selected">{$provincia['nombre']}</option>
						{else}
							<option value="{$provincia['id']}">{$provincia['nombre']}</option>
						{/if}
					{/foreach}
				</select>
				<select name="municipio" id="municipio"></select>
				<select name="regimen" id="regimen">
					{foreach from=$regimenes item=regimen}
						<option value="{$regimen['id']}">{$regimen['nombre']}</option>
					{/foreach}
				</select>
				<input type="text" name="precio" id="precio" placeholder="Precio" />
			</div>
		</div>

		<div class="row panel">
			<div class="col-xs-12 panel-heading">
				<i class="fa fa-camera" aria-hidden="true"></i> Fotos
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-right capa-botones">
				<input type="submit" name="enviar" value="Enviar" class="boton" />	
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$(function(){
		var municipios = {$municipios|json_encode};
		
		refrescaMunicipios(municipios);

		$("#provincia").change(function(event) {
			refrescaMunicipios(municipios);
		});
	});
</script>