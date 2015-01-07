<?php
	//连接数据库
	$link = mysql_connect('localhost','root','123456');
	$db = mysql_select_db('liuyanban');
	$room_id = @$_GET['room_id']?$_GET['room_id']:1;
	$liuyan_query = mysql_query("select * from `messages` where `room_id` ='$room_id' order by id desc ");
	$liuyan_list = array();
	while($row = mysql_fetch_assoc($liuyan_query)){
		$liuyan_list[] = $row;
	}
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
	<div class="style_changer_text" style="margin-bottom:20px;"><a href="index.php">ルーム一覧へ</a>:</div>
	<a class="submit" >Room<?php echo $room_id;?></a>
</div>

	<div class="form_content">
    
	<fieldset>
		<div class="field-label" style="height:300px;width:100%;">
			<label for="field1">メッセージ一覧です</label>:
			<ul style="width:100%;">
			<?php
				if(!empty($liuyan_list)){
                    foreach($liuyan_list as $info){
            ?>
            <li>id:<font color="red"><?php echo $info['id'];?></font>&nbsp;&nbsp;&nbsp;<?php echo $info['content'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time: <font color="pink"><?php echo $info['sent_at'];?></font></li>
            <?php    
                    }
				}
			?>
			</ul>
		</div>
	</fieldset>
	
	<form id="liuyan" action="/A12DC902/controller/messages/index.php" method="post" name="liuyan">
    <fieldset>
        <legend>メッセージ一覧</legend> 
        <div class="form-row">
			<input type="hidden" name="room_id" value="<?php echo $room_id;?>" id="room_id" />
            <div class="field-label"><label for="field1">内容</label>:</div>
            <div class="field-widget"><input name="content" id ="content" class="required userinfo" placeholder="Type your message here" /></div>
        </div>
    </fieldset>
	<input type="submit" class="submit" value="Send" /> 
	<input class="reset" type="button" value="Reset" id="reset" />
    </form>
	
    </div>
</body>
</html>
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