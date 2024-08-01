<div>
    <div id="side-trial" class="offcanvas offcanvas-end shadow" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            {{--                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Try a No Risk Trial Class</h5>--}}
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Sign up today</h5>
            <button type="button" class="btn-close" onclick="toggleOffcanvas()" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex justify-content-center">
                <div class="mx-1"><a href="/schedule"><div class="shadow btn btn-family btn-green" style="font-size: 0.85em;">2024-2025 Schedule</div></a></div>
                <div class="mx-1"><a href="/summer"><div class="shadow btn btn-family btn-blue" style="font-size: 0.85em;">Summer Schedule</div></a></div>
            </div>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            // After 6 seconds, add the 'show' class to display the module
            document.getElementById('side-trial').classList.toggle('show');
        }, 6000); // 6000 milliseconds = 6 seconds
    });

    function toggleOffcanvas() {
        var offcanvasElement = document.getElementById('side-trial');
        offcanvasElement.classList.toggle('show');

        // If you're using Bootstrap 5 or newer, you might also need to manually adjust the visibility
        // and the aria-hidden attribute for complete accessibility support.
        if(offcanvasElement.classList.contains('show')) {
            offcanvasElement.style.visibility = 'visible';
            offcanvasElement.setAttribute('aria-hidden', 'false');
        } else {
            offcanvasElement.style.visibility = 'hidden';
            offcanvasElement.setAttribute('aria-hidden', 'true');
        }
    }
</script>
