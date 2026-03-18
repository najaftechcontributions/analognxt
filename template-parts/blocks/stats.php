<!-- Futuristic Trusted By + Logos + Stats Section (Montserrat, Black/White) -->
<div class="u-section-spacer"></div>
<section class="u-section mycstmsec">
<div class="fx-trust u-container" aria-label="Trusted by Industry Leaders">
  <div class="fx-trust__inner">
    <!-- Header -->
    <header class="fx-trust__header">
        <div id="button-container">
                <button class="primary-button">
                    Trusted
                </button>
            </div>
      <h2 class="fx-h2">Trusted by Industry Leaders. Proven at Scale.</h2>
      <p class="fx-body">
        From global brands to landmark institutions, Analog NXT has delivered immersive
        environments for some of the region’s most ambitious projects.
        We operate where precision matters; large-scale productions, high-profile launches,
        permanent installations, and technically complex environments.
        Every project is engineered for impact, reliability, and flawless execution.
      </p>
    </header>

    <!-- Logos -->
    <div class="fx-logos" aria-label="Client logos">
      <div class="fx-logos__top">
        <div class="fx-label">Our Clients</div>
      </div>

      <div class="fx-logos__grid">
        <!-- Replace placeholders with your logo <img> tags -->
<div class="image-left w-flex u-align-items-center">
    <img src="https://analognxt.com/wp-content/uploads/2026/03/AYA-logo.png">
</div>

<div class="image-center w-flex u-align-items-center">
    <img src="https://analognxt.com/wp-content/uploads/2026/03/hoh-white-big.png">
</div>



<div class="image-center w-flex u-align-items-center">
    <img src="https://analognxt.com/wp-content/uploads/2026/03/DmLogo-new.svg">
</div>
		  <div class="image-center w-flex u-align-items-center">
    <img src="https://analognxt.com/wp-content/uploads/2026/03/Boulevard_World_Logo.svg.png">
</div>
		   <div class="image-center w-flex u-align-items-center">
    <img src="https://analognxt.com/wp-content/uploads/2026/03/VIA_Riyadh_logo_White_2.png">
</div>
      </div>

      <!-- Decorative glow -->
      <div class="fx-logos__fade" aria-hidden="true"></div>
    </div>

    <!-- Stats -->
    <div class="fx-stats" aria-label="Scale indicators">
      <div class="fx-stats__grid">
        <article class="fx-stat">
          <div class="fx-stat__num" data-count="50" data-suffix="+">50+</div>
          <div class="fx-stat__label">Events Delivered</div>
        </article>

        <article class="fx-stat">
          <div class="fx-stat__num" data-count="20" data-suffix="+">20+</div>
          <div class="fx-stat__label">Projects Delivered</div>
        </article>

        <article class="fx-stat">
          <div class="fx-stat__num fx-stat__num--text">Multiple</div>
          <div class="fx-stat__label">Countries (UAE, KSA)</div>
        </article>

        <article class="fx-stat">
          <div class="fx-stat__num" data-count="24" data-suffix="/7">24/7</div>
          <div class="fx-stat__label">Technical Support Teams</div>
        </article>
      </div>
    </div>
  </div>
</div>
</section>
<div class="u-section-spacer"></div>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
  :root{
    --bg: #050505;
    --panel: rgba(255,255,255,0.04);
    --panel2: rgba(255,255,255,0.02);
    --border: rgba(255,255,255,0.12);
    --border2: rgba(255,255,255,0.18);
    --text: rgba(255,255,255,0.92);
    --muted: rgba(255,255,255,0.62);
    --muted2: rgba(255,255,255,0.45);
    --glow: rgba(255,255,255,0.18);
    --shadow: 0 18px 50px rgba(0,0,0,0.55);
    --radius: 18px;
  }
.image-left {
    text-align: start; 
}

.image-right {
    text-align: start;  
}

.image-center {
    text-align: start; 
}

.image-left img,
.image-right img,
.image-center img {
    max-width: 200px;    /* adjust size */
    width: 100%;         /* responsive */
    display: inline-block; /* ensures text-align works */
    margin: 0;
	
}
	@media (min-width:768px){
    height: 125px;
	}
  .fx-trust{
    font-family: "Montserrat", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    background:
      radial-gradient(1200px 500px at 15% 0%, rgba(255,255,255,0.06), transparent 60%),
      radial-gradient(900px 520px at 90% 35%, rgba(255,255,255,0.05), transparent 55%),
      var(--bg);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: calc(var(--radius) + 6px);
    box-shadow: var(--shadow);
    color: var(--text);
    padding: 28px;
    max-width: 100%;
	width:100%;
	
  }
	.mycstmsec{
  padding: 30px 20px; /* Mobile default */
}

/* Tablet */
@media (min-width: 768px){
  .mycstmsec{
    padding: 40px 20px;
  }
}

