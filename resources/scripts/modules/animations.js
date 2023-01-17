import AOS from 'aos';

export const Animations = {
  init() {
    AOS.init({
      once: false,
      duration: 800,
      easing: 'cubic-bezier(.38, .005, .215, 1)'
    });
  }
};
