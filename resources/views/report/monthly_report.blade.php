@extends('trip.dashboard')
@section('content')
     
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Half-Monthly Reports
            
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> </li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
               <!-- append sarch forms here -->
              @include('report.filter',['url'=>'filter','link'=>'filter'])

              <div class="box box-primary">
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

                        <th>Date</th>
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
                     @foreach($queries as $query)
                      <tr>
                      
                        <td>{{ $query->date }}</td>
                        <td>{{ $query->delivery_number }}</td>
                        <td>{{ $query->getPosterSubcon() }}</td>
                        <td>{{ $query->getPosterDumptruck() }} </td>
                        <td>{{ $query->getPosterBackhoe() }}</td>
                        <td>{{ $query->load_id }}</td>
                        <td>{{ $query->stockpile }}</td>
                        <td>{{ $query->source_area }}</td>
                        <td>{{ $query->dump_area }}</td>
                        <td>{{ $query->time_dep }}</td>
                        <td>{{ $query->time_arr }}</td>
                        <td>{{ $query->type_id }}</td>
                        <td>{{ $query->shift }}</td>
                        <td>{{ $query->rate }}</td>
                        <td>{{ $query->distance }}</td>
                        <td>{{ $query->total }}</td> 
                       
                       
                        

                      </tr>
                      @endforeach
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
     
    

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>


    <!-- page script -->

    <script>
      $(function () {
        $("#example1").DataTable({
          "bFilter": false
        });
        
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        $('#reservation').daterangepicker();
      });
    </script>
@endsection  