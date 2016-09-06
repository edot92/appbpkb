<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->
</head>
<style type="text/css" media="screen">
  .no-gutter > [class*='col-'] {
    padding-right:0;
    padding-left:0;
  }
  .row {
/*    border: blue 1px solid;
*/
}
.my-column {
  background-color: green;
  padding-right:0;
  padding-left:0;
}
</style>
<body>


  <div class="container-fluid">
    <div class="row">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a data-target="#rbb1" data-toggle="tab">Entry Data BPKB</a></li>
        <li><a data-target="#rbb2" data-toggle="tab">List Data</a></li>

      </ul>

      <div class="tab-content">
        <!-- tab1.x -->
        <div class="tab-pane active" id="rbb1">
         <!--     {{-- panel panel-primary --}} -->
         <div class="panel panel-primary">
          <div class="panel-heading" > </div>
          <h4 class="panel-title panel-primary">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Isi Data Untuk Pencarian</a>
          </h4>
        </div>
      </h4>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row center-block ">
            <div class="col-md-3">
              <div class="form-group center-block text-center">
                <label><h4>Tanggal Registrasi</h4></label>
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            </div>

            <div class="col-md-2">
             <!--2  -->

             <!-- 2.1 -->
             <div class="row">
               <div class="radio">
                 <label  for="t1"><input type="radio" name="optradio">No BPKB</label>
               </div>
               <div class="radio">
                <label for="t2"><input type="radio" name="optradio" for="t2">No Rek BPKB</label>
              </div>
              <div class="radio disabled">
                <label for="t3"><input type="radio" name="optradio" >Barcode Bekas</label>
              </div>
            </div>
            <!--2  -->
          </div>
          <div class="col-md-2 " style="">
           <input type="text" class="form-control" id="t1" placeholder="Massukan Data">
           <button type="button" class="btn btn-primary btn-block">Cari Data</button>

         </div>

         <!--  -->

         <div class="col-md-2">

         </div>

         <!--  -->
       </div>
       <!-- /.row center-->
     </div>
     <!--    {{--       <div class="panel-body"> --}} -->
   </div>
   <!--  {{-- panel panel-primary --}} -->
   <!-- rbb1 -->
   <!-- row Identitas Kendaraaan 1 -->
   <div class="panel panel-primary">
    <div class="panel-heading">Hasil Pencarian Kendaraaan</div>
    <div class="panel-body">
      <div class="row">
        <ul class="nav nav-tabs" id="myTab2">
          <li class="active"><a data-target="#rbb1_1" data-toggle="tab">I. Identitas Kendaraaan</a></li>
          <li><a data-target="#rbb1_2" data-toggle="tab">II. Identitas pemilik</a></li>
          <li><a data-target="#rbb1_3" data-toggle="tab">   III. Identitas Pabean / Asal Usul</a></li>
        </ul>

        <div class="tab-content">
          <!-- tab1.1 -->
          <!-- tab 1.1.1 -->
          <div class="tab-pane active" id="rbb1_1">
           <!-- form kanan -->
           <div class="col-md-6">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">No. BPKB:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Dikeluarkan di:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">No. Rangka</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Merek</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Tipe</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Model</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Tahun Buat</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Jumlah Roda</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Bahan Bakar</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Peruntukan</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3 " for="">Warna TNKB</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" placeholder="Enter Data">
                </div>
              </div>
            </form>
          </div>
          <!-- form kiri -->
          <div class="col-md-6">
            <form class="form-horizontal">
             <div class="form-group">
               <label class="control-label col-sm-3 " for="">No. Reg. BPKB</label>
               <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">Tanggal</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">No. Mesin</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">Jenis</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">Tipe-tipe</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">Silinder</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">Tahun Rakit</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">Jumlah Sumbu</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">Warna</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">No TPT</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3 " for="">No SUT</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Enter Data">
              </div>
            </div>
          </form>
        </div>
      </div>

      <!--/row Identitas Kendaraaan 1 -->

      <!-- /tab 1.1.1 -->
      <div class="tab-pane" id="rbb1_2">Identitas pemilik</div>
      <div class="tab-pane " id="rbb1_3">Identitas Pabean / Asal Usul</div>
    </div>
  </div>
</div>
</div>
<!-- ./rbb1 -->
</div>
<div class="tab-pane" id="rbb2">List Data</div>

</div>
</div>
</div>

<!-- <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#w11">Collapsible panel</a>
      </h4>
    </div>
    <div id="w11" class="panel-collapse collapse">
      <div class="panel-body">Panel Body</div>
      <div class="panel-footer">Panel Footer</div>
    </div>
  </div>
</div> -->


<!-- isi tab 1 -->









<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
<script type="text/javascript">
  //   jQuery(function () {
  //     jQuery('#myTab a:firts').tab('show');
   // })
</script>
</body>
</html>
