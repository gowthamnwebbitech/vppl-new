<!DOCTYPE html>
<html lang="en">

<head>


    <style>
        :root {
            --c-dark: #0f172a;
            --c-accent: #0ea5e9;
            --c-blue-deep: #2563eb;
            --c-border: rgba(15, 23, 42, 0.08);
            --grad-primary: linear-gradient(135deg, #0ea5e9 0%, #2563eb 100%);
        }

        body {
            margin: 0;
            background: #ffffff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--c-dark);
            overflow-x: hidden;
        }

        /* ══════════════ BACKGROUNDS ══════════════ */
        .wave-bg-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }
.c-dark{
    color: var(--c-dark);
}
        .wave-svg {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: auto;
            opacity: 0.6;
        }

        .main-bg {
            position: relative;
            background-image: url('./images/background/waves_shape1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* background-attachment: fixed; */
            min-height: 100vh;
            overflow: hidden;
        }

        /* ══════════════ HERO SECTION ══════════════ */
        .aq-hero-section {
            padding: 60px 0;
            /* Reduced for mobile */
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            z-index: 2;
            overflow: hidden;
        }

        #cursor-canvas {
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 9999;
        }

        /* ══════════════ IMAGE STACK (Mobile Responsive) ══════════════ */
        .image-stack {
            position: relative;
            height: 350px;
            /* Smaller height for mobile */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
        }

        .liquid-frame {
            position: absolute;
            overflow: hidden;
            border: 6px solid #fff;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: border-radius 1s ease-in-out;
            background: #f8fafc;
        }

        .frame-main {
            width: 260px;
            /* Scaled down for mobile */
            height: 300px;
            z-index: 5;
            left: 50%;
            transform: translateX(-60%);
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }

        .frame-sub {
            width: 180px;
            /* Scaled down for mobile */
            height: 200px;
            z-index: 4;
            right: 5%;
            top: 5%;
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 70%;
            opacity: 0.9;
        }

        .liquid-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1.1);
        }

        /* ══════════════ TEXT & TYPOGRAPHY ══════════════ */
        .reveal-wrapper {
            overflow: hidden;
            display: block;
        }

        .reveal-item {
            display: block;
            position: relative;
        }

        .display-text {
            font-size: clamp(2.2rem, 8vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1px;
            color: var(--c-dark);
        }

        .accent-gradient {
            color: var(--c-accent);
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid var(--c-border);
            padding: 20px;
            border-radius: 20px;
            display: flex;
            gap: 15px;
        }

        .btn-main {
            padding: 16px 32px;
            background: var(--c-dark);
            color: #fff !important;
            border-radius: 100px;
            text-decoration: none;
            display: inline-flex;
            font-weight: 700;
            border: 2px solid var(--c-dark);
            transition: 0.3s;
            width: 100%;
            /* Full width on mobile */
            justify-content: center;
        }

        .stats-pill {
            position: absolute;
            top: 0;
            right: 0;
            background: white;
            padding: 8px 16px;
            border-radius: 100px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            z-index: 20;
            font-size: 0.85rem;
            border: 1px solid var(--c-border);
        }

        /* ══════════════ DESKTOP OVERRIDES ══════════════ */
        @media (min-width: 992px) {
            .aq-hero-section {
                padding: 100px 0;
            }

            .image-stack {
                height: 600px;
                margin-bottom: 0;
            }

            .frame-main {
                width: 400px;
                height: 450px;
                left: 5%;
                transform: none;
            }

            .frame-sub {
                width: 300px;
                height: 320px;
                right: 0;
                top: 10%;
            }

            .btn-main {
                width: auto;
            }

            .stats-pill {
                top: 5%;
                right: 5%;
                padding: 12px 25px;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-bg">
        <div class="wave-bg-container">
            <svg class="wave-svg" viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                <path fill="#0ea5e9" fill-opacity="0.1"
                    d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
                <path fill="#2563eb" fill-opacity="0.05"
                    d="M0,192L48,186.7C96,181,192,171,288,186.7C384,203,480,245,576,234.7C672,224,768,160,864,138.7C960,117,1056,139,1152,160C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>

        <canvas id="cursor-canvas"></canvas>

        <section class="aq-hero-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="image-stack">
                            <div class="stats-pill" id="float-pill">
                                <span class="fw-bold text-primary"><i class="fas fa-shield-halved me-2"></i>Industrial
                                    Grade</span>
                            </div>
                            <div class="liquid-frame frame-sub" id="blob-sub">
                                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                                    alt="Tech">
                            </div>
                            <div class="liquid-frame frame-main" id="blob-main">
                                <img src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?auto=format&fit=crop&q=80&w=1000"
                                    alt="Water Engineering">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 order-2 order-lg-1">
                        <div class="pe-lg-5 text-center text-lg-start">
                            <span class="reveal-item text-accent fw-bold small text-uppercase mb-2 d-block">
                                <i class="fas fa-droplet me-2"></i>Innovating for Purity
                            </span>

                            <h1 class="display-text mb-4">
                                <span class="reveal-wrapper"><span class="reveal-item">Engineering</span></span>
                                <span class="reveal-wrapper"><span class="reveal-item accent-gradient">Sustainable
                                        Water</span></span>
                                <span class="reveal-wrapper"><span class="reveal-item">Solutions</span></span>
                            </h1>

                            <p class="text-muted fs-5 mb-5 mx-auto mx-lg-0" style="max-width: 600px;">
                                VPPL is a technology-driven engineering powerhouse delivering high-performance
                                industrial solutions for a cleaner, greener tomorrow.
                            </p>

                            <div class="feature-card mb-5 text-start">
                                <div class="icon-box"
                                    style="min-width: 50px; height: 50px; background: #e0f2fe; color: #0ea5e9; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-microchip"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 c-dark">Modular Architecture</h5>
                                    <p class="text-muted small mb-0">Smart, compact designs optimized for seamless
                                        installation.</p>
                                </div>
                            </div>

                            <a href="#" class="btn-main">
                                Explore Solutions <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Animations kept exactly as original
        window.addEventListener('load', () => {
            const tl = gsap.timeline({ defaults: { ease: "power4.out" } });
            tl.from(".reveal-item", { y: 100, opacity: 0, duration: 1.2, stagger: 0.15 })
                .from(".liquid-frame", { scale: 0.8, opacity: 0, duration: 1.5, stagger: 0.2 }, "-=1");
        });

        function createMorph(element) {
            const r = () => Math.floor(Math.random() * 30 + 35);
            gsap.to(element, {
                borderRadius: `${r()}% ${r()}% ${r()}% ${r()}% / ${r()}% ${r()}% ${r()}% ${r()}%`,
                duration: 4,
                ease: "sine.inOut",
                onComplete: () => createMorph(element)
            });
        }
        createMorph("#blob-main");
        createMorph("#blob-sub");

        const canvas = document.getElementById('cursor-canvas');
        const ctx = canvas.getContext('2d');
        let particles = [];
        const resize = () => { canvas.width = window.innerWidth; canvas.height = window.innerHeight; };
        window.addEventListener('resize', resize); resize();

        class Particle {
            constructor(x, y) {
                this.x = x; this.y = y;
                this.size = Math.random() * 5 + 2;
                this.alpha = 1;
                this.vX = (Math.random() - 0.5) * 1;
                this.vY = (Math.random() - 0.5) * 1;
            }
            update() { this.x += this.vX; this.y += this.vY; this.alpha -= 0.01; }
            draw() {
                ctx.globalAlpha = this.alpha;
                ctx.fillStyle = '#0ea5e9';
                ctx.beginPath(); ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2); ctx.fill();
            }
        }

        window.addEventListener('mousemove', (e) => {
            for (let i = 0; i < 2; i++) particles.push(new Particle(e.clientX, e.clientY));
        });

        function anim() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles = particles.filter(p => p.alpha > 0);
            particles.forEach(p => { p.update(); p.draw(); });
            requestAnimationFrame(anim);
        }
        anim();

        document.addEventListener('mousemove', (e) => {
            if (window.innerWidth > 991) { // Only parallax on desktop
                const x = (e.clientX / window.innerWidth - 0.5) * 40;
                const y = (e.clientY / window.innerHeight - 0.5) * 40;
                gsap.to("#blob-main", { x: x * 0.5, y: y * 0.5, duration: 1 });
                gsap.to("#blob-sub", { x: -x * 0.3, y: -y * 0.3, duration: 1.5 });
                gsap.to("#float-pill", { x: x * 0.8, y: y * 0.8, duration: 2 });
            }
        });
    </script>

</body>

</html>