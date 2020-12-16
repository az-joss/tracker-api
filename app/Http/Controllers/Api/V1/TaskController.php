<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Task\CreateRequest;
use App\Http\Requests\V1\Task\ImportRequest;
use App\Http\Requests\V1\Task\IndexRequest;
use App\Http\Requests\V1\Task\UpdateRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\V1\Task\IndexRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(IndexRequest $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\V1\Task\CreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param \App\Http\Requests\V1\Task\UpdateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Import the specified list to file.
     *
     * @param \App\Http\Requests\V1\Task\ImportRequest $request
     * @return \Illuminate\Http\Response
     */
    public function import(ImportRequest $request)
    {
        //
    }
}
