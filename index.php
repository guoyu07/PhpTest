<?php
require('include/header.inc.php'); //头部
require('include/buff.name.php'); //命名空间
echo "<p><span class = 'red'>多行注释</span>/* statement */</p>\r\n"; /* 多行注释 */
echo "<p><span class='red'>单行注释</span>//statement</p>\r\n"; //单行注释
echo '<p><span class = "red">单行注释</span> #statement</p>' . '<hr/>'; #单行注释
echo '<p><span class="red">显示时间</span>: ' . date('Y\年n\月j\日H:i:s D')
 . '<br/>date(&apos;代码标示&apos;)Y:年 n:月 j:日 H:小时 i:分钟 s:秒 D:星期几 '
 . '字符前加上\.如果是写t要写成\\\t.因为\t是特殊字符</p><hr/>';
$string = 'hello world!';
echo '<p>单引号中显示$string ' . "双引号中显示$string</p><hr/>";
echo '<p>php中标识符区分大小写 $a和$A不是一个变量.但是函数名不区分大小写</p><hr/>';
$a = 12;
$str_a = (string) $a;
echo '<p><span class="red">强制类型转换</span>$a=12;$str_a=(string)$a;强制将$a转换成字符串 gettype($str_a)=' . gettype($str_a) .
 '---<span class="red">获取变量类型</span>gettype(element)</p><hr/>';
echo '<p><span class="red">定义常量</span>define(&apos;name&apos;,value[,false|true])'
 . ' false表示区分大小写----const name; const用于类中 define用于全局,define也可以用于字符串 代码段;<br/>'
 . '在命名空间中const只在命名空间有效,define 全局有效';
define('PI', 3.1415926, FALSE);
$q = 0;
class pi
{
    const
            YUAN = 3.1415926;
    public
            $q = 1;
    function setQ($value) {
        $this->q = $value;

    }

}

$temp1 = new pi();
$temp1->setQ(1);
echo'全局常量PI:' . PI . '---pi类中的常量pi::YUAN:' . pi::YUAN . '<br/>';
echo '$q为全局变量,pi->q为类中变量,先创建一个temp1实体,然后引用$temp1->q.$q=' . $q . ' ++++++++++ temp1->q=' . $temp1->q . '</p><hr/>';
class static_var
{
    public static
            $val = 1;
    public static
            function set($value) { //静态函数 不需要创建对象就可以用className::functionName() 调用.静态函数中不可以使用$this,只能用self::.
        self::$val += $value;

    }

}

static_var::set(2);
echo '<p><span class="red">静态变量</span> 初始值为1,set(2)之后为$sta_var->val:' . static_var::$val;
static_var::set(2);
echo ' 现在又$sta_var->set(2) 现在$sta_var->val= ' . static_var::$val . '</p><hr/>';
$quot = 'hello';
$quot1 = $quot;
$quot2 = &$quot;
echo '<p><span class="red">地址引用符<b>&</b></span>&nbsp;$quot=&apos;hello,&apos;$quot1=$quot;$quot2=&amp;$quot,'
 . '现在$quot1= ' . $quot1 . ',$quot2= ' . $quot2;
$quot .= 'world';
echo '<br/>$quot.=&apos;&nbsp;world&apos;之后$quot1= ' . $quot1 . '&nbsp;$quot2= ' . $quot2 . '&nbsp;赋值时开辟新的内存,引用时传递地址<hr/>';
$number_format = 12345.146;
$new_number_format = number_format($number_format, '2', '.', ',');
echo '<p><span class="red">数值格式化函数</span>:number_format(数值,保留小数位数,小数点显示符号,千分位间隔符)'
 . '&nbsp;number_format(12345.146,&apos;2&apos;,&apos;.&apos;,&apos;,&apos;)= ' . $new_number_format . '<hr/>';
echo '<p><span class="red">设置类型函数</span>:settype(值,类型);';
$num1 = 123;
echo'$num1=123;现在$num1的类型是' . gettype($num1);
settype($num1, 'string');
echo'~~~~~settype($num1, &apos;string&apos;)之后$num1的类型是' . gettype($num1) . '</p><hr/>';
$fun = ['is_int', 'is_array', 'is_bool', 'is_string', 'is_object', 'is_double', 'is_null', 'is_resource', 'is_scalar', 'is_numeric', 'is_callable'];
$fun_zh = ['整数', '数组', '逻辑值', '字符串', '对象', '浮点数', '空', '资源', '标量(整数,逻辑值,字符串或浮点数)', '数字或者数字字符串', '有效的函数名称'];
echo'<p><span class="red">检查变量是否为xx类型</span>:<br/>';
echo '$num1=&apos;123&apos;:' . '</p>';
for ($i = 0; $i < 11; $i++) {
    if ($fun[$i]($num1)) {
        $temp = 'num1_' . $fun[$i];
        $$temp = '<span class="trorfal">是</span>';
    }
    else {
        $temp = 'num1_' . $fun[$i];
        $$temp = '<span class="trorfal">否</span>';
    }
    echo '<p class="margin_30">' . $fun[$i] . '()---' . $fun_zh[$i] . ':&nbsp;' . $$temp . '</p>';
}
echo '<hr/>';
echo '<p><span class="red">判断变量是否已定义并且不为null</span>--isset(变量1,2,3...)~~~~'
 . '<span class="red">判断变量是否未定义或者为0</span>empty()---当前$num2=0;$num3未定义<br/>';
$num2 = 0;
echo 'isset($num2):&nbsp;' . (isset($num2) ? 1 : 0) . '<br/>';
echo 'empty($num2):&nbsp;' . (empty($num2) ? 1 : 0) . '<br/>';
echo 'isset($num3):&nbsp;' . (isset($num3) ? 1 : 0) . '<br/>';
echo 'empty($num3):&nbsp;' . (empty($num3) ? 1 : 0) . '<br/></p><hr/>';
unset($num2);
echo '<p><span class="red">销毁变量</span>&nbsp;unset(变量1,2,3..)----unset($num2)后输出isset($num2):&nbsp;' . (isset($num2) ? 1 : 0) . '<br/><hr/>';
$val = '123.46';
echo "<p><span class=\"red\">类型转换函数</span>intval(数值,转换基数),floatval(),strval();$val='123.46' intval($val)=&nbsp;" . intval($val)
 . ' floatval($val)=&nbsp;' . floatval($val) . '</p><hr/>';
$doc_root = $_SERVER['DOCUMENT_ROOT'];
if (!1) {
    $fp = fopen("$doc_root/../logs/newlog.txt", 'ab');
    flock($fp, LOCK_EX); //独占锁定 别人不可读不可写
    $str1 = "世上无难事,只啪有心人.\r\n书山有路勤为径,学海无涯苦作舟.\r\n"; //这里必须要用双引号,单引号中\r\n是无效的
    fwrite($fp, $str1);
    flock($fp, LOCK_UN); //释放锁定
    fclose($fp);
}
echo '<p><span class="red">文件写操作</span>:fopen("$doc_root/../logs/newlog.txt", \'ab\') 打开根目录的上层目录的logs目录下的newlog文件.'
 . 'fwrite()写入,fclose() 关闭文件,flock($fp, LOCK_EX) 独占(写) 锁定;flock($fp, LOCK_SH) 读锁定(可读);flock($fp, LOCK_UN) 释放锁定</p><hr/>';
if (!1) {
    $fp = fopen("$doc_root/../logs/newlog.txt", 'rb');
    $str = '';
    flock($fp, LOCK_SH); //读锁定 别人可读不可写
    while (!feof($fp)) {
        $buffer = fgets($fp, 2048);
        $str .= $buffer;
    }
    echo "<pre>$str</pre>";
    flock($fp, LOCK_UN);
    fclose($fp);
}
echo '<p><span class="red">文件读操作</span>:fopen("$doc_root/../logs/newlog.txt", \'rb\').fgets(资源,length)读取一行,'
 . 'feof(资源)判断是否是文件末尾,fclose()关闭文件</p><hr/>';
echo '<p><span class="red">检查文件是否存在</span> file_exists("$doc_root/../logs/newlog.txt")= '
 . (file_exists("$doc_root/../logs/newlog.txt") ? '存在' : '不存在') . '</p><hr/>';
echo '<p><span class="red">检查文件大小(字节)</span> filesize("$doc_root/../logs/newlog.txt")= '
 . filesize("$doc_root/../logs/newlog.txt") . '字节 <span class="red">删除文件</span> unlink(adress)</p><hr/>';
