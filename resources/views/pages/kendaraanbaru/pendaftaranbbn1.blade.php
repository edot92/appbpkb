

<?php
$uri = $_SERVER['REQUEST_URI'];
$uri = strtoupper($uri);

?>
{{-- start panel ke 1 --}}
<br>
<button type="button" class="btn btn-info col-md-12"  data-toggle="collapse" data-target="#idCollapsePendaftaranBBN1_1">User Inputs</button>
<br>
<br>
<div id="idCollapsePendaftaranBBN1_1 col-md-12 col-xs-12" class="collapse in">
  <div class="col-md-12 col-xs-12">
    <form class="form-horizontal form-label-left">
      <div class="row">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="form-control">
              <option>Choose option</option>
              <option>Option one</option>
              <option>Option two</option>
              <option>Option three</option>
              <option>Option four</option>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-12 control-label">Jenis Pemohon

          </label>

          <div class="col-md-9 col-sm-9 col-xs-12">

            <div class="radio">
              <label>
                <input type="radio" class="flat" checked name="iCheck"> Pribadi
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" class="flat" name="iCheck"> Jasa
              </label>
            </div>

          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Pemohon</label>
          <div class="col-sm-9">
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button type="button" class="btn btn-primary">Refresh</button>
              </span>
              <span class="input-group-btn">
                <button type="button" class="btn btn-primary">Add</button>
              </span>
            </div>
          </div>
        </div>

      </form>


      <div class="divider-dashed"></div>


      <form class="form-horizontal form-label-left">
        <div class="form-group">
          <label class="col-sm-3 control-label">No Resi pembayaran</label>
          <div class="col-sm-8">
            <div class="input-group">
              <input type="text" class="form-control">

              <div class="checkbox">
                <label>
                  <input type="checkbox" value=""> Diplomat</label>
                </div>
              </div>
            </div>
          </div>
        </form>



        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">No Rangka</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" class="form-control" placeholder="Massukan No Rangka">
          </div>
          <div class="text-center">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-primary">Baru</button>
              <button type="button" class="btn btn-primary">Simpan</button>
              <button type="button" class="btn btn-primary">Hapus</button>
              <button type="button" class="btn btn-primary">Cetak</button>
            </div>
          </div>
        </div>

        <div class="divider-dashed"></div>
</div>


{{-- end panel ke 1 --}}
{{-- panel 2 --}}

<br>
<div class="row">


  <button type="button"  id ="hww" onclick="tesss()" class="btn btn-info col-md-12" data-toggle="collapse" data-target="#idCollapsePendaftaranBBN1_2">Table</button>
  <br>
  <br>
  <div id="idCollapsePendaftaranBBN1_2" class="collapse in">

   <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: center;">
    <div id="jqxgrid">
    </div>

  </div>
</div>
</div>

{{-- panel ke 2 --}}