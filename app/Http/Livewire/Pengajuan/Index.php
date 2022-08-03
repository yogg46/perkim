<?php

namespace App\Http\Livewire\Pengajuan;

use App\Models\Pengajuan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $pagek = 10;
    public $f_tahun = '';
    public $f_status = '';
    public $search = '';

    public function render()
    {
        return view(
            'livewire.pengajuan.index',
            [
                'pengajuan' => Pengajuan::search('tahun', $this->f_tahun)->search('nama_pro', $this->search)->search('status', $this->f_status)->paginate($this->pagek),
                's_tahun' => Pengajuan::pluck('tahun')->toArray(),
            ]
        )
            ->extends(
                'layouts.main',
                [
                    'tittle' => 'Pengajuan',
                    'slug1' => ''
                ]
            )
            ->section('isi');
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}