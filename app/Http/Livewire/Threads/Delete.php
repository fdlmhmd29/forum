<?php

namespace App\Http\Livewire\Threads;

use Livewire\Component;

class Delete extends Component
{
    public $thread;
    public $confirmDelete = false;

    public function confirmDeleteThread()
    {
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('confirming-delete-thread');
        $this->confirmDelete = true;
    }

    public function deleteThread()
    {
        $this->thread->delete();
        session()->flash('success', 'Thread deleted!');
        return redirect()->route('threads.index');
    }

    public function render()
    {
        return view('livewire.threads.delete');
    }
}
