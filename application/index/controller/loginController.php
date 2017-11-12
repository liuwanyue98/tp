<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\ba;
use app\index\model\tiezi;
use app\index\model\login;





class loginController extends Controller
{
	public function index()
	{
		// $data = Course::all();
		$data = login::paginate(3);
		$this->assign('result', $data);
		return $this->fetch();
	}
	// public function adduser()
	// {
	// 	$all = login::all();
	// 	$this->assign('all',$all);
	// 	return $this->fetch();
	// }
	// public function addu(Request $request)
	// {
	// 	$login= new login;
	// 	$login->user = $request->post('user');
	// 	$login->code = $request->post('code');
		
	// 	if ($ba->save()) {
	// 		return '吧[ ' . $ba ->batitle. ':' . $ba->baid . ' ]新增成功';
	// 	} else {
	// 		return $ba->getError();
	// 	}
	// }
	
// 	public function editba($baid)
// 	{
// 		$single = ba::get($baid);
// 		$all = ba::all();
// 		$this->assign('single', $single);
// 		$this->assign('all',$all);
// 		return $this->fetch();
// 	}
// 	public function editb(Request $request,$baid)
// 	{
// 		$ba = ba::get($baid);
// 		$ba->batitle =$request->post('batitle');
// 		$ba->save();
// 		return '更新吧成功';
// 	}
	 public function logout()
    {
        $this->auth->logout();
        $this->success(__('Logout successful'), 'index/login');
    }

}