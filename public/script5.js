$(document).ready(function(){



	function toggle_video_modal() {
	    
	
	    $(".js-trigger-video-modal").on("click", function(e){
          
   
	        e.preventDefault();
        
          
          var id = $(this).attr('data-youtube-id');

      
          var autoplay = '?autoplay=1';

       
          var related_no = '&rel=0';

        
          var src = '//www.youtube.com/embed/'+id+autoplay+related_no;
          
         
          $("#youtube").attr('src', src);

          $("body").addClass("show-video-modal noscroll");
	    
      });


      function close_video_modal() {
        
        event.preventDefault();


        $("body").removeClass("show-video-modal noscroll");

      
        $("#youtube").attr('src', '');
        
      }

	    $('body').on('click', '.close-video-modal, .video-modal .overlay', function(event) {
	        
   
          close_video_modal();
	        
      });
   
      $('body').keyup(function(e) {
     
          if (e.keyCode == 27) { 
            
         
            close_video_modal();
            
          }
      });
	}
	toggle_video_modal();



});