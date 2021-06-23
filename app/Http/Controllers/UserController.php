<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
     
      
    }
    public function create(){
     
        return view('user.create');
    }
    
    public function details($id){

        $users=$this->getUserList();
        $user='';

        foreach($users as $u){
            if($u['id']==$id){
                $users = $u;
                break;
            }
        }
       // $user= ['id'=>1, 'name'=>'tanvir', 'password'=>'123', 'email'=>'tanvir@aiub.edu', 'type'=>'admin'];
        return view('user.details')->with('user',$user);
    }

    public function edit($id){
     
        echo $id;
    }

    public function update(Request $req, $id){
     
        echo $id;
    }

    public function delete($id){
     
        echo $id;
    }

    public function destroy($id){
     
        echo $id;
    }
    
    public function list(){

        $users = $this->getUserList();
        return view('user.userlist')->with('userlist',$users);
    }

    public function getUserList(){
        return [
            ['id' =>1, 'username'=> 'tanvir','password'=> '123','email'=>'tanvir@aiub.edu','type'=>'admin'],
            ['id' =>2, 'username'=>'xyz', 'password'=> 'xyz','email'=>'xyz@aiub.edu','type'=>'user'],
            ['id' =>3, 'username'=>'pqr', 'password'=> '123','email'=>'abc@aiub.edu','type'=>'user'],
        ];

    }
}
