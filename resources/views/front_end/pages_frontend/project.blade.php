@extends('front_end.layouts.layout_master_frontend')

@section('title')

@stop 

@section('content')
<!-- START OF PROJECT -->

<div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Projects</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-section pt-100 pb-100">
        <div class="container">
            <div class="row">
               
              {{-- START OF PROJECT COLUMN --}}
              @foreach($all_projects as $project)
                  
              
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blog">
                        <img src="{{ $project->project_image }}" alt="image">
                        <div class="content">
                         <p>
                            {{ \Illuminate\Support\Str::limit( $project->title, 60, $end='...') }}
                         </p>
                            <h3>
                                <a href="#">
                                   
                                    {{ \Illuminate\Support\Str::limit($project->description, 80, $end='...') }}

                                </a>
                            </h3    >
                            <a href="single-blog.html" class="blog-btn">Read more +</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- END OF PROJECT COLUMN --}}
               
            </div>
        </div>
    </section>
<!-- END OF PROJECT -->
@stop 