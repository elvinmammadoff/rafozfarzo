<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title -->
  <title>Documentation - Rafoz Farzo</title>

  <!-- All Styles -->
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/prism.css">
  <link rel="stylesheet" href="css/main.css">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700|Raleway:300i,400,600,700" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="256x256"  href="favicon/android-chrome-512x512.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-chrome-192x192.png">    
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
  <link rel="icon" type="image/png" href="favicon/favicon.ico" />
  <link rel="manifest" href="favicon/site.webmanifest" />
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#990100" />
  <meta name="theme-color" content="#ffffff" />   

</head>
    <body>

        <header id="site-header">
            
            <div class="row">

              <div class="large-10 large-centered columns header-content">

                  <div class="name">
                      <h3>Rafoz Farzo</h3>
                      <p>Premium HTML Template Documentation</p>
                  </div>

                  <ul class="meta">
                    <li><strong>Author:</strong> <a href="https://themeforest.net/user/alissio" target="_blank" title="Alissio">Alissio</a></li>
                    <li><strong>Live Preview:</strong> <a href="https://rafoz-farzo.herokuapp.com/" target="_blank" title="View Demo">View Demo</a></li>
                    <li><strong>Support:</strong> <a href="mailto:elvinmammadoff@gmail.com" title="Ask a Question">Ask a Question</a></li> 
                  </ul>

                  <p>Thank you for purchasing my theme. <br /> If you have any questions that are beyond the scope of this help file, <br /> please feel free to email <a href="mailto:designer.rafiq@gmail.com">here</a>.<br /> Thanks so much!</p>

              </div>


            </div>

        </header>

        <section id="site-body">

            <div id="container" class="row">

                <div id="sidebar" class="large-4 large-push-8 columns" data-magellan-expedition="fixed">

                    <div class="sticky">

                      <h3>Table of Contents</h3>
                      <ol>
                          <li data-magellan-arrival="getting-started"><a href="#getting-started">Getting Started</a></li>
                          <li data-magellan-arrival="html-structure"><a href="#html-structure">HTML Structure</a></li>
                          <li data-magellan-arrival="stylesheet-files"><a href="#stylesheet-files">Stylesheet Files</a></li>
                          <li data-magellan-arrival="javascript-files"><a href="#javascript-files">Javascript Files</a></li>
                          <li data-magellan-arrival="support-desk"><a href="#support-desk">Support Desk</a></li>
                          <li data-magellan-arrival="files-resources"><a href="#files-resources">Files & Resources</a></li>
                          <li data-magellan-arrival="php-file"><a href="#php-file">PHP Code Explanation</a></li>
                          <li data-magellan-arrival="google-map"><a href="#google-map">Google Map Api</a></li>
                          <li data-magellan-arrival="updates"><a href="#updates">Regular Updates</a></li>
                      </ol>

                    </div>

                </div>

                <div id="main-content" class="large-8 large-pull-4 columns">

                    <a name="introduction"></a>
                    <section id="introduction" class="section" data-magellan-destination="introduction">
                          
                          <h1 class="title"><span>Howdy!</span></h1>
                          <p class="lead">You are a shining owner of a regular license based on Rafoz Farzo Theme</p>
                          <p>First of all, Thank you so much for purchasing this template and for being my loyal customer. You are entitled to get free updates to this product + exceptional support (as per market policy) from the author directly.</p>
                          <p>This documentation is to help you undesrstand the template's structure. Please go through the documentation carefully to understand how this template is made and how to edit this properly. Basic HTML and CSS knowledge is required to customize this template.</p>

                    </section>

                    <a name="getting-started"></a>
                    <section id="getting-started" class="section" data-magellan-destination="getting-started">
                          
                          <h1 class="title"><span>1.</span> Getting Started</h1>

                          <br>

                          <p>When you are ready to use this template, you must first upload the template files to a local or remote server. In this regard,  unzip the template package you have downloaded from themeforest. In extracted folder you can see following folders:<p>

                          <h3>Package contents</h3>

                          <ul>
                            <li><strong>Template</strong> — Contains all the original template files comprises of HTML, CSS, SCSS, JS etc. This is the folder which you'll upload on your server after necessary modifications.</li>

                            <li><strong>Documentation</strong> — Inside this folder you will find this same documentation updated with the last changes.</li>
                            
                          </ul>

                          <p>Details regarding contents and structure of <code>template</code> folder is given below.</p>

                    </section>

                    <a name="html-structure"></a>
                    <section id="html-structure" class="section"  data-magellan-destination="html-structure">
                          
                      <h1 class="title"><span>2.</span> HTML Structure</h1>

                      <br>

                      <p>This is the index page html structure of responsive template. The general <code>template</code> structure is the same throughout the template. Here is the general structure. Note that for brevity, I'm not including content that isn’t relevant to the technique.</p>

