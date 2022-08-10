<?php

namespace App\Http\Livewire;

use App\Models\Pengajuan as ModelsPengajuan;
use Livewire\Component;

class Pengajuan extends Component
{
    public $step = 1;
    public function mount($slug)
    {
        $this->pengajuan = ModelsPengajuan::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.pengajuan'
        )->extends(
            'layouts.main',
            [
                'tittle' => 'Pengajuan',
                'slug1' => $this->pengajuan->nama_pro,
            ]
        )
            ->section('isi');;
    }


    public function plus()
    {
        $this->step++;
    }
    public function minus()
    {
        $this->step--;
    }
    public function jump($to)
    {
        $this->step = $to;
    }

}