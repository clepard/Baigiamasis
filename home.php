<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@800&family=Lato&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    <title>Travel Home</title>
</head>
<body>
    <section class="container">
        <header class="head-bar">
            <h1 class="logo">Travel</h1>
            
            <ul class="nav-menu">
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="destination.html">Destination</a></li>
                <li><a href="contacts.html">Conctacts</a></li>
            </ul>

            <div class="menu-button"></div>

        </header>
        
        <div data-parallax="scroll" data-image-src="photos/homecover.jpg" class="text-div">

            <div class="burger-menu">
                <ul class="drop-list">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="destination.html">Destination</a></li>
                    <li><a href="contacts.html">Conctacts</a></li>
                </ul>
            </div>

            <div class="text">
                <h2>Never stop to exploring The World</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci accusamus ab quibusdam saepe nisi vero perferendis minima culpa quod iusto repudiandae esse tenetur ex veniam sunt recusandae itaque, sit veritatis?</p>
                <a href="#">Book Now!</a>
            </div>

        </div>
        
        
        <div class="site-section">
            <div class="aft-container">
                <div class="column">
                    <div class=logo-img>
                        <img src="images/airplane.png" alt="Image of plane icon">
                    </div>
                    <div class="logo-text">
                        <h4>Air Ticketing</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores illum nemo esse eligendi. Modi explicabo natus tempore sint.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="column">
                    <div class="logo-img">
                        <img src="images/cruise.png" alt=" Image of ship icon">
                    </div>
                    <div class="logo-text">
                        <h4>Cruises</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores illum nemo esse eligendi. Modi explicabo natus tempore sint.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="column">
                    <div class="logo-img">
                        <img src="images/destination.png" alt="Image of destination icon">
                    </div>
                    <div class="logo-text">
                        <h4>Tour Packages</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores illum nemo esse eligendi. Modi explicabo natus tempore sint.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="video-container">
            <div class="video-inner">
                <div>
                    <a data-fancybox href="https://vimeo.com/241262860"><img src="/images/play.png" alt="Image of play button"></a>
                </div>
                <div>
                    <h3>Experience Our Oustanding Services</h3>
                </div>
            </div>
           
        </div>

        <footer class="site-footer">
            <div class="footer-container">
                <div class="second-container">
                    <div class="text-container">
                        <h3 class="text-color-white">About Travelers</h3>
                        <p class="text-color-grey">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe cumque reiciendis optio sequi molestiae labore sit necessitatibus obcaecati facere quia, beatae voluptate dolores veritatis quod fugit dolorem nisi rerum minima?</p>
                    </div>
                    <div class= "nav-container">
                        <div><h3 class="text-color-white">Navigations</h3></div>
                        <div class="column-nav">
                            <div class="nav-home ">
                                <a href="#">Home</a>
                                <a href="#">Destination</a>
                                <a href="#">Services</a>
                                <a href="#">About</a>
                            </div>
                            <div class="nav-home">
                                <a href="#">About Us</a>
                                <a href="#">Privacy Policy</a>
                                <a href="#">Contact Us</a>
                                <a href="#">Discounts</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="subscribe">
                            <h3 class="text-color-white">Subscribe Newsletter</h3>
                            <p class="text-color-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus accusantium eaque autem quae nisi modi ut pariatur ipsa, sunt ipsum itaque!</p>
                            <form>
                                <input type="email" name="email" placeholder=" Enter email">
                                <button>Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <ul class="footer">
                    <li><a href="#"><img loading="lazy" src="images/Facebook.png" alt="Image of facebook logo"></a></li>
                    <li><a href="#"><img loading="lazy" src="images/LinkedIn.png" alt="Image of linkedin logo"></a></li>
                    <li><a href="#"><img loading="lazy" src="images/Twitter.png" alt="Image of twitter logo"></a></li>
                    <li><a href="#"><img loading="lazy" src="images/YouTube.png" alt="Image of youtube logo"></a></li>
                    <li><a href="#"><img loading="lazy" src="images/Instagram.png" alt="Image of instagram logo"></a></li>
                </ul>
                <p class="text-color-grey">Copyright &copy; 2021 All rights reserved | This is made with &hearts; from V.Pavlovas</p>
            </div>
        </footer>
    </section>
    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="js/parallax.min.js"></script>

    <script >
        const menuToggle = document.querySelector('.menu-button')
        const container = document.querySelector('.burger-menu')

        menuToggle.addEventListener('click',()=>{
            menuToggle.classList.toggle('active')
            container.classList.toggle('active')
        })

    </script>
</body>
</html>