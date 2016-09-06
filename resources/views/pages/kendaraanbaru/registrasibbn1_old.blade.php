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

      <div class="col-md-12">
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


<form class="form-inline">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>


  <form class="form-horizontal" method="post">

     <div class="form-group">


     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Different Width</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-3">
                  <input type="text" class="form-control" placeholder=".col-xs-3">
                       <div class="form-group ">
      <label class="control-label col-sm-2" for="select">
       Tanggal
      </label>
      <div class="col-sm-10">
       <select class="select form-control" id="select" name="select">
        <option value="First Choice">
         First Choice
        </option>
        <option value="Second Choice">
         Second Choice
        </option>
        <option value="Third Choice">
         Third Choice
        </option>
       </select>
      </div>
     </div>
                </div>
                <div class="col-xs-4">
                  <input type="text" class="form-control" placeholder=".col-xs-4">
                </div>
                <div class="col-xs-5">
                  <input type="text" class="form-control" placeholder=".col-xs-5">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
