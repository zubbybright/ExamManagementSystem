<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Category;
use App\Models\Option;


class ShowQuestions extends Component
{   

    public $technicalQuestions, $aptitudeQuestions , $logicalQuestions ;

    public function mount(){
        $message =" No records yet";
        $technicalQuestions = Question::where('category_id',1)->first();

        $aptitudeQuestions = Question::where('category_id',2)->first();
        
        $logicalQuestions = Question::where('category_id',3)->first();

        if($technicalQuestions|| $aptitudeQuestions||$logicalQuestions == null){
            return $this->technicalQuestions = $message;
            $this->aptitudeQuestions = $message;
            $this->logicalQuestions = $message;
        }
        $this->technicalQuestions = $technicalQuestions->title;
        $this->aptitudeQuestions = $aptitudeQuestions->title;
        $this->logicalQuestions = $logicalQuestions->title;

        return [$this->technicalQuestions,$this->aptitudeQuestions, $this->logicalQuestions];

       
        
    }

 
}
