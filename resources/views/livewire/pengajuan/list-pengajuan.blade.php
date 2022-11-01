<div>
    {{-- <h2 class="intro-y text-lg font-medium mt-10">
        List User
    </h2> --}}


    <div class="grid grid-cols-12 gap-6 mt-5">

        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table id="myTable" class="table myTable table-report mt-2 data ">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Tahun</th>
                        <th class=" whitespace-nowrap">Tanggal</th>
                        <th class="text-center whitespace-nowrap">Nama Proyek</th>
                        <th class="text-center whitespace-nowrap">Status</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $no = ($riwayatPeng->currentpage() - 1) * $riwayatPeng->perpage() + 1;
                    @endphp
                    @foreach ($riwayatPeng as $key)
                        <tr class="intro-x">
                            <td class="w-5">
                                {{ $no++ }}
                            </td>
                            <td>
                                {{ $key->tahun }}
                            </td>
                            <td class="">{{ $key->date }}
                            </td>
                            <td class="text-center">
                                {{-- {{ substr($key->password, 0, 8) }} --}}
                                {{ $key->nama_pro }}
                            </td>
                            <td class="w-60 text-center">
                                {{ $key->status == 1
                                    ? 'Revisi Berkas'
                                    : ($key->status == 2
                                        ? 'Revisi Lapangan'
                                        : ($key->status == 3
                                            ? 'Verifikasi Berkas'
                                            : ($key->status == 4
                                                ? 'Verifikasi Lapangan'
                                                : 'Selesai'))) }}

                            </td>
                            <td class="table-report__action w-40">
                                {{-- <form action="{{ route('user.destroy', $key->id) }}" method="Post"> --}}
                                {{-- <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a> --}}
                                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                <div class="flex justify-center items-center">
                                    {{-- <a class="flex items-center mr-3" href="{{ route('user.edit', 1) }}"> <i
                                            data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    @csrf
                                    @method('DELETE')
                                    <input name="_method" type="hidden" value="DELETE"> --}}
                                    <a href="/pengajuans/{{ $key->slug }}"
                                        class="flex items-center text-danger "> view </a>
                                    {{-- </form> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>


        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mb-3">
            <nav class="w-full sm:w-auto sm:mr-auto">
                {{ $riwayatPeng->onEachSide(1)->links('layouts.pagination') }}

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
    \
</div>