<pre data-language="HTML Skeleton">
<code class="language-markup">

<!-- =========================
    Pre-loader 
============================== -->

<!-- Start .loading -->
<div id="loading"></div><!-- End /.loading -->

<!-- =========================
    Icons 
============================== -->
<svg aria-hidden="true"></svg>

<!-- =========================
1. Section - Header 
============================== -->

<!-- Start .Header -->
<header class="Header sticky-header"></header><!-- End /.Header-->

<main>
  <article>

    <!-- =========================
        2. Section - Slider 
    ============================== --> 

    <!-- Start .Slider -->
    <section class="Slider"></section><!-- End /.Slider -->

  </article>
</main>

<!-- =========================
    Mobile - Burger Right Menu  
============================== -->

<!-- Start .burger-menu -->
<nav class="cd-nav-container burger-menu burger-menu--right" id="cd-nav"></nav><!-- End /.burger-menu -->

<!-- Start .cd-overlay --> 
<div class="cd-overlay"></div><!-- End /.cd-overlay --> 

<!-- Start .scroll-up -->
<div class="scroll-up"></div><!-- End /.scroll-up -->

<!-- =========================
  3. Section - Footer 
============================== --> 

<!-- Start .Footer -->
<footer class="Footer"></footer><!-- End /.Footer -->

</code>
</pre>
                    <a name="stylesheet-files"></a>
                    <section id="stylesheet-files" class="section" data-magellan-destination="stylesheet-files">
                          
                          <h1 class="title"><span>3.</span> Stylesheet Files</h1>

                          <br>

                          <p>All styling realted files of this template can be found in the folder named <code>css</code> and <code>scss</code>.</p>

<pre data-language="Folder Map">
  <code class="language-markup">
    css/
    |
    |-- main.min.css
    
    scss/
    |
    |-- main.scss
    |-- _fonts.scss
    |-- _media.scss
    |-- _vars.scss
    |-- _vars.scss
    |-- library/_library-dir.scss
    |-- library/_bootstrap.scss
    |-- library/_bourbon.scss
    |-- library/_lightgallery.scss
    |-- library/_owl.carousel.scss
    |-- base/
    |-- helpers/
    |-- layouts/
    |-- components/
  </code>
</pre>

                          <br>
                          <p>
                           As it can be seen, in css folder there is a <code>main.min.css</code> file.<br /> 
                           Scss files in scss folder have been divided into components. <br />
                           Also scss files of plugins are added into library folder<br />
                           In <code>library</code> folder there are: <br />
                          <code>Bootstrap 4</code> is an open source toolkit for developing with HTML, CSS, SCSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system<br />
                          <code>Bourbon</code> is a library of Sass mixins and functions that are designed to make you a more efficient style sheet author.<br />
                          <code>Light gallary</code> A customizable, modular, responsive, lightbox gallery plugin for jQuery. <br /> 
                          <code>Owl Carousel 2</code> Touch enabled jQuery plugin that lets you create a beautiful, responsive carousel slider. <br />                    


                    </section>

                    <a name="javascript-files"></a>
                    <section id="javascript-files" class="section" data-magellan-destination="javascript-files">
                          
                          <h1 class="title"><span>4.</span> Javascript Files</h1>

                          <br>

                          <p>All client-side related javascript files can be found in the <code>js</code> folder.</p>

<pre data-language="Folder Map">
  <code class="language-markup">
    js/
    |    
    |-- scripts.min.js
    |-- burger-menu.min.js
    |-- initGmap.js
    |-- common.js
  </code>
