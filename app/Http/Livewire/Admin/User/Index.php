<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use DataTables;

class Index extends Component
{
    public $users;
    public function render()
    {
        $users = User::all();
        return view('livewire.admin.user.index');
    }



}