/* Desktop */
@media (min-width: 1024px){
  .mycstmsec{
    padding: 60px 20px;
  }
}

  .fx-trust__inner{
    display: grid;
    gap: 18px;
  }

  .fx-trust__header{
    padding: 6px 4px 2px;
  }

  .fx-eyebrow{
    display: inline-flex;
    gap: 10px;
    align-items: center;
    margin: 0 0 10px;
    padding: 7px 12px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.16);
    background: rgba(255,255,255,0.03);
    color: rgba(255,255,255,0.75);
    font-size: 12px;
    letter-spacing: .18em;
    text-transform: uppercase;
  }

  .fx-h2{
    margin: 0 0 10px;
    font-size: 28px;
    line-height: 1.12;
    letter-spacing: 0.3px;
    font-weight: 600;
  }

  .fx-body{
    margin: 0;
    color: rgba(255,255,255,0.78);
    line-height: 1.75;
    font-size: 14px;
    max-width: 72ch;
  }

  /* Logos block */
  .fx-logos{
    position: relative;
    border-radius: var(--radius);
    border: 1px solid var(--border);
    background: linear-gradient(180deg, var(--panel), var(--panel2));
    overflow: hidden;
  }

  .fx-logos__top{
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    gap: 18px;
    padding: 14px 16px 0;
  }

  .fx-label{
    font-size: 12px;
    letter-spacing: .16em;
    text-transform: uppercase;
    color: var(--muted2);
  }

  .fx-note{
    font-size: 12px;
    color: rgba(255,255,255,0.55);
    text-align: right;
  }

  .fx-logos__grid{
    display: grid;
    grid-template-columns: repeat(6, minmax(0, 1fr));
    gap: 30px;
    padding: 14px 16px 16px;
  }

  .fx-logo{
    height: 56px;
    border-radius: 14px;
    border: 1px dashed rgba(255,255,255,0.18);
    background: rgba(0,0,0,0.20);
    display: grid;
    place-items: center;
    color: rgba(255,255,255,0.45);
    font-size: 12px;
    letter-spacing: .12em;
    text-transform: uppercase;
    transition: transform 260ms ease, border-color 260ms ease, background 260ms ease;
  }

  /* If you switch placeholders to <img>, this keeps them clean + monochrome */
  .fx-logo img{
    max-width: 78%;
    max-height: 56%;
    filter: grayscale(1) brightness(1.6);
    opacity: .9;
  }

  @media (hover:hover){
    .fx-logo:hover{
      transform: translateY(-2px);
      border-color: rgba(255,255,255,0.28);
      background: rgba(255,255,255,0.03);
    }
    .fx-logo:hover img{ opacity: 1; }
  }

  .fx-logos__fade{
    pointer-events: none;
    position: absolute;
    inset: 0;
    background:
      radial-gradient(600px 160px at 20% 0%, rgba(255,255,255,0.10), transparent 60%),
      radial-gradient(520px 200px at 85% 100%, rgba(255,255,255,0.08), transparent 55%);
    opacity: .55;
  }

  /* Stats */
  .fx-stats{
    border-radius: var(--radius);
    border: 1px solid var(--border);
    background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.015));
    overflow: hidden;
  }

  .fx-stats__grid{
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .fx-stat{
    padding: 18px 16px;
    position: relative;
    overflow: hidden;
  }

  .fx-stat:not(:last-child){
    border-right: 1px solid rgba(255,255,255,0.10);
  }

  .fx-stat::before{
    content:"";
    position:absolute;
    inset:-1px;
    background:
      radial-gradient(420px 140px at 10% 0%, rgba(255,255,255,0.10), transparent 60%),
      radial-gradient(360px 180px at 90% 100%, rgba(255,255,255,0.06), transparent 60%);
    opacity: 0;
    transition: opacity 420ms ease;
    pointer-events:none;
  }

  @media (hover:hover){
    .fx-stat:hover::before{ opacity: 1; }
    .fx-stat:hover .fx-stat__num{
      transform: translateY(-1px);
      text-shadow: 0 0 34px rgba(255,255,255,0.18);
    }
  }

  .fx-stat__num{
    font-size: 30px;
    letter-spacing: 0.4px;
    font-weight: 600;
    line-height: 1.05;
    margin-bottom: 8px;
    transition: transform 260ms ease, text-shadow 260ms ease;
    position: relative;
    z-index: 1;
  }

  .fx-stat__label{
    color: rgba(255,255,255,0.68);
    font-size: 13px;
    line-height: 1.35;
    position: relative;
    z-index: 1;
  }

  .fx-stat__num--text{
    letter-spacing: 0.2px;
    font-size: 26px;
  }

  /* Responsive */
  @media (max-width: 980px){
    .fx-logos__grid{ grid-template-columns: repeat(3, minmax(0, 1fr)); }
    .fx-stats__grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .fx-stat:nth-child(2){ border-right: none; }
    .fx-stat:nth-child(1), .fx-stat:nth-child(2){
      border-bottom: 1px solid rgba(255,255,255,0.10);
    }
  }

  @media (max-width: 540px){
    .fx-h2{ font-size: 22px; }
    .fx-stats__grid{ grid-template-columns: 1fr; }
    .fx-stat{ border-right: none !important; }
    .fx-stat:not(:last-child){ border-bottom: 1px solid rgba(255,255,255,0.10); }
  }

  /* Reduced motion */
  @media (prefers-reduced-motion: reduce){
    .fx-logo, .fx-stat::before, .fx-stat__num{ transition: none !important; }
  }
</style>

<script>
  // Optional: count-up animation when section enters view
  (function(){
    const root = document.querySelector(".fx-trust");
    if(!root) return;

    const prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    if(prefersReduced) return;

    const nums = Array.from(root.querySelectorAll(".fx-stat__num[data-count]"));
    if(!nums.length) return;

    const animate = (el) => {
      const target = Number(el.dataset.count || "0");
      const suffix = el.dataset.suffix || "";
      const duration = 900; // ms
      const t0 = performance.now();

      const tick = (t) => {
        const p = Math.min(1, (t - t0) / duration);
        const eased = 1 - Math.pow(1 - p, 3);
        const val = Math.round(target * eased);
        el.textContent = val + suffix;
        if(p < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    };

    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if(e.isIntersecting){
          nums.forEach(animate);
          io.disconnect();
        }
      });
    }, { threshold: 0.35 });

    io.observe(root);
  })();
</script>