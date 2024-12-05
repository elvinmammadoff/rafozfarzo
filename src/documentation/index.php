<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Documentation - Rafoz Farzo</title>

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

        <div class="large-10 large-centered columns">

            <div class="name">
                <h3>Rafoz Farzo</h3>
                <p>Premium HTML Template Documentation</p>
            </div>

            <ul class="meta">
                <li><strong>Author:</strong> <a href="https://themeforest.net/user/alissio" target="_blank">Alissio</a></li>
                <li><strong>Live Preview:</strong> <a href="https://meek-pegasus-08eed8.netlify.app/">View Demo</a></li>
                <li><strong>Support:</strong> <a href="mailto:elvinmammadoff@gmail.com">Ask a Question</a></li>
            </ul>

            <p>Thank you for purchasing my theme. <br> If you have any questions that are beyond the scope of this help file, <br> please feel free to email <a href="mailto:designer.rafiq@gmail.com">here</a><br> Thanks so much!</p>

        </div>


    </div>

</header>

<section id="site-body">

    <div id="container" class="row">

        <div id="sidebar" class="large-3 large-push-9 columns" data-magellan-expedition="fixed">

            <div class="sticky">

                <h3>Table of Contents</h3>
                <ol>
                    <li data-magellan-arrival="getting-started"><a href="#getting-started">Getting Started</a></li>
                    <li data-magellan-arrival="html-structure"><a href="#html-structure">HTML Structure</a></li>
                    <ul>
                        <li data-magellan-arrival="skeleton-details"><a href="#skeleton-details">Skeleton Details</a></li>
                    </ul>
                    <li data-magellan-arrival="stylesheet-files"><a href="#stylesheet-files">Stylesheet Files</a></li>
                    <li data-magellan-arrival="javascript-files"><a href="#javascript-files">Javascript Files</a></li>
                    <li data-magellan-arrival="support-desk"><a href="#support-desk">Support Desk</a></li>
                    <li data-magellan-arrival="files-resources"><a href="#files-resources">Files & Resources</a></li>
                    <li data-magellan-arrival="files-resources"><a href="#php-file">PHP Code Explanation</a></li>
                    <li data-magellan-arrival="files-resources"><a href="#yandex-map">Yandex Map Api</a></li>
                    <li data-magellan-arrival="files-resources"><a href="#updates">Regular Updates</a></li>
                </ol>

            </div>

        </div>

        <div id="main-content" class="large-9 large-pull-3 columns">

            <section id="introduction" class="section" data-magellan-destination="introduction">

                <h1>Howdy!</h1>
                <p class="lead">You are a shining owner of a regular license based on Rafoz Farzo Theme</p>
                <p>First of all, Thank you so much for purchasing this template and for being my loyal customer. You are entitled to get free updates to this product + exceptional support (as per market policy) from the author directly.</p>
                <p>This documentation is to help you understand the template's structure. Please go through the documentation carefully to understand how this template is made and how to edit this properly. Basic HTML and CSS knowledge is required to customize this template.</p>

            </section>

            <section id="getting-started" class="section" data-magellan-destination="getting-started">

                <h1>1. Getting Started</h1>

                <br>

                <p>When you are ready to use this template, you must first upload the template files to a local or remote server. In this regard,  unzip the template package you have downloaded from themeforest. In extracted folder you can see following folders:<p>

                <h3>Package contents:</h3>

                <ul>
                    <li><strong>Template</strong> — Contains all the original template files comprises of HTML, CSS, JS etc. This is the folder which you'll upload on your server after necessary modifications.</li>

                    <li><strong>Documentation</strong> — Inside this folder, you will find the same documentation updated with the latest changes.</li>

                </ul>

                <p>Details regarding contents and structure of <code>template</code> folder is given below.</p>

            </section>

            <section id="html-structure" class="section"  data-magellan-destination="html-structure">

                <h1>2. HTML Structure</h1>

                <br>

                <p>This theme is a responsive landing page which built with Bootstrap fraemwork and you can customize it very easily. All of the information within the main
                    content area is nested within a div with an class of "sections". The general
                    <code>template</code> structure is the same throughout the template. Here is the general
                    structure. Note that for brevity, I am not including content that isn’t relevant to the
                    technique.</p>

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

