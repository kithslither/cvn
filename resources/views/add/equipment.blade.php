@extends('trip.dashboard')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Equipment
          <!--   <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->               
  
        <section class="invoice">
        <!-- title row -->
    
        <!-- info row -->
        
        <div class="row invoice-info">
        {!! Form::open(['url' => 'equipment']) !!}
        <div class="box-body">
         <div class="form-group">
          {!! Form::label('equipment_id', 'Equipment Code:') !!}
          {!! Form::text('equipment_id', null, ['class' => 'form-control']) !!}
         </div>
         <div class="form-group">
          {!! Form::label('equipment_cat', 'Equipment type:') !!}
          {!! Form::text('equipment_cat', null, ['class' => 'form-control']) !!}
         </div>
         <div class="form-group">
          {!!  Form::submit('Save', ['class' => 'btn btn-info']) !!}
         </div>
        </div>
        {!! Form::close() !!}
          <!-- <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Equipment code</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter code">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Equipment Type</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter type">
                </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-default">Clear</button>
                  <button type="submit" class="btn btn-info pull-right">Save</button> -->
                  <!-- </div> /.box-footer                 
                  </div>/.box-body -->
                  
         <!--  </form> -->
        </div><!-- /.row -->
        <!-- Table row -->
        <div class="box-footer"></div>
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Equipment code</th>
                  <th class="text-center">Equipment type</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($equipments as $equipment)
                <tr class="text-center">
                  <td>{{ $equipment->id}}</td>
                  <td>{{ $equipment->equipment_id}}</td>
                  <td>{{ $equipment->equipment_cat}}</td>
                  <td><button type="submit" class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
                @endforeach
              </tbody>

            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        
       
      </section><!-- /.content -->

@endsection
     