<!DOCTYPE html>
<html lang="en">

<head>
    <!-- COMMON-HEAD -->
    <?php include "../common-php/head.html"; ?>
    <!-- /COMMON-HEAD -->

    <!-- CANONICAL -->
    <!-- <link rel="canonical" href="https://www.saxonara.com/en/index.php"> -->

    <!-- COMMON-LOCALIZATION -->
    <!-- <?php include "../common-php/localization/main.html"; ?> -->
    <!-- /COMMON-LOCALIZATION -->

    <!-- SITE INFORMATION -->
    <title>{title}</title>
    <meta name="description" content="{description}">
    <meta name="keywords" content="{tags}">

    <!-- COMMON-OPENGRAPH -->
    <?php include "../common-php/opengraph/en.html"; ?>
    <!-- /COMMON-OPENGRAPH -->

</head>

<body class="page">

    <!-- COMMON-BODY -->
    <?php include "../common-php/body.html"; ?>
    <!-- /COMMON-BODY -->

    <header id="top" class="top-header">
        <!-- COMMON-NAVIGATION-EN -->
        <?php include "../common-php/navigation/en.html"; ?>
        <!-- COMMON-NAVIGATION-EN END -->
    </header>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container text-center">
            <h1 class="page-title">{title}</h1>
            <p class="page-subtitle"><span class="banner-highlight">{description}</span></p>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="main-wrap">

        <div class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="blog-single">

                        <!-- ARTICLE CONTENT -->
                        <article class="post">
                            <div class="post-thumb">
                                <img class="img-responsive" src="{heroImage}" alt="...">
                            </div>
                            <div class="post-content">
                                <div class="post-metas">
                                    <a class="author-meta post-meta" href="#">{author}</a>
                                    <p class="post-date post-meta">{pubDate}</p>
                                </div>
                                <div class="post-entry">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                                    <p>Mvoluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.</p>
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit Mvoluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
                                </div>
                            </div>
                        </article>
                        <!-- /ARTICLE CONTENT -->

                        <!-- ABOUT THE AUTHOR -->
                        <div class="author-box">
                            <div class="author-thumb"><img class="img-responsive" src="../images/blog/author.jpg" alt="..."></div>
                            <div class="author-about">
                                <h4 class="author-name">{author}</h4>
                                <p class="author-bio">Arnald SAXONARA is a <strong>professional saxophonist</strong> specialized in <strong>weddings and luxury events</strong> across Europe. With a unique style that blends <strong>live saxophone with DJ sets</strong>, he performs at ceremonies, cocktail hours, private parties, and <b>iconic venues from Ibiza to Paris</b>. Known for his energy, elegance and musical versatility, he brings unforgettable live experiences to every celebration. Based in Barcelona and available for <strong>destination events worldwide</strong>.</p>
                                <a class="author-post-link" href="#">View all Posts <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- /ABOUT THE AUTHOR -->

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <?php include "../common-php/footer/en.html"; ?>
    <!-- /FOOTER -->

    <!-- COMMON-BODY-SCRIPT -->
    <?php include "../common-php/body-script.html"; ?>
    <!-- /COMMON-BODY-SCRIPT -->
</body>

</html>
