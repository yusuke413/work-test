<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson_yusuke;host=localhost;","root","");
/*説明文をちゃんと読め、PDFファイルにはこの文章はindex.phpのbody内に記述するように書いてある、落ち着け
$stmt = $pdo -> query("select*from 4each_keijiban");
 
while($row = $stmt -> fetch()){
    echo $row['handlename'];
    echo $row['title'];
    echo $row['comments'];
}
*/
  

$pdo -> exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");
?>
