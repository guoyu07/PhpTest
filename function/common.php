<?php

/*
  <#日期 = "2017-2-12">
  <#时间 = "19:30:18">
  <#人物 = "buff" >
  <#备注 = "常用函数库 ">
 */
//转换字符串编码为utf-8
function characet(&$data) {
    if (!empty($data)) {
        $fileType = mb_detect_encoding($data, array('UTF-8', 'GBK', 'LATIN1', 'BIG5'));
        if ($fileType != 'UTF-8') {
            $data = mb_convert_encoding($data, 'utf-8', $fileType);
            return 1;
        }
        return 1;
    }
    return 0;
}
//检测上传文件名是否已存在
function change_file_name($filename) {
    $newname='';
    preg_match('/([^\/":?|*<>]+)\.([^\/":?|*<>.]+)/', $filename, $newname);
    $filename=$newname[1] . '_' . rand(1, 10) . '.' . $newname[2];
    $user_filename = iconv('utf-8', 'gbk', $_SERVER["DOCUMENT_ROOT"]
            . '/../uploads/' . $filename);
    if(file_exists($user_filename)){
        return change_file_name($filename);
    }
    return $user_filename;
}
