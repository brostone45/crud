<div class="container">
        <div class="container mt-3">
            <h2>practica</h2>
            <table id="tablaUsuarios" class="table table-bordered">
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>direccion</th>
                        <th>documento</th>
                        <th>Email</th>
                        <th>telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ventanaRegistrarUsuarios">
            Open modal
        </button>

        <!-- The Modal -->
        <div class="modal" id="ventanaRegistrarUsuarios">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="POST" id="formRegistroUsuarios" class="needs-validation" novalidate>
                            <div class="mb-3 mt-3">
                                <label for="txt-nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="txt-nombre" placeholder="Ingrese nombre"
                                    name="txt-nombre" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3">
                                <label for="txt-apellido" class="form-label">Apellido:</label>
                                <input type="text" class="form-control" id="txt-apellido" placeholder="Ingrese apellido"
                                    name="txt-apellido" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="txt-direccion" class="form-label">Dirección:</label>
                                <input type="text" class="form-control" id="txt-direccion"
                                    placeholder="Ingrese dirección" name="txt-direccion" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3">
                                <label for="txt-documento" class="form-label">Documento:</label>
                                <input type="text" class="form-control" id="txt-documento"
                                    placeholder="Ingrese documento" name="txt-documento" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="txt-email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="txt-email" placeholder="Ingrese email"
                                    name="txt-email" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3">
                                <label for="txt-telefono" class="form-label">Teléfono:</label>
                                <input type="text" class="form-control" id="txt-telefono" placeholder="Ingrese teléfono"
                                    name="txt-telefono" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!-- The Modal -->
        <div class="modal" id="ventanaEditarUsuarios">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="POST" id="formEditarUsuarios" class="needs-validation" novalidate>
                            <div class="mb-3 mt-3">
                                <label for="txt-editnombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="txt-editnombre" placeholder="Ingrese nombre"
                                    name="txt-editnombre" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3">
                                <label for="txt-editapellido" class="form-label">Apellido:</label>
                                <input type="text" class="form-control" id="txt-editapellido"
                                    placeholder="Ingrese apellido" name="txt-editapellido" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="txt-editdireccion" class="form-label">Dirección:</label>
                                <input type="text" class="form-control" id="txt-editdireccion"
                                    placeholder="Ingrese dirección" name="txt-editdireccion" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3">
                                <label for="txt-editdocumento" class="form-label">Documento:</label>
                                <input type="text" class="form-control" id="txt-editdocumento"
                                    placeholder="Ingrese documento" name="txt-editdocumento" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="txt-editemail" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="txt-editemail" placeholder="Ingrese email"
                                    name="txt-editemail" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <div class="mb-3">
                                <label for="txt-edittelefono" class="form-label">Teléfono:</label>
                                <input type="text" class="form-control" id="txt-edittelefono"
                                    placeholder="Ingrese teléfono" name="txt-edittelefono" required>
                                <div class="valid-feedback">Válido.</div>
                                <div class="invalid-feedback">Por favor llene este campo.</div>
                            </div>
                            <input type="hidden" name="idUsuario" id="idUsuario">
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>