<div class="container mt-1 mb-1 d-flex justify-content-center">
    <!-- Formulario de Registro -->
    <div class="container container-form w-75 rounded shadow bg-white text-dark">
        <div class="row align-items-stretch">
            <div class="col p-5 bg-white rounded-end">
                <h2 class="fw-bold text-center py-5">Regístrate</h2>

                <form action="#" novalidate>
                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control custom-input" id="nombre" required>
                        <div class="invalid-feedback">
                            Por favor ingrese su nombre.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control custom-input" id="apellido" required>
                        <div class="invalid-feedback">
                            Por favor ingrese su apellido.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" class="form-control custom-input" id="usuario" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un nombre de usuario.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control custom-input" id="password" required>
                        <div class="invalid-feedback">
                            Por favor ingrese una contraseña.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" class="form-control custom-input" id="email" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un correo electrónico válido.
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary me-2">Registrarse</button>
                        <button type="button" class="btn btn-secondary">Cancelar</button>
                    </div>

                    <div class="my-3 text-center">
                        <span>¿Ya tienes cuenta? <a href="<?php echo base_url('login'); ?>">Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
