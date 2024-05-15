<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="text-center"> <!-- Add text-center class here -->
                    <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
                    <p class="font-weight-normal mb-2 text-muted">2024</p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0 shadow-sm">
                    <div class="card-body">
                        <a href="{{ url('showUser') }}">
                        <h4 class="text-dark font-weight-bold mb-0">User</h4>
                        <canvas id="showUser" class="mt-4"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0 shadow-sm">
                    <div class="card-body">
                        <a class="nav-link" href="{{ url('all_messages') }}">
                        <h4 class="text-dark font-weight-bold mb-0" style="position:center;">Message</h4>
                        <canvas id="expert" class="mt-4"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0 shadow-sm">
                    <div class="card-body">
                        <a class="nav-link" href="{{ url('showPost') }}">
                        <h4 class="text-dark font-weight-bold mb-0">Post</h4>
                        <canvas id="post" class="mt-4"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0 shadow-sm">
                    <div class="card-body">
                        <a class="nav-link" href="{{ url('bookings') }}">
                        <h4 class="text-dark font-weight-bold mb-0">Booking</h4>
                        <canvas id="book" class="mt-4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.footer')
    <!-- partial -->
</div>
