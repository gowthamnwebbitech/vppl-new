<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqua Engineering | Premium Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --vppl-primary: #2293c4;
            --vppl-primary-soft: rgba(34, 147, 196, 0.1);
            --vppl-dark: #0f172a;
            --vppl-card-bg: linear-gradient(135deg, #2293c4 0%, #1a749c 100%);
            --white: #ffffff;
            --bg-light: #f8fafc;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--white);
            color: var(--vppl-dark);
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* --- Interactive Background Canvas --- */
        #fluid-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(to bottom, #ffffff, #f0f7ff);
        }

        .aqua-eng-section {
            position: relative;
            padding: 80px 20px;
            z-index: 1;
        }

        .aqua-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- Header Section --- */
        .aqua-header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInUp 1s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .aqua-badge {
            display: inline-block;
            background: var(--vppl-primary-soft);
            color: var(--vppl-primary);
            padding: 8px 20px;
            border-radius: 100px;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
            border: 1px solid rgba(34, 147, 196, 0.2);
        }

        .aqua-main-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            color: var(--vppl-dark);
            font-weight: 800;
            line-height: 1.2;
        }

        .aqua-desc {
            color: var(--vppl-muted);
            max-width: 600px;
            margin: 20px auto;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* --- Grid & Modern Cards --- */
        .aqua-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .aqua-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 24px;
            padding: 35px;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 40px rgba(15, 23, 42, 0.03);
        }

        .aqua-card:hover {
            transform: translateY(-10px);
            background: var(--white);
            box-shadow: 0 20px 40px rgba(34, 147, 196, 0.12);
            border-color: var(--vppl-primary);
        }

        .aqua-card-sub {
            color: var(--vppl-primary);
            font-weight: 700;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
            display: block;
        }

        .aqua-card-title {
            font-size: 1.4rem;
            color: var(--vppl-dark);
            margin-bottom: 15px;
            font-weight: 800;
        }

        .aqua-card-text {
            color: var(--vppl-muted);
            line-height: 1.6;
            font-size: 0.95rem;
            margin-bottom: 30px;
        }

        /* --- Button Design --- */
        .aqua-card-footer {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .aqua-btn {
            background: var(--vppl-card-bg);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(34, 147, 196, 0.3);
        }

        .aqua-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(34, 147, 196, 0.4);
        }

        .aqua-tag {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--vppl-dark);
            opacity: 0.5;
        }

        /* --- Animations --- */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .aqua-eng-section { padding: 60px 15px; }
            .aqua-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<canvas id="fluid-canvas"></canvas>

<section class="aqua-eng-section">
    <div class="aqua-container">
        <div class="aqua-header">
            <span class="aqua-badge">Excellence in Engineering</span>
            <h1 class="aqua-main-title">Water Solutions</h1>
            <p class="aqua-desc">Advanced engineering for high-purity water treatment and sustainable industrial systems.</p>
        </div>

        <div class="aqua-grid">
            <?php
            $items = [
                ['title' => 'Water Treatment Plant', 'sub' => 'WTP Systems', 'text' => 'High-capacity physical and chemical purification for community and industry.', 'tag' => 'Potable'],
                ['title' => 'Reverse Osmosis', 'sub' => 'RO Membrane', 'text' => 'Advanced desalination removing salts and microscopic impurities with precision.', 'tag' => 'Ultra Pure'],
                ['title' => 'Water Softening', 'sub' => 'Ion-Exchange', 'text' => 'Removing calcium and magnesium to prevent scaling in pipelines and boilers.', 'tag' => 'Scale-Free'],
                ['title' => 'Ultra Filtration', 'sub' => 'UF Systems', 'text' => 'Pressure-driven membrane process to remove suspended solids and bacteria.', 'tag' => '0.01 Micron'],
                ['title' => 'Iron Removal Plant', 'sub' => 'Oxidation', 'text' => 'Specialized media filters to eliminate iron and manganese from borewell water.', 'tag' => 'Clear Water'],
                ['title' => 'Mineral Water Plant', 'sub' => 'Turnkey', 'text' => 'Automatic production lines for bottled water with ozonation systems.', 'tag' => 'Commercial'],
                ['title' => 'Demineralization', 'sub' => 'DM Units', 'text' => 'Dual-bed and mixed-bed ion exchange for high-purity industrial process water.', 'tag' => 'Deionized'],
                ['title' => 'Hydro Pneumatic', 'sub' => 'Pump Systems', 'text' => 'Energy-efficient pressure boosting systems for constant water supply.', 'tag' => 'Constant PSI']
            ];

            foreach ($items as $item): ?>
            <div class="aqua-card">
                <div>
                    <span class="aqua-card-sub"><?= $item['sub'] ?></span>
                    <h3 class="aqua-card-title"><?= $item['title'] ?></h3>
                    <p class="aqua-card-text"><?= $item['text'] ?></p>
                </div>
                
                <div class="aqua-card-footer">
                    <span class="aqua-tag"><?= $item['tag'] ?></span>
                    <button class="aqua-btn">
                        Details 
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    const canvas = document.getElementById('fluid-canvas');
    const ctx = canvas.getContext('2d');
    let particles = [];
    let mouse = { x: null, y: null };

    window.addEventListener('mousemove', (e) => {
        mouse.x = e.x;
        mouse.y = e.y;
    });

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resize);
    resize();

    class Bubble {
        constructor() {
            this.init();
        }
        init() {
            this.x = Math.random() * canvas.width;
            this.y = canvas.height + Math.random() * 100;
            this.size = Math.random() * 15 + 2;
            this.speed = Math.random() * 1 + 0.4;
            this.opacity = Math.random() * 0.3 + 0.1;
            this.wobble = Math.random() * 10;
        }
        update() {
            this.y -= this.speed;
            this.x += Math.sin(this.y / 30 + this.wobble) * 0.5;

            // Mouse Repel
            if (mouse.x) {
                let dx = this.x - mouse.x;
                let dy = this.y - mouse.y;
                let dist = Math.sqrt(dx*dx + dy*dy);
                if (dist < 120) {
                    this.x += dx / 20;
                    this.y += dy / 20;
                }
            }

            if (this.y < -50) this.init();
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(34, 147, 196, ${this.opacity})`;
            ctx.fill();
            // Reflection highlight on bubble
            ctx.beginPath();
            ctx.arc(this.x - this.size*0.3, this.y - this.size*0.3, this.size*0.2, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity + 0.2})`;
            ctx.fill();
        }
    }

    function init() {
        particles = [];
        for (let i = 0; i < 40; i++) {
            particles.push(new Bubble());
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        // Drawing a very subtle "water wave" at the bottom
        ctx.beginPath();
        ctx.moveTo(0, canvas.height);
        for(let i = 0; i <= canvas.width; i += 20) {
            ctx.lineTo(i, canvas.height - 20 + Math.sin(i * 0.01 + Date.now() * 0.002) * 10);
        }
        ctx.lineTo(canvas.width, canvas.height);
        ctx.fillStyle = 'rgba(34, 147, 196, 0.03)';
        ctx.fill();

        particles.forEach(p => {
            p.update();
            p.draw();
        });
        requestAnimationFrame(animate);
    }

    init();
    animate();
</script>

</body>
</html>