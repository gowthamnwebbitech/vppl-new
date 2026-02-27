<section class="vppl-hero" style="background-image: url('images/<?php echo $hero_bg ?? 'sub-banner.webp'; ?>');">
    <div class="vppl-hero-overlay"></div>
    <div class="vppl-container">
        <div class="vppl-hero-content gsap-reveal">
            <ul class="vppl-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active"><?php echo $page_title ?? 'Our Story'; ?></li>
            </ul>
            <h1 class="vppl-hero-title">
                <?php echo $hero_main_text ?? 'Engineering <span class="vppl-gradient-text">Sustainable</span><br>Future-Ready Tech'; ?>
            </h1>
        </div>
    </div>
</section>