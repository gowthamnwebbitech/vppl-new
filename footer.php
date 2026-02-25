<footer class="section-dark custom-footer">
    <div class="footer-bg-shape"></div>
    <img src="images/wave.png" class="footer-wave-parallax" alt="">

    <div class="container relative z-2">
        <div class="row gx-5 gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand-section">
                    <img src="images/vppl.svg" class="w-150px footer-logo-img" alt="VPPL Logo">
                    <div class="spacer-20"></div>
                    <p class="footer-text">Transform your water and wastewater systems with VPPL’s expert treatment
                        solutions. From system design to installation and maintenance, we deliver reliable, efficient,
                        and sustainable solutions tailored to your requirements. Let VPPL support your operations with
                        professional service, technical expertise, and a strong commitment to environmental
                        responsibility.</p>

                    <div class="social-icons-modern">
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="Youtube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" aria-label="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                <div class="row">
                    <div class="col-6">
                        <div class="widget">
                            <h5 class="widget-title">Company</h5>
                            <ul class="footer-links">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="service-single.php">Projects</a></li>
                                <li><a href="career.php">Career</a></li>
                                <li><a href="news-event.php">News & Event</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="widget">
                            <h5 class="widget-title">Our Services</h5>
                            <ul class="footer-links">
                                <li><a href="water-treatment-plant.php">Water Treatment</a></li>
                                <li><a href="reverse-osmosis-plant.php">RO Plant</a></li>
                                <li><a href="water-softening-plant.php">Softening Plant</a></li>
                                <li><a href="ultra-filtration-plant.php">Ultra Filtration</a></li>
                                <li><a href="iron-removal-plant.php">Iron Removal</a></li>
                                <li><a href="mineral-water-treatment-plant.php">Mineral Water</a></li>
                                <li><a href="demineralization-plant.php">DM Plant</a></li>
                                <li><a href="hydro-pneumatic-system-pumps.php">Hydro Pumps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 order-lg-2 order-sm-1">
                <div class="contact-glass-box">
                    <div class="widget">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="icofont-location-pin"></i></div>
                            <div>
                                <div class="fw-bold text-white mb-1">Office Location</div>
                                <p class="small op-8 mb-0">No.2, Flat 3, Gflr, Janakaraj Street, Devaraj Nagar,
                                    Sligramam, Chennai - 600093.</p>
                            </div>
                        </div>

                        <div class="spacer-20"></div>

                        <div class="contact-item">
                            <div class="contact-icon"><i class="icofont-phone"></i></div>
                            <div>
                                <div class="fw-bold text-white mb-1">Call Us Directly</div>
                                <a href="tel:+919843514600" class="contact-link">+91 98435 14600</a>
                            </div>
                        </div>

                        <div class="spacer-20"></div>

                        <div class="contact-item">
                            <div class="contact-icon"><i class="icofont-envelope"></i></div>
                            <div>
                                <div class="fw-bold text-white mb-1">Send a Message</div>
                                <a href="mailto:venkadavanprojectschennai@gmail.com" class="contact-link">Email
                                    Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter-modern">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="de-flex footer-bottom-layout">
                        <div class="de-flex-col">
                            &copy; 2026 <strong class="px-1">VPPL</strong> <span class="px-1">|</span> Designed By <a class="designer-tag px-1"
                                href="https://webbitech.com/">Webbitech</a>
                        </div>
                        <ul class="menu-simple-modern">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