$arr = range(1, 10, 0.5);
echo '<p><span class="red">升序创建数组</span>range(开始值,结束值,步阶)$arr=range(1,10,0.5)<br/>';
if (rand(0, 1)) {                                                  //随机采用下面的一种循环 最好用foreach
    for ($i = 0; $i < count($arr); $i++) {                         //for循环遍历数组 有关联数组时不能使用
        echo '$arr[' . $i . ']= ' . $arr[$i] . '&nbsp;&nbsp;';
        if ($i === 9) {
            echo'<br/>';
        }
    }
}
else {
    foreach ($arr as $key => $value) {                              //foreach遍历数组
        echo '$arr[' . $key . ']= ' . $value . '&nbsp;&nbsp;';
        if ($key === 9) {
            echo'<br/>';
        }
    }
}
echo '<hr/>';
$arr2 = [1, 2, 3, 4];
$value = 'value';
echo '<p><span class="red">数组指针操作</span> $arr2=[1,2,3,4]<br/>current($arr2)=  返回数组中的当前单元 ' . current($arr2) . '<br/>'
 . 'each($arr2)[\'value\']返回数组中当前的键&apos;key&apos;／值&apos;value&apos;对并将数组指针向前移动一步 each($arr2)[\'value\']='
 . each($arr2)[$value] . '<br/>';
next($arr2);
echo'next($arr2)后将数组中的内部指针向前移动一位 current($arr2)= ' . current($arr2) . '<br/>';
prev($arr2);
echo'prev($arr2)后将数组的内部指针倒回一位 current($arr2)= ' . current($arr2) . '<br/>';
end($arr2);
echo 'end($arr2)后将数组的内部指针指向最后一个单元 current($arr2)= ' . current($arr2) . '<br/>';
reset($arr2);
echo 'reset($arr2) = 将数组指针指向开头 current($arr2) = ' . current($arr2) . '</p><hr/>';
$arr3 = [[1, 2, 3], [4, 5, 6], 'min' => [7, 8, 9]];
echo'<p><span class="red">遍历多维数组</span>$arr3=[[1,2,3],[4,5,6],\'min\'=>[7,8,9]]<br/>';
foreach ($arr3 as $key1 => $value) {
    foreach ($arr3[$key1] as $key2 => $value) {
        echo '$arr3[' . $key1 . '][' . $key2 . ']=' . $value . '&nbsp;&nbsp;';
    }
    echo '<br/>';
}
echo '</p><hr/>';
$arr4 = ['T', 'S', 'O', 'P'];
sort($arr4);
echo '<p><span class="red">数组排序</span>sort()<span class="red">升序排序</span>从小到大 rsort()降序排序.现在数组为$arr4 = '
 . '[\'T\', \'S\', \'O\', \'P\'];<br/>sort($arr4)后: $arr4= ';
for ($i = 0; $i < 4; $i++) {
    echo $arr4[$i] . '&nbsp;';
}
echo '<br/>';
$arr5 = ['z' => 3, 'q' => 2, 's' => 4, 'l' => 1];
echo 'asort()<span class="red">按关联数组的值排序</span>  ksort() <span class="red">按关联数组的键排序</span> 现在 $arr5'
 . "=['z'=>3,'q'=>2,'s'=>4,'l'=>1];<br/>asort(\$arr5)后 \$arr5= ";
asort($arr5);
foreach ($arr5 as $key => $value) {
    echo '&apos;' . $key . '&apos;=>' . $value . '&nbsp;';
}
echo '<br/>ksort($arr5)后 $arr5=';
ksort($arr5);
foreach ($arr5 as $key => $value) {
    echo '&apos;' . $key . '&apos;=>' . $value . '&nbsp;';
}
echo '<br/>';
$arr6 = [['奔驰', '2t', 50], ['宝马', '3t', 45], ['东风', '20t', 59]];
function compare($x, $y) {//按arr6[*][2]进行升序排序
    if ($x[2] === $y[2]) {
        return 0;
    }
    return $x[2] > $y[2] ? 1 : -1;

}

usort($arr6, 'compare');
echo 'usort(数组,比较函数) <span class="red">用户自定义排序函数</span> 当前$arr6=' . "[['奔驰','2t',50],['宝马','3t',45],['东风','20t',59]]<br/>"
 . '按$arr6[*][2]排序后 $arr6=<br/>';
for ($i = 0; $i < 3; $i++) {
    echo '$arr6[' . $i . ']=';
    foreach ($arr6[$i] as $key => $value) {
        echo $value . '&nbsp;';
    }
    echo '<br/>';
}
$arr7 = [1, 4, 2, 7, 5];
echo '<span class="red">随机排序</span>shuffle(数组),<span class="red">当前数组顺序反向排序</span>array_reverse' .
 '当前$arr7=[1,4,2,7,5]<br/>shuffle($arr7)后 $arr7= ';
shuffle($arr7);
for ($i = 0; $i < 5; $i++) {
    echo $arr7[$i];
    if ($i !== 4) {
        echo',';
    }
}
echo '<br/>$arr8=array_reverse($arr7)后 $arr8= ';
$arr8 = array_reverse($arr7);
for ($i = 0; $i < 5; $i++) {
    echo $arr8[$i];
    if ($i !== 4) {
        echo',';
    }
}
echo '</p><hr/>';
$arr9 = [1, 2, 3, 4];
array_push($arr9, 'buffge');
echo '<p><span class="red">数组末尾添加 / 删除元素</span>array_push(数组,元素)/array_pop(数组,元素)'
 . '原数组$arr9=[1,2,3,4]---array_push($arr9,\'buffge\')后<br/>$arr9= ';
foreach ($arr9 as $key => $value) {
    echo $value . '&nbsp;';
}
echo '</p><hr/>';
$arr10 = file("$doc_root/../logs/newlog.txt");
echo '<p><span class="red">打开文件复制到数组</span> file(地址[,标记])<br/>$arr10=file("$doc_root/../logs/newlog.txt")--$arr10的第一行为: '
 . $arr10[0] . '</p><hr/>';
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
echo '<p><span class="red">字符串分割为数组</span>explode(分隔符,字符串)当前$data=\'foo:*:1023:1000::/home/foo:/bin/sh\'<br/>';
$data_new = explode(':', $data);
echo 'explode(\':\', $data)后 $data=<br/>';
foreach ($data_new as $key => $value) {
    if ($value !== '') {
        echo '$data[' . $key . ']= ' . $value . '<br/>';
    }
}
echo '</p><hr/>';
echo '<p><span class="red">批量处理数组元素</span>array_walk(数组,自定义函数[,参数])'
 . ' 当前$arr11=[q,w,e,r];array_walk($arr11,\'arr_oper\',\'_new\')后<br/>$arr11= ';
function arr_oper(&$value, $key, $data) {//这里用引用地址才能修改原数组值
    $value .= $data;
    $key .= null; //netbeans报警告看着不爽

}

$arr11 = ['q', 'w', 'e', 'r'];
array_walk($arr11, 'arr_oper', '_new');
foreach ($arr11 as $key => $value) {
    echo $value . '&nbsp;';
    if ($key !== 3) {
        echo ',';
    }
}
echo '------------------arr_oper()为数组的每一个值加上 _new 后缀</p><hr/>';
$arr12 = [1, 1, 1, 2, 22, 2, 3, 3, 4];
$calc_arr12 = array_count_values($arr12);
echo '<p><span class="red">统计数组内值出现频率</span>: array_count_values()--$arr12=[1,1,1,2,22,2,3,3,4]<br/>'
 . '$calc_arr12= array_count_values($arr12)后:</p>';
echo '<table id="array_count_values"><tr><td colspan="2">频率统计</td></tr>'
 . '<tr><td>元素</td><td>出现次数</td></tr>';
foreach ($calc_arr12 as $key => $value) {
    echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
}
echo '</table><hr/>';
$q2 = 14;
$arr13 = ['z' => 12, 'q2' => 13];
extract($arr13, EXTR_PREFIX_SAME, 'err'); //EXTR_PREFIX_SAME 跟前面变量有冲突时加前缀; EXTR_PREFIX_ALL 所有都加前缀
echo'<p><span class="red">数组键转换为变量</span>--extract($arr13,EXTR_PREFIX_SAME,\'err\'),当与前面变量有冲突时加前缀err_;'
 . '当数组键值为数字或者其中包含空格将被跳过 当前$arr13=' . "['z'=>12,'q2'=>13]"
 . '前面已经定义$q2=14;转换之后新建2个变量如下:<br/>';
foreach ($arr13 as $key => $value) {
    $e_key = 'err_' . $key;
    echo!isset($$e_key) ? '$' . $key . '=>' . $$key . '<br/>' : '$' . $e_key . '=>' . $$e_key . '<br/>';
}
echo '</p><hr/>';
$arr14 = '   helloworld';
echo '<p><span class="red">去除空格</span>trim()----$arr14=\'&nbsp;&nbsp;&nbsp;hello wordl\'---直接输出$arr14= ' . $arr14 . ';trim($arr14)后:<br/> '
 . '$arr14= ' . trim($arr14) . '</p><hr/>'; //需要在html源代码中看效果
$arr15 = 'hello
            world';
echo '<p><span class="red">用&lt;br/&gt;代替源代码中的换行</span>---nl2br()---使用nl2br()前: $arr15= ' . $arr15 . '<br/>'
 . '使用之后: $arr15= ' . nl2br($arr15) . '</p><hr/>';
