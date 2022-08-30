<?php

namespace App\Http\Livewire;

use App\Models\Participant;
use App\Models\City;
use App\Models\Department;
use Livewire\Component;

class AddParticipant extends Component
{
    public $name;
    public $lastname;
    public $ident;
    public $phone;
    public $email;
    public $protecteddata;
    public $departments;
    public $cities = [];
    public $department_id = "";
    public $city_id = "";
    public $rules = [
        'name' => 'required|regex:/^[a-zA-Z\s]+$/u',
        'lastname' => 'required|regex:/^[a-zA-Z\s]+$/u',
        'ident' => 'numeric|required',
        'department_id' => 'required',
        'city_id' => 'required',
        'phone' => 'numeric|required',
        'email' => 'required|email',

    ];
    public function mount()
    {
        $this->departments = Department::all();
    }

    public function updatedDepartmentId($value)
    {
        $city = City::find($value);
        $this->shipping_cost = $city->cost;
        $this->cities = City::where('department_id', $value)->get();
        $this->reset(['city_id']);
    }
    public function create()
    {
        $participant = new Participant();
        $participant->name = $this->name;
        $participant->lastname = $this->lastname;
        $participant->ident = $this->ident;
        $participant->ident = $this->ident;
        $participant->department_id = $this->department_id;
        $participant->city_id = $this->city_id;
        $participant->phone = $this->phone;
        $participant->email = $this->email;
        $rules = $this->rules;
        $this->validate($rules);
        $participant->save();
        $this->reset([
            'name', 'lastname', 'ident', 'department_id','city_id','phone', 'email','protecteddata'
        ]);
    }
    public function render()
    {
        return view('livewire.add-participant');
    }
}
