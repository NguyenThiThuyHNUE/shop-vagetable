<?php

namespace App\Http\Controllers;

use App\Services\MailUserServiceInterface;
use Illuminate\Http\Request;

class MailUserController extends Controller
{
    private $mailUserService;

    public function __construct(MailUserServiceInterface $mailUserService)
    {
        $this->middleware('auth:admin');
        $this->mailUserService = $mailUserService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = $this->mailUserService->getAll();
        return view('admin.mail-user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.mail.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->mailUserService->create($request);
        return redirect()->route('mailusers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $user = $this->mailUserService->findById($id);
//        return view('admin.user.show', compact('user'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//
//        $user = $this->mailUserService->edit($id);
//        return view('admin.user.update', compact('id','user'));
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        $this->mailUserService->update($request, $id);
//        return redirect()->route('users.index');
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->mailUserService->delete($id);
        return redirect()->route('users.index');
    }

}
