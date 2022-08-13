<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class CobaBerkas extends Component
{
    use WithFileUploads;
    public $nama, $persyaratan, $pengajuan, $catatan;
    public function render()
    {
        return view(
            'livewire.coba-berkas',
            [
                'berkas' => File::all(),

            ]
        )->extends(
            'layouts.main',
            [
                'tittle' => 'Pengajuan',
                'slug1' => '',
            ]
        )
            ->section('isi');
    }


    public function submit()
    {
        $this->persyaratan = 1;
        $dataValid = $this->validate([
            'persyaratan' => 'required',
            'pengajuan' => 'required',
            'nama' => 'required|mimes:jpg,jpeg,png,pdf',
        ]);

        $dataValid['nama'] = $this->nama->store('berkas', 'public');

        File::create($dataValid);

        session()->flash('message', 'File uploaded.');
    }
}