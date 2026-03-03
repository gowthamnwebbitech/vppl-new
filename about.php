<?php
// 1. DYNAMIC CONFIGURATION
$page_title = "About Us";
$hero_bg = "sub-banner.webp";
$hero_main_text = "Engineering <span class='vppl-gradient-text'>Sustainable</span><br>Future-Ready Tech";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include 'headerlink.php'; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        /* --- VPPL PREMIUM MINIMAL DESIGN SYSTEM --- */
        :root {
            --vppl-primary: #22a4d4;
            --vppl-secondary: #0a2d4d;
            --vppl-accent: #03e9f4;
            --vppl-white: #ffffff;
            --vppl-gray: #5a6268;
            --vppl-border: #e2e8f0;
            --grad-accent: linear-gradient(135deg, #22a4d4 0%, #03e9f4 100%);
            --grad-primary: linear-gradient(135deg, #0a2d4d 0%, #22a4d4 100%);
            --container-width: 1200px;
            --r-custom: 20px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--vppl-white);
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--vppl-secondary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .vppl-container {
            width: 100%;
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 25px;
        }

        /* --- Reveal States --- */
        .gsap-reveal {
            opacity: 0;
            transform: translateY(30px);
        }

        /* --- Hero Section --- */
        .vppl-hero {
            height: 45vh;
            min-height: 350px;
            background-position: center;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            color: var(--vppl-white);
            clip-path: ellipse(150% 100% at 50% 0%);
        }

        .vppl-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(10, 45, 77, 0.95) 20%, rgba(10, 45, 77, 0.4));
            z-index: 1;
        }

        .vppl-hero-content {
            position: relative;
            z-index: 10;
        }

        .vppl-breadcrumb {
            display: inline-flex;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 100px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 25px;
            list-style: none;
            font-size: 13px;
        }

        .vppl-breadcrumb li a {
            color: #fff;
            text-decoration: none;
            opacity: 0.7;
        }

        .vppl-breadcrumb li.active {
            padding-left: 12px;
            margin-left: 12px;
            border-left: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--vppl-accent);
            font-weight: 600;
        }

        .vppl-hero-title {
            font-size: clamp(32px, 6vw, 64px);
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: -1.5px;
        }

        .vppl-gradient-text {
            background: var(--grad-accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* --- STATS WRAPPER --- */
        .vppl-stats-wrapper {
            padding: 60px 0;
            background: var(--vppl-white);
            border-bottom: 1px solid var(--vppl-border);
        }

        .vppl-stats-minimal {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .vppl-stat-item {
            position: relative;
            padding: 0 10px;
            text-align: center;
        }

        .vppl-stat-item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 20%;
            height: 60%;
            width: 1px;
            background: #e2e8f0;
        }

        .vppl-stat-num {
            font-size: clamp(28px, 4vw, 48px);
            font-weight: 800;
            display: block;
            color: var(--vppl-secondary);
            line-height: 1;
            margin-bottom: 10px;
        }

        .vppl-stat-label {
            font-size: clamp(10px, 2vw, 12px);
            font-weight: 700;
            text-transform: uppercase;
            color: var(--vppl-gray);
            letter-spacing: 1px;
        }

        /* --- Story Section --- */
        .vppl-story {
            padding: 80px 0;
        }

        .vppl-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 60px;
            align-items: center;
        }

        .vppl-text-area {
            grid-column: span 7;
        }

        .vppl-image-area {
            grid-column: span 5;
        }

        .vppl-tag {
            display: inline-block;
            background: rgba(34, 164, 212, 0.1);
            color: var(--vppl-primary);
            padding: 6px 18px;
            border-radius: 4px;
            font-weight: 800;
            font-size: 11px;
            margin-bottom: 20px;
            border-left: 4px solid var(--vppl-primary);
            text-transform: uppercase;
        }

        .vppl-h2 {
            font-size: clamp(28px, 5vw, 44px);
            font-weight: 800;
            color: var(--vppl-secondary);
            margin-bottom: 25px;
            line-height: 1.2;
        }

        /* --- Buttons --- */
        .vppl-btn-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 35px;
        }

        .vppl-btn {
            padding: 16px 32px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s;
            font-size: 14px;
            text-align: center;
        }

        .vppl-btn-primary {
            background: var(--vppl-secondary);
            color: white;
        }

        .vppl-btn-primary:hover {
            background: var(--vppl-primary);
            transform: translateY(-3px);
        }

        .vppl-btn-outline {
            border: 1px solid var(--vppl-border);
            color: var(--vppl-secondary);
        }

        /* --- Bento Grid --- */
        .vppl-bento-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .vppl-bento-item {
            border-radius: var(--r-custom);
            overflow: hidden;
            background: #f8fafc;
        }

        .vppl-bento-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .vppl-bento-stats {
            background: var(--grad-primary);
            color: white;
            padding: 30px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* --- RESPONSIVE FIXES --- */
        @media (max-width: 991px) {
            .vppl-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .vppl-text-area,
            .vppl-image-area {
                grid-column: span 1;
            }

            .vppl-hero {
                clip-path: none;
                height: auto;
                padding: 100px 0 60px;
            }
        }

        @media (max-width: 768px) {
            .vppl-stats-minimal {
                grid-template-columns: repeat(2, 1fr);
                row-gap: 40px;
            }

            .vppl-stat-item:nth-child(2)::after {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .vppl-btn {
                width: 100%;
            }

            .vppl-stat-item::after {
                display: none;
            }
            .vppl-story{
                padding: 40px 0;
            }
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <?php include 'header.php'; ?>

        <main id="content">
            <section class="vppl-hero" style="background-image: url('images/<?php echo $hero_bg; ?>');">
                <div class="vppl-hero-overlay"></div>
                <div class="vppl-container">
                    <div class="vppl-hero-content">
                        <ul class="vppl-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><?php echo $page_title; ?></li>
                        </ul>
                        <h1 class="vppl-hero-title"><?php echo $hero_main_text; ?></h1>
                    </div>
                </div>
            </section>

            <div class="vppl-stats-wrapper">
                <div class="vppl-container">
                    <div class="vppl-stats-minimal gsap-reveal">
                        <div class="vppl-stat-item">
                            <span class="vppl-stat-num vppl-gradient-text" data-target="15">0</span>
                            <span class="vppl-stat-label">Years of Mastery</span>
                        </div>
                        <div class="vppl-stat-item">
                            <span class="vppl-stat-num" data-target="550">0</span>
                            <span class="vppl-stat-label">Bio-Gas Plants</span>
                        </div>
                        <div class="vppl-stat-item">
                            <span class="vppl-stat-num" data-target="850">0</span>
                            <span class="vppl-stat-label">Global Projects</span>
                        </div>
                        <div class="vppl-stat-item">
                            <span class="vppl-stat-num vppl-gradient-text" data-target="100">0</span>
                            <span class="vppl-stat-label">Clean Solutions</span>
                        </div>
                    </div>
                </div>
            </div>

            <section class="vppl-story">
                <div class="vppl-container">
                    <div class="vppl-grid">
                        <div class="vppl-text-area gsap-reveal">
                            <span class="vppl-tag">Our Legacy</span>
                            <h2 class="vppl-h2">Driving Industrial <span
                                    class="vppl-gradient-text">Transformation</span></h2>
                            <p style="margin-bottom: 20px; font-size: 17px; color: var(--vppl-gray);">
                                VPPL stands at the forefront of engineering innovation. We specialize in delivering
                                high-efficiency turnkey solutions for the renewable energy and manufacturing sectors.
                            </p>
                            <p style="color: var(--vppl-gray);">
                                Our commitment to sustainability isn't just a goal—it's our blueprint. From large-scale
                                biogas infrastructure to precision tech, we build for the future.
                            </p>
                            <div class="vppl-btn-group">
                                <a href="#" class="vppl-btn vppl-btn-primary">View Company Profile</a>
                                <a href="#" class="vppl-btn vppl-btn-outline">Technical Catalog</a>
                            </div>
                        </div>

                        <div class="vppl-image-area gsap-reveal">
                            <div class="vppl-bento-grid">
                                <div class="vppl-bento-item bento-anim" style="grid-row: span 2;">
                                    <img src="images/about-1.jpg" alt="Industrial">
                                </div>
                                <div class="vppl-bento-item vppl-bento-stats bento-anim">
                                    <h4 style="font-size: 24px; font-weight: 800;">Global</h4>
                                    <p style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px;">Standard
                                    </p>
                                </div>
                                <div class="vppl-bento-item bento-anim">
                                    <img src="images/about-img-1.webp" alt="Tech">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include 'footer.php'; ?>
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Entrance animation for Hero
        gsap.from(".vppl-hero-content", {
            opacity: 0,
            y: 30,
            duration: 1.2,
            ease: "power3.out",
            delay: 0.2
        });

        // Universal Scroll Reveal
        document.querySelectorAll('.gsap-reveal').forEach(el => {
            gsap.to(el, {
                scrollTrigger: { trigger: el, start: "top 90%" },
                opacity: 1, y: 0, duration: 1, ease: "power2.out"
            });
        });

        // Fixed Counter Animation
        document.querySelectorAll('.vppl-stat-num').forEach(stat => {
            const target = parseInt(stat.getAttribute('data-target'));
            let obj = { val: 0 }; // Intermediate object to avoid parsing innerHTML mid-animation

            gsap.to(obj, {
                val: target,
                duration: 2.5,
                scrollTrigger: { trigger: stat, start: "top 95%" },
                onUpdate: function () {
                    let suffix = (target === 100) ? '%' : '+';
                    stat.innerHTML = Math.ceil(obj.val) + suffix;
                }
            });
        });

        // Bento Grid Animation
        gsap.from(".bento-anim", {
            scrollTrigger: { trigger: ".vppl-bento-grid", start: "top 85%" },
            scale: 0.9, opacity: 0, duration: 0.8, stagger: 0.2, ease: "power2.out"
        });
    </script>
</body>

</html>