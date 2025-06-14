$ = jQuery.noConflict()

$(document).ready(function () {
  AOS.init()
  let prevScrollpos = $(window).scrollTop() + 70

  localStorage.removeItem('valuesBrand')
  localStorage.removeItem('viewNumbers')
  $(window).scroll(function () {
    const currentScrollPos = $(window).scrollTop()
    if ($(window).scrollTop() > 70) {
      if (prevScrollpos > currentScrollPos) {
        $('#masthead').addClass('actived')
        $('#brand').data('brandtwo')
        $('#masthead').css('top', '0')
        $('#brand').attr('src', $('#brand').data('brandtwo'))
      } else {
        $('#masthead').css('top', '-125px')
        prevScrollpos = currentScrollPos
      }
    } else {
      const brand = $('#brand').data('brand')
      if ($('#masthead').hasClass('proyect')) return $('#masthead').removeClass('actived')
      $('#brand').attr('src', $('#brand').data('brandtwo'))
      $('#masthead').removeClass('actived'), $('#brand').attr('src', brand)
    }

    function buildThresholdList() {
      var thresholds = []

      for (var i = 1.0; i <= 1.0; i++) {
        var ratio = i / 1.0
        thresholds.push(ratio)
      }

      thresholds.push(0)
      return thresholds
    }
    function createObserver(element) {
      var observer

      var options = {
        root: null,
        rootMargin: '0px',
        threshold: buildThresholdList(),
      }
      observer = new IntersectionObserver(handleIntersect, options)
      element && observer.observe(element)
    }

    function handleIntersect(entries, observer) {
      entries.forEach(function (entry) {
        if (entry.target === document.querySelector('.metrics') && entry.intersectionRatio >= 0.5 && !localStorage.getItem('viewNumbers')) {
          localStorage.setItem('viewNumbers', true)
          $('.metrics__animated').each(function () {
            $(this)
              .prop('Counter', 0)
              .animate(
                {
                  Counter: $(this).text(),
                },
                {
                  duration: 2500,
                  easing: 'swing',
                  step: function (now) {
                    $(this).text(Math.ceil(now))
                  },
                }
              )
          })
        } else if (entry.target === document.querySelector('#valuesBrand') && entry.intersectionRatio >= 0.5 && !localStorage.getItem('valuesBrand')) {
          setTimeout(function () {
            const title = $('.steps-values__item__marketing').data('title')
            $('.steps-values__item__marketing').addClass('active')
            $('.titleSteps').removeClass('fade-in-fwd')
            $('.titleSteps').addClass('scale-in-center')
            $('.titleSteps').text(title)
          }, 2000)
        }
      })
    }

    if (document.getElementById('valuesBrand')) {
      createObserver(document.getElementById('valuesBrand'))
    }
    if (document.getElementsByClassName('metrics')[0]) {
      createObserver(document.getElementById('valuesBrand'))

      createObserver(document.getElementsByClassName('metrics')[0])
    }
  })

  // #Propiedades Menu Mobile

  $('.site-header-sandwich').click(function () {
    if ($('.site-header-sandwich').hasClass('active') && !$('.site-header').hasClass('actived')) {
      const brandtwo = $('#brand').data('brand')
      $('#brand').attr('src', brandtwo)
      console.log('aca1')
    } else if ($('.site-header').hasClass('actived')) {
      $('#masthead').toggleClass('active')
      const brand = ' /wp-content/uploads/2021/06/logo-color.png'
      $('#brand').attr('src', brand)
      console.log('aca2')
    } else {
      console.log('aca3')
      const brand = $('#brand').data('brand')
      $('#brand').attr('src', brand)
    }
    $('#masthead').toggleClass('active')
    $('.site-header-sandwich').toggleClass('active')
    $('.site-header-nav').toggleClass('active')
  })

  $('.input-field').focusin(function (e) {
    $(this).addClass('active')
  })

  $('.input-field').focusout(function (e) {
    if ($(this).find('.wpcf7-form-control-wrap input').val() <= 0) {
      $(this).removeClass('active')
    } else if ($(this).find('.wpcf7-form-control-wrap input').val()) {
      $(this).addClass('active')
    }
  })

  // #Propiedades Modal

  $('.close').click(function () {
    const modal = $('.close').data('modal')
    $('#' + modal).removeClass('active')
  })

  $('.overlay').click(function () {
    const modal = $('.close').data('modal')
    $('#' + modal).removeClass('active')
  })

  // #Propiedades Carousel

  function addCarousel(element, index, number, mover, margin, itemstablet, loop, flechas, dots, autoplay, velocidad, animateIn, animateOut, autoWidth, slideBy, autoWidthMobile, margindesktop, URLhashListener) {
    $('.' + element + '.owl-carousel').owlCarousel({
      loop: loop,
      margin: margin,
      nav: flechas,
      dots: dots,
      autoplay: autoplay,
      mouseDrag: mover,
      startPosition: index,
      autoplayTimeout: velocidad || 3000,
      animateOut: animateOut,
      animateIn: animateIn,
      autoWidth: autoWidthMobile,
      items: number,
      slideBy: slideBy || 1,
      URLhashListener: URLhashListener,
      autoplayHoverPause: true,

      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          autoWidth: autoWidthMobile,
          URLhashListener: URLhashListener,
        },
        600: {
          items: itemstablet,
          mouseDrag: false,
          autoWidth: autoWidth,
          margin: margindesktop,
          URLhashListener: URLhashListener,
        },
        1000: {
          items: itemstablet,
          autoWidth: autoWidth,
          margin: margindesktop,
          URLhashListener: URLhashListener,
        },
      },
    })
  }

  addCarousel('hero-service__hero', 'URLHash', 1, true, 0, 1, false, false, false, false, 3000, '', '', false, false, false, 0, true)
  addCarousel('clients__items', 0, 1, true, 16, 4, true, true, false, true, 3000, '', '', false, false, false, 32)
  addCarousel('hero-container', 0, 1, true, 0, 1, true, true, false, true, 5000)
  addCarousel('profiles__content', 0, 2, true, 32, 4, true, true, false, false, 3000, '', '', false, false, false, 32, false)
  addCarousel('success-stories__content', 0, 1, true, 32, 3, false, false, false, false, 3000, '', '', false, 4, false, 40)
  addCarousel('header-principal__text__carousel', 0, 1, true, 0, 1, true, false, false, true, 4000)
  addCarousel('new-slider__slider', 0, 1, true, 0, 1, true, true, false, true, 5000)
  addCarousel('testimonials__content', 0, 1, true, 0, 1, true, true, false, true, 5000)
  addCarousel('brand-gallery__content', 0, 1, true, 16, 4, true, true, true, true, 4000)
  addCarousel('experience-galleries__content__item__slider', 0, 1, true, 16, 1, true, true, false, true, 4000)
  addCarousel('sustent-home__content', 0, 1, true, 16, 4, true, false, true, true, 4000)
  addCarousel('single-sustentaciones__judge__content', 0, 1, true, 16, 4, true, false, true, true, 4000)
  if (window.matchMedia('(min-width: 900px)').matches) {
    $('.hero-service__buttons').addClass('owl-carousel owl-theme')
    addCarousel('hero-service__buttons', 0, 3, true, 0, 5, false, true, false, false, 4000, '', '', false, 5, false, 20, false)
  }

  $('.maestrias__title__filters__header').click(function () {
    console.log('click')
    if ($('.maestrias__title__filters__content').hasClass('active')) {
      $('.maestrias__title__filters__content').removeClass('active')
      return
    }
    $('.maestrias__title__filters__content').addClass('active')
  })
  $('.maestrias__title__filters__content .filter').click(function () {
    const filter = $(this).data('filter')
    $('.maestrias__title__filters__content').removeClass('active')
    $('.maestrias__title__filters__header h3').text($(this).text())
    $('.maestrias__title__filters__header').data('filter', filter)
  })
})
