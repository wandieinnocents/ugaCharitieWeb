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
                                <h4 class="card-title">Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Username</strong></th>
                                                <th><strong>Email</strong></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                
                                                <td> {{ $user->id }}	</td>
                                                <td> {{ $user->name }}	</td>
                                                <td>{{ $user->email }}</td>
                                                
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