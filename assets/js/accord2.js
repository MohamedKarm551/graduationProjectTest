// const accordionItems = document.querySelectorAll(".accordion-item2");

// function toggleAccordion() {
//   this.classList.toggle("active");
//    //this.childNodes[3].classList.toggle("active");
//   //   this.nextElementSibling;
//   //   .classList.toggle("active");
// }

// accordionItems.forEach((item) =>
//   item.addEventListener("click", toggleAccordion)
// );
// ========
// Get all the accordion items
const accordionItems = document.querySelectorAll('.accordion-item2');

// Loop through each accordion item and add a click event listener
accordionItems.forEach(item => {
  const header = item.querySelector('.accordion-header2');
  header.addEventListener('click', () => {
    // Toggle the "active" class on the accordion item and its content
    item.classList.toggle('active');
    const content = item.querySelector('.accordion-content2');
    content.classList.toggle('active');
  });
});