<div class="container">
	<div class="row text-center">
		<div class="col-xs-12">
			<h2 class="mays champan-bold"><span class="alreves">e</span><span class="gris">tc</span><span class="naranja">.</span> house <span class="naranja">management</span></h2>
		</div>
	</div>

    <div class="row">
        <div class="col-sm-3 hidden-xs mapa">
            <img src="{$base_url}img/mapa.jpg" class="img-responsive" />
        </div>
        <div class="col-sm-7 col-sm-offset-1">
            {if $errores}
	            <div class="error">
	            	{$errores}
	            </div>
            {/if}
            {if $exito}
            	<div class="exito">
            		{$exito}
            	</div>
            {/if}
            <form name="solicitud" id="solicitud" method="post" action="{$current_url}">
                <div class="grupo-formulario">
                    <label for="asunto">Asunto</label>
                    <input type="text" name="asunto" id="asunto" class="text-center" value="{$prop} Referencia nº {$ref}" disabled="disabled" />
                </div>
                <div class="grupo-formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{$nombre}" />
                </div>
                <div class="grupo-formulario">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" value="{$telefono}" />
                </div>
                <div class="grupo-formulario">
                    <label for="email">Correo electrónico</label>
                    <input type="text" name="email" id="email" value="{$email}" />
                </div>
                <div class="grupo-formulario">
                    <label for="comentarios">Comentarios</label>
                    <textarea name="comentarios" id="comentarios">{$comentarios}</textarea>
                </div>
                <div class="grupo-formulario">
                    <input type="submit" name="enviar" id="enviar" value="Enviar" class="boton" />
                    <button name="volver" id="volver" class="boton" data-url="{$base_url}">Volver</button>
                </div>
            </form>
        </div>
    </div>
</div>