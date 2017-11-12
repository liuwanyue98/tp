<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\tiezi;
use app\index\model\ptie;




class ptieController extends Controller
{
	
	public function index()
	{
		// $data = Classes::all();
		$data = ptie::paginate(3);
		$this->assign('result', $data);
		return $this->fetch();
	}
	public function addptie()
	{
		$all = tiezi::all();
		$this->assign('all',$all);
		return $this->fetch();
	}
	
	public function addp(Request $request)
	{
		$ptie = new ptie;
		$tiezi->tietitle = $request->post('tietitle');
		$tiezi->ptie = $request->post('ptie');
		$tiezi->quotetie = $request->post('quotetie');
		$tiezi->tiedate = $request->post('tiedate');
		$tiezi->tieconcent = $request->post('tieconcent');
		$tiezi->baid = $request->post('baid');
		if ($ptie->save()) {
			return '帖子[ ' . $tiezi->tietitle. $tiezi->tieconcent.$tiezi->tieptie. $tiezi->quotetie.$tiezi->tiedate.':' . $tiezi->tieid . ' ]新增成功';
		} else {
			return $tiezi->getError();
		}
	}}