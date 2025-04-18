(function ($) {
  "use strict";

  var $window = $(window);
  var $body = $("body");

  /* Preloader Effect */
  $window.on("load", function () {
    $(".preloader").fadeOut(600);
  });

  /* Sticky Header */
  if ($(".active-sticky-header").length) {
    $window.on("resize", function () {
      setHeaderHeight();
    });

    function setHeaderHeight() {
      $("header.main-header").css(
        "height",
        $("header .header-sticky").outerHeight()
      );
    }

    $window.on("scroll", function () {
      var fromTop = $(window).scrollTop();
      setHeaderHeight();
      var headerHeight = $("header .header-sticky").outerHeight();
      $("header .header-sticky").toggleClass(
        "hide",
        fromTop > headerHeight + 100
      );
      $("header .header-sticky").toggleClass("active", fromTop > 600);
    });
  }

  /* Slick Menu JS */
  $("#menu").slicknav({
    label: "",
    prependTo: ".responsive-menu",
  });

  if ($("a[href='#top']").length) {
    $(document).on("click", "a[href='#top']", function () {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
  }

  /* Hero Slider Layout JS */
  const hero_slider_layout = new Swiper(".hero-slider-layout .swiper", {
    slidesPerView: 1,
    speed: 1000,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 4000,
    },
    pagination: {
      el: ".hero-pagination",
      clickable: true,
    },
  });

  /* How We Work Client Logo Slider JS */
  if ($(".work-with-company-slider").length) {
    const work_with_company_slider = new Swiper(
      ".work-with-company-slider .swiper",
      {
        slidesPerView: 2,
        speed: 2000,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 5000,
        },
        breakpoints: {
          768: {
            slidesPerView: 4,
          },
          991: {
            slidesPerView: 5,
          },
        },
      }
    );
  }

  /* testimonial Slider JS */
  if ($(".testimonial-slider").length) {
    const testimonial_slider = new Swiper(".testimonial-slider .swiper", {
      slidesPerView: 1,
      speed: 1000,
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        991: {
          slidesPerView: 3,
        },
      },
    });
  }

  if ($(".service-single-slider").length) {
    const service_single_slider = new Swiper(".service-single-slider .swiper", {
      slidesPerView: 1,
      speed: 1000,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        nextEl: ".service-button-next",
        prevEl: ".service-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 1,
        },
        991: {
          slidesPerView: 1,
        },
      },
    });
  }

  /* Youtube Background Video JS */
  if ($("#herovideo").length) {
    var myPlayer = $("#herovideo").YTPlayer();
  }

  /* Init Counter */
  if ($(".counter").length) {
    $(".counter").counterUp({ delay: 6, time: 3000 });
  }

  /* Image Reveal Animation */
  if ($(".reveal").length) {
    gsap.registerPlugin(ScrollTrigger);
    let revealContainers = document.querySelectorAll(".reveal");
    revealContainers.forEach((container) => {
      let image = container.querySelector("img");
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: container,
          toggleActions: "play none none none",
        },
      });
      tl.set(container, {
        autoAlpha: 1,
      });
      tl.from(container, 1, {
        xPercent: -100,
        ease: Power2.out,
      });
      tl.from(image, 1, {
        xPercent: 100,
        scale: 1,
        delay: -1,
        ease: Power2.out,
      });
    });
  }

  /* Text Effect Animation */
  if ($(".text-anime-style-1").length) {
    let staggerAmount = 0.05,
      translateXValue = 0,
      delayValue = 0.5,
      animatedTextElements = document.querySelectorAll(".text-anime-style-1");

    animatedTextElements.forEach((element) => {
      let animationSplitText = new SplitText(element, { type: "chars, words" });
      gsap.from(animationSplitText.words, {
        duration: 1,
        delay: delayValue,
        x: 20,
        autoAlpha: 0,
        stagger: staggerAmount,
        scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
  }

  if ($(".text-anime-style-2").length) {
    let staggerAmount = 0.03,
      translateXValue = 20,
      delayValue = 0.1,
      easeType = "power2.out",
      animatedTextElements = document.querySelectorAll(".text-anime-style-2");

    animatedTextElements.forEach((element) => {
      let animationSplitText = new SplitText(element, { type: "chars, words" });
      gsap.from(animationSplitText.chars, {
        duration: 1,
        delay: delayValue,
        x: translateXValue,
        autoAlpha: 0,
        stagger: staggerAmount,
        ease: easeType,
        scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
  }

  if ($(".text-anime-style-3").length) {
    let animatedTextElements = document.querySelectorAll(".text-anime-style-3");

    animatedTextElements.forEach((element) => {
      //Reset if needed
      if (element.animation) {
        element.animation.progress(1).kill();
        element.split.revert();
      }

      element.split = new SplitText(element, {
        type: "lines,words,chars",
        linesClass: "split-line",
      });
      gsap.set(element, { perspective: 400 });

      gsap.set(element.split.chars, {
        opacity: 0,
        x: "50",
      });

      element.animation = gsap.to(element.split.chars, {
        scrollTrigger: { trigger: element, start: "top 90%" },
        x: "0",
        y: "0",
        rotateX: "0",
        opacity: 1,
        duration: 1,
        ease: Back.easeOut,
        stagger: 0.02,
      });
    });
  }

  /* Parallaxie js */
  var $parallaxie = $(".parallaxie");
  if ($parallaxie.length && $window.width() > 991) {
    if ($window.width() > 768) {
      $parallaxie.parallaxie({
        speed: 0.55,
        offset: 0,
      });
    }
  }

  /* Zoom Gallery screenshot */
  $(".gallery-items").magnificPopup({
    delegate: "a",
    type: "image",
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: "mfp-with-zoom",
    image: {
      verticalFit: true,
    },
    gallery: {
      enabled: true,
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function (element) {
        return element.find("img");
      },
    },
  });

  /* Contact form validation */
  var $contactform = $("#contactForm");
  $contactform.validator({ focus: false }).on("submit", function (event) {
    if (!event.isDefaultPrevented()) {
      event.preventDefault();
      submitForm();
    }
  });

  function submitForm() {
    /* Ajax call to submit form */
    $.ajax({
      type: "POST",
      url: "form-process.php",
      data: $contactform.serialize(),
      success: function (text) {
        if (text === "success") {
          formSuccess();
        } else {
          submitMSG(false, text);
        }
      },
    });
  }

  function formSuccess() {
    $contactform[0].reset();
    submitMSG(true, "Message Sent Successfully!");
  }

  function submitMSG(valid, msg) {
    if (valid) {
      var msgClasses = "h4 text-success";
    } else {
      var msgClasses = "h4 text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
  }
  /* Contact form validation end */

  /* Our Project (filtering) Start */
  $window.on("load", function () {
    if ($(".project-item-boxes").length) {
      /* Init Isotope */
      var $menuitem = $(".project-item-boxes").isotope({
        itemSelector: ".project-item-box",
        layoutMode: "masonry",
        masonry: {
          // use outer width of grid-sizer for columnWidth
          columnWidth: 1,
        },
      });

      /* Filter items on click */
      var $menudisesnav = $(".our-Project-nav li a");
      $menudisesnav.on("click", function (e) {
        var filterValue = $(this).attr("data-filter");
        $menuitem.isotope({
          filter: filterValue,
        });

        $menudisesnav.removeClass("active-btn");
        $(this).addClass("active-btn");
        e.preventDefault();
      });
      $menuitem.isotope({ filter: "*" });
    }
  });
  /* Our Project (filtering) End */

  /* Animated Wow Js */
  new WOW().init();

  /* Popup Video */
  if ($(".popup-video").length) {
    $(".popup-video").magnificPopup({
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: true,
    });
  }
})(jQuery);

$(document).ready(function () {
  // ---------- ПУНИ КОНФИГУРАЦИЈУ КАО JS‑ОБЈЕКАТ ----------------------------
  const cfg = {
    dimensionLimits: {
      minWidth: 600,
      maxWidth: 2000,
      minHeight: 600,
      maxHeight: 2000,
      step: 100,
    },
    materials: {
      pvc: {
        label: "PVC",
        basePricePerM2: { window: 120, door: 150 },
        allowedProducts: [
          "windowSingle",
          "windowDouble",
          "doorSingle",
          "doorDouble",
        ],
        profiles: {
          veka70: { label: "Veka 70 Dekor", addOnPricePerM2: 40 },
          softline: { label: "Veka Softline", addOnPricePerM2: 60 },
          gealan: { label: "Gealan 9000", addOnPricePerM2: 55 },
        },
      },
      aluminium: {
        label: "Алуминијум",
        basePricePerM2: { window: 180, door: null },
        allowedProducts: ["windowSingle", "windowDouble"],
        profiles: {
          aliplast: { label: "Aliplast", addOnPricePerM2: 50 },
          feal: { label: "Feal", addOnPricePerM2: 45 },
        },
      },
      aluminiumWood: {
        label: "Алуминијум‑Дрво",
        basePricePerM2: { window: 230, door: 260 },
        allowedProducts: ["windowSingle", "doorSingle"],
        profiles: {
          komb01: { label: "Combi 01", addOnPricePerM2: 30 },
          komb02: { label: "Combi 02", addOnPricePerM2: 45 },
        },
      },
    },
    chambers: {
      5: { label: "5 комора", addOnPricePerM2: 0 },
      6: { label: "6 комора", addOnPricePerM2: 15 },
      7: { label: "7 комора", addOnPricePerM2: 30 },
    },
    glass: {
      double: { label: "Двослојно", addOnPricePerM2: 25 },
      triple: { label: "Трослојно", addOnPricePerM2: 45 },
    },
    productTypes: {
      windowSingle: { label: "Прозор једнокрилни", leafFactor: 1.0 },
      windowDouble: { label: "Прозор двокрилни", leafFactor: 1.15 },
      doorSingle: { label: "Врата једнокрилна", leafFactor: 1.3 },
      doorDouble: { label: "Врата двокрилна", leafFactor: 1.5 },
    },
    addons: {
      komarnici: { label: "Комарници", addOnPricePerM2: 20 },
      roletne: { label: "Ролетне", addOnPricePerM2: 35 },
    },
  };
  // -------------------------------------------------------------------------

  // ------- DOM елементи ----------------------------------------------------
  // ─── DOM helper ───
  const $id = (id) => document.getElementById(id);

  const els = {
    material: $id("material"),
    productType: $id("productType"),
    profile: $id("profile"),
    chambersBox: $id("chambers"),
    glassBox: $id("glass"),
    width: $id("width"),
    height: $id("height"),
    addonKom: $id("addonKom"),
    addonRol: $id("addonRol"),
    btn: $id("calcBtn"),
    result: $id("result"),
  };

  /* ------------------------------------------------------------------ */
  /* 1)  univerzalni helper – bezbedno dodaje <option> u <select>       */
  /* ------------------------------------------------------------------ */
  function addOpt(selectEl, text, value = "") {
    const opt = document.createElement("option");
    opt.value = value;
    opt.textContent = text;
    selectEl.appendChild(opt); // radi u svakom okruženju
  }

  /* ------------------------------------------------------------------ */
  /* 2)  Функција за попуњавање профила & типова на основу материјала    */
  /* ------------------------------------------------------------------ */
  function updateDependentSelects(materialKey) {
    els.profile.innerHTML = "";
    els.productType.innerHTML = "";

    if (!materialKey) {
      els.profile.disabled = true;
      els.productType.disabled = true;
      return;
    }

    /* --- профили ---------------------------------------------------- */
    addOpt(els.profile, "-- izaberi --", "");
    for (const [pk, pv] of Object.entries(
      cfg.materials[materialKey].profiles
    )) {
      addOpt(els.profile, pv.label, pk);
    }
    els.profile.disabled = false;

    /* --- типови производа ------------------------------------------ */
    addOpt(els.productType, "-- izaberi --", "");
    cfg.materials[materialKey].allowedProducts.forEach((tp) => {
      addOpt(els.productType, cfg.productTypes[tp].label, tp);
    });
    els.productType.disabled = false;
  }

  /* ------------------------------------------------------------------ */
  /* 3)  Иницијално попуњавање свих листи                               */
  /* ------------------------------------------------------------------ */
  function init() {
    /* материј   Mали */
    els.material.innerHTML = "";
    addOpt(els.material, "-- izaberi --", "");
    for (const [k, v] of Object.entries(cfg.materials)) {
      addOpt(els.material, v.label, k);
    }

    /* коморе */
    els.chambersBox.innerHTML = "";
    for (const [k, v] of Object.entries(cfg.chambers)) {
      els.chambersBox.insertAdjacentHTML(
        "beforeend",
        `
        <div class="form-check me-3">
          <input class="form-check-input" type="radio" name="ch" id="ch${k}" value="${k}">
          <label class="form-check-label" for="ch${k}">${v.label}</label>
        </div>`
      );
    }
    document.querySelector('input[name="ch"]')?.click(); // први селектован

    /* стакло */
    els.glassBox.innerHTML = "";
    for (const [k, v] of Object.entries(cfg.glass)) {
      els.glassBox.insertAdjacentHTML(
        "beforeend",
        `
        <div class="form-check me-3">
          <input class="form-check-input" type="radio" name="gl" id="gl${k}" value="${k}">
          <label class="form-check-label" for="gl${k}">${v.label}</label>
        </div>`
      );
    }
    document.querySelector('input[name="gl"]')?.click(); // први селектован

    /* димензије – ширина */
    populateDimensions(
      els.width,
      cfg.dimensionLimits.minWidth,
      cfg.dimensionLimits.maxWidth,
      cfg.dimensionLimits.step
    );

    /* димензије – висина */
    populateDimensions(
      els.height,
      cfg.dimensionLimits.minHeight,
      cfg.dimensionLimits.maxHeight,
      cfg.dimensionLimits.step
    );

    /* почетно стање */
    updateDependentSelects("");
  }

  /* Функција за попуњавање dropdown-а димензија (ширина/висина) */
  function populateDimensions(selectEl, min, max, step) {
    // Clear existing options
    selectEl.innerHTML = "";

    // Add default option
    addOpt(selectEl, "-- izaberi --", "");

    // Make sure we're working with numbers
    min = Number(min);
    max = Number(max);
    step = Number(step);

    console.log(`Populating dimensions: min=${min}, max=${max}, step=${step}`);

    // Explicitly add each option with proper string conversion
    for (let value = min; value <= max; value += step) {
      const optText = `${value} mm`;
      const optValue = String(value);
      console.log(`Adding option: ${optText}, value=${optValue}`);

      // Create and append option directly to avoid any issues with the helper function
      const opt = document.createElement("option");
      opt.value = optValue;
      opt.textContent = optText;
      selectEl.appendChild(opt);
    }
  }

  /* позови init једном на старту */
  init();

  /* даље остаје исти listeners / логика за calculate… */

  // ------- Избор материјала → попуни профиле + типове -----------------------
  els.material.addEventListener("change", () => {
    updateDependentSelects(els.material.value);
  });

  // ------- Калкулација ------------------------------------------------------
  els.btn.addEventListener("click", () => {
    const mKey = els.material.value;
    const pType = els.productType.value;
    const prof = els.profile.value;
    const chamber = document.querySelector('input[name="ch"]:checked')?.value;
    const glass = document.querySelector('input[name="gl"]:checked')?.value;
    const width = els.width.value;
    const height = els.height.value;

    if (!mKey || !pType || !prof || !chamber || !glass || !width || !height) {
      alert("Попуни све кораке.");
      return;
    }

    // Базна цена по m²
    const isWindow = pType.startsWith("window");
    const base =
      cfg.materials[mKey].basePricePerM2[isWindow ? "window" : "door"];

    if (base === null) {
      alert("Ова комбинација није дозвољена.");
      return;
    }

    let priceM2 =
      base +
      cfg.materials[mKey].profiles[prof].addOnPricePerM2 +
      cfg.chambers[chamber].addOnPricePerM2 +
      cfg.glass[glass].addOnPricePerM2;

    if (els.addonKom.checked) priceM2 += cfg.addons.komarnici.addOnPricePerM2;
    if (els.addonRol.checked) priceM2 += cfg.addons.roletne.addOnPricePerM2;

    const widthM = parseInt(width) / 1000; // convert to meters
    const heightM = parseInt(height) / 1000; // convert to meters
    const area = widthM * heightM; // m²
    let total = priceM2 * area * cfg.productTypes[pType].leafFactor;

    els.result.textContent = `Ukupna cena: ${total.toFixed(
      2
    )} € (za ${area.toFixed(2)} m²)`;
    els.result.classList.remove("d-none");
  });
});
