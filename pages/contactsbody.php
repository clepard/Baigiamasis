<div class="container">

        <?php include("includes/navigation.php");?>
        
        <div class="photo-container" data-parallax="scroll" data-image-src="photos/contacts.jpg">

            <div class="burger-menu">
                <ul class="drop-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="destination.php">Destination</a></li>
                    <li><a href="contacts.php">Conctacts</a></li>
                </ul>
            </div>

            <div>
                <div class = "text-container">
                    <div class = "main-text">
                        <h1>Get in touch</h1>
                    </div>
                    <div class = "below-text">
                        <a href="#">Home</a>
                        <p>&middot</p>
                        <p>contact</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="site-contact-section">
            <div class="div-container">
                <div class="row-container">

                    <div class="box-column">
                        <div><img src="images/location.png" alt="address icon"></div>
                        <div><h3>Address</h3></div>
                        <div><p>201 Fake St.Zalia Giria, Klaipeda, Lietuva</p></div>
                    </div>
                    <div class="box-column">
                        <div><img src="images/call.png" alt="address icon"></div>
                        <div><h3>Contact Number</h3></div>
                        <div><a href="tel:+3706111111">+3706111111</a></div>
                    </div>
                    <div class="box-column">
                        <div><img src="images/send.png" alt="address icon"></div>
                        <div><h3>Email Address</h3></div>
                        <div><p>youremail@domain.com</p></div>
                    </div>
                    <div class="box-column">
                        <div><img src="images/internet.png" alt="address icon"></div>
                        <div><h3>Website</h3></div>
                        <div><a href="#">yoursite.com</a></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-contact-section">
            <div class="div-container">
                <div class="row-container">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.0991519530453!2d21.150619826727812!3d55.687263901931146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e4dc6e3a34f1cb%3A0xbcd9c0e9224d86d6!2s%C5%A0vyturio%20Arena!5e0!3m2!1sen!2slt!4v1618005680867!5m2!1sen!2slt" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="form-container">
                        <form class="p-form" method="post">
                            <div class="row">
                                <div class="first-name column">
                                    <label class="txt-black" for="fname">First Name</label>
                                    <input type="text" name="name" id="fname" placeholder="e.g. Wiliam" class="form-control" required>
                                </div>
                                <div class="last-name column">
                                    <label class="txt-black" for="lname">Last Name</label>
                                    <input type="text" name="surname" id="lname" placeholder="e.g. Johnson" class="form-control" required>
                                </div>
                            </div>
                            <div class="column">
                                <label class="txt-black" for="email">Email</label>
                                <input type="text" name="email" id="email" placeholder="e.g. youremail@domain.com" class="form-control" required>
                            </div>
                            <div class="column">
                                <label class="txt-black" for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" placeholder="e.g. About Travel" class="form-control" required>
                            </div>
                            <div class="column msgn-column">
                                <label class="txt-black" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="write your notes and questions here..." required></textarea>
                            </div>
                            <div class="send-message-btn column">
                                <div class="btn-align"><button type="submit" name="submit" value="Send Message" class="btn btn-primary">Send Message</button></div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include("includes/footer.php");?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/togglebutton.js"></script>
    