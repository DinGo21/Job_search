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
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="#7a7a7a"  
                            stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline 
                            icon-tabler-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 
                            -18 0" /></svg>
                        status:
                        @if ($job->status === 1)
                            <span class="jobStatusActive">in progress<span>
                        @else
                            <span class="jobStatusNotActive">finished</span>
                        @endif
                    </p>
                    <p class="showDetailsCreatedAt">created: <span id="createdAt">{{$job->created_at}}</span></p>
                    <p class="showDetailsUpdatedAt">created: <span id="updatedAt">{{$job->updated_at}}</span></p>
                </section>
            </div>
        </section>
        <section class="showDescription">
            <p class="showDescriptionText">{{$job->description}}</p>
        </section>
        <section class="showOptions">
            <a class="showDelete" href="{{route('index') . '?action=delete&id=' . $job->id}}">Delete</a>
            <a class="showReturn" href="{{route('index')}}">Return</a>
        </section>
    </div>
@endsection