<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResource;
use App\Model\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return QuestionResource::collection(Question::latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        auth()->user()->question()->create($request->all());
        Question::create($request->all());
        return \response('Created', Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param Question $question
     * @return QuestionResource
     */
    public function show(Question $question)
    {
        return new QuestionResource($question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return response('Updated', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Question $question
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return response("Deleted Successfully", Response::HTTP_NO_CONTENT);
    }
}
