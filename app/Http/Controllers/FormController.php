<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $positions=[
            ['id'=>1,'name'=>'Frontend Developer (React)'],
            ['id'=>2,'name'=>'Frontend Developer (Vue)'],
            ['id'=>3,'name'=>'Frontend Developer (Angular)'],
            ['id'=>4,'name'=>'Senior Frontend Developer'],
            ['id'=>5,'name'=>'Mid-level Frontend Developer'],
            ['id'=>6,'name'=>'Junior Frontend Developer'],
            ['id'=>7,'name'=>'Backend Developer (Node.js)'],
            ['id'=>8,'name'=>'Backend Developer (PHP/Laravel)'],
            ['id'=>9,'name'=>'Backend Developer (Python/Django)'],
            ['id'=>10,'name'=>'Backend Developer (Java/Spring)'],
            ['id'=>11,'name'=>'Backend Developer (C#/.NET)'],
            ['id'=>12,'name'=>'Backend Developer (Ruby)'],
            ['id'=>13,'name'=>'Senior Backend Developer'],
            ['id'=>14,'name'=>'Full-Stack Developer (MERN)'],
            ['id'=>15,'name'=>'Full-Stack Developer (MEAN)'],
            ['id'=>16,'name'=>'Full-Stack Developer (LAMP)'],
            ['id'=>17,'name'=>'Senior Full-Stack Developer'],
            ['id'=>18,'name'=>'UI/UX Designer'],
            ['id'=>19,'name'=>'Senior UI/UX Designer'],
            ['id'=>20, 'name'=>'Product Designer'],
            ['id'=>21, 'name'=>'UX Researcher'],
            ['id'=>22, 'name'=>'UI Designer (General)'],
            ['id'=>23, 'name'=>'iOS Developer (Swift)'],
            ['id'=>24, 'name'=>'Android Developer (Kotlin)'],
            ['id'=>25, 'name'=>'React Native Developer'],
            ['id'=>26, 'name'=>'Flutter Developer'],
            ['id'=>27, 'name'=>'Mobile App Developer (General)'],
            ['id'=>28, 'name'=>'Data Scientist'],
            ['id'=>29, 'name'=>'Data Analyst'],
            ['id'=>30, 'name'=>'Data Engineer'],
            ['id'=>31, 'name'=>'Machine Learning Engineer'],
            ['id'=>32, 'name'=>'Business Intelligence Analyst'],
            ['id'=>33, 'name'=>'DevOps Engineer'],
            ['id'=>34, 'name'=>'Senior DevOps Engineer'],
            ['id'=>35, 'name'=>'Cloud Engineer (AWS)'],
            ['id'=>36, 'name'=>'Cloud Engineer (Azure)'],
            ['id'=>37, 'name'=>'Cloud Engineer (GCP)'],
            ['id'=>38, 'name'=>'QA (Manuel Test) Specialist'],
            ['id'=>39, 'name'=>'QA Automation Engineer (Selenium)'],
            ['id'=>40, 'name'=>'QA Automation Engineer (Cypress)'],
            ['id'=>41, 'name'=>'Project Manager'],
            ['id'=>42, 'name'=>'Scrum Master'],
            ['id'=>43, 'name'=>'Business Analyst'],
            ['id'=>44, 'name'=>'Product Owner'],
            ['id'=>45, 'name'=>'IT Support Specialist'],
            ['id'=>46, 'name'=>'Systems Administrator'],
        ];

        $statuses=[
            ['id'=>1,'name'=>'Önlisans'],
            ['id'=>2,'name'=>'Lisans'],
            ['id'=>3,'name'=>'Yüksek Lisans'],
            ['id'=>4,'name'=>'Doktora'],
            ['id'=>5,'name'=>'Doktora Sonrası'],
        ];
        return view ('form',compact('positions','statuses'));

    }



    public function store(Request $request){
        $request->validate([
            'ad'=>'required|string',
            'soyad'=>'required|string',
            'email'=>'required|email',
            'numara'=>'required|numeric',
            'adres'=>'required|string',
            'maas'=>'numeric',
            'deneyim'=>'required|numeric|integer|min:0|max:100',
            'diller'=>'required|string',
            'yetenekler'=>'required|string|max:255',
            'referans'=>'required|string',
            'hakkinda'=>'required|string|max:255',
            'egitim'=>'required',
            'work_status'=>'required',
            'expectancy'=>'required',
            'gender'=>'required',
            'cv'=>'required|mimes:pdf|max:2048',
        ]);
        return back()->with('success','Formunuz başarıyla gönderildi.');
    }
}
