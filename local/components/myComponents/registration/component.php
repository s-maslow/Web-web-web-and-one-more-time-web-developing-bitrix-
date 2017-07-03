<?
if (check_bitrix_sessid() &&
$_SERVER['REQUEST_METHOD'] == "POST" && !empty($_REQUEST["name"]) &&
!empty($_REQUEST["email"]) &&
!empty($_REQUEST["pass"]))
{
  $user = new CUser;
  $userInf = Array(
    "LOGIN" => trim($_REQUEST['email']),
    "EMAIL" => trim($_REQUEST['email']),
    "NAME" => trim($_REQUEST['name']),
    "PASSWORD" => trim($_REQUEST['pass']),
    "CONFIRM_PASSWORD" => trim($_REQUEST['confPass'])
  );
  $id = $use->Add($userInf);
  if(intval($id) > 0){
    echo "Вы успешно зарегестрированы";
  } else {
    echo $user->LAST_ERROR;
  }
}
$this->IncludeComponentTemplate();
?>
