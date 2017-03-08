<?php
/* Smarty version 3.1.30, created on 2017-03-08 23:48:46
  from "/Users/paco/repos/elenaetc/property-management/templates/solicitud.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c08a4e59f3c7_31633355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbcb5d5fe5510345e30328468e062c254841f62e' => 
    array (
      0 => '/Users/paco/repos/elenaetc/property-management/templates/solicitud.tpl',
      1 => 1489013320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c08a4e59f3c7_31633355 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="row text-center">
		<div class="col-xs-12">
			<h2 class="mays champan-bold"><span class="alreves">e</span><span class="gris">tc</span><span class="naranja">.</span> house <span class="naranja">management</span></h2>
		</div>
	</div>

    <div class="row">
        <div class="col-sm-3 hidden-xs mapa">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/mapa.jpg" class="img-responsive" />
        </div>
        <div class="col-sm-7 col-sm-offset-1">
            <form name="solicitud" id="solicitud" method="post" action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">
                <div class="grupo-formulario">
                    <label for="asunto">Asunto</label>
                    <input type="text" name="asunto" id="asunto" class="text-center" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 Referencia nº <?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
" disabled="disabled" />
                </div>
                <div class="grupo-formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" />
                </div>
                <div class="grupo-formulario">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" />
                </div>
                <div class="grupo-formulario">
                    <label for="email">Correo electrónico</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="grupo-formulario">
                    <label for="comentarios">Comentarios</label>
                    <textarea name="comentarios" id="comentarios"></textarea>
                </div>
                <div class="grupo-formulario">
                    <input type="submit" name="enviar" id="enviar" value="Enviar" class="boton" />
                    <button name="volver" id="volver" class="boton">Volver</button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
