@extends('trip.dashboard')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Backhoe
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
        {!! Form::open(['url' => 'dumptruck']) !!}
        <div class="box-body">
         <div class="form-group">
          {!! Form::label('dt_code', 'Dump Truck Code:') !!}
          {!! Form::text('dt_code', null, ['class' => 'form-control']) !!}
         </div>
         <div class="form-group">
          {!!  Form::submit('Save', ['class' => 'btn btn-info']) !!}
         </div>
        </div>
        {!! Form::close() !!}
        @if($errors->any())
          <div  class="alert alert-warning alert-dismissable"> 
            <ul class="list-unstyled">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              <h4>
                <i class="icon fa fa-ban">  </i>
                  Warning
              </h4>
              @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
              @endforeach
            </ul>
          </div>
        @endif
          
    
        </div><!-- /.row -->
        <!-- Table row -->
        <div class="box-footer"></div>
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              
                <tr>
                  <!-- <th class="text-center">No.</th> -->
                  <th class="text-center">No.</th>
                  <th class="text-center">Dump Truck Code</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($dumptrucks as $dumptruck)
                <tr class="text-center">
                  <td>{{ $dumptruck->id}}</td>
                  <td>{{ $dumptruck->dt_code}}</td>
                  <td>
                 
                  {!! Form::model($dumptruck, ['method' => 'delete', 'route' => ['dumptruck.destroy', $dumptruck->id], 'style' => 'display: inline;']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                  {!! Form::close() !!}

                
               
                  </td>
                </tr>
                @endforeach
              </tbody>

            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        
       
      </section><!-- /.content -->

@endsection
     