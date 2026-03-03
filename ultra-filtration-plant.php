<?php
// 1. DYNAMIC CONFIGURATION FOR ULTRA FILTRATION PAGE
$page_title = "Ultra Filtration Plant";
$parent_page = "Projects";
$hero_bg = "sub-banner.webp";
$hero_main_text = "Ultra <span class='vppl-gradient-text'>Filtration</span> Plant";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'headerlink.php'; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        /* --- VPPL SERVICE PAGE DESIGN SYSTEM --- */
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

        /* --- Dynamic Hero (Responsive & Curved) --- */
        .vppl-hero {
            height: 45vh;
            min-height: 350px;
            background-position: center;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            clip-path: ellipse(150% 100% at 50% 0%);
        }

        .vppl-hero-overlay {
                        overflow: hidden;

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
            border: 1px solid transparent;
        }

        .service-link:hover,
        .service-link.active {
            background: var(--grad-primary);
            color: #fff !important;
            transform: translateX(5px);
            border-left: 4px solid var(--vppl-accent);
            box-shadow: 0 5px 15px rgba(10, 45, 77, 0.1);
        }

        /* --- Application Cards --- */
        .advantage-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            padding: 25px;
            border-radius: 12px;
            height: 100%;
            transition: var(--transition);
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .advantage-card:hover {
            border-color: var(--vppl-primary);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transform: translateY(-3px);
        }

        .advantage-card i {
            color: var(--vppl-primary);
            font-size: 20px;
            margin-top: 4px;
        }

        .advantage-card h5 {
            font-size: 15px;
            font-weight: 700;
            margin: 0;
            line-height: 1.4;
            color: var(--vppl-secondary);
        }

        /* --- CTA Sidebar Box --- */
        .vppl-cta-box {
            background: var(--vppl-secondary);
            border-radius: 15px;
            padding: 30px;
            color: #fff;
            margin-top: 30px;
            position: relative;
            overflow: hidden;
        }

        .vppl-cta-box::after {
            content: '';
            position: absolute;
            right: -20px;
            bottom: -20px;
            width: 100px;
            height: 100px;
            background: var(--vppl-primary);
            border-radius: 50%;
            opacity: 0.1;
        }

        .serv-img {
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .serv-img:hover {
            transform: scale(1.02);
        }

        @media (max-width: 991px) {
            .mobile-reverse {
                flex-direction: column-reverse;
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
                    <div class="row g-0 g-lg-5 mobile-reverse">

                        <div class="col-lg-3">
    <div class="service-nav-card">
        <a href="sewage-treatment-plant.php" class="service-link <?php echo ($page_title == 'Sewage Treatment Plant') ? 'active' : ''; ?>">Sewage Treatment Plant (STP)</a>
        <a href="effluent-treatment-plant.php" class="service-link <?php echo ($page_title == 'Effluent Treatment Plant') ? 'active' : ''; ?>">Effluent Treatment Plant (ETP)</a>
        <a href="core-products.php" class="service-link <?php echo ($page_title == 'Core Products') ? 'active' : ''; ?>">Core Products</a>
        
        <a href="service-single.php" class="service-link <?php echo ($page_title == 'Water Treatment Plant') ? 'active' : ''; ?>">Water Treatment Plant</a>
        <a href="reverse-osmosis-plant.php" class="service-link <?php echo ($page_title == 'Reverse Osmosis Plant') ? 'active' : ''; ?>">Reverse Osmosis Plant</a>
        <a href="water-softening-plant.php" class="service-link <?php echo ($page_title == 'Water Softening Plant') ? 'active' : ''; ?>">Water Softening Plant</a>
        <a href="ultra-filtration-plant.php" class="service-link <?php echo ($page_title == 'Ultra Filtration Plant') ? 'active' : ''; ?>">Ultra Filtration Plant</a>
        <a href="iron-removal-plant.php" class="service-link <?php echo ($page_title == 'Iron Removal Plant') ? 'active' : ''; ?>">Iron Removal Plant</a>
        <a href="mineral-water-treatment-plant.php" class="service-link <?php echo ($page_title == 'Mineral Water Plant') ? 'active' : ''; ?>">Mineral Water Plant</a>
        <a href="demineralization-plant.php" class="service-link <?php echo ($page_title == 'Demineralization Plant') ? 'active' : ''; ?>">Demineralization Plant</a>
        <a href="hydro-pneumatic-system-pumps.php" class="service-link <?php echo ($page_title == 'Hydro Pneumatic Pumps') ? 'active' : ''; ?>">Hydro Pneumatic Pumps</a>

        <div class="vppl-cta-box">
            <h6 class="text-uppercase mb-2" style="letter-spacing: 2px; color: var(--vppl-accent);">Need Help?</h6>
            <p class="small opacity-75">Contact our technical team for custom plant design.</p>
            <a href="tel:+919943835148" class="text-white fw-bold d-block mb-2 text-decoration-none">
                <i class="fa fa-phone me-2"></i> +91 99438 35148
            </a>
            <a href="mailto:venkadavanprojectschennai@gmail.com" class="btn-main w-100 py-2 mt-2 text-center" style="font-size: 12px;">Enquire Now</a>
        </div>
    </div>
</div>

                        <div class="col-lg-9">
                            <div class="row g-4 mb-5">
                                <div class="col-lg-7">
                                    <h2 class="fw-bold mb-4">Precision Filtration with <span
                                            class="vppl-gradient-text">UF Technology</span></h2>
                                    <p class="lead text-dark">VPPL offers advanced Ultra Filtration (UF) solutions
                                        designed to remove microorganisms and suspended solids with extreme efficiency.
                                    </p>
                                    <p>Ultra Filtration is a pressure-driven membrane process that removes particles in
                                        the range of $0.01$ to $0.1$ $\mu m$. Our systems act as a physical barrier
                                        against bacteria, viruses, and colloids, ensuring consistent water quality
                                        regardless of source water fluctuations.</p>
                                </div>
                                <div class="col-lg-5">
                                    <img src="images/ultra-filtration-plant.webp" class="img-fluid serv-img"
                                        alt="Ultra Filtration Plant">
                                </div>
                            </div>



                            [Image of ultrafiltration membrane process diagram]


                            <div class="row g-4 mb-5">
                                <div class="col-12">
                                    <h3 class="fw-bold mb-4">Industrial Applications</h3>
                                </div>

                                <?php
                                $apps = [
                                    "Drinking Water Purification",
                                    "Industrial Process Treatment",
                                    "RO System Pre-treatment",
                                    "Wastewater Recycling",
                                    "Borewell Water Clarification",
                                    "Commercial Facility Supply"
                                ];
                                foreach ($apps as $app): ?>
                                    <div class="col-md-4">
                                        <div class="advantage-card">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <h5><?php echo $app; ?></h5>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="p-5 rounded-20px"
                                style="background: var(--vppl-light-bg); border: 1px solid #e2e8f0;">
                                <h4 class="fw-bold">Why Choose VPPL UF Systems?</h4>
                                <p>Our Ultra Filtration plants are built with modular designs, allowing for easy
                                    expansion and flexible installation. By utilizing low operating pressures, we help
                                    industries reduce energy consumption while maintaining a high standard of purity.
                                    Whether it's for institutional use or heavy industrial recycling, VPPL ensures a
                                    maintenance-friendly and reliable operation.</p>
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
        gsap.to(".vppl-hero-content", {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power2.out",
            delay: 0.3
        });
    </script>
</body>

</html>