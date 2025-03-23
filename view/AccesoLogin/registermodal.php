<div class="modal fade" id="modalRegister">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="flat-account bg-surface">
                <h3 class="title text-center">Registrar</h3>

                <li class="flag-tag success" id="msg_register">El Correo Electronico Ya Existe.</li>

                <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                <form method="post" id="mnt_register">
                    <fieldset class="box-fieldset">
                        <label for="name">DNI:<span></span></label>
                        <input type="text" id="usu_dni_register" name="usu_dni_register" class="form-contact style-1" placeholder="Su DNI" required>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="name">Nombre Completo:<span></span></label>
                        <input type="text" id="usu_nom_register" name="usu_nom_register" class="form-contact style-1" placeholder="Su Nombre Completo" required>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="name">Apellido Completo:<span></span></label>
                        <input type="text" id="usu_ape_register" name="usu_ape_register" class="form-contact style-1" placeholder="Su Apellido Completo" required>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="name">Dirección de correo electrónico:<span></span></label>
                        <input type="email" id="usu_email_register" name="usu_email_register" class="form-contact style-1" placeholder="Dirección de Email" required>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="pass">Contraseña:<span>*</span></label>
                        <div class="box-password">
                            <input type="password" id="usu_pass_register" name="usu_pass_register"   class="form-contact style-1 password-field" placeholder="Ingrese Contraseña" required>
                            <span class="show-pass">
                                <i class="icon-pass icon-eye"></i>
                                <i class="icon-pass icon-eye-off"></i>
                            </span>
                        </div>
                    </fieldset>
                    <div class="text-variant-1 auth-line">o regístrate con</div>
                        <div class="login-social">
                            <a href="#" class="btn-login-social">
                                <img src="assets/images/logo/google.png" alt="img">
                                Registrarte con Google
                            </a>
                    </div>
                    <br>
                    <fieldset class="d-flex align-items-center gap-6">
                        <input type="checkbox" class="tf-checkbox style-2" id="cb1">
                        <label for="cb1" class="caption-1 text-variant-1">Acepto los <span class="fw-5 text-black">Términos de Usuario</span></label>
                    </fieldset>
                    <button type="submit" class="tf-btn primary w-100">Registrar</button>
                    <div class="mt-12 text-variant-1 text-center noti">¿Ya tienes una cuenta?<a href="#modalLogin" data-bs-toggle="modal" class="text-black fw-5">Inicia sesión aquí</a> </div>
                </form>
            </div>
        </div> 
    </div>
</div>