<?php
/* Smarty version 3.1.30, created on 2017-03-01 11:04:01
  from "/home/paco/repos/elenaetc/property-management/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b69c91b5f318_82868519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8403825bdbf93ecae3e2d83bf21c684de98f6eca' => 
    array (
      0 => '/home/paco/repos/elenaetc/property-management/templates/login.tpl',
      1 => 1488362628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b69c91b5f318_82868519 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="fondo-login" class="container-fluid">
    <div class="row">
        <div id="ventana-login" class="col-md-4 col-md-offset-4 text-center">
            <div class="row flex-parent" id="titulo-login">
                <div class="col-xs-4 flex-child">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/logo.png" alt="ETC" class="img-responsive" />
                </div>
                <div class=" col-xs-8 flex-child">
                    <h1>Iniciar Sesión</h1>
                </div>
            </div>

            <div class="text-center">
                <form id="formulario-login" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/" method="post">
                    <div class="grupo-formulario">
                        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" />
                    </div>
                    <div class="grupo-formulario">
                        <input type="password" name="password" id="password" placeholder="Contraseña" value="<?php echo $_smarty_tpl->tpl_vars['passwd']->value;?>
" />
                    </div>
                    <div id="errores-solicitud">
                        <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

                    </div>
                    <input type="submit" name="Entrar" class="boton" value="Entrar" />
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
