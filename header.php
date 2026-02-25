<header class="">
    <div id="topbar">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div id="logo">
                            <a href="index.php">
                                <img class="logo-main" src="images/vppl.svg" alt="">
                                <img class="logo-mobile" src="images/vppl.svg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="index.php">Home</a></li>
                            <li><a class="menu-item" href="about.php">About Us</a></li>
                            <li class="has-mega">
                                <a class="menu-item" href="#">Projects</a>
                                <ul class="submenu project-two-col">
                                    <li><a href="service-single.php">Water Treatment Plant</a></li>
                                    <li><a href="service-single.php">Reverse Osmosis Plant</a></li>
                                    <li><a href="water-softening-plant.php">Water Softening Plant</a></li>
                                    <li><a href="ultra-filtration-plant.php">Ultra Filtration Plant</a></li>
                                    <li><a href="iron-removal-plant.php">Iron Removal Plant</a></li>
                                    <li><a href="mineral-water-treatment-plant.php">Mineral Water Treatment Plant</a>
                                    </li>
                                    <li><a href="demineralization-plant.php">Demineralization Plant</a></li>
                                    <li><a href="hydro-pneumatic-system-pumps.php">Hydro Pneumatic System Pumps</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="news-event.php">News & Events</a></li>
                            <li><a class="menu-item" href="career.php">Careers</a></li>
                            <li><a class="menu-item" href="gallery.php">Gallery</a></li>
                            <li><a class="menu-item" href="contact.php">Contact</a></li>
                        </ul>
                    </div>

                    <div class="header-contact">
                        <span class="phone"> 
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="phone">
                            <span> +91 98435 14600</span>
                            <span> +91 99438 35148
                            </span>
                        </span>
                    </div>

                    <div class="de-flex-col d-lg-none d-block">
                        <div class="menu_side_area">
                            <div id="menu-btn"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const header = document.querySelector("header"); // Select the header
        const menuBtn = document.getElementById("menu-btn");
        const mainMenu = document.getElementById("mainmenu");
        const projectToggle = document.querySelector(".has-mega > a");

        // Toggle main navigation
        if (menuBtn) {
            menuBtn.addEventListener("click", function () {
                mainMenu.classList.toggle("open");
                header.classList.toggle("menu-open"); // Toggles the class shown in your screenshot
            });
        }

        // Toggle sub-menu (Projects) on mobile
        if (projectToggle) {
            projectToggle.addEventListener("click", function (e) {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    this.parentElement.classList.toggle("active");
                }
            });
        }

        // --- NEW RESET LOGIC ---
        window.addEventListener("resize", function () {
            if (window.innerWidth > 992) {
                // 1. Remove classes that cause mobile styling
                mainMenu.classList.remove("open");
                header.classList.remove("menu-open");

                // 2. Clear the inline height (932px) injected by the script
                header.style.height = "";

                // 3. Reset any active submenus
                document.querySelectorAll('.has-mega').forEach(item => {
                    item.classList.remove("active");
                });
            }
        });
    });
</script>