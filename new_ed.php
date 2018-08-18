<html>
<head>
    <meta charset="utf-8">
    <title>新闻修改</title>
    <style>
        body{
            background-color: rgba(128,128,128,0.3);
        }
    </style>

</head>
<body>
<?php
header("content-type:text/html;charset=utf-8");
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","000000","News");
mysqli_set_charset($conn,"utf-8");
if($conn){
 $sql="select * from new where id='$id'";
 $que=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($que);
}
?>
<form method="post" action="new_upd.php?id=<?php echo $row['id'] ?>" name="myform">
    <h1>修改新闻</h1><span><a href="new_list.php">返回</a></span>
    <p>标题：<input type="text" name="title" value="<?php echo $row['title']?>"></p>
    <p>内容：<textarea cols=30 rows=5 name="content"><?php echo $row['content']?></textarea></p>
    <p><button>修改</button></p>
</form>
</body>
</html>