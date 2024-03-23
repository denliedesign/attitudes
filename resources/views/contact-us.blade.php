@extends('layouts.app')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner-contact"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <img src="/images/logo-aim.png" alt="logo">
            <div class="row mb-5">
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 80px; line-height: 0.9em;">Attitudes in Motion</h3>
                    <p class="font-syne" style="font-size: 22px;"><em>The Premiere Dance Studio in Old Bethpage, NY</em></p>
                    <p class="font-syne">
                        Are you interested in joining our dance studio, serving the Bethpage and Old Bethpage, NY area? Whether you are looking for
                        <a href="/classes">hip hop , tap , jazz , lyrical , or Zumba classes</a>, we have something for everyone to enjoy! We offer classes for dancers of all ages. For more information or to sign up for classes, contact us today! We’d be happy to answer any questions you have!
                    </p>
                    <p class="font-syne">
                        <strong><span class="font-staat" style="font-size: 2em;">Our Location</span></strong>
                        <br>
                        756 Old Bethpage Rd
                        <br>Old Bethpage, NY 11804
                        <br><br>
                        (516) 737- 0477
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center" style="height: 100%;">
                        <div class="font-syne">
                            <h5 class="modal-title mt-2 text-center text-dark" id="trymodalLabel"><strong>Start Your No Risk Trial Class</strong></h5>
                            {{--            <small class="text-muted text-center">Limited availability. For a short time only.</small>--}}

                            <form action="{{ route('trial.store') }}" method="POST" class="text-dark">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="parentName">Parent Name</label>
                                    <div class="col-sm-8">
                                        <input id="parentName" type="text" class="form-control" name="parentName" value="{{ old('parentName') }}">
                                    </div>
                                    <div>{{ $errors->first('parentName') }}</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="email">Email</label>
                                    <div class="col-sm-8">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div>{{ $errors->first('email') }}</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="phone">Phone Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                                    </div>
                                    <div>{{ $errors->first('phone') }}</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="studentName">Student Name</label>
                                    <div class="col-sm-8">
                                        <input id="studentName" type="text" class="form-control" name="studentName" value="{{ old('studentName') }}">
                                    </div>
                                    <div>{{ $errors->first('parentName') }}</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="birthdate">Birthdate</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                                    </div>
                                </div>
                                @csrf
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-danger mt-2">Claim Offer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=756%20Old%20Bethpage%20Rd,%20Old%20Bethpage,%20NY%2011804+(Attitudes%20in%20Motion)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
        </div>
    </div>

@endsection
