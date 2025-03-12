//form 
$(document).ready(function () {
  $("#form_contacto").on("submit", function (e) {
    e.preventDefault();

    let formData = {
      f_nombre: $("#f_nombre").val(),
      f_email: $("#f_email").val(),
      f_tel: $("#f_tel").val(),
      f_servicios: $("#f_servicios").val(),
      f_mensaje: $("#f_mensaje").val()
    };

    if ($("#f_nombre").val() !== "" && $("#f_email").val() !== "" &&
      $("#f_tel").val() !== "" && $("#f_servicios").val() !== "" &&
      $("#f_mensaje").val() !== "") {

      $("#btnEnviar").prop("disabled", true); // Evita múltiples envíos

      // Pasando la ruta base de PHP a JavaScript
      console.log("Enviando a:", BASE_URL + "controllers/ContactoController.php?op=register_contacto");

      console.log(BASE_URL);
      console.log("hola");
      // 1️⃣ REGISTRA EL CONTACTO PRIMERO
      $.ajax({
        url: BASE_URL + "/controllers/ContactoController.php?op=register_contacto",
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
      url: BASE_URL + "/controllers/ContactoController.php?op=send_email",
      type: "POST",
      data: {
        nombre: data.f_nombre,
        correo: data.f_email,
        telefono: data.f_tel,
        servicio: data.f_servicios,
        mensaje: data.f_mensaje
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

//form
$(document).ready(function () {
  // Manejar el envío del formulario del boletín
  $("#form_boletin").on("submit", function (e) {
    e.preventDefault();

    let email = $("#b_email").val();

    if (email !== "") {
      $("#btnEnviarBoletin").prop("disabled", true); // Evita múltiples envíos

      // 1️⃣ REGISTRA EL CORREO EN EL BOLETÍN
      $.ajax({
        url: BASE_URL + "/controllers/ContactoController.php?op=register_email_boletin",
        type: "POST",
        data: { b_email: email },
        dataType: "json",
        success: function (response) {
          if (response.success) {
            Swal.fire({
              icon: "success",
              title: "Registro exitoso",
              text: "Tu correo ha sido registrado en el boletín.",
              confirmButtonColor: "#3085d6"
            });

            // 2️⃣ DESPUÉS ENVÍA EL CORREO DE CONFIRMACIÓN EN SEGUNDO PLANO
            sendEmailBoletin(email);
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: response.message,
              confirmButtonColor: "#d33"
            });
            $("#btnEnviarBoletin").prop("disabled", false);
          }
        },
        error: function () {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Hubo un problema al registrar el correo en el boletín.",
            confirmButtonColor: "#d33"
          });
          $("#btnEnviarBoletin").prop("disabled", false);
        }
      });
    } else {
      Swal.fire({
        icon: "warning",
        title: "Campo vacío",
        text: "Por favor, ingresa tu correo electrónico.",
        confirmButtonColor: "#d33"
      });
    }
  });

  /* Enviar el correo en segundo plano */
  function sendEmail(data) {
    $.ajax({
      url: BASE_URL + "/controllers/ContactoController.php?op=send_email",
      type: "POST",
      data: {
        nombre: data.f_nombre,
        correo: data.f_email,
        telefono: data.f_tel,
        servicio: data.f_servicios,
        mensaje: data.f_mensaje
      },
      dataType: "json",
      success: function (response) {
        console.log("Respuesta del servidor:", response);
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

  /* Enviar el correo de confirmación del boletín en segundo plano */
  function sendEmailBoletin(email) {
    $.ajax({
      url: BASE_URL + "/controllers/ContactoController.php?op=send_email_boletin",
      type: "POST",
      data: { b_email: email },
      dataType: "json",
      success: function (response) {
        console.log("Respuesta del servidor:", response);
      },
      error: function (xhr, status, error) {
        console.error("Error al enviar el correo de boletín:", xhr.responseText);
      },
      complete: function () {
        $("#btnEnviarBoletin").prop("disabled", false);
        $("#b_email").val(""); // Limpia el campo de correo
      }
    });
  }
});


 
// Código para insertar el video de fondo en el header
document.addEventListener('DOMContentLoaded', function() {
    // Obtener la página actual basada en el atributo aria-current
    const currentPageItem = document.querySelector('.breadcrumb-item.active');
    if (!currentPageItem) return;
    
    const currentPage = currentPageItem.getAttribute('aria-current');
    const headerContainer = document.getElementById('page-header-container');
    
    // Determinar qué video mostrar según la página
    let videoSource = '';
    switch(currentPage) {
        case 'nosotros':
            videoSource = '../assets/videos/nosotros.mp4';
            break;
        case 'servicios':
            videoSource = '../assets/videos/servicios.mp4';
            break;
        case 'contactanos':
            videoSource = '../assets/videos/contactanos.mp4';
            break;
        default:
            // Si no es ninguna de las páginas específicas, no hacemos nada
            return;
    }
    
    // Crear el elemento de video
    const video = document.createElement('video');
    video.className = 'page-header-video';
    video.autoplay = true;
    video.loop = true;
    video.muted = true;
    video.playsInline = true;
    
    // Agregar la fuente del video
    const source = document.createElement('source');
    source.src = videoSource;
    source.type = 'video/mp4';
    video.appendChild(source);
    
    // Insertar el video como primer hijo del contenedor
    headerContainer.insertBefore(video, headerContainer.firstChild);
    
    console.log('Video de fondo insertado:', videoSource);
});
 

// Función para cambiar el navbar cuando se hace scroll
document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.querySelector('.navbar.sticky-top');
  const topbar = document.querySelector('.container-fluid.bg-light.p-0.navbar-color-fondo');
  
  // Agregar clase 'transparent' al cargar la página
  navbar.classList.add('transparent');
  if (topbar) topbar.classList.add('transparent');
  
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
          // Si el scroll es mayor a 50px, cambiar a negro sólido
          navbar.classList.remove('transparent');
          navbar.classList.add('solid');
          
          if (topbar) {
              topbar.classList.remove('transparent');
              topbar.classList.add('solid');
          }
      } else {
          // Si el scroll es menor a 50px, volver a transparente
          navbar.classList.add('transparent');
          navbar.classList.remove('solid');
          
          if (topbar) {
              topbar.classList.add('transparent');
              topbar.classList.remove('solid');
          }
      }
  });
});