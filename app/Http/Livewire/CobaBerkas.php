<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class CobaBerkas extends Component
{
    use WithFileUploads;
    public $berkas, $persyaratan, $pengajuan, $catatan, $ket_sar;
    public function render()
    {
        return view(
            'livewire.coba-berkas',
            [
                'berkas1' => File::all(),

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

    public function seb()
    {
        $this->ket_sar = 'asu';
    }
    public function submit()
    {
        $this->persyaratan = 1;
        $dataValid = $this->validate([
            'persyaratan' => 'required',
            'pengajuan' => 'required',
            'berkas' => 'required|mimes:jpg,jpeg,png,pdf',
        ]);

        $dataValid['berkas'] = $this->berkas->store('berkas', 'public');

        File::create($dataValid);
        $this->emit('up');
        session()->flash('message', 'File uploaded.');
    }
}