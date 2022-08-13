<div>
    <div>

        <div class="intro-y box py-10 sm:py-20 mt-5">
            <div
                class="relative  before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
                <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                    <button
                        class="w-10 h-10 rounded-full btn {{ $step > 0 ? 'btn-success bg-success  text-white' : '' }} {{ $step == 0 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}  ">1</button>
                    <div
                        class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 0 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }} ">
                        Developer</div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button
                        class="w-10 h-10 rounded-full btn {{ $step > 1 ? 'btn-success bg-success text-white' : '' }} {{ $step == 1 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}">2</button>
                    <div
                        class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 1 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }}  ">
                        Pengajuan</div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button
                        class="w-10 h-10 rounded-full btn {{ $step > 2 ? 'btn-success bg-success text-white' : '' }} {{ $step == 2 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}">3</button>
                    <div
                        class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 2 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }}">
                        Type Bangunan
                    </div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button
                        class="w-10 h-10 rounded-full btn {{ $step > 3 ? 'btn-success bg-success text-white' : '' }} {{ $step == 3 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}">4</button>
                    <div
                        class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 3 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }}">
                        Berkas</div>
                </div>
                {{-- <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button wire:click="jump(5)"
                        class="w-10 h-10 rounded-full btn {{ $step == 5 ? 'btn-primary' : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }}">5</button>
                    <div
                        class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto {{ $step == 5 ? 'font-medium' : 'text-slate-600 dark:text-slate-400' }}">
                        Rekomendasi
                    </div>
                </div> --}}
            </div>
            <div wire:ignore.self
                class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                <form wire:submit.prevent="submit">
                    {{-- @json($pengajuans) <br>
                    @json($bangun)
                    @json($pengajuans->id)
                    @if ($step == 0) --}}
                        {{-- <div class="font-medium text-base"></div> --}}
                        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-21" class="form-label">Developer</label>
                                {{-- <input id="input-wizard-1"  type="text" class="form-control"> --}}
                                <select wire:model="dev" id="input-wizard-21" class=" form-control form-select">
                                    <option value=""> Select Developer </option>
                                    <option value="PT"> PT</option>
                                    <option value="Perorangan"> Perorangan</option>
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-1" class="form-label">Nama Developer</label>
                                <input wire:model="nama_dev" id="input-wizard-1" type="text" class="form-control">
                            </div>

                        </div>
                        <div class="grid grid-cols-24 gap-4 gap-y-5 mt-5">
                            <div class="intro-y col-span-24 sm:col-span-6">

                                <label for="input-wizard-3" class="form-label">Alamat Developer</label>
                                <textarea wire:model="alamat_dev" id="input-wizard-3" class=" form-control form-control-plaintext" cols="12"
                                    rows="2"></textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-24 gap-4 gap-y-5 mt-5">
                            <div class="intro-y col-span-24 sm:col-span-6">

                                <label for="input-wizard-4" class="form-label">No Telpon</label>
                                <input wire:model="no_hp" id="input-wizard-4" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-5" class="form-label">Asosiasi</label>
                                <input wire:model="asosiasi" id="input-wizard-5" type="text" class="form-control">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">No Asosiasi</label>
                                <input wire:model="no_asosiasi" id="input-wizard-6" type="number" class="form-control">
                            </div>

                        </div>
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            @if ($step > 0)
                                <a wire:click="minus" class="btn  mx-2 btn-secondary w-24">Previous</a>
                            @endif
                            @if ($step < 3 || $step == 0)
                                <button type="submit" class="btn mx-2 btn-primary w-24 ml-2">Next</button>
                            @endif

                            @if ($step == 3)
                                <a href="/riwayat" class="btn btn-primary mx-2 w-24 ml-2">selesai</a>
                            @endif
                            {{-- {{ $step }} --}}
                        </div>
                </form>
                @endif

                @if ($step == 1)
                    <div class="grid grid-cols-24 gap-4 gap-y-5 mt-5">
                        <div class="intro-y col-span-24 sm:col-span-6">

                            <label class="form-label">Nama Proyek</label>

                            <input wire:model="nama_pro" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="grid grid-cols-24 gap-4 gap-y-5 mt-5">
                        <div class="intro-y col-span-24 sm:col-span-6">

                            <label class="form-label">Alamat Proyek</label>

                            <textarea wire:model="alamat_pro" class=" form-control form-control-plaintext" cols="12" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label class="form-label">Pemohon / Pemberi Kuasa 1</label>
                            <input wire:model="pemohon1" type="text" class="form-control">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label class="form-label">No Telpon / HP</label>
                            <input wire:model="tel_pemohon1" type="text" class="form-control">
                        </div>

                    </div>
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label class="form-label">Pemohon / Pemberi Kuasa 2</label>
                            <input wire:model="pemohon2" type="text" class="form-control">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label class="form-label">No Telpon / HP</label>
                            <input wire:model="tel_pemohon2" type="text" class="form-control">
                        </div>

                    </div>
                    <div class="grid grid-cols-12   gap-4 gap-y-5 mt-5">
                        <div class="intro-y col-span-12 sm:col-span-6">

                            <label class="form-label">Luas PSU</label>

                            <input wire:model="psu" type="number" class="form-control">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">

                            <label class="form-label">Luas Kavling</label>

                            <input wire:model="kavling" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="grid grid-cols-24   gap-4 gap-y-5 mt-5">

                        <div class="intro-y col-span-24 sm:col-span-6">

                            <label class="form-label">Total Kavling</label>

                            <input wire:model="total" type="number"
                                placeholder="{{ intval($psu) + intval($kavling) }}" class="form-control">
                        </div>
                    </div>
                    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        @if ($step > 0)
                            <a wire:click="minus" class="btn  mx-2 btn-secondary w-24">Previous</a>
                        @endif
                        @if ($step < 3 || $step == 0)
                            <button type="submit" class="btn mx-2 btn-primary w-24 ml-2">Next</button>
                        @endif

                        @if ($step == 3)
                            <a href="/riwayat" class="btn btn-primary mx-2 w-24 ml-2">selesai</a>
                        @endif
                        {{-- {{ $step }} --}}
                    </div>
                    </form>
                @endif


                @if ($step == 2)
                    </form>
                    <div class="w-full mt-3 xl:mt-0 flex-1">
                        @php
                            $no1 = 1;
                            $no = 2;
                        @endphp
                        <form>

                            <div class="overflow-x-auto">
                                <table class="table border">
                                    <thead>
                                        <tr>
                                            <th class="!pr-2 bg-slate-50 dark:bg-darkmode-800"></th>
                                            <th class="bg-slate-50 dark:bg-darkmode-800"></th>
                                            <th
                                                class="!px-2 bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap">
                                                Type Bangunan</th>
                                            <th
                                                class="!px-2 bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap">
                                                Jumlah</th>
                                            <th
                                                class="!px-2 bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap">
                                                Kategori</th>
                                            <th class="!px-2 bg-slate-50 dark:bg-darkmode-800"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="!pr-2">{{ $no1 }}.</td>
                                            <td class="whitespace-nowrap">
                                                <input type="hidden" wire:model="pengajuan_id.0"
                                                    class="form-control min-w-[6rem]">
                                            </td>
                                            <td class="!px-2">
                                                <input required type="text" wire:model="type.0"
                                                    class="form-control min-w-[6rem]" placeholder="Type Bangunan">
                                            </td>
                                            <td class="!px-2">
                                                <input required type="number" wire:model="jumlah.0"
                                                    class="form-control min-w-[6rem]" placeholder="Jumlah">
                                            </td>
                                            <td class="!px-2">
                                                <div class="input-group">
                                                    <select required wire:model="kategori.0" required
                                                        class=" form-control form-select min-w-[6rem]">
                                                        <option value="">Kategori</option>
                                                        <option value="Komersil">Komersil</option>
                                                        <option value="Subsidi">Subsidi</option>
                                                        <option value="Ruko">Ruko</option>
                                                    </select>

                                                </div>
                                            </td>
                                            <td class="!pl-4 text-slate-500">
                                                <a class=" zoom-in text-danger" wire:click.prevent="remove(0)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" icon-name="trash-2"
                                                        data-lucide="trash-2" class="lucide lucide-trash-2 w-4 h-4">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg> </a>
                                            </td>
                                        </tr>
                                        @foreach ($inputs as $key => $value)
                                            <tr>
                                                <td class="!pr-2">{{ $no++ }}.</td>
                                                <td class="whitespace-nowrap">
                                                    <input type="hidden"
                                                        wire:model="pengajuan_id.{{ $value }}"
                                                        class="form-control min-w-[6rem]">
                                                </td>
                                                <td class="!px-2">
                                                    <input required type="text"
                                                        wire:model="type.{{ $value }}"
                                                        class="form-control min-w-[6rem]" placeholder="Type Bangunan">
                                                </td>
                                                <td class="!px-2">
                                                    <input required type="number"
                                                        wire:model="jumlah.{{ $value }}"
                                                        class="form-control min-w-[6rem]" placeholder="Jumlah">
                                                </td>
                                                <td class="!px-2">
                                                    <div class="input-group">
                                                        <select required wire:model="kategori.{{ $value }}"
                                                            required class=" form-control form-select min-w-[6rem]">
                                                            <option value="">Kategori</option>
                                                            <option value="Komersil">Komersil</option>
                                                            <option value="Subsidi">Subsidi</option>
                                                            <option value="Ruko">Ruko</option>
                                                        </select>

                                                    </div>
                                                </td>
                                                <td class="!pl-4 text-slate-500  ">
                                                    <a class=" hover text-danger zoom-in"
                                                        wire:click.prevent="remove({{ $key }})"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="trash-2" data-lucide="trash-2"
                                                            class="lucide lucide-trash-2 w-4 h-4">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg> </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button wire:click.prevent="add({{ $i }})"
                                class="btn btn-outline-primary border-dashed w-full mt-4"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="plus"
                                    data-lucide="plus" class="lucide lucide-plus w-4 h-4 mr-2">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Add New </button>

                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Total Kavling</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input wire:model="total_kavling" id="product-stock" type="number"
                                        class="form-control" placeholder="Total Kavling">
                                </div>

                                <a wire:click.prevent="store()"
                                    class="btn mx-2 text-white  btn-success w-24 ml-2">Simpan</a>

                            </div>
                        </form>

                        {{-- </form> --}}
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            @if ($step > 0)
                                <a wire:click="minus" class="btn  mx-2 btn-secondary w-24">Previous</a>
                            @endif
                            @if ($step < 3 || $step == 0)
                                <button wire:click="plus" class="btn mx-2 btn-primary w-24 ml-2">Next</button>
                            @endif

                            @if ($step == 3)
                                <a href="/riwayat" class="btn btn-primary mx-2 w-24 ml-2">selesai</a>
                            @endif
                            {{-- {{ $step }} --}}
                        </div>
                    </div>
                @endif
                @if ($step == 3)
                    <form action="">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        {{-- <th class="whitespace-nowrap">#</th> --}}
                                        <th class="whitespace-nowrap">No</th>
                                        <th class="whitespace-nowrap">Persyaratan</th>
                                        <th class="whitespace-nowrap">Upload</th>
                                        <th class="whitespace-nowrap">View</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Surat Permohonan pengesahan Site Plan Bupati Magetan Cq. Kepala Dinas
                                            Perumahan
                                            dan
                                            Kawasan Permukiman Kab. Magetan*</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Fotokopi IPR/ IL/ IPPT *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Fotokopi bukti kepemilikan lahan (Sertifikat Tanah, Akta Jual Beli, dan
                                            pelepasan
                                            hak), dilengkapi dengan scan peta bidang atau gambar hasil ukur ulang dari
                                            kantor
                                            pertanahan *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Fotokopi :Akta Pendirian PT (berdasarkan Hukum) bergerak di bodang perumahan
                                            SK
                                            Menteri Hukum dan HAM beserta anggota asosiasi perumahan</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Fotokopi PBB tahun berjalan *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Fotokopi SPPL/ UKPL – UPL/ Amdal (dokumen lingkungan) *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Fotokopi KTP *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Fotokopi KTP dan SKA Perencana (yang menggambar) *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Surat Rekomendasi dari Bidang SDA Dinas PUPR * <br>
                                            a. Jika lahan bangunan berbatasan dengan saluran irigasi <br>
                                            b. Jika menutup saluran irigasi
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Surat Rekomendasi dari Dinas PU Sumber Daya Air Provinsi * <br>
                                            a. Jika lahan bangunan berbatasan dengan sungai <br>
                                            b. Jika membuat jembatan
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- dilengkappi
                                            KTP
                                            pemegang Surat Kuasa *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan
                                            rangkap 2
                                            (Dua) beserta file autocad *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Surat Perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui
                                            Kepala
                                            Desa / Lurah terkait penyedoa TPU *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Surat keterangan bebas banjir dari dinas terkait (bial diperlukan) *</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Surat Keterangan lain bila diperlukan</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>

                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            @if ($step > 0)
                                <a wire:click="minus" class="btn  mx-2 btn-secondary w-24">Previous</a>
                            @endif
                            @if ($step < 3 || $step == 0)
                                <button wire:click="plus" class="btn mx-2 btn-primary w-24 ml-2">Next</button>
                            @endif

                            @if ($step == 3)
                                <a href="/riwayat" class="btn btn-primary mx-2 w-24 ml-2">selesai</a>
                            @endif
                            {{-- {{ $step }} --}}
                        </div>
                    </form>
                @endif
                {{-- @if ($step == 5)
                        <div class="intro-y flex flex-col sm:flex-row items-center mt-3">
                            <h2 class="text-lg font-medium mr-auto">
                                Nomer Surat Rekomendasi :
                            </h2>
                            <h2 class="text-lg font-medium mr-auto">
                                812/129/123.122/1235
                            </h2>

                        </div>

                        <div class=" intro-y flex mt-8">

                            <iframe src="{{ Storage::url('berkas/cxE2xznLDrTOgaw3kwnYRViT4AoZXSThyoHZB3xB.pdf') }}"
                                frameborder="0" style="border-style: none;width: 100%;  height: 820px;"> </iframe>
                        </div>
                    @endif --}}



            </div>
        </div>
    </div>

</div>
