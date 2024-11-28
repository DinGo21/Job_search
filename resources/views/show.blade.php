@extends('layouts.app')

@section('content')
    <div class="show">
        <section class="showJob">
            <img class="showJobImage" src="{{$job->company_image}}" alt="{{$job->company}}">
            <div class="showJobContent">
                <h2 class="showJobTitle">{{$job->title}}</h2>
                <h4 class='showJobCompany'>{{$job->company}}</h4>
                <section class="showDetails">
                    <p class="showDetailsStatus">
                        status:
                        @if ($job->status === 1)
                            <span class="jobStatusActive">in progress<span>
                        @else
                            <span class="jobStatusNotActive">finished</span>
                        @endif
                    </p>
                    <p class="showDetailsCreatedAt">created: <span>{{$job->created_at}}</span></p>
                    <p class="showDetailsUpdatedAt">update: <span>{{$job->updated_at}}</span></p>
                </section>
            </div>
        </section>
        <section class="showDescription">
            <p class="showDescriptionText">{{$job->description}}</p>
        </section>
        <section class="showOptions">
            <a class="showReturn" href="{{route('index')}}">Return</a>
        </section>
    </div>
@endsection