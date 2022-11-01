<?php

namespace App\Http\Livewire\Pengajuan;

use App\Http\Livewire\Pengajuan;
use App\Models\Pengajuan as ModelsPengajuan;
use App\Models\type_bangunan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ListPengajuan extends Component
{
    use WithPagination;

    public $search = '';
    public $pagek = 10;
    public $s = 4;
    public function render()
    {
        $report = ModelsPengajuan::whereHas('berkas', function ($q) {
            $q->where('pengajuan', 'LIKE', 6);
        })->first();
        return view('livewire.pengajuan.list-pengajuan', [
            'p' => type_bangunan::query()->whereIn('pengajuan_id', [$this->s])->get(),
            'c' => ModelsPengajuan::where('pengaju', Auth::user()->id)->get(),
            'k' => $report,
            'pengajuan' => ModelsPengajuan::where('pengaju', Auth::user()->id)->get(),
            'riwayatPeng' => ModelsPengajuan::search('nama_pro', $this->search)->paginate($this->pagek),

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