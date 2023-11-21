// JavaScriptで簡単なスライダー機能を実装する例（public/js/app.js など）

document.addEventListener('DOMContentLoaded', function () {
    let slides = document.querySelectorAll('.slider-item');
    let currentSlide = 0;
    let slideInterval = setInterval(nextSlide,3000);

    function nextSlide(){
        if (!slides[currentSlide]) {
            console.error('Current slide is undefined:', currentSlide);
            clearInterval(slideInterval); // スライドショーを停止
            return;
        }
        slides[currentSlide].style.opacity = 0;
        currentSlide = (currentSlide+1)%slides.length;
        slides[currentSlide].style.opacity = 1;
    }
    
});
