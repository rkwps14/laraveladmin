@extends('layouts.master')
@section('page_title','Users Registration')
@section('content')

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">User Edit Details</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('users/update',[$usersArr->id])}}">
                        
                        @csrf

                        <div class="form-row m-b-55">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-12">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" value="{{$usersArr->username}}" type="text" name="username">
                                            @error('username')
                                                <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-12">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" value="{{$usersArr->email}}" type="email" name="email">
                                            @error('email')
                                                <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" value="{{$usersArr->password}}" type="text" name="password">
                                    @error('password')
                                        <span style="color:red;">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" value="{{$usersArr->contact}}" type="text" name="contact">
                                    @error('contact')
                                        <span style="color:red;">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="type">
                                            <option selected="selected">Choose option</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        @error('type')
                                        <span style="color:red;">{{$message}}</span>
                                    @enderror
                                        <div class="select-dropdown"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" href="{{url('users')}}">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><i class="fas fa-trash-alt"></i>

@endsection