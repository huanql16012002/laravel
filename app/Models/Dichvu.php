<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dichvu extends Model
{
    use HasFactory;
    protected $table = 'dich_vu';
    protected $fillable = ['id','ten_dich_vu','mo_ta','gia_dich_vu'];

    public function loadList($params=[]){
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->get();
        return $lists;
    }
    public function loadListWithPager($params=[]){
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->paginate(10);
        return $lists;
    }
}
