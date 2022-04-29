import "../scss/style.scss";
import anime from 'animejs/lib/anime.es.js';
// import gsap from "gsap/all";

// import LocomotiveScroll from "locomotive-scroll";
import { Tooltip, Toast, Popover } from "bootstrap";
// import navigation from './layout/navigation';


let body = document.querySelector("body");
let burgerMenu = document.querySelector("#hamburger");
let sideMenu = document.querySelector("#side-menu");
let isClosed = false;

if(burgerMenu){
    burgerMenu.onclick = function () {
        burgerTime();
    };
}
function burgerTime() {
    // if(navbarCustom.classList.contains('nav-sticky')){
    //     navbarCustom.classList.remove("soft-blue");
    // }else{
    //     navbarCustom.classList.add("soft-blue");
    // }
	if (isClosed == true) {
		sideMenu.classList.remove("open");
		burgerMenu.classList.remove("open");
		burgerMenu.classList.add("closed");
        body.classList.remove('no-scroll');
		isClosed = false;
	} else {
		sideMenu.classList.add("open");
		burgerMenu.classList.remove("closed");
		burgerMenu.classList.add("open");
        body.classList.add('no-scroll');

		anime({
			targets: ".side-menu__inner li",
			duration: 1500,
			translateX: [-250, 0],
			opacity: [0, 1],
			delay: anime.stagger(150, { strat: 100 }),
			//delay: anime.stagger(50)
		});

		
		isClosed = true;
	}
}