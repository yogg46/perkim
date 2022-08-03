<?php

namespace App\Http\Controllers;

use App\Models\hakaksesuser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
// use Alert;





class UserMentController extends Controller
{


    public function index()
    {

        $user = User::paginate(10);
        $tittle = 'User Management';
        $slug1 = 'List User';

        return view('UserManagement.index', compact('user', 'tittle', 'slug1'));
    }

    public function create()
    {

        $hak = hakaksesuser::all();
        $tittle = 'User Management';
        $slug1 = 'Add User';
        return view('UserManagement.create', compact('tittle', 'hak', 'slug1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'role' => 'required',
            'password' => 'required|min:8',
        ]);
        $request->merge(['password' => Hash::make($request->input('password'))]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Alert::alert('Data Berhasil disimpan', 'success')->position('top-end');
            return redirect()
                ->route('user.index');
        } else {
            Alert::alert('error', 'danger')->position('top-end');
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }



        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('UserManagement.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $hak = hakaksesuser::all();
        $tittle = 'User Management';
        $slug1 = 'Update User';

        return view('UserManagement.edit', compact('user', 'hak', 'tittle', 'slug1'));
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
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'role' => 'required',
            // 'password' => 'required',
        ]);
        $request->merge(['password' => Hash::make($request->input('password'))]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Alert::toast('Data Berhasil diupdate', 'success');
            return redirect()
                ->route('users');
        } else {
            Alert::toast('error', 'danger');
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        Alert::toast('Data Berhasil dihapus', 'success');

        return redirect()->route('users');
    }
}