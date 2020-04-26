@extends('layouts.adminmaster')

@section('content')

	  <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Event Category</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" >Number: {{ $categories->count()}}</a>
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
                                        <a class="small text-white stretched-link">Number: {{$pix->count()}}</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Create Event Category</div>

                                   

                                   @if(session()->has('successCat'))
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                         <strong>Success!</strong> {{ session()->get('successCat') }}
                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                       </div>
                                   @endif
                                    
                                    <form action="{{url('/create/event-category')}}" method="post">

                                       {{csrf_field()}}
                                    	
                                    	<div class="form-group" style="padding: 30px">
                                    		<input type="text" name="category_name" required="" class="form-control" placeholder="event name category name">

                                    		<div class="mt-3">
                                    			<input type="submit" class="btn btn-primary" value="Create" style="background-color:  #840c00">
                                    		</div>
                                    	</div>

                                    	

                                    </form>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p><br>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Upload Images</div>

                                       @if(session()->has('successPix'))
                                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                                             <strong>Success!</strong> {{ session()->get('successPix') }}
                                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                             </button>
                                           </div>
                                       @endif


                                       @if(session()->has('FailPix'))
                                           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                             <strong>Failed!</strong> {{ session()->get('FailPix') }}
                                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                             </button>
                                           </div>
                                       @endif

                                    <form action="{{url('create/upload')}}" method="post" enctype="multipart/form-data">
                                    	
                                    	<div class="form-group" style="padding: 30px">
                                    		{{ csrf_field() }}

                                    		<br>

                                    		<input type="file" name="title" required="" class="form-control" placeholder="event name category name">
                                            @if($errors->has('image_name'))
                                                <span class="help-block">{{ $errors->first('title') }}</span>
                                              @endif

                                    		<br>

                                    		<select name="PixCategory_id" required="required" class="form-control">
                                                <option value="{{null}}">- Select Category --</option>
                                    			@foreach($categories as $cat)
                                                <option value="{{$cat->id}}.{{$cat->category_name}}">{{$cat->category_name}}</option>


                                                @endforeach


                                    		</select>

                                    		<br>

                                    		<input type="submit" class="btn btn-primary" value="Create" style="background-color:  #840c00">
                                    	</div>





                           
                                    			
                                    		

                                    	

                                    </form>
                                    
                                </div>
                            </div>
                        </div>



@endsection