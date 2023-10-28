<?php
session_start();
date_default_timezone_set('Asian/shanghai');
// function checkLogin($user,$password)
// {
//     if($user == 'admin' && $password =='admin')
//     return ture;
// else
//     return false;
// }

$user = isset($_POST['user']) ? trim($_POST['user']) : null;
$password=isset($_POST['password'])?trim($_POST['password']):null;

require_once 'mysql.php';
function checkLogin($user,$password)
{
    $password=md5($password);
    $sql= "select*from user where user='{$user}' and 
    password ='{$password}'";
    $qwe= fetchOne($sql);
    if($qwe)
        return ture;
    else
    return false;
}

function writeLog($user)
{
    $handle=fopen('log.txt','a');
    $info= $user.'--'.date('Y-m-d H:i:s')."\n";
    fwrite($handle,$info);
    fclose($handle);
}
if($user != null && $password != null)
{
    if(checkLogin($user,$password))
    {
        writeLog($user);
        setcookie('user',$user,time()+60*60*24,'','','',true);
        $_SESSION['user']=$user;
        header('Location:index.php');
        exit;
    }
    else
    {
        echo '用户名或密码错误！';
    }
}
    else
{
    echo '用户名或密码不能为空';
}
?>