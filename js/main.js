window.onload=()=>{
    const $ = document.querySelector.bind(document);
const $All = document.querySelectorAll.bind(document);

$('#menu').onclick=()=>{ $('#menu').classList.toggle('rotate')
  $('.nav-page1').classList.toggle('transform')
  $('.nav-page2').classList.toggle('transform')
  $('.menu-line1').classList.toggle('rotate1')
   $('.menu-line2').classList.toggle('rotate2')
}
}

/******** Gallery Slider ***** */
document.addEventListener("DOMContentLoaded", function() {
  const sliderContainers = document.querySelectorAll('.slider-container');
  
  sliderContainers.forEach(container => {
    const column1 = container.querySelector('.slider-column:first-child .slider-images');
    const column2 = container.querySelector('.slider-column:last-child .slider-images');
    
    const slideHeight = 200; // Adjust the slide height as needed
    
    let offset1 = 0;
    let offset2 = 0;
    let direction1 = 1;
    let direction2 = -1;
    
    setInterval(() => {
      offset1 += direction1;
      offset2 -= direction2;
      
      column1.style.transform = `translateY(-${offset1}px)`;
      column2.style.transform = `translateY(${offset2}px)`;
      
      if (offset1 >= slideHeight || offset1 <= 0) {
        direction1 *= -1;
      }
      
      if (offset2 >= slideHeight || offset2 <= 0) {
        direction2 *= -1;
      }
    }, 100); // Adjust the interval for smoothness
  });
});