</section>


            <section id="skeleton-details" class="sub-section"  data-magellan-destination="skeleton-details">

                <h2>2.1. Skeleton Details</h2>

                <br>

                <p>From the above skeleton it can be seen that there are 7 major logical code blocks in page. Most of the contents displayed on the screen goes in one of this block.</p>

                <p><code>div id="loading"</code> shows a loading overlay on the whole page or over single DOM elements</p>

                <p><code>header class="Header sticky-header"</code> section contains the code for logo and primary navigation at top.</p>

                <p><code>section class="Slider"</code>section contains the code for main slider.</p>

                <p><code>footer class="Footer"</code> contains the code for social icons and copyright text note.</p>

                <p>Further, skeleton shows two additional markup tags.<code>div id="cd-nav"</code> contains the menu for the mobile version. <code>div class="cd-overlay"</code> when mobile menu showed this layer visibled under mobile menu above content too.</p>

            </section>
            <section id="stylesheet-files" class="section" data-magellan-destination="stylesheet-files">

                <h1>3. Stylesheet Files</h1>

                <br>

                <p>All styling related files of this template can be found in this folder path <code>src/assets/css</code> and <code>src/assets/scss</code></p>

<pre data-language="Folder Map">
  <code class="language-markup">
    css/
    |
    |-- main.min.css
  </code>
</pre>

                <br>
                <p>
                    As it can be seen, in css folder there is a <code>main.min.css</code> file.<br />
                    All main css files contained in <code>main.min.css</code><br />
                    <code>Bootstrap 4</code> is an open source toolkit for developing with HTML, CSS, SCSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system<br />
                    <code>Bourbon</code> is a library of Sass mixins and functions that are designed to make you a more efficient style sheet author.<br />
                    <code>Light gallary</code> A customizable, modular, responsive, lightbox gallery plugin for jQuery. <br />
                    <code>Owl Carousel 2</code> Touch enabled jQuery plugin that lets you create a beautiful, responsive carousel slider. <br />
                </p>

</section>

            <section id="javascript-files" class="section" data-magellan-destination="javascript-files">

                <h1>4. Javascript Files</h1>

                <br>

                <p>All client-side related javascript files can be found in this folder path <code>src/assets/js</code></p>

                <pre data-language="Folder Map">
  <code class="language-markup">
    js/
    |
    |-- scripts.min.js
    |-- burger-menu.min.js
    |-- common.js
  </code>
