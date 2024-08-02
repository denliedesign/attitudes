@extends('layouts.app')
@section('title', 'Dance Schedule | Old Bethpage, NY')
@section('content')
    @include('_trial-modal')

    <div>
        <div id="side-trial" class="offcanvas offcanvas-end show shadow" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
{{--                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Try a No Risk Trial Class</h5>--}}
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Sign up for Summer today</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="col d-flex justify-content-start"><a href="/summer"><div class="shadow btn btn-lg btn-family btn-blue">Summer Schedule</div></a></div>

                {{--                <form action="javascript:void(0);" method="POST" class="text-dark" onsubmit="return false;">--}}
{{--                    <div class="row g-0 align-items-center">--}}
{{--                        <div class="col-auto mx-0">--}}
{{--                            <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">--}}
{{--                        </div>--}}
{{--                        <div class="col-auto mx-0">--}}
{{--                            <button type="button" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0" onclick="showModal()">SUBMIT</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
        </div>
    </div>

    <div class="banner-wrap d-block" style="position: relative;">
        <div class="banner-schedule"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <h3 class="font-staat text-center" style="font-size: 80px; line-height: 0.9em;">2024-2025</h3>
            <p class="text-center font-syne fw-bold" style="font-size: 20px;">Watch their confidence soar with dance this season!</p>
            {{--            <p class="text-center font-syne text-muted">Classes Begin 7/6 | 6 Weeks<br>PAY PER CLASS</p>--}}
            <div class="d-flex justify-content-center">
                {{--                    <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-pink shadow mx-2">VIEW SCHEDULE</div></a>--}}
                <a href="/parent-portal" class="text-decoration-none"><div class="btn btn-family rounded btn-pink shadow mx-2">GET STARTED</div></a>
            </div>
            <p class="text-center mb-4 mt-1"><small style="font-size: 0.8em;" class="text-muted fw-bold">In Parent Portal Sort By: Ascending<br>& Filter Session: 2024-2025</small></p>

            {{--            <p class="text-center font-syne fw-bold" style="font-size: 20px;">Coming Soon!</p>--}}
            <div style="position: relative; width: 100%; height: 0; padding-top: 77.2727%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                        src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGKeY9HFnY&#x2F;vUvu5f1BCSvjdluhUa0hSw&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                </iframe>
            </div>
            <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGKeY9HFnY&#x2F;vUvu5f1BCSvjdluhUa0hSw&#x2F;view?utm_content=DAGKeY9HFnY&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a>


            <!-- START KAPA -->
            <div class="d-flex justify-content-center font-syne">
                <ul class="nav pt-2 pb-5 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-green btn-family" href="#class-1-4">Ages 1-2.5 + 3-4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-blue btn-family" href="#class-5-6">Ages 5-6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-pink btn-family" href="#class-7-10">Ages 7-10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-green btn-family" href="#class-10-12">Ages 10-12</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-1 rounded shadow btn-red btn-family" href="#class-teens">Teens</a>
                    </li>
                </ul>
            </div>
            <!-- END KAPA -->

            <div id="class-1-4">
                <h3 class="font-staat text-center pt-3" style="font-size: 60px;">Ages 1-2.5 + 3-4</h3>
                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=509319&session=2024-2025&cat3=Ages%203-4%7CAges%201-2.5&showcols=ages,days,times&hidecols=class%20starts,class%20ends,gender,tuition&sort=days,times,ages"></script>
            </div>

            <div id="class-5-6">
                <h3 class="font-staat text-center pt-3" style="font-size: 80px;">Ages 5-6</h3>
                <script type="text/javascript"  src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=509319&session=2024-2025&cat3=Ages%205-6&showcols=ages,days,times&hidecols=class%20starts,class%20ends,gender,tuition&sort=days,times,ages"></script>
            </div>

            <div id="class-7-10">
                <h3 class="font-staat text-center pt-3" style="font-size: 80px;">Ages 7-10</h3>
                <script type="text/javascript"  src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=509319&session=2024-2025&cat3=Ages%207-9%7CAges%207-10&showcols=ages,days,times&hidecols=class%20starts,class%20ends,gender,tuition&sort=days,times,ages"></script>
            </div>

            <div id="class-10-12">
                <h3 class="font-staat text-center pt-3" style="font-size: 80px;">Ages 10-12</h3>
                <script type="text/javascript"  src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=509319&session=2024-2025&cat3=Ages%207-12%7CAges%2010%20and%20up&showcols=ages,days,times&hidecols=class%20starts,class%20ends,gender,tuition&sort=days,starttime,ages"></script>
            </div>

            <div id="class-teens">
                <h3 class="font-staat text-center pt-3" style="font-size: 80px;">Teens</h3>
                <script type="text/javascript"  src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=509319&session=2024-2025&cat3=Teens%2013-18%7CAges%2010%20and%20up&showcols=ages,days,times&hidecols=class%20starts,class%20ends,gender,tuition&sort=days,starttime,ages"></script>
            </div>

        </div>
    </div>

    <style>
        .jr-reg-col a {
            background: #EE1B4D;
            color: white;
            padding: 4px 8px;
            border-radius: 5px;
            text-decoration: none;
        }
        tr:nth-of-type(even) {
            background: white !important;
            border-top: 1px solid gray !important;
            border-bottom: 1px solid gray !important;
        }
    </style>

@endsection
