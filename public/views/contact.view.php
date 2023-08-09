<?php require ('partials/header.php')?>

<body>
<section class="sub-header">
<?php require ('partials/nav.php')?>


<h1>Get In Touch</h1>
        </section>

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255298.24592572654!2d36.94439080902564!3d-1.135304107506446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4616a21d035d%3A0xd46c6efa3589f45f!2sJuja!5e0!3m2!1sen!2ske!4v1686179303228!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-house"></i>
                    <span>
                        <h5>
                             Arkham Asylum
                        </h5>
                        <p>Fortress of Solitude</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>
                            +254768978757
                        </h5>
                        <p>Business Hours, 9-5, DAILY.</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5>
                          fadhilisam23@gmail.com
                        </h5>
                        <p>Email Us</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="form_handler.php" method="post">
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                    <input type="email" name="email" placeholder="Enter Email Address" required>
                    <input type="text" name="subject" placeholder="Enter Your Subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name="submit" class="hero-btn abt-btn">Submit Message</button>
                </form>
            </div>
        </div> 
    </section>

<?php require ('partials/footer.php')?>