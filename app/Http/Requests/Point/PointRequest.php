<?php

namespace App\Http\Requests\Point;

use App\Rules\AverageRule;
use Illuminate\Foundation\Http\FormRequest;

class PointRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'average_rate'=>'required',
            'average'=>['required','numeric','between:1,100',new AverageRule($this->average_rate)],
            'specialization_mark'=>'required|numeric|between:0,100',
            'general_exam'=>'required|numeric|between:0,100',
            'year'=>'required|integer',
            'month'=>'required|integer',
            'day'=>'required|integer',
        ];
    }
     /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function messages()
{
    return [
            'average_rate.required' => 'حقل علامة المعدل  مطلوب ',
            'average.required' => 'حقل  المعدل  مطلوب ',
            'specialization_mark.required' => 'حقل علامة التخصص  مطلوب ',
            'general_exam.required' => 'حقل علامة الإمتحان العام  مطلوب ',
            'year.required' => 'حقل  السنة  مطلوب ',
            'month.required' => 'حقل علامة الشهر  مطلوب ',
            'day.required' => 'حقل علامة اليوم  مطلوب ',

            'average.between' => 'الرجاء إدخال قيمة صحيحة',

            'specialization_mark.between' => 'الرجاء إدخال قيمة صحيحة',

            'general_exam.between' => 'الرجاء إدخال قيمة صحيحة',
            'year.integer' => 'الرجاء إدخال قيمة صحيحة',
            'month.integer' => 'الرجاء إدخال قيمة صحيحة',
            'day.integer' => 'الرجاء إدخال قيمة صحيحة',



    ];
}
}
