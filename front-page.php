/*
Template Name: Home
*/
<?php get_header("home"); ?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img id="profile-photo" src="<?php echo get_template_directory_uri () . '/assets/images/retouch.JPG' ?>" alt="Headshot">
                <div class="intro-text">
                    <span class="name">Megan O'Neill</span>
                    <hr class="star-light">
                    <span class="skills">Software Engineer - Freelancer - New Yorker</span>
                </div>
            </div>
        </div>
    </div>
</header>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Hi, my name is Megan and I'm a Software Engineer in NYC. I work with Ruby on Rails, Wordpress, and Android. I love writing blog posts about what I've learned in my coding adventures, and hope they can help you!</p>
                </div>
                <div class="col-lg-4">
                    <p>When I'm not coding you can find me exploring the newest bars in the city, taking a hike, or going on a weekend adventure. Are you in need of a freelancer for your project? Let's talk!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Hire Me!</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <div class="row">
                            <div class="col-lg-12 ">
                                <p>Do you need help setting up a website, building a website, or any other tech work? I'd love to work on your project! Shoot me an email with your project details and let's talk!</p>
                            </div>
                        </div>
                        <div class="row email-row">
                            <div class="form-group col-xs-12">
                                <a href="mailto:meganoneill38@gmail.com"><button type="submit" class="btn btn-success btn-lg" href="mailto:megan.oneill38@gmail.com">Email Me</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
