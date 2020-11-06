@extends('layouts.admin')
@section('title','Tagihan Siswa')
@section('content')


<div class="container fluid">
<div class="row">
      <div class="col-md-12">
         
         <div class="card">
            <div class="card-body">
               <div class="card-title">Histori Pembayaran</div>
               
               <!--  Row -->
                              
                                <div class="d-flex flex-row comment-row">
                                    <i class="mdi mdi-account display-3"></i>
                                    <div class="comment-text active w-100">
                                    <hr>
                                    <span class="badge badge-success badge-rounded float-right">1 Jam yang lalu</span>                                    
                                        <h6 class="font-medium">{{ Auth::user()->name}}</h6>                                       
                                        <span class="m-b-15 d-block">
                                             <ul class="list-group list-group-flush">
                                                <li class="list-group-item">{{ Auth::user()->email}}</li>
                                                <li class="list-group-item">Jumlah Bayar Rp.150000</li>
                                                <li class="list-group-item">SPP Bulan <b  class="text-capitalize text-bold">November</b></li>                                   
                                           </ul>
                                        </span>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-right">Nov 06, 2020</span>                                            
                                            <span class="action-icons active">
                                                    <a href=""><i class="ti-pencil-alt"></i></a>                                                  
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                              
                          <!-- Pagination -->
					
						<div class="btn-group float-right mt-4">		
					   </div>
				
					<!-- End Pagination -->

                               
					     
                            </div>
               
            </div>
         
      
      </div>
   </div>


@endsection