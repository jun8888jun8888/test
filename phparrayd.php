<?php
   $arr=Array("hello",234,"8");
   function copy_arr($arr){
   $arr[0]=1;
   }
   copy_arr($arr);
   print_r($arr);
?>