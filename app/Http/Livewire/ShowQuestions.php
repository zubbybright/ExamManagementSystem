<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class ShowQuestions extends Component
{   

    public $technicalQuestions, $aptitudeQuestions , $logicalQuestions ;

    public function mount(){

        $technicalQuestions = Question::where('category_id',1)->first();

        $aptitudeQuestions = Question::where('category_id',2)->first();
        
        $logicalQuestions = Question::where('category_id',3)->first();

        $this->technicalQuestions = $technicalQuestions->title;
        $this->aptitudeQuestions = $aptitudeQuestions->title;
        $this->logicalQuestions = $logicalQuestions->title;
        return [$this->technicalQuestions,$this->aptitudeQuestions, $this->logicalQuestions];

       
        
    }
    
    public function render()
    {
        return view('livewire.show-questions');
    }
}
