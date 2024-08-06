/* Service Slider Service Slider */

document.addEventListener("DOMContentLoaded", function () {
  const prev = document.querySelector(".previous");
  const next = document.querySelector(".next");
  const images = document.querySelectorAll(".service-slider-img > img");
  const serviceDots = document.querySelectorAll(".service-dots");
  const sliderContent = document.querySelector(".service-articles-wrapper");
  const totalImages = images.length;

  let currentIndex = 0;
  let isScrolling = false; // Prevent multiple scroll triggers

  prev.addEventListener("click", () => {
    if (!isScrolling) {
      previousImage();
      scrollSlide();
    }
  });

  next.addEventListener("click", () => {
    if (!isScrolling) {
      nextImage();
      scrollSlide();
    }
  });

  function scrollSlide() {
    isScrolling = true;
    console.log(sliderContent.children);
    const slideHeight =
      sliderContent.scrollHeight / sliderContent.children.length;
    const newPosition = currentIndex * -slideHeight;

    sliderContent.style.transition = 'transform 0.5s ease'; // Add transition for smooth scrolling
    sliderContent.style.transform = `translateY(${newPosition}px)`;

    // Reset scrolling flag after the transition duration
    setTimeout(() => {
      isScrolling = false;
    }, 500); // Adjust duration to match the transition time

    updateDots();
  }

  function updateDots() {
    serviceDots.forEach((dot, index) => {
      dot.classList.remove("active");
      if (index === currentIndex) {
        dot.classList.add("active");
      }
    });
  }

  serviceDots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      if (!isScrolling) {
        currentIndex = index;
        scrollSlide(); // Trigger scroll to the clicked dot's position
      }
    });
  });

  updateDots(); // Set initial active dot

  function nextImage() {
    images[currentIndex].classList.remove("main");
    currentIndex = (currentIndex + 1) % totalImages; // Use modulo to loop
    images[currentIndex].classList.add("main");
  }

  function previousImage() {
    images[currentIndex].classList.remove("main");
    currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Use modulo to loop
    images[currentIndex].classList.add("main");
  }
});


/* Training Slider Training Slider */

document.addEventListener("DOMContentLoaded", function () {
  const slidesContainer = document.querySelector('.training-course-details');
  const slides = document.querySelectorAll('.autoSlider-container');
  const dots = document.querySelectorAll('.dot');
  const totalSlides = slides.length;

  // Clone the first and last slides
  const firstSlideClone = slides[0].cloneNode(true);
  const lastSlideClone = slides[totalSlides - 1].cloneNode(true);

  // Append and prepend the cloned slides
  slidesContainer.appendChild(firstSlideClone);
  slidesContainer.insertBefore(lastSlideClone, slidesContainer.firstChild);

  let currentIndex = 1; // Start from the first original slide

  function updateDots(index) {
    dots.forEach(dot => dot.classList.remove('active'));
    dots[index - 1].classList.add('active');
  }

  function goToSlide(index) {
    slidesContainer.style.left = `-${index * 100}%`;
    if (index === 0) {
      setTimeout(() => {
        slidesContainer.style.transition = 'none';
        slidesContainer.style.left = `-${totalSlides * 100}%`;
        currentIndex = totalSlides;
      }, 1000);
    } else if (index === totalSlides + 1) {
      setTimeout(() => {
        slidesContainer.style.transition = 'none';
        slidesContainer.style.left = `-${100}%`;
        currentIndex = 1;
      }, 1000);
    } else {
      slidesContainer.style.transition = 'left 1s';
      currentIndex = index;
    }
    updateDots(currentIndex);
  }

  function nextSlide() {
    goToSlide(currentIndex + 1);
  }

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      currentIndex = index + 1;
      goToSlide(currentIndex);
    });
  });

  setInterval(nextSlide, 4000); // Change slide every 4 seconds
});



