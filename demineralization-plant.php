<?php
// 1. DYNAMIC CONFIGURATION
$page_title = "Demineralization Plant";
$parent_page = "Product & Projects";
$hero_bg = "sub-banner.webp";
$hero_main_text = "Demineralization <span class='vppl-gradient-text'>Plant</span>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'headerlink.php'; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        /* --- VPPL MODERN DESIGN SYSTEM --- */
        :root {
            --vppl-primary: #22a4d4;
            --vppl-secondary: #0a2d4d;
            --vppl-accent: #03e9f4;
            --vppl-white: #ffffff;
            --vppl-light-bg: #f8fafc;
            --grad-accent: linear-gradient(135deg, #22a4d4 0%, #03e9f4 100%);
            --grad-primary: linear-gradient(135deg, #0a2d4d 0%, #22a4d4 100%);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            background-color: var(--vppl-white);
            color: var(--vppl-secondary);
        }

        /* --- Dynamic Hero (Advanced Clip-Path) --- */
        .vppl-hero {
            height: 45vh;
            min-height: 400px;
            background-position: center;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            clip-path: ellipse(150% 100% at 50% 0%);
            overflow: hidden;
        }

        .vppl-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(10, 45, 77, 0.85), rgba(10, 45, 77, 0.3));
            z-index: 1;
        }

        .vppl-hero-content {
            position: relative;
            z-index: 10;
            opacity: 0;
            transform: translateY(30px);
        }

        .vppl-breadcrumb {
            display: inline-flex;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 50px;
            list-style: none;
            font-size: 14px;
            color: #fff;
            margin-bottom: 20px;
        }

        .vppl-breadcrumb li a {
            color: #fff;
            text-decoration: none;
            opacity: 0.8;
            transition: 0.3s;
        }

        .vppl-breadcrumb li a:hover {
            opacity: 1;
            color: var(--vppl-accent);
        }

        .vppl-breadcrumb li.active {
            color: var(--vppl-accent);
            font-weight: 600;
            margin-left: 10px;
            padding-left: 10px;
            border-left: 1px solid rgba(255, 255, 255, 0.3);
        }

        .vppl-hero-title {
            font-size: clamp(32px, 5vw, 56px);
            font-weight: 800;
            text-transform: uppercase;
            color: #fff;
            line-height: 1.1;
        }

        .vppl-gradient-text {
            background: var(--grad-accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* --- Sidebar Navigation --- */
        .service-nav-card {
            background: var(--vppl-light-bg);
            border-radius: 20px;
            padding: 20px;
            border: 1px solid #eef2f6;
            position: sticky;
            top: 120px;
        }

        .service-link {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            margin-bottom: 10px;
            border-radius: 12px;
            background: #fff;
            color: var(--vppl-secondary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
        }

        .service-link:hover,
        .service-link.active {
            background: var(--grad-primary);
            color: #fff;
            transform: translateX(8px);
            border-left: 4px solid var(--vppl-accent);

            box-shadow: 0 10px 20px rgba(34, 164, 212, 0.2);
        }

        /* --- Content Styling --- */
        .serv-img {
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .process-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #eef2f6;
            height: 100%;
            transition: 0.3s;
        }

        .process-card:hover {
            transform: translateY(-5px);
            border-color: var(--vppl-primary);
        }

        .process-number {
            font-size: 40px;
            font-weight: 800;
            color: rgba(34, 164, 212, 0.1);
            line-height: 1;
            margin-bottom: 10px;
        }

        /* --- Custom Action Box --- */
        .vppl-action-box {
            background: var(--vppl-secondary);
            border-radius: 20px;
            padding: 35px;
            color: #fff;
            margin-top: 40px;
            position: relative;
            z-index: 1;
        }

        .vppl-action-box::before {
            content: "\f059";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            right: 20px;
            bottom: -10px;
            font-size: 120px;
            color: rgba(255, 255, 255, 0.05);
            z-index: -1;
        }

        @media (max-width: 991px) {
            .mobile-reverse {
                flex-direction: column-reverse;
            }

            .vppl-hero {
                height: 40vh;
                min-height: 350px;
            }

            .service-nav-card {
                position: static;
                margin-top: 50px;
            }
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <?php include 'header.php'; ?>

        <div id="content" class="no-bottom no-top">
            <section class="vppl-hero" style="background-image: url('images/<?php echo $hero_bg; ?>');">
                <div class="vppl-hero-overlay"></div>
                <div class="container relative">
                    <div class="vppl-hero-content">
                        <ul class="vppl-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="mx-2">/</span> <?php echo $parent_page; ?></li>
                            <li class="active"><span class="mx-2">/</span> <?php echo $page_title; ?></li>
                        </ul>
                        <h1 class="vppl-hero-title"><?php echo $hero_main_text; ?></h1>
                    </div>
                </div>
            </section>

            <section class="bg-white">
                <div class="container py-5">
                    <div class="row g-5 mobile-reverse">

                        <div class="col-lg-3">
                            <div class="service-nav-card">
                                <a href="service-single.php" class="service-link">Water Treatment Plant</a>
                                <a href="reverse-osmosis-plant.php" class="service-link">Reverse Osmosis Plant</a>
                                <a href="water-softening-plant.php" class="service-link">Water Softening Plant</a>
                                <a href="ultra-filtration-plant.php" class="service-link">Ultra Filtration Plant</a>
                                <a href="iron-removal-plant.php" class="service-link">Iron Removal Plant</a>
                                <a href="mineral-water-treatment-plant.php" class="service-link">Mineral Water Plant</a>
                                <a href="demineralization-plant.php" class="service-link active">Demineralization
                                    Plant</a>
                                <a href="hydro-pneumatic-system-pumps.php" class="service-link">Hydro Pneumatic
                                    Pumps</a>

                                <div class="vppl-action-box">
                                    <h5 class="fw-bold mb-3" style="color: var(--vppl-accent);">Need Expert Advice?</h5>
                                    <p class="small opacity-75 mb-4">Our engineers can help design the perfect DM plant
                                        for your specific water quality needs.</p>
                                    <a href="tel:+919943835148"
                                        class="text-white fw-bold d-block mb-2 text-decoration-none fs-5">
                                        <i class="fa fa-phone-volume me-2"></i> +91 99438 35148
                                    </a>
                                    <a href="mailto:venkadavanprojectschennai@gmail.com"
                                        class="btn-main w-100 mt-3 text-center py-3">Enquire Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row g-4 mb-5 align-items-center">
                                <div class="col-lg-7">
                                    <h2 class="fw-bold mb-4">Precision <span
                                            class="vppl-gradient-text">Ion-Exchange</span> Technology</h2>
                                    <p class="lead">VPPL offers advanced Demineralization (DM) Plant solutions designed
                                        to produce high-purity water for critical industrial processes.</p>
                                    <p>Our systems utilize premium-grade ion exchange resins to remove dissolved
                                        minerals, salts, and ionic impurities. This process results in water with
                                        extremely low conductivity, essential for boilers, laboratories, and high-tech
                                        manufacturing.</p>
                                </div>
                                <div class="col-lg-5">
                                    <img src="images/demineralization-plant.webp" class="img-fluid serv-img"
                                        alt="Demineralization Plant">
                                </div>
                            </div>



                            <h3 class="fw-bold mb-4">How It Works</h3>
                            <div class="row g-4 mb-5">
                                <div class="col-md-4">
                                    <div class="process-card">
                                        <div class="process-number">01</div>
                                        <h5 class="fw-bold">Cation Exchange</h5>
                                        <p class="small text-muted mb-0">Replaces cations like Calcium and Magnesium
                                            with Hydrogen ions.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="process-card">
                                        <div class="process-number">02</div>
                                        <h5 class="fw-bold">Anion Exchange</h5>
                                        <p class="small text-muted mb-0">Replaces anions like Chlorides and Sulfates
                                            with Hydroxyl ions.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="process-card">
                                        <div class="process-number">03</div>
                                        <h5 class="fw-bold">Polishing Stage</h5>
                                        <p class="small text-muted mb-0">Optional Mixed Bed stage for achieving
                                            ultra-low conductivity requirements.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-light p-5 rounded-20px mb-5">
                                <h3 class="fw-bold mb-4">Key Benefits</h3>
                                <div class="row g-3">
                                    <div class="col-md-6 d-flex align-items-start gap-2">
                                        <i class="fa-solid fa-circle-check mt-1"></i>
                                        <p><strong>Prevents Scaling:</strong> Protects high-pressure boilers and cooling
                                            towers.</p>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-start gap-2">
                                        <i class="fa-solid fa-circle-check  mt-1"></i>
                                        <p><strong>Consistent Quality:</strong> Guaranteed high-purity water output
                                            24/7.</p>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-start gap-2">
                                        <i class="fa-solid fa-circle-check  mt-1"></i>
                                        <p><strong>Versatile:</strong> Ideal for Pharma, Power Plants, and Electronics.
                                        </p>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-start gap-2">
                                        <i class="fa-solid fa-circle-check  mt-1"></i>
                                        <p><strong>Cost-Effective:</strong> Lower operating costs compared to multiple
                                            distillation.</p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="fw-bold mb-4">Why Industry Leaders Trust VPPL</h3>
                            <p>With engineered precision and proven ion-exchange expertise, VPPL Demineralization Plants
                                deliver dependable water quality for the most demanding applications. Our systems are
                                designed to integrate seamlessly into your existing infrastructure, offering long-term
                                performance and easy resin regeneration.</p>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <?php include 'footer.php'; ?>
    </div>

    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script>
        // Hero Entrance Animation
        gsap.to(".vppl-hero-content", { opacity: 1, y: 0, duration: 1.2, ease: "power3.out" });
    </script>
</body>

</html>