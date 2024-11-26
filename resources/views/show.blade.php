@extends('layouts.app')

@section('content')
    <div class="show">
        <section class="showJob">
            <img src="{{$job->company_image}}" alt="{{$job->company}}">
            <h2 class="showJobTitle">{{$job->title}}</h2>
            <h4 class='showJobCompany'>{{$job->company}}</h4>
        </section>
        <section class="showDetails">
            <p class="showDetailsStatus">
                status:
                @if ($job->status === 1)
                    <span class="jobStatusActive">in progress<span>
                @else
                    <span class="jobStatusNotActive">finished</span>
                @endif
            </p>
        </section>
        <section class="showDescription">
            <p class="showDescriptionText">{{$job->description}}</p>
        </section>
        <section class="showOptions">
            <a class="showGoBack" href="{{route('index')}}">Return</a>
            <a class="showDelete" href="">Delete</a>
        </section>
    </div>
@endsection