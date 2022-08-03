<div>
    <h2 class="intro-y text-lg font-medium mt-10">
        List User
    </h2>


    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-stretch mt-2">
            <a href="{{ route('user.create') }}" class="btn btn-primary shadow-md mr-2">Add New User</a>
            <div class="dropdown">

            </div>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="w-full align-self-end sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="search hidden sm:block">
                    <input wire:model="search" type="text" class="search__input form-control border-transparent"
                        placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="search" data-lucide="search"
                        class="lucide lucide-search search__icon dark:text-slate-500">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table id="myTable" class="table myTable table-report mt-2 data ">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Nama User</th>
                        <th class=" whitespace-nowrap">Username</th>
                        <th class="text-center whitespace-nowrap">Password</th>
                        <th class="text-center whitespace-nowrap">Role</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $no = ($user->currentpage() - 1) * $user->perpage() + 1;
                    @endphp
                    @foreach ($user as $key)
                        <tr class="intro-x">
                            <td class="w-5">
                                {{ $no++ }}
                            </td>
                            <td>
                                {{ $key->name }}
                            </td>
                            <td class="">{{ $key->username }}
                            </td>
                            <td class="text-center">
                                {{-- {{ substr($key->password, 0, 8) }} --}}
                                ********
                            </td>
                            <td class="w-60 text-center">
                                {{ $key->hakakses->hakakses }}

                            </td>
                            <td class="table-report__action w-40">
                                <form action="{{ route('user.destroy', $key->id) }}" method="Post">
                                    {{-- <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a> --}}
                                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href="{{ route('user.edit', $key->id) }}"> <i
                                                data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="flex items-center text-danger show_confirm"> <i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </button>
                                </form>
        </div>
        </td>
        </tr>
        @endforeach


        </tbody>
        </table>
    </div>


    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mb-3">
        <nav class="w-full sm:w-auto sm:mr-auto">
            {{ $user->onEachSide(1)->links('layouts.pagination') }}

        </nav>
        <select wire:model="pagek" class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>

    <div class=" -mb-7">

    </div>
</div>
<script>
    $(document).ready(function() {
        $('.data').DataTable();
    });

    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
</div>