$arr16 = 'heLLo world';
echo '<p><span class="red">字符串大小写转换函数</span>: 当前$arr16=\'heLLo world\'<br/>'
 . '字符串转换成大写:strtoupper($arr16)= ' . strtoupper($arr16) . '<br/>'
 . '字符串转换成小写:strtoupper($arr16)= ' . strtolower($arr16) . '<br/>'
 . '字符串第一个字符转换成大写:ucfirst($arr16)= ' . ucfirst($arr16) . '<br/>'
 . '字符串每一个单词转换成大写:ucfirst($arr16)= ' . ucwords($arr16) . '<br/></p><hr/>';
$arr17 = ['hello', 'world'];
$arr18 = join("---", $arr17);
echo '<p><span class="red">一维数组转为字符串</span>join(分离符,数组).当前$arr17=' . "['hello','world']<br/>"
 . '$arr18=join("---",$arr17)之后 $arr18: ' . $arr18 . '&nbsp;,&nbsp; gettype($arr18)=' . gettype($arr18) . '</p><hr/>';
$string1 = "This is\tan example\nstring";
echo '<p><span class="red">字符串按需分离</span>strtok() 当前$string1=This is\tan example\nstring--分割完后:<br/>';
$tok = strtok($string1, " \n\t");
while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}
echo '</p><hr/>';
$arr19 = 'hello world';
$arr20 = substr($arr19, 2, 5);
echo '<p><span class="red">返回字符串特定位置的数量字符</span> substr(字符串,起点,个数) 当前$arr19=\'hello world\'<br/>'
 . '$arr20=substr($arr19,2,5); $arr20= ' . $arr20 . '</p><hr/>';
echo'<p><span class="red">字符串比较</span>strcmp(str1,str2) 此函数区分大小写;strcasecmp()则是不区分大小写--strnatcmp()是按照自然排序,就是13将后排在3的后面<br/>';
$arr21 = [['hello', 'world'], ['nihao', 'nishi'], ['13', '3'], [' kongge', 'kongge'], ['buffge', 'buffge']];
foreach ($arr21 as $key => $value) {
    switch (strcmp($arr21[$key][0], $arr21[$key][1])) {
        case 0:echo $arr21[$key][0] . '和' . $arr21[$key][1] . '完全一致<br/>';
            break;
        case 1:echo $arr21[$key][0] . '排序在' . $arr21[$key][1] . '后面<br/>';
            break;
        case -1:echo $arr21[$key][0] . '排序在' . $arr21[$key][1] . '前面<br/>';
            break;
    }
}
echo'</p><hr/>';
echo '<p><span class="red">字符串长度</span>strlen(\'buffge\')= ' . strlen('buffge') . '</p><hr/>';
echo '<p><span class="red">查找字符串</span><br/>strstr(\'heloolo\',\'l\')= ' . strstr('heloolo', 'l') .
 ' &nbsp;如果存在一个查询字符串则返回查询的字符串,如果有多个则返回第一个查询字符串后面的所有;'
 . '<br/>stristr()就是不区分大小写;strrchr()只返回最后一个要查询的字符串<b>并且needle只接受一个字符</b> strrchr(\'hahaha\',\'h\')= '
 . strrchr('hahaha', 'h') . '<br/>needle可以为ASCll码 比如 10=\\n,39=\\\',9=\\t等等</p><hr/>';
echo '<p><span class="red">查询字符串出现的位置</span>strpos(haystack,needle,开始查询的位置): 字符串首次出现的位置,strrpos()表示最后一次出现的位置;<br/>'
 . 'strpos(\'hello world\',\'o\',5)= ' . strpos('hello world', 'o', 5) . '</p><hr/>';
$arr22 = '吴伟是个呆逼,很sb,还很2b!';
$arr23 = ['呆逼', 'sb', '2b'];
echo '<p><span class="red">子字符串替换函数</span>str_replace($arr23,\'**\',$arr22,$num4)= '
 . str_replace($arr23, '**', $arr22, $num4) . ' 其中优雅词汇共被替换了' . $num4 . '次.</p><hr/>';
$var = 'ABCDEFGH:/MNRPQR/';
echo "<p><span class='red'>替换字符串的子串</span>substr_replace(haystack,needle,开始位置,长度);<br/>原始值:$ var= $var<br/>";
/* 这两个例子使用 "bob" 替换整个 $var。 */
echo "" . substr_replace($var, 'bob', 0) . "<br/>"; //从0开始 替换所有
echo"substr_replace($ var, 'bob', 0, strlen($ var))= " . substr_replace($var, 'bob', 0, strlen($var)) . "<br/>"; //从0开始替换所有
/* 将 "bob" 插入到 $var 的开头处。 */
echo'substr_replace($var, \'bob\', 0, 0)= ' . substr_replace($var, 'bob', 0, 0) . "<br/>"; //从0开始替换0个 就是直接加到开头 从-1开始替换0个 就是直接加到末尾
/* 下面两个例子使用 "bob" 替换 $var 中的 "MNRPQR"。 */
echo'substr_replace($var, \'bob\', 10, -1)= ' . substr_replace($var, 'bob', 10, -1) . "<br/>"; //-1表示直接从第10个替换到末尾
echo'substr_replace($var, \'bob\', -7, -1)= ' . substr_replace($var, 'bob', -7, -1) . "<br/>";
/* 从 $var 中删除 "MNRPQR"。 */
echo'substr_replace($var, \'\', 10, -1)= ' . substr_replace($var, '', 10, -1) . "<br/><hr/>";
$arr24 = 'http://www.php.net/index.html';
echo'<p><span class="red">正则表达式</span><br/> preg_match(表达式,源字符串,输出数组):匹配一次目标字符串 <br/>'
 . '当前 $arr24=\'http://www.php.net/index.html\'<br/>'
 . "preg_match('#^(http://)?([a-zA-Z0-9]+)\.([a-zA-Z0-9]+)\.([a-zA-Z0-9]+)/(?&lt;file_name&gt;.+)$#i'," . '$arr24, $matches)后:<br/>';
preg_match('#^(http://)?([a-zA-Z0-9]+)\.([a-zA-Z0-9]+)\.([a-zA-Z0-9]+)/(?<file_name>.+)$#i', $arr24, $matches);
echo '协议名是: $matches[1]= ' . $matches[1] . '<br/>'      //匹配结果=$matches[0],第一个括号内为$matches[1],第2个括号内为$matches[2]...
 . '二级域名是: $matches[2]= ' . $matches[2] . '<br/>'
 . '域名后缀是: $matches[4]= ' . $matches[4] . '<br/>'
 . '网页文件名是: $matches[\'file_name\']= ' . $matches['file_name'] . '<br/>'
 . '网页文件名是: $matches[5]= ' . $matches[5] . '<br/><br/>'
 . 'preg_match_all()为匹配多次目标字符串:<br/>当前$arr25=\'shfjy18011112222345uiouerkDF1515555666ruiup.,!@#@$@%^&18811110000\'<br/>';
$arr25 = 'shfjy18011112222345uiouerkDF15155556666ruiup.,!@#@$@%^&18811110000';
preg_match_all('/1\d{10}/', $arr25, $matches);
echo'preg_match_all(\'/1\d{10}/\', $arr25, $matches)后 输出:<br/>'
 . '$matches[0][0]= ' . $matches[0][0] . '<br/>'
 . '$matches[0][1]= ' . $matches[0][1] . '<br/>'
 . '$matches[0][2]= ' . $matches[0][2] . '<br/><br/>';
$mail_4 = ['qwe.234.sd', '234saf@weq.com', '151589823@12qw.cn', 'sdf234@q.com'];
echo '匹配邮箱是否符合格式: 当前$mail_4=' . "['qwe.234.sd','234saf@weq.com','151589823@12qw.cn','sdf234@q.com']<br/>"
 . "preg_match('/[a-z0-9]{2,}@[a-z0-9]{2,}\.[com|cn|net]/i', " . '$value)后<br/>';
foreach ($mail_4 as $key => $value) {
    if (preg_match('/[a-z0-9]{2,}@[a-z0-9]{2,}\.[com|cn|net]/i', $value)) {
        echo $value . ' 是一个正确的邮箱格式<br/>';
    }
    else {
        echo $value . ' 不是一个正确的邮箱格式<br/>';
    }
}
$arr26 = '吴伟是个呆逼,很sb,还很2b!';
$zanghua = ['/呆逼/', '/sb/', '/2b/'];
$arr27 = preg_replace($zanghua, '**', $arr26);
echo '<br/>替换字符串preg_replace(表达式字符串|数组,替换值,原始字符串|数组)当前$arr26=\'吴伟是个呆逼,很sb,还很2b!\'<br/>'
 . '$arr27=preg_replace($zanghua,\'**\',$arr26)后:<br/>$arr27= ' . $arr27 . '<br/><br/>';
