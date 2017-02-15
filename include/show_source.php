<?php
/*
  <#日期 = "2017-2-15">
  <#时间 = "17:37:17">
  <#人物 = "buff" >
  <#备注 = " ">
 */
$str1 = "my name is buffge<br/>\r\n";
function outstr($val, $obj) {
    echo $val;
    echo 'l like '. $obj->one . ' and ' . $obj->two . ' and ' . $obj->three . "!<br/>\r\n";
}
class like {
    public $one = 'dog';
    public $two = 'cat';
    public $three = 'girl';
}
$mylike = new like();
outstr($str1, $mylike);
