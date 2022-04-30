import anime from 'animejs/lib/anime.es.js';
class Navigation {
  // 1. describe and create/initiate our object
  constructor() {
    this.body=document.querySelector("body");
    this.burgerMenu = document.querySelector("#hamburger")
    this.sideMenu = document.querySelector("#side-menu")
    this.isClosed = false;
    this.events()
  }
  // 2. events
  events() {
    this.burgerMenu.addEventListener("click", () => this.burgerTime())
  }

  // 3. methods (function, action...)
  burgerTime() {
    if ( this.isClosed   == true) {
      this.sideMenu.classList.remove("open");
      this.burgerMenu.classList.remove("open");
      this.burgerMenu.classList.add("closed");
      this.body.classList.remove('no-scroll');
      this.isClosed  = false;
    } else {
      this.sideMenu.classList.add("open");
      this.burgerMenu.classList.remove("closed");
      this.burgerMenu.classList.add("open");
      this.body.classList.add('no-scroll');

      anime({
        targets: ".side-menu__inner li",
        duration: 1500,
        translateX: [-250, 0],
        opacity: [0, 1],
        delay: anime.stagger(150, { strat: 100 }),
        //delay: anime.stagger(50)
      });
      this.isClosed = true;
    }
  }
}

export default Navigation