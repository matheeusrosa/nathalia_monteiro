
  function toggleMenu() { document.body.classList.toggle('menu-open'); }


document.addEventListener("DOMContentLoaded", function() {
  const heroSection = document.getElementById('HeroSection-hero_imobiliario');
  const title2 = document.getElementById('HeroTitle-hero_imobiliario');
  const title1 = document.getElementById('Title1-hero_imobiliario');
  const seal = document.getElementById('Seal-hero_imobiliario');
  const badgeL = document.getElementById('BadgeLeft-hero_imobiliario');
  const badgeR = document.getElementById('BadgeRight-hero_imobiliario');

  // 1. SPLIT TEXT
  if(title2) {
    const lines = title2.innerHTML.split(/<br\s*\/?>/i);
    title2.innerHTML = ''; let d = 0;
    lines.forEach(line => {
      const div = document.createElement('div'); div.className = 'line-segment';
      const txt = line.trim();
      if(txt) {
        for(let c of txt) {
          const s = document.createElement('span');
          s.className = c===' '?'char-animate space-char':'char-animate';
          s.innerHTML = c===' '?'&nbsp;':c; 
          s.style.animationDelay = d+'s'; 
          div.appendChild(s); d+=0.04;
        }
        title2.appendChild(div);
      }
    });
  }

  // 2. TIMELINE DA ANIMAÇÃO
  setTimeout(() => {
    if(heroSection) {
      heroSection.classList.remove('hero-is-intro');
      
      setTimeout(() => {
        if(title2) title2.classList.add('start-anim');
        if(title1) title1.classList.add('show');
        if(seal) seal.classList.add('show');
        if(badgeL) badgeL.classList.add('show');
        if(badgeR) badgeR.classList.add('show');
      }, 1200); 
    }
  }, 1200); 
});


  (function() {
    function waitForPlugins() {
      if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        initModernAnimation();
      } else {
        setTimeout(waitForPlugins, 100);
      }
    }

    function initModernAnimation() {
      const sectionId = "#shopify-section-hero_luxury_quote_LgzM6r";
      const wrapper = document.querySelector(sectionId);
      if (!wrapper) return;

      const quoteEl = wrapper.querySelector('.modern-quote');
      const authorBlock = wrapper.querySelector('.modern-author-block');
      const lineEl = wrapper.querySelector('.modern-line');

      const text = quoteEl.innerText.trim();
      const words = text.split(/\s+/);
      quoteEl.innerHTML = '';
      
      words.forEach(word => {
        const span = document.createElement('span');
        span.innerText = word;
        span.className = 'blur-word';
        quoteEl.appendChild(span);
      });

      const wordElements = wrapper.querySelectorAll('.blur-word');
      
      gsap.set(wordElements, { 
        autoAlpha: 0, 
        y: 40,        
        filter: "blur(12px)", 
        scale: 1.1    
      });
      
      gsap.set(authorBlock, { autoAlpha: 0, y: 20 });
      gsap.set(lineEl, { width: 0 });

      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: wrapper,
          start: "top 75%", 
          end: "bottom 20%",
          toggleActions: "play none none reverse"
        }
      });

      tl.to(wordElements, {
        duration: 1.5,
        autoAlpha: 1, 
        y: 0,         
        filter: "blur(0px)", 
        scale: 1,     
        stagger: 0.1, 
        ease: "power3.out" 
      })
      .to(lineEl, {
        width: "50px",
        duration: 1,
        ease: "expo.out"
      }, "-=0.5")
      .to(authorBlock, {
        autoAlpha: 1,
        y: 0,
        duration: 1
      }, "-=0.8");
    }

    waitForPlugins();
  })();


document.addEventListener("DOMContentLoaded", function() {
  const swiper = new Swiper('.swiper-container-projects_showcase_jet9pk', {
    slidesPerView: 1.2,
    spaceBetween: 20,
    grabCursor: true,
    speed: 800,
    navigation: {
      nextEl: '.next-projects_showcase_jet9pk',
      prevEl: '.prev-projects_showcase_jet9pk',
    },
    breakpoints: {
      600: { slidesPerView: 2.2, spaceBetween: 30 },
      1024: { slidesPerView: 3.2, spaceBetween: 40 }
    }
  });
});


document.addEventListener("DOMContentLoaded", function() {
  // Pequeno delay para garantir que GSAP carregou
  setTimeout(() => {
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      
      const sectionId = "stats_animated_67zg4U";
      const section = document.getElementById(`StatsSection-${sectionId}`);
      const header = document.getElementById(`Header-${sectionId}`);
      const divider = document.getElementById(`Divider-${sectionId}`);
      const items = document.querySelectorAll(`.stat-item-${sectionId}`);

      // 1. Timeline Principal
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: section,
          start: "top 75%", // Dispara quando o topo da seção estiver a 75% da tela
          toggleActions: "play none none none" // Toca uma vez e fica
        }
      });

      // 2. Anima Header (De invisível para visível)
      tl.to(header, {
        y: 0,
        opacity: 1,
        duration: 0.8,
        ease: "power3.out"
      });

      // 3. Expande Linha
      tl.to(divider, {
        width: "100%",
        duration: 1,
        ease: "power2.inOut"
      }, "-=0.4");

      // 4. Anima Cada Item + Contador
      items.forEach((item, i) => {
        const numberEl = item.querySelector(`.stat-number-${sectionId}`);
        // Pega o valor alvo, removendo caracteres não numéricos se houver
        const rawValue = item.querySelector('.target-value').innerText;
        const targetVal = parseInt(rawValue.replace(/[^0-9]/g, '')) || 0;
        
        // Proxy para animação numérica
        let counter = { val: 0 };

        // Revela o bloco (Fade Up)
        tl.to(item, {
          y: 0,
          opacity: 1,
          duration: 0.8,
          ease: "back.out(1.2)", // Leve efeito elástico
          
          // No início da animação deste item, dispara o contador
          onStart: () => {
             gsap.to(counter, {
               val: targetVal,
               duration: 2,
               ease: "power1.out",
               onUpdate: () => {
                 numberEl.innerText = Math.floor(counter.val);
               }
             });
          }
        }, `-=${i === 0 ? 0.6 : 0.6}`); // Stagger manual (sobreposição de tempo)
      });

    } else {
      // Fallback de Segurança: Se o GSAP falhar, mostra tudo imediatamente
      console.warn("GSAP não carregado. Ativando modo fallback.");
      document.querySelector(`#StatsSection-stats_animated_67zg4U .stats-header`).style.opacity = 1;
      document.querySelector(`#StatsSection-stats_animated_67zg4U .stats-header`).style.transform = 'none';
      document.querySelectorAll(`#StatsSection-stats_animated_67zg4U .stat-item`).forEach(el => {
        el.style.opacity = 1;
        el.style.transform = 'none';
        // Mostra o número final direto
        const target = el.querySelector('.target-value').innerText;
        el.querySelector('.stat-number').innerText = target;
      });
    }
  }, 100);
});