$str2 = 'admin@buffge.com';
$str3 = preg_split('/[@.]/', $str2);
echo '分割字符串: preg_split() 当前$str2=\'admin@buffge.com\'-----$str3= preg_split(\'/[@.]/\', $str2)后:<br/>';
foreach ($str3 as $key => $value) {
    echo '$str3[' . $key . '] = ' . $value . '<br/>';
}
echo '</p><hr/>';
require 'include/kkk.inc.php';
echo '<p><span class="red">变量名区分大小写,函数名不区分</span></p><hr/>';
function func1() {
    echo '当前传入了func_num_args():' . func_num_args() . ' 个参数<br/>第一个参数是func_get_args()[0]= ' . func_get_args()[0] . '<br/>'
    . '第三个参数为 func_get_arg(2): ' . func_get_arg(2) . '<br/>';

}

echo '<p><span class="red">获取函数传入参数</span> func_num_args():返回传入参数个数--func_get_arg(下标)<br/>'
 . '执行func1(520,13,14)后:<br/>';
func1(520, 13, 14);
echo '</p><hr/>';
$glo = '111';
function func2() {
    $temp1 = &$GLOBALS['glo'];
    global $glo;
    $glo = '222';
    return $temp1;

}

$use_glo = func2();
echo'<p><span class="red">函数内部使用和定义全局变量</span> $GLOBAL[\'name\']使用全局变量,global $name;定义全局变量<br/>'
 . '当前$glo=\'111\',执行func2()后: $glo= ' . $glo . ' 函数内部使用全部变量$GLOBALS[\'glo\']= ' . $use_glo . '</p><hr/>';
function reverse_str(&$param) {
    $param2 = substr($param, 0, 1);
    if (strlen($param) > 0) {
        $temp = substr($param, 1);
        reverse_str($temp);
        $param3 = substr($param, 1);
        $param3 .= $param2;
    }
    if (isset($param3)) {
        $param = $param3;
    }

}

$str4 = 'buffge';
reverse_str($str4);
echo '<p><span class="red">递归函数</span>: 颠倒一个字符串  当前$str4=\'buffge\'<br/>reverse_str($str4)后:<br/>'
 . '$str4= ' . $str4 . '<br/><hr/>';
const STR5 = '少壮不努力,老大徒伤悲';
use buff as b;

function weight($value) {
    return "大陆的{$value}斤是 " . (500 * $value) . '克.';

}

echo '<p><span class="red">命名空间</span> 当前脚本中const STR5=\'少壮不努力,老大徒伤悲\';输出STR5= ' . STR5
 . '<br/>echo buff\STR5= ' . buff\STR5 . '<br/> use 空间名 as 别名:<br/>use buff as b 后: echo buff\STR5===echo b\STR5<br/><br/>'
 . '当前脚本中运行函数 weight(5)输出为: ' . weight(5) . '<br/>echo b\weight(5)= ' . b\weight(5) . '<br/></p><hr/>';
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*
 *                                 类,对象                                          * 
 * ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
$destruct_control = 0;
//小狗对象的基类
class dog
{
    protected
            $color;
    protected
            $weight;
    function __construct($color = 'white', $weight = 5) {
        echo '你创建了一只小狗<br/>';
        $this->color = $color;
        $this->weight = $weight;

    }

    function __destruct() {
        if ($GLOBALS['destruct_control'] === 1) {
            return;
        }//如果不控制一下,脚本结束会自动执行 所有html最下面2行会执行2次
        echo '你销毁了一只狗<br/>';

    }

    function __set($name, $value) {
        $this->$name = $value;

    }

    function __get($name) {
        return isset($this->$name) ? $this->$name : null;

    }

    function speak() {
        return '汪汪汪!';

    }

    function eat($food) {
        return $food === 'dog_bone' ? 'CAO 我才不吃这个呢' : '谢谢主人';

    }

}

echo '<p><span class="red">类与对象</span>:<br/>'
 . '<span class="red mar_l_30">构造函数</span>: $dog1=new dog()后 自动执行dog类中的构造函数:<br/>$dog1=new dog()后 ';
$dog1 = new dog();
echo '<span class="red mar_l_30">构析函数</span>: 销毁一个对象后自动执行-----<span class="purple">构析函数不能带参数</span><br/>unset($dog1)后 ';
unset($dog1);
$destruct_control++;
$dog2 = new dog('red');
echo '当前小狗对象具有的属性: 颜色,体重; 具有的方法/功能: 叫,吃,获取属性,设置属性;<br/>$dog2=new dog(\'red\')后:'
 . '<br/>创建了一个红颜色的小狗,体重是默认的5斤.现在使用小狗的方法:<br/>'
 . '小狗的颜色是: ' . $dog2->color . '<br/>'
 . '小狗的体重是: ' . $dog2->weight . '<br/>'
 . '小狗叫:$dog2->speak();--' . $dog2->speak() . '<br/>'
 . '给小狗吃猪骨头:$dog->eat(\'pig_bone\')--' . $dog2->eat('pig_bone') . '<br/>'
 . '给小狗吃狗骨头:$dog->eat(\'dog_bone\')--' . $dog2->eat('dog_bone') . '<br/><br/>';
//哈士奇类
class haShiQi extends dog
{
    protected
            $type = 'hashiqi';
    protected
            $name = '11';
    function speak() {
        return '老子不想叫,给你一个眼神自己体会';

    }

    function parSpeak() {
        return parent::speak();

    }

    function eat($food = '') {
        return !empty(trim($food)) ? '放这块我等会吃' : '你要让我吃空气呀?';

    }

    function __clone() {
        
    }

}

echo '<span class="red mar_l_30">类继承</span>: class haShiQi extends dog{...}--哈士奇对象继承了dog的属性'
 . "\$dog3=new haShiQi('黑白', '20')后:<br/>";
$dog3 = new haShiQi('黑白', '20');
echo '小狗的颜色是: ' . $dog3->color . '<br/>'
 . '小狗的体重是: ' . $dog3->weight . '<br/>'
 . '小狗叫:$dog3->speak();--' . $dog3->speak() . '<br/>'
 . '给小狗吃猪骨头:$dog3->eat(\'pig_bone\')--' . $dog3->eat('pig_bone') . '<br/>'
 . '给小狗什么都不吃:$dog3->eat()--' . $dog3->eat() . '<br/>';
$dog3->name = '智障1号';
echo '设置小狗的名字$dog3->name = \'智障1号\')后: 小狗的名字是: ' . $dog3->name . '<br/><br/>'
 . '调用父类的原始方法parent::函数名(); $dog3->parSpeak();= ' . $dog3->parSpeak() . '<br/><br/>'
 . '<span class="red mar_l_30">final 禁止继承与重载</span> :<br/>final class A{...}: 类A无法被其他类继承<br/>'
 . '类中的final function b(){..} : 类中的函数b 无法被子函数覆盖<br/><br/>';
//猫基类
class cat
{
    static
            function speak() {
        return '喵喵喵~';

    }

    const
            DEFAULT_NAME = '小白';
}

echo'<span class="red mar_l_30">静态方法</span> :意思就是没有实例化这个对象就可以直接用类中的这个方法;<br/>'
 . '现在没有实例化class cat;直接echo cat::speak();= ' . cat::speak() . '<br/>'
 . '类中的const常量也可以未经实例化就直接调用 比如echo cat::DEFAULT_NAME;= ' . cat::DEFAULT_NAME . '<br/><br/>';
echo '<span class="red mar_l_30">接口</span> : interface 接口名{ 定义常量以及需要实现的方法}----<span class="purple">接口可以继承多个接口</span><br/>'
 . '实现接口 class A implements 接口1,2,3{..}<br/>定义一个car 类, 3个接口 高 中 低档类型.奥迪需要继承全部接口,奥拓只需继承 低档的接口<br/>';
//低档车接口
interface low_grade_car
{//低档车只要能开就行
    const
            SPEED = 100;
    public
            function drive();
}

//中档车接口
interface medium_grade_car
{//中档车还要能睡觉
    const
            SPEED = 200;
    public
            function drive();
    public
            function sleep();
}

//高档车接口
interface high_grade_car
{//高档的要能撞别人
    const
            SPEED = 300;
    public
            function drive();
    public
            function sleep();
    public
            function attack($target);
}

//车基类
class car
{
    protected
            $speed;
    protected
            $weight;
    function __construct() {
        $this->speed = $this::SPEED;
        $this->weight = $this::$weight_s;

    }

    function __set($name, $value) {
        $this->$name = $value;

    }

    function __get($name) {
        return isset($this->$name) ? $this->$name : null;

    }

    static
            function classtype() {
        return __CLASS__;

    }

    public static
            function check() {
        $type = static::classtype(); //延迟绑定静态类名
        $check_car_function = ['sleep', 'attack'];
        foreach ($check_car_function as $value) {
            echo method_exists($type, $value) ? '能' . $value . '&nbsp;' : '不能' . $value . '&nbsp;';
        }
        echo ' 最高速度是 ' . $type::SPEED . ' 重量为' . $type::$weight_s . '吨<br/>';

    }

}

