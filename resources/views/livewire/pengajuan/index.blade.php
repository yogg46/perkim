<div>
    {{-- <h2 class="intro-y text-lg font-medium mt-10">
        Transaction List
    </h2> --}}
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">

                <select wire:model="f_tahun" class="form-select box ml-2">

                    <option value="">Tahun</option>
                    @foreach (array_unique($s_tahun) as $key)
                        <option value="{{ $key }}">{{ $key }}</option>
                    @endforeach
                </select>
                {{-- @json($s_tahun) --}}
                {{-- @dd(array_unique($s_tahun)) --}}
                <select wire:model="f_status" class="form-select box ml-2">
                    <option value="">Status</option>
                    <option value="1">Revisi Berkas</option>
                    <option value="2">Revisi Lapangan</option>
                    <option value="3">Verifikasi Berkas</option>
                    <option value="4">Verifikasi Lapangan</option>
                    <option value="5">Selesai</option>
                </select>
            </div>
            <div class="hidden xl:block mx-auto text-slate-500">

            </div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
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
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        {{-- <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th> --}}
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Tahun</th>
                        <th class="whitespace-nowrap">Tanggal</th>
                        <th class=" whitespace-nowrap">Nama Develomper</th>
                        <th class="whitespace-nowrap">Nama Proyek</th>
                        <th class="text-center whitespace-nowrap">
                            Status
                        </th>
                        <th class="text-center whitespace-nowrap">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        {{-- <td class="w-10">
                            <input class="form-check-input" type="checkbox">
                        </td> --}}
                        @php
                            $no = ($pengajuan->currentpage() - 1) * $pengajuan->perpage() + 1;
                        @endphp
                        @foreach ($pengajuan as $key)
                            <td class=" w-10">
                                {{ $no++ }}
                            </td>
                            <td class="w-20 !py-4"> {{ $key->tahun }} </td>
                            <td class="w-40">
                                {{ $key->date }}
                            </td>
                            <td class="text-uppercase">
                                {{ $key->dev . '. ' . $key->nama_dev }}
                            </td>
                            <td>
                                {{ $key->nama_pro }}
                            </td>
                            <td class="w-40 ">
                                <div class="flex whitespace-nowrap text-success">
                                    <i class="h-4" data-lucide="check-square"></i>
                                    {{ $key->status == 1
                                        ? 'Revisi Berkas'
                                        : ($key->status == 2
                                            ? 'Revisi Lapangan'
                                            : ($key->status == 3
                                                ? 'Verifikasi Berkas'
                                                : ($key->status == 4
                                                    ? 'Verifikasi Lapangan'
                                                    : 'Selesai'))) }}
                                </div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    {{-- <a data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"
                                        class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                            data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                        </svg> View </a> --}}
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5"
                                        href="/pengajuans/{{ $key->slug }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                            data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                        </svg> View </a>
                                </div>
                                {{-- <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="p-5 text-center">
                                                    <div class="w-full h-64 my-5 image-fit"> <img data-tw-toggle="modal"
                                                            data-tw-target="#next-overlapping-modal-preview"
                                                            alt="Midone - HTML Admin Template"
                                                            src="{{ url('public/Image/') }}" class="w-full rounded-md">
                                                    </div>

                                                </div>
                                                <div id="next-overlapping-modal-preview" class="modal" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center img-fluid">
                                                                <div class="h-full  w-full  "> <img
                                                                        src="{{ url('public/Image/') }}"
                                                                        class="h-full rounded-md"> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                    <button type="button" class="btn btn-danger w-24">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mb-3">
            <nav class="w-full sm:w-auto sm:mr-auto">
                {{ $pengajuan->onEachSide(1)->links('layouts.pagination') }}

            </nav>
            <select wire:model.lazy="pagek" class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <div class=" -mb-10">

        </div>
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->

    {{-- <div class="container">
        <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="image">
                <label>
                    <h4>Add image</h4>
                </label>
                <input type="file" class="form-control" required name="image">
            </div>

            <div class="post_button">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div> --}}
    <!-- END: Delete Confirmation Modal -->
</div>
