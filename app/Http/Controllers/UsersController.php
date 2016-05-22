<?php
/**
 * Created by PhpStorm.
 * User: Cristian
 * Date: 17/5/16
 * Time: 16:07
 */
namespace Blog\Http\Controllers;
use Blog\User;

class UsersController extends Controller{
    //metodo oop
    /**
     *
     */
    public function getOrm()
    {
        $users = User::select('id','first_name')
            ->with('rol')//relacion IMPORTANTE
            ->leftJoin('rols', 'users.id', '=', 'rols.users_id')
            ->orderBy('first_name','ASC')
            ->get();//Campturar datos
        dd($users->toArray());
    }
    //metodo arcaico
    public function getIndex()
    {
        $result = \DB::table('users')->get();
        dd($result);
        return $result;
    }

}