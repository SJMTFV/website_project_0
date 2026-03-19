<?php
/**
 * Template Name: Projects
 * Description: Custom template for the Projects page
 */
get_header();
?>

<main class="hb-projects">
  <section class="hb-projects-hero">
    <h1 class="hb-projects-title">Projects</h1>
    <p class="hb-projects-subtitle">Research and Engineering Work</p>
  </section>

  <section class="hb-projects-content">
    <div class="hb-project-card">
      <div class="hb-project-header">
        <span class="hb-project-institution">UC Berkeley</span>
      </div>
      <h2 class="hb-project-title">2D Materials Research</h2>
      <p class="hb-project-desc">
        Research on two-dimensional materials and their applications in next-generation electronics. 
        Working on synthesis, characterization, and device fabrication of atomically thin materials 
        including graphene, transition metal dichalcogenides, and other van der Waals heterostructures.
      </p>
      <div class="hb-project-tags">
        <span>2D Materials</span>
        <span>Nanofabrication</span>
        <span>Physics</span>
      </div>
    </div>

    <div class="hb-project-card">
      <div class="hb-project-header">
        <span class="hb-project-institution">Northwestern University</span>
      </div>
      <h2 class="hb-project-title">Bioelectronics</h2>
      <p class="hb-project-desc">
        Developing advanced bioelectronic devices for healthcare applications. 
        Focus on flexible and stretchable electronics, wearable sensors, and 
        neural interfaces for monitoring and therapeutic purposes.
      </p>
      <div class="hb-project-tags">
        <span>Bioelectronics</span>
        <span>Wearables</span>
        <span>Healthcare</span>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>


