
function notification(title,text,image){
    $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: title,
        // (string | mandatory) the text inside the notification
        text: text,
        // (string | optional) the image to display on the left
        image: image,
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: ''
    });
}
function errornotif(title,text){
    notification(title, text, 'images/error.png');
}
function successnotif(title,text){
    notification(title, text, 'images/success.png');
}


$(document).ready(function(){
  
  
    
    $.ajaxSetup({
        cache: false,
        error: function (x, status, error) {
            if (x.status == 500 || x.status == 400) {
                showError("La page que vous demandez n'existe pas ou est momentanÃ©ment indisponible ",5000);
                errornotif('An error occurred', 'Please try again later.');
            }
            return false;
        }
    });
    
    $("li.uploadedimage,li.favoriteitem").hover(
        function () {
            $(this).find('#imgdesc').show('slide', {
                direction: "up"
            }, 400);
        },
        function () {
            $(this).find('#imgdesc').hide('slide', {
                direction: "up"
            }, 0);
        }
        );
 
   
    $('.addescform').colorbox({
        iframe:true, 
        innerWidth:425, 
        innerHeight:244,
        onClosed:function(){
            location.reload(true);
        }
    });
   
    $('.editbox').colorbox({
        iframe:true, 
        innerWidth:425, 
        innerHeight:244,
        onClosed:function(){
            location.reload(true);
        }
    });
   
    $('#delete').live('click',function(e){
        var href = 'deletefav.php?fav='+$(this).attr('favid');
        var container = $(this).parents('li');
        event.preventDefault();

		
        $.confirm({
            'title'	: 'Delete confirmation',
            'message'	: 'You are about to remove this image from your favorites, it can not be restored at a later date! Continue?',
            'buttons'	: {
                'Yes'	: {
                    'class'	: 'blue',
                    'action': function(){
                        container.effect( "explode", "slow" );
                        $.ajax({url:href});
                        return false;
                    }
                },
                'No'	: {
                    'class'	: 'gray',
                    'action': function(){
                        return false;
                    }	
                }
            }
        });
		
    });
	
   
   
    $('img.lazy').jail({
        effect: 'fadeIn',
        speed : 500,
        loadHiddenImages : true
    });
    
   
    $("#uploadphoto a").live('click',function(e){
        e.preventDefault();
        
        image = $(this).attr('href');        
        if($(this).parent('li').hasClass('ui-selected')==false)
        {
            $(this).parent('li').addClass('ui-selected');
            $(this).prev('div').addClass('selectcross');
            thumb = $(this).find('img').attr('src');
            url   = $(this).attr('href');
            des = $(this).find('#imgdesc').text();
            $.ajax({
                url  : 'addFavorite.php',
                type : 'POST',
                data : {
                    thumb : thumb,
                    url : url,
                    des : des,
                    userid : 1 // user id just for test 
                },
                dataType: "json"
            }).done(function(msg) {
                if(msg.result == 1)
                    successnotif('Success', 'selected image was added to the favorite');
                else 
                    errornotif('Error occured', 'Please try again later.');

            });
            
        }
        
   
    });

})