<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Codeigniter\API\ResponseTrait;
use App\Models\UsersModel;
use App\Models\DiscQuestionTest;

class Disc extends BaseController
{
    use ResponseTrait;
    private $questionTest;
    public function __construct()
    {
        $this->questionTest = new DiscQuestionTest();
    }
    public function questionTest()
    {
        return $this->respond([
            'data' => $this->questionTest->findAll()
        ], 200);
    }
}