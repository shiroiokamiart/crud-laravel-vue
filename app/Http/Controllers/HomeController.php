<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class HomeController extends Controller
{
    public function getList(){
        $productos = Productos::get();
        return response()->json($productos);
    }

    public function saveProducto(Request $rs){
        $data = array("name"=>$rs->pr, "monto"=>$rs->cs);
        $pr = new Productos($data);
        if($pr->save()){
            return response("1");
        }else{
            return response("2");
        }
    }

    public function deleteProducto($id){
        $delete = Productos::where("id", $id)->delete();
        if($delete){
            return response("1");
        }else{
            return response("2");
        }
    }

    public function updateProducto(Request $rs){
        $data = array("name"=>$rs->pr, "monto"=>$rs->cs);
        $pr = Productos::where("id", $rs->id)->update($data);
        if($pr){
            return response("1");
        }else{
            return response("2");
        }
    }
}