//奥拓类
class aotuo extends car implements low_grade_car
{
    static
            $weight_s = 2;
    public
            function drive() {
        return '我正在已' . $this->speed . '速度开车';

    }

    static
            function classtype() {
        return __CLASS__;

    }

}

//本田类
class bentian extends car implements medium_grade_car
{
    static
            $weight_s = 3;
    public
            function drive() {
        return '我正在已' . $this->speed . '速度开车';

    }

    public
            function sleep() {
        return '窗户已经关好了,可以睡觉了';

    }

    static
            function classtype() {
        return __CLASS__;

    }

}

//奥迪类
class aodi extends car implements high_grade_car
{
    static
            $weight_s = 5;
    public
            function drive() {
        return '我正在已' . $this->speed . '速度开车';

    }

    public
            function sleep() {
        return '窗户已经关好了,可以睡觉了';

    }

    public
            function attack($target) {
        return '正在撞 ' . $target;

    }

    static
            function classtype() {
        return __CLASS__;

    }

}

echo '现在未实例化aodi类,执行aodi::check();检查车配置 : method_exists(\'aodi\',\'sleep&attack\')<br/>'
 . '<span class="red">检验类中方法是否存在</span> method_exists():<br/>';
echo 'aodi车:&nbsp;';
aodi::check();
echo'bentian车:&nbsp;';
bentian::check();
echo'aotuo车:&nbsp;';
aotuo::check();
echo '<br/>';
$aoti_1 = new aodi();
$bentian_1 = new bentian();
echo '$aodi_1执行drive()方法: ' . $aoti_1->drive()
 . '<br/>$bentian_1执行sleep()方法 : ' . $bentian_1->sleep()
 . '<br/>$aodi_1执行attack(\'$bentian_1\')方法 : ' . $aoti_1->attack('$bentian_1') . '这辆车<br/><br/>';
echo'<span class="red mar_l_30">检查对象是否属于某个类</span>: $a instanceof dog,检查$a是否属于dog类,或者继承了dog类,或者实现了dog接口<br/>'
 . '一号奥迪车是否是aodi类的实例? echo $aoti_1 instanceof aodi?\'是\':\'否\'----------------------------------------'
 . ($aoti_1 instanceof aodi ? '<span class=\'trorfal\'>是</span>' : '<span class=\'trorfal\'>否</span>') . '<br/>'
 . '一号本田车是否是aodi类的实例? echo $bentian_1 instanceof aodi?\'是\':\'否\'------------------------------------'
 . ($bentian_1 instanceof aodi ? '<span class=\'trorfal\'>是</span>' : '<span class=\'trorfal\'>否</span>') . '<br/>'
 . '一号本田车是否是bentian类的实例? echo $bentian_1 instanceof bentian?\'是\':\'否\'-----------------------------'
 . ($bentian_1 instanceof bentian ? '<span class=\'trorfal\'>是</span>' : '<span class=\'trorfal\'>否</span>') . '<br/>'
 . '一号本田车是否继承了car类? echo $bentian_1 instanceof car?\'是\':\'否\'------------------------------------------'
 . ($bentian_1 instanceof car ? '<span class=\'trorfal\'>是</span>' : '<span class=\'trorfal\'>否</span>') . '<br/>'
 . '一号本田车是否实现了high_grade_car接口? echo $bentian_1 instanceof high_grade_car?\'是\':\'否\'-------------'
 . ($bentian_1 instanceof high_grade_car ? '<span class=\'trorfal\'>是</span>' : '<span class=\'trorfal\'>否</span>') . '<br/>'
 . '一号本田车是否实现了medium_grade_car接口? echo $bentian_1 instanceof medium_grade_car?\'是\':\'否\'-----'
 . ($bentian_1 instanceof medium_grade_car ? '<span class=\'trorfal\'>是</span>' : '<span class=\'trorfal\'>否</span>') . '<br/><br/>';
echo '<span class="red">函数参数类型限制</span>: function a(HaShiQi $arg){..} 表示接受的参数必须是哈士奇类的实例.如果不是将产生致命错误.<br/>';
is_Hsq($dog3);
function is_Hsq(HaShiQi $arg) {
    echo '你输入了的$dog3是哈士奇类的实例! $arg->type = ' . $arg->type . ' 如果输入的不是哈士奇实例,脚本会终止<br/><br/>';

}

class A1
{
    static
            $className;
    static
            function getname() {
        static::$className = __CLASS__;
        return static::$className;

    }

    static
            function bind() {
        return static::getname(); //使用static 就是延迟静态绑定,等到执行bind再绑定getname

    }

}

class B1 extends A1
{
    static
            function getname() {
        static::$className = __CLASS__;
        return static::$className;

    }

}

echo '<span class="red mar_l_30">延迟静态绑定</span>继承父类的,延迟绑定父类中的静态属性<br/>'
 . '没有延迟绑定时候B1类获取$className= A1<br/>延迟绑定后: ';
echo '$className= ' . B1::bind() . '<br/><br/>';
class hand
{
    public
            $finger_num;
    public
            function __construct($value) {
        $this->finger_num = $value;

    }

}

class person
{
    public
            $name;
    public
            $finger;
    function __construct($arg, hand $hand) {
        $this->name = $arg;
        $this->finger = $hand;

    }

}

$per1 = new person('buffge', new hand(5));
$per2 = clone $per1;

echo '<span class="red mar_l_30">克隆对象</span>  $per2 = clone $per1;<br/>现在:<br/>$per1->finger->finger_num = ' . $per1->finger->finger_num
 . '<br/>$per1->finger->finger_num = ' . $per1->finger->finger_num . '<br/>$per1->name = ' . $per1->name . '<br/>$per2->name = ' . $per1->name
 . '<br/>此时$per1&$per2的$finger都是同一个对象,如果修改了任意一个的手指数量就等于间接修改了 hand实例的值.现在$per2->finger->finger_num= 6;后:<br/>';
$per2->finger->finger_num = 6;
echo '$per1->finger->finger_num = ' . $per1->finger->finger_num;
class hand2 extends hand
{
    
}

class person2 extends person
{
    public
            function __clone() {
        $this->finger = clone $this->finger;

    }

}

$per2_1 = new person2('buffge', new hand2(5));
$per2_2 = clone $per2_1;
echo '现在新创建hand2 和person2类,在person2类中设置__clone()函数,当person2被克隆时自动调用;<br/> '
 . '在__clone中直接设置克隆实例的finger实例为本体finger实例的复制值 ,而不是使用本体的引用值.这样修改克隆实例就不会影响到本体<br/>'
 . '当前$per2_1=new person2(\'buffge\',new hand2(5));$per2_2 =clone $per2_1<br/>信息对比:<br/>$per2_1->finger->finger_num = ' . $per2_1->finger->finger_num
 . '<br/>$per2_2->finger->finger_num = ' . $per2_2->finger->finger_num . '<br/>$per2_1->name = ' . $per2_1->name . '<br/>$per2_2->name = ' . $per2_2->name;
$per2_2->finger->finger_num = 6;
echo '<br/>修改$per2_2的手指数量---$per2_2->finger->finger_num= 6 ;<br/>现在:<br/>'
 . '$per2_1->finger->finger_num = ' . $per2_1->finger->finger_num . '<br/>$per2_2->finger->finger_num = ' . $per2_2->finger->finger_num . '<br/><br/>';
echo'<span class="red mar_l_30">抽象类</span> : abstract class ClassName{...} ------抽象方法 abstract (protected|public) fun_name(){..} <br/>'
 . '就是定义一个不能被实例化的类,类中的抽象方法必须要重写.比如定义一个抽象car类.这个car类不能被实例化;<br/>'
 . '但是他里面有一些其他比如奥迪,奔驰,大众等等车类需要重复调用的方法,以及一些必须要实现的方法(抽象方法)'
 . '<br/>比如 drive(), 就是让后面继承的车必须要有开车这个方法.<br/><br/>';
class overload
{
    public
            function __call($name, $arg) {
        if ($name == 'what') {
            if (is_array($arg)) {
                return '这是一个数组';
            }
            elseif (is_string($arg)) {
                return '这是一个字符串';
            }
        }

    }

}

$overload1 = new overload;
echo '<span class="red mar_l_30">类方法重载</span> __call();'
 . '<br/>$overload1=new overload; $overload1->what([1]) = ' . $overload1->what([1])
 . '<span class="purple">&nbsp;&nbsp;需要被重载的函数在类中不能被定义</span><br/><br/>';
class autoload
{
    public
            function loader() {
        
    }

    public
            function __construct() {//设置引入地址,可多个
        //这里$this 表示这个函数是这个类里面的,如果是全局的就不用了
        spl_autoload_register([$this, 'my_autoload1']);
        spl_autoload_register([$this, 'my_autoload2']);

    }

    function my_autoload1($val) {
        $adress = "include/class/{$val}.class.php";
        if (is_file($adress)) {
            require $adress;
        }

    }

