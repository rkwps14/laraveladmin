@extends('layouts.master')
@section('page_title','Branch List')
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users Table </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
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
                            <th class="column-title">Branch Name </th>
                            <th class="column-title">Amount_per_patient </th>
                            <th class="column-title">Created_at </th>
                            <th class="column-title">Updated_at </th>
                            <th class="column-title">Status </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($branch as $branchs)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{$branchs->id}}</td>
                            <td class=" ">{{$branchs->Branch_name}}</td>
                            <td class=" ">{{$branchs->Amount_per_patient}}</td>
                            <td class=" ">{{$branchs->created_at}}</td>
                            <td class=" ">{{$branchs->update_at}}</td>
                            <td class="a-right a-right ">{{$branchs->status}}</td>
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