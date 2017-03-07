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
						datos
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>