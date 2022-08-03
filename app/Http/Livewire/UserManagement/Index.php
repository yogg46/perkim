<?php

namespace App\Http\Livewire\UserManagement;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $search = '';
    public $pagek = 10;

    public function render()
    {
        return view(
            'livewire.user-management.index',
            [
                'user' => User::search('name', $this->search)->paginate($this->pagek),
            ]
        )
            ->extends(
                'layouts.main',
                [
                    'tittle' => 'User Management',
                    'slug1' => 'List User'
                ]
            )
            ->section('isi');
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}