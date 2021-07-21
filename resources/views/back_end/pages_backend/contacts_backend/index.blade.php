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
                            
                                <h4 class="card-title">All Feedback </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                               
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Full Name</strong></th>
                                                <th><strong>Email </strong></th>
                                                <th><strong>Phone </strong></th>
                                                <th><strong>Message </strong></th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($all_contacts as $fetch_contact)
                                            <tr>
                                                
                                                <td> {{ $fetch_contact->id }}</td>
                                                <td> {{ $fetch_contact->fullname }}	</td>
                                                <td> {{ $fetch_contact->email }}	</td>
                                                <td> {{ $fetch_contact->phone }}	</td>
                                                <td> {{ $fetch_contact->description }}</td>
                                                <td>
													<div class="d-flex">
                                                       <!-- delete form -->
                                                       <form action="{{ route('contacts.destroy',$fetch_contact->id) }}" method="POST"> 
                                                        @csrf()
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        </form>
                                                        <!-- end of delete form -->
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