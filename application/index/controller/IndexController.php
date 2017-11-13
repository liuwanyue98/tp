<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\ba;
use app\index\model\Users;
use app\index\model\tiezi;
use think\Request;
use think\Session;

class IndexController extends Controller
{
	public function index()
	{
		$data = ba::all();

		$this->assign('data', $data);
		return $this->fetch();
	}
	public function login()
	{
		
		return $this->fetch();
	}

	public function zhuye()
	{
		
		$data = ba::all();

		$this->assign('data', $data);
		return $this->fetch();
	}
	public function zy()
	{
		
		$data = ba::all();

		$this->assign('data', $data);
		return $this->fetch();
	}
	public function tz($id)
	{	$data = Tiezi::where('baid',$id)
			->select();
		$this->assign('result', $data);
		return $this->fetch();
	}

	public function tiecontent($id)
	{
		$data = Tiezi::where('tieid',$id)
			->select();
		
		$this->assign('data', $data);
		return $this->fetch();
	}
	public function tconcent($id)
	{
		$data = Tiezi::where('tieid',$id)
			->select();
		
		$this->assign('data', $data);
		return $this->fetch();
	}

	public function logindo(Request $request)
	{
		
		$data = Users::where ('username',$request->post('username'))
		->where ('password',$request->post('password'))
		->find();
		$this->assign('data', $data);
		if($data){
			Session::set('username',$request->post('username'));
		  
			return $this->fetch();
		}else{
			echo "用户名或密码错误";
			 echo '<br><br>';
			echo '<a href="/login">返回上一页</a><br>';
		}
		
	}
	public function logout()
	{ 	
			session::delete('username');
		
			return $this->fetch();
		
		
	}
	public function regist()
	{
		return $this->fetch();
	}
	public function registdo(Request $request)
	{
		$users= new users;
		$users->username = $request->post('username');
		$users->password = $request->post('password');
		
		if ($users->save()) {
			
			Session::set('username',$request->post('username'));
		

			return $this->fetch();
		} else {
			return "注册失败";
		}
	}


}
