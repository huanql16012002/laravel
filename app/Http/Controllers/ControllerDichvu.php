<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Dichvu;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\Util\Test;

class ControllerDichvu extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v =[];
    }
    public function dichvu(Request $request)
    {
        $this->v['tieude']="Quản lý dịch vụ";
        $objTest = new Dichvu();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $objTest->loadListWithPager($this->v['extParams']);
        return view('dichvu.index', $this->v);           
    }
}