</pre>

                <br>
                <p>
                    In this folder there are 3 files. <br />
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

            <section id="support-desk" class="section" data-magellan-destination="support-desk">

                <h1>5. Support Desk</h1>

                <br>

                <p>Please be reminded that you have purchased a very affordable theme and you have not paid for a full-time web design agency. Occasionally, we will help with small tweaks, but these requests will be put on a lower priority due to their nature.</p>


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
                        <li>Make sure your question is a valid item issue and not a customization request.</li>
                        <li>Make sure you have read through the documentation and any related video guides before asking support on how to accomplish a task.</li>
                        <li>Make sure to double check the item FAQs.</li>
                        <li>If you have customized your item and now have an issue, back-track to make sure you didn't make a mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
                        <li>Almost 80% of the time we find that the solution to people's issues can be solved with a simple "Google Search". You might want to try that before seeking support. You might be able to fix the issue yourself much quicker than we can respond to your request.</li>
                        <li>Make sure to state the name of the item you are having issues with when requesting support via ThemeForest.</li>
                    </ul>

                </section>


            </section>

            <section id="files-resources" class="section" data-magellan-destination="files-resources">

                <h1>6. Files &amp; Resources</h1>

                <br>

                <p>The template uses following resources by third parties.<p>


                <ul>
                <li>jQuery v3.3.1 – <a href="https://jquery.com" rel="nofollow">jQuery v3.3.1</a></li>
                <li>Bootstrap v4.0.0 – <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" rel="nofollow">Bootstrap v4.0.0</a></li>
                <li>Owl Carousel v2.3.4 – <a href="https://owlcarousel2.github.io/OwlCarousel2/" rel="nofollow">Owl Carousel v2.3.4</a></li>
                <li>lightgallery v1.6.11 – <a href="https://sachinchoolur.github.io/lightGallery/" rel="nofollow">Light Gallery v1.6.11</a></li>
                <li>Isotope v3.0.6 – <a href="https://isotope.metafizzy.co/layout-modes.html" rel="nofollow">Isotope Layout v3.0.6</a></li>
                <li>imagesLoaded v4.1.4 – <a href="https://imagesloaded.desandro.com/" rel="nofollow">imagesLoaded v4.1.4</a></li>
                    <li> <strong>Fonts used</strong>
                        <ul>
                            <li><a href="https://fonts.google.com/specimen/Montserrat" target="_blank">Montserrat</a></li>
                            <li><a href="https://fonts.google.com/specimen/Roboto" target="_blank">Roboto</a></li>
                            <li><a href="https://fontawesome.com/v4.7.0/" target="_blank">Font Awesome</a></li>
                        </ul>
                    </li>
                </ul>

            </section>

            <section id="php-file" class="section" data-magellan-destination="php-file">

                <h1>7. PHP Code Explanation</h1>

                <br>

                <p><code>index.php</code> file for deploy and init on docker container or heroku<p>

            </section>

            <section id="yandex-map" class="section" data-magellan-destination="yandex-map">

                <h1>8. Yandex Map Api</h1>

                <br>

                <p>I have used Yandex Map Api to generate Yandex Map. You are able to change map style or marker from guidelines <a href="https://tech.yandex.com/maps/doc/jsapi/2.1/quick-start/index-docpage/" target="_blank">Yandex Map</a><p>

            </section>

            <section id="updates" class="section" data-magellan-destination="updates">

                <h1>9. Regular Updates</h1>

                <br>

                <p>We’re always improving our skills and knowledge so we’re making changes regularly. From bug fixes to new awesome features, updates generally come at least twice a month.<p>

                <pre>
                <!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Documentation - Rafoz Farzo</title>

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

        <div class="large-10 large-centered columns">

            <div class="name">
                <h3>Rafoz Farzo</h3>
                <p>Premium HTML Template Documentation</p>
            </div>

            <ul class="meta">
                <li><strong>Author:</strong> <a href="https://themeforest.net/user/alissio" target="_blank">Alissio</a></li>
                <li><strong>Live Preview:</strong> <a href="https://meek-pegasus-08eed8.netlify.app/">View Demo</a></li>
                <li><strong>Support:</strong> <a href="mailto:elvinmammadoff@gmail.com">Ask a Question</a></li>
            </ul>

            <p>Thank you for purchasing my theme. <br> If you have any questions that are beyond the scope of this help file, <br> please feel free to email <a href="mailto:designer.rafiq@gmail.com">here</a><br> Thanks so much!</p>

        </div>


    </div>

</header>

<section id="site-body">

    <div id="container" class="row">

        <div id="sidebar" class="large-3 large-push-9 columns" data-magellan-expedition="fixed">

            <div class="sticky">

                <h3>Table of Contents</h3>
                <ol>
                    <li data-magellan-arrival="getting-started"><a href="#getting-started">Getting Started</a></li>
                    <li data-magellan-arrival="html-structure"><a href="#html-structure">HTML Structure</a></li>
                    <ul>
                        <li data-magellan-arrival="skeleton-details"><a href="#skeleton-details">Skeleton Details</a></li>
                    </ul>
                    <li data-magellan-arrival="stylesheet-files"><a href="#stylesheet-files">Stylesheet Files</a></li>
                    <li data-magellan-arrival="javascript-files"><a href="#javascript-files">Javascript Files</a></li>
                    <li data-magellan-arrival="support-desk"><a href="#support-desk">Support Desk</a></li>
                    <li data-magellan-arrival="files-resources"><a href="#files-resources">Files & Resources</a></li>
                    <li data-magellan-arrival="files-resources"><a href="#php-file">PHP Code Explanation</a></li>
                    <li data-magellan-arrival="files-resources"><a href="#yandex-map">Yandex Map Api</a></li>
                    <li data-magellan-arrival="files-resources"><a href="#updates">Regular Updates</a></li>
                </ol>

            </div>

        </div>

        <div id="main-content" class="large-9 large-pull-3 columns">

            <section id="introduction" class="section" data-magellan-destination="introduction">

                <h1>Howdy!</h1>
                <p class="lead">You are a shining owner of a regular license based on Rafoz Farzo Theme</p>
                <p>First of all, Thank you so much for purchasing this template and for being my loyal customer. You are entitled to get free updates to this product + exceptional support (as per market policy) from the author directly.</p>
                <p>This documentation is to help you understand the template's structure. Please go through the documentation carefully to understand how this template is made and how to edit this properly. Basic HTML and CSS knowledge is required to customize this template.</p>

            </section>

            <section id="getting-started" class="section" data-magellan-destination="getting-started">

                <h1>1. Getting Started</h1>

                <br>

                <p>When you are ready to use this template, you must first upload the template files to a local or remote server. In this regard,  unzip the template package you have downloaded from themeforest. In extracted folder you can see following folders:<p>

                <h3>Package contents:</h3>

                <ul>
                    <li><strong>Template</strong> — Contains all the original template files comprises of HTML, CSS, JS etc. This is the folder which you'll upload on your server after necessary modifications.</li>

                    <li><strong>Documentation</strong> — Inside this folder, you will find the same documentation updated with the latest changes.</li>

                </ul>

                <p>Details regarding contents and structure of <code>template</code> folder is given below.</p>

            </section>

            <section id="html-structure" class="section"  data-magellan-destination="html-structure">

                <h1>2. HTML Structure</h1>

                <br>

                <p>This theme is a responsive landing page which built with Bootstrap fraemwork and you can customize it very easily. All of the information within the main
                    content area is nested within a div with an class of "sections". The general
                    <code>template</code> structure is the same throughout the template. Here is the general
                    structure. Note that for brevity, I am not including content that isn’t relevant to the
                    technique.</p>

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

