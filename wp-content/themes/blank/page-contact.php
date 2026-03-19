<?php
/**
 * Template Name: Contact
 * Description: Custom template for the Contact page
 */
get_header();
?>

<main class="hb-contact">
  <section class="hb-contact-hero">
    <h1 class="hb-contact-title">Contact</h1>
    <p class="hb-contact-subtitle">Let's connect</p>
  </section>

  <section class="hb-contact-content">
    <div class="hb-contact-info">
      <div class="hb-contact-card">
        <div class="hb-contact-icon">📧</div>
        <h3>Email</h3>
        <a href="mailto:victorhua26@gmail.com">victorhua26@gmail.com</a>
      </div>
      <div class="hb-contact-card">
        <div class="hb-contact-icon">📱</div>
        <h3>Phone</h3>
        <a href="tel:+15306018495">+1 530-601-8495</a>
      </div>
      <div class="hb-contact-card">
        <div class="hb-contact-icon">📍</div>
        <h3>Location</h3>
        <span>Dallas, TX 75006</span>
      </div>
    </div>

    <div class="hb-contact-social">
      <h2>Find me on</h2>
      <div class="hb-social-links">
        <a href="https://www.instagram.com/victor_hbh/" target="_blank" class="hb-social-btn">
          <span>Instagram</span>
        </a>
        <a href="https://www.linkedin.com/in/hanbang-hua-04667515a/" target="_blank" class="hb-social-btn">
          <span>LinkedIn</span>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

