<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>
<?php
$news = esc_url(home_url('/news/'));
$service = esc_url(home_url('/service/'));
$works = esc_url(home_url('/works/'));
$overview = esc_url(home_url('/overview/'));
$recruit = esc_url(home_url('/recruit/'));
$contact = esc_url(home_url('/contact/'));
?>

<body>
  <header class="l-header p-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
        <a href="" class="p-header__logoLink">Demo</a>
      </h1>
      <div class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- <nav class="p-header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $news; ?>">NEWS</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $service; ?>">SERVICE</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $works; ?>">WORKS</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $overview; ?>">COMPANY</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $recruit; ?>">RECRUIT</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>">CONTACT</a>
          </li>
        </ul>
      </nav>
      <nav class="p-header__sp-nav sp-nav js-sp-nav">
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $news; ?>">NEWS</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $service; ?>">SERVICE</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $works; ?>">WORKS</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $overview; ?>">COMPANY</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $recruit; ?>">RECRUIT</a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $contact; ?>">CONTACT</a>
          </li>
        </ul>

      </nav> -->
    </div>
  </header>