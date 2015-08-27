 jQuery(document).ready(function(){
 
 	setTimeout(showOverlay, jQuery("#pe_time_interval").val());
 
 	function showOverlay(){
	        jQuery("#pe_content").overlay({
	            
	          
	            mask: {
	                color: '#000',
	                loadSpeed: 200,
	            opacity: .8,
	            zIndex:99999
	          },
	              closeOnClick: false,
	              closeOnEsc: false,
	              //fixed: true,
	              api: true,
	             left: "50%"
	          }).load();
          }
        });