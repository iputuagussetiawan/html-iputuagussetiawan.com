import "../scss/style.scss";


import CircleProgress from 'js-circle-progress'
//import gsap from "gsap/all";
import { gsap } from "gsap";

// import { Tooltip, Toast, Popover } from "bootstrap";
import Search from "../js/layout/search"
import Navigation from "../js/layout/navigation"
// import Buttonripple from "../js/components/buttonripple"

let burgerMenu = document.querySelector("#hamburger")
let humbergerHolderMobile= document.querySelector("#humburger-menu-mobile")
let humbergerHolderDesktop= document.querySelector("#humburger-menu-desktop")



// const buttonripple = new Buttonripple()

// const pHTML = new CircleProgress('.progressHTML', {
//     value: 80,
//     max: 100,
//     textFormat: 'percent',
// })
// const pCSS = new CircleProgress('.progressCSS', {
//     value: 70,
//     max: 100,
//     textFormat: 'percent',
// })
// const cJS = new CircleProgress('.progressJS', {
//     value: 70,
//     max: 100,
//     textFormat: 'percent',
// })



class ProgressBar{
    constructor(progressBar, fill, skillName){
        this.progressBar = progressBar;
        this.skillName = skillName
        this.fill = fill;
        this.speed = 15; //Speed of the fill, increasing it will slow down 
        this.actual = 0;
        this.filling();
    }
    filling(){ 
        if( this.actual < this.fill){
            this.progressBar.style.width = String(this.actual++)+"%";
            this.progressBar.innerHTML = this.skillName+String(this.actual)+"%";
            setTimeout(() => this.filling(), this.speed);
        }
        else{
            return;
        }
        return;
    }
}
let options = {
    threshold: 0 // value from 0 to 1.0, stablishes the porcentage of the bar that need to be displayed before launching the animation
}
var progressBars = document.querySelectorAll('.progress');
let observer = new IntersectionObserver((progressBars) => {
    progressBars.forEach( progressBar => {
        if(progressBar.isIntersecting ){
            let fill = progressBar.target.getAttribute('data-fill');
            let skillName = progressBar.target.innerHTML;
            new ProgressBar(progressBar.target, fill, skillName);
            observer.unobserve(progressBar.target);
        }
    });
}, options);

progressBars.forEach( progressBar => observer.observe(progressBar));


const accordionItems = document.querySelectorAll('.questions__item')
accordionItems.forEach((item) =>{
    const accordionHeader = item.querySelector('.questions__header')

    accordionHeader.addEventListener('click', () =>{
        const openItem = document.querySelector('.accordion-open')

        toggleItem(item)

        if(openItem && openItem!== item){
            toggleItem(openItem)
        }
    })
})

function toggleItem(item){
    const accordionContent = item.querySelector('.questions__content')

    if(item.classList.contains('accordion-open')){
        accordionContent.removeAttribute('style')
        item.classList.remove('accordion-open')
    }else{
        accordionContent.style.height = accordionContent.scrollHeight + 'px'
        item.classList.add('accordion-open')
    }

}

window.addEventListener("load", function () {
    if (window.innerWidth <= 767) {
        humbergerHolderMobile.append(burgerMenu)
	} else {
		humbergerHolderDesktop.append(burgerMenu)
	}
	let loader = gsap.timeline();
	loader
		.to(".loader__circle-container", {
			duration: 0.5,
			scale: 0,
			ease: "expo.out",
		})
		.to(".loader__icon-container", {
			duration: 0.5,
			scale: 0,
			ease: "expo.inOut",
		})
		.to(".loader", {
			duration: 1.75,
			yPercent: -100,
			ease: "expo.inOut",
			//onComplete: bannerAnimation,
		});

        const search = new Search();
        const navigation = new Navigation()

        var  progress,progressLabel;
        const circles = document.querySelectorAll('.circleprogress');
        for(var i = 0; i < circles.length; i++) {
            progress = circles[i].getAttribute('data-percent');
            progressLabel = circles[i].getAttribute('data-label');
            let circleprogress = new CircleProgress('.progress'+progressLabel, {
                value: progress,
                max: 100,
                textFormat: 'percent',
            })    
        }
	
});

window.addEventListener("resize", function(){
    if (window.innerWidth <= 767) {
        humbergerHolderMobile.append(burgerMenu)
	} else {
		humbergerHolderDesktop.append(burgerMenu)
	}
});

// window.onload = function() {
   
// }
