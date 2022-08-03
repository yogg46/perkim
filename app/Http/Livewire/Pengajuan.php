<?php

namespace App\Http\Livewire;

use App\Models\Pengajuan as ModelsPengajuan;
use Livewire\Component;

class Pengajuan extends Component
{
    public function mount($slug)
    {
        $this->pengajuan = ModelsPengajuan::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.pengajuan')->extends(
            'layouts.main',
            [
                'tittle' => 'Pengajuan',
                'slug1' => $this->pengajuan->nama_pro,
            ]
        )
            ->section('isi');;
    }
}