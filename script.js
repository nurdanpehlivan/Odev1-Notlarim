
// Otomatik kaydırma işlemini gerçekleştiren JavaScript kodu
(function() {
    var scrollingContainer = document.querySelector('.scrolling-container');

    function scrollContent() {
        scrollingContainer.scrollLeft += 2; // Her bir adımda 1 piksel kaydır
    }

    setInterval(scrollContent, 50); // Her 50 milisaniyede bir kaydırma işlemi
})();
// Otomatik kaydırma işlemini gerçekleştiren JavaScript kodu
(function() {
    var scrollingContainer = document.getElementById('scrolling-container');
    var scrollAmount = 1;
    var scrollDirection = 'right';

    function scrollContent() {
        if (scrollDirection === 'right') {
            scrollingContainer.scrollLeft += scrollAmount;

            // Eğer sağa doğru sona ulaşıldıysa sola kaydırmaya geç
            if (scrollingContainer.scrollLeft + scrollingContainer.clientWidth >= scrollingContainer.scrollWidth) {
                scrollDirection = 'left';
            }
        } else {
            scrollingContainer.scrollLeft -= scrollAmount;

            // Eğer sola doğru sona ulaşıldıysa sağa kaydırmaya geç
            if (scrollingContainer.scrollLeft <= 0) {
                scrollDirection = 'right';
            }
        }
    }

    setInterval(scrollContent, 5); // Her 20 milisaniyede bir kaydırma işlemi
})();
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 2200); // Her 2 saniyede bir kaydırma işlemi
}
var slideIndex = 0;
showSlides();

function showSlides() {
    var slides = document.getElementsByClassName("mySlidess");
    
    // Eğer son slayta ulaşıldıysa, başa dön
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    for (var i = 0; i < slides.length; i++) {
        slides[i].style.transform = "translateX(" + (-100 * slideIndex) + "%)";
    }

    slideIndex++;
loop:true;
    setTimeout(showSlides, 200); // Her 2 saniyede bir kaydırma işlemi
}

document.addEventListener('DOMContentLoaded', function () {
    const sliderk = document.querySelector('.sliderk');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;

    nextBtn.addEventListener('click', function () {
        if (currentIndex < sliderk.children.length - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    prevBtn.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    function updateSlider() {
        const newPosition = -currentIndex * 100 + '%';
        sliderk.style.transform = 'translateX(' + newPosition + ')';
    }
});
