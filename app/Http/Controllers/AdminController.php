<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Vacancy;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function companies(){
        $companies = Company::get();
        return view('admin.company')->with("companies" , $companies);
    }
    public function vacancies(){
        $vacancies = Vacancy::get();
        return view('admin.vacancy')->with("vacancies" , $vacancies);
    }

    public function employee(){
        return view('admin.employee');
    }

    public function applicants(){
        return view('admin.applicants');
    }

    
    public function categories(){
        $categories = Category::get();
        return view('admin.categories')->with("categories",$categories);
    }

     
    public function users(){
        return view('admin.users');
    }

    public function addcompany(){
        return view('admin.addcompany');
    }

    public function addvacancy(){
        $companies = Company::get();
        $categories = Category::get();
        return view('admin.addvacancy')->with("companies" , $companies)->with("categories" , $categories);
    }

    public function addemployee(){
        $companies = Company::get();
        return view('admin.addemployee')->with("companies" , $companies);
    }

    public function addcategory(){
        return view('admin.addcategory');
    }

    public function adduser(){
        return view('admin.adduser');
    }

    public function userprofile(){
        return view('admin.userprofile');
    }

    public function savecompany(Request $request){


            $company = new Company();
            $company->name =$request->input('name');
            $company->address =$request->input('address');
            $company->contact =$request->input('contact');
          
            $company->save();

            return back()->with("status" , "Votre company a ete cree avec succes");
    }
        public function deletecompany($id){
            $company=  Company::find($id);
            $company->delete();
            return back()->with("status" , "Votre company a ete supprimer avec succes");
        }

        public function editcompany($id){
            $company = Company::find($id);
            return view("admin.editcompany")->with("company",$company);
        }


        public function updatecompany(Request $request){
            $company = Company::find($request->input('id'));
            $company->name = $request->input('name');
            $company->address = $request->input('address');
            $company->contact = $request->input('contact');

            $company->update();
            return redirect("/admin/companies")->with("status" , "Votre company a ete modifie avec succes");
        }

        
    public function saveemployee(Request $request){
        $employee = new Employee();
        $employee->empid = $request->input("empid");
        $employee->firstname = $request->input("firstname");
        $employee->lastname = $request->input("lastname");
        $employee->middlename = $request->input("middlename");
        $employee->address = $request->input("address");
        $employee->gender = $request->input("gender");
        $employee->birthday = $request->input("birthday");
        $employee->birthplace = $request->input("birthplace");
        $employee->phone = $request->input("phone");
        $employee->civilstatus = $request->input("civilstatus");
        $employee->position = $request->input("position");
        $employee->hireddate = $request->input("hireddate");
        $employee->email = $request->input("email");
        $employee->companyname = $request->input("companyname");

        $employee->save();
        return back()->with("status" , "votre employe a ete cree avec success");
        
    }

        public function savecategory(Request $request){
            $category = new Category();
            $category-> category = $request->input("category");
            $category->save();

            return back()->with("status" , "votre category a ete cree avec success");
        }

        public function deletecategory($id){
            $category=  Category::find($id);
            $category->delete();
            return back()->with("status" , "Votre category a ete supprimer avec succes");
        }

        public function editcategory($id){
            $category=  Category::find($id);
            return view("admin.editcategory")->with("category",$category);
        }


        public function updatecategory(Request $request){
            $category = Category::find($request->input('id'));
            $category-> category = $request->input("category");
        

            $category->update();
            return redirect("/admin/categories")->with("status" , "Votre categorie a ete modifie avec succes");
        }


        public function savevacancy(Request $request){


            $vacancy = new Vacancy();
            $company = Company::where("name" ,$request->input('companyname') )->first();
            $vacancy->companyname =$request->input('companyname');
            $vacancy->category =$request->input('category');
            $vacancy->address =$company->address;
            $vacancy->occuptitle =$request->input('occuptitle');
            $vacancy->numofemp =$request->input('numofemp');
            $vacancy->salary =$request->input('salary');
            $vacancy->duration =$request->input('duration');
            $vacancy->experience =$request->input('experience');
            $vacancy->description =$request->input('description');
            $vacancy->prefsex =$request->input('prefsex');
            $vacancy->sector =$request->input('sector');
          
            $vacancy->save();

            return back()->with("status" , "Votre vacancy a ete cree avec succes");
    }


    public function deletevacancy($id){
        $vacancy=  Vacancy::find($id);
        $vacancy->delete();
        return back()->with("status" , "Votre vacancy a ete supprimer avec succes");
    }


    public function editvacancy($id){
        $vacancy=  Vacancy::find($id);
         $companies = Company::where("name", "!=" , $vacancy->companyname)->get();
         $categories = Category::where("category", $vacancy->category)->get();

        return view("admin.editvacancy")->with("companies",$companies)->with("categories" , $categories)->with("vacancy", $vacancy);
    }

    public function updatevacancy(Request $request){
        $vacancy = Vacancy::find($request->input('id'));
        $company = Company::where("name" ,$request->input('companyname') )->first();
        $vacancy->companyname =$request->input('companyname');
        $vacancy->category =$request->input('category');
        $vacancy->address =$company->address;
        $vacancy->occuptitle =$request->input('occuptitle');
        $vacancy->numofemp =$request->input('numofemp');
        $vacancy->salary =$request->input('salary');
        $vacancy->duration =$request->input('duration');
        $vacancy->experience =$request->input('experience');
        $vacancy->description =$request->input('description');
        $vacancy->prefsex =$request->input('prefsex');
        $vacancy->sector =$request->input('sector');
      

        $vacancy->update();
        return redirect("/admin/vacancy")->with("status" , "Votre vaancy a ete modifie avec succes");
    }

}


