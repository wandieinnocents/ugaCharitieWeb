@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">
<br><br><br>

        <!-- form -->
        <div class="row">
        <!-- COL 1 -->
                <div class="col-md-3 col-xl-3 col-lg-3" style="visibility:hidden;">
                
                </div>
            <!-- COL 2 - FORM -->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Multiple Images  </h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                            <form action="{{ route('multipleimages.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                                
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-rounded" placeholder=" Heading" name="heading">
                                                </div>

                                                 <!-- browse -->
                                                <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="project_image">
                                                            <label class="custom-file-label">Choose Single file</label>
                                                </div>
                                                <br><br>


                                                <!-- browse -->
                                                @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                                @endif

                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="images[]" multiple  accept="image/*" >
                                                <label class="custom-file-label">Choose Multiple file</label>
                                                <!-- error validation -->
                                                @if ($errors->has('files'))
                                                @foreach ($errors->get('files') as $error)
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $error }}</strong>
                                                </span>
                                                @endforeach
                                                @endif
                                    </div>
                                    <br><br>
                                     <!-- submit -->
                                     <button type="submit" class="btn btn-primary">Add Images</button>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
                


            <!-- COL 3 -->
            <div class="col-md-3 col-xl-3 col-lg-3" style="visibility:hidden;">
               
            </div>
               <!-- end form -->
    
    </div>

    </div>
    </div>

@endsection 