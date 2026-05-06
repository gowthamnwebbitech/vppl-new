<?php 
// 1. DYNAMIC CONFIGURATION
$page_title = "News Details"; 
$hero_bg = "sub-banner.webp"; // Same hero background
$article_title = "Pioneering Zero Liquid Discharge <br><span class='vppl-gradient-text'>(ZLD) Systems</span>";
$article_date = "Jan 15, 2026";
$article_category = "Case Study";
$article_author = "Technical Team";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your standard header links -->
    <?php include 'headerlink.php'; ?>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
            --vppl-text-dark: #334155; 
            --vppl-border: #e2e8f0;
            --vppl-bg-light: #f8fafc;
            --grad-accent: linear-gradient(135deg, #22a4d4 0%, #03e9f4 100%);
            --grad-primary: linear-gradient(135deg, #0a2d4d 0%, #22a4d4 100%);
            --container-width: 1200px;
            --r-custom: 20px;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        /* Adhering to the white background preference */
        body { 
            background-color: var(--vppl-white); 
            color: var(--vppl-secondary); 
            line-height: 1.6; 
            overflow-x: hidden; 
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; 
        }
        
        .vppl-container { 
            width: 100%; 
            max-width: var(--container-width); 
            margin: 0 auto; 
            padding: 0 25px; 
        }

        /* --- Reveal States --- */
        .gsap-reveal { opacity: 0; transform: translateY(30px); }

        /* --- Hero Section --- */
        .vppl-hero {
            height: 55vh;
            min-height: 400px;
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
            background: linear-gradient(to right, rgba(10, 45, 77, 0.95) 10%, rgba(10, 45, 77, 0.4));
            z-index: 1;
        }
        .vppl-hero-content { 
            position: relative; 
            z-index: 10; 
            opacity: 0; 
            transform: translateY(30px); 
            max-width: 900px; 
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
        .vppl-breadcrumb li a { color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s; }
        .vppl-breadcrumb li a:hover { opacity: 1; color: var(--vppl-accent); }
        .vppl-breadcrumb li.active { padding-left: 12px; margin-left: 12px; border-left: 1px solid rgba(255,255,255,0.2); color: var(--vppl-accent); font-weight: 600; }
        
        .vppl-hero-title { font-size: clamp(32px, 4vw, 48px); font-weight: 900; line-height: 1.2; letter-spacing: -1px; margin-bottom: 20px; }
        .vppl-gradient-text { background: var(--grad-accent); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }

        .article-meta-header { display: flex; align-items: center; gap: 20px; font-size: 14px; opacity: 0.9; flex-wrap: wrap; }
        .article-meta-header span { display: flex; align-items: center; gap: 6px; }
        .article-meta-header svg { width: 16px; height: 16px; fill: var(--vppl-accent); }

        /* --- Article Layout --- */
        .vppl-article-section { padding: 80px 0; }
        .article-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 50px; align-items: start; }

        /* --- Main Content --- */
        .article-main-content { background: var(--vppl-white); min-width: 0; /* Prevents overflow in grid */ }
        .article-featured-img { width: 100%; height: auto; border-radius: var(--r-custom); margin-bottom: 40px; box-shadow: 0 20px 40px rgba(10, 45, 77, 0.06); object-fit: cover; max-height: 500px; }
        
        .article-body { font-size: 17px; color: var(--vppl-text-dark); line-height: 1.8; }
        .article-body p { margin-bottom: 25px; }
        .article-body h2 { font-size: 28px; color: var(--vppl-secondary); font-weight: 800; margin: 40px 0 20px; line-height: 1.3; }
        .article-body h3 { font-size: 22px; color: var(--vppl-secondary); font-weight: 700; margin: 30px 0 15px; }
        
        .article-body blockquote {
            background: var(--vppl-bg-light);
            border-left: 4px solid var(--vppl-primary);
            padding: 30px;
            border-radius: 0 var(--r-custom) var(--r-custom) 0;
            font-size: 20px;
            font-style: italic;
            color: var(--vppl-secondary);
            margin: 40px 0;
            position: relative;
        }
        .article-body blockquote::before {
            content: '"';
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 60px;
            color: rgba(34, 164, 212, 0.1);
            font-family: serif;
            line-height: 1;
        }

        .article-body ul { margin: 0 0 25px 20px; padding: 0; }
        .article-body li { margin-bottom: 10px; position: relative; list-style: none; padding-left: 25px; }
        .article-body li::before { content: '•'; color: var(--vppl-primary); font-size: 24px; position: absolute; left: 0; top: -5px; }

        /* Share Tags & Footer */
        .article-footer { display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--vppl-border); border-bottom: 1px solid var(--vppl-border); padding: 25px 0; margin-top: 50px; flex-wrap: wrap; gap: 20px; }
        .article-tags { display: flex; gap: 10px; flex-wrap: wrap; align-items: center; }
        .article-tags strong { color: var(--vppl-secondary); font-size: 14px; }
        .vppl-tag { display: inline-block; background: rgba(34, 164, 212, 0.1); color: var(--vppl-primary); padding: 6px 16px; border-radius: 6px; font-weight: 700; font-size: 11px; text-transform: uppercase; border-left: 3px solid var(--vppl-primary); text-decoration: none; transition: var(--transition); }
        .vppl-tag:hover { background: var(--vppl-primary); color: #fff; }

        .article-share { display: flex; align-items: center; gap: 15px; }
        .article-share strong { font-size: 14px; }
        .share-btn { width: 40px; height: 40px; border-radius: 50%; background: var(--vppl-bg-light); display: flex; justify-content: center; align-items: center; color: var(--vppl-secondary); text-decoration: none; border: 1px solid var(--vppl-border); transition: var(--transition); }
        .share-btn:hover { background: var(--vppl-primary); color: #fff; border-color: var(--vppl-primary); transform: translateY(-3px); }

        /* --- Sticky Sidebar --- */
        @media (min-width: 992px) {
            .article-sidebar {
                position: sticky;
                top: 120px; /* Offset from top of viewport */
                align-self: start; /* Critical for sticky to work in CSS Grid */
            }
        }

        .sidebar-widget { 
            background: #fff; 
            border: 1px solid var(--vppl-border); 
            border-radius: var(--r-custom); 
            padding: 30px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.02); 
        }
        .widget-title { font-size: 20px; font-weight: 800; color: var(--vppl-secondary); margin-bottom: 25px; position: relative; padding-bottom: 15px; }
        .widget-title::after { content: ''; position: absolute; left: 0; bottom: 0; width: 40px; height: 3px; background: var(--grad-accent); border-radius: 2px; }

        /* Refined Recent News Widget */
        .recent-news-list { display: flex; flex-direction: column; gap: 15px; }
        .recent-news-item { 
            display: flex; 
            gap: 15px; 
            align-items: center; 
            text-decoration: none; 
            padding: 12px;
            border-radius: 12px;
            border: 1px solid transparent;
            transition: var(--transition);
            background: var(--vppl-white);
        }
        .recent-news-item:hover {
            border-color: var(--vppl-border);
            box-shadow: 0 10px 20px rgba(10, 45, 77, 0.05);
            background: var(--vppl-bg-light);
            transform: translateX(5px);
        }
        .recent-news-img { width: 75px; height: 75px; border-radius: 10px; object-fit: cover; flex-shrink: 0; }
        .recent-news-text h4 { font-size: 14px; color: var(--vppl-secondary); font-weight: 700; line-height: 1.4; transition: var(--transition); margin-bottom: 5px; }
        .recent-news-item:hover .recent-news-text h4 { color: var(--vppl-primary); }
        .recent-news-text span { font-size: 12px; color: var(--vppl-gray); font-weight: 500; }

        /* --- Related News Grid --- */
        .related-news-section { padding: 60px 0 100px; background: var(--vppl-bg-light); border-top: 1px solid var(--vppl-border); }
        .section-header { text-align: center; margin-bottom: 50px; }
        .section-header h2 { font-size: 36px; font-weight: 900; color: var(--vppl-secondary); }
        
        .vppl-news-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
        .vppl-news-card { background: #fff; border-radius: var(--r-custom); overflow: hidden; border: 1px solid var(--vppl-border); transition: var(--transition); display: flex; flex-direction: column; }
        .vppl-news-card:hover { transform: translateY(-8px); border-color: var(--vppl-primary); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .card-img-wrapper { height: 200px; overflow: hidden; position: relative; }
        .card-img-wrapper img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s ease; }
        .vppl-news-card:hover .card-img-wrapper img { transform: scale(1.05); }
        .card-date-label { position: absolute; top: 15px; left: 15px; background: rgba(255, 255, 255, 0.95); padding: 8px 12px; border-radius: 10px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1); z-index: 2; }
        .card-date-label b { display: block; font-size: 18px; color: var(--vppl-secondary); line-height: 1; }
        .card-date-label span { font-size: 9px; text-transform: uppercase; font-weight: 700; color: var(--vppl-primary); }
        .card-content { padding: 25px; flex-grow: 1; display: flex; flex-direction: column; }
        .card-content h3 { font-size: 18px; font-weight: 800; margin-bottom: 12px; color: var(--vppl-secondary); line-height: 1.4; }
        .card-content p { font-size: 14px; color: var(--vppl-gray); margin-bottom: 20px; line-height: 1.5; }
        .btn-link { margin-top: auto; color: var(--vppl-secondary); text-decoration: none; font-weight: 700; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; display: flex; align-items: center; gap: 5px; transition: 0.3s; }
        .btn-link:hover { color: var(--vppl-primary); gap: 10px; }

        /* --- Responsive Fixes --- */
        @media (max-width: 991px) {
            .article-grid { grid-template-columns: 1fr; }
            .vppl-news-grid { grid-template-columns: repeat(2, 1fr); }
            .vppl-hero { height: auto; padding: 120px 0 80px; }
            .article-sidebar { margin-top: 20px; }
        }
        @media (max-width: 600px) {
            .vppl-news-grid { grid-template-columns: 1fr; }
            .vppl-hero-title { font-size: 28px; }
            .article-meta-header { gap: 10px; flex-direction: column; align-items: flex-start; }
            .article-body { font-size: 16px; }
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <!-- Include Header -->
        <?php include 'header.php'; ?>

        <main id="content">
            <!-- Hero Section -->
            <section class="vppl-hero" style="background-image: url('images/<?php echo $hero_bg; ?>');">
                <div class="vppl-hero-overlay"></div>
                <div class="vppl-container">
                    <div class="vppl-hero-content">
                        <ul class="vppl-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="news.php">News & Events</a></li>
                            <li class="active"><?php echo $page_title; ?></li>
                        </ul>
                        <h1 class="vppl-hero-title"><?php echo $article_title; ?></h1>
                        
                        <div class="article-meta-header">
                            <span>
                                <svg viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
                                <?php echo $article_date; ?>
                            </span>
                            <span>
                                <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                By <?php echo $article_author; ?>
                            </span>
                            <span>
                                <svg viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.41l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.41zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg>
                                <?php echo $article_category; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Article Layout -->
            <section class="vppl-article-section">
                <div class="vppl-container">
                    <div class="article-grid">
                        
                        <!-- Left Column: Article Content -->
                        <div class="article-main-content">
                            <img src="images/about-1.jpg" alt="ZLD Tech" class="article-featured-img gsap-reveal">
                            
                            <div class="article-body gsap-reveal">
                                <p>The industrial landscape is undergoing a monumental shift towards sustainable water management. At VPPL, we are leading this transformation through the implementation of our cutting-edge Zero Liquid Discharge (ZLD) systems. This technology represents a paradigm shift from traditional wastewater treatment to comprehensive resource recovery.</p>
                                
                                <h2>The Challenge in Industrial Hubs</h2>
                                <p>Major industrial hubs generate massive volumes of complex wastewater laden with heavy metals, high total dissolved solids (TDS), and organic compounds. Traditional effluent treatment plants (ETPs) often fall short in complying with increasingly stringent environmental regulations, leaving industries vulnerable to operational halts and ecological fines.</p>
                                
                                <blockquote>
                                    "Zero Liquid Discharge is no longer an environmental luxury; it is an economic and operational necessity for modern industries aiming for sustainable growth."
                                </blockquote>

                                <h3>How VPPL's ZLD System Works</h3>
                                <p>Our proprietary ZLD architecture is designed for maximum efficiency and minimum footprint. The process involves a multi-stage approach:</p>
                                <ul>
                                    <li><strong>Pre-treatment:</strong> Removal of suspended solids and organics using advanced coagulation and ultrafiltration.</li>
                                    <li><strong>Reverse Osmosis (RO):</strong> High-recovery RO membranes concentrate the dissolved solids while recovering up to 80% of pure water.</li>
                                    <li><strong>Evaporation & Crystallization:</strong> Thermal evaporators process the RO reject, converting the remaining liquid into solid salt crystals, achieving complete zero liquid discharge.</li>
                                </ul>

                                <p>By implementing this 95% process water recovery system, our clients have not only reduced their environmental footprint but also significantly lowered their operational costs associated with fresh water procurement and effluent discharge penalties. The recovered water is recycled back into the industrial process, creating a truly circular water economy.</p>
                            </div>

                            <!-- Share & Tags Footer -->
                            <div class="article-footer gsap-reveal">
                                <div class="article-tags">
                                    <strong>Tags:</strong>
                                    <a href="#" class="vppl-tag">Sustainability</a>
                                    <a href="#" class="vppl-tag">ZLD System</a>
                                    <a href="#" class="vppl-tag">Innovation</a>
                                </div>
                                <div class="article-share">
                                    <strong>Share:</strong>
                                    <a href="#" class="share-btn" title="Share on LinkedIn"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                                    <a href="#" class="share-btn" title="Share on Twitter"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                                    <a href="#" class="share-btn" title="Share on Facebook"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Sticky Sidebar -->
                        <aside class="article-sidebar">
                            
                            <!-- Recent News Widget Only -->
                            <div class="sidebar-widget gsap-reveal">
                                <h3 class="widget-title">Recent Posts</h3>
                                <div class="recent-news-list">
                                    <a href="#" class="recent-news-item">
                                        <img src="images/about-img-1.webp" alt="News" class="recent-news-img">
                                        <div class="recent-news-text">
                                            <h4>ChemTech Global Expo 2026 Participation</h4>
                                            <span>Jan 12, 2026</span>
                                        </div>
                                    </a>
                                    <a href="#" class="recent-news-item">
                                        <img src="images/about-img-2.webp" alt="News" class="recent-news-img">
                                        <div class="recent-news-text">
                                            <h4>VPPL wins Excellence in Innovation Award</h4>
                                            <span>Jan 05, 2026</span>
                                        </div>
                                    </a>
                                    <a href="#" class="recent-news-item">
                                        <img src="images/wat5.jpg" alt="News" class="recent-news-img">
                                        <div class="recent-news-text">
                                            <h4>Ahmedabad Textile Hub Smart Water Recovery</h4>
                                            <span>Dec 28, 2025</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>
            </section>

            <!-- Related News Grid -->
            <section class="related-news-section">
                <div class="vppl-container">
                    <div class="section-header gsap-reveal">
                        <h2>Related <span class="vppl-gradient-text">Articles</span></h2>
                    </div>

                    <div class="vppl-news-grid">
                        
                        <div class="vppl-news-card gsap-reveal">
                            <div class="card-img-wrapper">
                                <div class="card-date-label"><b>12</b><span>Jan</span></div>
                                <img src="images/about-img-1.webp" alt="Expo">
                            </div>
                            <div class="card-content">
                                <span class="vppl-tag">Event</span>
                                <h3>ChemTech Global Expo 2026</h3>
                                <p>Join VPPL as we unveil our latest ultra-filtration technology lineup.</p>
                                <a href="news-details.php" class="btn-link">Details →</a>
                            </div>
                        </div>

                        <div class="vppl-news-card gsap-reveal">
                            <div class="card-img-wrapper">
                                <div class="card-date-label"><b>05</b><span>Jan</span></div>
                                <img src="images/about-img-2.webp" alt="Award">
                            </div>
                            <div class="card-content">
                                <span class="vppl-tag">Award</span>
                                <h3>Excellence in Innovation</h3>
                                <p>Recognized for breakthrough in ceramic membrane technology cycles.</p>
                                <a href="news-details.php" class="btn-link">Read More →</a>
                            </div>
                        </div>

                        <div class="vppl-news-card gsap-reveal">
                            <div class="card-img-wrapper">
                                <div class="card-date-label"><b>28</b><span>Dec</span></div>
                                <img src="images/wat5.jpg" alt="Project">
                            </div>
                            <div class="card-content">
                                <span class="vppl-tag">Project</span>
                                <h3>Ahmedabad Textile Hub</h3>
                                <p>Commissioning of a smart-water recovery system for high-volume units.</p>
                                <a href="news-details.php" class="btn-link">Technical →</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <!-- Include Footer -->
        <?php include 'footer.php'; ?>
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Hero Content Entrance
        gsap.to(".vppl-hero-content", { 
            opacity: 1, y: 0, duration: 1.2, ease: "power3.out", delay: 0.2 
        });

        // Universal Staggered Reveal for main content, sidebar elements, and related grid
        gsap.utils.toArray('.gsap-reveal').forEach((el, i) => {
            gsap.to(el, {
                scrollTrigger: {
                    trigger: el,
                    start: "top 90%", // Trigger slightly earlier for a smoother feel
                },
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "power2.out",
                // Stagger differently depending on if it's in a grid or a vertical list
                delay: el.closest('.vppl-news-grid') ? (i % 3) * 0.15 : 0.1 
            });
        });
    </script>
</body>
</html>