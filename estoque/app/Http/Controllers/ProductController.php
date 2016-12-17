<?php namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller {

	public function index(){

		$Product = new \App\Product();
		$Products = $Product->all();

		return view('product.products',['products' => $Products]);
	}

	public function create(){

		return view('product.create');
	}

	public function insert( Request $request){

		$data = $request->all();
		$Product = new \App\Product();
        $Product->create($data);

		return redirect('products');
	}

    public function delete($id){

    	$Product = new \App\Product();
    	$Product->find($id)->delete();
 
 		return redirect('products');
    }

    public function edit($id){

    	$Product = new \App\Product();
    	$Product = $Product->find($id);

    	return view('product.edit',['product' => $Product]);
    }

    public function update( Request $request, $id){

	    $data = $request->all();
    	$Product = new \App\Product();
    	$Product->find($id)->update($data);

    	return redirect('products');
    }

    public function search( Request $request){

        $dataName = $request->name;
        $dataCodebar = $request->codebar;

        if(!empty($dataName)){
            $ProductSearch = DB::table('products')->where('name', 'LIKE', '%'.$dataName.'%')->first();
            $id = $ProductSearch->id;
        }elseif(!empty($dataCodebar)){
            $ProductSearch = DB::table('products')->where('codebar', $dataCodebar)->first();
            $id = $ProductSearch->id;
        }
        if(!empty($id)){
            $Product = new \App\Product();
            $Product = $Product->find($id);

            return view('product.edit',['product' => $Product]);      
        }
       

    }
}