</section>


            <section id="skeleton-details" class="sub-section"  data-magellan-destination="skeleton-details">

                <h2>2.1. Skeleton Details</h2>

                <br>

                <p>From the above skeleton it can be seen that there are 7 major logical code blocks in page. Most of the contents displayed on the screen goes in one of this block.</p>

                <p><code>div id="loading"</code> shows a loading overlay on the whole page or over single DOM elements</p>

                <p><code>header class="Header sticky-header"</code> section contains the code for logo and primary navigation at top.</p>

                <p><code>section class="Slider"</code>section contains the code for main slider.</p>

                <p><code>footer class="Footer"</code> contains the code for social icons and copyright text note.</p>

                <p>Further, skeleton shows two additional markup tags.<code>div id="cd-nav"</code> contains the menu for the mobile version. <code>div class="cd-overlay"</code> when mobile menu showed this layer visibled under mobile menu above content too.</p>

            </section>
            <section id="stylesheet-files" class="section" data-magellan-destination="stylesheet-files">

                <h1>3. Stylesheet Files</h1>

                <br>

                <p>All styling related files of this template can be found in this folder path <code>src/assets/css</code> and <code>src/assets/scss</code></p>

<pre data-language="Folder Map">
  <code class="language-markup">
    css/
    |
    |-- main.min.css
  </code>
</pre>

                <br>
                <p>
                    As it can be seen, in css folder there is a <code>main.min.css</code> file.<br />
                    All main css files contained in <code>main.min.css</code><br />
                    <code>Bootstrap 4</code> is an open source toolkit for developing with HTML, CSS, SCSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system<br />
                    <code>Bourbon</code> is a library of Sass mixins and functions that are designed to make you a more efficient style sheet author.<br />
                    <code>Light gallary</code> A customizable, modular, responsive, lightbox gallery plugin for jQuery. <br />
                    <code>Owl Carousel 2</code> Touch enabled jQuery plugin that lets you create a beautiful, responsive carousel slider. <br />
                </p>

</section>

            <section id="javascript-files" class="section" data-magellan-destination="javascript-files">

                <h1>4. Javascript Files</h1>

                <br>

                <p>All client-side related javascript files can be found in this folder path <code>src/assets/js</code></p>

                <pre data-language="Folder Map">
  <code class="language-markup">
    js/
    |
    |-- scripts.min.js
    |-- burger-menu.min.js
    |-- common.js
  </code>
