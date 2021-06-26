@extends('layouts.master')
@section('page_title','Users List')
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users Table </h2>
                    {{session('msg')}}
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Id </th>
                            <th class="column-title">Username </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Password </th>
                            <th class="column-title">Contact </th>
                            <th class="column-title">Type </th>
                            <th class="column-title">Created_at </th>
                            <th class="column-title">Action </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($users as $user)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{$user->id}}</td>
                            <td class=" ">{{$user->username}}</td>
                            <td class=" ">{{$user->email}}</td>
                            <td class=" ">{{$user->password}}</td>
                            <td class=" ">{{$user->contact}}</td>
                            <td class="a-right a-right ">{{$user->type}}</td>
                            <td class=" last">{{$user->created_at}}</td>
                            <td><a class="btn-btn-danger" href="/edit/{{$user->id}}">Edit</a>&nbsp;|&nbsp; <a class="btn-btn-danger" href="/delete/{{$user->id}}">Delete</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection