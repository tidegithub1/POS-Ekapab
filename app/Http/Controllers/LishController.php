<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;   
use Illuminate\Http\Request;
use App\Airflight;     //มีการ import Model Airflight เข้ามาทำงาน
use App\Airport;       //มีการ import Model Airport เข้ามาทำงาน
use App\Airline;       //มีการ import Model Airline เข้ามาทำงาน


class Controller_show_airflight extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('showAirflight')->with('flight',Airflight::paginate(8)) //ทำการส่งค่า flight ไป , เพื่อทำการแสดงข้อมูลในตราง ....
                                                                            //... โดยมีการเชื่อมต่อกับฐานข้อมูลใน Model Airflight ....
                                                                            //.... ไปดึงข้อมูลจากตราง airflights เข้ามา 

        ->with('airport',Airport::all())                                    //มีการส่งค่า airport ไป , เพราะมีการเชื่อมความสัมพันธ์ข้อมูลอยู่
        ->with('airline',Airline::all())
        ->with('flight_path',Airflight::all())
        ->with('flight_1')                                      //ทำการส่งค่า flight_1 ไป , โดยไม่มีการเชื่อมต่อกับฐานข้อมูล
        ;
    }

  

    public function search(Request $request)
    {

          $name_airport = $request->name_airport;  //รับค่า request name_airport เข้ามาจาก Form showAirflight.blade.php
          $name_airline = $request->name_airline; 
          $path = $request->path;
          $flight_1 = $request->all();           //มีการรับ request all() เพื่อต้องรับค่าข้อมูลแบบ array เข้ามา , เก็บไว้ในตัวแปร $flight_1
         
       
        //print_r($flight);

        
        return view("showAirflight" )
        ->with('flight',Airflight::where('id_airport' , '=' , "{$name_airport}")  //คืนค่า 'flight' กลับไปที่หน้า showAirflight.blade.php .... 
                                                                        //.... , แล้วทำการ where ในตัวฐานข้อมูล ...
                                                                        //... ว่า $name_airport มันตรงกันกับ id_airport ไหม
        ->orWhere('id_airline' , '=' , "{$name_airline}")
        ->orWhere('path' , '=' , "{$path}")
        ->paginate(5))
        
        ->with('flight_1', $flight_1)               //มีการส่ง flight_1 จาก Form ไป เพื่อเอาไว้ทำการเปรีบบเทียบข้อมูลใน selection ตรงกันไหม ....
                                                    //.... ถ้าตรงกัน ก็ให้ทำการ show ข้อมูลค้างไว้
        ->with('airport',Airport::all())
        ->with('airline',Airline::all())
        ->with('flight_path',Airflight::all());                                                      
    }
   
}