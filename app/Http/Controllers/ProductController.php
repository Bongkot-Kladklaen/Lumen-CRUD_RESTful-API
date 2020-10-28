<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productAll(){ 
        $result = Product::all();
        return $this->responseSuccess($result);
    }

    public function productID($id){
        $result = Product::where('id',$id)->first();
        return $this->responseSuccess($result);
    }

    public function productInsert(Request $request){
        $result = new Product();
        $result->product_category = $request->product_category;
        $result->product_name = $request->product_name;
        $result->product_detail = $request->product_detail;
        $result->unit_price = $request->unit_price;
        $result->thumbnail = $request->thumbnail;

        if ($result->save()) {
            return $this->responseSuccess($result);
        }
    }

    public function productUpdate(Request $request, $id){
        $result = Product::where('id',$id)->first();
        $result->update($request->all());
       
        if ($result->save()) {
            return $this->responseSuccess($result);
        }
    }

    public function productDelete($id){
        $result = Product::where('id',$id)->delete();
        return $this->responseSuccess((["deleteId"=>$result]));
    }

    protected function responseSuccess($res){
        return response()->json([
            'status' => 'success',
            'data' => $res
        ]);
    }
    
}
