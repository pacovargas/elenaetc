<?php
/* Smarty version 3.1.30, created on 2017-03-09 12:34:28
  from "/home/paco/repos/elenaetc/property-management/templates/solicitud.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c13dc49d1099_56522810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3755efc2cc321c8ef3bcac9abbf34f71d2803e5' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/solicitud.tpl',
      1 => 1489059233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c13dc49d1099_56522810 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php if ($_smarty_tpl->tpl_vars['errores']->value) {?>
	            <div class="error">
	            	<?php echo $_smarty_tpl->tpl_vars['errores']->value;?>

	            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['exito']->value) {?>
            	<div class="exito">
            		<?php echo $_smarty_tpl->tpl_vars['exito']->value;?>

            	</div>
            <?php }?>
            <form name="solicitud" id="solicitud" method="post" action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">
                <div class="grupo-formulario">
                    <label for="asunto">Asunto</label>
                    <input type="text" name="asunto" id="asunto" class="text-center" value="<?php echo $_smarty_tpl->tpl_vars['prop']->value;?>
 Referencia nº <?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
" disabled="disabled" />
                </div>
                <div class="grupo-formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" />
                </div>
                <div class="grupo-formulario">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
" />
                </div>
                <div class="grupo-formulario">
                    <label for="email">Correo electrónico</label>
                    <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
                </div>
                <div class="grupo-formulario">
                    <label for="comentarios">Comentarios</label>
                    <textarea name="comentarios" id="comentarios"><?php echo $_smarty_tpl->tpl_vars['comentarios']->value;?>
</textarea>
                </div>
                <div class="grupo-formulario">
                    <input type="submit" name="enviar" id="enviar" value="Enviar" class="boton" />
                    <button name="volver" id="volver" class="boton" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Volver</button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
