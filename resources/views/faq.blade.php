@extends('layouts.app')

@section('content')

    <header>
        <nav class="navbar navbar-expand-md navbar-blue fixed-top bg-dark">
            <a class="navbar-brand" href="#">List of FAQ Views</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>


                    class="nav-item">
                    <a class="nav-link" href="/register">Registration</a>
                    </li>
                    class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">

    <h1>Available FAQ Views Include:</h1>

     <div>
                    <a href="{{ url('/questions/create') }}">Question</a>
                    <h1>You can create questions, edit questions and view questions by clicking on the above link.</h1>
                     <a href="{{ url('/home?page=9') }}">Latest Questions</a>
                    <h4>View Latest Question</h4>
                    <a href="{{ url('/user/profile_id/profile/profile_id')}}">Profile</a>
                    <h2>You can view the profile of the logged in user on the above page. You must be authenticated to view your profile.</h2>
                    <a href="https://github.com/varnelle/faq_final/projects/1#card-9456982">User Story</a>
                    <h3>Github User Story can be viewed at the above link.</h3>


                </div>

            </div>
        </div>
    </div>


@endsection
