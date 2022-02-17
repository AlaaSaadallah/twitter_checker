<?php

namespace Modules\FeedbackModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Modules\FeedbackModule\Services\FeedbackService;

class FeedbackModuleController extends Controller
{
    private $feedbackService;
    public function __construct(FeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('feedbackmodule::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('feedbackmodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        // dd('5');
        // dd($request->toArray());
        $validator = Validator::make(
            $request->all(),
            [
                "feedback_body" => "required",
                "is_identical" => "required",
            ]
        );

        if ($validator->fails()) {
            // dd("5");
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $feedback = $this->feedbackService->create($request->all()); // add to database action
        if ($feedback) {
            // return view('usermodule::profile', compact('user', 'result', 'tweet', 'account_data'));

            return view('feedbackmodule::index',compact('feedback','user'));
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('feedbackmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
