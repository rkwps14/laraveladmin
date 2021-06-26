@extends('layouts.master')
@section('page_title','Patient Registration')
@section('content')

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Update Patient Details</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('update',[$ptArr->id])}}">
                    @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-12">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" value="{{$ptArr->name}}" type="text" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" value="{{$ptArr->contact}}" type="text" name="contact">
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Age</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-12">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" value="{{$ptArr->age}}" type="text" name="age">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DOB</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" value="{{$ptArr->DOB}}" type="text" name="dob">
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" href="{{url('patients')}}">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection