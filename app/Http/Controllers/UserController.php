<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $number = 1;
        $id_regions = Region::getRegionId();
        $users = User::orderBy('dinas.nama')
            ->leftJoin('dinas', 'users.id_dinas', '=', 'dinas.id')
            ->whereIn('dinas.id_regions', $id_regions)->get(['users.*']);
        foreach ($users as $user) {
            $user->number = $number;
            $number++;
        }

        return view('user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        //
        $dinas = Dinas::all();
        return view('user.register', [
            'dinas' => $dinas,
        ]);
    }

    public function create()
    {
        $id_regions = Region::getRegionId();
        $dinas = Dinas::orderBy('nama')->whereIn('id_regions', $id_regions)->get();
        return view('user.create', [
            'dinas' => $dinas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'username' => ['required', 'string', 'lowercase', 'unique:' . User::class],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'noHp' => ['required', 'string', 'max:13', 'min:12']
        ]);
        // dd($request->username);
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'noHp' => $request->noHp,
            'id_dinas' => $request->id_dinas,
        ]);
        return response()->json([
            'message' => 'Berhasil',
            'user' => $user
        ]);
        // return redirect('users.login');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'unique:' . User::class],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string'],
            'noHp' => ['required', 'string', 'max:13']
        ]);
        // dd($request->username);
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'noHp' => $request->noHp,
            'role' => $request->role,
            'id_dinas' => $request->id_dinas,
        ]);
        return response()->json([
            'message' => 'Berhasil',
            'user' => $user
        ]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->query('search');

        $users = User::when($searchQuery, function ($query) use ($searchQuery) {
            return $query
                ->where('users.name', 'like', '%' . $searchQuery . '%')
                ->orWhere('users.username', 'like', '%' . $searchQuery . '%')
                ->orWhere('dinas.nama', 'like', '%' . $searchQuery . '%')
                ->orWhere('regions.nama', 'like', '%' . $searchQuery . '%')
                ->orWhere('users.role', 'like', '%' . $searchQuery . '%')
                ->orWhere('users.noHp', 'like', '%' . $searchQuery . '%');
        })
            ->leftJoin('dinas', 'users.id_dinas', '=', 'dinas.id')
            ->leftJoin('regions', 'dinas.id_regions', '=', 'regions.id')
            ->orderBy('dinas.nama')
            ->get(['users.*', 'dinas.nama as dinas_nama', 'regions.nama as region_nama']);

        $users->each(function ($user, $key) {
            $user->number = $key + 1;
        });

        // return view('dinas.index', compact('dinas'));
        return response()->json(['users' => $users]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
        $id_regions = Region::getRegionId();
        $dinas = Dinas::orderBy('nama')->whereIn('id_regions', $id_regions)->get();
        $user = auth()->user();
        return view('user.edit', [
            'user' => $user,
            'dinas' => $dinas,
        ]);
    }

    public function editProfile(Request $request)
    {
        $id = auth()->user()->id;
        $request->validate([
            'username' => ['required', 'string', Rule::unique('users')->ignore($id)],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'noHp' => ['required', 'string', 'max:13'],
            'password' => $request->filled('password') ? ['confirmed', Rules\Password::defaults()] : [],
        ]);
        $user = User::where('id', $id)->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'noHp' => $request->noHp,
            'id_dinas' => $request->id_dinas,
        ]);
        if ($request->filled('password')) {
            $user = User::where('id', $id)->update([
                'password' => Hash::make($request->password),
            ]);
        }
        return response()->json([
            "message" => "Berhasil",
            "data" => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function roleChange(Request $request)
    {
        $id = $request->id;
        $user = User::where('id', $id)->first();
        if ($user->role == 'produsen') {
            # code...
            $user = User::where('id', $id)->update([
                'role' => 'admin'
            ]);
        } else {
            $user = User::where('id', $id)->update([
                'role' => 'produsen'
            ]);
        }
        $user = User::where('id', $id)->first();
        return response()->json(['role' => $user->role]);
    }

    public function reset(Request $request)
    {
        $id = $request->query('id');
        $user = User::where('id', $id)->first();
        return view('user.reset', [
            'user' => $user,
        ]);
    }
    public function default(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $defaults = "deFAULTCoDE";
        $user = User::where('id', $id)->update([
            'password' => Hash::make($defaults)
        ]);
        return response()->json([
            "message" => "Berhasil",
            "data" => $user,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        //
        $id = $request->id;
        // dd($id);
        User::destroy($id);
        return response()->json('Berhasil Hapus');
    }

    public function login()
    {
        return view('user.login');
    }

    public function attemptLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }
        return response()->json(['messages' => "Dont Scam Us!"]);
    }
}
