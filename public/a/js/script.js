// Get all the slider containers on the page
const sliderContainers = document.querySelectorAll(".slider-container");

// Iterate over each slider container
sliderContainers.forEach((sliderContainer) => {
  // Get the necessary elements for the current slider container
  const imageSlider = sliderContainer.querySelector(".image__slider");
  const imageContainer = imageSlider.querySelector(".image-container");
  const images = imageContainer.querySelectorAll("img");
  const pagination = imageSlider.querySelector(".pagination");
  const paginationText = pagination.querySelector("span");
  const prevButton = pagination.querySelector(".prev-button");
  const nextButton = pagination.querySelector(".next-button");

  // Set the initial slide index and total number of slides for the current slider
  let currentSlide = 1;
  const totalSlides = images.length;

  // Update the slide for the current slider
  const updateSlide = () => {
    images.forEach((image, index) => {
      image.style.display = index + 1 === currentSlide ? "block" : "none";
    });
    paginationText.textContent = `${currentSlide}/${totalSlides}`;
  };

  // Handle previous slide button click for the current slider
  prevButton.addEventListener("click", () => {
    currentSlide = Math.max(currentSlide - 1, 1);
    updateSlide();
  });

  // Handle next slide button click for the current slider
  nextButton.addEventListener("click", () => {
    currentSlide = Math.min(currentSlide + 1, totalSlides);
    updateSlide();
  });

  // Initialize the slide for the current slider
  updateSlide();
});
