class PageHeaderParallax {
    // 1. describe and create/initiate our object
    constructor() {
      this.parallax = document.querySelector(".parallax");
      this.events()
    }
    // 2. events
    events() {
      window.addEventListener("scroll", () =>{
        let scrollPosition = window.pageYOffset;
        this.parallax.style.transform = "translateY(" + scrollPosition * 0.7 + "px)";
      });
    }
    // 3. methods (function, action...)
  }
  export default PageHeaderParallax