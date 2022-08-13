<?php

namespace App\Http\Livewire\Pengajuan;

use Livewire\Component;

class ListPengajuan extends Component
{
    public function render()
    {
        return view('livewire.pengajuan.list-pengajuan',[
            
        ])
        ->extends(
            'layouts.main',
            [
                'tittle' => 'Riwayat',
                'slug1' => ''
            ]
        )
        ->section('isi');
    }
}