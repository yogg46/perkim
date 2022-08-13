<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {{-- @if ($nama)
        Photo Preview:
        <iframe class=" h-auto tns-autowidth" src="{{ $nama->temporaryUrl() }}"> </iframe>
    @endif --}}
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <input type="hidden" value="1" wire:model="persyaratan">
        @error('persyaratan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        {{-- <input type="text" value="1" wire:model="persyaratan"> --}}
        @error('pengajuan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="text" value="1" wire:model="pengajuan">
        <input type="file" wire:model="nama">


        <div wire:loading wire:target="nama">Uploading...</div>

        @error('nama')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <button type="submit">save</button>
    </form>



    @foreach ($berkas as $key)
        {{ $key->nama }} <br>

        <img src="{{ $key->nama }}" alt=""> <br>
        <iframe class=" w-auto w-full -mb-10" src="{{ Storage::url($key->nama) }}" frameborder="0" border="0"
            cellspacing="0" style="border-style: none;width: 100%;  height: 220px;"> </iframe><br>
    @endforeach

</div>
