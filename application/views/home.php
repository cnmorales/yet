

<div ng-app="yetApp" ng-controller="myNgController">
    <div class="row">
        <div class="col-md-8">
            <div id="calendar" ui-calendar="uiConfig.calendar" ng-model="eventSources" calendar="myCalendar"></div>
        </div>
        <div class="col-md-4">
            <div ng-show="SelectedEvent" class="alert alert-success" style="margin-top:50px">
                <h2 style="margin-top:0px"> Selected Event:</h2>
                <h3 style="color:#A9A50E">{{SelectedEvent.title}}</h3>
                <p>{{SelectedEvent.description}}</p>
            </div>
        </div>
    </div>
</div>

  <div class="fixed-action-btn vertical click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
    <ul>
      <li><a class="waves-effect waves-light btn btn-floating green modal-trigger" id="addEventModal"><i class="material-icons" >note_add</i></a></li><label>Evento</label>
      <li><a class="waves-effect waves-light btn btn-floating red"  id="addCalendarModal" ><i class="material-icons">web</i></a></li><label>Calendario</label>
      <li><a class="waves-effect waves-light btn btn-floating yellow darken-1"  id="addContactModal" ><i class="material-icons">perm_contact_calendar</i></a></li><label>Contacto</label>
      <li><a class="waves-effect waves-light btn btn-floating blue"  data-toggle="modal" data-target="#clientModal"><i class="material-icons">business</i></a></li><label>Cliente</label>
    </ul>
  </div>


  <!-- Modal -->
  <div id="clientModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



<script>
   $(document).ready(function(){
     // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
     //$('#modal1').modal();


       $('#clientModal').modal({
             dismissible: true, // Modal can be dismissed by clicking outside of the modal
             opacity: .6, // Opacity of modal background
           });




   });
   </script>
