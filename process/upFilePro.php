<!DOCTYPE html>
<html>
    <head>
        <meta charsst="utf-8"/>
        <title>上传文件反馈</title>
    </head>
    <body>
        <?php
        require_once "{$_SERVER['DOCUMENT_ROOT']}/k_note/php/function/common.php";
        /*
          <#日期 = "2017-2-12">
          <#时间 = "14:31:19">
          <#人物 = "buff" >
          <#备注 = " ">
         */
        foreach ($_FILES['userfile']['error'] as $key => $value) {
            if ($_FILES['userfile']['error'][$key] > 0) {
                echo 'error:<br/>';
                switch ($_FILES['userfile']['error'][$key]) {
                    case UPLOAD_ERR_INI_SIZE:$error = '第' . ++$key . '个文件的大小超过了up_load_filesize!';
                        break;
                    case UPLOAD_ERR_FORM_SIZE:$error = '第' . ++$key . '个文件的大小超过了表单限制最大值!';
                        break;
                    case UPLOAD_ERR_PARTIAL:$error = '第' . ++$key . '个文件的只上传了一部分!';
                        break;
                    case UPLOAD_ERR_NO_FILE:$error = '第' . ++$key . '个没有上传任何文件!';
                        break;
                    case UPLOAD_ERR_NO_TMP_DIR:$error = '第' . ++$key . '个文件当前未指定临时目录!';
                        break;
                    case UPLOAD_ERR_CANT_WRITE:$error = '第' . ++$key . '个文件不能写入磁盘!';
                        break;
                }
                echo"<script>alert('" . strip_tags($error) . "');</script>";
                continue;
            }
            if ($_FILES['userfile']['type'][$key] != 'text/plain' &&
                    $_FILES['userfile']['type'][$key] != 'image/gif' &&
                    $_FILES['userfile']['type'][$key] != 'image/jpeg' &&
                    $_FILES['userfile']['type'][$key] != 'image/png') {
                $error = $_FILES['userfile']['type'][$key] . '不是正确的文件格式!';
                echo"<script>alert('" . strip_tags($error) . "');</script>";
                continue;
            }
            //本地文件名,因为windows系统默认是gbk 所以转换为gbk码
            $user_filename = iconv('utf-8', 'gbk', $_SERVER["DOCUMENT_ROOT"]
                    . '/../uploads/' . $_FILES['userfile']['name'][$key]);
            if (is_uploaded_file($_FILES['userfile']['tmp_name'][$key])) {
                if (!move_uploaded_file($_FILES['userfile']['tmp_name'][$key], $user_filename)) {
                    $error = '<br/>存储文件失败!';
                    echo"<script>alert('" . strip_tags($error) . "');</script>";
                    continue;
                }
            } else {
                $error = '你上传的文件不是有效的';
                echo"<script>alert('" . strip_tags($error) . "');</script>";
                continue;
            }
            $file = file_get_contents($user_filename);
            if ($_FILES['userfile']['type'][$key] == 'text/plain') {
                characet($file); //转换字符编码为utf-8
                if (rand(0, 1)) {
                    $file2 = htmlspecialchars($file); //转义所有html特殊字符 ， & " ' < >
                }                              //htmlentities将会转义所有html标签包括符号欧元 英镑￡￠¤§... 
                else {
                    $file2 = strip_tags($file);  //去除html标签<p><h1></b>....
                }
                file_put_contents($user_filename, $file2);
            }
        }
        ?>
    </body>
</html>