    function my_autoload2($val) {
        $adress = "include/{$val}.php";
        if (is_file($adress)) {
            require $adress;
        }

    }

}

$autoload1 = new autoload();
$pig1 = new pig();
$bird1 = new bird();
echo '<span class="red mar_l_30">自动加载类</span>spl_autoload_register(函数):可以注册多个自动载入;<br/>'
 . '当前脚本中pig类未定义. new pig后 : 因为当前脚本不存在pig类 所以会自动调用SPL __autoload函数队列中的函数 <br/>'
 . '$pig1->gettype()= $pig1的类型是 : ' . $pig1->gettype() . '<br/>'
 . '$bird1->gettype()= $bird1的类型是 : ' . $bird1->gettype() . '<br/>';
$info = new ReflectionClass(get_class($pig1));
echo '<span class="red mar_l_30">类的反射API</span>ReflectionClass 类: 前面$pig1的原始类文件不在当前脚本中.<br/>'
 . '使用 $info= new ReflectionClass(get_class($pig1));echo $info;= '
 . '<span class="purple"> 太长不写 this以及此api常用功能 用放在console里了</span><br/><span id="hidden">' . $info . '</span>';
require 'include/reflection_api_mes.inc.php';
echo '<script>var info =document.getElementById( \'hidden\').innerHTML,refl="' . $reflection_api_mes
 . '";console.log("++++++++++++++++++++这是$pig1的类信息++++++++++++++++++++\n"'
 . '+info+"--------------------$pig1类信息结束--------------------\n'
 . '++++++++++++++++++++这是反射api基础的的信息++++++++++++++++++++\n"+refl+'
 . '"--------------------反射api基础的的信息结束--------------------\n");</script>';
define('NOW_TIME', date('Y\年n\月j\日H:i:s D', time()));
class A2
{
    public
            $name = 'A1';
    public
            $time = NOW_TIME;
    public
            function __toString() {
        return var_export($this, true);

    }

}

$a2_1 = new A2();
echo '<span class="red mar_l_30">__string():将类转换成字符串</span> echo 对象时候自动调用;<br/>'
 . '<span class="red">输出或返回一个变量的字符串表示</span>: var_export($obj,true/false):false:返回php代码'
 . 'true:返回变量的表示(字符串值)<br/>$a2_1的类属性为 : ' . $a2_1 . '<br/></p><hr/>';

echo '<p><span class="red">异常处理</span> : try{ throw new exception($mes , $e_num ) } catch($e){..}<br/>
        现在$undefine_1变量不存在,然后执行 try{如果变量不存在 抛出异常} 处理异常-处理结果如下:<br/>';
try {
    if (!isset($undefine_1)) {
        throw new Exception('$undefine_1变量未定义', 1);
    }
}
catch (Exception $e) {
    echo 'Exception : <br/>错误信息:' . $e->geTMessage() . '<br/>
          错误行号 : ' . $e->getLine() . '<br/>
          异常脚本文件地址 : ' . $e->getFile() . '<br/>
          异常错误代码 : ' . $e->getCode() . '<br/>';
}
echo '<span class="red mar_l_30">自定义异常类</span> 只可以覆盖__string以及新函数;
<br/>判断数组以及字符串异常 : <br/>';
$arr28 = ['min'];
class exception_str extends Exception
{
    function __tostring() {
        return $this->message . '不是一个字符串<br/><hr/>';

    }

}

try {
    if (!is_string($arr28)) {
        throw new exception_str('$arr28');
    }
}
catch (exception_str $e) {
    echo $e;
}
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*
 *                                 mysql                                            * 
 * ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
echo '<h2 id="mysql">Mysql</h2>';
echo "<p><span><span class='red'>连接到数据库</span> :
\$mysqli=new mysqli('localhost','buffge','daimin','knote');<br/></span>";
$mysqli = new mysqli('localhost', 'buffge', 'daimin', 'knote');
if ($mysqli->connect_errno) {//有错误返回作物代号,没错误返回0
    die('<span class="blue">链接数据库失败</span><br/>错误信息 : ' . $mysqli->connect_error);
}
//++++++++++++++++++++++++++++增 删 改 查 开始+++++++++++++++++++++++++++++++++++
echo '<span><span class="red">Create增</span> : <br/>
    <span class="red mar_l_30">创建表</span>:
    $sql=\'create table if not exists `temp`(`id` int(9) unsigned auto_increment, primary key(`id`))\'<br/>';
