<?php
/*
Plugin Name: opCity
Plugin URI: oparin.info
Description: exercise book add 
Armstrong: My Plugin.
Author: Oparin
Version: 1.0
Author URI: http://oparin.info
*/
function opCity_admin_pages()
{
    add_options_page('Города', 'База городов', 10, 'opCity', 'opCity_options_page');//10 уровень админа
}
function opCity_options_page() 
{
	echo "<h2>Управление базой городов</h2>";
	echo "<h3>Добавить город</h3>";
	//opCity_add_city();
	
	echo "<h3>Список городов</h3>";
	//opCity_change_city();	
}

//Изменение информации о товаре
function opCity_change_city()
{
	global $wpdb;							
	$table_opCity = $wpdb->prefix.opCity_city;	//обращение к таблице плагина
	$opCity_id = $_POST['opCity_id'];
    $opCity_name = $_POST['opCity_name'];
	$opCity_phone = $_POST['opCity_phone'];
	//Сохранение изменения товара
	if ( isset($_POST['opCity_setup_btn']) ) 		//Параметр передается из формы изменения
    {   
       if (function_exists('current_user_can') && 
            !current_user_can('manage_options') )//у пользователя есть права изменять настройки
                die ( 'Не достаточно пользовательских прав!' );

        if (function_exists ('check_admin_referer') )//проверка со страницы админки был запрос или нет 
        {
            check_admin_referer('opCity_setup_form');//параметр переданный из формы
        }
		// Принимаем данные
		
		//Обновляем данные в таблице
		$wpdb->update
					(
						$table_opCity,  
						array( 'name' => $opCity_name, 'phone' => $opCity_phone),
						array( 'id' => $opCity_id ),
                        array( '%s','%s', '%s'),
						array( '%d' )
					);
			
    }
	
	//Удаление товара
	if ( isset($_POST['opCity_delete_btn']) ) 	//значение кнопки удаления
    {   
       if (function_exists('current_user_can') && 
            !current_user_can('manage_options') )
                die ( 'Не достаточно пользовательских прав!' );

        if (function_exists ('check_admin_referer') )
        {
            check_admin_referer('opCity_setup_form');
        }
		$wpdb->query("DELETE FROM ".$table_opCity." WHERE id = ".$opCity_id);//Удаляем строку из таблицы с id товара
        
    }
	
	//Вывод формы изменения товара
	$citylist = $wpdb->get_results("SELECT * FROM $table_opCity");
	foreach ($citylist as $item) 			//Выбираем в цикле все записи из таблицы
	{
		echo			//выводим добавленный товар на экран в админке
		"
			<form name='opCity_setup' method='post' action='".$_SERVER['PHP_SELF']."?page=opCity&amp;updated=true'>
		";
		
		if (function_exists ('wp_nonce_field') )	//Проверочное поле для формы
		{
			wp_nonce_field('opCity_setup_form'); 
		}
		
		echo
		"
				<input type='hidden' name='opCity_id' value='".$item->id."'>
				<table>
				<tr>
					<td style='text-align:right;'>Город:</td>
					<td><input type='text' name='opCity_name' value='".$item->name."'></td>
				</tr>
				<tr>
					<td style='text-align:right;'>Телефон:</td>
					<td><input type='text' name='opCity_phone' value='".$item->phone."'></td>
				</tr>
				<tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type='submit' name='opCity_setup_btn' value='Сохранить' style='width:140px; height:25px'>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type='submit' name='opCity_delete_btn' value='Удалить' style='width:140px; height:25px'>
                    </td>
                </tr>
			</table>
			</form>
		";
	}
}

//Добавление товара
function opCity_add_city()
{
	global $wpdb;
	$table_opCity = $wpdb->prefix.opCity_city;
	
	//Сохранение добавленного товара в базу
	if ( isset($_POST['opCity_add_btn']) ) 
    {   
       if (function_exists('current_user_can') && 
            !current_user_can('manage_options') )
                die ('Не достаточно пользовательских прав!');

        if (function_exists ('check_admin_referer') )
        {
            check_admin_referer('opCity_add_city_form');
        }

		$opCity_id = $_POST['opCity_id'];
        $opCity_name = $_POST['opCity_name'];
		$opCity_phone = $_POST['opCity_phone'];
		//Добавляем товар в таблицу
		$wpdb->insert
					(
						$table_opCity,  
						array( 'name' => $opCity_name, 'phone' => $opCity_phone ),
						array( '%s','%s')
					);
    }
	
	//Форма добавления товара
	echo
		"

			<form name='opCity_add_city' method='post' enctype='multipart/form-data' action='".$_SERVER['PHP_SELF']."?page=opCity&amp;updated=true'>

		";
		
		if (function_exists ('wp_nonce_field') )
		{
			wp_nonce_field('opCity_add_city_form'); 
		}
	
	echo
	"
			<table>
				<tr>
					<td style='text-align:right;'>Наименование:</td>
					<td><input type='text' name='opCity_name'></td>
				</tr>
				<tr>
					<td style='text-align:right;'>Телефон:</td>
					<td><input type='text' name='opCity_phone'></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type='submit' name='opCity_add_btn' value='Добавить' style='width:140px; height:25px'>
					</td>
				</tr>
			</table>
		</form>
	";
}

