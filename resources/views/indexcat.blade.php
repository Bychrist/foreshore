@extends('layouts.adminmaster')

@section('content')

	  <h1 class="mt-4">Category Table</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Category Table</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Event Category</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" >Number: {{ $categories->count() }}</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                              
                            </div>
                            <div class="col-xl-3 col-md-6">
                                
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Images Uploaded</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link">Number: 300</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                    
                            <div class="col-xl-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Category Name</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                          
                                                   <th>Category Name</th>
                                                   <th>Created At</th>
                                                   <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($category as $cat)
                                                <tr>

                                             
                                              
                                                    <td>{{ $cat->category_name}}</td>
                                                    <td> {{ $cat->created_at }} </td>
                                                    <td>
                                                    
                                                    <a href="{{url('/edit/event-category/')}}/{{$cat->id}}" class="btn btn-primary" title="edit {{$cat->category_name}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{url('/delete/event-category/')}}/{{$cat->id}}" class="btn btn-danger" title="delete {{$cat->category_name}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>

                                                    </td>
                                             
                                                    
                                                </tr>
                                                  @endforeach
                                               
                                            </tbody>


                                          

                                        </table>

                                              {!! $category->render("pagination::bootstrap-4") !!}
                                    </div>
                                </div>
                            </div>
                           
                        </div>



@endsection