import anime from 'animejs/lib/anime.es.js';
import LocomotiveScroll from 'locomotive-scroll';

class Navigation {
  // 1. describe and create/initiate our object
  constructor() {
    this.isClosed = false;
    this.body=document.querySelector("body");
    this.burgerMenu = document.querySelector("#hamburger")
    this.sideMenu = document.querySelector("#side-menu")
    this.navbarCustom= document.querySelector(".navbar-custom");
    this.openButton = document.querySelectorAll(".btn-nav-search")
    this.closeButton = document.querySelectorAll(".search-overlay__btn-close")
    
    
    this.themeButton = document.getElementById('theme-button')
    this.darkTheme = 'dark-theme'
    this.iconTheme = 'ri-sun-line'

    // Previously selected topic (if user selected)
    this.selectedTheme = localStorage.getItem('selected-theme')
    this.selectedIcon = localStorage.getItem('selected-icon')

    if (this.selectedTheme) {
      // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
      this.body.classList[this.selectedTheme === 'dark' ? 'add' : 'remove'](this.darkTheme)
      this.themeButton.classList[this.selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](this.iconTheme)
    }

    this.scroll = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true,
      smartphone: {
        smooth: true,
      },
      tablet: {
        smooth: true,
      },
    });
    this.events()
  }
  // 2. events
  events() {
    this.themeButton.addEventListener('click', () => {
      // Add or remove the dark / icon theme
      this.body.classList.toggle(this.darkTheme)
      this.themeButton.classList.toggle(this.iconTheme)
      // We save the theme and the current icon that the user chose
      localStorage.setItem('selected-theme', this.getCurrentTheme())
      localStorage.setItem('selected-icon', this.getCurrentIcon())
    })

    this.burgerMenu.addEventListener("click", () => this.burgerTime())
    this.scroll.on("scroll", (position) => {
      if (position.scroll.y > 250) {
          this.navbarCustom.classList.add("show");
      } else {
          this.navbarCustom.classList.remove("show");
      }
    }); 

    this.openButton.forEach(el => {
      el.addEventListener("click", e => {
        e.preventDefault()
        this.scroll.stop();
      })
    })
    
    this.closeButton.forEach(el => {
      el.addEventListener("click", e => {
        e.preventDefault()
        this.scroll.start();
      })
    })
  }

  // 3. methods (function, action...)
  getCurrentTheme () {
    return this.body.classList.contains(this.darkTheme) ? 'dark' : 'light'
  }

  getCurrentIcon () {
    return this.themeButton.classList.contains(this.iconTheme) ? 'ri-moon-line' : 'ri-sun-line'
  }


  
  burgerTime() {
    if ( this.isClosed   == true) {
      this.sideMenu.classList.remove("open");
      this.burgerMenu.classList.remove("open");
      this.burgerMenu.classList.add("closed");
      this.navbarCustom.classList.add("show")
      this.body.classList.remove('no-scroll');
      this.scroll.start();
      this.isClosed  = false;
    } else {
      this.sideMenu.classList.add("open");
      this.burgerMenu.classList.remove("closed");
      this.burgerMenu.classList.add("open");
      this.body.classList.add('no-scroll');
      this.scroll.stop();
      this.navbarCustom.classList.remove("show")

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