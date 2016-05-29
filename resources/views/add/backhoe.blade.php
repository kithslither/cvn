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
        {!! Form::open(['url' => 'backhoe']) !!}
        <div class="box-body">
         <div class="form-group">
          {!! Form::label('bh_code', 'Backhoe Code:') !!}
          {!! Form::text('bh_code', null, ['class' => 'form-control']) !!}
         </div>
         <div class="form-group">
          {!!  Form::submit('Save', ['class' => 'btn btn-info']) !!}
         </div>
        </div>
        {!! Form::close() !!}
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
                  <th class="text-center">Backhoe Code</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($backhoes as $backhoe)
                <tr class="text-center">
                  <td>{{ $backhoe->id}}</td>
                  <td>{{ $backhoe->bh_code}}</td>
                  <td>
                 
                  {!! Form::model($backhoe, ['method' => 'delete', 'route' => ['backhoe.destroy', $backhoe->id], 'style' => 'display: inline;']) !!}
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
     