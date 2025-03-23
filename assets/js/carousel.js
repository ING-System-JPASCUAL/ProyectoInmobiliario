(function() {
  // Función para verificar dependencias
  function checkDependencies() {
      if (typeof jQuery === 'undefined') {
          console.error('jQuery no está disponible. Esperando...');
          setTimeout(checkDependencies, 100);
          return;
      }
      if (typeof Swiper === 'undefined') {
          console.error('Swiper no está disponible. Esperando...');
          setTimeout(checkDependencies, 100);
          return;
      }
      initCarousel();
  }

  function initCarousel() {
      jQuery(document).ready(function($) {
          try {
              // Spanizer
              var Spanizer = (function () {
                  var settings = {
                      letters: $(".js-letters"),
                  };
                  return {
                      init: function () {
                          this.bind();
                      },
                      bind: function () {
                          Spanizer.doSpanize();
                      },
                      doSpanize: function () {
                          settings.letters.html(function (i, el) {
                              var spanize = $.trim(el).split("");
                              return "<span>" + spanize.join("</span><span>") + "</span>";
                          });
                      },
                  };
              })();

              if (matchMedia("only screen and (min-width: 991px)").matches) {
                  Spanizer.init();
              }

              // Inicialización de todos los Swiper
              // Thumbs swiper
              if ($(".thumbs-swiper-column").length > 0) {
                  var swiperthumbs = new Swiper(".thumbs-swiper-column1", {
                      spaceBetween: 0,
                      slidesPerView: 4,
                      freeMode: true,
                      direction: "vertical",
                      watchSlidesProgress: true,
                  });

                  var swiper2 = new Swiper(".thumbs-swiper-column", {
                      spaceBetween: 0,
                      autoplay: {
                          delay: 3000,
                          disableOnInteraction: false,
                      },
                      speed: 500,
                      effect: "fade",
                      fadeEffect: {
                          crossFade: true,
                      },
                      thumbs: {
                          swiper: swiperthumbs,
                      },
                  });
              }

              // Swiper Pagi Thumbs
              if ($(".thumbs-sw-pagi").length > 0) {
                  var pagithumbs = new Swiper(".thumbs-sw-pagi", {
                      spaceBetween: 14,
                      slidesPerView: "auto",
                      freeMode: true,
                      watchSlidesProgress: true,
                      breakpoints: {
                          375: {
                              slidesPerView: 3,
                              spaceBetween: 14,
                          },
                          500: {
                              slidesPerView: "auto",
                          },
                      },
                  });
              }

              // Single Swiper
              if ($(".sw-single").length > 0) {
                  var swiperSingle = new Swiper(".sw-single", {
                      spaceBetween: 16,
                      autoplay: {
                          delay: 3000,
                          disableOnInteraction: false,
                      },
                      speed: 500,
                      effect: "fade",
                      fadeEffect: {
                          crossFade: true,
                      },
                      thumbs: {
                          swiper: pagithumbs,
                      },
                      navigation: {
                          clickable: true,
                          nextEl: ".nav-prev-single",
                          prevEl: ".nav-next-single",
                      },
                  });
              }

              // Home2 slider
              if ($(".slider-sw-home2").length > 0) {
                  new Swiper(".slider-sw-home2", {
                      spaceBetween: 0,
                      autoplay: {
                          delay: 2000,
                          disableOnInteraction: false,
                      },
                      speed: 2000,
                      effect: "fade",
                      fadeEffect: {
                          crossFade: true,
                      },
                  });
              }

              // Location swiper
              if ($(".tf-sw-location").length > 0) {
                  var locationConfig = {
                      previewLg: $(".tf-sw-location").data("preview-lg"),
                      previewMd: $(".tf-sw-location").data("preview-md"),
                      previewSm: $(".tf-sw-location").data("preview-sm"),
                      spacing: $(".tf-sw-location").data("space"),
                      centered: $(".tf-sw-location").data("centered"),
                      loop: $(".tf-sw-location").data("loop")
                  };

                  new Swiper(".tf-sw-location", {
                      autoplay: {
                          delay: 2000,
                          disableOnInteraction: false,
                      },
                      speed: 2000,
                      navigation: {
                          clickable: true,
                          nextEl: ".nav-prev-location",
                          prevEl: ".nav-next-location",
                      },
                      pagination: {
                          el: ".swiper-pagination1",
                          clickable: true,
                      },
                      slidesPerView: 1,
                      loop: locationConfig.loop,
                      spaceBetween: locationConfig.spacing,
                      centeredSlides: locationConfig.centered,
                      breakpoints: {
                          600: {
                              slidesPerView: locationConfig.previewSm,
                              spaceBetween: 20,
                              centeredSlides: false,
                          },
                          991: {
                              slidesPerView: locationConfig.previewMd,
                              spaceBetween: 20,
                              centeredSlides: false,
                          },
                          1520: {
                              slidesPerView: locationConfig.previewLg,
                              spaceBetween: locationConfig.spacing,
                          },
                      },
                  });
              }

              // Testimonial swiper
              if ($(".tf-sw-testimonial").length > 0) {
                  var testimonialConfig = {
                      previewLg: $(".tf-sw-testimonial").data("preview-lg"),
                      previewMd: $(".tf-sw-testimonial").data("preview-md"),
                      previewSm: $(".tf-sw-testimonial").data("preview-sm"),
                      spacing: $(".tf-sw-testimonial").data("space")
                  };

                  new Swiper(".tf-sw-testimonial", {
                      slidesPerView: 1,
                      spaceBetween: testimonialConfig.spacing,
                      navigation: {
                          clickable: true,
                          nextEl: ".nav-prev-testimonial",
                          prevEl: ".nav-next-testimonial",
                      },
                      pagination: {
                          el: ".sw-pagination-testimonial",
                          clickable: true,
                      },
                      breakpoints: {
                          768: {
                              slidesPerView: testimonialConfig.previewSm,
                              spaceBetween: 20,
                          },
                          991: {
                              slidesPerView: testimonialConfig.previewMd,
                              spaceBetween: 20,
                          },
                          1550: {
                              slidesPerView: testimonialConfig.previewLg,
                              spaceBetween: testimonialConfig.spacing,
                          },
                      },
                  });
              }

              // Partner swiper
              if ($(".tf-sw-partner").length > 0) {
                  var partnerConfig = {
                      previewLg: $(".tf-sw-partner").data("preview-lg"),
                      previewMd: $(".tf-sw-partner").data("preview-md"),
                      previewSm: $(".tf-sw-partner").data("preview-sm"),
                      spacing: $(".tf-sw-partner").data("space")
                  };

                  var partnerSwiper = new Swiper(".tf-sw-partner", {
                      autoplay: {
                          delay: 0,
                          disableOnInteraction: false,
                          pauseOnMouseEnter: true,
                      },
                      slidesPerView: 2,
                      loop: true,
                      spaceBetween: 30,
                      speed: 3000,
                      pagination: {
                          el: ".swiper-pagination",
                          clickable: true,
                      },
                      breakpoints: {
                          450: {
                              slidesPerView: partnerConfig.previewSm,
                              spaceBetween: 30,
                          },
                          768: {
                              slidesPerView: partnerConfig.previewMd,
                              spaceBetween: 30,
                          },
                          992: {
                              slidesPerView: partnerConfig.previewLg,
                              spaceBetween: partnerConfig.spacing,
                          },
                      },
                  });

                  // Partner hover events
                  $(".tf-sw-partner").hover(
                      function () {
                          if (partnerSwiper.autoplay) {
                              partnerSwiper.autoplay.stop();
                          }
                      },
                      function () {
                          if (partnerSwiper.autoplay) {
                              partnerSwiper.autoplay.start();
                          }
                      }
                  );
              }

              // Categories swiper
              if ($(".tf-sw-categories").length > 0) {
                  var categoriesConfig = {
                      previewLg: $(".tf-sw-categories").data("preview-lg"),
                      previewMd: $(".tf-sw-categories").data("preview-md"),
                      previewSm: $(".tf-sw-categories").data("preview-sm"),
                      spacing: $(".tf-sw-categories").data("space")
                  };

                  new Swiper(".tf-sw-categories", {
                      slidesPerView: 2,
                      spaceBetween: 30,
                      navigation: {
                          clickable: true,
                          nextEl: ".nav-prev-category",
                          prevEl: ".nav-next-category",
                      },
                      pagination: {
                          el: ".sw-pagination-category",
                          clickable: true,
                      },
                      breakpoints: {
                          600: {
                              slidesPerView: categoriesConfig.previewSm,
                              spaceBetween: 30,
                          },
                          800: {
                              slidesPerView: categoriesConfig.previewMd,
                              spaceBetween: 30,
                          },
                          1300: {
                              slidesPerView: categoriesConfig.previewLg,
                              spaceBetween: categoriesConfig.spacing,
                          },
                      },
                  });
              }

              // Property swiper
              if ($(".tf-sw-property").length > 0) {
                  new Swiper(".tf-sw-property", {
                      slidesPerView: 1,
                      spaceBetween: 30,
                      navigation: {
                          clickable: true,
                          nextEl: ".nav-prev-property",
                          prevEl: ".nav-next-property",
                      },
                      pagination: {
                          el: ".sw-pagination-property",
                          clickable: true,
                      },
                  });
              }

              // Benefit swiper
              if ($(".tf-sw-benefit").length > 0) {
                  new Swiper(".tf-sw-benefit", {
                      slidesPerView: 1,
                      spaceBetween: 30,
                      navigation: {
                          clickable: true,
                          nextEl: ".nav-prev-benefit",
                          prevEl: ".nav-next-benefit",
                      },
                      pagination: {
                          el: ".sw-pagination-benefit",
                          clickable: true,
                      },
                  });
              }

              // Auto swiper
              if ($(".tf-sw-auto").length > 0) {
                  var autoLoop = $(".tf-sw-auto").data("loop");
                  new Swiper(".tf-sw-auto", {
                      autoplay: {
                          delay: 1500,
                          disableOnInteraction: false,
                          pauseOnMouseEnter: true,
                      },
                      speed: 2000,
                      slidesPerView: "auto",
                      spaceBetween: 0,
                      loop: autoLoop,
                      navigation: {
                          clickable: true,
                          nextEl: ".nav-prev-category",
                          prevEl: ".nav-next-category",
                      },
                  });
              }

              // Latest property swiper
              if ($(".tf-latest-property").length > 0) {
                  var latestConfig = {
                      previewLg: $(".tf-latest-property").data("preview-lg"),
                      previewMd: $(".tf-latest-property").data("preview-md"),
                      previewSm: $(".tf-latest-property").data("preview-sm"),
                      spacing: $(".tf-latest-property").data("space"),
                      centered: $(".tf-latest-property").data("centered"),
                      loop: $(".tf-latest-property").data("loop")
                  };

                  new Swiper(".tf-latest-property", {
                      autoplay: {
                          delay: 2000,
                          disableOnInteraction: false,
                          reverseDirection: false,
                      },
                      speed: 3000,
                      slidesPerView: 1,
                      loop: latestConfig.loop,
                      spaceBetween: latestConfig.spacing,
                      centeredSlides: latestConfig.centered,
                      breakpoints: {
                          600: {
                              slidesPerView: latestConfig.previewSm,
                              spaceBetween: 20,
                              centeredSlides: false,
                          },
                          991: {
                              slidesPerView: latestConfig.previewMd,
                              spaceBetween: 20,
                              centeredSlides: false,
                          },
                          1550: {
                              slidesPerView: latestConfig.previewLg,
                              spaceBetween: latestConfig.spacing,
                          },
                      },
                  });
              }

          } catch (error) {
              console.error('Error inicializando componentes:', error);
          }
      });
  }

  // Iniciar verificación
  checkDependencies();
})();