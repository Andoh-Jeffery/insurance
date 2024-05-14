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
                        <h4 class="font-20 mb-20">Update Claim</h4>

                        <!-- Form -->
                        <form action="/update-claim" method="POST">

                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Claim Flag</label>
                                        <input type="text" class="theme-input-style" value="{{$claim->claim_flag}}"
                                            required name="claim_flag">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Claim Amount</label>
                                        <input type="text" class="theme-input-style" value="{{$claim->claim_amount}}"
                                            required name="clam_amount">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Claim Freq</label>
                                        <input type="text" class="theme-input-style" value="{{$claim->claim_freq}}"
                                            required name="claim_freq">
                                    </div>
                                    <!-- End Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Old Claim</label>
                                        <input type="text" class="theme-input-style" value="{{$claim->old_claim}}"
                                            requred name="old_claim">
                                    </div>
                                </div>

                                <div class="col-lg-2">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn long">Submit</button>
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
</div>
<!-- End wrapper -->
@endsection