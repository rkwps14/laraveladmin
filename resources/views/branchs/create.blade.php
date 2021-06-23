@extends('layouts.master')
@section('content')

	<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration New Branch</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="../branch/submit">
                    @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Branch Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-12">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="branch">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Amount Per Patients</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="amount">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="type">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" href="{{url('/branchs')}}">Add Branch</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection