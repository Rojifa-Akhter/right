<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <h4 class="font-weight-bold text-primary">Hi, welcome back!</h4>
                    <p class="font-weight-normal mb-2 text-muted">2024</p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 mb-4">
                <div class="card border-primary rounded-0 shadow">
                    <div class="card-body">
                        <a href="{{ url('showUser') }}" class="text-decoration-none">
                            <h4 class="text-primary font-weight-bold mb-3">User Management</h4>
                            <canvas id="showUser" class="mt-4"></canvas>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-success rounded-0 shadow">
                    <div class="card-body">
                        <a href="{{ url('all_messages') }}" class="text-decoration-none">
                            <h4 class="text-success font-weight-bold mb-3">Message Center</h4>
                            <canvas id="expert" class="mt-4"></canvas>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-info rounded-0 shadow">
                    <div class="card-body">
                        <a href="{{ url('showPost') }}" class="text-decoration-none">
                            <h4 class="text-info font-weight-bold mb-3">Post Management</h4>
                            <canvas id="post" class="mt-4"></canvas>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-warning rounded-0 shadow">
                    <div class="card-body">
                        <a href="{{ url('bookings') }}" class="text-decoration-none">
                            <h4 class="text-warning font-weight-bold mb-3">Booking System</h4>
                            <canvas id="book" class="mt-4"></canvas>
                        </a>
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
