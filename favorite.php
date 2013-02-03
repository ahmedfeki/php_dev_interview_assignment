<?php
set_time_limit(0);

require_once 'config2.php';
$user_id = 1;


/* * ***************************
  get favorite  by providing the user id
 * *************************** */

$result = mysqli_query($connexion, "SELECT * FROM favorite WHERE user_id=$user_id");
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
                <div id="mainbox" class="box favzone">

                    <div style="clear:both;"></div>
                    <div id="ContainerSigContent">

                        <div id='OdeskGallery'>

                            <ul id='favoritelist' class="qq-upload-list initial">



                                <?php
                                /* fetch associative array */
                                while ($obj = mysqli_fetch_object($result)):
                                    $url = $obj->url;
                                    $tmb = $obj->thumb;
                                    $favid = $obj->id;
                                    $des = $obj->des
                                    ?>
                                    <li class='favoriteitem qq-upload-success ' >
                                        <div class="panel">
                                            <?php if (!empty($des)): ?> 
                                                <a class="editbox" href="editdescription.php?fav=<?php echo $favid; ?>">
                                                    <div id="edit" class="fitem" favid="<?php echo $favid; ?>"></div>
                                                </a>
                                            <?php endif; ?>
                                            <div id="delete" class="fitem"  favid="<?php echo $favid; ?>"></div>
                                        </div>
                                        <img class ='lazy'  data-src='<?php echo $tmb; ?>' src="//:0" width='50' height="50"/>
                                        <noscript><img class="nolazy" src='<?php echo $tmb; ?>' width="50" height="50"/></noscript>
                                        <?php if (!empty($des)): ?>
                                            <div id="imgdesc">
                                                <?php echo $des; ?>
                                            </div>
                                        <?php else: ?>
                                            <a class="addescform" href="addfavdesc.php?fav=<?php echo $favid; ?>" >
                                                <div id="imgdesc" class="addesc" fav="<?php echo $favid; ?>">
                                                    <span id="addicon"></span> Add description
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                    <?php
                                endwhile;
                                ?>


                            </ul>
                        </div>

                    </div>
                </div>


            </div>


        </div>




    </body>
</html>