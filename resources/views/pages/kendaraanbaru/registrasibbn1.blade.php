  {{-- panel 1 --}}
  <br>
  <button type="button" class="btn btn-info col-md-12"  data-toggle="collapse" data-target="#idCollapseRegistrasiBBN1">User Inputs</button>
  <br>
  <br>
  <div id="idCollapseRegistrasiBBN1" class="collapse in">
    <div class="col-md-12 col-xs-12">

     <br />


     {{-- start side tabs --}}

     <div class="row">

      <div class="col-xs-3">
        <!-- required for floating -->
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills ">
          <li class=""><a href="#rbb1_Entry_BPKB" data-toggle="tab" aria-expanded="false">Entry BPKB</a>
          </li>
          <li class="active"><a href="#rbb1_List_Data" data-toggle="tab" aria-expanded="true">List Data</a>
          </li>

        </ul>
      </div>
      <br>
      <div class="col-md-12">
        <!-- Tab panes -->
        <div class="tab-content">
          {{-- start isi tabs 1 --}}
          <div class="tab-pane" id="rbb1_Entry_BPKB">
            {{-- start isi tabs 1.1 --}}
            <br>
            <div class="row">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Input masks</h3>
                </div>
                <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                  <label>Tanggal</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- Date mm/dd/yyyy -->
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask="">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>US phone mask:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>Intl US phone mask:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- IP mask -->
                  <div class="form-group">
                    <label>IP mask:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>
          {{-- end isi tabs 1 --}}

          {{-- start isi tabs 2 --}}
          <div class="tab-pane active" id="rbb1_List_Data">
          </div>
          {{-- end isi tabs 1 --}}
        </div>
      </div>
    </div>
  </div>
  {{-- end side tabs --}}


</div>

{{--
@section('scripts2')
<script src="../bower_components/AdminLTE/plugins/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../bower_components/AdminLTE/plugins/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../bower_components/AdminLTE/plugins/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
  $(function () {
console.log( "ready!" );
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate: moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
@endsection --}}
