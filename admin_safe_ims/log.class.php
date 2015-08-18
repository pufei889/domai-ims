<?php
/*************************************
 * 系统日志管理 杨海涛 2014年2月12日 *
 ************************************/
class Logs{
	private $ipaddr;
	private $logfile;
	private $staff;//用户名
	private $ulv;//用户等级
	//构造函数
	public function __construct(){
		$this->ipaddr=trim($_SERVER["REMOTE_ADDR"]);
		$this->logfile=ADMINROOT."logs/".date("Y-m").".log";
	}

	//写入log文件
	public function setlog($action){
		$this->staff=trim($_SESSION["uname"]);
		$content="[".date("Y-m-d h:i:s")."] - $this->ipaddr - $this->staff - $action\n";
		$openfile=fopen($this->logfile,"a");
		do {
			usleep(88);
		}while(!flock($openfile,LOCK_EX));

		fwrite($openfile,$content);
		flock($openfile,LOCK_UN);
		fclose($openfile);
	}
	//获取日志列表
	public function getloglist(){
		@$handle=opendir(dirname($this->logfile)) or die("读取失败，请检查文件夹是否存在或可读!");
		while($file=readdir($handle)){
			if($file=="."||$file=="..") continue;
			$r[$file]=str_replace(".log","月",str_replace("-","年",$file));
		}
		closedir($handle);
		return isset($r)?$r:"";
	}

	//读取对应日志
	public function readlog($file){
		@$handle=fopen(dirname($this->logfile)."/".$file,"r") or die("读取失败，请检查文件是否存在或可读!");
		while(!feof($handle)){
			echo fgets($handle)."<br/>";
		}
		fclose($handle);
		$this->setlog("读取日志:".$file);
		return "";
	}

	//删除日志
	public function removelog($file){
		$this->ulv=$_SESSION["ulv"];
		if($this->ulv>1) return "删除失败，权限不足!";
		$file=dirname($this->logfile)."/".$file;
		if(unlink($file)){
			$this->setlog("删除日志:".basename($file));
			return "删除成功!";
		}else{
			return "删除失败!";
		}
	}
}
?>
