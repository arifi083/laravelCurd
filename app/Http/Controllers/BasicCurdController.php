<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicCurdController extends Controller
{
    function onSeclect(){

        $jsonData=DB::select('select * from students where name=?',['roton']);
        $jsonString=json_encode($jsonData);
        $selectData=json_decode($jsonString);
        return view('select',['selectKey'=>$selectData]);
    }
    function onInsert(Request $req){
        $name= $req->input('name');
        $roll= $req->input('roll');
        $class=$req->input('class');
        $result=DB::insert('INSERT INTO `students`(`name`, `class`, `roll`) VALUES (?,?,?)',[$name, $class,$roll]);
        
        if($result==true){

                return "Succcess";
        }
        else{
                return "fail"; 
        }

        
        
    }
    function onUpdate(){
        
    }
    function onDelete(){
        
    }
}
