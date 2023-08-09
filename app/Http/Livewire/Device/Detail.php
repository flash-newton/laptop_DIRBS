<?php

namespace App\Http\Livewire\Device;

use App\Models\History;
use Livewire\Component;
use Livewire\WithPagination;

class Detail extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $device;
    
    protected $listeners = ['delConfirmed' => 'delHistory'];


    public function delquestion(){
        $this->dispatchBrowserEvent('showdelConfirm');
    }

    public function delHistory(){
  
        $h = History::where('device_id',$this->device->id)->get();
        $h->each(function ($history) {
            $history->delete();
        });
        $this->dispatchBrowserEvent('Historycleared');
    }
    public function render()
    {
        $history=History::orderBy('id','DESC')->where('device_id',$this->device->id)->paginate(15);
        return view('livewire.device.detail',['history'=>$history]);
    }
}
