<?php
session_start();
echo '<a href="2.html">进入主页</a></br></br>';

$userC =isset($_COOKIE['user']) ? $_COOKIE['user'] : null;
$users =isset($_SESSION['user']) ? $_SESSION['user'] : null;

if($userC != 'null')
{
    if($userC !== 'admin')
    {
        header('Location:login.html');
    }
}
else
{
    header('Location:login.html');
}
if($users != null)
{
    if($users !== 'admin')
    {
        header('Location:login.html');
    }
}
else
{
    header('Location:login.html');
}
echo '<a href="logout.php">退出登录</a></br></br>';
$_SESSION['views']=1;
 if(isset($_SESSION['views']))
 {
     $_SESSION['views']=$_SESSION['view']=1;
 }
  else
 {
     $_SESSION['views']=1;
 }
 echo "浏览量".$_SESSION['views'];
?>
