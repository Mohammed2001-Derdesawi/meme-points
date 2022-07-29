<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AverageRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $average_rate;
    public function __construct($rate)
    {
        $this->average_rate=$rate;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($this->average_rate==4)
        return $value < 5;
        else if ($this->average_rate == 5)
        return $value < 6;


        return true;


    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'الرجاء إدخال معدل تراكمي صحيح ';
    }
}
