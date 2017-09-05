<?php

$dir="main";  //默认目录名称
$filename="index"; // 默认文件名称

//路由：路径的分发、导航，index.php 的作用及时根据请求url的不同导航到不同页面
//var_dump ($_SERVER)
//判断数组中是否包含指定的属性
if(array_key_exists("PATH_INFO",$_SERVER)){
//获取url中的路径 /main/index
    $path=$_SERVER['PATH_INFO'];
//    去掉路径中的一个斜杠
    $str=substr($path,1);
    $arr=explode('/',$str);
    if(count($arr)==2){
    $dir=$arr[0];
    $filename=$arr[1];
    }else{
       $filename='login';
    }
}
//在当前页面嵌入一个子页面
	include('./views/'.$dir.'/'.$filename.'.html');
?> 