:root {
    --vppl-primary: #2293c4;
    --vppl-dark: #0f172a;
    --vppl-card-bg: linear-gradient(90deg, #0ea5e9 0%, #0B5F9F 100%);
    --white: #ffffff;
}

/* ============================= */
/* MAIN FOOTER BACKGROUND */
/* ============================= */

.custom-footer {
    position: relative;
    overflow: hidden;
    padding: 100px 0 0 0;
    background: var(--vppl-card-bg);
    color: var(--white);
    z-index: 1;
}

/* Animated Gradient Movement */
.custom-footer::before {
    content: "";
    position: absolute;
    inset: 0;
    background: var(--vppl-card-bg);
    background-size: 200% 200%;
    animation: gradientMove 12s ease infinite;
    opacity: 0.9;
    z-index: -2;
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* ============================= */
/* FLOATING BUBBLES */
/* ============================= */

.custom-footer::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-image:
        radial-gradient(circle at 20% 80%, rgba(255,255,255,0.15) 0%, transparent 25%),
        radial-gradient(circle at 80% 90%, rgba(255,255,255,0.12) 0%, transparent 20%),
        radial-gradient(circle at 10% 30%, rgba(255,255,255,0.1) 0%, transparent 22%),
        radial-gradient(circle at 70% 20%, rgba(255,255,255,0.14) 0%, transparent 25%),
        radial-gradient(circle at 40% 60%, rgba(255,255,255,0.1) 0%, transparent 18%);
    animation: bubbleFloat 20s linear infinite;
    z-index: -1;
}

@keyframes bubbleFloat {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-40px); }
    100% { transform: translateY(0px); }
}

/* ============================= */
/* PREMIUM WAVE ANIMATION */
/* ============================= */

.footer-wave-parallax {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 200%;
    opacity: 0.15;
    animation: waveMove 14s linear infinite;
    z-index: 0;
}

@keyframes waveMove {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/* ============================= */
/* TEXT STYLES */
/* ============================= */

.footer-text {
    font-size: 14px;
    line-height: 1.8;
    opacity: 0.95;
    color: var(--white);
}

.widget-title {
    color: var(--white);
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 30px;
    position: relative;
}

.widget-title::after {
    content: '';
    display: block;
    width: 45px;
    height: 3px;
    background: var(--vppl-primary);
    margin-top: 10px;
    border-radius: 10px;
}

/* ============================= */
/* FOOTER LINKS */
/* ============================= */

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 12px;
}

.footer-links a {
    color: var(--white);
    text-decoration: none;
    font-size: 14.5px;
    transition: 0.4s ease;
    opacity: 0.85;
}

.footer-links a:hover {
    opacity: 1;
    transform: translateX(8px);
    text-shadow: 0 0 12px rgba(255,255,255,0.4);
}

/* ============================= */
/* SOCIAL ICONS */
/* ============================= */

.social-icons-modern {
    display: flex;
    gap: 14px;
    margin-top: 25px;
}

.social-icons-modern a {
    width: 42px;
    height: 42px;
    background: rgba(255,255,255,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    color: var(--white);
    transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    backdrop-filter: blur(6px);
}

.social-icons-modern a:hover {
    background: var(--vppl-primary);
    transform: translateY(-6px) rotate(6deg);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* ============================= */
/* GLASS CONTACT CARD */
/* ============================= */

.contact-glass-box {
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255,255,255,0.15);
    padding: 35px 25px;
    border-radius: 18px;
    transition: 0.4s ease;
}

.contact-glass-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.25);
}

/* ============================= */
/* CONTACT */
/* ============================= */

.contact-item {
    display: flex;
    gap: 15px;
    align-items: flex-start;
}

.contact-icon {
    width: 38px;
    height: 38px;
    background: rgba(255,255,255,0.15);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
}

.contact-link {
    color: var(--white);
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

.contact-link:hover {
    text-decoration: underline;
}

/* ============================= */
/* SUB FOOTER */
/* ============================= */

.subfooter-modern {
    background: var(--vppl-dark);
    padding: 30px 0;
    margin-top: 80px;
}

.footer-bottom-layout {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.designer-tag {
    color: var(--vppl-primary);
    text-decoration: none;
    font-weight: 600;
}

.designer-tag:hover {
    color: var(--white);
}

.menu-simple-modern {
    list-style: none;
    display: flex;
    gap: 25px;
    padding: 0;
    margin: 0;
}

.menu-simple-modern a {
    color: var(--white);
    opacity: 0.6;
    text-decoration: none;
    font-size: 13px;
    transition: 0.3s;
}

.menu-simple-modern a:hover {
    opacity: 1;
}

/* ============================= */
/* RESPONSIVE */
/* ============================= */

@media (max-width: 991px) {
    .footer-bottom-layout {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }

    .menu-simple-modern {
        justify-content: center;
    }

    .contact-glass-box {
        margin-top: 30px;
    }
}
</style>