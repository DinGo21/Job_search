@extends('layouts.app')

@section('content')
	<h2 class="title">Your Offers</h2>
    <div class="container">
        <input type="text" id="input" class="searchBar" placeholder="🔍Example: Backend Engineer...">
        <table id="table" class="table">
            <thead>
                <tr>
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
                                <div class="jobContent">
                                    <h4 class="jobTitle">{{$job->title}}</h4>
                                    <div class="jobDetails">
                                        <p class="jobStatus">
                                            status:
                                            @if ($job->status === 1)
                                                <span class="jobStatusActive">in progress<span>
                                            @else
                                                <span class="jobStatusNotActive">finished</span>
                                            @endif
                                        </p>
                                        <p class="jobCreatedAt">created: <span id="createdAt">{{$job->created_at}}</span></p>
                                        <p class="jobUpdatedAt">update: <span id="updatedAt">{{$job->updated_at}}</span></p>
                                    </div>
                                </div>
                            </div>
						</td>
                        <td class="cell">
                            <div class="options">
                                @if ($job->status === 1)
                                    <a class="option optionsPause" href="?action=pause&id={{$job->id}}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  
                                    stroke="#00e842"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-circle-dashed-check"><path stroke="none" 
                                    d="M0 0h24v24H0z" fill="none"/><path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95" /><path d="M3.69 8.56a9 9 
                                    0 0 0 -.69 3.44" /><path d="M3.69 15.44a9 9 0 0 0 1.95 2.92" /><path d="M8.56 20.31a9 9 0 0 0 3.44 
                                    .69" /><path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95" /><path d="M20.31 15.44a9 9 0 0 0 .69 -3.44" />
                                    <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92" /><path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69" /><path 
                                    d="M9 12l2 2l4 -4" /></svg>
                                    </a>
                                @else
                                    <a class="option optionsResume" href="?action=resume&id={{$job->id}}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  
                                        stroke="#0003ac"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon 
                                        icon-tabler icons-tabler-outline icon-tabler-reload"><path stroke="none" d="M0 0h24v24H0z" 
                                        fill="none"/><path d="M19.933 13.041a8 8 0 1 1 -9.925 -8.788c3.899 -1 7.935 1.007 9.425 4.747" 
                                        /><path d="M20 4v5h-5" /></svg>
                                    </a>
                                @endif
                                <a class="option optionsDetails" href="{{route('show', $job->id)}}">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  
                                    stroke="#7a7a7a"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-dots"><path stroke="none" d="M0 0h24v24H0z" 
                                    fill="none"/><path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12m-1 0a1 1 0 1 0 2 
                                    0a1 1 0 1 0 -2 0" /><path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                                </a>
                                <a class="option optionsDelete" href="?action=delete&id={{$job->id}}">
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
