<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UsuarioController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Usuario = User::select('id','name', 'email', 'email_verified_at','password', 'remember_password',
            'created_at', 'updated_at')
            ->get();
    return $Usuario;
    }
    public function login(){
        $login = User::select('email', 'password')
            ->get();

        return $login;
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $Usuario2 = User::create($request->all());
        return $Usuario2;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $Usuario = User::select(  'id', 'name', 'email', 'email_verified_at','password', 'remember_password',
            'created_at', 'updated_at')
            ->Where('users.id',$id)->first();
        return $Usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Usuario = $request->except(['_method']);

        $Usuario3 = User::find($id)->where('id','=', $id)->update($Usuario);
        return $Usuario3;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Usuarios = User::where('id',$id)->delete();
        return $Usuarios;
    }

}
