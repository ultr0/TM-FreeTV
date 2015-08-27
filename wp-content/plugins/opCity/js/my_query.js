// возвращает cookie с именем name, если есть, если нет, то undefined
function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
  options = options || {};

  var expires = options.expires;

  if (typeof expires == "number" && expires) {
    var d = new Date();
    d.setTime(d.getTime() + expires*1000);
    expires = options.expires = d;
  }
  if (expires && expires.toUTCString) { 
  	options.expires = expires.toUTCString();
  }

  value = encodeURIComponent(value);

  var updatedCookie = name + "=" + value;
	updatedCookie += "; path=/";
  for(var propName in options) {
    updatedCookie += "; " + propName;
    var propValue = options[propName];    
    if (propValue !== true) { 
      updatedCookie += "=" + propValue;
     }
  }
  document.cookie = updatedCookie;
}


function init() {
    // Данные о местоположении, определённом по IP
    var geolocation = ymaps.geolocation;
	jQuery.ajax({
    type: 'POST',
    url:  ajaxmy_enqueuejax.ajaxurl,
	dataType: 'json',
    data: {
      'action': 'my_action',
      'name': geolocation.city
      },
    context: document.body,
    success: function(data, textStatus, XMLHttpRequest){
      var data = data; 
       jQuery('.cityphone').html(data['phone']);
	   jQuery('#cityname').html(data['name']);
	   jQuery('#cityname').showBalloon({contents: '<div class="vashgorod">Ваш город: '+data['name']+'<br>Угадали?<br><p class="button-wrap">'+
                '<a class="btn y-button" href="#">'+
                    '<span class="b-button__i">Да</span>'+
                '</a>'+
                '<a class="btn n-button" href="#">'+
                    '<span class="b-button__i">Нет</span>'+
                '</a>'+
            '</p></div>',position: "bottom"});
		jQuery(".y-button").click(function() {
			var date = new Date( new Date().getTime() + 3600*24*30*1000 );
			setCookie('city',data['id'],{ expires: date.toUTCString() });
			jQuery('#cityname').hideBalloon();
		});
		jQuery(".n-button").click(function() {
			jQuery('#cityname').hideBalloon();
			jQuery('.eModal-3').trigger('click');
		});
	},
    error: function(XMLHttpRequest, textStatus, errorThrown) {
    alert(errorThrown);
    },
    complete: function(XMLHttpRequest, status) {
          }
 });
	
	
}

function myfunction(id)
{
 var ajaxval = id;
 jQuery.ajax({
    type: 'POST',
    url:  ajaxmy_enqueuejax.ajaxurl,
	dataType: 'json',
    data: {
      'action': 'my_action',
      'val': ajaxval
      },
    context: document.body,
    success: function(data, textStatus, XMLHttpRequest){
      var data = data; 
       jQuery('.cityphone').html(data['phone']);
	   jQuery('#cityname').html(data['name']);
	   var date = new Date( new Date().getTime() + 3600*24*30*1000 );
		setCookie('city',ajaxval,{ expires: date.toUTCString() });
		},
    error: function(XMLHttpRequest, textStatus, errorThrown) {
    alert(errorThrown);
    },
    complete: function(XMLHttpRequest, status) {
          }
 });
}
