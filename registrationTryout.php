<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
$APPLICATION->IncludeComponent(
myComponents:registration, // имя компонента
.default, // шаблон компонента, пустая строка если шаблон по умолчанию
arParams=array(), // параметры
)


?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
