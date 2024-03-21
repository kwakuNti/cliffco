<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="../public/css/destination.css" />
    <title>Destinations</title>
</head>

<body>
    <nav>
        <div class="nav__logo"><a href="../templates/dashboard.php">Back To Main</a></div>
        <ul class="nav__links">
            <input type="text" id="searchInput" placeholder="Search destinations" />
        </ul>
    </nav>
    <header style="background-image: url('../assets/images/header-background.jpg');">
        <div class="section__container">
            <div class="header__content">
                <h1>Ready?</h1>
            </div>
        </div>
    </header>

    <section class="journey__container">
        <div class="section__container">
            <h2 class="section__title">Start Your Journey</h2>
            <p class="section__subtitle">The most searched countries</p>
            <div class="journey__grid">
                <div class="country__card">
                    <img src="../assets/images/country-1.jpg" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Santorini, Greece</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="../assets/images/country-2.jpg" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Vernazza, Italy</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="../assets/images/country-3.jpg" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>San Francisco</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="../assets/images/country-4.jpg" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>navagio, Greece</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="../assets/images/country-5.jpg" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Ao Nang, Thailand</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="../assets/images/country-6.jpg" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Phi Phi Island, Thailand</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="display__container">
        <div class="section__container">
            <h2 class="section__title">Why Choose Us</h2>
            <p class="section__subtitle">
                The gladdest moment in human life, is a departure into unknown lands.
            </p>
            <div class="display__grid">
                <div class="display__card grid-1">
                    <img src="../assets/images/grid-1.jpg" alt="grid" />
                </div>
                <div class="display__card">
                    <i class="ri-earth-line"></i>
                    <h4>Passionate Travel</h4>
                    <p>Fuel your passion for adventure and discover new horizons</p>
                </div>
                <div class="display__card">
                    <img src="../assets/images/grid-2.jpg" alt="grid" />
                </div>
                <div class="display__card">
                    <img src="../assets/images/grid-3.jpg" alt="grid" />
                </div>
                <div class="display__card">
                    <i class="ri-road-map-line"></i>
                    <h4>Beautiful Places</h4>
                    <p>Uncover the world's most breathtakingly beautiful places</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="section__container">
            <h4>Travel.co</h4>
            <div class="social__icons">
                <span><i class="ri-facebook-fill"></i></span>
                <span><i class="ri-twitter-fill"></i></span>
                <span><i class="ri-instagram-line"></i></span>
                <span><i class="ri-linkedin-fill"></i></span>
            </div>
            <p>
                Travel makes one modest. You see what a tiny place you occupy in the
                world.
            </p>
        </div>
    </footer>
    <script src="../public/js/destination.js"></script>
</body>

</html>