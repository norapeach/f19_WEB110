<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Web Developer Examples and Resources by Nora Peachey</title>
     <meta charset="utf-8" />
     <meta name="robots" content="noindex,nofollow" />
     <meta name="viewport" content="width=device-width" />
     <link rel="stylesheet" href="css/normalize.css" />
     <link rel="stylesheet" href="css/reset.css" />
     <link rel="stylesheet" href="css/big.css" />
     <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="css/contactForms.css" />
     <!-- jQuery -->
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <!-- MenuMaker Plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     
     <!-- Icon Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
     <!-- JS -->
     <script src="js/script.js"></script>
 </head>
 <body>
     <main>
         <header id="top">
             <h1><a href="index.html">Web Developer Examples  &amp; Resources <span class="myName">by Nora</span></a></h1>
             <nav id="cssmenu">
                  <ul>
                     <li><a href="../index.html"><i class="fa fa-fw fa-institution" aria-hidden="true"></i> WEB110</a></li>
                     <li><a href="index.html"><i class="fa fa-fw fa-home" aria-hidden="true"></i> BIG</a></li>
                     <!-- Drop down for research pages -->
                     <li><a href="#">Research</a>
                        <ul>
                           <li><a href="accessibility.html"><i class="fa fa-fw fa-globe" aria-hidden="true"></i> Accessibility</a></li>
                           <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up" aria-hidden="true"></i> SMO</a></li>
                           <li><a href="forms.html"><i class="fa fa-check-square-o" aria-hidden="true"></i> HTML Forms</a></li>
                        </ul>
                     </li>
                     <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro" aria-hidden="true"></i> Lightbox II Gallery</a></li>
                     <!-- Drop down for Google Tools -->
                     <li><a href="#">Google Tools</a>
                        <ul>
                           <li><a href="seo.html"><i class="fa fa-fw fa-desktop" aria-hidden="true"></i> SEO</a></li>
                           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar" aria-hidden="true"></i> Calendar</a></li>
                           <li><a href="map.html"><i class="fa fa-fw fa-map-o" aria-hidden="true"></i> Map</a></li>
                        </ul>
                     </li>
                     <li class="active"><a href="contact.php"><i class="fa fa-fw fa-server" aria-hidden="true"></i> Contact</a></li>
                  </ul>
             </nav>
        </header>
        <!-- START LEFT COLUMN -->
        <section class="fullwidth">
            <h2 class="subheader">Contact Nora</h2>
            <?php
                /*
                 * Below are 2 different forms to be re-used       
                 * 
                 * Only use one at a time, comment out the other!       
                 *
                 */

                include 'includes/contact_include.php'; #site keys & code here

                $toAddress = "nora.peachey@seattlecentral.edu";  //place your/your client's email address here
                $toName = "Nora"; //place your client's name here
                $website = "Contact Form Test";  //place NAME of your client's website

                //echo loadContact('simple.php');#demonstrates a simple contact form
                echo loadContact('multiple.php');#demonstrates multiple form elements

	       ?>
        </section>
        <!-- END LEFT COLUMN -->

        <footer>
          <p><small>&copy; 2019 by <a href="contact.php">Nora Peachey</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href="#top" title="return to top of page">Back to top</a></small></p>
        </footer>
    </main>
     
     
 </body>
</html>