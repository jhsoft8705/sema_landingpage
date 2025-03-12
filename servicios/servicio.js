
//banner del 1 al 500  
let count = 0;
let interval = setInterval(() => {
    if (count < 5000) {
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
        let itemWidth = 0;
        let itemsToShow = 3; // Por defecto mostramos 3 en pantallas grandes
        let isAutoPlaying = true;
        let autoPlayInterval;
        
        // Función para calcular cuántos elementos mostrar según el ancho de la pantalla
        function calculateItemsToShow() {
            if (window.innerWidth < 768) { // Punto de quiebre para móviles
                itemsToShow = 1;
            } else {
                itemsToShow = 3;
            }
            // Recalcular el ancho del item después de cambiar la cantidad a mostrar
            calculateItemWidth();
        }
        
        // Calcular el ancho de cada item
        function calculateItemWidth() {
            const containerWidth = container.clientWidth;
            // El ancho de cada item será el ancho del contenedor dividido entre los items a mostrar
            // menos el margen
            itemWidth = (containerWidth / itemsToShow) - 20;
            
            // Aplicar el nuevo ancho a las imágenes
            sliderItems.forEach(img => {
                img.style.width = `${itemWidth}px`;
            });
            
            // Mover el slider a la posición actual después de recalcular
            moveSlider(0);
        }
        
        // Función para mover el slider
        function moveSlider(direction) {
            currentIndex = (currentIndex + direction) % (sliderItems.length - itemsToShow + 1);
            if (currentIndex < 0) {
                currentIndex = sliderItems.length - itemsToShow;
            }
            sliderTrack.style.transform = `translateX(-${currentIndex * (itemWidth + 20)}px)`;
        }
        
        // Función para la reproducción automática
        function startAutoPlay() {
            if (autoPlayInterval) clearInterval(autoPlayInterval);
            autoPlayInterval = setInterval(() => {
                moveSlider(1); // Avanzar un elemento
            }, 3000); // Cambiar cada 3 segundos
        }
        
        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }
        
        // Funciones para la vista previa
        function openPreview(img) {
            const previewOverlay = document.getElementById(`previewOverlay-${index}`);
            const previewImage = previewOverlay.querySelector('.preview-image');
            previewImage.src = img.src;
            previewOverlay.style.display = 'flex';
            // Detener reproducción automática al abrir vista previa
            stopAutoPlay();
            // Añadir evento de tecla Escape
            document.addEventListener('keydown', handleEscapeKey);
        }
        
        function closePreview() {
            const previewOverlay = document.getElementById(`previewOverlay-${index}`);
            previewOverlay.style.display = 'none';
            // Reanudar reproducción automática al cerrar
            if (isAutoPlaying) startAutoPlay();
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
        
        leftButton.addEventListener('click', () => {
            moveSlider(-1);
            // Detener reproducción automática al interactuar manualmente
            stopAutoPlay();
            // Reiniciar reproducción automática después de 5 segundos
            setTimeout(() => {
                if (isAutoPlaying) startAutoPlay();
            }, 5000);
        });
        
        rightButton.addEventListener('click', () => {
            moveSlider(1);
            // Detener reproducción automática al interactuar manualmente
            stopAutoPlay();
            // Reiniciar reproducción automática después de 5 segundos
            setTimeout(() => {
                if (isAutoPlaying) startAutoPlay();
            }, 5000);
        });
        
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
        calculateItemsToShow();
        startAutoPlay();
        
        // Recalcular el ancho cuando se redimensiona la ventana
        window.addEventListener('resize', () => {
            calculateItemsToShow();
        });
    });
});