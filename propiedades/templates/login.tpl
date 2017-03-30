<div id="fondo-login" class="container-fluid">
    <div class="row">
        <div id="ventana-login" class="col-md-4 col-md-offset-4 text-center">
            <div class="row flex-parent" id="titulo-login">
                <div class="col-xs-4 flex-child">
                    <img src="{$base_url}img/logo.png" alt="ETC" class="img-responsive" />
                </div>
                <div class=" col-xs-8 flex-child">
                    <h1>Iniciar Sesión</h1>
                </div>
            </div>

            <div class="text-center">
                <form id="formulario-login" action="{$base_url}admin/" method="post">
                    <div class="grupo-formulario">
                        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" value="{$user}" />
                    </div>
                    <div class="grupo-formulario">
                        <input type="password" name="password" id="password" placeholder="Contraseña" value="{$passwd}" />
                    </div>
                    <div id="errores-solicitud">
                        {$errors}
                    </div>
                    <input type="submit" name="Entrar" class="boton" value="Entrar" />
                </form>
            </div>
        </div>
    </div>
</div>