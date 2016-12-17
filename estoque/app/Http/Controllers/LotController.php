<?php namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LotController extends Controller {


    
    public function checkValidation($id){

        $now = date('Y-m-d');

        $Lot = new \App\Lot();
        $Lot = $Lot->find($id);
        $data = $Lot->validation;

        $val = strtotime($data) > strtotime($now) ? 1 : 0 ;
        $Lot->validated = $val;
        $Lot->save();   

    }


	public function index(){

		$Lot = new \App\Lot();
		$Lots = $Lot->all();

		return view('lot.lots',['lots' => $Lots]);
	}


	public function create(){

        $Product = new \App\Product();
        $Products = $Product->all();

		return view('lot.create' , ['products' => $Products]);
	}

	public function insert( Request $request){

		$data = $request->all();
		$Lot = new \App\Lot();
        $id = $Lot->create($data)->id;
      
        $this->checkValidation($id);

		return redirect('lots');
	}

    public function delete($id){

    	$Lot = new \App\Lot();
    	$Lot->find($id)->delete();
 
 		return redirect('lots');
    }

    public function edit($id){

       	$Lot = new \App\Lot();
    	$Lot = $Lot->find($id);

    	return view('lot.edit',['lot' => $Lot]);
    }

    public function update( Request $request, $id){

	    $data = $request->all();
    	$Lot = new \App\Lot();
    	$Lot->find($id)->update($data);
        $this->checkValidation($id);

    	return redirect('lots');
    }

    public function expired(){

       $LotExpired = DB::table('lots')->where('validated', 0)->get();

       return view('lot.expired',['lots' => $LotExpired]);
    }

    public function stock(){

       $LotStock = DB::table('lots')->where('validated', 1)->get();

       return view('lot.stock',['lots' => $LotStock]);
    }


}
