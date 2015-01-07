<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<script type="text/javascript" src="home/jquery-1.8.3.min.js"></script>
<title>留言板</title>
<link title="style1" rel="stylesheet" href="home/style.css" type="text/css" />
<link title="style2" rel="alternate stylesheet" href="home/style2.css" type="text/css" />
<link title="style3" rel="alternate stylesheet" href="home/style3.css" type="text/css" />
<link title="style3" rel="alternate stylesheet" href="home/style4.css" type="text/css" />
<link title="style3" rel="alternate stylesheet" href="home/style5.css" type="text/css" />
</head>
<body>
    <div class="style_changer" style="text-align:center;">
    	<div class="style_changer_text">留言板主题选择:</div>
        <input type="submit" value="主题1" onclick="setActiveStyleSheet('style1');" />
        <input type="submit" value="主题2" onclick="setActiveStyleSheet('style2');" />
        <input type="submit" value="主题3" onclick="setActiveStyleSheet('style3');" />
        <input type="submit" value="主题4" onclick="setActiveStyleSheet('style4');" />
        <input type="submit" value="主题5" onclick="setActiveStyleSheet('style5');" />
    </div>

	<div class="form_content">
    
	<fieldset>
		<div class="field-label" style="height:300px;width:100%;">
			<label for="field1">留言列表</label>:
			<ul style="width:100%;">
				<li>id:<font color="red">11</font>&nbsp;&nbsp;&nbsp;jintiantasdsadasdsadasd大实打实的啊实打实的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间<font color="pink">1231231</font></li>
				<li>id:<font color="red">11</font>&nbsp;&nbsp;&nbsp;jintiantasdsadasdsadasd大实打实的啊实打实的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间<font color="pink">1231231</font></li>
				<li>id:<font color="red">11</font>&nbsp;&nbsp;&nbsp;jintiantasdsadasdsadasd大实打实的啊实打实的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间<font color="pink">1231231</font></li>
				<li>id:<font color="red">11</font>&nbsp;&nbsp;&nbsp;jintiantasdsadasdsadasd大实打实的啊实打实的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间<font color="pink">1231231</font></li>
				<li>id:<font color="red">11</font>&nbsp;&nbsp;&nbsp;jintiantasdsadasdsadasd大实打实的啊实打实的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间<font color="pink">1231231</font></li>
				<li>id:<font color="red">11</font>&nbsp;&nbsp;&nbsp;jintiantasdsadasdsadasd大实打实的啊实打实的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间<font color="pink">1231231</font></li>
			</ul>
		</div>
	</fieldset>
	
	<form id="test" action="index.php" method="post">
    <fieldset>
        <legend>留言界面</legend> 
        <div class="form-row">
            <div class="field-label"><label for="field1">内容</label>:</div>
            <div class="field-widget"><input name="content"  class="required userinfo" placeholder="请输入您需要留言的内容" /></div>
        </div>
    </fieldset>
	<input type="submit" class="submit" value="提交" /> 
	<input class="reset" type="button" value="重置" id="reset" />
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