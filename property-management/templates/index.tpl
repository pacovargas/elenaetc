<div class="container">
	<div class="row text-center">
		<div class="col-xs-12">
			<h2 class="mays champan-bold no-margin-top"><span class="alreves">e</span><span class="gris">tc</span><span class="naranja">.</span> house <span class="naranja">management</span></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2" id="filtros">
			filtros
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