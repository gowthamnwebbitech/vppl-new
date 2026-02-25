<header class="vppl-navbar">
    <div class="container">
        <div class="vppl-nav-flex">
            
            <div class="vppl-logo-wrap">
                <a href="index.php">
                    <img src="images/vppl.svg" alt="VPPL Logo">
                </a>
            </div>

            <nav>
                <ul class="vppl-menu-list" id="vppl-mainmenu">
                    <li><a class="vppl-menu-link" href="index.php">Home</a></li>
                    <li><a class="vppl-menu-link" href="about.php">About Us</a></li>
                    <li class="vppl-has-dropdown">
                        <a class="vppl-menu-link" href="#">Projects <i class="fa fa-chevron-down ms-1" style="font-size: 10px;"></i></a>
                        <ul class="vppl-dropdown-box">
                            <li><a href="service-single.php">Water Treatment Plant</a></li>
                            <li><a href="service-single.php">Reverse Osmosis Plant</a></li>
                            <li><a href="water-softening-plant.php">Water Softening Plant</a></li>
                            <li><a href="ultra-filtration-plant.php">Ultra Filtration Plant</a></li>
                            <li><a href="iron-removal-plant.php">Iron Removal Plant</a></li>
                            <li><a href="mineral-water-treatment-plant.php">Mineral Water Treatment</a></li>
                            <li><a href="demineralization-plant.php">Demineralization Plant</a></li>
                            <li><a href="hydro-pneumatic-system-pumps.php">Hydro Pneumatic Pumps</a></li>
                        </ul>
                    </li>
                    <li><a class="vppl-menu-link" href="news-event.php">News & Events</a></li>
                    <li><a class="vppl-menu-link" href="career.php">Careers</a></li>
                    <li><a class="vppl-menu-link" href="gallery.php">Gallery</a></li>
                    <li><a class="vppl-menu-link" href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="d-flex align-items-center">
                <a href="tel:+919843514600" class="vppl-contact-pill d-none d-lg-flex">
                    <i class="fas fa-phone-alt"></i>
                    <div class="vppl-contact-num">
                        <span>+91 98435 14600</span>
                        <span>+91 99438 35148</span>
                    </div>
                </a>

                <div class="vppl-mobile-btn d-lg-none" id="vppl-mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const vpplHeader = document.querySelector(".vppl-navbar");
    const vpplMobileToggle = document.getElementById("vppl-mobile-toggle");
    const vpplMenu = document.getElementById("vppl-mainmenu");
    const vpplDropdownLink = document.querySelector(".vppl-has-dropdown > a");

    // 1. Sticky Header Effect
    window.addEventListener("scroll", function() {
        if (window.scrollY > 60) {
            vpplHeader.classList.add("vppl-sticky");
        } else {
            vpplHeader.classList.remove("vppl-sticky");
        }
    });

    // 2. Mobile Menu Toggle (Off-Canvas)
    if (vpplMobileToggle) {
        vpplMobileToggle.addEventListener("click", function () {
            this.classList.toggle("vppl-active");
            vpplMenu.classList.toggle("vppl-open");
            // Lock body scroll when menu is open
            document.body.style.overflow = vpplMenu.classList.contains("vppl-open") ? "hidden" : "";
        });
    }

    // 3. Mobile Submenu Toggle
    if (vpplDropdownLink) {
        vpplDropdownLink.addEventListener("click", function (e) {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                this.parentElement.classList.toggle("vppl-active");
            }
        });
    }

    // 4. Resize Cleanup
    window.addEventListener("resize", function () {
        if (window.innerWidth > 992) {
            vpplMenu.classList.remove("vppl-open");
            vpplMobileToggle.classList.remove("vppl-active");
            document.body.style.overflow = "";
            document.querySelectorAll('.vppl-has-dropdown').forEach(el => el.classList.remove('vppl-active'));
        }
    });
});
</script>