import "../scss/style.scss";
import anime from 'animejs/lib/anime.es.js';
import Typed from 'typed.js';
import CircleProgress from 'js-circle-progress'
import gsap from "gsap/all";

import { Tooltip, Toast, Popover } from "bootstrap";
import Search from "../js/layout/search"
import Navigation from "../js/layout/navigation"
// import Buttonripple from "../js/components/buttonripple"

const search = new Search();
const navigation = new Navigation()
// const buttonripple = new Buttonripple()

const pHTML = new CircleProgress('.progressHTML', {
    value: 80,
    max: 100,
    textFormat: 'percent',
})
const pCSS = new CircleProgress('.progressCSS', {
    value: 70,
    max: 100,
    textFormat: 'percent',
})
const cJS = new CircleProgress('.progressJS', {
    value: 70,
    max: 100,
    textFormat: 'percent',
})

var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
	loop: true,
	typeSpeed: 70
});

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

// const buttons = document.querySelectorAll('.btn-ripple');
// buttons.forEach(btn => {
//   btn.addEventListener('click', function (e) {
//     let x = e.clientX - e.target.offsetLeft;
//     let y = e.clientY - e.target.offsetTop;
    
//     let ripples = document.createElement('span');
//     ripples.style.left = x + 'px';
//     ripples.style.top = y + 'px';
//     this.appendChild(ripples);
    
//     setTimeout(() => {
//       ripples.remove()
//     },1000);
//   });
// });