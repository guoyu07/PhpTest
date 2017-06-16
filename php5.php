<?php
/*
 * 此笔记做为原笔记的附加 引自书籍php5 权威编程
 */
require('include/header.inc.php'); //头部
?>
<script>
    (function () {
        var h1 = document.getElementsByTagName('h1')[0];
        h1.innerText = 'PHP5 权威编程 学习笔记';
        var t1 = document.getElementsByTagName('title')[0];
        t1.innerText = 'PHP5 权威编程 学习笔记';
    })();
</script>
<?php
/**
 * 单例模式类,只允许创建一个这个类
 */
class Singleton {
    private static
            $instance = NULL;
    private 
            function __construct() {
        
    }

    public static
            function getInstance() {
        if (self::$instance === NUll) {
            self::$instance = new Singleton();
        }
        return self::$instance;

    }

}
?>
<p>
    <span class='red'>类的单例模式(Singleton) 只能创建一个这个类<br/></span>
    <span class='mar_l_30 in_block ident_2'>先调用Singleton 的静态方法 getInstance();</span><br/>
    <span class='mar_l_30'>如果类的静态变量$instance等于NULL那么就设置静态变量$instance<br/></span>
    <span class='mar_l_30'>为Singleton对象.然后返回此对象,再次调用此静态函数getInstance()时<br/></span>
    <span class='mar_l_30'>因为已经创建过一个实例,所以就直接返回这个实例,而不是新创建一个<br/></span>
    <span class='mar_l_30 purple'>构造函数设置私有,防止有人创建新对象<br/></span>
</p><hr/>
<p>
    <span class='red'>foreach 中 传递引用, 在循环中可以更新原始值<br/></span>
    <span class='mar_l_30 in_block ident_2'>foreach ($arr as $k => &$v)</span><br/>
    <span class='mar_l_30'>这时候就可以操作$v 更新$arr的值 比如判断$v是不是等于字符串null 如果是<br/></span>
    <span class='mar_l_30'>更改为null<br/></span>
</p><hr/>
<?php
echo <<<BF
<p>
    <span class='red'>定界符的使用<br/></span>
    <span class='mar_l_30 in_block ident_2'>开头 echo &lt;&lt;&lt;任意字符(BF) 然后换行</span><br/>
    <span class='mar_l_30'>在下一个BF出现之前的可以随便写单引号和双引号都不要转义<br/></span>
    <span class='mar_l_30'>但是\$符号是要转义的<br/></span>
    <span class='mar_l_30 purple'>最后一个BF一定要顶格写 写在最前面并加上分号<br/></span> 
</p><hr/>
BF;
class NullObj {
    
}

$nobj = new NullObj;
$nobj->dynamicAdd = '动态添加的属性';
?>
<p>
    <span class='red'>资源类型和对象类型总是为TRUE<br/></span>
    <span class='mar_l_30 in_block ident_2'>这里创建一个新的空对象 $nobj=new NullObj;</span><br/>
    <span class='mar_l_30'>echo $nobj ? '真' : '假' ; --> <?php echo $nobj ? '真' : '假'; ?><br/></span>
</p><hr/>
<p>
    <span class='red'>对象的属性可以动态添加 (我猜的)<br/></span>
    <span class='mar_l_30 in_block ident_2'>继续用上一个空对象$nobj</span><br/>
    <span class='mar_l_30'>$nobj->dynamicAdd = '动态添加的属性';<br/></span>
    <span class='mar_l_30'>echo $nobj->dynamicAdd; --> <?php echo $nobj->dynamicAdd; ?><br/></span>
</p><hr/>
<?php



?>






























<?php
require('include/footer.inc.php'); //bottom部
