<?php session_start(); include 'site_settings.php'; ?><!doctype html>
<?php include 'html_config.php'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Us:<?php echo $title; ?></title>
    <?php include 'head.php'; ?>
    <style type="text/css">
        .pola{padding: 5px;background-color: #f5f5f5;transition: all .3s ease-in-out 0s;}
        .pola:hover{padding: 5px;background-color: #03b8a9;transition: all .3s ease-in-out 0s;filter: grayscale(1);}
        .so{background-color: #fff;padding: 10px;box-shadow: 0px 10px 10px rgba(0,0,0,.1);transition: all .3s ease-in-out 0s;margin-bottom: 10px;}
        .so:hover{background-color: #ddd;padding: 10px;box-shadow: 0px 10px 10px rgba(0,0,0,.1);transition: all .3s ease-in-out 0s;}
          

.layed {
    position: absolute;
    bottom: 0;
}
.big-grid-overlay.layed {
    padding: 10px;
    position: absolute;
    bottom: 0px;
    width: 100%;
    z-index: 1;
    color: white;
}

.big-grid-1.clearfix {
    position: relative;
}

.at-featuresarea:before{
    background: transparent;
}

.at-sectiontitleborder:before{background-color: #444;}

.col-md-6.relative a::before {
    content: " ";
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 1;
    background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.7) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(40%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.7)));
    background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.7) 100%);
    background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.7) 100%);
    background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.7) 100%);
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.7) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#b3000000', GradientType=0);
}

.grid-inner {
    overflow: hidden !important;
    display: block;
    position: relative;
}

.grid-inner img{
    -webkit-transition: opacity 1s, -webkit-transform 1s;
    transition: opacity 1s, transform 1s;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    max-width: none;
    width: 100%;
}

.col-md-6.relative a:hover img{
     opacity: 0.9;
    -webkit-transform: scale3d(1.1,1.1,1);
    transform: scale3d(1.1,1.1,1);
}

.col-xs-12.small-grid-group {
    padding: 0px;
}


.col-md-6.relative.medium-grid, .col-md-6.relative.big-grid {
    padding: 0px;
} 

.big-grid-overlay h3 , .grid-2-category, .posts-category{
    font-family: Rubik;
    font-weight: 300;
    text-transform: capitalize;
    color: #fff;
}

.grid-post-meta{
    font-family: Rubik;
}

.grid-2-category, .posts-category {
    background: #2c67f4;
    border: 0px;
    border-radius: 3px;
    text-transform: uppercase;
    font-size: 10px;
    padding: 1px 4px;
}
.posts-category {
    position: absolute;
    left: 30px;
    z-index: 9999;
    top: 30px;
}

.col-xs-12.medium-grid {
    padding-top: 10px;
}
.col-xs-12.medium-grid {
    padding: 10px 0px 0px 0px;
}

.col-xs-12.small-grid-group {
    padding: 10px 0px 0px 0px;
}

.col-xs-6.relative.small-grid {
    padding: 0px;
}
.col-xs-12.medium-grid h3{
    font-size: 13px;
}

.col-xs-6.relative.small-grid h3 {
    font-size: 10px;
}

.col-xs-6.relative.small-grid.mobile-padded {
    padding: 0px 5px 0px 0px;
}
.col-xs-6.relative.small-grid.mobile-padded:last-of-type {
    padding-right: 3px !important;
}

/*Media Queries */


@media only screen and (min-width: 768px){
    .big-grid-overlay.layed{
        padding: 20px;
    }
    .big-grid-overlay.layed {
    padding: 50px 60px;
    }
    .col-xs-6.relative.small-grid h3 {
    font-size: 20px;
    }
    .col-xs-12.medium-grid h3 {
    font-size: 24px;
    }
}

@media only screen and (min-width: 1000px){
    .col-xs-12.medium-grid  {
    padding: 0px 0px 5px 5px;
    }
    .col-xs-12.small-grid-group{
    padding: 0px 0px 0px 5px; 
    }
    .col-xs-12.small-grid-group img {
    height: 200px;
    }
    .col-xs-12.medium-grid img {
    height: 205px;
    }
    .big-grid-overlay.layed {
    padding: 30px 30px;
    }
    .col-xs-6.relative.small-grid.mobile-padded:last-of-type {
    padding-right: 0px !important;
    }
    .col-md-6.relative.big-grid img {
    height: 410px;
    }
}
    .at-sectiontitleborder:before{
        background-color: #fff;
    }
    .owl-theme .owl-nav , .at-slidernav [class*='at-'] {
        color: #fff;
    }
    </style>
