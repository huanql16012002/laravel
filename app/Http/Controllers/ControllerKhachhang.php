<?php

namespace App\Http\Controllers;

use App\Models\Khachhang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\Util\Test;

class ControllerKhachhang extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v =[];
    }
    public function khachhang(Request $request)
    {
        $this->v['tieude']="Quản lý khách hàng";
        $objTest = new Khachhang();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $objTest->loadListWithPager($this->v['extParams']);
        return view('khachhang.index', $this->v);           
    }
    public function detail($id,Request $request){
        $this->v['_title'] = 'Chi tiết khách hàng';
        $khach_hang = new Khachhang();
        $objItem = $khach_hang->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('khachhang.detail',$this->v);
    }
}
