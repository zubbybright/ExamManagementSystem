<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class ShowQuestions extends Component
{   

    public $questions;

    public function mount(){

        $questions = Question::get();
        return $questions;

        $this->questions = $questions;
        
    }
    
    public function render()
    {
        return view('livewire.show-questions');
    }
}
