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
        <p>Welcome to my personal space. I'm passionate about exploring the intersection of science, engineering, and adventure. Whether I'm climbing mountains or solving complex physics problems, I bring the same dedication and curiosity to everything I do.</p>
        <p>My journey has taken me from physics laboratories to mountain peaks, always driven by the desire to understand how things work and push my own limits. I believe in learning by doing, whether that means building electronics from scratch or navigating challenging terrain in national parks across the country.</p>
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
          <span class="hb-achievement-number" data-target="50" data-suffix="+">0</span>
          <span class="hb-achievement-label">Mountain Summits Reached</span>
        </div>
      </div>

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

