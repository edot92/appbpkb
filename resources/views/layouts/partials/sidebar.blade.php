<?php
$menu = '';
$subMenu1 = '';
$menu = array('Kendaraan Baru');
$subMenu1 = array('Pendaftaran BBN 1', 'Registrasi BBN 1', 'Monitor Print Kartu Induk BBN 1', 'Print Tanda Terima BBN 1', 'Verifikasi BBN 1', 'Penulisan BBN 1', 'Penyerahan BPKB BBN 1', 'Laporan BBN 1', 'Cetak Legalitas BBN 1');

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="color:white;margin-left:0px;background-color:transparent;">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" >
        <ul class="sidebar-menu" >
          <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
          <!-- Optionally, you can add icons to the links -->
          <li class=""><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

          <li class="treeview">
            <a href="#"><i class='fa fa-link'></i> <span>{{ $menu[0] }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class=" treeview-menu" id ="id_child_menu">
              {{-- @if(isset($subMenu1)) --}}
              <?php
$tempLink1 = '';
$tempLink1 = $menu[0];
$tempLink1 = str_ireplace(' ', '', $tempLink1);
$tempLink1 = strtolower($tempLink1);
?>
              @for($i=0; $i<count($subMenu1)  ; $i++)
              <?php
$tempLink2 = '';
$tempLink = '';
$tempLink2 = $subMenu1[$i];
$tempLink2 = str_ireplace(' ', '', $tempLink2);
$tempLink2 = strtolower($tempLink2);
$tempLink = url($tempLink1 . '/' . $tempLink2);
$tempLink3 = '#';

echo "<li id='$tempLink'><a href='$tempLink'>$subMenu1[$i]</a></li>";
?>
              @endfor
              {{-- @endif --}}
            </ul>

          </li>
        </ul><!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>
