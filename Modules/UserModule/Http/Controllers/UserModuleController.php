<?php

namespace Modules\UserModule\Http\Controllers;

use Atymic\Twitter\Facade\Twitter as FacadeTwitter;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Modules\UserModule\Services\UserService;
use Atymic\Twitter\Twitter as TwitterContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rules\Exists;
use Twitter;

class UserModuleController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('usermodule::login');
    }

    public function profile()
    {
        $user = Auth::user();
     
        $querier = FacadeTwitter::forApiV2()->getQuerier();
        $result = $querier
            ->withOAuth2Client()
            ->get('users/by/username/' . $user->username);
        // dd($result->errors);
        if ($result->errors) {
            return view('usermodule::profile', compact('user'));
        } else if ($result->data) {
            $user_params = [
                'user.fields' => 'profile_image_url,url,username',
                'tweet.fields' => 'author_id,text,created_at',
                TwitterContract::KEY_RESPONSE_FORMAT => TwitterContract::RESPONSE_FORMAT_JSON,
            ];
            $account_data = JsonResponse::fromJsonString(FacadeTwitter::getUserByUsername($user->username, $user_params))->getData();
            // dd($account_data);
            $params = [
                'place.fields' => 'country,name',
                'tweet.fields' => 'author_id,created_at',
                'expansions' => 'author_id,in_reply_to_user_id',
                TwitterContract::KEY_RESPONSE_FORMAT => TwitterContract::RESPONSE_FORMAT_JSON,
            ];

            $tweets = JsonResponse::fromJsonString(FacadeTwitter::userTweets($result->data->id, $params))->getData();
            //    dd((($tweets->meta->result_count)));
            if ($tweets->meta->result_count < 1) {
            } else {
                // dd($tweets->data[0]);
                $tweet = $tweets->data[0];
            }


            //    dd($tweets->data[0]->text);
        } else {
        }
        return view('usermodule::profile', compact('user', 'result', 'tweet', 'account_data'));
    }

    function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // dd($request->all());
        if (Auth::attempt($credentials)) {

            return redirect()->route("user.profile");
        }
        return redirect()->back()->withErrors(['error' => 'Wrong Username or Password']);
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function register()
    {
        return view('usermodule::register');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $validator = Validator::make(
            $request->all(),
            [
                "fname" => "required|min:3",
                "lname" => "nullable|min:3",
                "username" => "required|unique:users,username",
                "password" => "required|min:4",
                "phone" => "required",
                "gender" => "required",
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]
        );

        if ($validator->fails()) {
            // dd("5");
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = $this->userService->create($request->all()); // add to database action
        if ($user) {
            return redirect()->route("user.login")
                ->with('success', 'New Account Created Successfully');
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('user.login');
    }
}
