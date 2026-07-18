document.addEventListener("DOMContentLoaded", function () {

  // ========== SLIDER WITH EFFECTS ==========
  const sliderContainer = document.querySelector(".slider-container");
  const sliderImages = [
    // Add actual slider image paths here, e.g. "/crowntechnology-backup/public/assets/images/slider-1.png"
  ];

  let currentSlide = 0;
  let sliderInterval = null;

  // Function to create and rotate slider images
  function initSlider() {
    if (!sliderContainer) {
      console.warn("Slider container not found");
      return;
    }

    if (sliderImages.length === 0) {
      console.warn("No slider images configured");
      return;
    }

    sliderInterval = setInterval(() => {
      try {
        const currentImg = document.querySelector(".slider-image.active");
        
        if (currentImg) {
          currentImg.classList.remove("active");
        }

        currentSlide = (currentSlide + 1) % sliderImages.length;
        
        // Get or create the next image
        let nextImg = document.querySelector(`.slider-image[data-index="${currentSlide}"]`);
        
        if (!nextImg) {
          nextImg = document.createElement("img");
          nextImg.src = sliderImages[currentSlide];
          nextImg.alt = "Slider image " + (currentSlide + 1);
          nextImg.className = "slider-image";
          nextImg.setAttribute("data-index", currentSlide);
          nextImg.style.cssText = "width: 100%; height: 100%; object-fit: cover;";
          sliderContainer.appendChild(nextImg);
        }
        
        nextImg.classList.add("active");
      } catch (error) {
        console.error("Slider error:", error);
      }
    }, 6000);
  }

  initSlider();

  // Hero Text Animation
  const heroTexts = [
    "Smart Technology Meets Creative Strategy",
    "Innovative Digital Solutions for Modern Brands",
    "Creative Design That Drives Real Impact"
  ];

  let i = 0;
  const heading = document.getElementById("heroHeading");

  if (heading) {
    heading.classList.add("active");
    setInterval(() => {
      heading.classList.remove("active");

      setTimeout(() => {
        i = (i + 1) % heroTexts.length;
        heading.innerText = heroTexts[i];
        heading.classList.add("active");
      }, 300);

    }, 3000);
  }

});
