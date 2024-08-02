'use strict';

const videoImg = document.querySelectorAll('.video__img');
const videoItem = document.querySelector('.video__item');
const popup = document.querySelector('.popup');
const popupVideo = document.querySelector('.popup__video');
const popupVideoIframe = document.querySelector('.popup__video iframe');

const faqButton = document.querySelectorAll('.faq__button');
const faqItemTitle = document.querySelectorAll('.faq__item-title');
const faqItemDescription = document.querySelectorAll('.faq__item-description');

const navItems = document.querySelectorAll('.header__item');

const anchors = document.querySelectorAll('a.scroll-to');

const studentVideos = [
  'https://www.youtube.com/embed/UsLpqTXd5vs?si=YQBf1Dqlq2AthHXi',
  'https://www.youtube.com/embed/nWef081wRrI?si=f38ZqsaQcclLPcga',
  'https://www.youtube.com/embed/JprtUfB1pKM?si=ln-u9qTwMykIoE7b'
];

const teacherVideos = [
  'https://www.youtube.com/embed/mbYqZlqvjBU?si=n_AaBMGBhzEVgnLF',
  'https://www.youtube.com/embed/NWnBxQjssvQ?si=B8MFCOCBvKUTz-0-',
  'https://www.youtube.com/embed/JprtUfB1pKM?si=ln-u9qTwMykIoE7b'
];

videoImg.forEach((item, index) => {
  item.addEventListener('click', (evt) => {
    evt.preventDefault();
    studentVideos.forEach((video, i) => {
      if (index === i) {
        popupVideoIframe.src = video;
      }
    });

    popup.classList.add('popup--show');
    popup.classList.remove('popup--none');
  });
});

if (window.location.pathname == '/about.html') {
  videoImg.forEach((item, index) => {
    item.addEventListener('click', (evt) => {
      evt.preventDefault();
      teacherVideos.forEach((video, i) => {
        if (index === i) {
          popupVideoIframe.src = video;
        }
      });

      popup.classList.add('popup--show');
      popup.classList.remove('popup--none');
    });
  });
}

window.addEventListener('keydown', function (evt) {
  if (evt.key === 'Esc' || evt.key === 'Escape') {
    if (popup.classList.contains('popup--show')) {
      evt.preventDefault();

      popup.classList.remove('popup--show');
      popup.classList.add('popup--none');


      location.reload();
    }
  }
});

popup.addEventListener('click', evt => {
  evt.preventDefault();

  if (popup.classList.contains('popup--show')) {
    popup.classList.remove('popup--show');
  }

  if (!popup.classList.contains('popup--none')) {
    popup.classList.add('popup--none');
  }

  location.reload();
});

faqItemTitle.forEach((item, index) => {
  item.addEventListener('click', () => {
    faqItemDescription.forEach((i, j) => {
      if (index === j) {
        i.classList.toggle('faq__item-description--none');
      }
    });

    faqButton.forEach((i, j) => {
      if (index === j) {
        i.classList.toggle('faq__button--rotate');
      }
    });
  });
});

faqButton.forEach((item, index) => {
  item.addEventListener('click', () => {
    faqItemDescription.forEach((i, j) => {
      if (index === j) {
        i.classList.toggle('faq__item-description--none');
      }
    });

    // faqButton.forEach((i, j) => {
    //   if (index === j) {
    //     i.classList.toggle('faq__button--rotate');
    //   }
    // });

    item.classList.toggle('faq__button--rotate');
  });
});

// Добавляю класс активному пункту меню
navItems.forEach((item) => {
    let navLink = item.querySelector('a');

    if (navLink.href == window.location.href) {
      item.classList.add('header__item--active');
    }
})


// Скролл по клику на кнопку
for (let anchor of anchors) {
  anchor.addEventListener('click', function (evt) {
    evt.preventDefault();

    const blockID = anchor.getAttribute('href');

    document.querySelector(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}

// Открытие меню
const headerNav = document.querySelector('.header__nav');
const headerButton = document.querySelector('.header__button');
const page = document.querySelector('.page');

headerButton.addEventListener('click', function(evt) {
  evt.preventDefault();
  headerNav.classList.toggle('header__nav--closed');
  if (headerButton.classList.contains('header__button--opened')) {
    headerButton.classList.remove('header__button--opened');
    headerButton.classList.add('header__button--closed');
    page.style.overflowY = 'hidden';
  } else {
    headerButton.classList.remove('header__button--closed');
    headerButton.classList.add('header__button--opened');
    page.style.overflowY = 'visible';
  }
});

// Слайдер видео
const videoSwiper = new Swiper('.video__swiper', {
  freeMode: true,
  slidesPerView: 'auto',
  breakpoints: {
    320: {
      spaceBetween: 20
    },
    768: {
      spaceBetween: 30
    }
  },
});


// Слайдер в контактах
const contactsSlider = new Swiper('.contacts__slider', {
  slidesPerView: 'auto',
  loop: true,
  effect: "fade",
  autoplay: {
    delay: 2500,
   },
  speed: 600
});

