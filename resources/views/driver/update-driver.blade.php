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
                        <h4 class="font-20 mb-20">Update Driver</h4>

                        <!-- Form -->
                        <form action="/update-driver/{{$driver->id}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Driver ID</label>
                                        <input type="text" class="theme-input-style" placeholder="Enter Id" name="id"
                                            required value="{{$driver->driver_id}}">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Number of Kids</label>
                                        <input type="number" class="theme-input-style" placeholder="How many drivers"
                                            name="kiddrv" value="{{$driver->kidsdriv}}" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Age</label>
                                        <input type="Number" class="theme-input-style" placeholder="Age" name="age"
                                            value="{{$driver->age}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Education</label>
                                        <input type="text" class="theme-input-style" placeholder="Education"
                                            name="education" value="{{$driver->education}}" required>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Income</label>
                                        <input type="text" class="theme-input-style" placeholder="Income" name="income"
                                            value="{{$driver->income}}" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Marital Status</label>
                                        <!-- <input type="text" class="theme-input-style" placeholder="Password"> -->
                                        <select name="mstatus" id="" class="theme-input-style" required>
                                            <option value="{{$driver->mstatus}}" default>{{$driver->mstatus}}</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Occupation</label>
                                        <input type="text" class="theme-input-style" placeholder="Occupation" required
                                            name="occupation" value="{{$driver->occupation}}">

                                    </div>
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Gender</label>
                                        <!-- <input type="text" class="theme-input-style" placeholder="Address"> -->
                                        <select name="gender" id="" class="theme-input-style" required>
                                            <option value="{{$driver->gender}}" default>{{$driver->gender}}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>



                            <!-- Form Row -->
                            <div class="form-row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-block long">update</button>
                                </div>
                            </div>
                            <!-- End Form Row -->
                        </form>
                        <!-- End Form -->
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