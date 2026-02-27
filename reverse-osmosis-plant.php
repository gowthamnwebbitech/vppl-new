<?php
// 1. DYNAMIC CONFIGURATION
$page_title = "Reverse Osmosis Plant";
$parent_page = "Product & Projects";
$hero_bg = "sub-banner.webp";
$hero_main_text = "Reverse <span class='vppl-gradient-text'>Osmosis</span> Plant";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'headerlink.php'; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        /* --- VPPL UNIFIED DESIGN SYSTEM --- */
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
            overflow-x: hidden;
        }

        /* --- Dynamic Hero --- */
        .vppl-hero {
            height: 45vh;
            min-height: 380px;
            background-position: center;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            clip-path: ellipse(150% 100% at 50% 0%);
        }

        .vppl-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(10, 45, 77, 0.9), rgba(10, 45, 77, 0.4));
            z-index: 1;
        }

        .vppl-hero-content {
            position: relative;
            z-index: 10;
            opacity: 0;
            transform: translateY(20px);
        }

        .vppl-breadcrumb {
            display: inline-flex;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            padding: 6px 18px;
            border-radius: 50px;
            list-style: none;
            font-size: 13px;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .vppl-breadcrumb li a {
            color: #fff;
            text-decoration: none;
            opacity: 0.8;
        }

        .vppl-breadcrumb li.active {
            color: var(--vppl-accent);
            font-weight: 600;
            margin-left: 10px;
            padding-left: 10px;
            border-left: 1px solid rgba(255, 255, 255, 0.3);
        }

        .vppl-hero-title {
            font-size: clamp(28px, 4vw, 48px);
            font-weight: 800;
            text-transform: uppercase;
            color: #fff;
            margin-top: 15px;
        }

        .vppl-gradient-text {
            background: var(--grad-accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* --- Sidebar Navigation --- */
        .service-nav-card {
            background: var(--vppl-light-bg);
            border-radius: 15px;
            padding: 15px;
            border: 1px solid #e2e8f0;
            position: sticky;
            top: 100px;
        }

        .service-link {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            margin-bottom: 8px;
            border-radius: 10px;
            background: #fff;
            color: var(--vppl-secondary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: 1px solid #edf2f7;
        }

        .service-link:hover,
        .service-link.active {
            background: var(--grad-primary);
            color: #fff;
            border-left: 4px solid var(--vppl-accent);
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(10, 45, 77, 0.1);
            border-color: transparent;
        }

        /* --- Advantage Grid --- */
        .advantage-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            padding: 25px;
            border-radius: 12px;
            height: 100%;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .advantage-card:hover {
            border-color: var(--vppl-primary);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transform: translateY(-3px);
        }

        .advantage-card i {
            color: var(--vppl-primary);
            font-size: 22px;
        }

        .advantage-card h5 {
            font-size: 15px;
            font-weight: 700;
            margin: 0;
            line-height: 1.4;
            color: var(--vppl-secondary);
        }

        /* --- Action Boxes --- */
        .vppl-cta-box {
            background: var(--vppl-secondary);
            border-radius: 15px;
            padding: 25px;
            color: #fff;
            margin-top: 20px;
        }

        .serv-img {
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            width: 100%;
        }

        @media (max-width: 991px) {
            .mobile-reverse {
                flex-direction: column-reverse;
            }

            .vppl-hero {
                height: 35vh;
                clip-path: none;
                text-align: center;
            }

            .vppl-breadcrumb {
                justify-content: center;
            }

            .service-nav-card {
                position: static;
                margin-top: 40px;
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
                                <a href="reverse-osmosis-plant.php" class="service-link active">Reverse Osmosis
                                    Plant</a>
                                <a href="water-softening-plant.php" class="service-link">Water Softening Plant</a>
                                <a href="ultra-filtration-plant.php" class="service-link">Ultra Filtration Plant</a>
                                <a href="iron-removal-plant.php" class="service-link">Iron Removal Plant</a>
                                <a href="mineral-water-treatment-plant.php" class="service-link">Mineral Water Plant</a>
                                <a href="demineralization-plant.php" class="service-link">Demineralization Plant</a>
                                <a href="hydro-pneumatic-system-pumps.php" class="service-link">Hydro Pneumatic
                                    Pumps</a>

                                <div class="vppl-cta-box text-center">
                                    <h6 class="text-uppercase mb-2"
                                        style="letter-spacing: 2px; color: var(--vppl-accent);">Expert Advice</h6>
                                    <p class="small opacity-75">Get a customized RO solution for your facility.</p>
                                    <a href="tel:+919943835148"
                                        class="text-white fw-bold d-block mb-3 text-decoration-none">
                                        <i class="fa fa-phone-alt me-2"></i> +91 99438 35148
                                    </a>
                                    <a href="mailto:venkadavanprojectschennai@gmail.com"
                                        class="btn-main w-100 py-2">Enquire Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row g-4 mb-5 align-items-center">
                                <div class="col-lg-7">
                                    <h2 class="fw-bold mb-4">Precision Filtration with <span
                                            class="vppl-gradient-text">RO Technology</span></h2>
                                    <p>VPPL is a premier manufacturer of high-performance Reverse Osmosis (RO) plants.
                                        For over 15 years, we have engineered compact and efficient RO systems for
                                        homes, apartments, institutions, and industrial organizations.</p>
                                    <p>Our RO plants utilize high-pressure pumps and semi-permeable membranes to remove
                                        dissolved impurities, ensuring that even the most brackish groundwater is
                                        converted into pure, safe water.</p>
                                </div>

                                <div class="col-lg-5">
                                    <img src="images/reverse-osmosis-plant.webp" class="img-fluid serv-img"
                                        alt="Reverse Osmosis Plant">
                                </div>
                            </div>

                            <div class="row g-4 mb-5">
                                <div class="col-12">
                                    <h3 class="fw-bold">Why Choose Our RO Systems?</h3>
                                    <hr style="width: 50px; border-top: 3px solid var(--vppl-primary);">
                                </div>

                                <?php
                                $advantages = [
                                    "97% Removal of Dissolved Solids",
                                    "Chemical-Free Bio-nitrification",
                                    "Advanced Oxidation Process",
                                    "Biological Phosphorus Removal",
                                    "Efficient Solid-Liquid Separation",
                                    "Total Organic Matter Elimination",
                                    "Highly Cost-Effective Operation",
                                    "Low Maintenance Design",
                                    "Fully Independent Modular System"
                                ];
                                foreach ($advantages as $adv): ?>
                                    <div class="col-md-4">
                                        <div class="advantage-card">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <h5><?php echo $adv; ?></h5>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="p-4 p-md-5 rounded-20px"
                                style="background: var(--vppl-light-bg); border: 1px solid #e2e8f0;">
                                <h4 class="fw-bold">Water Solutions in Coimbatore</h4>
                                <p>Whether you need a Domestic Hard Water Treatment plant for a single villa or a
                                    massive Industrial RO setup, VPPL delivers excellence. We focus on seamless
                                    integration, high-quality water recovery, and cost-effective management to ensure
                                    100% client satisfaction.</p>
                            </div>
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
        gsap.to(".vppl-hero-content", { opacity: 1, y: 0, duration: 1, ease: "power2.out" });
    </script>
</body>

</html>