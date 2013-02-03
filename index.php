<?php
set_time_limit(0);


require_once 'config2.php';
require_once 'GoogleImages.php';

//create class instance
$gimage = new GoogleImages();

/* * ***************************
  call get_images method by providing a query
 * *************************** */
$result = $gimage->get_images();
?>
<!DOCTYPE html>
<html xmlns:fb="https://www.facebook.com/2008/fbml">
    <head>
        <meta charset="utf-8" />
        <title>In Art</title>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.gritter.min.js"></script>
        <script type="text/javascript" src="js/previewhover.js"></script>
        <script src="js/jail.js"></script>
        <script src="js/jquery.colorbox-min.js"></script>
        <script src="js/jquery.confirm.js"></script>
        <script type="text/javascript" src="js/google.js"></script>

        <link rel="stylesheet" href="css/start/jquery-ui-1.9.2.custom.min.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery.gritter.css"  type="text/css"/>
        <link rel="stylesheet" href="css/colorbox.css" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.confirm.css" type="text/css"/>

        <link rel="stylesheet" href="css/google.css" type="text/css"/>

    </head>
    <body>

        <div class="dd_container">


            <div class="clear"></div>

            <div id='menubox'>
                <ul class="menu">
                    <li><a id="homeitem" href="index.php">Home</a></li>
                    <li><a id="favitem" href="favorite.php">Favorite</a></li>

                </ul>
            </div>

            <div id='boxcontainer'>
                <div id="mainbox" class="box">

                    <div style="clear:both;"></div>
                    <div id="ContainerSigContent">

                        <div id='OdeskGallery'>

                            <ul id='uploadphoto' class="qq-upload-list initial">



                                <?php
                                foreach ($result as $row):
                                    foreach ($row as $col):
                                        $tmb = $col['tmb'];
                                        $url = $col['url'];
                                        $description = $col['title'];
                                        ?>
                                        <li class='uploadedimage  qq-upload-success' >
                                            <div>
                                            </div>
                                            <a href="<?php echo $url; ?>" rel="prettyPhoto[gallery1]"  class="linkbox" title="">
                                                <img class ='lazy'  data-src='<?php echo $tmb; ?>' src="//:0" width='50' height="50"/>
                                                <noscript><img class="nolazy" src='<?php echo $tmb; ?>' width="50" height="50"/></noscript>
                                                <div id="imgdesc">
                                                    <?php echo $description; ?>
                                                </div>

                                            </a>
                                        </li>
                                        <?php
                                    endforeach;
                                endforeach;
                                ?>
                            </ul>
                        </div>

                    </div>
                </div>


            </div>


        </div>




    </body>
</html>