<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use View;

class HomeController extends Controller
{
    

    public function index()
    {
        return view('home');
    }

    public function file()
    {
        return view('file');
    }


    public function upload(Request $request) {

        $data = $request->all();
        
    	$rules = [
            'file'           => 'required|max:10000|mimes:txt',
        ];
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('archivo')
                ->withInput()
                ->withErrors($validator);
        }else {

	    	//$fileName = Input::file('file')->getClientOriginalName();
			Input::file('file')->move(base_path() . '/public/files/', 'file.txt');
			return redirect()->route('execute')->withErrors('Archivo Cargado con Exito');
		}
	}

    public function execute(){

        $file = fopen(base_path() . '/public/files/' . 'file.txt', "r");
        $cases = fgets($file);
        

        

        for ($i = 1; $i <= $cases; $i++)
        {
            $valor = fgets($file);
            $valor =  explode(" ", $valor);
            $N = $valor[0];
            $queries = $valor[1];


                for($f = 0; $f <= $N; $f++){
                    for($c = 0; $c <= $N; $c++){
                        for($z = 0; $z <= $N; $z++){
                            $matriz[$f][$c][$z] = 0;
                        }
                    }
                }  

                for($t=0; $t<$queries; $t++){ 
                                  
                    
                    $valor = fgets($file);
                    $valor =  explode(" ", $valor);
                    $q = 0;

                    $query = $valor[0];
                    
                    if($query == "UPDATE")
                    {
                        

                        $x     = $valor[1];
                        $y     = $valor[2];
                        $z     = $valor[3];
                        $W     = $valor[4];
                    
                        $matriz[$x][$y][$z] = $W;
                    }
                    else
                    {
                        $sum = 0;
                        
                        
                        $x1     = $valor[1];
                        $y1     = $valor[2];
                        $z1     = $valor[3];
                        
                        $x2     = $valor[4];
                        $y2     = $valor[5];
                        $z2     = $valor[6];

                        for($f = $x1; $f <= $x2; ++$f){
                            for($c = $y1; $c <= $y2; ++$c){
                                for($h = $z1; $h <= $z2; ++$h){
                                  $sum += $matriz[$f][$c][$h];
                                  
                                }
                            }
                        }
                        $sumas[$i][]=$sum;
                        
                    }  
                }
        }

        fclose($file);
        return View::make('execute', ['sumas' => $sumas]);
    }


    public function keyboard()
    {
        return view('keyboard');
    }

    public function uploadKeyboard()
    {
        //return view('keyboard');
    }

    
}