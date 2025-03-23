<div class="modal fade" id="modalLogin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="flat-account bg-surface">
                <h3 class="title text-center">Inicio de Sesión</h3>

                <li class="flag-tag success" id="msg_login">Correo Electronico o Contraseña Incorrecta</li>

                <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                <form method="post" id="mnt_login">
                    <fieldset class="box-fieldset" >
                        <label for="name">Correo:<span>*</span></label>
                        <input type="email" class="form-contact style-1" id="usu_email" name="usu_email" placeholder="Ingresa tu Correo" required>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="pass">Contraseña:<span>*</span></label>
                        <div class="box-password">
                            <input type="password" class="form-contact style-1 password-field" id="usu_pass" name="usu_pass" placeholder="Ingresar tu Contraseña" required>
                            <span class="show-pass">
                                <i class="icon-pass icon-eye"></i>
                                <i class="icon-pass icon-eye-off"></i>
                            </span>
                        </div>
                    </fieldset>
                    <div class="d-flex justify-content-between flex-wrap gap-12">
                        <fieldset class="d-flex align-items-center gap-6">
                            <input type="checkbox" class="tf-checkbox style-2" id="cb1">
                            <label for="cb1" class="caption-1 text-variant-1">Recuérdame</label>
                        </fieldset>
                        <a href="#" class="caption-1 text-primary">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="text-variant-1 auth-line">o regístrate con</div>
                    <div class="login-social">
                        <a href="#" class="btn-login-social">
                            <img src="assets/images/logo/google.png" alt="img">
                            Continuar con Google
                        </a>
                    </div>
                    <button type="submit" class="tf-btn primary w-100">Iniciar Sesión</button>
                    <div class="mt-12 text-variant-1 text-center noti">¿Aún no estás registrado?<a href="#modalRegister" data-bs-toggle="modal" class="text-black fw-5">Regístrate</a> </div>
                </form>
            </div>
        </div> 
    </div>
</div>