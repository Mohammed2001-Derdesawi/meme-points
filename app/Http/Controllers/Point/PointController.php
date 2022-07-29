<?php

namespace App\Http\Controllers\Point;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Alkoumi\LaravelHijriDate\Hijri;
use App\Http\Controllers\Controller;
use App\Http\Requests\Point\PointRequest;

class PointController extends Controller
{
    public function index()
    {
        return view('Point.index');
    }

    public function calculate(PointRequest $request)
    {
        $average=$this->calcuateAverage($request->average_rate,$request->average);
        $specialization_mark=$request->specialization_mark * 0.4;
        $general_exam=$request->general_exam * 0.2;
        $date_end=Carbon::createFromDate(1444,1,9)->format('d-m-Y');


        $years=Carbon::createFromDate($request->year,$request->month,$request->day)->diffInYears($date_end);
        $seniority=1;
        if($years >=10)
        {
            $seniority=10*2;

        }
        else
        {
            $days=Carbon::createFromDate($request->year,$request->month,$request->day)->diffInDays($date_end);
            $seniority=($days/(10*360)) *100;
            $seniority*=0.2;


        }



        $total=$seniority+$general_exam+$specialization_mark+$average;
        $total=number_format((float)$total, 2, '.', '');
        $seniority=number_format((float)$seniority, 2, '.', '');


         return  redirect()->route('points.index')->with(['total'=>$total,'average'=>number_format((float)$average, 2, '.', ''),'general_exam'=>$general_exam,'specialization_mark'=>$specialization_mark,'seniority'=>$seniority]);






    }
    public function calcuateAverage($average_rate,$average)
    {
        switch ($average_rate)
        {
            case '5':
                $average=$this->get_average($average,[4.5,3.75,2.75]);
                $average*=0.2;
                break;
            case '4':
                $average=$this->get_average($average,[3.5,2.75,2]);
                $average*=0.2;
                break;
             default:
                $average*=0.2;

        }
        return $average;

    }

    public function get_average($average,$min_average)
    {
        switch($average)
        {
            case $average>=$min_average[0]:
                  $average=($average-$min_average[0])/0.5;
                  $average=$average*10 + 90;

                  break;
                  case $average>=$min_average[1]:
                    $average=($average-$min_average[1])/0.75;
                    $average=$average*10 + 80;
                    break;
                    case $average>=$min_average[2]:
                        $average=($average-$min_average[2])/0.75;
                        $average=$average*10+ 70;
                        break;

                        default:
                        $average+=60;




        }
        return $average;

    }


}

