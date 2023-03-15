const accordionItems = document.querySelectorAll(".accordion-item2");

function toggleAccordion() {
  this.classList.toggle("active");
  this.childNodes[3].classList.toggle("active");
  //   this.nextElementSibling;
  //   .classList.toggle("active");
}

accordionItems.forEach((item) =>
  item.addEventListener("click", toggleAccordion)
);
