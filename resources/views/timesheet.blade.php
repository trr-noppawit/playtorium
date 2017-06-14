@extends('layout.app')

@section('title', 'Timesheet')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>Timesheet</h2>
      <hr>

      <!-- date -->
      <div class="container-fluid">
        <div class="row">
          <div class="form-group col-md-3">
            <label for="date">Date</label>
            <div id="sandbox-container" class="input-group date" data-provide="datepicker" data-date-autoclose="true">
              <input type="text" class="form-control ">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- timesheet -->
      <div class="container-fluid">
        <div class="panel panel-default">
          <div class="panel-heading">Project name - Task name
            <div class="btn-group pull-right">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>
                  <a href="#">Edit</a>
                </li>
                <li>
                  <a href="#">Delete</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="panel-body">
              Time: 9.00 - 18.00
              <br>
              Description: ...
          </div>
        </div>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Add task</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a task</h4>
              </div>
              <div class="modal-body">
                <p>Some text in the modal.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
