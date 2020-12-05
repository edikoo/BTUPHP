<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quiz\QuizStoreRequest;
use App\Models\Answear;
use App\Models\Question;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;



class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('admin.create');
    }

    public function store(QuizStoreRequest $request)
    {
        if(Gate::allows('isAdmin'))
        {
            try
            {
                \DB::transaction(function() use ($request) {
                    $question = new Question();
                    $question->title = $request->title;
                    $question->save();
                    $question_id = $question->id;

                    foreach ($request->answears as $key => $value) 
                    {
                        $answear = new Answear();
                        $answear->question_id = $question_id;
                        $answear->answear = $value;
                        if($key == $request->iscorrect)
                        {
                            $answear->iscorrect = 1;
                        }
                        $answear->save();
                    }
                });
    
            }
            catch (\PDOException $e)
            {
                return redirect()->back()->with('Error', 'UPS... WE HAVE ERROR');
            }
        }

        return redirect()->back();

    }

    public function quizz()
    {
        $questions = Question::with('answers')->get();
        return view('student.quiz', compact('questions'));
    }

    public function results(Request $request)
    {
        $questionQuantity = Question::count();
        $answearQuantity = 0;

        foreach ($request->except('_token') as $key => $value) {
            $answears = Answear::where('question_id', $key)->get();
            foreach($answears as $answear)
            {
                if($answear->answear == $value)
                    if($answear->iscorrect == 1)
                        $answearQuantity++;
            }
            
        }
        return "QUESTIONS: ".$questionQuantity." - CORRECT ANSWEAR: ".$answearQuantity;
    }
}
