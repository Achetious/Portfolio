function adjustAosPlacement() {
    const elements = document.querySelectorAll('[data-aos-anchor-placement="top-center"]');
  
    if (window.innerWidth <= 1023.99) { //Adjust this
      elements.forEach(element => {
        element.setAttribute('data-aos-anchor-placement', 'center-bottom');
      });
    } else {
      elements.forEach(element => {
        element.setAttribute('data-aos-anchor-placement', 'top-center');
      });
    }
  }

  adjustAosPlacement();
  
  window.addEventListener('resize', adjustAosPlacement);
  