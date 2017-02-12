<?php

/*
<#日期 = "2017-2-12">
<#时间 = "19:30:18">
<#人物 = "buff" >
<#备注 = " ">
*/
//转换字符串编码为utf-8
function characet(&$data){
  if( !empty($data) ){    
    $fileType = mb_detect_encoding($data , array('UTF-8','GBK','LATIN1','BIG5')) ;   
    if( $fileType != 'UTF-8'){   
      $data = mb_convert_encoding($data ,'utf-8' , $fileType);
      return 1;
    }
    return 1;
  }   
  return 0;    
}