</pre>

                <br>
                <p>
                    In this folder there are 3 files. <br />
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

            <section id="support-desk" class="section" data-magellan-destination="support-desk">

                <h1>5. Support Desk</h1>

                <br>

                <p>Please be reminded that you have purchased a very affordable theme and you have not paid for a full-time web design agency. Occasionally, we will help with small tweaks, but these requests will be put on a lower priority due to their nature.</p>


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
                        <li>Make sure your question is a valid item issue and not a customization request.</li>
                        <li>Make sure you have read through the documentation and any related video guides before asking support on how to accomplish a task.</li>
                        <li>Make sure to double check the item FAQs.</li>
                        <li>If you have customized your item and now have an issue, back-track to make sure you didn't make a mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
                        <li>Almost 80% of the time we find that the solution to people's issues can be solved with a simple "Google Search". You might want to try that before seeking support. You might be able to fix the issue yourself much quicker than we can respond to your request.</li>
                        <li>Make sure to state the name of the item you are having issues with when requesting support via ThemeForest.</li>
                    </ul>

                </section>


            </section>

            <section id="files-resources" class="section" data-magellan-destination="files-resources">

                <h1>6. Files &amp; Resources</h1>

                <br>

                <p>The template uses following resources by third parties.<p>


                <ul>
                <li>jQuery v3.3.1 – <a href="https://jquery.com" rel="nofollow">jQuery v3.3.1</a></li>
                <li>Bootstrap v4.0.0 – <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" rel="nofollow">Bootstrap v4.0.0</a></li>
                <li>Owl Carousel v2.3.4 – <a href="https://owlcarousel2.github.io/OwlCarousel2/" rel="nofollow">Owl Carousel v2.3.4</a></li>
                <li>lightgallery v1.6.11 – <a href="https://sachinchoolur.github.io/lightGallery/" rel="nofollow">Light Gallery v1.6.11</a></li>
                <li>Isotope v3.0.6 – <a href="https://isotope.metafizzy.co/layout-modes.html" rel="nofollow">Isotope Layout v3.0.6</a></li>
                <li>imagesLoaded v4.1.4 – <a href="https://imagesloaded.desandro.com/" rel="nofollow">imagesLoaded v4.1.4</a></li>
                    <li> <strong>Fonts used</strong>
                        <ul>
                            <li><a href="https://fonts.google.com/specimen/Montserrat" target="_blank">Montserrat</a></li>
                            <li><a href="https://fonts.google.com/specimen/Roboto" target="_blank">Roboto</a></li>
                            <li><a href="https://fontawesome.com/v4.7.0/" target="_blank">Font Awesome</a></li>
                        </ul>
                    </li>
                </ul>

            </section>

            <section id="php-file" class="section" data-magellan-destination="php-file">

                <h1>7. PHP Code Explanation</h1>

                <br>

                <p><code>index.php</code> file for deploy and init on docker container or heroku<p>

            </section>

            <section id="yandex-map" class="section" data-magellan-destination="yandex-map">

                <h1>8. Yandex Map Api</h1>

                <br>

                <p>I have used Yandex Map Api to generate Yandex Map. You are able to change map style or marker from guidelines <a href="https://tech.yandex.com/maps/doc/jsapi/2.1/quick-start/index-docpage/" target="_blank">Yandex Map</a><p>

            </section>

            <section id="updates" class="section" data-magellan-destination="updates">

                <h1>9. Regular Updates</h1>

                <br>

                <p>We’re always improving our skills and knowledge so we’re making changes regularly. From bug fixes to new awesome features, updates generally come at least twice a month.<p>

                <pre>

  V. 1.3.4 – 12.09.2024
  - Added: Exhibition page added for Version 1
  - Added: Swiper Slider added for Version 1
  - Fixed: Media files and some UI problems
  - Fixed: Sticky Header js and animation problems
  - Tweak: Improved Documentation

  V. 1.2.3 – 10.01.2024
  - New: Home version 2 added
  - Added: Sticky header problem
  - Tweak: Improved Documentation

  V. 1.1.2 – 10.04.2021
  - Added: Yandex Map API
  - Tweak: Improved Documentation

  V. 1.0.2 – 2.09.2018
  - Fix: Burger mobile menu UI changes
  - Tweak: Improved Documentation

  V. 1.0.1 – 21.07.2018
  - Fix: Owl Slider responsive view problems
  - Tweak: Improved Documentation

  V. 1.0.0 – 20.06.2018
  - Initial release
</pre>
                </section>

                        <footer>
                            <p>© Rafoz Farzo - Photography Template</p>
                        </footer>

                </div>

            </div>

        </section>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/prism.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

  V. 1.2.3 – 10.01.2024
  - New: Home version 2 added
  - Added: Sticky header problem
  - Tweak: Improved Documentation

  V. 1.1.2 – 10.04.2021
  - Added: Yandex Map API
  - Tweak: Improved Documentation

  V. 1.0.2 – 2.09.2018
  - Fix: Burger mobile menu UI changes
  - Tweak: Improved Documentation

  V. 1.0.1 – 21.07.2018
  - Fix: Owl Slider responsive view problems
  - Tweak: Improved Documentation

  V. 1.0.0 – 20.06.2018
  - Initial release
</pre>
                </section>

                        <footer>
                            <p>© Rafoz Farzo - Photography Template</p>
                        </footer>

                </div>

            </div>

        </section>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/prism.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
