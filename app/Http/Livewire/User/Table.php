<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class Table extends Component
{
    use WithPagination;

    private function users(int $perpage = 10)
    {
        $users = User::whereHas('roles', function (Builder $query) {
            $query->where('name', 'admin')
                ->orWhere('name', 'user');
        })->paginate($perpage);

        return $users;
    }

    public function render()
    {
        return view('livewire.user.table', [
            'users' => $this->users()
        ]);
    }
}
