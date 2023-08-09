<?php

namespace App\Http\Livewire\Home;

use App\Models\Device;
use App\Models\History;
use Livewire\Component;

class Main extends Component
{

    public $bcode;
    public $bcodereturn;
    public $uname;
    public $found = null;
    public $return = null;
    public $d_id;

    protected function rules()
    {
        return [
            'bcode' => 'required',
            'uname' => 'required'
        ];
    }
    protected function rules2()
    {
        return [
            'bcodereturn' => 'required',
        ];
    }

    public function checkBC(){
        $device = Device::where('barcode', $this->bcode)->first();
      
        if ($device){
            
            if($device->status=='0'){
                $this->found = 1;
                $this->d_id=$device->id;
            }
            else if ($device->status=='1') {
                $this->found = 2;
            }     
        } else {
            
            $this->found = 0;
        }
    }


    public function borrowItem(){
        $validatedData = $this->validate($this->rules());

        
        History::create([
            'device_id'=>$this->d_id,
            'user'=>$this->uname,
            'action'=>0,
            'carried_out_by'=>auth()->user()->email
        ]);

        $device = Device::find($this->d_id);
         if ($device) {
            $device->update(['status' => '1']);
        }

       $this->dispatchBrowserEvent('close-modal');
       $this->dispatchBrowserEvent('brw', ['message' => 'Device successfully borrowed']);
       $this->reset();
    }


    public function closeModal(){
        $this->reset();
    }


    public function checkReturn(){
        $device = Device::where('barcode', $this->bcodereturn)->first();
        if ($device){
            
            if($device->status=='1'){
                $this->return = 1;
                $this->d_id=$device->id;
                $this->returnItem();
            }
            else if ($device->status=='0') {
                $this->return = 2;
            }     
        } else {
            
            $this->return = 0;
        }
    }

    public function returnItem(){
      
        $validatedData = $this->validate($this->rules2());
        $user_history= History::where('device_id',$this->d_id)->where('action','0')->latest()->first();
        $user = $user_history->user;

        History::create([
            'device_id'=>$this->d_id,
            'user'=>$user,
            'action'=>1,
            'carried_out_by'=>auth()->user()->email
        ]);

        $device = Device::find($this->d_id);
         if ($device) {
            $device->update(['status' => '0']);
        }

       $this->dispatchBrowserEvent('close-modal');
       $this->reset();

    }

    public function render()
    {
        $history = History::orderBy('id','DESC')->take(10)->get();
        return view('livewire.home.main',['history'=>$history]);
    }
}
