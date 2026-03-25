<div class="matrix-block">
  <div class="matrix-container">
    <h1 class="matrix-text" data-text="LET’S MAKE SOME MAGIC HAPPEN">LET’S MAKE SOME MAGIC HAPPEN</h1>
    <div class="rain"></div>
  </div>
</div>

<style>
.matrix-block {
  display: none;
  background: #000;
  overflow: hidden;
  margin: 0;
  width: 100%;
  min-height: 100vh;
  position: relative;
}

/* Show only on mobile */
@media (max-width: 768px) {
  .matrix-block {
    display: none;
  }
}

.matrix-container {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  min-height: 100vh;
  z-index: 2;
}

.matrix-text {
  color: #fff;
  font-size: 50px;
  font-weight:700;
   text-align:center;
   text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
  position: relative;
  text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #F29740;
  z-index: 2;
}

.matrix-text::before {
  content: attr(data-text);
  text-align:center;
   text-transform: uppercase;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  animation: glitch 2s infinite;
  clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
  transform: translate(-2px, -2px);
  color: #F29740;
  text-shadow: 0 0 5px #F29740, 0 0 15px #F29740;
}

.rain {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: repeating-linear-gradient(
    0deg,
    rgba(255, 255, 255, 0.1) 0,
    rgba(255, 255, 255, 0.25) 2px,
    transparent 4px
  );
  animation: rain 10s linear infinite;
  z-index: 1;
  pointer-events: none;
}

@keyframes rain {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(100%);
  }
}

@keyframes glitch {
  0%, 100% {
    clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
    transform: translate(0);
  }
  33% {
    clip-path: polygon(0 0, 100% 0, 100% 15%, 0 15%);
    transform: translate(-5px, -5px);
  }
  66% {
    clip-path: polygon(0 85%, 100% 85%, 100% 100%, 0 100%);
    transform: translate(5px, 5px);
  }
}
</style>