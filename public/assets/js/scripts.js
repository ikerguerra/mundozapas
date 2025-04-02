$(function () {
    // Toggle scroll menu
    var scrollTop = 0;

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        // Hacer visible fondo negro del menu
        if (scroll > 80) {
            if (scroll > scrollTop) {
                $('.smart-scroll').addClass('scrolling').removeClass('up');
            } else {
                $('.smart-scroll').addClass('up');
            }
        } else {
            // Eliminar clase si scroll = scrollTop
            $('.smart-scroll').removeClass('scrolling').removeClass('up');
        }

        scrollTop = scroll;

        return false;
    });
});

document.querySelectorAll('#deleteForm').forEach(form => {
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita el envío del formulario por defecto

        // Comprobar eliminar el producto
        if (!confirm('¿Estás seguro?')) {
            return;
        }

        const formData = new FormData(this);

        fetch(this.action, {
            method: this.method,
            body: formData
        }).then(response => {
            if (response.ok) {
                window.location.reload(); // Recarga la página si la solicitud fue exitosa
            } else {
                alert('Error al eliminar el producto');
            }
        }).catch(error => {
            console.error('Error:', error);
            alert('Error al eliminar el producto');
        });
    });
});

document.querySelectorAll('#deleteImgForm').forEach(form => {
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita el envío del formulario por defecto

        // Comprobar eliminar el producto
        if (!confirm('¿Estás seguro?')) {
            return;
        }

        const formData = new FormData(this);

        fetch(this.action, {
            method: this.method,
            body: formData
        }).then(response => {
            if (response.ok) {
                window.location.reload(); // Recarga la página si la solicitud fue exitosa
            } else {
                alert('Error al eliminar el producto');
            }
        }).catch(error => {
            console.error('Error:', error);
            alert('Error al eliminar el producto');
        });
    });
});

// Script para activar la validación de Bootstrap
(function () {
    'use strict';

    // Obtén todos los formularios que necesitan validación
    var forms = document.querySelectorAll('.needs-validation');

    // Itera sobre ellos y evita el envío si no son válidos
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });
})();

