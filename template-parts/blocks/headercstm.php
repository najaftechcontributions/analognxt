<?php
$logo = get_field('logo');
$menu1 = get_field('menu_1');
$menu2 = get_field('menu_2');
$menu3 = get_field('menu_3');
$menu4 = get_field('menu_4');
?>

<header class="headercstm">

  <!-- Desktop Header -->
  <div class="header-inner w-flex u-align-center u-justify-between u-flex-row-reverse-m">

    <!-- Mobile Hamburger -->
    <button class="hamburger w-none w-block-m" id="hamburgerBtn" aria-label="Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Left Menu (Desktop) -->
    <nav class="menu-left w-flex u-gap-9 w-none-m">
      <?php if ($menu1): ?>
        <a href="<?php echo esc_url($menu1['url']); ?>"><?php echo esc_html($menu1['title']); ?></a>
      <?php endif; ?>

      <?php if ($menu2): ?>
        <a href="<?php echo esc_url($menu2['url']); ?>"><?php echo esc_html($menu2['title']); ?></a>
      <?php endif; ?>
    </nav>

    <!-- Logo -->
    <div class="logo u-text-align-center">
      <?php if ($logo): ?>
        <a href="/homepage-demo">
          <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        </a>
      <?php endif; ?>
    </div>

    <!-- Right Menu (Desktop) -->
    <nav class="menu-right w-flex u-gap-9 w-none-m">
      <?php if ($menu3): ?>
        <a href="<?php echo esc_url($menu3['url']); ?>"><?php echo esc_html($menu3['title']); ?></a>
      <?php endif; ?>

      <?php if ($menu4): ?>
        <a href="<?php echo esc_url($menu4['url']); ?>"><?php echo esc_html($menu4['title']); ?></a>
      <?php endif; ?>
    </nav>

  </div>

  <!-- Mobile Dropdown Menu -->
  <div class="mobile-menu w-none u-flex-column u-gap-4 " id="mobileMenu">
    <?php foreach ([$menu1, $menu2, $menu3, $menu4] as $item): ?>
      <?php if ($item): ?>
        <a href="<?php echo esc_url($item['url']); ?>">
          <?php echo esc_html($item['title']); ?>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

</header>

<style>
    a{
        text-decoration: none !important;
    }
.headercstm {
  padding: 1rem 2rem;
  position: relative;
  z-index: 4;

}
@media (max-width:768px){
    .headercstm{
        background-color: #000;
    }
}

.header-inner {
  max-width: 1200px;
  margin: 0 auto;
}

.logo img {
  max-height: 50px;
}

.hamburger {
  background: none;
  border: none;
  cursor: pointer;
  display: none;
  flex-direction: column;
  gap: 5px;
}

.hamburger span {
  width: 24px;
  height: 2px;
  background: #fff;
  display: block;
}

.mobile-menu {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  background: #000;
  padding: 1rem 2rem;
  z-index: 999;
}
/* @media (max-width:768px){
    .mobile-menu{
          display: flex;
  align-items: center;
    }
} */

@media (max-width: 767px) {
  .w-none-m { display: none; }
  .w-block-m { display: block; }
  .hamburger { display: flex; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('hamburgerBtn');
  const menu = document.getElementById('mobileMenu');

  if (!btn || !menu) return;

  btn.addEventListener('click', function () {
    if (menu.classList.contains('w-none')) {
      menu.classList.remove('w-none');
      menu.classList.add('w-flex');
    } else {
      menu.classList.add('w-none');
      menu.classList.remove('w-flex');
    }
  });
});
</script>
