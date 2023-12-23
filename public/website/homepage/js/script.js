$(document).ready(function () {
    const slider = $(".slider");
    const slides = $(".slide");
    let slideIndex = 0;

    function showSlides() {
        if (slideIndex >= slides.length) {
            slideIndex = 0;
        }

        var translateValue = -slideIndex * 100 + "%";
        slider.css("transform", "translateX(" + translateValue + ")");
        updateIndicators(slideIndex);
        slideIndex++;

        setTimeout(showSlides, 3000); // Change slide every 3 seconds
    }

    showSlides();

    function showSlide(index) {
        var translateValue = -index * 100 + "%";
        slider.css("transform", "translateX(" + translateValue + ")");
        updateIndicators(index);
    }

    function updateIndicators(index) {
        $(".indicator").removeClass("active");
        $(".indicator:eq(" + index + ")").addClass("active");
    }

    $(".indicator").on("click", function () {
        var index = $(this).index();
        showSlide(index);
    });
});
$(document).ready(function () {
    const cardsWrapper = document.querySelector('.cards-wrapper');
    const cardWidth = document.querySelector('.card').clientWidth;
    const totalCards = 7;
    let currentIndex = 0;

    function showNextCard() {
        currentIndex = (currentIndex + 1) % totalCards;
        updateSliderPosition();
    }

    function updateSliderPosition() {
        const newPosition = -currentIndex * cardWidth;
        cardsWrapper.style.transform = `translateX(${newPosition}px)`;
    }

    setInterval(showNextCard, 2000);
});
$(document).ready(function () {
    // Set interval for sliding every 2 seconds
    setInterval(function () {
        $('#imageSlider').carousel('next');
    }, 2000);

    // Custom transition end event for carousel items
    $('#imageSlider').on('slide.bs.carousel', function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $('.carousel-item').length;

        // Check if it's the last item, then reset to the first item
        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to the end
                if (e.direction === 'left') {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                } else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });
});
var cardSwiper = new Swiper('#cardSwiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});