<div>

    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div
            class="relative  before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button wire:click="jump(1)"
                    class="w-10 h-10 rounded-full btn {{ $step == 1 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}  ">1</button>
                <div
                    class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 1 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }} ">
                    Developer</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="jump(2)"
                    class="w-10 h-10 rounded-full btn {{ $step == 2 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}">2</button>
                <div
                    class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 2 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }}  ">
                    Pengajuan</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="jump(3)"
                    class="w-10 h-10 rounded-full btn {{ $step == 3 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}">3</button>
                <div
                    class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 3 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }}">
                    Type Bangunan
                </div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="jump(4)"
                    class="w-10 h-10 rounded-full btn {{ $step == 4 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}">4</button>
                <div
                    class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 4 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }}">
                    Berkas</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="jump(5)"
                    class="w-10 h-10 rounded-full btn {{ $step == 5 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}">5</button>
                <div
                    class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 5 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }}">
                    Rekomendasi
                </div>
            </div>
        </div>
        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">

            @if ($step == 1)
                {{-- <div class="font-medium text-base"></div> --}}
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Developer</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->dev }}">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Nama Developer</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->nama_dev }}">
                    </div>

                </div>
                <div class="grid grid-cols-24 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-24 sm:col-span-6">

                        <label for="input-wizard-1" class="form-label">Alamat Developer</label>
                        <textarea id="input-wizard-1" readonly class=" form-control form-control-plaintext" cols="12" rows="2">{{ $pengajuan->alamat_dev }}</textarea>
                    </div>
                </div>
                <div class="grid grid-cols-24 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-24 sm:col-span-6">

                        <label for="input-wizard-1" class="form-label">No Telpon</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->no_hp }}">
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Asosiasi</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->asosiasi }}">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">No Asosiasi</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->no_asosiasi }}">
                    </div>

                </div>
            @endif

            @if ($step == 2)
                <div class="grid grid-cols-24 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-24 sm:col-span-6">

                        <label for="input-wizard-1" class="form-label">Nama Proyek</label>

                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->nama_pro }}">
                    </div>
                </div>

                <div class="grid grid-cols-24 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-24 sm:col-span-6">

                        <label for="input-wizard-1" class="form-label">Alamat Proyek</label>

                        <textarea id="input-wizard-1" readonly class=" form-control form-control-plaintext" cols="12" rows="2">{{ $pengajuan->alamat_pro }}</textarea>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Pemohon / Pemberi Kuasa 1</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->pemohon1 }}">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">No Telpon / HP</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->tel_pemohon1 }}">
                    </div>

                </div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Pemohon / Pemberi Kuasa 2</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->pemohon2 }}">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">No Telpon / HP</label>
                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->tel_pemohon2 }}">
                    </div>

                </div>
                <div class="grid grid-cols-12   gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">

                        <label for="input-wizard-1" class="form-label">Luas PSU</label>

                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->psu }}">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">

                        <label for="input-wizard-1" class="form-label">Luas Kavling</label>

                        <input id="input-wizard-1" readonly type="text" class="form-control"
                            placeholder="{{ $pengajuan->kavling }}">
                    </div>
                </div>
                <div class="grid grid-cols-24   gap-4 gap-y-5 mt-5">

                <div class="intro-y col-span-24 sm:col-span-6">

                    <label for="input-wizard-1" class="form-label">Total Kavling</label>

                    <input id="input-wizard-1" readonly type="text" class="form-control"
                        placeholder="{{ $pengajuan->total }}">
                </div>
                </div>
            @endif



            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                @if ($step > 1)
                    <button wire:click="minus" class="btn  mx-2 btn-secondary w-24">Previous</button>
                @endif
                @if ($step < 5 || $step == 1)
                    <button wire:click="plus" class="btn mx-2 btn-primary w-24 ml-2">Next</button>
                @endif

                @if ($step == 5)
                    <a href="/pengajuans" class="btn btn-primary mx-2 w-24 ml-2">selesai</a>
                @endif
                {{-- {{ $step }} --}}
            </div>
        </div>
    </div>
</div>
