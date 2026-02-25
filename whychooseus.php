<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqua Engineering | Water Wave + Bubble Design</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --vppl-primary: #2293c4;
            --vppl-dark: #0f172a;
            --vppl-card-bg: linear-gradient(90deg, #0ea5e9 0%, #0B5F9F 100%);
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--vppl-dark);
            color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ========================= */
        /* SECTION */
        /* ========================= */

        .aq-section {
            position: relative;
            padding: 120px 20px;
            overflow: hidden;
            background: url("https://images.unsplash.com/photo-1581091870627-3c9c8c2d6d0c?q=80&w=1920&auto=format&fit=crop") center center / cover no-repeat;
        }

        .aq-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: var(--vppl-card-bg);
            z-index: 0;
        }

        .aq-section>* {
            position: relative;
            z-index: 1;
        }

        /* ========================= */
        /* FLOATING BUBBLES */
        /* ========================= */

        .bubbles {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .bubbles span {
            position: absolute;
            bottom: -150px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            box-shadow:
                inset -6px -6px 12px rgba(255, 255, 255, 0.25),
                0 0 15px rgba(255, 255, 255, 0.3),
                0 0 30px rgba(255, 255, 255, 0.2);
            animation: rise linear infinite;
        }

        /* Individual bubble sizes, positions & speeds */

        /* 30 bubbles with variation */

        .bubbles span:nth-child(1) {
            left: 2%;
            width: 18px;
            height: 18px;
            animation-duration: 9s;
            animation-delay: 1s;
        }

        .bubbles span:nth-child(2) {
            left: 6%;
            width: 35px;
            height: 35px;
            animation-duration: 16s;
            animation-delay: 2s;
        }

        .bubbles span:nth-child(3) {
            left: 10%;
            width: 22px;
            height: 22px;
            animation-duration: 11s;
            animation-delay: 3s;
        }

        .bubbles span:nth-child(4) {
            left: 15%;
            width: 50px;
            height: 50px;
            animation-duration: 22s;
            animation-delay: 0s;
        }

        .bubbles span:nth-child(5) {
            left: 20%;
            width: 28px;
            height: 28px;
            animation-duration: 14s;
            animation-delay: 4s;
        }

        .bubbles span:nth-child(6) {
            left: 25%;
            width: 45px;
            height: 45px;
            animation-duration: 20s;
            animation-delay: 1s;
        }

        .bubbles span:nth-child(7) {
            left: 30%;
            width: 16px;
            height: 16px;
            animation-duration: 8s;
            animation-delay: 5s;
        }

        .bubbles span:nth-child(8) {
            left: 35%;
            width: 38px;
            height: 38px;
            animation-duration: 17s;
            animation-delay: 3s;
        }

        .bubbles span:nth-child(9) {
            left: 40%;
            width: 24px;
            height: 24px;
            animation-duration: 13s;
            animation-delay: 6s;
        }

        .bubbles span:nth-child(10) {
            left: 45%;
            width: 42px;
            height: 42px;
            animation-duration: 19s;
            animation-delay: 2s;
        }

        .bubbles span:nth-child(11) {
            left: 50%;
            width: 20px;
            height: 20px;
            animation-duration: 10s;
            animation-delay: 7s;
        }

        .bubbles span:nth-child(12) {
            left: 55%;
            width: 36px;
            height: 36px;
            animation-duration: 18s;
            animation-delay: 1s;
        }

        .bubbles span:nth-child(13) {
            left: 60%;
            width: 26px;
            height: 26px;
            animation-duration: 12s;
            animation-delay: 4s;
        }

        .bubbles span:nth-child(14) {
            left: 65%;
            width: 48px;
            height: 48px;
            animation-duration: 23s;
            animation-delay: 0s;
        }

        .bubbles span:nth-child(15) {
            left: 70%;
            width: 30px;
            height: 30px;
            animation-duration: 15s;
            animation-delay: 5s;
        }

        .bubbles span:nth-child(16) {
            left: 75%;
            width: 40px;
            height: 40px;
            animation-duration: 21s;
            animation-delay: 3s;
        }

        .bubbles span:nth-child(17) {
            left: 80%;
            width: 18px;
            height: 18px;
            animation-duration: 9s;
            animation-delay: 6s;
        }

        .bubbles span:nth-child(18) {
            left: 85%;
            width: 33px;
            height: 33px;
            animation-duration: 16s;
            animation-delay: 2s;
        }

        .bubbles span:nth-child(19) {
            left: 90%;
            width: 22px;
            height: 22px;
            animation-duration: 11s;
            animation-delay: 4s;
        }

        .bubbles span:nth-child(20) {
            left: 95%;
            width: 44px;
            height: 44px;
            animation-duration: 20s;
            animation-delay: 1s;
        }

        .bubbles span:nth-child(21) {
            left: 12%;
            width: 28px;
            height: 28px;
            animation-duration: 14s;
            animation-delay: 6s;
        }

        .bubbles span:nth-child(22) {
            left: 32%;
            width: 36px;
            height: 36px;
            animation-duration: 18s;
            animation-delay: 2s;
        }

        .bubbles span:nth-child(23) {
            left: 52%;
            width: 24px;
            height: 24px;
            animation-duration: 12s;
            animation-delay: 7s;
        }

        .bubbles span:nth-child(24) {
            left: 72%;
            width: 48px;
            height: 48px;
            animation-duration: 22s;
            animation-delay: 3s;
        }

        .bubbles span:nth-child(25) {
            left: 88%;
            width: 30px;
            height: 30px;
            animation-duration: 15s;
            animation-delay: 5s;
        }

        .bubbles span:nth-child(26) {
            left: 18%;
            width: 20px;
            height: 20px;
            animation-duration: 10s;
            animation-delay: 8s;
        }

        .bubbles span:nth-child(27) {
            left: 42%;
            width: 40px;
            height: 40px;
            animation-duration: 19s;
            animation-delay: 2s;
        }

        .bubbles span:nth-child(28) {
            left: 66%;
            width: 26px;
            height: 26px;
            animation-duration: 13s;
            animation-delay: 6s;
        }

        .bubbles span:nth-child(29) {
            left: 78%;
            width: 34px;
            height: 34px;
            animation-duration: 17s;
            animation-delay: 4s;
        }

        .bubbles span:nth-child(30) {
            left: 94%;
            width: 22px;
            height: 22px;
            animation-duration: 11s;
            animation-delay: 3s;
        }

        @keyframes rise {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.8;
            }

            100% {
                transform: translateY(-130vh) scale(1.2);
                opacity: 0;
            }
        }

        /* ========================= */
        /* WAVES */
        /* ========================= */

        .wave {
            position: absolute;
            left: 0;
            width: 200%;
            height: 120px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 43%;
            animation: waveMove 18s linear infinite;
            z-index: 0;
        }

        .wave.top {
            top: -60px;
        }

        .wave.bottom {
            bottom: -60px;
            animation-duration: 25s;
            opacity: 0.6;
        }

        @keyframes waveMove {
            0% {
                transform: translateX(0) rotate(0deg);
            }

            50% {
                transform: translateX(-25%) rotate(1deg);
            }

            100% {
                transform: translateX(-50%) rotate(0deg);
            }
        }

        /* ========================= */
        /* CONTENT */
        /* ========================= */

        .aq-container {
            position: relative;
            z-index: 2;
            max-width: 1100px;
            margin: auto;
        }

        .aq-header {
            margin-bottom: 60px;
        }

        .aq-label {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 12px;
            display: block;
            opacity: 0.9;
        }

        .aq-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 700;
        }

        .aq-list {
            display: flex;
            flex-direction: column;
        }

        .aq-row {
            display: grid;
            grid-template-columns: 90px 1fr;
            align-items: center;
            padding: 35px 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(8px);
            transition: all .4s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .aq-row:hover {
            transform: translateX(12px);
            background: rgba(255, 255, 255, 0.1);
        }

        .aq-row::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background: var(--white);
            transform: scaleY(0);
            transform-origin: top;
            transition: transform .3s ease;
        }

        .aq-row:hover::before {
            transform: scaleY(1);
        }

        .aq-num {
            font-size: 1.6rem;
            font-weight: 700;
            opacity: 0.8;
            transition: .3s;
        }

        .aq-row:hover .aq-num {
            transform: scale(1.15);
            opacity: 1;
        }

        .aq-content {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .aq-row-title {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .aq-row-desc {
            font-size: 0.95rem;
            max-width: 720px;
        }

        /* ========================= */
        /* RESPONSIVE */
        /* ========================= */

        @media(max-width:768px) {
            .aq-section {
                padding: 90px 18px;
            }

            .aq-row {
                grid-template-columns: 1fr;
                gap: 15px;
                padding: 28px 20px;
            }

            .aq-title {
                font-size: 1.8rem;
            }

            .wave {
                height: 80px;
            }
        }

        @media(max-width:480px) {
            .aq-section {
                padding: 70px 15px;
            }

            .aq-row {
                padding: 22px 16px;
            }
        }
    </style>
</head>

<body>

    <section class="aq-section">

        <!-- Floating Bubbles -->
        <div class="bubbles">
            <span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span><span></span>
        </div>

        <!-- Waves -->
        <div class="wave top"></div>
        <div class="wave bottom"></div>

        <div class="aq-container">

            <div class="aq-header text-center">
                <span class="aq-label">Why Choose Us</span>
                <h1 class="aq-title">Commitment to Excellence</h1>
            </div>

            <div class="aq-list">

                <div class="aq-row">
                    <div class="aq-num">01</div>
                    <div class="aq-content">
                        <h3 class="aq-row-title">Process-Driven Engineering</h3>
                        <p class="aq-row-desc">Developed based on detailed water analysis, process selection, and
                            hydraulic design to ensure consistent performance.</p>
                    </div>
                </div>

                <div class="aq-row">
                    <div class="aq-num">02</div>
                    <div class="aq-content">
                        <h3 class="aq-row-title">Product-Focused Solutions</h3>
                        <p class="aq-row-desc">Manufacturing WTP, RO, UF, and iron removal systems designed for varied
                            industrial water qualities.</p>
                    </div>
                </div>

                <div class="aq-row">
                    <div class="aq-num">03</div>
                    <div class="aq-content">
                        <h3 class="aq-row-title">Project Execution Capability</h3>
                        <p class="aq-row-desc">Structured planning covering design finalization, equipment supply,
                            installation, and site commissioning.</p>
                    </div>
                </div>

                <div class="aq-row">
                    <div class="aq-num">04</div>
                    <div class="aq-content">
                        <h3 class="aq-row-title">Application-Specific Design</h3>
                        <p class="aq-row-desc">Systems engineered for specific needs: potable water, process water,
                            reuse, or pressure boosting.</p>
                    </div>
                </div>

                <div class="aq-row">
                    <div class="aq-num">05</div>
                    <div class="aq-content">
                        <h3 class="aq-row-title">System Integration</h3>
                        <p class="aq-row-desc">Seamlessly combining mechanical, electrical, piping, and automation for
                            smooth plant operation.</p>
                    </div>
                </div>

                <div class="aq-row" style="border-bottom:none;">
                    <div class="aq-num">06</div>
                    <div class="aq-content">
                        <h3 class="aq-row-title">Operational Support</h3>
                        <p class="aq-row-desc">Ensuring reliable plant performance through guidance, periodic servicing,
                            and maintenance assistance.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

</html>