<?php
$max=5;
$page=1;
if (isset($_GET['page'])) {
	$page=$_GET['page'];
}
$start=($page-1)*$max;
$conn=mysqli_connect('Localhost','root','','test');
$counter=mysqli_query($conn, "SELECT count(*) as c FROM posts");
foreach ($counter as $v) {
	$max_page=ceil($v['c']/$max);
}
$link=5;
for ($i=0; $i < $max_page; $i++) { 
	$pages_arr[$i+1]=$i*$max;
}
$all_pages=array_chunk($pages_arr,$link,true);

function search_page($arr, $start){
	foreach ($arr as $chunk => $pages) {
		if (in_array($start,$pages)) {
			return $chunk;
		}
		return 0;
	}
}

$need_chunk=search_page($all_pages,$start);

echo '<ul class="pagination">';
if ($page>1) {
	echo "<li><a href='/?page=".($page-1)."'>&laquo;</a></li>";
}
foreach ($all_pages[$need_chunk] as $num_page => $offset) {
	echo '<li><a href="/?page='.$num_page.'">'.$num_page.'</a></li>';
}
if ($page<$max_page) {
	echo "<li><a href='/?page=".($page+1)."'>&raquo;</a></li>";
}
	
echo "</ul>";