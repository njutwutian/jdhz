<?php
header("Content-Type:text/html;charset=utf-8");
$con = mysql_connect("jdzh-njutwutian.tenxcloud.net:24728","admin","admin");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo "ok<br/>";
// some code
mysql_select_db("jdhz", $con);
//�ַ�����ת��_�����ݿ� 
mysql_query("set character set 'utf8'"); 
//�ַ�����ת��_д���ݿ� 
mysql_query("set names 'utf8'"); 

$result = mysql_query("SELECT * FROM ordertrack");

while($row = mysql_fetch_array($result))
  {
  echo $row['statusdesc'] . " " . $row['serialid'];
  echo "<br />";
  }

mysql_close($con);

?>