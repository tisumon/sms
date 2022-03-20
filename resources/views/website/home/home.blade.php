@extends('master.front.master')
@section('body')

<section class="notice-section py-5">
    <div class="container">

        <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="card card-body">
                        <h3 class="card-title">Notice Title Goes Here</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi at atque deserunt dolores earum eos fugiat hic in nulla praesentium quaerat rem repellat, soluta totam, ullam, vero voluptates voluptatibus.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aut commodi culpa deserunt dolor eos eum ex fugiat illum magnam minima nam necessitatibus possimus praesentium quaerat rem suscipit velit. Molestiae?</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card card-body">
                        <h3 class="card-title">Notice Title Goes Here</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi at atque deserunt dolores earum eos fugiat hic in nulla praesentium quaerat rem repellat, soluta totam, ullam, vero voluptates voluptatibus.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aut commodi culpa deserunt dolor eos eum ex fugiat illum magnam minima nam necessitatibus possimus praesentium quaerat rem suscipit velit. Molestiae?</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card card-body">
                        <h3 class="card-title">Notice Title Goes Here</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi at atque deserunt dolores earum eos fugiat hic in nulla praesentium quaerat rem repellat, soluta totam, ullam, vero voluptates voluptatibus.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aut commodi culpa deserunt dolor eos eum ex fugiat illum magnam minima nam necessitatibus possimus praesentium quaerat rem suscipit velit. Molestiae?</p>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/Oslo.jpg')}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                   <ul>
                                       <li>Course Feature One</li>
                                       <li>Course Feature Two</li>
                                       <li>Course Feature Three</li>
                                       <li>Course Feature Four</li>
                                   </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/pi02.jpg')}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/pi00.jpg')}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/pi11.jpg')}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" placeholder="Enter Your Email Hare" class="form-control"/>
                            </div>
                            <div class="col-3">
                                <input type="submit" class="btn btn-outline-success w-100" value="Subscribe Now"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
