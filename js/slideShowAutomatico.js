<!-- Este Script sirve para hacer el SlideShow de Imagenes de forma Automatica -->
      var slideIndex = 0;
  

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1} 
      x[slideIndex-1].style.display = "block"; 
      x[slideIndex-1].className += " animated";
      setTimeout(carousel, 5000); // Cambiamos la imagen cada 5 seg
  };
  carousel();
