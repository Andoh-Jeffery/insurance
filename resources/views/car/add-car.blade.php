@extends('layouts.layout')
@section('content')
<!-- Offcanval Overlay -->
<div class="offcanvas-overlay"></div>
<!-- Offcanval Overlay -->

<!-- Wrapper -->
<div class="wrapper">
    @extends('layouts.header')

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Sidebar -->
        @extends('layouts.sidebar')
        <!-- End Sidebar -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <!-- Base Horizontal Form With Icons -->
                    <div class="form-element py-30 multiple-column">
                        <h4 class="font-20 mb-20">Add Car</h4>

                        <!-- Form -->
                        <form action="/add-car" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <!-- Form Group -->

                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Car Type</label>
                                        <!-- <input type="text" class="theme-input-style" placeholder="Type Your Name"> -->
                                        <select name="carType" id="exampleSelect6" class="theme-input-style">
                                            <option value="type" default>Select Car Type</option>
                                            <option value="Honda">Honda</option>
                                            <option value="Mazda">Mazda</option>
                                            <option value="Nissan">Nissan</option>
                                        </select>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Red Car ?</label>
                                        <!-- <input type="text" class="theme-input-style" placeholder="Your Email Address"> -->
                                        <select name="redCar" id="exampleSelect6" class="theme-input-style">
                                            <option value="color" default>Is it a Red Car?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Car Age</label>
                                        <input type="number" class="theme-input-style" name="age">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                                <div class="col-lg-2"></div>

                            </div>



                            <!-- Form Row -->
                            <div class="form-row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn long">Submit</button>
                                </div>
                            </div>
                            <!-- End Form Row -->
                        </form>
                        <!-- End Form -->
                        <form action="/import-claims" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn long">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Horizontal Form With Icons -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
</div>
<!-- End Main Wrapper -->

<!-- Footer -->
<footer class="footer">
    Dashmin © 2020 created by <a href="https://www.themelooks.com/"> ThemeLooks</a>
</footer>
<!-- End Footer -->
</div>
<!-- End wrapper -->
@endsection