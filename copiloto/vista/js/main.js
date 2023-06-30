$(function () {
    var tabla = null;
    listarUsuarios();

    'use strict';

    var forms = document.querySelectorAll('#formRegistroUsuarios')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    form.classList.add('was-validated')
                } else {
                    event.preventDefault();

                    var nombre = $("#txt-nombre").val();
                    var apellido = $("#txt-apellido").val();
                    var direccion = $("#txt-direccion").val();
                    var documento = $("#txt-documento").val();
                    var email = $("#txt-email").val();
                    var telefono = $("#txt-telefono").val();

                    var objData = new FormData();
                    objData.append("regNombre", nombre);
                    objData.append("regApellido", apellido);
                    objData.append("regDireccion", direccion);
                    objData.append("regDocumento", documento);
                    objData.append("regEmail", email);
                    objData.append("regTelefono", telefono);


                    fetch('control/usuarioControl.php', {
                        method: 'POST',
                        body: objData
                    }).then(response => response.json()).catch(error => {
                        console.log(error);
                    }).then(response => {
                        alert(response["mensaje"]);
                    });

                }
            }, false)
        })

    var formEdicion = document.querySelectorAll('#formEditarUsuarios');

    Array.prototype.slice.call(formEdicion)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    form.classList.add('was-validated')
                } else {
                    event.preventDefault();

                    var idusuario = $("#idUsuario").val();
                    var nombre = $("#txt-editnombre").val();
                    var apellido = $("#txt-editapellido").val();
                    var direccion = $("#txt-editdireccion").val();
                    var documento = $("#txt-editdocumento").val();
                    var email = $("#txt-editemail").val();
                    var telefono = $("#txt-edittelefono").val();

                    var objData = new FormData();
                    objData.append("editIdUsuario", idusuario);
                    objData.append("editNombre", nombre);
                    objData.append("editApellido", apellido);
                    objData.append("editDireccion", direccion);
                    objData.append("editDocumento", documento);
                    objData.append("editEmail", email);
                    objData.append("editTelefono", telefono);


                    fetch('control/usuarioControl.php', {
                        method: 'POST',
                        body: objData
                    }).then(response => response.json()).catch(error => {
                        console.log(error);
                    }).then(response => {
                        alert(response["mensaje"]);
                    });

                }
            }, false)
        })


    function listarUsuarios() {

        var objData = new FormData();
        objData.append("listarUsuarios", "ok");

        fetch('control/usuarioControl.php', {
            method: 'POST',
            body: objData
        }).then(response => response.json()).catch(error => {
            console.log(error);
        }).then(response => {
            cargarDatos(response);
        });
    }


    function cargarDatos(response) {
        var dataSet = [];

        response.forEach(listarDatos);

        function listarDatos(item, index) {
            var objBotones = '<div class="btn-group">';
            objBotones += '<button id="btnEditar" type="button" class="btn btn-warning" idusuario="' + item.idUsuario + '" nombre="' + item.nombre + '" apellido="' + item.apellido + '" direccion="' + item.direccion + '" documento="' + item.documento + '" email="' + item.email + '" telefono="' + item.telefono + '" data-bs-toggle="modal" data-bs-target="#ventanaEditarUsuarios">Editar</button>';
            objBotones += '<button id="btnBorrar" type="button" class="btn btn-danger" idusuario="' + item.idusuario + '">Eliminar</button>';
            objBotones += '</div>';

            dataSet.push([item.nombre, item.apellido, item.direccion, item.documento, item.email, item.telefono, objBotones]);
        }
        if (tabla != null ){
            $("#tablaUsuarios").DataTable({
                data: dataSet
        tabla = $("#tablaUsuarios").DataTable({
            data: dataSet
        });
    }

    $("#tablaUsuarios").on("click", "#btnEditar", function () {
        var idUsuario = $(this).attr('idusuario');
        var nombre = $(this).attr('nombre');
        var apellido = $(this).attr('apellido');
        var direccion = $(this).attr('direccion');
        var documento = $(this).attr('documento');
        var email = $(this).attr('email');
        var telefono = $(this).attr('telefono');


        $("#txt-editnombre").val(nombre);
        $("#txt-editapellido").val(apellido);
        $("#txt-editdireccion").val(direccion);
        $("#txt-editdocumento").val(documento);
        $("#txt-editemail").val(email);
        $("#txt-edittelefono").val(telefono);
        $("#idUsuario").val(idUsuario);
    })

})