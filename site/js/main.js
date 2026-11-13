/* ================================================================
   CORENTIS CONSULTING GROUP — Main JavaScript
   ================================================================ */

document.addEventListener('DOMContentLoaded', () => {
  /* ---------- Navbar scroll ---------- */
  const navbar = document.querySelector('.navbar');
  const handleScroll = () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
  };
  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  /* ---------- Mobile menu ---------- */
  const toggle = document.querySelector('.nav-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (toggle) {
    toggle.addEventListener('click', () => {
      navLinks.classList.toggle('open');
      toggle.classList.toggle('active');
    });
  }

  // Close menu on link click
  document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('open');
      if (toggle) toggle.classList.remove('active');
    });
  });

  // Mobile dropdown toggle
  document.querySelectorAll('.nav-links > li').forEach(item => {
    const dropdown = item.querySelector('.dropdown');
    if (dropdown && window.innerWidth <= 768) {
      item.querySelector('a').addEventListener('click', (e) => {
        if (item.querySelector('.dropdown')) {
          e.preventDefault();
          item.classList.toggle('active');
        }
      });
    }
  });

  /* ---------- Active nav link ---------- */
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links > li > a').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage) {
      link.classList.add('active');
    }
  });

  /* ---------- Scroll reveal ---------- */
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -80px 0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    observer.observe(el);
  });

  /* ---------- Counter animation ---------- */
  const counters = document.querySelectorAll('[data-count]');
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.dataset.count, 10);
        const suffix = el.dataset.suffix || '';
        let current = 0;
        const step = Math.max(1, Math.floor(target / 60));
        const timer = setInterval(() => {
          current += step;
          if (current >= target) {
            current = target;
            clearInterval(timer);
          }
          el.textContent = current + suffix;
        }, 25);
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(c => counterObserver.observe(c));

  /* ---------- Smooth scroll for anchor links ---------- */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', (e) => {
      const id = a.getAttribute('href');
      if (id.length > 1) {
        e.preventDefault();
        const target = document.querySelector(id);
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  });

  /* ---------- Testimonials Carousel ---------- */
  const track = document.getElementById('testimonials-track');
  const prevBtn = document.getElementById('testimonial-prev');
  const nextBtn = document.getElementById('testimonial-next');

  if (track && prevBtn && nextBtn) {
    let currentSlide = 0;
    const cards = track.querySelectorAll('.testimonial-card');
    const totalCards = cards.length;

    const getCardsPerView = () => {
      if (window.innerWidth <= 768) return 1;
      if (window.innerWidth <= 1024) return 2;
      return 3;
    };

    const updateCarousel = () => {
      const cardsPerView = getCardsPerView();
      const maxSlide = Math.max(0, totalCards - cardsPerView);
      if (currentSlide > maxSlide) currentSlide = maxSlide;

      const gap = 32; // var(--space-xl) = 2rem = 32px
      const cardWidth = cards[0].offsetWidth + gap;
      track.style.transform = `translateX(-${currentSlide * cardWidth}px)`;
    };

    prevBtn.addEventListener('click', () => {
      if (currentSlide > 0) {
        currentSlide--;
        updateCarousel();
      }
    });

    nextBtn.addEventListener('click', () => {
      const cardsPerView = getCardsPerView();
      const maxSlide = Math.max(0, totalCards - cardsPerView);
      if (currentSlide < maxSlide) {
        currentSlide++;
        updateCarousel();
      }
    });

    window.addEventListener('resize', updateCarousel);

    // Auto-play testimonials
    let autoPlayTimer = setInterval(() => {
      const cardsPerView = getCardsPerView();
      const maxSlide = Math.max(0, totalCards - cardsPerView);
      currentSlide = currentSlide >= maxSlide ? 0 : currentSlide + 1;
      updateCarousel();
    }, 5000);

    // Pause on hover
    track.addEventListener('mouseenter', () => clearInterval(autoPlayTimer));
    track.addEventListener('mouseleave', () => {
      autoPlayTimer = setInterval(() => {
        const cardsPerView = getCardsPerView();
        const maxSlide = Math.max(0, totalCards - cardsPerView);
        currentSlide = currentSlide >= maxSlide ? 0 : currentSlide + 1;
        updateCarousel();
      }, 5000);
    });
  }

  /* ---------- Back to Top button ---------- */
  const backToTopBtn = document.getElementById('back-to-top');
  if (backToTopBtn) {
    window.addEventListener('scroll', () => {
      backToTopBtn.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });

    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});
