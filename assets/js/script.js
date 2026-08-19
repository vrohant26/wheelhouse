document.addEventListener("DOMContentLoaded", () => {
  // Initialize Lenis Smooth Scroll
  let lenis = null;
  if (typeof Lenis !== "undefined") {
    lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      smoothWheel: true,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);
  }

  // GSAP & ScrollTrigger Setup


  if (typeof gsap !== "undefined") {
    if (typeof ScrollTrigger !== "undefined") {
      gsap.registerPlugin(ScrollTrigger);
    }

    if (lenis && typeof ScrollTrigger !== "undefined") {
      lenis.on("scroll", ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0, 0);
    }

    const aboutSection = document.querySelector(".about-section");
    const slide1 = document.querySelector(".slide-1");
    const slide2 = document.querySelector(".slide-2");
    const projectsSection = document.querySelector(".projects-section");
    const servicesContainer = document.querySelector(".services-container");
    const testimonialSection = document.querySelector(".testimonial-section");

    // 1. Continuous Parallax Float for Images & Pills
    if (aboutSection) {
      const floatScrub = gsap.timeline({
        scrollTrigger: {
          trigger: ".about-section",
          start: "top bottom",
          end: "bottom top",
          scrub: 1.5,
        },
      });

      floatScrub
        .to(".float-img-left", { y: -140, rotate: -5, ease: "none" }, 0)
        .to(".float-img-right", { y: -180, rotate: 5, ease: "none" }, 0)
        .to(".pill-1", { y: -100, rotate: -15, ease: "none" }, 0)
        .to(".pill-2", { y: -130, rotate: 12, ease: "none" }, 0)
        .to(".pill-3", { y: -80, rotate: -8, ease: "none" }, 0)
        .to(".pill-4", { y: -150, rotate: 14, ease: "none" }, 0);
    }

    // 2. GSAP Dual-Slide Pinned Transition for About Section
    if (aboutSection && slide1 && slide2) {
      const pinTl = gsap.timeline({
        scrollTrigger: {
          trigger: ".about-section",
          start: "top top",
          end: "+=150%",
          pin: true,
          pinSpacing: true,
          scrub: 1,
          anticipatePin: 1,
        },
      });

      pinTl
        .to(
          slide1,
          {
            opacity: 0,
            scale: 0.94,
            pointerEvents: "none",
            duration: 0.6,
            ease: "power2.inOut",
          },
          0.3,
        )
        .to(
          slide2,
          {
            opacity: 1,
            scale: 1,
            pointerEvents: "auto",
            duration: 0.6,
            ease: "power2.inOut",
          },
          0.7,
        )
        .fromTo(
          ".circle-green",
          { scale: 0.6 },
          { scale: 1, duration: 0.4 },
          0.8,
        )
        .fromTo(
          ".circle-purple",
          { scale: 0.6 },
          { scale: 1, duration: 0.4 },
          0.85,
        )
        .fromTo(
          ".circle-dark",
          { scale: 0.6 },
          { scale: 1, duration: 0.4 },
          0.9,
        );
    }

    // 3. DRY Desktop & Mobile Scroll-Driven Parallax Setup
    const mm = gsap.matchMedia();
    mm.add(
      {
        isDesktop: "(min-width: 769px)",
        isMobile: "(max-width: 768px)",
      },
      (context) => {
        const { isDesktop } = context.conditions;

        if (projectsSection && slide2) {
          gsap.to(slide2, {
            y: isDesktop ? 300 : 80,
            ease: "none",
            scrollTrigger: {
              trigger: projectsSection,
              start: "top bottom",
              end: "top top",
              scrub: isDesktop ? true : 0.5,
            },
          });
        }

        if (servicesContainer && testimonialSection) {
          gsap.to(servicesContainer, {
            y: isDesktop ? 250 : 60,
            ease: "none",
            scrollTrigger: {
              trigger: testimonialSection,
              start: "top bottom",
              end: "top top",
              scrub: isDesktop ? true : 0.5,
            },
          });
        }

        const aboutGridContainer = document.querySelector(
          ".about-grid-container",
        );
        const whatWeDoSection = document.querySelector(".what-we-do-section");

        if (aboutGridContainer && whatWeDoSection) {
          gsap.to(aboutGridContainer, {
            y: isDesktop ? 220 : 60,
            ease: "none",
            scrollTrigger: {
              trigger: whatWeDoSection,
              start: "top bottom",
              end: "top top",
              scrub: isDesktop ? true : 0.5,
            },
          });
        }
      },
    );

    // 4. Project Cards Entrance
    const projectCards = document.querySelectorAll(".grid-project-card");
    if (projectCards.length > 0) {
      gsap.fromTo(
        projectCards,
        { scale: 0.75, opacity: 0, y: 60 },
        {
          scale: 1,
          opacity: 1,
          y: 0,
          duration: 0.9,
          stagger: 0.15,
          ease: "back.out(1.7)",
          scrollTrigger: { trigger: ".projects-grid", start: "top 80%" },
        },
      );
    }

    // 5. Service Circles Entrance
    const serviceCircles = document.querySelectorAll(".service-circle");
    if (serviceCircles.length > 0) {
      gsap.fromTo(
        serviceCircles,
        { scale: 0 },
        {
          scale: 1,
          duration: 0.5,
          stagger: 0.18,
          ease: "back.out(2)",
          scrollTrigger: {
            trigger: ".services-circles-wrapper",
            start: "top 80%",
          },
        },
      );
    }

    // 5b. About Grid Entrance (Reusing Project Cards Bounce Scale Effect)
    const aboutGridItems = document.querySelectorAll(".about-grid-item");
    if (aboutGridItems.length > 0) {
      gsap.fromTo(
        aboutGridItems,
        { scale: 0.75, opacity: 0, y: 60 },
        {
          scale: 1,
          opacity: 1,
          y: 0,
          duration: 0.9,
          stagger: 0.12,
          ease: "back.out(1.7)",
          scrollTrigger: {
            trigger: ".about-grid-container",
            start: "top 85%",
          },
        },
      );
    }

    // 5c. What We Do Cards Entrance
    const whatWeDoCards = document.querySelectorAll(".what-we-do-card");
    if (whatWeDoCards.length > 0) {
      gsap.fromTo(
        whatWeDoCards,
        { scale: 0.8, opacity: 0, y: 60 },
        {
          scale: 1,
          opacity: 1,
          y: 0,
          duration: 0.9,
          stagger: 0.15,
          ease: "back.out(1.7)",
          scrollTrigger: {
            trigger: ".what-we-do-grid",
            start: "top 85%",
          },
        },
      );
    }

    // 5d. Metrics Section Entrance
    const metricItems = document.querySelectorAll(".metric-item");
    if (metricItems.length > 0) {
      gsap.fromTo(
        metricItems,
        { scale: 0.8, opacity: 0, y: 40 },
        {
          scale: 1,
          opacity: 1,
          y: 0,
          duration: 0.8,
          stagger: 0.08,
          ease: "back.out(1.7)",
          scrollTrigger: {
            trigger: ".metrics-stats-grid",
            start: "top 85%",
          },
        },
      );
    }

    // 5e. Metrics Background Image Parallax
    const metricsSection = document.querySelector(".metrics-section");
    const metricsBgImg = document.querySelector(".metrics-bg-img");
    if (metricsSection && metricsBgImg) {
      gsap.to(metricsBgImg, {
        y: "25%",
        ease: "none",
        scrollTrigger: {
          trigger: metricsSection,
          start: "top bottom",
          end: "bottom top",
          scrub: true,
        },
      });
    }

    // 6. Interactive Testimonial Carousel with Reusable SplitText Helper
    const themeUri =
      typeof wheelhouseData !== "undefined" && wheelhouseData.themeUri
        ? wheelhouseData.themeUri
        : "";

    const testimonialsData = [
      {
        quote:
          '"WE ARE PROUD TO RECOGNIZE THE WHEELHOUSE FOR THEIR INVALUABLE SUPPORT DURING AIMA INDEX 2025. THEIR HANDS-ON DEDICATION MADE THEM AN ESSENTIAL PARTNER IN BRINGING THE INVESTMENT MAHA KUMBH TO LIFE."',
        name: "MR. LALIT BOOB",
        title: "PRESIDENT - AIMA",
        img: themeUri + "/assets/images/testimonials%20images/AIMA.jpg",
        counter: "01/05",
      },
      {
        quote:
          "\"THE WHEELHOUSE HAS BEEN OUR TRUSTED PARTNER FOR 4 YEARS. FROM HIGH-PROFILE EVENTS TO MANAGING OUR AUDITORIUM'S TECHNICAL COMPLEXITIES, THEIR 360-DEGREE APPROACH ENSURES ABSOLUTE PROFESSIONALISM. THEY DON'T JUST MANAGE EVENTS; THEY ELEVATE THEM.\"",
        name: "MR. AKSHAY DESHPANDE",
        title: "SYSTEM & QUALITY DIRECTOR - GOKHALE EDUCATION SOCIETY",
        img:
          themeUri +
          "/assets/images/testimonials%20images/Gokhale%20Education%20Society%20Logo.png",
        counter: "02/05",
      },
      {
        quote:
          '"THE WHEELHOUSE WAS THE PERFECT PARTNER FOR UGAM FEST 2025. THEY MANAGED OUR COMPLEX TECHNICAL PRODUCTION WITH EASE AND POSITIVE ENERGY. THEIR EXPERTISE ELEVATED OUR EVENT, AND WE COULDN\'T ASK FOR A MORE RELIABLE TEAM."',
        name: "MRS. SHRADDHA SHRINGARPURE",
        title: "CEO - DIGANTA SWARAJ FOUNDATION",
        img:
          themeUri +
          "/assets/images/testimonials%20images/Diganta%20Swaraj%20Foundation.png",
        counter: "03/05",
      },
      {
        quote:
          '"THE WHEELHOUSE HAS BEEN INSTRUMENTAL TO ATOMBERG\'S SUCCESS FOR 6 YEARS. THEY CONSISTENTLY HANDLE OUR MULTIFACETED EVENTS AND NATIONWIDE BRANDING WITH UNMATCHED TECHNICAL EXPERTISE. A TRULY ELEVATING PARTNER."',
        name: "MR. RAHUL PATIL",
        title: "WEST ZONE BRANDING MANAGER - ATOMBERG TECHNOLOGIES",
        img: themeUri + "/assets/images/testimonials%20images/atomberg.png",
        counter: "04/05",
      },
      {
        quote:
          '"THE WHEELHOUSE PROVED TO BE AN EXCEPTIONAL PARTNER DURING OUR 15-CITY H40 LAUNCH ACROSS MAHARASHTRA & OTHER STATES. THEIR DEDICATION, FLAWLESS LARGE-SCALE EXECUTION, AND ALIGNMENT WITH OUR INTERNATIONAL QUALITY STANDARDS MAKE THEM A STANDOUT TEAM."',
        name: "MR. JAYESH CHAWLA",
        title: "KERAKOLL INDIA PRIVATE LIMITED",
        img: themeUri + "/assets/images/logo.png",
        counter: "05/05",
      },
    ];

    let currentTestimonialIndex = 0;
    let isTestimonialAnimating = false;

    const testimonialPrevBtn = document.getElementById("testimonial-prev-btn");
    const testimonialNextBtn = document.getElementById("testimonial-next-btn");
    const testimonialQuoteEl = document.getElementById("testimonial-quote");
    const testimonialNameEl = document.getElementById("testimonial-name");
    const testimonialTitleEl = document.getElementById("testimonial-title");
    const testimonialImgEl = document.getElementById("testimonial-img");
    const testimonialCounterEl = document.getElementById("testimonial-counter");
    const dotItems = document.querySelectorAll(".dot-item");

    // DRY Helper to create SplitText instances & extract line nodes
    function createSplitLines(elements) {
      if (typeof SplitText === "undefined")
        return { splits: [], lines: elements };
      const splits = elements.map((el) => new SplitText(el, { type: "lines" }));
      const lines = splits.flatMap((s) => s.lines);
      return { splits, lines };
    }

    function goToTestimonial(newIndex) {
      if (isTestimonialAnimating || newIndex === currentTestimonialIndex)
        return;
      isTestimonialAnimating = true;

      const data = testimonialsData[newIndex];

      // Person Image Fade Out & Swap
      gsap.to(testimonialImgEl, {
        opacity: 0,
        scale: 0.95,
        duration: 0.3,
        onComplete: () => {
          testimonialImgEl.src = data.img;
          gsap.to(testimonialImgEl, { opacity: 1, scale: 1, duration: 0.4 });
        },
      });

      // SplitText Exit Animation
      const textEls = [
        testimonialQuoteEl,
        testimonialNameEl,
        testimonialTitleEl,
      ];
      const currentSplit = createSplitLines(textEls);

      gsap.to(currentSplit.lines, {
        y: -35,
        opacity: 0,
        stagger: 0.04,
        duration: 0.35,
        ease: "power2.in",
        onComplete: () => {
          currentSplit.splits.forEach((s) => s.revert());

          testimonialQuoteEl.textContent = data.quote;
          testimonialNameEl.textContent = data.name;
          testimonialTitleEl.textContent = data.title;
          testimonialCounterEl.textContent = data.counter;

          // SplitText Entrance Animation
          const newSplit = createSplitLines(textEls);

          gsap.fromTo(
            newSplit.lines,
            { y: 35, opacity: 0 },
            {
              y: 0,
              opacity: 1,
              stagger: 0.05,
              duration: 0.5,
              ease: "power2.out",
              onComplete: () => {
                isTestimonialAnimating = false;
              },
            },
          );
        },
      });

      currentTestimonialIndex = newIndex;
      dotItems.forEach((dot, idx) => {
        dot.classList.toggle("active", idx === currentTestimonialIndex);
      });
    }

    if (testimonialNextBtn) {
      testimonialNextBtn.addEventListener("click", () => {
        goToTestimonial(
          (currentTestimonialIndex + 1) % testimonialsData.length,
        );
      });
    }

    if (testimonialPrevBtn) {
      testimonialPrevBtn.addEventListener("click", () => {
        goToTestimonial(
          (currentTestimonialIndex - 1 + testimonialsData.length) %
            testimonialsData.length,
        );
      });
    }

    dotItems.forEach((dot) => {
      dot.addEventListener("click", () => {
        const idx = parseInt(dot.getAttribute("data-index"), 10);
        goToTestimonial(idx);
      });
    });

    // GSAP Hero Entrance Animations
    const heroCardTarget = document.querySelector(
      ".hero-card, .about-hero-card, .contact-hero-card, .work-hero-card, .services-hero-card",
    );

    if (heroCardTarget) {
      const tl = gsap.timeline({
        defaults: { ease: "power3.out", duration: 1 },
      });
      tl.from(heroCardTarget, { opacity: 0, scale: 0.98, duration: 1.2 })
        .from(
          ".hero-logo-badge",
          { y: -30, opacity: 0, duration: 0.8 },
          "-=0.8",
        )
        .from(
          ".hero-nav-container",
          { y: -30, opacity: 0, duration: 0.8 },
          "-=0.8",
        );

      if (document.querySelector(".hero-title span")) {
        tl.from(
          ".hero-title span",
          { y: 40, opacity: 0, stagger: 0.15, duration: 0.9 },
          "-=0.6",
        );
      }
      if (document.querySelector(".hero-bottom-card")) {
        tl.from(
          ".hero-bottom-card",
          { y: 30, opacity: 0, duration: 0.8 },
          "-=0.7",
        );
      }
    }

    // About Grid Cards Reveal
    const aboutGridCardItems = document.querySelectorAll(".about-grid-item");
    if (aboutGridCardItems.length > 0) {
      gsap.fromTo(
        aboutGridCardItems,
        { opacity: 0, y: 50 },
        {
          opacity: 1,
          y: 0,
          duration: 0.8,
          stagger: 0.12,
          ease: "power2.out",
          scrollTrigger: {
            trigger: ".about-grid-section",
            start: "top 80%",
          },
        },
      );
    }

    // Metrics Counter Reveal
    const aboutMetricItems = document.querySelectorAll(".metric-item");
    if (aboutMetricItems.length > 0) {
      gsap.fromTo(
        aboutMetricItems,
        { opacity: 0, y: 40 },
        {
          opacity: 1,
          y: 0,
          duration: 0.7,
          stagger: 0.1,
          ease: "power2.out",
          scrollTrigger: {
            trigger: ".about-metrics-section",
            start: "top 85%",
          },
        },
      );
    }

    // Client Logos Reveal
    const clientLogoCards = document.querySelectorAll(".client-logo-card");
    if (clientLogoCards.length > 0) {
      gsap.fromTo(
        clientLogoCards,
        { opacity: 0, scale: 0.85, y: 30 },
        {
          opacity: 1,
          scale: 1,
          y: 0,
          duration: 0.6,
          stagger: 0.05,
          ease: "back.out(1.4)",
          scrollTrigger: {
            trigger: ".about-clients-section",
            start: "top 80%",
          },
        },
      );
    }

    // Services Spotlight Main Image & Floating Cards Scroll Parallax
    const servicesSpotlightSection = document.querySelector(
      ".services-spotlight-section",
    );
    const servicesMainImg = document.querySelector(".services-main-img");
    const servicesCollageWrapper = document.querySelector(
      ".services-collage-wrapper",
    );
    const cardTopScroll = document.querySelector(
      ".services-floating-card.card-top",
    );
    const cardBottomScroll = document.querySelector(
      ".services-floating-card.card-bottom",
    );

    if (servicesSpotlightSection && servicesMainImg) {
      gsap.fromTo(
        servicesMainImg,
        { y: "-10%" },
        {
          y: "10%",
          ease: "none",
          scrollTrigger: {
            trigger: servicesSpotlightSection,
            start: "top bottom",
            end: "bottom top",
            scrub: true,
          },
        },
      );
    }

    if (servicesCollageWrapper) {
      if (cardTopScroll) {
        gsap.to(cardTopScroll, {
          y: -40,
          ease: "none",
          scrollTrigger: {
            trigger: servicesCollageWrapper,
            start: "top bottom",
            end: "bottom top",
            scrub: 1,
          },
        });
      }
      if (cardBottomScroll) {
        gsap.to(cardBottomScroll, {
          y: -65,
          ease: "none",
          scrollTrigger: {
            trigger: servicesCollageWrapper,
            start: "top bottom",
            end: "bottom top",
            scrub: 1.2,
          },
        });
      }
    }

    // Scroll-Driven Section Parallax: Spotlight section moves slower while Capabilities section slides over it
    const spotlightSec = document.querySelector(".services-spotlight-section");
    const capabilitiesSec = document.querySelector(
      ".services-capabilities-section",
    );

    if (spotlightSec && capabilitiesSec) {
      gsap.to(spotlightSec, {
        y: "35vh",
        ease: "none",
        scrollTrigger: {
          trigger: spotlightSec,
          start: "bottom bottom",
          end: "bottom top",
          scrub: true,
        },
      });
    }

    // Scroll-Driven Section Parallax: "Our Purpose" section moves slower while Testimonial section slides over it
    const purposeSec = document.querySelector(".about-vision-mission-section");
    const testimonialSec = document.querySelector(".testimonial-section");

    if (purposeSec && testimonialSec) {
      gsap.to(purposeSec, {
        y: "35vh",
        ease: "none",
        scrollTrigger: {
          trigger: purposeSec,
          start: "bottom bottom",
          end: "bottom top",
          scrub: true,
        },
      });
    }


    // Services Capabilities Rows Entrance Reveal
    const capabilityRows = document.querySelectorAll(
      ".services-capability-row",
    );

    if (capabilityRows.length > 0) {
      gsap.fromTo(
        capabilityRows,
        { opacity: 0, y: 45 },
        {
          opacity: 1,
          y: 0,
          duration: 0.8,
          stagger: 0.25,
          ease: "power2.out",
          scrollTrigger: {
            trigger: ".services-capabilities-section",
            start: "top 75%",
          },
        },
      );
    }
  }

  // Mobile Hamburger Navigation Drawer Toggle
  const mobileMenuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenuDrawer = document.getElementById("mobile-menu-drawer");
  const mobileMenuLinks = document.querySelectorAll(".mobile-menu-link");

  if (mobileMenuBtn && mobileMenuDrawer) {
    mobileMenuBtn.addEventListener("click", () => {
      const isActive = mobileMenuBtn.classList.toggle("active");
      mobileMenuDrawer.classList.toggle("active", isActive);
    });

    mobileMenuLinks.forEach((link) => {
      link.addEventListener("click", () => {
        mobileMenuBtn.classList.remove("active");
        mobileMenuDrawer.classList.remove("active");
      });
    });
  }

  // Work Page Category Filtering Logic
  const filterBtns = document.querySelectorAll(".work-filter-btn");
  const projectCards = document.querySelectorAll(".work-project-card");

  if (filterBtns.length > 0 && projectCards.length > 0) {
    filterBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        const filter = btn.getAttribute("data-filter");

        filterBtns.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");

        projectCards.forEach((card) => {
          const categories = card.getAttribute("data-category") || "";
          if (filter === "all" || categories.includes(filter)) {
            card.style.display = "flex";
            setTimeout(() => {
              card.style.opacity = "1";
              card.style.transform = "translateY(0)";
            }, 50);
          } else {
            card.style.opacity = "0";
            card.style.transform = "translateY(20px)";
            setTimeout(() => {
              card.style.display = "none";
            }, 300);
          }
        });
      });
    });
  }

  // About Page Client Industry Category Filtering Logic
  const clientFilterBtns = document.querySelectorAll(".client-filter-btn");
  const clientCards = document.querySelectorAll(".client-logo-card");

  if (clientFilterBtns.length > 0 && clientCards.length > 0) {
    const activeBtn = document.querySelector(".client-filter-btn.active") || clientFilterBtns[0];
    if (activeBtn) {
      const initialFilter = activeBtn.getAttribute("data-filter");
      clientCards.forEach((card) => {
        const categories = card.getAttribute("data-category") || "";
        if (initialFilter === "all" || categories.includes(initialFilter)) {
          card.style.display = "flex";
          card.style.opacity = "1";
          card.style.transform = "scale(1)";
        } else {
          card.style.display = "none";
          card.style.opacity = "0";
          card.style.transform = "scale(0.9)";
        }
      });
    }

    clientFilterBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        const filter = btn.getAttribute("data-filter");

        clientFilterBtns.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");

        clientCards.forEach((card) => {
          const categories = card.getAttribute("data-category") || "";
          if (filter === "all" || categories.includes(filter)) {
            card.style.display = "flex";
            setTimeout(() => {
              card.style.opacity = "1";
              card.style.transform = "scale(1)";
            }, 50);
          } else {
            card.style.opacity = "0";
            card.style.transform = "scale(0.9)";
            setTimeout(() => {
              card.style.display = "none";
            }, 250);
          }
        });
      });
    });
  }


  // Single project page navigation is active (cards link directly to single-projects.php)


  // Services FAQ Accordion Interactivity (Zero Jump with Dynamic ScrollHeight & ScrollTrigger Refresh)
  const faqAccordionItems = document.querySelectorAll(".faq-accordion-item");
  if (faqAccordionItems.length > 0) {
    faqAccordionItems.forEach((item) => {
      const header = item.querySelector(".faq-accordion-header");
      const body = item.querySelector(".faq-accordion-body");

      // Set initial scrollHeight for pre-opened active items on page load
      if (item.classList.contains("active") && body) {
        body.style.maxHeight = body.scrollHeight + "px";
        if (header) header.setAttribute("aria-expanded", "true");
      }

      if (header && body) {
        header.addEventListener("click", (e) => {
          e.preventDefault();
          const isActive = item.classList.contains("active");

          // Close all other accordion items smoothly
          faqAccordionItems.forEach((other) => {
            if (other !== item) {
              other.classList.remove("active");
              const otherHeader = other.querySelector(".faq-accordion-header");
              const otherBody = other.querySelector(".faq-accordion-body");
              if (otherHeader) otherHeader.setAttribute("aria-expanded", "false");
              if (otherBody) otherBody.style.maxHeight = "0px";
            }
          });

          // Toggle current accordion item
          if (isActive) {
            item.classList.remove("active");
            header.setAttribute("aria-expanded", "false");
            body.style.maxHeight = "0px";
          } else {
            item.classList.add("active");
            header.setAttribute("aria-expanded", "true");
            body.style.maxHeight = body.scrollHeight + "px";
          }

          // Recalculate Lenis smooth scroll and GSAP ScrollTrigger bounds smoothly without layout jump
          setTimeout(() => {
            if (typeof ScrollTrigger !== "undefined") {
              ScrollTrigger.refresh();
            }
            if (lenis && typeof lenis.resize === "function") {
              lenis.resize();
            }
          }, 400);
        });
      }
    });
  }



  // Services Page Floating Cards Directional Mouse Strike Displacement (z-index preserved)

  const floatingCards = document.querySelectorAll(".services-floating-card");

  if (floatingCards.length > 0 && typeof gsap !== "undefined") {
    floatingCards.forEach((card) => {
      const isTop = card.classList.contains("card-top");
      const initialRotation = isTop ? 7 : -6;
      let lastX = 0;
      let lastY = 0;

      card.addEventListener("mouseenter", (e) => {
        const rect = card.getBoundingClientRect();
        const cardCenterX = rect.left + rect.width / 2;
        const cardCenterY = rect.top + rect.height / 2;

        const diffX = e.clientX - cardCenterX;
        const diffY = e.clientY - cardCenterY;

        // Displace in direction of cursor strike with larger displacement & no scale
        const strikeX = diffX < 0 ? 100 : -100;
        const strikeY = diffY < 0 ? 50 : -50;
        const strikeRot =
          diffX < 0 ? initialRotation + 10 : initialRotation - 10;

        gsap.killTweensOf(card);

        // Impulse Strike -> Elastic Spring Back to Original Resting Position
        gsap
          .timeline()
          .to(card, {
            x: strikeX,
            y: strikeY,
            rotation: strikeRot,
            scale: 1,
            boxShadow: "0 25px 50px rgba(0, 0, 0, 0.3)",
            duration: 1,
            ease: "power3.out",
          })
          .to(card, {
            x: 0,
            y: 0,
            rotation: initialRotation,
            scale: 1,
            boxShadow: "0 15px 35px rgba(0, 0, 0, 0.2)",
            duration: 1,
            ease: "elastic.out(1.2, 0.4)",
          });
      });

      card.addEventListener("mousemove", (e) => {
        if (lastX && lastY) {
          const moveX = e.clientX - lastX;
          const moveY = e.clientY - lastY;
          if (Math.abs(moveX) > 5 || Math.abs(moveY) > 5) {
            const pushX = Math.min(Math.max(moveX * 2.2, -50), 50);
            const pushY = Math.min(Math.max(moveY * 2.2, -35), 35);

            gsap.to(card, {
              x: pushX,
              y: pushY,
              scale: 1,
              duration: 0.18,
              ease: "power2.out",
              overwrite: "auto",
              onComplete: () => {
                gsap.to(card, {
                  x: 0,
                  y: 0,
                  rotation: initialRotation,
                  scale: 1,
                  duration: 0.7,
                  ease: "elastic.out(1, 0.5)",
                });
              },
            });
          }
        }
        lastX = e.clientX;
        lastY = e.clientY;
      });

      card.addEventListener("mouseleave", () => {
        lastX = 0;
        lastY = 0;
        gsap.to(card, {
          x: 0,
          y: 0,
          rotation: initialRotation,
          scale: 1,
          boxShadow: "0 15px 35px rgba(0, 0, 0, 0.2)",
          duration: 0.7,
          ease: "elastic.out(1, 0.5)",
          overwrite: "auto",
        });
      });
    });
  }

  // View All Work - 5 Image Compilation Loop
  const compilationCard = document.querySelector(".view-all-preview-card");
  if (compilationCard) {
    const compImages = compilationCard.querySelectorAll(".compilation-img");
    if (compImages.length > 1) {
      let activeIndex = 0;
      setInterval(() => {
        compImages[activeIndex].classList.remove("active");
        activeIndex = (activeIndex + 1) % compImages.length;
        compImages[activeIndex].classList.add("active");
      }, 500);
    }
  }
});
