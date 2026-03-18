(function () {
  // Get PHP values from the page (required for external JS file)
  const __cfg = window.NewHeroConfig || {};
  const UID = __cfg.uid;
  const PID1 = __cfg.pid1;
  const PID2 = __cfg.pid2;

  // ================================
  // SCRIPT #1 (your first hero script)
  // ================================
  (function () {
    if (!UID || !PID1 || !PID2) return;

    // global registry (survives Barba navigation)
    window.__newHeroRegistry = window.__newHeroRegistry || {};
    const REG = window.__newHeroRegistry;

    function particlesConfig() {
      return {
        fullScreen: { enable: false, zIndex: 0 },
        background: { color: { value: "transparent" } },
        interactivity: {
          events: { onClick: { enable: true, mode: "repulse" }, onHover: { enable: true, mode: "bubble" } },
          modes: {
            bubble: { distance: 200, duration: 2, opacity: 0, size: 0, speed: 3 },
            repulse: { distance: 400, duration: 0.4 }
          }
        },
        particles: {
          color: { value: "#ffffff" },
          move: { direction: "none", enable: true, outModes: "out", random: true, speed: 0.3 },
          number: { density: { enable: true }, value: 1000 },
          opacity: { value: { min: 0.3, max: 1.5 }, animation: { enable: true, speed: 1.5, minimumValue: 0.5, sync: false } },
          shape: { type: "circle" },
          size: { value: 1.5 }
        }
      };
    }

    // track scroll direction (kept from your code)
    let lastY = window.scrollY;
    let scrollDir = 1;
    if (!window.__newHeroScrollDirBound) {
      window.__newHeroScrollDirBound = true;
      window.addEventListener("scroll", () => {
        const y = window.scrollY;
        scrollDir = y > lastY ? 1 : -1;
        lastY = y;
      }, { passive: true });
      // expose to other inits
      window.__newHeroGetScrollDir = () => scrollDir;
    }

    function getRoot() {
      return document.getElementById(UID);
    }

    function lock() {
      document.documentElement.classList.add("newhero-lock");
      document.body.classList.add("newhero-lock");
    }
    function unlock() {
      document.documentElement.classList.remove("newhero-lock");
      document.body.classList.remove("newhero-lock");
    }

    function destroyParticles() {
      if (!window.tsParticles) return;

      const kill = (id) => {
        try {
          const inst = tsParticles.domItem(id);
          if (inst) inst.destroy();
        } catch (_) { }
        const el = document.getElementById(id);
        if (el) el.innerHTML = ""; // remove old canvas if any
      };

      kill(PID1);
      kill(PID2);
    }

    function destroy() {
      const st = REG[UID]?.state;
      if (!st) { unlock(); destroyParticles(); return; }

      // kill GSAP/Observers safely
      try { st.obs && st.obs.kill && st.obs.kill(); } catch (_) { }
      try { st.io && st.io.disconnect && st.io.disconnect(); } catch (_) { }
      try {
        if (st.splitHeadings) st.splitHeadings.forEach(s => { try { s.revert && s.revert(); } catch (_) { } });
      } catch (_) { }

      st.obs = null;
      st.io = null;
      st.splitHeadings = null;

      unlock();
      destroyParticles();

      // allow fresh init next time
      const root = getRoot();
      if (root) root.dataset.inited = "0";
    }

    function init() {
      // IMPORTANT: re-query root EVERY TIME (Barba swaps DOM)
      const root = getRoot();
      if (!root) return;

      // prevent double init on same DOM
      if (root.dataset.inited === "1") return;

      // ensure clean slate (coming back from another page)
      destroy();

      root.dataset.inited = "1";

      // particles (re-init)
      if (window.tsParticles) {
        tsParticles.load(PID1, particlesConfig());
        tsParticles.load(PID2, particlesConfig());
      }

      // gsap deps must exist
      if (!(window.gsap && window.Observer && window.SplitText)) return;
      gsap.registerPlugin(Observer, SplitText);

      lock();

      const sections = root.querySelectorAll(".newhero__section");
      const images = root.querySelectorAll(".bg");
      const headings = gsap.utils.toArray(root.querySelectorAll(".section-heading"));
      const outerWrappers = gsap.utils.toArray(root.querySelectorAll(".outer"));
      const innerWrappers = gsap.utils.toArray(root.querySelectorAll(".inner"));

      const splitHeadings = headings.map(h =>
        SplitText.create(h, { type: "chars,words,lines", linesClass: "clip-text" })
      );

      let currentIndex = 0;
      let animating = false;
      let released = false;

      gsap.set(outerWrappers, { yPercent: 100 });
      gsap.set(innerWrappers, { yPercent: -100 });

      gsap.set(sections, { autoAlpha: 0, zIndex: 0 });
      gsap.set([outerWrappers[0], innerWrappers[0]], { yPercent: 0 });
      gsap.set(images[0], { yPercent: 0 });
      gsap.set(sections[0], { autoAlpha: 1, zIndex: 1 });

      function hardShow(index) {
        gsap.set(sections, { autoAlpha: 0, zIndex: 0 });
        gsap.set(sections[index], { autoAlpha: 1, zIndex: 1 });

        gsap.set(outerWrappers, { yPercent: 100 });
        gsap.set(innerWrappers, { yPercent: -100 });

        gsap.set([outerWrappers[index], innerWrappers[index]], { yPercent: 0 });
        gsap.set(images, { yPercent: 0 });

        currentIndex = index;
      }

      function gotoSection(index, direction) {
        if (animating) return;
        if (index < 0 || index > sections.length - 1) return;
        if (index === currentIndex) return;

        animating = true;

        const fromTop = direction === -1;
        const dFactor = fromTop ? -1 : 1;

        const tl = gsap.timeline({
          defaults: { duration: 1.25, ease: "power1.inOut" },
          onComplete: () => (animating = false)
        });

        gsap.set(sections[currentIndex], { zIndex: 0 });
        tl.to(images[currentIndex], { yPercent: -15 * dFactor })
          .to(sections[currentIndex], { autoAlpha: 0 }, "<");

        gsap.set(sections[index], { autoAlpha: 1, zIndex: 1 });

        tl.fromTo([outerWrappers[index], innerWrappers[index]], {
          yPercent: i => (i ? -100 * dFactor : 100 * dFactor)
        }, { yPercent: 0 }, 0)
          .fromTo(images[index], { yPercent: 15 * dFactor }, { yPercent: 0 }, 0)
          .fromTo(splitHeadings[index].chars, {
            autoAlpha: 0,
            yPercent: 150 * dFactor
          }, {
            autoAlpha: 1,
            yPercent: 0,
            duration: 1,
            ease: "power2",
            stagger: { each: 0.02, from: "random" }
          }, 0.2);

        currentIndex = index;
      }

      function releaseToPage(obs) {
        released = true;
        obs.disable();
        unlock();

        gsap.set(sections[0], { autoAlpha: 0, zIndex: 0 });
        gsap.set(sections[1], { autoAlpha: 1, zIndex: 1 });
        currentIndex = 1;

        const next = root.parentElement?.nextElementSibling || root.nextElementSibling;
        if (next) next.scrollIntoView({ behavior: "smooth", block: "start" });
        else window.scrollBy({ top: window.innerHeight, behavior: "smooth" });
      }

      const obs = Observer.create({
        type: "wheel,touch,pointer",
        wheelSpeed: -1,
        tolerance: 10,
        preventDefault: true,

        onUp: () => {
          if (animating) return;
          if (currentIndex === 0) gotoSection(1, 1);
          else releaseToPage(obs);
        },

        onDown: () => {
          if (animating) return;
          if (currentIndex === 1) gotoSection(0, -1);
        }
      });

      const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
          if (entry.intersectionRatio < 0.75) return;

          if (released || !obs.enabled) {
            lock();
            hardShow(0);
            obs.enable();
            released = false;
          }
        });
      }, { threshold: [0.75] });

      io.observe(root);

      // save state so Barba can destroy it
      REG[UID] = REG[UID] || {};
      REG[UID].state = { obs, io, splitHeadings };
    }

    // expose helpers for Barba views
    window.NewHeroInitAll = function () {
      init();
    };
    window.NewHeroDestroyAll = function () {
      destroy();
    };

    // first load
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", init);
    } else {
      init();
    }
  })();

  // =====================================
  // SCRIPT #2 (dock / overlay) - unchanged
  // =====================================
  (() => {
    const dock = document.getElementById("heroDock");
    const hero = document.querySelector(".newhero__section.second");
    const overlay = document.getElementById("menuOverlay");
    const toggle = document.getElementById("menuToggle");
    const closeBtn = document.getElementById("menuClose");

    if (!dock || !hero || !overlay || !toggle || !closeBtn) return;

    // ---- Sticky dock ----
    const placeholder = document.createElement("div");
    placeholder.className = "hero-dock-placeholder";
    placeholder.style.height = `${dock.offsetHeight}px`;
    placeholder.hidden = true;
    dock.parentNode.insertBefore(placeholder, dock);

    const setSticky = (sticky) => {
      dock.classList.toggle("is-sticky", sticky);
      placeholder.hidden = !sticky;
    };

    const updateSticky = () => {
      // when bottom of hero scrolls above the dock height, make dock sticky
      const threshold = hero.offsetTop + hero.offsetHeight - dock.offsetHeight;
      setSticky(window.scrollY >= threshold);
    };

    let ticking = false;
    const onScroll = () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(() => {
        updateSticky();
        ticking = false;
      });
    };

    window.addEventListener("scroll", onScroll, { passive: true });
    window.addEventListener("resize", () => {
      placeholder.style.height = `${dock.offsetHeight}px`;
      updateSticky();
    });

    updateSticky();

    // ---- Overlay open/close ----
    const openMenu = () => {
      overlay.hidden = false;
      overlay.setAttribute("aria-hidden", "false");
      document.body.classList.add("menu-open");
      toggle.setAttribute("aria-expanded", "true");

      // focus first link
      const first = overlay.querySelector("a,button");
      if (first) first.focus();
    };

    const closeMenu = () => {
      overlay.hidden = true;
      overlay.setAttribute("aria-hidden", "true");
      document.body.classList.remove("menu-open");
      toggle.setAttribute("aria-expanded", "false");
      toggle.focus();
    };

    toggle.addEventListener("click", () => {
      if (overlay.hidden) openMenu();
      else closeMenu();
    });

    closeBtn.addEventListener("click", closeMenu);

    // click outside panel closes
    overlay.addEventListener("click", (e) => {
      if (e.target === overlay) closeMenu();
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && !overlay.hidden) closeMenu();
    });

    // ---- Hover/focus preview image swap ----
    const preview = document.getElementById("menuPreview");
    const links = overlay.querySelectorAll(".overlay-link[data-preview]");

    const activate = (link) => {
      const src = link.getAttribute("data-preview");
      if (preview && src) {
        preview.src = src;
        preview.alt = `${link.textContent.trim()} preview`;
      }
      links.forEach((l) => l.classList.remove("is-active"));
      link.classList.add("is-active");
    };

    links.forEach((link) => {
      link.addEventListener("mouseenter", () => activate(link));
      link.addEventListener("focus", () => activate(link));
    });

    // set initial preview from active link (or first)
    activate(overlay.querySelector(".overlay-link.is-active") || links[0]);
  })();

  // ==========================================
  // SCRIPT #3 (your second hero script) - SAME
  // ==========================================
  (function () {
    if (!UID || !PID1 || !PID2) return;

    const root = document.getElementById(UID);
    if (!root) return;

    // prevent double-init
    if (root.dataset.inited === "1") return;
    root.dataset.inited = "1";

    function particlesConfig() {
      return {
        fullScreen: { enable: false, zIndex: 0 },
        background: { color: { value: "transparent" } },
        interactivity: {
          events: {
            onClick: { enable: true, mode: "repulse" },
            onHover: { enable: true, mode: "bubble" }
          },
          modes: {
            bubble: { distance: 200, duration: 2, opacity: 0, size: 0, speed: 3 },
            repulse: { distance: 400, duration: 0.4 }
          }
        },
        particles: {
          color: { value: "#ffffff" },
          move: { direction: "none", enable: true, outModes: "out", random: true, speed: 0.3 },
          number: { density: { enable: true }, value: 1000 },
          opacity: {
            value: { min: 0.3, max: 1.5 },
            animation: { enable: true, speed: 1.5, minimumValue: 0.5, sync: false }
          },
          shape: { type: "circle" },
          size: { value: 1.5 }
        }
      };
    }

    // track scroll direction (so when user returns from below, start on slide 2)
    let lastY = window.scrollY;
    let scrollDir = 1; // 1 = down, -1 = up
    window.addEventListener("scroll", () => {
      const y = window.scrollY;
      scrollDir = y > lastY ? 1 : -1;
      lastY = y;
    }, { passive: true });

    window.addEventListener("load", () => {
      // particles
      if (window.tsParticles) {
        tsParticles.load(PID1, particlesConfig());
        tsParticles.load(PID2, particlesConfig());
      }

      // gsap
      if (!(window.gsap && window.Observer && window.SplitText)) return;
      gsap.registerPlugin(Observer, SplitText);

      const lock = () => {
        document.documentElement.classList.add("newhero-lock");
        document.body.classList.add("newhero-lock");
      };
      const unlock = () => {
        document.documentElement.classList.remove("newhero-lock");
        document.body.classList.remove("newhero-lock");
      };

      const sections = root.querySelectorAll(".newhero__section");
      const images = root.querySelectorAll(".bg");
      const headings = gsap.utils.toArray(root.querySelectorAll(".section-heading"));
      const outerWrappers = gsap.utils.toArray(root.querySelectorAll(".outer"));
      const innerWrappers = gsap.utils.toArray(root.querySelectorAll(".inner"));

      const splitHeadings = headings.map(h =>
        SplitText.create(h, { type: "chars,words,lines", linesClass: "clip-text" })
      );

      let currentIndex = 0; // start on slide 1
      let animating = false;
      let released = false; // ✅ becomes true when you release to the next section

      // initial transforms
      gsap.set(outerWrappers, { yPercent: 100 });
      gsap.set(innerWrappers, { yPercent: -100 });

      // force initial visibility
      gsap.set(sections, { autoAlpha: 0, zIndex: 0 });
      gsap.set([outerWrappers[0], innerWrappers[0]], { yPercent: 0 });
      gsap.set(images[0], { yPercent: 0 });
      gsap.set(sections[0], { autoAlpha: 1, zIndex: 1 });

      function hardShow(index) {
        // reset everything so hero can run again
        gsap.set(sections, { autoAlpha: 0, zIndex: 0 });
        gsap.set(sections[index], { autoAlpha: 1, zIndex: 1 });

        gsap.set(outerWrappers, { yPercent: 100 });
        gsap.set(innerWrappers, { yPercent: -100 });

        gsap.set([outerWrappers[index], innerWrappers[index]], { yPercent: 0 });
        gsap.set(images, { yPercent: 0 });

        currentIndex = index;
      }

      function gotoSection(index, direction) {
        if (animating) return;
        if (index < 0 || index > sections.length - 1) return;
        if (index === currentIndex) return;

        animating = true;

        const fromTop = direction === -1;
        const dFactor = fromTop ? -1 : 1;

        const tl = gsap.timeline({
          defaults: { duration: 1.25, ease: "power1.inOut" },
          onComplete: () => (animating = false)
        });

        // hide current
        gsap.set(sections[currentIndex], { zIndex: 0 });
        tl.to(images[currentIndex], { yPercent: -15 * dFactor })
          .to(sections[currentIndex], { autoAlpha: 0 }, "<");

        // show next
        gsap.set(sections[index], { autoAlpha: 1, zIndex: 1 });

        tl.fromTo([outerWrappers[index], innerWrappers[index]], {
          yPercent: i => (i ? -100 * dFactor : 100 * dFactor)
        }, {
          yPercent: 0
        }, 0)
          .fromTo(images[index], { yPercent: 15 * dFactor }, { yPercent: 0 }, 0)
          .fromTo(splitHeadings[index].chars, {
            autoAlpha: 0,
            yPercent: 150 * dFactor
          }, {
            autoAlpha: 1,
            yPercent: 0,
            duration: 1,
            ease: "power2",
            stagger: { each: 0.02, from: "random" }
          }, 0.2);

        currentIndex = index;
      }

      // ✅ release hero control + allow page scroll to other blocks
      function releaseToPage(obs) {
        released = true; // ✅ mark released so we can re-arm later
        obs.disable();
        unlock();

        // keep slide 2 visible as final
        gsap.set(sections[0], { autoAlpha: 0, zIndex: 0 });
        gsap.set(sections[1], { autoAlpha: 1, zIndex: 1 });
        currentIndex = 1;

        // scroll to next block (wheel was prevented)
        const next = root.parentElement?.nextElementSibling || root.nextElementSibling;
        if (next) {
          next.scrollIntoView({ behavior: "smooth", block: "start" });
        } else {
          window.scrollBy({ top: window.innerHeight, behavior: "smooth" });
        }
      }

      const obs = Observer.create({
        type: "wheel,touch,pointer",
        wheelSpeed: -1,
        tolerance: 10,
        preventDefault: true,

        onUp: () => {
          if (animating) return;

          if (currentIndex === 0) {
            gotoSection(1, 1);
          } else {
            releaseToPage(obs);
          }
        },

        onDown: () => {
          if (animating) return;
          if (currentIndex === 1) gotoSection(0, -1);
        }
      });

      // initial lock while hero is active
      lock();

      // ✅ MAIN FIX: when hero comes back into view, re-enable observer + lock + choose correct slide
      const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
          if (entry.intersectionRatio < 0.75) return;

          // Only re-arm if we previously released (or observer is disabled)
          if (released || !obs.enabled) {
            lock();
            // if user is scrolling UP back into hero, start on slide 2
            hardShow(scrollDir < 0 ? 1 : 0);
            obs.enable();
            released = false;
          }
        });
      }, { threshold: [0.75] });

      io.observe(root);
    });
  })();

  // ==========================
  // SCRIPT #4 (word rotator)
  // ==========================
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.word-rotator').forEach(el => {
      let words = [];
      try { words = JSON.parse(el.getAttribute('data-words') || '[]'); } catch { }

      // fallback: allow comma-separated if JSON gets stripped
      if (!words.length) {
        const raw = el.getAttribute('data-words');
        if (raw) words = raw.split(',').map(s => s.trim()).filter(Boolean);
      }

      if (!words.length) return;

      let i = Math.max(0, words.indexOf(el.textContent.trim()));
      const interval = 1800;     // time between changes
      const fadeTime = 260;      // must match CSS transition time

      setInterval(() => {
        el.classList.add('is-changing');

        setTimeout(() => {
          i = (i + 1) % words.length;
          el.textContent = words[i];
          el.classList.remove('is-changing');
        }, fadeTime);
      }, interval);
    });
  });
})();
