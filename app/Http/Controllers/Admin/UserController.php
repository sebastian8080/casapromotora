<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public $search;
    
    public function index(Request $request)
    {
        if($request->q != null) $users = User::where('name', 'LIKE', '%' . $request->q . '%')->paginate(10);
        else $users = User::paginate(10);
        return view('admin.users.index', compact("users"));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){

        $request->validate([
            'email' => 'unique:users'
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        if($request->hasFile("image")){

            $imagen = $request->file("image");
            $nombreimagen = Str::slug($request->name).".".$imagen->guessExtension();
            $ruta = public_path("uploads/profiles/");

            copy($imagen->getRealPath(), $ruta.$nombreimagen);
            
            $user->image = $nombreimagen;

            $user->save();
        }

        return redirect()->route('admin.users.index')->with('usercreated', 'Se creo el nuevo usuario');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact("user", "roles"));
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password != null) $user->password = Hash::make($request->password);
        $user->roles()->sync($request->roles);

        $user->save();
        
        return redirect()->route('admin.users.edit', $user)->with('info', 'Se actualizo el usuario: '. $user->name);
    }

}
