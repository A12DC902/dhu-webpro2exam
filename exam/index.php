<?php
	//连接数据库
	
	$room_id = @$_GET['room_id']?$_GET['room_id']:1;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<script type="text/javascript" src="home/jquery-1.8.3.min.js"></script>
<title>チャットルーム</title>

<link title="style1" rel="stylesheet" href="home/style<?php echo $room_id;?>.css" type="text/css" />

</head>
<body>
<style>
.submit{
color:#FFFFFF;
background-color:#0fcdf6;
padding:5px 5px 5px 5px;
cursor:pointer;
margin-left:10px;
border:none;
}
.active{
	background-color:red;
}
</style>
<div class="style_changer" style="text-align:center;">
	<div class="style_changer_text" style="margin-bottom:20px;"><a href="index.php">ルーム一覧</a>:</div>
	<a class="submit <?php if($room_id==1){echo 'active';}?>" href="list.php?room_id=1" onclick="setActiveStyleSheet('style1');">Room1. 大学に関する話題</a>
	<a class="submit  <?php if($room_id==2){echo 'active';}?>" href="list.php?room_id=2" onclick="setActiveStyleSheet('style2');">Room2. 友達に関する話題</a>
	<a class="submit <?php if($room_id==3){echo 'active';}?>" href="list.php?room_id=3" onclick="setActiveStyleSheet('style3');" >Room3. 授業に関する話題</a>
	<a class="submit <?php if($room_id==4){echo 'active';}?>" href="list.php?room_id=4" onclick="setActiveStyleSheet('style4');" >Room4. サークルに関する話題</a>
	<a class="submit <?php if($room_id==5){echo 'active';}?>" href="list.php?room_id=5" onclick="setActiveStyleSheet('style5');" >Room5. その他</a>	
</div>

<script>
$(function(){
	$('#reset').click(function(){
		var object = $('.userinfo');
		$.each(object,function(){
			$(this).attr('value','');
		})
		
	})
})

function setActiveStyleSheet(title) {
	var i, a, main;
		for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
			if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
			a.disabled = true;
			if(a.getAttribute("title") == title) a.disabled = false;
		}
	}
}

</script>