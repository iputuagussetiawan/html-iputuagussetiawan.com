import "../../scss/pages/single-portfolio.scss";
import PageHeaderParallax from "../components/pageHeaderParallax"

import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

const pageHeaderParallax = new PageHeaderParallax();

const swiper = new Swiper('.swiperBannerSinglePorfolio', {
    // Optional parameters
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });


  const swiperSameCategory = new Swiper('.swiperSameCategory', {
    // Optional parameters
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination2',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });