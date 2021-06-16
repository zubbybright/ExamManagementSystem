<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;
use App\Models\Option;

class QuestionsController extends Controller
{
    //
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
