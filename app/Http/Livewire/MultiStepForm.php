<?php

namespace App\Http\Livewire;

use App\Models\Admin\Company;
use App\Models\Admin\Job;
use Livewire\Component;

class MultiStepForm extends Component
{


    public $comp_name;
    public $job_title;
    public $job_description;
    public $benefit;
    public $country;
    public $state;
    public $city;
    public $position;
    public $carrier_level;
    public $gender;
    public $skills;
    public $salary_from;
    public $salary_to;
    public $salaray_period;
    public $functional_area;
    public $job_type;
    public $job_shift;
    public $job_expire_date;

    //STEP
    public $totalsteps=4;
    public $currentstep=1;

    //RELATIONSHHIP BETWEEN COMPANY AND JOB
    // public $company_id;

    public function mount(){
        $this->currentstep=1;
    }

    public function render()
    {
        $companies=Company::all();
        return view('livewire.multi-step-form',compact('companies'));
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->currentstep++;
        if($this->currentstep>$this->totalstep){
            $this->currentstep=$this->totalsteps;
        }

    }
    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentstep--;
        if($this->currentstep<1){
            $this->currentstep=1;
        }
    }
    public function validateData()
    {
        if($this->currentstep == 1){
            $this->validate([
                'comp_name' => 'required',
                'job_title' => 'required',
                'job_description' => 'required',
                'benefit' => 'required',
            ]);
        }
        elseif($this->currentstep == 2){
            $this->validate([
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            ]);
        }

        elseif($this->currentstep == 3){
            $this->validate([
            'carrier_level' => 'required',
            'salary_to' => 'required',
            'salaray_period' => 'required',
            'salary_from' => 'required',
            'job_type' => 'required',
        ]);
        }
        elseif($this->currentstep == 4){
            $this->validate([
            'position' => 'required',
            'gender' => 'required',
            'functional_area' => 'required',
            'job_shift' => 'required',
            'job_expire_date' => 'required',
        ]);
        }

    }

    public function store(){
        $this->validate();
        Job::create([
            'comp_name'=>$this->name,
            'job_title'=>$this->job_title,
            'job_description'=>$this->job_description,
            'benefit'=>$this->benefit,
            'country'=>$this->country,
            'state'=>$this->state,
            'city'=>$this->city,
            'position'=>$this->position,
            'carrier_level'=>$this->carrier_level,
            'gender'=>$this->gender,
            'skills'=>$this->skills,
            'salary_from'=>$this->salary_from,
            'salary_to'=>$this->salary_to,
            'salaray_period'=>$this->salaray_period,
            'functional_area'=>$this->functional_area,
            'job_type'=>$this->job_type,
            'job_shift'=>$this->job_shift,
            'job_expire_date'=>$this->job_expire_date,
        ]);

        return redirect()->route('jobs.index');
    }

}


