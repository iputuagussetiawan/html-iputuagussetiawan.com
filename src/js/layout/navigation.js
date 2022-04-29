export default class Navigation {
    test() {
      console.log('hello world');
    }
}

// class Navigation {
//     navigationStart () {
//         console.log('Test Navigation')
//     }
// }


// const body = document.querySelector("body");
// const burgerMenu = document.querySelector(".burger");

// const openSideNav = () => mainNavigation.classList.add("active");
// const closeSideNav = () => mainNavigation.classList.remove("active");
// burgerMenu.onclick = function () {
// 	openMenu();
// };
// var openMenu = () => {
// 	if (burgerMenu.classList.contains("activated")) {
// 		var delayInMilliseconds = 100; //5 second
// 		setTimeout(function () {
// 			burgerMenu.classList.remove("activated");
// 			body.classList.remove("no-scroll");
// 			closeSideNav();
// 		}, delayInMilliseconds);
// 	} else {
// 		burgerMenu.classList.add("activated");
// 		body.classList.add("no-scroll");
// 		openSideNav();
// 	}
// };

// document.addEventListener("swiped-right", openSideNav);
// document.addEventListener("swiped-left", closeSideNav);
// toggler.addEventListener("click", openSideNav);

// document.addEventListener("DOMContentLoaded", function(){
// 	if (window.innerWidth > 992) {
// 		document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
// 			everyitem.addEventListener('mouseover', function(e){
// 				let el_link = this.querySelector('a[data-bs-toggle]');
// 				if(el_link != null){
// 					let nextEl = el_link.nextElementSibling;
// 					el_link.classList.add('show');
// 					nextEl.classList.add('show');
// 				}
// 			});
// 			everyitem.addEventListener('mouseleave', function(e){
// 				let el_link = this.querySelector('a[data-bs-toggle]');
// 				if(el_link != null){
// 					let nextEl = el_link.nextElementSibling;
// 					el_link.classList.remove('show');
// 					nextEl.classList.remove('show');
// 				}
// 			})
// 		});
// 	}
// }); 
