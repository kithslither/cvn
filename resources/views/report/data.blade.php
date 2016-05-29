@extends('trip.dashboard')
@section('content')
     
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daily Reports
            
          </h1>
          <ol class="breadcrumb">
            <li></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
            

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Trip Reports</h3>


                  <!-- <div class="form-group">
                    <label>
                      <input type="checkbox" class="flat-red" checked>
                    </label>
                    <label>
                      <input type="checkbox" class="flat-red">
                    </label>
                    <label>
                      <input type="checkbox" class="flat-red" disabled>
                      Flat green skin checkbox
                    </label>
                  </div> -->

                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <!-- <th>No.</th> -->
                        <th>Dates</th>
                        <th>DR No.</th>
                        <th>Sub-Con</th>
                        <th>DT No.</th>
                        <th>BH No.</th>
                        <th>Load</th>
                        <th>Stockpile</th>
                        <th>Source</th>
                        <th>Dump</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Type</th>
                        <th>Shift</th>
                        <th>Rate</th>
                        <th>Km</th>
                        <th>Total</th>
                      
                

                      </tr>
                    </thead>
                    <tbody>
                     @foreach($trips as $trip)
                      <tr>
                        <!-- <td>{{ $trip->id }}</td> -->
                        <td>{{ $trip->date }}</td>
                        <td>{{ $trip->delivery_number }}</td>
                        <td>{{ $trip->getPosterSubcon() }}</td>
                        <td>{{ $trip->getPosterDumptruck() }} </td>
                        <td>{{ $trip->getPosterBackhoe() }}</td>
                        <td>{{ $trip->load_id }}</td>
                        <td>{{ $trip->stockpile }}</td>
                        <td>{{ $trip->source_area }}</td>
                        <td>{{ $trip->dump_area }}</td>
                        <td>{{ date("g:i: A", strtotime( $trip->time_dep )) }}</td>
                        <td>{{ date("g:i: A", strtotime( $trip->time_arr )) }}</td>
                        <td>{{ $trip->type_id }}</td>
                        <td>{{ $trip->shift }}</td>
                        <td>{{ $trip->rate }}</td>
                        <td>{{ $trip->distance }}</td>
                        <td>{{ $trip->total }}</td> 
                       
                       
                        

                      </tr>
                      @endforeach
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
        </section><!-- /.content -->
     
    

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- page script -->

    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
@endsection  