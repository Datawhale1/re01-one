<?php
$con=mysqli_connect('127.0.0.1','root','root');
if(!$con)
{
    exit('数据库连接失败'.mysqli_connect_error());
}
mysqli_select_db($con,'news');

function fetchOne($sql)
{
    global $con;
    $res=mysqli_query($con,$sql);
    if(!$res)
    {
        echo '数据库查询失败:'.mysqli_error($con);
    }
    $row=mysqli_fetch_array($res);
    return $row;
}
?>