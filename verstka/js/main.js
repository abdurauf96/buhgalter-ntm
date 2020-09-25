$( document ).ready(function() {
  const elHeaderSliderWrapper = $('.header__slider');
  const elFeedbacksSliderWrapper = $('.feedbacks__slider');
  const elPartnersSliderWrapper = $('.partners-box');
  const elGallerySliderWrapper = $('.gallery__slider');
  const elLayer = $('.layer');
  const elMenuBtn = $('.btn-menu');
  const elNavBar = $('.navbar');
  const elsGalleryItems = $('a.gallery__item[data-fancybox="gallery"]');
  const elOrderCallBtn = $('.order-call-btn');
  const elOrderCallModal = $('.order-call-modal');
  const elRegForCourseModal = $('.reg-for-course-modal');
  const elRegForCourseBtn = $('.reg-for-course-btn');
  const elOrderCallCancelBtn = $('.order-call-cancel-btn');
  const elRegForCourseCancelBtn = $('.reg-for-course-cancel-btn');

  elRegForCourseBtn.on('click', () => {
    elRegForCourseModal.addClass('regform--active');
    $('body').addClass('body-disable-overflow');
  });

  elOrderCallBtn.on('click', () => {
    elOrderCallModal.addClass('regform--active');
    $('body').addClass('body-disable-overflow');
  });

  elOrderCallCancelBtn.on('click', () => {
    elOrderCallModal.removeClass('regform--active');
    $('body').removeClass('body-disable-overflow');
  }); 

  elRegForCourseCancelBtn.on('click', () => {
    elRegForCourseModal.removeClass('regform--active');
    $('body').removeClass('body-disable-overflow');
  }); 


  elsGalleryItems.fancybox({
    keyboard: true,
    closeExisting: false,
    animationEffect: "zoom",
    transitionEffect: "zoom-in-out",
    hideScrollbar: true
  });

  elMenuBtn.on('click', () => {
    elMenuBtn.toggleClass('menu-btn--active');
    elNavBar.toggleClass('navbar--active');
    elLayer.toggleClass('layer--active');
    $('body').toggleClass('body-disable-overflow');
  });






  elHeaderSliderWrapper.slick({
    nextArrow: '<button type="button" class="btn header-next"><img src="img/header-a-right.png" alt=""></button>',
    prevArrow: '<button type="button" class="btn header-prev"><img src="img/header-a-left.png" alt=""></button>',
    autoplay: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false
        }
      }
    ]
  });

  elFeedbacksSliderWrapper.slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
    dots: true,
    dotsClass: 'slider-controllers',
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });

  elGallerySliderWrapper.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: '<button type="button" class="btn header-next"><img src="img/arrow-right.png" alt=""></button>',
    prevArrow: '<button type="button" class="btn header-prev"><img src="img/arrow-left.png" alt=""></button>',
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  elPartnersSliderWrapper.slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '<button type="button" class="btn header-next"><img src="img/arrow-right.png" alt=""></button>',
    prevArrow: '<button type="button" class="btn header-prev"><img src="img/arrow-left.png" alt=""></button>',
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });

  const observer = lozad();
  observer.observe();


});