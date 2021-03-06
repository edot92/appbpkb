@extends('layouts.app')

@section('htmlheader_title')
Home
@endsection


@section('main-content')

<!-- page content -->
<div class="right_col child " >
  {{-- <div class="panel with-nav-tabs panel-primary"> --}}

  <div class="container-fluid with-nav-tabs panel-primary" style="background-color:white;">
    <ul class="nav nav-tabs marginBottom rounded" id="idTabKendaraanBaru" >  </ul>
{{--
  <div class="row-fluid "> --}}
    <div class="tab-content span4">
      {{-- isi konten di sini --}}

    </div>
    {{-- </div> --}}
  </div>
</div>
<!-- /page content -->




@endsection

@push('scripts1')
<script>
/**
 * This javascript contains fuctions
 * @Vikram
 */
//this will hold currently focused tab
var currentTab;
var composeCount = 0;
//initilize tabs
$(function () {

    //when ever any tab is clicked this method will be call
    $("#idTabKendaraanBaru").on("click", "a", function (e) {
      e.preventDefault();

      $(this).tab('show');
      $currentTab = $(this);
    });


    function getEventTarget(e) {
      e = e || window.event;
      return e.target || e.srcElement;
    }

    var ul = document.getElementById('id_child_menu');
    ul.onclick = function(event) {
      event.preventDefault();
      var target = getEventTarget(event);
               //   alert(target.href);
               registerComposeButtonEvent(target);
               registerCloseEvent();
                  // registerTes();
                };



              });

//this method will demonstrate how to add tab dynamically
function registerComposeButtonEvent(target) {
  var Tempid= target.innerHTML;
Tempid=Tempid.replace(/ /g,"_"); // ganti spasi menjadi underscore
var tabId =Tempid;
      //  alert(Tempid);

      $('.nav-tabs').append('<li class="rounded" ><a href="#' + tabId + '"><button class="close closeTab" type="button" >×</button>'+target.innerHTML+'</a></li>');
      $('.tab-content').append('<div class="tab-pane " id="' + tabId + '"></div>');

      craeteNewTabAndLoadUrl("", target.href, "#" + tabId);

      $(this).tab('show');
      showTab(tabId);
      registerCloseEvent();

    }

//this method will register event on close icon on the tab..
function registerCloseEvent() {

  $(".closeTab").click(function () {
        //there are multiple elements which has .closeTab icon so close the tab whose close icon is clicked
        var tabContentId = $(this).parent().attr("href");
        $(this).parent().parent().remove(); //remove li of tab
        $('#idTabKendaraanBaru a:last').tab('show'); // Select first tab
        $(tabContentId).remove(); //remove respective tab content

      });
}

//shows the tab with passed content div id..paramter tabid indicates the div where the content resides
function showTab(tabId) {
  $('#idTabKendaraanBaru a[href="#' + tabId + '"]').tab('show');
}
//return current active tab
function getCurrentTab() {
  return currentTab;
}

//This function will create a new tab here and it will load the url content in tab content div.
function craeteNewTabAndLoadUrl(parms, url, loadDivSelector) {

  $("" + loadDivSelector).load(url, function (response, status, xhr) {
    if (status == "error") {
      var msg = "Sorry but there was an error getting details ! ";
      $("" + loadDivSelector).html(msg + xhr.status + " " + xhr.statusText);
      $("" + loadDivSelector).html("Load Ajax Content Here...");
    }
  });

}

//this will return element from current tab
//example : if there are two tabs having  textarea with same id or same class name then when $("#someId") whill return both the text area from both tabs
//to take care this situation we need get the element from current tab.
function getElement(selector) {
  var tabContentId = $currentTab.attr("href");
  return $("" + tabContentId).find("" + selector);

}


function removeCurrentTab() {
  var tabContentId = $currentTab.attr("href");
    $currentTab.parent().remove(); //remove li of tab
    $('#idTabKendaraanBaru a:last').tab('show'); // Select first tab
    $(tabContentId).remove(); //remove respective tab content
  }

//  function registerTes(){
//     alert('ready1');

//     $("#hw").on('click', function(){
//   alert('triggered');
// });

//  }


function tesss(){

  $('#idCollapsePendaftaranBBN1_2').on('show.bs.collapse', function () {
       //call a service here
       var url = "<?php echo url('/vendor/jqwidgets/sampledata/customers.xml'); ?>";
            // prepare the data
            var source =
            {
              datatype: "xml",
              datafields: [
              { name: 'CompanyName', map: 'm\\:properties>d\\:CompanyName', type: 'string' },
              { name: 'ContactName', map: 'm\\:properties>d\\:ContactName', type: 'string' },
              { name: 'ContactTitle', map: 'm\\:properties>d\\:ContactTitle', type: 'string' },
              { name: 'City', map: 'm\\:properties>d\\:City', type: 'string' },
              { name: 'PostalCode', map: 'm\\:properties>d\\:PostalCode', type: 'string' },
              { name: 'Country', map: 'm\\:properties>d\\:Country', type: 'string' }
              ],
              root: "entry",
              record: "content",
              id: 'm\\:properties>d\\:CustomerID',
              url: url
            };
            var dataAdapter= new $.jqx.dataAdapter(source);

            // Create jqxGrid
            $("#jqxgrid").jqxGrid(
            {
              width: '80%',
                height: '80%',
              source: dataAdapter,
              groupable: true,
              columns: [
              { text: 'Company Name', datafield: 'CompanyName', width: 250 },
              { text: 'City', datafield: 'City', width: 120 },
              { text: 'Country', datafield: 'Country' }
              ],
              groups: ['City']
            });

          });
        };

</script>




@endpush
