<?php
/***************************
数据库类
杨海涛 2013年12月18日
**************************/

/*
Copyright (C) 2015 杨海涛(vip@hitoy.org)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

//数据库抽象类
abstract class DB{
	//增加或更改数据表记录
	abstract function query();
	//获取数据表一行记录
	abstract function getOne();
	//获取数据表多行记录
	abstract function getRows();
}

class Mysql extends DB{
	private $dbhost;		//主机名
	private $dbuser;		//数据库用户名
	private $dbpassword;	//数据库密码
	private $dbname;		//数据库名
	private $dbprefix;		//数据表前缀
	private $connect;		//数据连接
	private $queryString;	//sql语句

	private  $errorcode=0; //错误码，默认为0，当sql出现错误时，返回7，代表数据库出现问题

	//构造函数，参数一次为，数据库主机，用户名，密码，数据库名称，编码
	public function __construct($host="localhost",$user="root",$password="",$name="msg",$prefix="ims_",$code="utf8"){
		$this->dbhost=$host;
		$this->dbuser=$user;
		$this->dbpassword=$password;
		$this->dbname=$name;
		$this->dbprefix=$prefix;
		$this->dbname=$name;

		//连接数据库
		$this->connect=mysqli_connect($host,$user,$password);
		if($this->connect){
			mysqli_query($this->connect , "set names $code");
			mysqli_select_db($this->connect,$name);
		}else{
			$this->errorcode=7;
		}
	}

	//由于数据表的前缀是用户指定的，而sql语句是事先指定的，需要对前缀进行替换
	public function setQuery($sql){
		$prefix="ims_";
		$this->queryString=str_replace($prefix,$this->dbprefix,$sql);
	}

	//执行不需要结果的sql:insert update
	public function query(){
		$reup = mysqli_query($this->connect,$this->queryString);
		if(mysqli_error($this->connect)){
			$this->errorcode=7;
		}
	}

	//获取错误代码
	public function get_error(){
		return $this->errorcode;
	}



	/**********************************
	 *以上是前台留言提交必须用到的方法*
	 *以下是后台系统用到的方法*********
	 **********************************/

	//获取一行记录,返回数组
	public function getOne(){
		$re=mysqli_query($this->connect,$this->queryString);
		$res=mysqli_fetch_row($re);
		if(mysqli_error($this->connect)){
			$this->errorcode=7;
			return;
		}else{
			return $res;
		}
	}

	//获取多行记录，返回二维数组
	public function getRows(){
		$re=mysqli_query($this->connect,$this->queryString);
		$res=array();
		while($a=mysqli_fetch_assoc($re)){
			$res[]=$a;
		}
		if(empty($res)){
			return;
		}else{
			return $res;
		}
	}

	public function __destruct(){
		if($this->connect){
			mysqli_close($this->connect);
		}
	}
}
