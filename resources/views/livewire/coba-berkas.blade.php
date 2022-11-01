<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($berkas)
        Photo Preview:
        <iframe class=" w-auto w-full -mb-10" src="{{ $berkas->temporaryUrl() }}" frameborder="0" border="0"
            cellspacing="0" style="border-style: none;width: 100%;  height: 220px;"> </iframe><br>
        <img class=" h-auto tns-autowidth" src="{{ $berkas->temporaryUrl() }}">
    @endif
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <input type="hidden" value="1" wire:model="persyaratan">
        @error('persyaratan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        {{-- <input type="text" value="1" wire:model="persyaratan"> --}}
        @error('pengajuan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="hidden" value="1" wire:model="pengajuan">
        <input type="file" wire:model="berkas">


        <div wire:loading wire:target="berkas">Uploading...</div>

        @error('berkas')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <button type="submit">save</button>
    </form>



    {{-- @foreach ($berkas1 as $key)
        {{ $key->berkas }} <br>

        <img src="{{ $key->berkas }}" alt=""> <br>
        <iframe class=" w-auto w-full -mb-10" src="{{ Storage::url($key->berkas) }}" frameborder="0" border="0"
            cellspacing="0" style="border-style: none;width: 100%;  height: 220px;"> </iframe><br>
    @endforeach --}}



    <div> <a wire:click.prevent="seb" class="btn btn-success-soft text-success w-28 mr-2 mb-2 btn"
            data-tw-toggle="modal" data-tw-target="#upload">
            Upload</a> </div>


    <div wire:ignore.self id="upload" data-tw-backdrop="static" class="modal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">
                        {{ $ket_sar }}
                        Upload Berkas
                    </h2>
                    <div>
                        <a data-tw-dismiss="modal" href="javascript:;">
                            <i class="w-8 h-8 text-slate-400"></i> x
                        </a>
                    </div>
                </div> <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <form wire:submit.prevent="submit()" enctype="multipart/form-data">
                    <div class="modal-body ">
                        <div class=" mb-3 font-medium">

                            <p>

                                {{ $ket_sar }}
                            </p>

                        </div>
                        <div>


                            @if ($berkas)
                                Photo Preview:
                                <iframe class=" w-auto w-full -mb-10" src="{{ $berkas->temporaryUrl() }}"
                                    frameborder="0" border="0" cellspacing="0"
                                    style="border-style: none;width: 100%;  height: 220px;">
                                </iframe><br>
                            @endif
                        </div>
                        <input type="hidden" name="" value="1" wire:model="persyaratan">
                        {{-- {{ $pengajuan_id }} --}}
                        <input type="hidden" name="" value="1" wire:model="pengajuan">
                        <div class="mb-3">
                            {{-- <label for="formFile" class="form-label">Default file input example</label> --}}
                            <input class="btn btn-primary-soft" type="file" id="formFile" wire:model="berkas">
                            @error('berkas')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> <!-- END: Modal Body -->
                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-20 mr-1">Cancel</button>

                        <button type="submit" class="btn btn-primary w-20">

                            Selesai
                        </button>

                    </div>
                </form>

                <!-- END: Modal Footer -->
            </div>
        </div>
    </div>


    <!-- BEGIN: Modal Toggle -->
    <div wire:ignore wire:click="seb" class="text-center"> <a href="javascript:;" data-bs-toggle="modal"
            data-bs-target="#static-backdrop-modal-preview" class="btn btn-primary">Show Modal</a> </div>
    <!-- END: Modal Toggle -->
    <!-- BEGIN: Modal Content -->
    <div wire:ignore id="static-backdrop-modal-preview" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body px-5 py-10">
                    <div class="text-center">
                        <div class="mb-5">{{ $ket_sar }}</div> <button type="button" data-tw-dismiss="modal"
                            class="btn btn-primary w-24">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END: Modal Content -->
    <!-- Button trigger modal -->
    <button wire:ignore wire:click="seb" type="button" class="btn btn-primary" data-tw-toggle="modal"
        data-tw-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title {{ $ket_sar }} </h5>
                    <button type="button" class="btn-close" data-tw-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-tw-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <button type="button" wire:click="seb" class=" btn btn-primary open-modal" data-open="modal1">
        Launch first modal with a slide animation
    </button>



    <div class="modal" id="modal1" data-animation="slideInOutLeft">
        <div class="modal-dialog">
            <header class="modal-header">
                The header of the first modal {{ $ket_sar }}
                <button class="close-modal" aria-label="close modal" data-close>
                    ✕
                </button>
            </header>
            <section class="modal-content">

            </section>
            <footer class="modal-footer">
                The footer of the first modal
            </footer>
        </div>
    </div>




    <script>
        window.livewire.on('up', () => {
            $('#upload').modal('hide');
        })
    </script>

</div>
