var slideIndex = 1;
//showSlides(slideIndex);
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "flex"
}
function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}



 var clicks=0;
 function incrementare(){
    clicks = clicks + 1;
    //alert(clicks);
    
    document.getElementById("clicks").innerHTML = clicks;
 }
