<title> 無作者之書籍</title>	
<a href="home.php">主目錄</a>&nbsp;&nbsp;	
(3) 查詢未有作者的書藉(no_author.php)，並提供鏈結作者(link_author.php)的功能。<br /> <hr />
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$sql_query ="SELECT author.name AS '作者',book.name AS '書名'
FROM booklist RIGHT JOIN book 
ON booklist.book_id = book.id
LEFT JOIN author ON booklist.author_id = author.id
";
$result =$db_link->query($sql_query);
while ($row_result=$result->fetch()) {
	if ($row_result['作者']==null)
	{echo $row_result['書名']."<br>";
			echo "<hr>";}		
}

?>
<a href="link_author.php">鏈結作者</a>&nbsp;