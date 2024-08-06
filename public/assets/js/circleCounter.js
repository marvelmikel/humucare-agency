const counter = document.querySelector(".counter");
let progress = 0;

const updateProgress = () => {
  if (progress < 100) {
    progress++;
    counter.textContent = `${progress}%`;
  } else {
    clearInterval(intervalId);
    // Stop rotation animation
    document.querySelector(".preloader img").style.animation = "none";
    // Show success image
    document.querySelector(".success-image").style.opacity = 1;
  }
};

const intervalId = setInterval(updateProgress, 20); // Update counter every 20 milliseconds
