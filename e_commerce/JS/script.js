const carouselDescription = document.querySelector('.carousel-description p');

const carouselItem = document.querySelectorAll('.carousel-item');

console.log(carouselItem);



let carousel = document.getElementById('carouselExampleIndicators');

carousel.addEventListener('slid.bs.carousel', function (event) {
        // Obtenez l'index de la slide active
        var activeIndex = event.to;

        // Mettez à jour le contenu du paragraphe en fonction de l'index de la slide
        switch (activeIndex) {
            case 0:
                carouselDescription.innerText = "Contenu pour la première image...";
                break;
            case 1:
                carouselDescription.innerText = "Contenu pour la deuxième image...";
                break;
            case 2:
                carouselDescription.innerText = "Contenu pour la troisième image...";
                break;
            // Ajoutez d'autres cas au besoin
        }
    });