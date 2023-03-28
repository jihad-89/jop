<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Category;
use App\Models\Vacancy;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function home(){
        $companies = Company::get();
        $category= Category::get();
        return view('client.home')->with("companies" ,$companies)->with("category" ,$category);
    }

    public function advance(){
        return view('client.advance');
    }

    public function jobcompany(){
        return view('client.jobbycompany');
    }

    public function jobfunction(){
        return view('client.jobbyfunction');
    }

    public function jobtitle(){
        return view('client.jobbytitle');
    }

    public function jobbycategory($name){
        $vacancies =Vacancy::where("category", $name)->get();
        return view('client.jobbycategory')->with("vacancies" , $vacancies)->with("name" , $name);
    }

    public function companies(){
        $companies = Company::get();
        return view('client.companies')->with("companies" , $companies);
    }

    public function hiring(){
        $vacancies = Vacancy::get();
        return view('client.hiring')->with("vacancies" ,$vacancies);
    }

    public function aboutus(){
        return view('client.aboutus');
    }

    public function contact(){
        return view('client.contact');
    }

    public function submitapp(){
        return view('client.submitapp');
    }


    
    public function hiringcompany($name){
        $vacancies = Vacancy::where("companyname" , $name)->get();
        return view('client.hiringcompany')->with("vacancies", $vacancies)->with("name", $name);
    }

    
    public function hiringdetails(){
        $vacancies = Vacancy::get();
        return view('client.jobdetail')->with("vacancies" ,$vacancies);
    }
    
    public function register(){
        return view('client.register');
    }
    public function profile(){
        return view('client.profile');
    }
    public function message(){
        return view('client.message');
    }
    public function readmessage(){
        return view('client.detailmessage');
    }

    public function jopapplied(){
        return view('client.jobapplied');
    }
}