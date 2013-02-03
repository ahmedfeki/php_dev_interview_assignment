<?php
if (empty($_POST)) {
    ?>

    <html>
        <head>

            <style>
                .description{
                    width: 98%;
                    height: 51%;
                    margin: 1%;
                    border: 3px solid rgb(0, 0, 0);
                    padding: 5px;
                    font-family: Tahoma, sans-serif;
                    background-color: rgb(0, 0, 0);
                    background-position: bottom right;
                    background-repeat: no-repeat;
                    color: white;
                    font-size: 15px;
                }
                .button {
                    text-align: center;
                    width: 13%;
                    padding: 2px;
                    margin: 0px;
                    cursor: pointer;
                    font-family: Arial;
                    color: #ffffff;
                    font-size: 16px;
                    text-decoration: none;
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    border-radius: 4px;
                    -webkit-box-shadow: 0px 1px 3px #666666;
                    -moz-box-shadow: 0px 1px 3px #666666;
                    box-shadow: 0px 1px 3px #666666;
                    text-shadow: 1px 1px 3px #666666;
                    border: solid #ffffff 2px;
                    background: -webkit-gradient(linear, 0 0, 0 100%, from(#8ff20e), to(#136906));
                    background: -moz-linear-gradient(top, #8ff20e, #136906);
                }
                .button:hover {
                    background: -webkit-gradient(linear, 0 0, 0 100%, from(#36f011), to(#349c0b));
                    background: -moz-linear-gradient(top, #36f011, #349c0b)
                }
            </style>
            <script src="js/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#savedesc').live('click',function(){
                        $('#adddescform').submit();
                    })
                                    
                    $('#adddescform').live('submit',function(e){
                        $('body').css({background: 'rgba(77, 76, 76, 0.18)'})
                        e.preventDefault();
                        $.ajax({
                            url:'addfavdesc.php',
                            type:'POST',
                            data:$(this).serialize(),
                            dataType:'json'
                        }).done(function(msg){
                            if(msg.result == 1 ) {
                                parent.$.fn.colorbox.close();
                            }
     
                        })
                    });
                })
            </script>

        </head>
        <body>

            <h3>Add a description: </h3>
            <form id='adddescform' method="POST" action="">
                <input type="hidden" name="favid" value="<?php echo $_GET['fav']; ?>" >
                <textarea class="description" name="favdesc" onfocus="this.value='';">
                                                                        
                </textarea>

            </form>
            <div class="button" id="savedesc" >Save</div>

        </body>
    </html>
    <?php
} else {

    require_once 'config2.php';
    $user_id = 1;
    $favid = trim(mysqli_real_escape_string($connexion, $_POST['favid']));
    $des = trim(mysqli_real_escape_string($connexion, $_POST['favdesc']));

    $result = mysqli_query($connexion, "UPDATE favorite SET des='$des' WHERE id='$favid' ");
    if ($result) {
        echo json_encode(array('result' => 1));
    } else {
        echo json_encode(array('result' => 0, 'error' => mysqli_errno($connexion)));
    }
}
?>
