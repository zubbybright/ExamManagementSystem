<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Http\Request;
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

    public function submit(Request $request ){
        //submit a question

        //validate the input
        $data = $request->validate([
            'category'=>['required', 'string'],
            'title' => ['required', 'string', 'max:255'],
            'option' => ['required', 'string'],
        ]);

          
        //if the category does not already exist, insert:
        $catExists = Category::where('name',$data['category'])->first();
        
        if ($catExists == null)
        {
            $category = new Category;
            $category->name = $data['category'];
            $category->save();

            $question = new Question;
            $question->title = $data['title'];
            $question->category_id = $category->id;
            $question->save();

            $options = new Option;
            $options->question_id = $question->id;
            $options->label = $data['option'];
            $options->save();
        }
    }

    public function edit($catId){
        $data = $request->validate([
            'category'=>['required', 'string'],
            'title' => ['required', 'string', 'max:255'],
            'option' => ['required', 'string'],
        ]);

        $category= Category::find($catId);
      
        Category::where('id',$catId)->update(['name'=> $data['category']]);
        
        $question = $category->questions()->update(['title' => $data['title']]);

        $question_id = $question->id->first();

        Option::where('question_id',$question_Id)->update(['label'=> $data['option']]);

    }

    public function delete($id){
        Question::where('id', $id)->delete();
    }

    public function render()
    {
        return view('livewire.show-questions');
    }
}