function opCity_install()		//Функция активации плагина
{
    global $wpdb;
	
	//$table_opCity = $wpdb->prefix.opCity_city;
	
	/*$sql1 =		//формируем запрос к базе данных
	"
		CREATE TABLE IF NOT EXISTS `".$table_opCity."` (
		  `id` int(10) NOT NULL AUTO_INCREMENT,
		  `name` varchar(250) NOT NULL,
		  `phone` varchar(250) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";

    $wpdb->query($sql1);	*/	//Добавляем таблицу
}

function opCity_uninstall()		//Функция деактивации плагина
{
    global $wpdb;
	
	$table_opCity = $wpdb->prefix.opCity_city;
	
    $sql1 = "DROP TABLE `".$table_opCity."`;";		//удаляем таблицу
	
    $wpdb->query($sql1);
}

function get_city_list()
{
	/*global $wpdb;
	$table_opCity = $wpdb->prefix.opCity_city;
	$citylist = $wpdb->get_results("SELECT * FROM $table_opCity order by name");
	$opstr = "<ul class='cityul'>";
	foreach ($citylist as $item) 			//Выбираем в цикле все записи из таблицы
	{
		
			$opstr .= "<li class='cityli'><a href='#' onclick='myfunction(".$item->id."); return false;' class='mycity city_".$item->id."'>".$item->name."</a></li>";
		
	}
	$opstr .= "</ul>";*/
	$opstr = "<script type='text/javascript'>
   
		  var geocoder;
		  var s;

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng)
}

function errorFunction(){
    alert('Geocoder failed');
}

  function initialize() {
    geocoder = new google.maps.Geocoder();



  }

  function codeLatLng(lat, lng) {
s = document.getElementById('st');
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
      console.log(results)
        if (results[1]) {
         //formatted address
         //alert(results[0].formatted_address);
        //find country name
             for (var i=0; i<results[0].address_components.length; i++) {
            for (var b=0;b<results[0].address_components[i].types.length;b++) {

            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                if (results[0].address_components[i].types[b] == 'administrative_area_level_1') {
                    //this is the object you are looking for
                    city= results[0].address_components[i];
                    break;
                }
            }
        }
        //city data
        //alert(city.short_name);
s.innerHTML = city.short_name;

        } else {
          alert('No results found');
        }
      } else {
        alert('Geocoder failed due to: ' + status);
      }
    });
  }
</script><body onload='initialize()'>  <div id='st'></div>";
return $opstr;
}


register_activation_hook( __FILE__, 'opCity_install');		//установка плагина
register_deactivation_hook( __FILE__, 'opCity_uninstall');		//Удаление плагина
add_action('admin_menu', 'opCity_admin_pages');		//Создаем страницу в админке
add_shortcode( 'lol', 'get_city_list' );
add_action('wp_enqueue_scripts', 'my_enqueue');
function my_enqueue()
{
wp_enqueue_script('myenqueue', plugins_url('/js/my_query.js',__FILE__), array('jquery'));
wp_enqueue_script('jqballoon', plugins_url('/js/jquery.balloon.js',__FILE__), array('jquery'));
wp_localize_script( 'myenqueue', 'ajaxmy_enqueuejax', array( 'ajaxurl' => admin_url('admin-ajax.php',__FILE__) ) );
wp_deregister_script( 'yandexmaps' );
wp_register_script( 'yandexmaps', 'http://maps.googleapis.com/maps/api/js?sensor=false');


wp_enqueue_script( 'yandexmaps' );
}

add_action('wp_ajax_my_action', 'my_action_callback');
add_action('wp_ajax_nopriv_my_action', 'my_action_callback');
function my_action_callback() {
	global $wpdb;
	$table_opCity = $wpdb->prefix.opCity_city;
	if (isset($_POST['val'])) {
		$mylink = $wpdb->get_row("SELECT * FROM $table_opCity where id = {$_POST['val']}");
	}
	else {
		$mylink = $wpdb->get_row("SELECT * FROM $table_opCity where name = '{$_POST['name']}' union SELECT * FROM $table_opCity where name = 'Москва'");
	}
	$options=array(
		"phone"=>$mylink->phone,
		"name"=>$mylink->name,
		"id"=>$mylink->id
	 );

	echo json_encode($options);
	die();
}

?>
