
//banner del 1 al 500  
let count = 0;
let interval = setInterval(() => {
    if (count < 500) {
        count+=10;
        document.getElementById("counter").textContent = "Más de " + count + " clientes satisfechos";
    } else {
        clearInterval(interval);
    }
}, 10); // Velocidad de la animación (10ms para ser fluida)
 


//sliders de servicios
document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar todos los contenedores de carruseles
    const sliderContainers = document.querySelectorAll('.slider-container');

    sliderContainers.forEach((container, index) => {
        let currentIndex = 0;
        const sliderTrack = container.querySelector('.slider-track');
        const sliderItems = container.querySelectorAll('.slider-track img');
        const itemWidth = sliderItems[0].clientWidth + 20; // Incluye el margen

        function moveSlider(direction) {
            currentIndex = Math.max(0, Math.min(sliderItems.length - 3, currentIndex + direction));
            sliderTrack.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
        }

        function openPreview(img) {
            const previewOverlay = document.getElementById(`previewOverlay-${index}`);
            const previewImage = previewOverlay.querySelector('.preview-image');
            previewImage.src = img.src;
            previewOverlay.style.display = 'flex';

            // Añadir evento de tecla Escape
            document.addEventListener('keydown', handleEscapeKey);
        }

        function closePreview() {
            const previewOverlay = document.getElementById(`previewOverlay-${index}`);
            previewOverlay.style.display = 'none';

            // Remover evento de tecla Escape
            document.removeEventListener('keydown', handleEscapeKey);
        }

        function handleEscapeKey(event) {
            if (event.key === 'Escape') {
                closePreview();
            }
        }

        // Asignar eventos a los botones del carrusel
        const leftButton = container.querySelector('.slider-button.left');
        const rightButton = container.querySelector('.slider-button.right');
        leftButton.addEventListener('click', () => moveSlider(-1));
        rightButton.addEventListener('click', () => moveSlider(1));

        // Asignar eventos a las imágenes del carrusel
        sliderItems.forEach(img => {
            img.addEventListener('click', () => openPreview(img));
        });

        // Asegurarse de que cada carrusel tenga su propio contenedor de vista previa
        const previewOverlay = document.createElement('div');
        previewOverlay.id = `previewOverlay-${index}`;
        previewOverlay.classList.add('preview-overlay');
        previewOverlay.innerHTML = `
        <span class="close-btn">&times;</span>
        <img class="preview-image" src="" alt="Vista previa">
    `;
        document.body.appendChild(previewOverlay);

        // Asignar evento de cierre al botón de cerrar
        previewOverlay.querySelector('.close-btn').addEventListener('click', closePreview);
        previewOverlay.addEventListener('click', closePreview);
        previewOverlay.querySelector('.preview-image').addEventListener('click', event => event.stopPropagation());

        // Inicializar el carrusel
        sliderItems.forEach(img => {
            img.onload = function () {
                const itemWidth = img.clientWidth + 20;
            }
        });
    });
});
