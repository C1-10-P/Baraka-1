<?php require ('partials/header.php')?>

<body>
<section class="sub-header">

<?php require ('partials/nav.php')?>
        <h1>Our Portfolio</h1>
    
    </section>

    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="images1/IMG_0201.jpg">
                <h2>
                    Our Services
                </h2>
               
                <div class="comment-box">
                    <h3>
                        Leave a Comment
                    </h3>
                    <form class="comment-form">
                        <input type="text" name="name" placeholder="Enter Name" required>
                        <input type="email" name="email" placeholder="Enter Email" required>
                        <textarea rows="5" name="comments" placeholder="Your Comments" required></textarea>
                        <button type="submit" name="submit" class="hero-btn abt-btn">Post Comment</button>
                    </form>
                </div>
            </div>
            <div class="blog-right">
                <h3>Categories</h3>
                <div>
                    <span>
                        Potraits
                    </span>
                    <span>15</span>
                </div>
                <div>
                    <span>
                        Bridal Showers
                    </span>
                    <span>28</span>
                </div>
                <div>
                    <span>
                        GIF
                    </span>
                    <span>19</span>
                </div>
                <div>
                    <span>
                        Advertisements
                    </span>
                    <span>21</span>
                </div>

                <div>
                    <span>
                        Birthday Shoots.
                    </span>
                    <span>17</span>
                </div>
                
                
                
            </div>
        </div>
    </section>
    
<?php require ('partials/footer.php')?>