</pre> 
                         
                          <br>
                          <p>
                          In this folder there are 4 files. <br /> 
                          All main script files contained in <code>scripts.min.js</code><br />
                          <code>Jquery</code> is a fast, small, and feature-rich JavaScript library<br />
                          <code>Bootstrap</code> is an open source toolkit for developing with HTML, CSS, SCSS and JS. Quickly prototype your ideas or build your entire app with responsive grid system<br />
                          <code>Isotope Layout</code> can position items with different layout modes. Set and change the layout mode with the layoutMode option.<br />
                          <code>Owl Carousel</code> touch enabled jQuery plugin that lets you create a beautiful, responsive carousel slider.<br />
                          <code>Images Loaded</code> detect when images have been loaded. JavaScript is all like "You images done yet or what?"<br />
                          <code>Burger Menu</code> an off-canvas sidebar component with a collection of animations and styles using CSS transitions.<br />
                          <code>Common</code> contains all the custom programmed javascript coded specifically for this template<br /> 
                        </p>

                    </section>

                    <a name="support-desk"></a>
                    <section id="support-desk" class="section" data-magellan-destination="support-desk">
                          
                          <h1 class="title"><span>5.</span> Support Desk</h1>

                          <br>

                          <p>Please remember you have purchased a very affordable theme and you have not paid for a full-time web design agency. Occasionally we will help with small tweaks, but these requests will be put on a lower priority due to their nature.</p>
                      

                          <section class="sub-section">
                                
                                <h2>Support for my items includes:</h2>

                                <br>

                                <ul>
                                  <li>Responding to questions or problems regarding the item and its features</li>
                                  <li>Fixing bugs and reported issues</li>        
                                  <li>Providing updates to ensure compatibility with new software versions</li>
                                </ul>   

                          </section>

                          <section class="sub-section">
                                
                                <h2>Item support does not include:</h2>

                                <br>

                                <ul>
                                  <li>Customization and installation services</li>
                                  <li>Support for third party software and plug-ins</li>
                                </ul>   

                          </section>

                          <section class="sub-section">
                                
                                <h2>Before seeking support, please...</h2>

                                <br>

                                <ul>
                                  <li>Make sure your question is a valid item Issue and not a customization request.</li>
                                  <li>Make sure you have read through the documentation and any related video guides before asking support on how to accomplish a task.</li>
                                  <li>Make sure to double check the item FAQs.</li>
                                  <li>If you have customized your item and now have an issue, back-track to make sure you didn't make a mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
                                  <li>Almost 80% of the time we find that the solution to people's issues can be solved with a simple "Google Search". You might want to try that before seeking support. You might be able to fix the issue yourself much quicker than we can respond to your request.</li>
                                  <li>Make sure to state the name of the item you are having issues with when requesting support via ThemeForest.</li>
                                </ul>

                          </section>   


                    </section>                    

                    <a name="files-resources"></a>
                    <section id="files-resources" class="section" data-magellan-destination="files-resources">
                          
                          <h1 class="title"><span>6.</span>  Files &amp; Resources</h1>

                          <br>

                          <p>The template uses following resources by third parties.<p>


                          <ul>
                            <li><a href="https://jquery.com/" target="_blank">jQuery</a></li>
                            <li><a href="https://getbootstrap.com/" target="_blank">Bootstrap 4</a></li>
                            <li><a href="https://isotope.metafizzy.co/layout-modes.html" target="_blank">Isotope Layout</a></li>
                            <li><a href="https://owlcarousel2.github.io/OwlCarousel2/" target="_blank">Owl Carousel 2</a></li>
                            <li><a href="https://imagesloaded.desandro.com/" target="_blank">Images Loaded</a></li>
                            <li><a href="http://sachinchoolur.github.io/lightGallery/" target="_blank">Light Gallery</a></li>
                            <li> <strong>Fonts used</strong>
                              <ul>
                                <li><a href="https://fonts.google.com/specimen/Montserrat" target="_blank">Montserrat</a></li>
                              </ul>
                            </li>
                          </ul>

                    </section>

                    <a name="php-file"></a>
                    <section id="php-file" class="section" data-magellan-destination="php-file">
                          
                          <h1 class="title"><span>7.</span> PHP Code Explanation</h1>

                          <br>

                          <p><code>index.php</code> file for deploy and init on docker container or heroku<p>

                    </section>

                    <a name="google-map"></a>
                    <section id="google-map" class="section" data-magellan-destination="google-map">
                          
                          <h1 class="title"><span>8.</span> Google Map Api</h1>

                          <br>

                          <p>I've used Google Map Api for generate Google Map. You ease change map style or marker from guidelines <a href="https://developers.google.com/maps/documentation/javascript/adding-a-google-map" target="_blank">Google Map</a><p>

                    </section>

                    <a name="updates"></a>
                    <section id="updates" class="section" data-magellan-destination="updates">
                          
                          <h1 class="title"><span>9.</span> Regular Updates</h1>

                          <br>

                          <p>We’re always improving our skills and knowledge so we’re making changes regularly. From bug fixes to new awesome features, updates generally come at least twice a month.<p>                      

                    </section>

                    <footer>
                      <p>© Rafoz Farzo Photography HTML Template</p>
                    </footer>

                </div>

            </div>
   
        </section>
        
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/foundation.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
