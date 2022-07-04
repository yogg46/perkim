@if (Auth::user()->role == 2)
    <li>
        <a href="/home" class="{{ $menu }}  {{ $tittle == 'Dashboard' ? $menu . '--active' : '' }} ">
            <div class="{{ $menu }}__icon"> <i data-lucide="home"></i> </div>
            <div class="{{ $menu }}__title"> Dashboard
                {{-- <i data-lucide="chevron-down" class="{{ $menu }}__sub-icon transform rotate-180"></i> --}}
            </div>
        </a>


    </li>
    <li>
        <a href="javascript:;" class="{{ $menu }} {{ $tittle == 'User Management' ? $menu . '--active' : '' }}">
            <div class="{{ $menu }}__icon"> <i data-lucide="users"></i> </div>
            <div class="{{ $menu }}__title"> User Management <i data-lucide="chevron-down"></i> </div>
        </a>
        <ul class="{{ $tittle == 'User Management' ? $menu . '__sub-open' : '' }}">
            <li>
                <a href="{{ route('user.create') }}"
                    class="{{ $menu }} {{ $slug1 == 'Add User' ? $menu . '--active' : '' }} ">
                    <div class="{{ $menu }}__icon"> <i data-lucide="user-plus"></i> </div>
                    <div class="{{ $menu }}__title"> Add User </div>
                </a>
                <a href="{{ route('user.index') }}"
                    class="{{ $menu }} {{ $slug1 == 'List User' ? $menu . '--active' : '' }} ">
                    <div class="{{ $menu }}__icon"> <i data-lucide="library"></i> </div>
                    <div class="{{ $menu }}__title"> List User </div>
                </a>
            </li>

        </ul>

    </li>
    <li>
        <a href="{{ route('pengajuan.index') }}" class="{{ $menu }}">
            <div class="{{ $menu }}__icon"> <i data-lucide="box"></i> </div>
            <div class="{{ $menu }}__title">
                Pengajuan
                {{-- <div class="{{ $menu }}__sub-icon "> <i data-lucide="chevron-down"></i> </div> --}}
            </div>
        </a>

    </li>
@endif


@if (Auth::user()->role == 1)
    <li>
        <a href="javascript:;.html" class="{{ $menu }} {{ $menu }}--active">
            <div class="{{ $menu }}__icon"> <i data-lucide="home"></i> </div>
            <div class="{{ $menu }}__title"> Dashboard
                {{-- <i data-lucide="chevron-down" class="{{ $menu }}__sub-icon transform rotate-180"></i> --}}
            </div>
        </a>


    </li>

    <li>
        <a href="javascript:;" class="{{ $menu }}">
            <div class="{{ $menu }}__icon"> <i data-lucide="box"></i> </div>
            <div class="{{ $menu }}__title">
                Pengajuan
                {{-- <div class="{{ $menu }}__sub-icon "> <i data-lucide="chevron-down"></i> </div> --}}
            </div>
        </a>

    </li>
    <li>
        <a href="javascript:;" class="{{ $menu }}">
            <div class="{{ $menu }}__icon"> <i data-lucide="box"></i> </div>
            <div class="{{ $menu }}__title">
                Riwayat
                {{-- <div class="{{ $menu }}__sub-icon "> <i data-lucide="chevron-down"></i> </div> --}}
            </div>
        </a>

    </li>
@endif
