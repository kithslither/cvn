@extends('trip.dashboard')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Contract Type
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
        {!! Form::open(['url' => 'type']) !!}
        <div class="box-body">
         <div class="form-group">
          {!! Form::label('type_name', 'Type Name:') !!}
          {!! Form::text('type_name', null, ['class' => 'form-control']) !!}
         </div>
         <div class="form-group">
         {!! Form::label('type_description', 'Description:') !!}
         {!! Form::textarea('type_description', null, ['class' => 'form-control', 'rows' => '3']) !!}
            
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
                  
                  <th class="text-center">Type</th>
                  <th class="text-center">Description</th>
                </tr>
              </thead>
              <tbody>
                @foreach($types as $type)
                <tr class="text-center">
                  <td>{{ $type->type_name}}</td>
                  <td>{{ $type->type_description}}</td>
                  <td>
                 
                  {!! Form::model($type, ['method' => 'delete', 'route' => ['type.destroy', $type->id], 'style' => 'display: inline;']) !!}
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
     