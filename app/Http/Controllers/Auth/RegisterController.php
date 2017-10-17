<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    

    use RegistersUsers;

  
    protected $redirectTo = '/home';

  
    public function __construct()
    {
        $this->middleware('guest');
    }

  
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required'
        ]);
    }

  
    protected function create(array $data)
    {

        if($data['gender'] == "Male"){
            $avatar = 'public/defaults/avatars/male.png';
        }else{
            $avatar = 'public/defaults/avatars/female.png';
        }
        
        $first = $data['firstname'];
        $last = $data['lastname'];
        $slug = $first . '-' . $last;

        // $avatar = 'public/defaults/avatars/male.png';



        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'slug' => $slug,
            'gender' => $data['gender'],
            'avatar' => $avatar
        ]);

        $this->assignRole($user)->createprofile($user);
        return $user;
    }

    protected function assignRole($user){
        
        $user->roles()->attach(Role::where('name', 'client')->first());

        return $this;
    }

    protected function createprofile($user){

        $profile = new Profile();
        $profile->user_id = $user->id;
        // $profile->age = null;
        // $profile->bio = '';
        // $profile->bday ='';
        // $profile->civil_status = '';

        $user->profile()->save($profile);

        return $this;
    }

}
