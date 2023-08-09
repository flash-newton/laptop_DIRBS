<?php

namespace App\Http\Livewire\Device;

use App\Models\Device;
use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $filter = '';

    public $name;
    public $barcode;
    public $description;

    public $deviceID;
    public $delID;

    protected $listeners = ['delConfirmed' => 'delDevice'];

    protected function rules()
    {
        return [
            'name' => 'required|min:3|unique:devices,name,' . $this->deviceID,
            'barcode' => 'required|unique:devices,barcode,' . $this->deviceID,
        ];
    }
   

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,$this->rules());
    }

    public function addItem(){

        $validatedData = $this->validate($this->rules());
        Device::create([
            'name'=>$this->name,
            'barcode'=>$this->barcode,
            'description'=>$this->description,
            'added_by'=>auth()->user()->email
        ]);

        

       $this->dispatchBrowserEvent('close-modal');
       $this->reset();
    }

    public function closeModal(){
        $this->reset();
    }

    public function editDetails($id){
        $this->deviceID=$id;
        $device = Device::findOrFail($id);
        $this->name=$device->name;
        $this->barcode=$device->barcode;
        $this->description=$device->description;
    }


    public function render()
    {
        $sq = Device::query();
        
        if ($this->filter == '0') {
            $sq->where('status', 0);
        } elseif ($this->filter == '1') {
            $sq->where('status', 1);
        }


        $devices = $sq->where(function($query) {
            $query->where('barcode', 'like', '%' . $this->search . '%')
                  ->orWhere('name', 'like', '%' . $this->search . '%');
        })->orderBy('id', 'DESC')->paginate(7);

        return view('livewire.device.main',['device'=>$devices]);
    }

    public function updateItem(){

        $validatedData = $this->validate($this->rules());

        Device::findOrFail($this->deviceID)->update([
            'name'=>$this->name,
            'barcode'=>$this->barcode,
            'description'=>$this->description,
            'added_by'=>auth()->user()->email
        ]);

        

       $this->dispatchBrowserEvent('close-modal');
       $this->reset();
    }

    public function delDeviceSelect($id){
        $this->delID=$id;
        $this->dispatchBrowserEvent('showdelConfirm');
    }

    public function delDevice(){
        $item = Device::findOrFail($this->delID);
        $item->delete();
        $this->dispatchBrowserEvent('Devdeleted');
    }
}
