<?php
// 1. DYNAMIC CONFIGURATION FOR SERVICE PAGE
$page_title = "Mineral Water Treatment Plant";
$parent_page = "Projects";
$hero_bg = "sub-banner.webp";
$hero_main_text = "Mineral <span class='vppl-gradient-text'>Water Treatment</span> Plant";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'headerlink.php'; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        /* --- VPPL CONSISTENT DESIGN SYSTEM --- */
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

        /* --- Dynamic Hero Section --- */
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
            margin-bottom: 15px;
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
            font-size: clamp(26px, 4vw, 42px);
            font-weight: 800;
            text-transform: uppercase;
            color: #fff;
            line-height: 1.2;
        }

        .vppl-gradient-text {
            background: var(--grad-accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* --- Sidebar & Navigation --- */
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
            font-size: 15px;
        }

        .service-link:hover,
        .service-link.active {
            background: var(--grad-primary);
            color: #fff !important;
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(10, 45, 77, 0.1);
        }

        /* --- Action Cards --- */
        .vppl-cta-box {
            background: var(--vppl-secondary);
            border-radius: 15px;
            padding: 25px;
            color: #fff;
            margin-top: 25px;
            position: relative;
            overflow: hidden;
        }

        .vppl-cta-box::after {
            content: '';
            position: absolute;
            right: -20px;
            bottom: -20px;
            width: 80px;
            height: 80px;
            background: var(--vppl-primary);
            border-radius: 50%;
            opacity: 0.1;
        }

        .list-unstyled li>i {
            color: var(--vppl-primary);
        }

        /* --- Content Styling --- */
        .serv-img {
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            width: 100%;
        }

        .serv-img:hover {
            transform: scale(1.02);
        }

        .ideal-card {
            background: var(--vppl-light-bg);
            border-left: 4px solid var(--vppl-primary);
            padding: 20px;
            border-radius: 8px;
            height: 100%;
            transition: var(--transition);
        }

        .ideal-card:hover {
            background: #fff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transform: translateY(-3px);
        }

        @media (max-width: 991px) {
            .mobile-reverse {
                flex-direction: column-reverse;
            }

            .service-nav-card {
                position: static;
                margin-top: 40px;
            }

            .vppl-hero {
                height: 35vh;
                min-height: 300px;
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
                                <a href="sewage-treatment-plant.php"
                                    class="service-link <?php echo ($page_title == 'Sewage Treatment Plant') ? 'active' : ''; ?>">Sewage
                                    Treatment Plant (STP)</a>
                                <a href="effluent-treatment-plant.php"
                                    class="service-link <?php echo ($page_title == 'Effluent Treatment Plant') ? 'active' : ''; ?>">Effluent
                                    Treatment Plant (ETP)</a>
                                <a href="core-products.php"
                                    class="service-link <?php echo ($page_title == 'Core Products') ? 'active' : ''; ?>">Core
                                    Products</a>

                                <a href="service-single.php"
                                    class="service-link <?php echo ($page_title == 'Water Treatment Plant') ? 'active' : ''; ?>">Water
                                    Treatment Plant</a>
                                <a href="reverse-osmosis-plant.php"
                                    class="service-link <?php echo ($page_title == 'Reverse Osmosis Plant') ? 'active' : ''; ?>">Reverse
                                    Osmosis Plant</a>
                                <a href="water-softening-plant.php"
                                    class="service-link <?php echo ($page_title == 'Water Softening Plant') ? 'active' : ''; ?>">Water
                                    Softening Plant</a>
                                <a href="ultra-filtration-plant.php"
                                    class="service-link <?php echo ($page_title == 'Ultra Filtration Plant') ? 'active' : ''; ?>">Ultra
                                    Filtration Plant</a>
                                <a href="iron-removal-plant.php"
                                    class="service-link <?php echo ($page_title == 'Iron Removal Plant') ? 'active' : ''; ?>">Iron
                                    Removal Plant</a>
                                <a href="mineral-water-treatment-plant.php" class="service-link <?php echo ($page_title == 'Mineral Water Treatment Plant') ? 'active' : ''; ?>">Mineral Water Plant</a>
                                <a href="demineralization-plant.php"
                                    class="service-link <?php echo ($page_title == 'Demineralization Plant') ? 'active' : ''; ?>">Demineralization
                                    Plant</a>
                                <a href="hydro-pneumatic-system-pumps.php"
                                    class="service-link <?php echo ($page_title == 'Hydro Pneumatic Pumps') ? 'active' : ''; ?>">Hydro
                                    Pneumatic Pumps</a>

                                <div class="vppl-cta-box">
                                    <h6 class="text-uppercase mb-2"
                                        style="letter-spacing: 2px; color: var(--vppl-accent);">Need Help?</h6>
                                    <p class="small opacity-75">Contact our technical team for custom plant design.</p>
                                    <a href="mailto:venkadavanprojectschennai@gmail.com"
                                        class="btn-main w-100 py-2 mt-2 text-center" style="font-size: 12px;">Enquire
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row g-4 mb-5 align-items-center">
                                <div class="col-lg-7">
                                    <h2 class="fw-bold mb-4">Mineral Water <span class="vppl-gradient-text">Purity
                                            Standards</span></h2>
                                    <p class="lead text-dark">VPPL offers premium Mineral Water Treatment Plant
                                        solutions designed for bottled drinking water production and high-quality
                                        potable applications.</p>
                                    <p>Our systems are engineered to consistently produce pure water that meets strict
                                        quality standards, ensuring safety, taste, and compliance for both commercial
                                        and industrial use.</p>
                                </div>
                                <div class="col-lg-5">
                                    <img src="images/mineral-water-treatment-plant.webp" class="img-fluid serv-img"
                                        alt="Mineral Water Plant">
                                </div>
                            </div>

                            <hr class="opacity-10 my-5">

                            <div class="row mb-5">
                                <div class="col-12">
                                    <h3 class="fw-bold">Process Overview</h3>
                                    <p class="mt-3">A Mineral Water Treatment Plant treats raw water through staged
                                        purification processes—removing suspended solids, contaminants, and
                                        microorganisms—while maintaining essential mineral balance where required for
                                        taste and health standards.</p>


                                </div>
                            </div>

                            <div class="row g-4 mb-5">
                                <div class="col-12">
                                    <h3 class="fw-bold mb-4">Advanced Treatment Stages</h3>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3 d-flex align-items-start"><i
                                                class="fa fa-check-circle text-info me-3 mt-1"></i> <span>Multi-stage
                                                filtration (Suspended Solids Removal)</span></li>
                                        <li class="mb-3 d-flex align-items-start"><i
                                                class="fa fa-check-circle text-info me-3 mt-1"></i> <span>Coagulation
                                                and clarification tanks</span></li>
                                        <li class="mb-3 d-flex align-items-start"><i
                                                class="fa fa-check-circle text-info me-3 mt-1"></i> <span>Pressure sand
                                                filters with quartz media</span></li>
                                        <li class="mb-3 d-flex align-items-start"><i
                                                class="fa fa-check-circle text-info me-3 mt-1"></i> <span>Activated
                                                carbon (Odor & Taste removal)</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3 d-flex align-items-start"><i
                                                class="fa fa-check-circle text-info me-3 mt-1"></i>
                                            <span>Ultrafiltration (UF) membrane modules</span>
                                        </li>
                                        <li class="mb-3 d-flex align-items-start"><i
                                                class="fa fa-check-circle text-info me-3 mt-1"></i> <span>UV
                                                (Ultraviolet) disinfection systems</span></li>
                                        <li class="mb-3 d-flex align-items-start"><i
                                                class="fa fa-check-circle text-info me-3 mt-1"></i> <span>Conductivity &
                                                ORP monitoring</span></li>
                                        <li class="mb-3 d-flex align-items-start"><i
                                                class="fa fa-check-circle text-info me-3 mt-1"></i> <span>Automated
                                                High-pressure pump controls</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row g-4 mb-5">
                                <div class="col-12">
                                    <h3 class="fw-bold mb-4">Ideal For</h3>
                                </div>
                                <div class="col-md-4">
                                    <div class="ideal-card">
                                        <h5 class="fw-bold">Bottling Units</h5>
                                        <p class="small mb-0">Production of packaged drinking water bottles and jars.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ideal-card">
                                        <h5 class="fw-bold">Hospitals & Labs</h5>
                                        <p class="small mb-0">Healthcare facilities requiring high-purity potable water.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ideal-card">
                                        <h5 class="fw-bold">Hotels & Resorts</h5>
                                        <p class="small mb-0">Large scale hospitality services with consistent water
                                            quality needs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 rounded-3 shadow-sm border" style="background: var(--vppl-light-bg);">
                                <h4 class="fw-bold">Compliance & Support</h4>
                                <p class="mb-0">VPPL provides full support for legal documentation and statutory
                                    compliance required for mineral water plants, alongside operator training to ensure
                                    100% operational uptime.</p>
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
        // Hero Content GSAP Animation
        window.addEventListener('DOMContentLoaded', () => {
            gsap.to(".vppl-hero-content", {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power3.out",
                delay: 0.2
            });
        });
    </script>
</body>

</html>