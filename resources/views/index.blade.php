@extends('layouts.app')

@section('content')
	<h2 class="title">Your Offers</h2>
    <div>
        <table class="table">
            <thead>
                <tr class="row">
                    <th class="label" scope="col">Job</th>
                    <th class="label" scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr class="row">
                        <td class="cell">
                            <div class="job">
                                <img class="jobImage" src="{{$job->company_image}}" alt="{{$job->company}}">
                                <div class="jobDetails">
                                    <h4 class="jobTitle">{{$job->title}}</h4>
                                    <p class="jobStatus">
                                        status:
                                        @if ($job->status === 1)
                                            <span class="jobStatusActive">in progress<span>
                                        @else
                                            <span class="jobStatusNotActive">finished</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
						</td>
                        <td class="cell">
                            <div class="options">
                                <a class="optionsDetails" href="{{route('show', $job->id)}}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  
                                        stroke="#0003ac"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-dots"><path stroke="none" d="M0 0h24v24H0z" 
                                        fill="none"/><path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12m-1 0a1 1 0 1 0 2 
                                        0a1 1 0 1 0 -2 0" /><path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                                </a>
                                <a class="optionsDelete" href="?action=delete&id={{$job->id}}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  
                                        stroke="#ff3333"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 
                                        0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 
                                        1 0 0 1 1 1v3" /></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
