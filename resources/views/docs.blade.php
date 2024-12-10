@extends('layouts.app')

@section('content')
    <div class="docs">
        <h2 class="docsTitle">Documentation</h2>
        <section class="docsSection">
            <h3 class="docsSectionTitle">Using The API</h3>
            <p class="docsSectionText">The Application comes with its own API in order to manage jobs more easily. Be able to add, read, modify and
                delete all jobs and their feedback. Below we explore all the routes and data structures, helping you become 
                acquainted with the API.</p>
        </section>
        <section class="docsSection">
            <h3 class="docsSectionTitle">Jobs</h3>
            <div class="docsSectionContainer">
                <h4 class="docsSectionSubtitle">Read Elements</h4>
                <p class="docsSectionText">You can access the list of all jobs by using the <span class="endpoint">/jobs</span> endpoint.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method get">GET</span> http://(domain)/api/jobs</p>
                </div>
                <p class="docsSectionText">Alternatively, you can get a single element by adding the id as a parameter, for example: <span class="endpoint">/jobs/4<span>.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method get">GET</span> http://(domain)/api/jobs/{id}</p>
                </div>
            </div>
            <div class="docsSectionContainer">
                <h4 class="docsSectionSubtitle">Create Element</h4>
                <p class="docsSectionText">To create a job it is necessary to fill out the next properties:</p>
                <ul class="docsSectionList">
                    <li class="docsSectionListElement"><span>title</span>: Title of the offer.</li>
                    <li class="docsSectionListElement"><span>description</span>: Description of the offer.</li>
                    <li class="docsSectionListElement"><span>company</span>: The company listed in the offer.</li>
                    <li class="docsSectionListElement"><span>company_image</span>: Image of the company.</li>
                    <li class="docsSectionListElement"><span>status</span>: Current status of the offer.</li>
                </ul>
                <p class="docsSectionText">Add the element by using the <span class="endpoint">/jobs</span> endpoint.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method post">POST</span> http://(domain)/api/jobs</p>
                </div>
            </div>
            <div class="docsSectionContainer">
                <h4 class="docsSectionSubtitle">Modify Element</h4>
                <p class="docsSectionText">Access and modify a job by passing its id as a parameter to the <span class="endpoint">/jobs/{id}</span> endpoint,
                    then fill out the same properties as in the create section.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method put">PUT</span> http://(domain)/api/jobs/{id}</p>
                </div>
            </div>
            <div class="docsSectionContainer">
                <h4 class="docsSectionSubtitle">Delete Element</h4>
                <p class="docsSectionText">You can delete an specific job by passing its id as a parameter to the <span class="endpoint">/jobs/{id}</span> endpoint.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method delete">DELETE</span> http://(domain)/api/jobs/{id}</p>
                </div>
            </div>
        </section>
        <section class="docsSection">
            <h3 class="docsSectionTitle">Feedback</h3>
            <div class="docsSectionContainer">
                <h4 class="docsSectionSubtitle">Read Elements of a Job</h4>
                <p class="docsSectionText">You can access the list of all comments related to a specific job by passing the corresponding id to the <span class="endpoint">/jobs/{jobId}/comments</span> endpoint.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method get">GET</span> http://(domain)/api/jobs/{jobId}/comments</p>
                </div>
                <p class="docsSectionText">Alternatively, you can get a single comment by also adding a number meaning the order in which the element was created in relation to a job,
                    for example: <span class="endpoint">/jobs/1/comments/2</span> to access the second comment of the job.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method get">GET</span> http://(domain)/api/jobs/{jobId}/comments/{commentId}</p>
                </div>
            </div>
            <div class="docsSectionContainer">
                <h4 class="docsSectionSubtitle">Create element for a Job</h4>
                <p class="docsSectionText">To create a comment for a job it is necessary to fill out the next properties:</p>
                <ul class="docsSectionList">
                    <li class="docsSectionListElement"><span>offer_id</span>: Id related to an existing job.</li>
                    <li class="docsSectionListElement"><span>comment</span>: Comment related to the job.</li>
                </ul>
                <p class="docsSectionText">Add the element by using the <span class="endpoint">/jobs/{jobId}/comments</span> endpoint.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method post">POST</span> http://(domain)/api/jobs/{jobId}/comments</p>
                </div class="codeBlock">
            </div>
            <div class="docsSectionContainer">
                <h4 class="docsSectionSubtitle">Modify element of a Job</h4>
                <p class="docsSectionText">Access and modify a comment of a job by passing the same parameters mentioned in the read section to the <span class="endpoint">/jobs/{jobId}/comments/{commentId}</span> endpoint,
                    then fill out the same properties as in the create section.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method put">PUT</span> http://(domain)/api/jobs/{jobId}/comments/{commentId}</p>
                </div>
            </div>
            <div class="docsSectionContainer">
                <h4 class="docsSectionSubtitle">Delete element of a Job</h4>
                <p class="docsSectionText">You can delete an specific comment related to a job by passing the same parameters mentioned in the read section to the <span class="endpoint">/jobs/{jobId}/comments/{commentId}</span> endpoint.</p>
                <div class="codeBlock">
                    <p class="codeBlockText"><span class="method delete">DELETE</span> http://(domain)/api/jobs/{jobId}/comments/{commentId}</p>
                </div>
            </div>
        </section>
    </div>
@endsection