$sql = 'create table if not exists `temp`(`id` int(9) unsigned auto_increment, primary key(`id`))';
if (!$mysqli->query($sql)) {
    die('<span class="blue">创建表失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo'<span class="red mar_l_30">增加字段</span> : 
    $sql2=\'alter table `temp` add `user` char(10) NOT NULL after `id`\'<br/>';
$sql2 = 'alter table `temp` add `user` char(10) NOT NULL after `id`';
if (!$mysqli->query($sql2)) {
    die('<span class="blue">增加字段失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo'<span class="red mar_l_30">插入值</span> : 
    $sql3=insert into temp(`id`,`user`) values(1 ,\'buffge\')<br/>';
$sql3 = 'insert into `temp`(`id`,`user`) values("1" ,"buffge")';
if (!$mysqli->query($sql3)) {
    die('<span class="blue">插入值失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo '</span>';
echo '<span><span class="red">Update改</span><br/>';
echo'<span class="red mar_l_30">修改一行值</span> : 
    $sql4=UPDATE `temp` set `id`=2 ,`user`="buffge" where `id`=1<br/>';
$sql4 = 'UPDATE `temp` set `id`=2 ,`user`="daimin" where `id`=1';
if (!$mysqli->query($sql4)) {
    die('<span class="blue">修改一行值失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo'<span class="red mar_l_30">修改字段</span> : 
    $sql5=ALTER TABLE `temp` CHANGE `id` `num` INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
    CHANGE `user` `name` CHAR(10) NOT NULL; <br/>';
$sql5 = 'ALTER TABLE `temp` CHANGE `id` `num` INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
    CHANGE `user` `name` CHAR(10) NOT NULL';
if (!$mysqli->query($sql5)) {
    die('<span class="blue">修改字段失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo'<span class="red mar_l_30">修改表名</span> : 
        $sql6=alter table `temp` rename `user_messages`;<br/>';
$sql6 = 'alter table `temp` rename `user_messages`';
if (!$mysqli->query($sql6)) {
    die('<span class="blue">修改表名失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo'</span>';
echo '<span><span class="red">Retrieve查</span><br/>';
echo'<span class="red mar_l_30">查第一行的name值</span> : 
    $sql7=select name from user_messages where `num`=2';
$sql7 = 'select name from user_messages where `num`=2';
$res = $mysqli->query($sql7);
if (!$res) {
    die('<span class="blue">查询第一行值失败</span><br/>错误信息 : ' . $mysqli->error);
}
$row = $res->fetch_assoc();
echo ' -------------name : ' . $row['name'] . '<br/>';

echo'<span class="red mar_l_30">查询第一行的字段(键)名</span> : 
    $sql8=select * from user_messages limit 0,1';
$sql8 = 'select * from user_messages limit 0,1';
$res2 = $mysqli->query($sql8);
if (!$res2) {
    die('<span class="blue">查询键名失败</span><br/>错误信息 : ' . $mysqli->error);
}
$row2 = $res2->fetch_array();
echo ' -------------键名 : ' . $row2[0] . '<br/>';
echo'<span class="red mar_l_30">查询表名</span> : 
    $sql9=select table_name from information_schema.tables WHERE TABLE_SCHEMA = "knote"';
$sql9 = 'select table_name from information_schema.tables WHERE TABLE_SCHEMA = "knote"';
$res3 = $mysqli->query($sql9);
if (!$res3) {
    die('<span class="blue">查询表名失败</span><br/>错误信息 : ' . $mysqli->error);
}
$row3 = $res3->fetch_array();
echo ' ----表名 : ' . $row3[0] . '<br/></span>'; //因为数据库还有其他表所有第一个为books

echo '<span><span class="red">Delete删</span><br/>';
echo'<span class="red mar_l_30">删除字段</span> : 
    $sql10=alter table `user_messages` drop `name`<br/>';
$sql10 = 'alter table `user_messages` drop `name`';
if (!$mysqli->query($sql10)) {
    die('<span class="blue">删除字段失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo'<span class="red mar_l_30">删除一行值</span> : 
    $sql11=delete from `user_messages` where `num`=2<br/>';
$sql11 = 'delete from `user_messages` where num=2';
if (!$mysqli->query($sql11)) {
    die('<span class="blue">删除一行值失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo'<span class="red mar_l_30">删除表</span> : 
    $sql12=drop table `user_messages`<br/>';
$sql12 = 'drop table `user_messages`';
if (!$mysqli->query($sql12)) {
    die('<span class="blue">删除表失败</span><br/>错误信息 : ' . $mysqli->error);
}
echo '<br/></span>';
//-------------------------增 删 改 查 结束-----------------------------                                     
echo '<span>mysql 查询语句不区分大小写,数据库和表的名称区分 <br/></span></p><hr/>';
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*
 *                                 PHP 高级程序技术                                   * 
 * ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
?>
<h2>php 高级程序技术</h2>
<iframe id="upload" name="upload">
    <?php
    require_once "{$_SERVER['DOCUMENT_ROOT']}/k_note/note/php/process/upFilePro.php";
    ?>
</iframe>

<?php
echo "<p><span class='red'>文件上传</span>:
    <form action='process/upFilePro.php?upload=1' target='upload' method='post' enctype='multipart/form-data'>
    <input type='file' name='userfile[]' multiple='multiple' />
    <input type='submit' value ='提交'/>&nbsp;<span id='is_success'>提交成功</span>
    </form>
    <span>注意点: <br/></span>
    <span>1.input 中添加multiple='multiple'可上传多个文件.<br/></span>
    <span>2.name名称后面加上[]设置上传文件为数组.<br/></span>
    <span>3.上传文件时 form表单中 要添加编码格式为不编码 即:enctype='multipary/form-data'.<br/></span>
    <span>4.处理上传文件的表单可以用iframe 写在一起,这样上传时候就不会跳转,设置form的target为此框架名.<br/></span>
    <span>5.框架中处理确认全部上传成功则调用父框架的js函数,显示上传成功.<br/></span>
    <span class='purple'>上传未设置成事务,有一个上传失败,其他的还是能上传成功.<br/></span>
    <span>6.上传时先判断是否上传成功,然后判断是否为所允许的上传类型,接着判断是否为通过http上传的文件<br/></span>
    <span>最后将临时文件更名并转存到要存放的目录下.(转存到windows系统要iconv(原编码,新编码,字符串))<br/></span>
    <span>将原utf-8编码转换为gbk才能在windows下正确存储中文名</span></p><hr/>
";
$url = 'http://www.buffge.com/index.html?c=main#arcticle';
$newurl = parse_url($url);
echo"<p><span class='red'>网络协议和协议函数:<br/></span>
     <span><span class='red mar_l_30'>解析url函数 :</span>parse_url() 返回url的各部分的数值的数组</span>
     <span>\$url='http://www.buffge.com/index.html?c=main#arcticle'<br/></span>
     <span class='mar_l_30'>\$newurl=parse_url(\$url)---输出如下:<br/></span>";
foreach ($newurl as $key => $value) {
    echo "<span class='mar_l_30'> \$newurl ['" . $key . '\']----' . $value . '<br/></span>';
}
echo '<br/>';
/* FTP 镜像操作
 * $ftpadress = 'bxu994238728.my3w.com';
 * $ftpuser = 'bxu994238728';
 * $ftppass = 'buffge';
 * $ftp_remote_file = '/htdocs/temp/temp.txt';
 * $ftp_loacl_file = $_SERVER['DOCUMENT_ROOT'] . '/../uploads/temp.txt';
 * $ftpcon = ftp_connect($ftpadress);
 * if (!$ftpcon) {
 *    echo '链接ftp失败!<br/>';
 * }
 * $ftp_res = ftp_login($ftpcon, $ftpuser, $ftppass);
 * if (!$ftp_res) {
 *    echo '登录ftp主机失败!';
 * }
 * $remote_file_time = filemtime($ftp_remote_file);
 * $oacl_file_time = filemtime($ftp_loacl_file);
 * if ($remote_file_time > $loacl_file_time) {
 *    $ftp_local = fopen($ftp_loacl_file, 'w');
 *    if (!$ftp_mirror_success = ftp_fget($ftpcon, $ftp_local, $ftp_remote_file, FTP_ASCII )) {
 *        echo '镜像失败!';
 *    }
 *    fclose($ftp_local);
 *    echo '镜像成功!';
 * }
 * ftp_close($ftpcon);
 * FTP 镜像操作结束 */
echo "<span class='red mar_l_30'>使用FTP镜像一个文件:<br/></span> 
    <span class='purple'>镜像失败,不会使用被动模式,能连接,但是无法将文件读取到本地,windows防火墙不会搞<br/></span>";
echo "<span class='red mar_l_30'>防止脚本超时</span><br/>
    <span>脚本默认执行时间是30s.在脚本某处加入se_time_limit(30);就是在此处延时30s 有时候下载需要很长时间</span>";
echo "</p><hr/>";
$nowtime = time();
echo "<p><span class='red'>时间与日期管理:</span><br/>
    <span class='mar_l_30'>获取unix时间戳: time()---{$nowtime}</span><br/>
    <span class='mar_l_30'>将时间转换为unix时间戳:
    mktime(小时,分钟,秒,月,日,年.)--mktime(19,30,0,3,22,1995)=" . mktime(19, 30, 0, 3, 22, 1995) . "</span><br/>
    <span class='mar_l_30'>获取时间:\$today=getdate()返回数组如下:<br/>";
$today = getdate();
foreach ($today as $key => $value) {
    echo "<span class='mar_l_30'>\$today['" . $key . "']===={$value}<br/></span>";
}
echo"</span><br/><span class='purple'>一些不常用的日期函数没学</span></p><hr/>";
echo"<p><span class='red'>创建图像</span> <span class='purple'>暂时pass</span></p><hr/>";
//mail
//if (mail("1515888956@qq.com", "测试标题", "你好这是正文", "From: buff鸽网络<admin@buffge.com>")) {
//    echo "success!";
//} else {
//    echo"falid";
//}

echo"<p><span class='red'>会话控制</span>:<br/>
        <span class='red'>cookie:<br/></span>";
if (isset($_COOKIE['username'])) {
    echo "<span>欢迎您{$_COOKIE['username']}!</span>"
    . "<a class='cookieo' href='javascript:;' target='upload'>退出</a>";
    $cookie_js = "var cookiein = document.getElementsByClassName('cookieo')[0];
        cookiein.onclick = function () {
           this.href = 'process/cookie.php?out=out&y=' + window.pageYOffset; 
        };"; //window.pageYOffset===window.scrollY;这2个是别名,但是ie不支持scrollY
    if (isset($scrollY)) {
        $cookie_js .= "(function(){window.scrollTo(0,{$scrollY})})();";
    }
}
else {
    echo "<span>您当前未登录!"
    . "<a class='cookiei' href='javascript:;' target='upload'>登录</a></span>";
    $cookie_js = "var cookieout = document.getElementsByClassName('cookiei')[0];
        cookieout.onclick = function () {
         this.href = 'process/cookie.php?k=buff鸽&y=' + window.pageYOffset;  
        };";
    if (isset($scrollY)) {
        $cookie_js .= "(function(){window.scrollTo(0,{$scrollY})})();";
    }
}
$_SESSION['username'] = 'buff鸽';
echo"<br/><span class='red'>session:<br/></span>
<span><a style='color:blue;' href='process/session.php' title='session测试'>点击进入欢迎页</a>-----</span>    
<span><a style='color:blue;' href='process/destruct_ses.php' target='upload'>注销会话</a>-----<br/></span>    
<span>直接进入session.php 进不去,当点击进入欢迎页可以进入<br/>因为此页面已经开启会话,注销后,此页面也不可以进入</span>    
</p><hr/>";
$eval_str1 = "echo '这是字符串1<br/>';";
echo"<p><span class='red'>执行字符串 eval()</span>将字符串当做语句 执行.\$eval_str1=\"echo '这是字符串1&lt;br/>;'\";
    <span>eval(\"\$eval_str1\")后:<br/></span>";
eval("{$eval_str1}");
$arr29 = [['赵', '钱'], ['孙', '李']];
echo "<span class='red'>序列化</span>: \$arr29=[['赵','钱'],['孙','李']]</br/>
    echo serialize(\$arr29)== " . serialize($arr29) . "<br/>
    <span class='red'>恢复序列化</span> unserialize()<br/>
    ";
echo "<span class='red'>识别脚本当前运行者</span> get_current_user();-------
    echo get_current_user()==" . get_current_user() . "<br/>";
echo "<span class='red'>识别脚本最近修改日期</span> getlastmod();-------
    echo date('Y-n-d-G:i:s',getlastmod())===" . date('Y-n-d-G:i:s', getlastmod()) . "<br/>";
ini_set('max_execution_time', 120);
echo"<span class='red'>设置php.ini</span> ini.set(): -----ini.set('max_execute_time',120)
    设置脚本 最初运行时间为120s.<br/>得到php.ini的设置 ini.get('max_execute_time')=="
 . ini_get('max_execution_time') . "<br/>";
echo "<span class='red'>源代码高亮</span>show_source('文件.php');<br/>
    show_source('include/show_source.php')= <span class='purple'>输出结果符号变成了全角,空格也是</span><br/>";
$show_source_res = show_source('include/show_source.php', true); //设置为false 就直接输出,true就是返回输出结果
echo $show_source_res;
echo '<hr/>';
//417 调试 2017-2-15-19:00
?>
<p>
    <span class="red">字符串重复函数 str_repeat("要被重复的字符串",要重复的次数)<br/></span>
    <span>str_repeat("-=", 10) &nbsp;<?php echo str_repeat("-=", 10); ?><br/></span>
    <span class="red">查看服务器函数</span> <span>php_sapi_name()<br/></span>
    <span class="mar_l_30">当前使用的服务器是<?php echo php_sapi_name(); ?><br/></span>
    <span class="mar_l_30 purple">apache : apache2handler;<br/></span>
    <span class="mar_l_30 purple">nginx :我没用过,不知道;<br/></span>
    <span class="mar_l_30 purple">php内置:cli-server;<br/></span>
    <span class="red">输出缓冲区</span>
    <span>ob_flush()和flush()<br/></span>
    <span>让程序未执行完先输出前面的内容.这里两个要一起用<br/></span>
    <span class='purple'>类似ajax效果.可以一次输出10个.然后用js 删除前面的.<br/></span>
    <span class='purple'>获取当前脚本所占内存 </span>
    <span>memory_get_usage()<br/></span>
    <span class='red'>phpDOC注释编写格式 :<br/></span>
    <span class='mar_l_30'>/**<br/></span>
    <span class='mar_l_30'>* @name 名字<br/></span>
    <span class='mar_l_30'>* @abstract 申明变量/类/方法<br/></span>
    <span class='mar_l_30'>* @access 指明这个变量、类、函数/方法的存取权限<br/></span>
    <span class='mar_l_30'>* @author 函数作者的名字和邮箱地址<br/></span>
    <span class='mar_l_30'>* @category  组织packages<br/></span>
    <span class='mar_l_30'>* @copyright 指明版权信息<br/></span>
    <span class='mar_l_30'>* @const 指明常量<br/></span>
    <span class='mar_l_30'>* @deprecate 指明不推荐或者是废弃的信息MyEclipse编码设置<br/></span>
    <span class='mar_l_30'>* @example 示例<br/></span>
    <span class='mar_l_30'>* @exclude 指明当前的注释将不进行分析，不出现在文挡中<br/></span>
    <span class='mar_l_30'>* @final 指明这是一个最终的类、方法、属性，禁止派生、修改。<br/></span>
    <span class='mar_l_30'>* @global 指明在此函数中引用的全局变量<br/></span>
    <span class='mar_l_30'>* @include 指明包含的文件的信息<br/></span>
    <span class='mar_l_30'>* @link 定义在线连接<br/></span>
    <span class='mar_l_30'>* @module 定义归属的模块信息<br/></span>
    <span class='mar_l_30'>* @modulegroup 定义归属的模块组<br/></span>
    <span class='mar_l_30'>* @package 定义归属的包的信息<br/></span>
    <span class='mar_l_30'>* @param 定义函数或者方法的参数信息<br/></span>
    <span class='mar_l_30'>* @return 定义函数或者方法的返回信息<br/></span>
    <span class='mar_l_30'>* @see 定义需要参考的函数、变量，并加入相应的超级连接。<br/></span>
    <span class='mar_l_30'>* @since 指明该api函数或者方法是从哪个版本开始引入的<br/></span>
    <span class='mar_l_30'>* @static 指明变量、类、函数是静态的。<br/></span>
    <span class='mar_l_30'>* @throws 指明此函数可能抛出的错误异常,极其发生的情况<br/></span>
    <span class='mar_l_30'>* @todo 指明应该改进或没有实现的地方<br/></span>
    <span class='mar_l_30'>* @var 定义说明变量/属性。<br/></span>
    <span class='mar_l_30'>* @version 定义版本信息<br/></span>
    <span class='mar_l_30'>*/<br/></span>
    <span class='red'>php 接口参数版<br/></span>
    <span>fwrite(STDOUT, "Enter your name: ");<br/></span>
    <span>$name = trim(fgets(STDIN));<br/></span>
    <span>fwrite(STDOUT, "Hello, $name!");<br/></span>
    <span class='red'>字符串压缩 解压缩<br/></span>
    <span>$compressed = gzcompress('Compresjdfhjskdhfjksdhfjkhsdfjkhsdfjkhjsdfhjksdhfjkss me');<br/></span>
    <?php $compressed = gzcompress('Compresjdfhjskdhfjksdhfjkhsdfjkhsdfjkhjsdfhjksdhfjkss me'); ?>
    <span>echo $compressed; : <?= $compressed; ?><br/></span>
    <span>echo gzuncompress($compressed); : <?= gzuncompress($compressed); ?><br/></span>
    <span class='purple'>默认压缩级别是6 ,据网友测试,压缩率有百分之80<br/></span>
    <span class='red'>获取对应域名的ip地址 gethostbyname()<br/></span>
    <span>www.baidu.com的ip地址是gethostbyname('www.baidu.com')  : <?= gethostbyname('www.baidu.com'); ?><br/></span>
    <span class='red'>将ipv4地址字符串转换为int型 ip2long($ip)<br/></span>
    <span>ip2long('180.97.33.108') = <?php echo ip2long('180.97.33.108'); ?><br/></span>
    <span class='red'>将int型ipv4地址转换为字符串 long2ip($ip)<br/></span>
    <span>long2ip(3026264428) = <?php echo long2ip(3026264428); ?><br/></span>
</p><hr/>
<p>
    <span class='red'>显示或屏蔽错误 error_report();<br/></span>
    <span class='mar_l_30 blue'>显示所有错误</span>
    <span> error_report(E_ALL);或者error_report(-1);<br/></span>
    <span class='mar_l_30 blue'>显示所有错误除了notice</span>
    <span> error_report(E_ALL&amp;~E_NOTICE);<br/></span>
    <span class='mar_l_30 blue'>全部错误都不显示</span>
    <span> error_report(0);<br/></span>
    <span class='mar_l_30 purple'>error_report(0)对parse错误无效</span>
    <span class='purple'>因为解析错误的话,脚本根本不能运行(我猜的)</span>
</p><hr/>
<p>
    <span class='red'>自定义错误 </span> 
    <span>trigger_error();<br/></span><?php
    ini_set("display_errors", 0);
    if (3 > 2) {
        //只能用E_USER_系列的错误级别
        trigger_error('3真的大于2呢!', E_USER_NOTICE);
    }
    ini_set("display_errors", 1);
    ?>
    <span>trigger_error('3真的大于2呢!', E_USER_NOTICE);<br/></span>
    <span>这条错误信息被放在了 php.ini中error.log</span>
    <span>或者apache的error.log<br/></span>
    <span>如果设置了php.ini的error.log,那么apache的错误日志不记录php错误<br/></span>
    <span>apache的开启关闭记录一直在记录在apache的error.log中<br/></span>
</p><hr/>
<p>
    <span class='red'>输出信息到错误日志 </span> 
    <span>error_log(要发送的信息,flag);<br/></span>
    <span>flag默认是0就是保存,如果是1,后面还要加一个邮箱地址发送邮件<br/></span>
    <span class='purple'>保存地址为php或者apache的错误日志</span>
</p><hr/>
<p>
    <span class='red'>设置自定义错误处理函数 </span> 
    <span>set_error_handle('自定义函数名');<br/></span>
    <span class='purple'>自定义函数中默认有4个参数,错误号,错误信息</span>
    <span class='purple'>,文件名,行号<br/></span>
    <?php
    function custom_error($errno, $error_mes, $filename, $line) {
        echo "发生了错误 [{$errno}]:{$error_mes} 在{$filename}"
        . "的第{$line}行";

    }

    set_error_handler('custom_error');
//   trigger_error('随便报个错误玩玩波!', E_USER_NOTICE);
    ?>
</p>
<p>
    <span class='red'>取消自定义错误处理函数 </span> 
    <span>restore_error_handler();</span>
    <?php restore_error_handler(); ?>
</p><hr/>
<?php
#我想让脚本只在致命错误时候调用,但是现在警告也会触发,
//register_shutdown_function('custom_shutdown');
//function custom_shutdown(){
//     print_r(error_get_last());
//    echo"<script>alert(\"buxu guanbi\");</script>";
//}
?>
<p>
    <span class='red'>注册一个shutdown函数 </span> 
    <span>register_shutdown_function(函数名);<br/></span>
</p>
<p>
    <span class='red'>判断2个表达式是否不同时为真 Xor<br/></span> 
    <span>echo (1 Xor 0)? "true" : "false"; 结果
        <span class="blue"><?php echo (1 Xor 0) ? "true" : "false"; ?></span><br/></span>
    <span>echo (1 Xor 2)? "true" : "false"; 结果
        <span class="red"><?php echo (1 Xor 2) ? "true" : "false"; ?></span><br/></span>
</p>
<?php
$end;
?>
<script>
<?php echo $cookie_js;
?>
    //判断文件上传是否成功
    function successful() {
        document.getElementById('is_success').style.display = 'inline';
        setTimeout(function () {
            document.getElementById('is_success').style.display = 'none';
        }, 3000);
    }
</script>
<?php
require('./include/footer.inc.php');