</head>
<body class="at-home at-homeone">
    <?php include 'outdated_browser.php'; ?>
    <div id="at-wrapper" class="at-wrapper at-haslayout">
        <?php include 'header2.php'; ?>
             
       <div class="at-innerbanner">
            <div class="at-innerbannerbox">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="at-innerbannercontent">
                                <div class="at-pagetitle">
                                    <h1>About us</h1>
                                </div>
                                <ol class="at-breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="at-active"><span>about us</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main id="at-main" class="at-main at-haslayout at-pagespace">
            <div class="container">
                <div class="row">
                    <div class="at-content">
                        <div class="at-aboutus">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <section id="at-companyoverview" class="at-companyoverview at-aboutsection" style="padding-top: 0px;">
                                    <div class="col-lg-8 pull-left">
                                    <div class="at-sectiontitleborder">
                                        <h2>company overview</h2>
                                    </div>
                                    <div class="at-description">
                                        <p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <p>Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</p>
                                        <ul class="at-liststyle at-liststylearrowright">
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Phasellus non felis malesuada, faucibus dui eget, sodales nibh.</li>
                                            <li>Duis non ipsum id mauris tristique sagittis.</li>
                                            <li>Duis malesuada ante eget blandit laoreet.</li>
                                            <li>Nulla quis nibh a diam pretium pretium.</li>
                                        </ul>
                                    </div>
                                        
                                    </div>
                                    <div class="col-lg-4" style="padding: 10px;">
                                        <img src="images/img-02.jpg">
                                    </div>
                                </section>
                              <?php include("feature.php");?>
                                <section id="at-clientfeedback" class="at-clientfeedback at-aboutsection">
                                    <div class="at-sectionhead">
                                        <div class="at-sectiontitleborder">
                                            <h2>Client Testimonials</h2>
                                        </div>
                                        <div class="at-description">
                                            <p>ipsum dolor sit amet, consectetur adipiscing elit. In accumsan dui ac efficitur pretium. Pellentesque odio eros, pharetra in mauris a, egestas efficitur nibh.</p>
                                        </div>
                                    </div>
                                    <div id="at-testimonialslider" class="at-testimonialslider at-testimonials owl-carousel">
                                        <div class="item">
                                            <div class="at-testimonial">
                                                <figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/testimonials/img-01.jpg" alt="image description"></a></figure>
                                                <div class="clearfix"></div>
                                                <span class="at-stars"><span></span></span>
                                                <blockquote>
                                                    <q>Don't cry because it's over, smile because it happened.</q>
                                                </blockquote>
                                                <h3>Jackie Adams</h3>
                                                <h4>(Sales Agent)</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="at-testimonial">
                                                <figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/testimonials/img-02.jpg" alt="image description"></a></figure>
                                                <div class="clearfix"></div>
                                                <span class="at-stars"><span></span></span>
                                                <blockquote>
                                                    <q>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod sweetest.</q>
                                                </blockquote>
                                                <h3>Jackie Adams</h3>
                                                <h4>(Sales Agent)</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="at-testimonial">
                                                <figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/testimonials/img-01.jpg" alt="image description"></a></figure>
                                                <div class="clearfix"></div>
                                                <span class="at-stars"><span></span></span>
                                                <blockquote>
                                                    <q>Don't cry because it's over, smile because it happened.</q>
                                                </blockquote>
                                                <h3>Jackie Adams</h3>
                                                <h4>(Sales Agent)</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="at-testimonial">
                                                <figure class="at-featureimg"><a href="javascript:void(0);"><img src="images/testimonials/img-02.jpg" alt="image description"></a></figure>
                                                <div class="clearfix"></div>
                                                <span class="at-stars"><span></span></span>
                                                <blockquote>
                                                    <q>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod sweetest.</q>
                                                </blockquote>
                                                <h3>Jackie Adams</h3>
                                                <h4>(Sales Agent)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="at-counter"></div>
                                </section>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include 'footer.php'; ?>
    </div>
       <?php include 'script.php'; ?>
</body>
</html>