//animation loop text

//définition des variables 
window.onload = function () {
    var sliderContainer = document.querySelector('.slider-container');
    var slider = document.querySelector('.slider');
    var sliderItems = document.querySelectorAll('.slider-item');
    var sliderWidth = sliderContainer.offsetWidth; //stocke la largeur de sliderContainer 
    var currentPosition = 0; // position actuelle du slider 
    var lastItemWidth = sliderItems[sliderItems.length - 1].offsetWidth; //stocke la largeur du dernier élément dans sliderItems


    //ajuste la largeur du slider de la fenêtre redimensionnée 
    function adjustSliderWidth() {
        sliderWidth = sliderContainer.offsetWidth;
        slider.style.transform = 'translateX(' + (-currentPosition) + 'px)';
    }

    //défilement du slider 
    //clône la première diapo et l'ajoute à la fin 
    function startSlider() {
        currentPosition++;
        if (currentPosition >= lastItemWidth - sliderWidth) {
            var clonedItem = sliderItems[0].cloneNode(true);
            slider.appendChild(clonedItem);
            lastItemWidth += sliderItems[0].offsetWidth;
        }
        slider.style.transform = 'translateX(' + (-currentPosition) + 'px)';
    }

    window.addEventListener('resize', adjustSliderWidth);
    adjustSliderWidth();

    // fait défiler le slider en continu
    function update() {
        startSlider()
        requestAnimationFrame(update)
    }

    requestAnimationFrame(update)
};


