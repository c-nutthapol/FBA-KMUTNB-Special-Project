<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\EduTerm;
use Livewire\Component;
use Livewire\WithPagination;

class Term extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    protected $listeners = ['refreshTerm' => '$refresh'];

    public function render()
    {
        $edu_terms = EduTerm::paginate(10);

        return view('livewire.admin.settings.term', compact('edu_terms'));
    }
}
