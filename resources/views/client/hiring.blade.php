@extends('client_layout.maseter')
@section('title')
différent offre d'emplois
@endsection

@section('content')
   <!-- start content -->
   <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Hiring</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">     
        <!-- Service Blcoks -->    
        <table id="dash-table" class="table table-hover">
            <thead>
                <th>Job Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Date Posted</th>
            </thead>
            <tbody>
                                    <tr>
                        <td><a href="{{url('hiringdetails')}}">Developer</a></td>
                        <td>URC</td>
                        <td>Bry Camugao</td>
                        <td>2022-07-26 02:15:02</td>
                    </tr>  
                                    <tr>
                        <td><a href="/jobdetails/3">IT Manager</a></td>
                        <td>Quest</td>
                        <td>Kabankalan City</td>
                        <td>2022-07-27 01:22:00</td>
                    </tr>  
                                    <tr>
                        <td><a href="/jobdetails/4">Digital Marketer</a></td>
                        <td>Copreros</td>
                        <td>Mabinay&#039;s</td>
                        <td>2022-07-27 01:23:11</td>
                    </tr>  
                
            </tbody>
        </table>   
    </div>
</section> 
<!-- end content -->
@endsection