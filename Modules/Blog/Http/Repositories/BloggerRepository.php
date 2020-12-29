<?php

namespace Modules\Blog\Http\Repositories;

use Modules\Blog\Entities\Blogger;
use App\Models\User as User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BloggerRepository implements BloggerRepositoryInterface {

    public function create(array $attributes){
        return DB::transaction(function () use($attributes) {
            $user= User::Create([
                'name' =>  $attributes['name'],
                'email' =>  $attributes['email'],
                'password' => Hash::make($attributes['password']),
                'api_token' => Str::random(80),
            ]);
            $blogger=new Blogger($attributes);
            $blogger->user_id=$user->id;
            $blogger->save();
            return $blogger;
        });


    }

    public function update(Blogger $blogger,array $parameters){
        if ($blogger) {
            $blogger->update($parameters);
            return $blogger;
        }

        return null;
    }

    public function delete(Blogger $blogger){
       return User::destroy($blogger->user_id);
    }

    public function findById($id){
        return Blogger::find($id);
    }

}
