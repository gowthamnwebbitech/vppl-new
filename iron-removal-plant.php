<?php 
// 1. DYNAMIC CONFIGURATION - This powers the Hero and SEO
$page_title = "Iron Removal Plant"; 
$parent_page = "Products & Projects";
$hero_bg_image = "iron-removal-banner.webp"; // Ensure this exists in your images folder
$hero_main_title = "High-Performance";
$hero_highlight_title = "Iron Removal";
$hero_tagline = "Eliminating metallic stains, odor, and scale for pure, crystal-clear water.";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include 'headerlink.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    
    <style>
        /* --- VPPL DYNAMIC DESIGN SYSTEM --- */
        :root {
            --vppl-primary: #22a4d4;
            --vppl-secondary: #0a2d4d;
            --vppl-accent: #03e9f4;
            --vppl-grad: linear-gradient(135deg, #0a2d4d 0%, #22a4d4 100%);
            --vppl-text-grad: linear-gradient(135deg, #22a4d4 0%, #03e9f4 100%);
        }

        /* Responsive Dynamic Hero */
        .vppl-dynamic-hero {
            position: relative;
            min-height: 55vh;
            display: flex;
            align-items: center;
            padding: 100px 0;
            background: url('images/<?php echo $hero_bg_image; ?>') center/cover no-repeat;
            overflow: hidden;
            clip-path: ellipse(160% 100% at 50% 0%);
        }

        .vppl-dynamic-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(10, 45, 77, 0.95) 0%, rgba(10, 45, 77, 0.7) 50%, rgba(10, 45, 77, 0.2) 100%);
            z-index: 1;
        }

        .hero-content-wrapper {
            position: relative;
            z-index: 10;
            opacity: 0; /* Animated by GSAP */
            transform: translateY(30px);
        }

        /* Modern Breadcrumb */
        .vppl-breadcrumb-pills {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 100px;
            list-style: none;
            margin-bottom: 25px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .vppl-breadcrumb-pills li { font-size: 14px; color: #fff; }
        .vppl-breadcrumb-pills li a { color: var(--vppl-accent); text-decoration: none; font-weight: 500; }
        .vppl-breadcrumb-pills li .separator { margin: 0 10px; opacity: 0.5; }

        /* Typography */
        .vppl-hero-h1 {
            font-size: clamp(32px, 5vw, 56px);
            font-weight: 800;
            line-height: 1.1;
            color: #fff;
            text-transform: uppercase;
        }

        .vppl-highlight {
            background: var(--vppl-text-grad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Sidebar & Content */
        .service-nav-container { position: sticky; top: 110px; }
        
        .service-nav-item {
            display: block;
            padding: 15px 25px;
            margin-bottom: 10px;
            background: #f8fafc;
            border-radius: 12px;
            color: var(--vppl-secondary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .service-nav-item:hover, .service-nav-item.active {
            background: var(--vppl-grad);
            color: #fff;
            border-left: 4px solid var(--vppl-accent);
            transform: translateX(8px);
        }

        .vppl-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            overflow: hidden;
            background: #fff;
        }

        .vppl-check-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 12px;
            list-style: none;
        }

        .vppl-check-list li::before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--vppl-primary);
        }

        @media (max-width: 768px) {
            .vppl-dynamic-hero { text-align: center; min-height: 45vh; clip-path: none; }
            .vppl-breadcrumb-pills { justify-content: center; }
            .mobile-order-change { flex-direction: column-reverse; }
        }
    </style>
</head>

<body class="bg-white">
    <div id="wrapper">
        <?php include 'header.php'; ?>

        <div class="no-bottom no-top" id="content">
            
            <section class="vppl-dynamic-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero-content-wrapper" id="hero-animate">
                                <ul class="vppl-breadcrumb-pills">
                                    <li><a href="index.php">Home</a> <span class="separator">/</span></li>
                                    <li><?php echo $parent_page; ?> <span class="separator">/</span></li>
                                    <li class="active"><?php echo $page_title; ?></li>
                                </ul>
                                <h1 class="vppl-hero-h1">
                                    <?php echo $hero_main_title; ?><br>
                                    <span class="vppl-highlight"><?php echo $hero_highlight_title; ?></span> Solutions
                                </h1>
                                <p class="lead text-white-50 mt-3 col-lg-10">
                                    <?php echo $hero_tagline; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5">
                <div class="container">
                    <div class="row g-5 mobile-order-change">
                        
                        <div class="col-lg-3">
                            <div class="service-nav-container">
                                <h5 class="fw-bold mb-4 px-2">Our Technologies</h5>
                                <?php 
                                    $services = [
                                        "service-single.php" => "Water Treatment Plant",
                                        "reverse-osmosis-plant.php" => "Reverse Osmosis Plant",
                                        "water-softening-plant.php" => "Water Softening Plant",
                                        "ultra-filtration-plant.php" => "Ultra Filtration Plant",
                                        "iron-removal-plant.php" => "Iron Removal Plant",
                                        "mineral-water-treatment-plant.php" => "Mineral Water Plant",
                                        "demineralization-plant.php" => "Demineralization Plant",
                                        "hydro-pneumatic-system-pumps.php" => "Hydro Pneumatic Pumps"
                                    ];

                                    foreach ($services as $link => $name) {
                                        $activeClass = (basename($_SERVER['PHP_SELF']) == $link) ? 'active' : '';
                                        echo "<a href='$link' class='service-nav-item $activeClass'>$name</a>";
                                    }
                                ?>

                                <div class="mt-5 p-4 rounded-20px text-white" style="background: var(--vppl-grad);">
                                    <i class="fa fa-headset fs-1 mb-3 opacity-50"></i>
                                    <h6>Technical Support?</h6>
                                    <p class="small opacity-75">Talk to our experts for custom plant designs.</p>
                                    <a href="tel:+919943835148" class="btn btn-light btn-sm w-100 fw-bold py-2">Call Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row align-items-center mb-5">
                                <div class="col-lg-6">
                                    <h2 class="fw-bold text-uppercase">Iron <span class="vppl-highlight">Filtration</span> Tech</h2>
                                    <p>Our Iron Removal Plants are engineered to tackle high concentrations of dissolved iron often found in borewell water. This iron, if left untreated, oxidizes upon contact with air, resulting in the characteristic rusty-red color and metallic taste.</p>
                                    <p>We use high-grade catalytic media that acts as an oxidizing agent, instantly precipitating iron into solid particles for easy mechanical filtration.</p>
                                </div>
                                <div class="col-lg-6">
                                    <img src="images/iron-removal-plant.webp" class="img-fluid rounded-20px shadow-lg" alt="Industrial Iron Removal">
                                </div>
                            </div>

                            

                            <div class="row g-4 mb-5">
                                <div class="col-md-6">
                                    <div class="vppl-card p-4 h-100 bg-light">
                                        <h4 class="fw-bold"><i class="fa fa-star  me-2"></i>Key Benefits</h4>
                                        <ul class="vppl-check-list mt-3">
                                            <li>Crystal Clear Odorless Water</li>
                                            <li>Zero Staining on Laundry & Fixtures</li>
                                            <li>Protects Industrial Boilers & RO Membranes</li>
                                            <li>Low Maintenance Cost</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="vppl-card p-4 h-100 bg-light">
                                        <h4 class="fw-bold"><i class="fa fa-cog  me-2"></i>Key Features</h4>
                                        <ul class="vppl-check-list mt-3">
                                            <li>Auto-Backwash Multiport Valves</li>
                                            <li>Heavy Duty FRP Pressure Vessels</li>
                                            <li>Advanced Catalytic Oxidation Media</li>
                                            <li>Custom Flow Rates (0.5 to 50 m³/hr)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="p-5 rounded-20px text-center" style="background: #f1f5f9; border: 2px dashed #cbd5e1;">
                                <h3 class="fw-bold">Ready to solve your water problems?</h3>
                                <p>We provide free site visits and water testing analysis.</p>
                                <a href="contact.php" class="btn btn-primary px-5 py-3 rounded-pill fw-bold" style="background: var(--vppl-grad); border:none;">Get A Free Quote</a>
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
        // Smooth entrance animation for the Hero content
        window.addEventListener('load', function() {
            gsap.to("#hero-animate", {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power4.out"
            });
        });
    </script>
</body>

</html>