<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Codeigniter\API\ResponseTrait;
use App\Models\UsersModel;
use App\Models\DiscQuestionTestModel;
use App\Models\DiscResultAnswerModel;

class Disc extends BaseController
{
    use ResponseTrait;
    private $questionTest;
    private $discResultAnswer;
    public function __construct()
    {
        $this->questionTest = new DiscQuestionTestModel();
        $this->discResultAnswer = new DiscResultAnswerModel();
    }

    public function discQuestionTest()
    {
        return $this->respond([
            'data' => $this->questionTest->findAll()
        ], 200);
    }

    public function discAnswer()
    {
        $answer = $this->request->getVar('answer');
        foreach ($answer as $key => $value) {
            $content[] = $value;
        }
        for ($i=0; $i < count($content); $i++) { 
            $squence[] = $i+1;
            $describe_personality_by_number[] = $content[$i]->describe_personality;
            $not_describe_personality_by_number[] = $content[$i]->not_describe_personality;
            $describe_personality_by_alphabet[] = 1;
            $not_describe_personality_by_alphabet[] = 2;
            $user_id[] = 3;
            $test_date[] = 4;
        }
        $data = [
            'squence' => $squence,
            'describe_personality_by_number' => $describe_personality_by_number,
            'not_describe_personality_by_number' => $not_describe_personality_by_number,
            'describe_personality_by_alphabet' => $describe_personality_by_alphabet,
            'not_describe_personality_by_alphabet' => $not_describe_personality_by_alphabet,
            'user_id' => $user_id,
            'test_date' => $test_date,
        ];
        $this->discResultAnswer->insert($data);
        return $this->respond([
            'message' => 'Success',
            'data' => $data
        ],200);
    }
}