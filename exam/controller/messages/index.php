<?php
//message控制器
date_default_timezone_set('Asia/Shanghai');
class Messages{
	private $id ;
	private $room_id;
	private $content;
	private $sent_at;
	
    //初始化属性
	public function __construct($param){
       
	   $this->id = isset($param['id'])?$param['id']:'';
       $this->room_id = isset($param['room_id'])?$param['room_id']:'';
       $this->content = isset($param['content'])?$param['content']:'';
       $this->sent_at = isset($param['sent_at'])?$param['sent_at']:'';
       //连接数据库
       $link = mysql_connect('localhost','root','123456');
       $db = mysql_select_db('liuyanban');
	}
    
    //类的函数
    
    public static function all(){
        
    }
    
    //添加留言
    public function save($param){
        $room_id = $this->room_id;
        $content = $this->content;
        $sent_at = date('Y-m-d H:i:s',time());
        $sql = "insert into `messages`(`room_id`,`content`,`sent_at`)values('$room_id','$content','$sent_at')";
        $status = mysql_query($sql);
    }
	
	public function load($room){
		header("Location:/A12DC902/list.php?room_id=".$room);
	}
    
   
}

if($_POST){
    $sent_at = date('Y-m-d H:i:s',time());
    $message = new Messages($_POST);
    $message->save($_POST); 
	$room_id = $_POST['room_id'];
	$message->load($room_id);
}



?>