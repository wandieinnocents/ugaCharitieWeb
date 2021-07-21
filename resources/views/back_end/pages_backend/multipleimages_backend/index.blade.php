@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
            <div class="container-fluid">

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Quotes Recieved</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Heading</strong></th>   
                                                <th><strong>Image</strong></th>                                               
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($fetch_images as $img_fetched)
                                            <tr>
                                                
                                                <td>{{ $img_fetched->id }}	</td>
                                                <td> {{ $img_fetched->heading }}	</td>
                                                <td> {{ $img_fetched->name }}	</td>
                                               
                                                <td> <img src="{{ asset($img_fetched->path) }}" alt="img" class="img-thumbnail" width="75"> </td>
                            
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> 

                                                        
													</div>
												</td>
                                            </tr>
                                            @endforeach
                                            <!-- end of table row -->
											

										


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
</div>

@endsection 