<?php
/**
 * Template Name: About Me
 * Description: Custom template for the About Me page
 */
get_header();
?>

<main class="hb-about">
  <section class="hb-about-hero">
    <h1 class="hb-about-title">About Me</h1>
  </section>

  <section class="hb-about-content">
    <div class="hb-about-intro">
      <div class="hb-about-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/aboutme_photo.JPG" alt="Hanbang Hua">
      </div>
      <div class="hb-about-text">
        <p>I'm a hardware engineer at Nokia, developing RF linearization algorithms for next-generation wireless systems. My work spans the full stack — from algorithm design to hardware development. I've built multi-layer controlled-impedance PCBs, and written scripts in Rust and Python for wearable medical devices.</p>
        <p>I hold a Master's in Electrical Engineering from Northwestern University and a Bachelor's in Physics from UC Berkeley, where I spent two years as an undergraduate researcher at the Ultrafast Nano-Optics Group investigating 2D materials — graphene, hBN, and transition metal dichalcogenides. At Northwestern's Querrey Simpson Institute for Bioelectronics, I led development of a wireless NIRS health-sensing platform, cutting power consumption by 80% and reducing form factor by 50%.</p>
        <p>Outside the lab, I'm a mountaineer with 20+ summits and have explored 19 national parks across the US. I believe the same mindset that gets you up a mountain — preparation, patience, and timing — applies directly to engineering.</p>
      </div>
    </div>

      <div class="hb-about-achievements">
        <div class="hb-achievement">
          <span class="hb-achievement-number" data-target="300" data-suffix="+">0</span>
          <span class="hb-achievement-label">Electronics Devices Soldered</span>
        </div>
        <div class="hb-achievement">
          <span class="hb-achievement-number" data-target="19" data-suffix="">0</span>
          <span class="hb-achievement-label">National Parks Visited</span>
        </div>
        <div class="hb-achievement">
          <span class="hb-achievement-number" data-target="20" data-suffix="+">0</span>
          <span class="hb-achievement-label">Mountain Summits Reached</span>
        </div>
      </div>

  </section>

  <section class="hb-career">
    <div class="hb-career-inner">
      <h2 class="hb-career-title">Journey</h2>
      <div class="hb-timeline">

        <div class="hb-timeline-item">
          <div class="hb-timeline-date">2019 – 2021</div>
          <div class="hb-timeline-body">
            <div class="hb-timeline-org"><span class="hb-timeline-icon">🐎</span> UC Davis</div>
            <div class="hb-timeline-role">Explored astrophysics and ODMR spectroscopy</div>
          </div>
        </div>

        <div class="hb-timeline-item">
          <div class="hb-timeline-date">2021 – 2023</div>
          <div class="hb-timeline-body">
            <div class="hb-timeline-org"><span class="hb-timeline-icon">🐻</span> UC Berkeley</div>
            <div class="hb-timeline-role">B.A. Physics · Ultrafast Nano-Optics Group</div>
          </div>
        </div>

        <div class="hb-timeline-item">
          <div class="hb-timeline-date">2023 – 2025</div>
          <div class="hb-timeline-body">
            <div class="hb-timeline-org"><span class="hb-timeline-icon">🐾</span> Northwestern University</div>
            <div class="hb-timeline-role">M.S. Electrical Engineering · Bioelectronics Research</div>
          </div>
        </div>

        <div class="hb-timeline-item hb-timeline-item--active">
          <div class="hb-timeline-date">2025 – Now</div>
          <div class="hb-timeline-body">
            <div class="hb-timeline-org"><span class="hb-timeline-icon">🐍</span> Nokia</div>
            <div class="hb-timeline-role">Hardware Engineer · RF Linearization</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="hb-about-content hb-about-content--scripts">
      <script>
      document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.hb-achievement-number[data-target]');
        const duration = 5000;
        
        function easeOutQuart(t) {
          return 1 - Math.pow(1 - t, 4);
        }
        
        function animateCounter(el) {
          const target = parseInt(el.dataset.target);
          const suffix = el.dataset.suffix || '';
          const startTime = performance.now();
          
          function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = easeOutQuart(progress);
            const current = Math.floor(easedProgress * target);
            
            el.textContent = current + suffix;
            
            if (progress < 1) {
              requestAnimationFrame(update);
            } else {
              el.textContent = target + suffix;
            }
          }
          
          requestAnimationFrame(update);
        }
        
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              animateCounter(entry.target);
              observer.unobserve(entry.target);
            }
          });
        }, { threshold: 0.5 });
        
        counters.forEach(counter => observer.observe(counter));

      });
      </script>
  </section>
</main>

<?php get_footer(); ?>

