@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="text-center mt-4 mb-5">
            <h3>Simple pricing for Everyone</h3>
            <p class="text-muted">
                Fully functional accounts are starting from $19/month only
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-pricing">
                    <div class="card-body p-4">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="mt-0 mb-2 font-size-16">Professional Pack</h5>
                                <h2 class="mt-0 mb-2">$19 <span class="font-size-14">/ Month</span></h2>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-dual icon-lg" data-feather="users"></i>
                            </div>
                        </div>

                        <ul class="card-pricing-features text-muted border-top pt-2 mt-2 pl-0 list-unstyled">
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>10 GB Storage</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>500 GB Bandwidth</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>No Domain</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>Email Support</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>24x7 Support</li>
                        </ul>

                        <div class="mt-5 text-center">
                            <button class="btn btn-soft-primary px-sm-4"><i class='uil uil-arrow-right mr-1'></i>Buy Now
                                for $19</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-pricing">
                    <div class="card-body p-4">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="mt-0 mb-2 font-size-16">
                                    Business Pack</h5>
                                <h2 class="mt-0 mb-2">$29 <span class="font-size-14">/
                                        Month</span></h2>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-dual icon-lg" data-feather="briefcase"></i>
                            </div>
                        </div>

                        <ul class="card-pricing-features text-muted border-top pt-2 mt-2 pl-0 list-unstyled">
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>50 GB Storage</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>900 GB Bandwidth</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>2 Domain</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>Email Support</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>24x7 Support</li>
                        </ul>

                        <div class="mt-5 text-center">
                            <button class="btn btn-primary px-sm-4"><i class='uil uil-arrow-right mr-1'></i>Buy Now for
                                $29</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-pricing">
                    <div class="card-body p-4">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="mt-0 mb-2 font-size-16">
                                    Enterprise Pack</h5>
                                <h2 class="mt-0 mb-2">$49 <span class="font-size-14">/
                                        Month</span></h2>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-dual icon-lg" data-feather="shopping-bag"></i>
                            </div>
                        </div>

                        <ul class="card-pricing-features text-muted border-top pt-2 mt-2 pl-0 list-unstyled">
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>100
                                GB Storage</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>Unlimited Bandwidth</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>Unlimited Domain</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>Email
                                Support</li>
                            <li><i class='uil uil-check text-success font-size-15 mr-1'></i>24x7
                                Support</li>
                        </ul>

                        <div class="mt-5 text-center">
                            <button class="btn btn-soft-primary px-sm-4"><i class='uil uil-arrow-right mr-1'></i>Buy Now
                                for $49</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection