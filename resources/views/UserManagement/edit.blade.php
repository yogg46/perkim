@extends('layouts.main')

@section('isi')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">

        </h2>
    </div>
    <div class=" intr box mt-5">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Update User </h2>

        </div>
        <div id="input" class="p-5">
            <div class="preview">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="regular-form-1" class="form-label">Nama</label>
                        <input id="regular-form-1" type="text" class="form-control" placeholder="Nama" name='name'
                            value="{{ old('name', $user->name) }}" required>
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-2" class="form-label">Username</label>
                        <input name='username' value="{{ old('username', $user->username) }}" required id="regular-form-2"
                            type="text" class="form-control " placeholder="Username">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-3" class="form-label">Password</label>
                        <input name='password' value="{{ old('password') }}" id="regular-form-3" type="password"
                            class="form-control " placeholder="Password">
                    </div>

                    <div class="mt-3">
                        <label for="regular-form-3" class="form-label">Role</label>
                        <select name="role" data-placeholder="" class="tom-select w-full">
                            {{-- <option value="1 selected"> ccc</option> --}}
                            @foreach ($hak as $key)
                                <option value="{{ $key->id }}" {{ $key->id == $user->role ? 'selected' : '' }}>
                                    {{ $key->hakakses }} </option>
                            @endforeach

                        </select>

                    </div>


                    <button type="submit" class="btn btn-success mt-5"> <span class=" text-white"> Simpan </span> </button>
                    <a href="{{ route('user.index') }}" class="btn btn-danger  ml-3 mt-5">Batal</a>
                </form>

            </div>
        </div>
    </div>
@endsection
