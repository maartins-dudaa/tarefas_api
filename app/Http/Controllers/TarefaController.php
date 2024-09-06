<?php

namespace App\Http\Controllers;

use App\Service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller

{
    protected $tarefaService;

    public function __construct(TarefaService $tarefaService)
    {
        $this->tarefaService = $tarefaService;
    }





    public function store(Request $request)
    {
        $result = $this->tarefaService->create($request->all());
        return $result;
    }
}
