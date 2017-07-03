<?
$arComponentDescription = array(
   "NAME" => "myRegistration",
   "DESCRIPTION" => "This is my registration",
   "ICON" => "/images/icon.gif",
   "PATH" => array(
      "ID" => "content",
      "CHILD" => array(
         "ID" => "catalog",
         "NAME" => "Каталог товаров"
      )
   ),
   "AREA_BUTTONS" => array(
      array(
         'URL' => "javascript:alert('Это кнопка!!!');",
         'SRC' => '/images/button.jpg',
         'TITLE' => "Это кнопка!"
      ),
   ),
   "CACHE_PATH" => "Y",
   "COMPLEX" => "Y"
);
?>
