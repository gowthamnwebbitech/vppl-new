<?php
/** * DYNAMIC CONFIGURATION 
 * Change these values to reuse this template for other service pages
 */
$page_title = "Hydro Pneumatic System Pumps";
$parent_page = "Projects";
$hero_bg_image = "sub-banner.webp"; // Background image from your images folder
$hero_main_title = "Hydro Pneumatic <span class='vppl-gradient-text'>System Pumps</span>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'headerlink.php'; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        /* --- VPPL CUSTOM DESIGN SYSTEM --- */
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
            height: 48vh;
            min-height: 380px;
            background: url('images/<?php echo $hero_bg_image; ?>') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            clip-path: ellipse(160% 100% at 50% 0%);
            /* Creates a modern curved bottom */
        }

        .vppl-hero-overlay {
            position: absolute;
                        overflow: hidden;

            inset: 0;
            background: linear-gradient(to right, rgba(10, 45, 77, 0.92), rgba(10, 45, 77, 0.5));
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
            padding-left: 10px;
            border-left: 1px solid rgba(255, 255, 255, 0.3);
            margin-left: 10px;
        }

        .vppl-hero-title {
            font-size: clamp(30px, 5vw, 52px);
            font-weight: 800;
            text-transform: uppercase;
            color: #fff;
            line-height: 1.1;
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
            border-radius: 20px;
            padding: 20px;
            border: 1px solid #e2e8f0;
            position: sticky;
            top: 110px;
        }

        .service-link {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            margin-bottom: 10px;
            border-radius: 12px;
            background: #fff;
            color: var(--vppl-secondary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: 1px solid transparent;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
        }

        .service-link:hover,
        .service-link.active {
            background: var(--grad-primary);
            color: #fff;
            transform: translateX(5px);
            box-shadow: 0 10px 20px rgba(10, 45, 77, 0.1);
            border-left: 4px solid var(--vppl-accent);
        }

        /* --- Content Blocks --- */
        .serv-img {
            border-radius: 25px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: 0.4s;
        }

        .serv-img:hover {
            transform: scale(1.02);
        }

        .feature-box-v2 {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            border: 1px solid #eee;
            height: 100%;
            transition: var(--transition);
        }

        .feature-box-v2:hover {
            border-color: var(--vppl-primary);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
        }

        .feature-box-v2 h4 {
            font-size: 18px;
            color: var(--vppl-primary);
            font-weight: 700;
        }

        /* --- CTA Cards --- */
        .cta-card {
            background: var(--vppl-secondary);
            color: #fff;
            padding: 25px;
            border-radius: 15px;
            margin-top: 20px;
            text-align: center;
        }

        .cta-btn {
            background: var(--grad-accent);
            color: var(--vppl-secondary);
            font-weight: 700;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            display: block;
            text-decoration: none;
            margin-top: 15px;
        }

        @media (max-width: 991px) {
            .vppl-hero {
                height: 40vh;
                clip-path: none;
                text-align: center;
            }

            .vppl-breadcrumb {
                justify-content: center;
            }

            .mobile-reverse {
                flex-direction: column-reverse;
            }
        }
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


    </style>
</head>

<body>
    <div id="wrapper">
        <a href="javascript:void(0);" id="back-to-top"></a>

        <?php include 'header.php'; ?>

        <div id="content" class="no-bottom no-top">

            <section class="vppl-hero">
                <div class="vppl-hero-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="vppl-hero-content">
                                <ul class="vppl-breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li><span class="mx-2">/</span> <?php echo $parent_page; ?></li>
                                    <li class="active"><?php echo $page_title; ?></li>
                                </ul>
                                <h1 class="vppl-hero-title"><?php echo $hero_main_title; ?></h1>
                            </div>
                        </div>
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
            <a href="mailto:venkadavanprojectschennai@gmail.com" class="btn-main w-100 py-2 mt-2 text-center" style="font-size: 12px;">Enquire Now</a>
        </div>
    </div>
</div>

                        <div class="col-lg-9">
                            <div class="row g-4 align-items-center mb-5">
                                <div class="col-lg-7">
                                    <h2 class="fw-bold">Engineering <span class="vppl-gradient-text">Fluid
                                            Pressure</span> Solutions</h2>
                                    <p class="lead text-dark mt-3">The hydropneumatic pump system is engineered to
                                        maintain consistent water pressure across industrial and domestic networks.</p>
                                    <p>By combining compressed air and water, these systems provide a high-efficiency
                                        mechanical effect, allowing fluids to flow seamlessly via complex piping. Our
                                        pumps are designed for high performance with minimal energy consumption.</p>
                                </div>
                                <div class="col-lg-5">
                                    <img src="images/hydro-pneumatic-system-pumps.webp" class="img-fluid serv-img"
                                        alt="Pump System">
                                </div>
                            </div>

                            <h3 class="fw-bold mb-4">Why Choose Our System?</h3>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="feature-box-v2">
                                        <h4>Superior Comfort</h4>
                                        <p class="small mb-0">Maintains consistent pressure regardless of usage
                                            fluctuations via automated speed adjustments.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="feature-box-v2">
                                        <h4>Power Savings</h4>
                                        <p class="small mb-0">Continually optimizes energy usage by calculating the most
                                            effective pump speed from real-time data.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="feature-box-v2">
                                        <h4>Simple Operation</h4>
                                        <p class="small mb-0">Features a high-definition color screen and a smart
                                            startup wizard for easy commissioning.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="feature-box-v2">
                                        <h4>Early Warning</h4>
                                        <p class="small mb-0">Integrated log functions monitor system performance and
                                            alert users to maintenance needs instantly.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="feature-box-v2">
                                        <h4>Remote Entry</h4>
                                        <p class="small mb-0">Equipped with Ethernet connectivity for browser-based
                                            remote monitoring from anywhere.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="feature-box-v2">
                                        <h4>Zero Corrosion</h4>
                                        <p class="small mb-0">Constructed with high-grade standardized raw materials to
                                            ensure longevity in harsh environments.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 p-4 rounded-20px"
                                style="background: var(--vppl-light-bg); border-left: 5px solid var(--vppl-primary);">
                                <h4 class="fw-bold">Specialized Industrial Pump Networks</h4>
                                <p class="mb-0">From cascade systems to VFD-driven pump networks, we provide specialized
                                    solutions tailored for oil, gas, and water extraction industries in Coimbatore and
                                    beyond. Our systems are designed to save you both time and capital through automated
                                    precision.</p>
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
        // Hero Content Animation
        window.addEventListener('load', function () {
            gsap.to(".vppl-hero-content", { opacity: 1, y: 0, duration: 1.2, ease: "power3.out" });
        });
    </script>
</body>

</html>