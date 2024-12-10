@extends('layouts.app')

@section('content')
    <div class="docs">
        <h2 class="docsTitle">Documentation</h2>
        <section>
            <h3>Using The API</h3>
            <p>The Application comes with its own API in order to manage jobs more easily. Be able to add, read, modify and
                delete all jobs and their feedback. Below we explore all the routes and data structures, helping you become 
                acquainted with the API.</p>
        </section>
        <section>
            <h3>Jobs</h3>
            <h4>Read Elements</h4>
            <p>You can access the list of all jobs by using the <span>/jobs<span> endpoint.</p>
            <div>
                <p><span>GET</span> http://(domain)/api/jobs</p>
            </div>
            <p>Alternatively, you can get a single element by adding the id as a parameter, for example: <span>/jobs/4<span>.</p>
            <div>
                <p><span>GET</span> http://(domain)/api/jobs/{id}</p>
            </div>
            <h4>Create Element</h4>
            <p>To create a job it is necessary to fill out the next properties:</p>
            <ul>
                <li><span>title</span>: Title of the offer.</li>
                <li><span>description</span>: Description of the offer.</li>
                <li><span>company</span>: The company listed in the offer.</li>
                <li><span>company_image</span>: Image of the company.</li>
                <li><span>status</span>: Current status of the offer.</li>
            </ul>
            <p>Add the element by using the <span>/jobs<span> endpoint.</p>
            <div>
                <p><span>POST</span> http://(domain)/api/jobs</p>
            </div>
            <h4>Modify Element</h4>
            <p>Access and modify a job by passing its id as a parameter to the <span>/jobs/{id}</span> endpoint,
                then fill out the same properties as in the create section.</p>
            <div>
                <p><span>PUT</span> http://(domain)/api/jobs/{id}</p>
            </div>
            <h4>Delete Element</h4>
            <p>You can delete an specific job by passing its id as a parameter to the <span>/jobs/{id}</span> endpoint.</p>
            <div>
                <p><span>DELETE</span> http://(domain)/api/jobs/{id}</p>
            </div>
        </section>
        <section>
            <h3>Feedback</h3>
            <h4>Read Elements of a Job</h4>
            <p>You can access the list of all comments related to a specific job by passing the corresponding id to the <span>/jobs/{jobId}/comments<span> endpoint.</p>
            <div>
                <p><span>GET</span> http://(domain)/api/jobs/{jobId}/comments</p>
            </div>
            <p>Alternatively, you can get a single comment by also adding a number meaning the order in which the element was created in relation to a job,
                for example: <span>/jobs/1/comments/2<span> to access the second comment of the job.</p>
            <div>
                <p><span>GET</span> http://(domain)/api/jobs/{jobId}/comments/{commentId}</p>
            </div>
            <h4>Create element for a Job</h4>
            <p>To create a comment for a job it is necessary to fill out the next properties:</p>
            <ul>
                <li><span>offer_id</span>: Id related to an existing job.</li>
                <li><span>comment</span>: Comment related to the job.</li>
            </ul>
            <p>Add the element by using the <span>/jobs/{jobId}/comments<span> endpoint.</p>
            <div>
                <p><span>POST</span> http://(domain)/api/jobs/{jobId}/comments</p>
            </div>
            <h4>Modify element of a Job</h4>
            <p>Access and modify a comment of a job by passing the same parameters mentioned in the read section to the <span>/jobs/{jobId}/comments/{commentId}</span> endpoint,
                then fill out the same properties as in the create section.</p>
            <div>
                <p><span>PUT</span> http://(domain)/api/jobs/{jobId}/comments/{commentId}</p>
            </div>
            <h4>Delete element of a Job</h4>
            <p>You can delete an specific comment related to a job by passing the same parameters mentioned in the read section to the <span>/jobs/{jobId}/comments/{commentId}</span> endpoint.</p>
            <div>
                <p><span>DELETE</span> http://(domain)/api/jobs/{jobId}/comments/{commentId}</p>
            </div>
        </section>
    </div>
@endsection