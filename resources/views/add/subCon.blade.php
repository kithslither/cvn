@extends('trip.dashboard')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Sub-Contractor
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
        {!! Form::open(['url' => 'subcon']) !!}
        <div class="box-body">
         <div class="form-group">
          {!! Form::label('subcon_name', 'Sub-Contractor:') !!}
          {!! Form::text('subcon_name', null, ['class' => 'form-control']) !!}
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
                  
                  <th class="text-center">Sub-Contractor ID</th>
                  <th class="text-center">Sub-Contractor Name</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($subcons as $subcon)
                <tr class="text-center">
                  <td>{{ $subcon->id}}</td>
                  <td>{{ $subcon->subcon_name}}</td>
                  
                  <td>
                 
                  {!! Form::model($subcon, ['method' => 'delete', 'route' => ['subcon.destroy', $subcon->id], 'style' => 'display: inline;']) !!}
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
     