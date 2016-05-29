<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Filter</h3>
                </div><!-- /.box-header -->

                <!-- form start -->
                  
                 {!! Form::open(['method' => 'GET', 'url' => 'monthly']) !!}


                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="bootstrap-timepicker">
                          <div class="form-group">
                            <label>From:</label>
                            <div class="input-group">
                              <input type="date" name = "datefrom" class="form-control">
                              <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                              </div>
                            </div><!-- /.input group -->
                          </div><!-- /.form group -->
                        </div>
                      </div>
                        
                      <div class="col-md-6">
                        <div class="form-group">
                            <label>To:</label>
                            <div class="input-group">
                              <input type="date" name = "dateto" class="form-control">
                              <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                              </div>
                            </div><!-- /.input group -->
                          </div><!-- /.form group -->
                      </div>

                    </div>  
                    

                     
                    <div class="form-group">
                      <label>Contractor</label>
                      <select name="subcon_name" id="subcon_name" class="form-control" placeholder="Search...">
                      

                      @foreach($subcons as $subcon)
                      <option placeholder="Search..." value="{{ $subcon->id }}">{{ $subcon->subcon_name }}</option>
                      @endforeach
                      </select>
                   </div>

                   <div class="form-group">
                     {!!  Form::submit('Filter', ['class' => 'btn btn-info form-control']) !!}
                     {!! Form::close() !!}
                   </div>  
                                    
                  </div><!-- /.box-body -->
            

              </div><!-- /.box -->

