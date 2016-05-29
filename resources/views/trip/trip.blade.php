@extends('trip.dashboard')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Create Dump Truck Trip
          <!--   <small>Preview</small> -->
          </h1>
         <!--  <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Ticket info</h3>
                </div><!-- /.box-header -->

                <!-- form start -->
            
                 {!! Form::open(['url' => 'trip']) !!}
                  <div class="box-body">
                    <!-- <div class="form-group">
                     {!! Form::label('current_date', 'Date:') !!}
                     {!! Form::text('current_date', $date, ['class' => 'form-control' ]) !!}
                    </div> -->

                    <div class="form-group">
                      <label>Date:</label>
                      <input readonly="readonly" type="text" name="current_date" value="{{ $date }}" class="form-control">
                    </div>

                    <div class="form-group">
                      {!! Form::label('delivery_number', 'DR Number:') !!}
                     {!! Form::text('delivery_number', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                      <label>Sub-Contractor</label>
                      <select name="subcon_name" id="subcon_name" class="form-control">
                      <!-- <option selected="selected">Alabama</option> -->

                      @foreach($subcons as $subcon)
                      <option value="{{ $subcon->id }}">{{ $subcon->subcon_name }}</option>
                      @endforeach
                      </select>
                   </div><!-- /.form-group -->                    
                  </div><!-- /.box-body -->
            

              </div><!-- /.box -->

              <!-- Form Element sizes -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Equipment</h3>
                </div>
                 <div class="box-body">
                  <div class="form-group">
                      <label>Dump Truck No.</label>
                      <select name="dt_code" id="dt_code" class="form-control">
                      <!-- <option selected="selected">Alabama</option> -->
                      @foreach($dumptrucks as $dumptruck)
                      <option value="{{ $dumptruck->id }}">{{ $dumptruck->dt_code }}</option>
                      @endforeach
                      </select>
                   </div><!-- /.form-group -->        
                  
                  <div class="form-group">
                       <label for="bh_code">Load Equipment</label>
                        <select name="bh_code" id="bh_code" class="form-control">
                          @foreach($backhoes as $backhoe)
                            <option value="{{ $backhoe->id }}">{{ $backhoe->bh_code }}</option>
                          @endforeach
                        </select>
                    </div><!-- /.form-group -->




                 
                   <div class="form-group">
                     {!! Form::label('distance', 'Distance Traveled:') !!}
                     {!! Form::text('distance', null, ['class' => 'form-control']) !!}
                    </div>
                
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            {!! Form::label('rate', 'Rate:') !!}
                            {!! Form::text('rate', null, ['class' => 'form-control'])!!}
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                            {!! Form::label('cvn_rate', 'CVN Rate:') !!}
                            {!! Form::text('cvn_rate', null, ['class' => 'form-control'])!!}
                          </div>
                      </div>
                    </div>    
                                     
                  </div><!-- /.box-body -->
              </div><!-- /.box -->

              

              <!-- Input addon -->
              <!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Load Info</h3>
                </div><!-- /.box-header -->

                <!-- form start -->
               
                  <div class="box-body">
                    <div class="form-group">
                      {!! Form::label('load', 'Load:') !!}
                     {!! Form::text('load', null, ['class' => 'form-control']) !!}
                    </div>

                   <div class="form-group">
                      <label>Type</label>
                      <select class="form-control select2" style="width: 100%;">

                      <!-- <option selected="selected">Alabama</option> -->
                      @foreach($types as $type)
                      <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                      @endforeach
                      </select>
                   </div><!-- /.form-group -->


        
                    <div class="form-group">
                     {!! Form::label('stockpile', 'Stockpile:') !!}
                     {!! Form::text('stockpile', null, ['class' => 'form-control']) !!}
                    </div>
               
                    <div class="form-group">
                     {!! Form::label('source_area', 'Source Area:') !!}
                     {!! Form::text('source_area', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('dump_area', 'Dump Area:') !!}
                     {!! Form::text('dump_area', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                       {!! Form::label('shift', 'Shift:') !!}
                      <select class="form-control select2" name="shift" style="width: 100%;">
                     
                      <option> Day Shift</option>
                      <option> Night Shift</option>
                    
                      </select>
                    </div><!-- /.form-group -->


                    <!-- time Picker -->
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Departure Time:</label>
                      <div class="input-group">
                        <input type="time" name = "time_dep" class="form-control timepicker">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                  </div>

                   <!-- time Picker -->
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Arrival Time:</label>
                      <div class="input-group">
                        <input type="time" name = "time_arr" class="form-control timepicker">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>

                        </div>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                  </div>
                  
                  </div><!-- /.box-body -->
              

              </div><!-- /.box -->
              <!-- general form elements disabled -->
              
            </div><!--/.col (right) -->
          
          </div>   <!-- /.row -->
   
          
           <div class="form-group">
           {!!  Form::submit('Save', ['class' => 'btn btn-info form-control']) !!}
           {!! Form::close() !!}
           </div>
              
            
            
          <!-- </div> --><!-- /.box -->
        </section><!-- /.content -->
        <script type="text/javascript">
            function parseTime(timeString) {    
                if (timeString == '') return null;

                var time = timeString.match(/(\d+)(:(\d\d))?\s*(p?)/i); 
                if (time == null) return null;

                var hours = parseInt(time[1],10);    
                if (hours == 12 && !time[4]) {
                      hours = 0;
                }
                else {
                    hours += (hours < 12 && time[4])? 12 : 0;
                }   
                var d = new Date();             
                d.setHours(hours);
                d.setMinutes(parseInt(time[3],10) || 0);
                d.setSeconds(0, 0);  
                return d;
            }
        </script>
@endsection
     