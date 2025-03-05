$(document).ready(function () {
    // Asegura que solo se pueda seleccionar un checkbox a la vez
    $('input[type="checkbox"]').on('change', function () {
        $('input[type="checkbox"]').not(this).prop('checked', false);
    });

    $("#form_contacto").on("submit", function (e) {
        e.preventDefault();

        let formData = {
            f_nombre: $("#f_nombre").val(),
            f_email: $("#f_email").val(),
            f_tel: $("#f_tel").val(),
            f_servicios: $('input[type="checkbox"]:checked').val(),
            // f_mensaje: $("#f_mensaje").val() // Descomenta si vuelves a habilitar el campo de mensaje
        };

        if ($("#f_nombre").val() !== "" && $("#f_email").val() !== "" &&
            $("#f_tel").val() !== "" && formData.f_servicios !== undefined) {

            $("#btnEnviar").prop("disabled", true); // Evita múltiples envíos

            // 1️⃣ REGISTRA EL CONTACTO PRIMERO
            $.ajax({
                url: "../controllers/ContactoController.php?op=register_contacto",
                type: "POST",
                data: formData,
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        Swal.fire({
                            icon: "success",
                            title: "Registro exitoso",
                            text: "Tu solicitud ha sido registrada correctamente.",
                            confirmButtonColor: "#3085d6"
                        });

                        // 2️⃣ DESPUÉS ENVÍA EL CORREO EN SEGUNDO PLANO
                        sendEmail(formData);
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: response.message,
                            confirmButtonColor: "#d33"
                        });
                        $("#btnEnviar").prop("disabled", false);
                    }
                },
                error: function () {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Hubo un problema al registrar el formulario.",
                        confirmButtonColor: "#d33"
                    });
                    $("#btnEnviar").prop("disabled", false);
                }
            });
        } else {
            Swal.fire({
                icon: "warning",
                title: "Campos incompletos",
                text: "Por favor, complete todos los campos requeridos.",
                confirmButtonColor: "#d33"
            });
        }
    });

    /* Enviar el correo en segundo plano */
    function sendEmail(data) {
        console.log("Enviando correo con datos:", data); // Verifica qué se está enviando

        $.ajax({
            url: "../controllers/ContactoController.php?op=send_email",
            type: "POST",
            data: {
                nombre: data.f_nombre,
                correo: data.f_email,
                telefono: data.f_tel,
                servicio: data.f_servicios,
                // mensaje: data.f_mensaje // Descomenta si vuelves a habilitar el campo de mensaje
            },
            dataType: "json",
            success: function (response) {
                console.log("Respuesta del servidor:", response); // Verifica si el correo se envió bien
            },
            error: function (xhr, status, error) {
                console.error("Error al enviar el correo:", xhr.responseText);
            },
            complete: function () {
                $("#btnEnviar").prop("disabled", false);
                $("#form_contacto")[0].reset(); // Limpia el formulario
            }
        });
    }
});
