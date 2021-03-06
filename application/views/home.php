

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
      <li><a class="waves-effect waves-light btn btn-floating green modal-trigger"
            id="addEventModal" data-toggle="modal" data-target="#eventModal"><i class="material-icons" >note_add</i></a></li><label>Evento</label>
      <li><a class="waves-effect waves-light btn btn-floating red"
            id="addCalendarModal" data-toggle="modal" data-target="#calendarModal" ><i class="material-icons">web</i></a></li><label>Calendario</label>
      <li><a class="waves-effect waves-light btn btn-floating yellow darken-1"
            id="addContactModal" data-toggle="modal" data-target="#contactModal" ><i class="material-icons">perm_contact_calendar</i></a></li><label>Contacto</label>
      <li><a class="waves-effect waves-light btn btn-floating blue"
          id="addBusinessModal"data-toggle="modal" data-target="#clientModal"><i class="material-icons">business</i></a></li><label>Cliente</label>
    </ul>
  </div>


  <!-- Modal Cliente -->
  <div id="clientModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cliente</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Nombre:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="address">Direccion:</label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
           <div class="form-group">
              <label for="web">Web:</label>
              <input type="text" class="form-control" id="web" name="web">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <input type="submit" name="create-client-submit" id="create-client-submit" tabindex="4" class="form-control btn btn-default" value="Crear">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Calendario -->
  <div id="calendarModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Calendario</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="calendar_name" name="calendar_name">
            </div>
            <div class="form-group">
              <label for="calendar_client">Cliente vinculado</label>
                <select class="form-control"  id="calendar_client" name="calendar_client">
                  <?php
                  foreach($clientes as $key => $value):
                    echo '<option value="'. $value["key"] .'">' .$value["nombre"]. '</option>';
                  endforeach;
                  ?>
                </select>
            </div>
            <input type="submit" name="create-calendar-submit" id="create-calendar-submit" tabindex="4" class="form-control btn btn-default" value="Crear">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Evento -->
  <div id="eventModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Evento</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="desc">Descripción:</label>
              <input type="text" class="form-control" id="desc" name="desc">
            </div>
            <div class="form-group">
              <label for="fechaDesde">Fecha desde:</label>
              <input type="text" class="form-control" id="fechaDesde" name="fechaDesde">
            </div>
           <div class="form-group">
              <label for="fechaHasta">Fecha hasta:</label>
              <input type="text" class="form-control" id="fechaHasta" name="fechaHasta">
            </div>
            <div class="form-group">
              <label for="horaDesde">Hora desde:</label>
              <input type="email" class="form-control" id="horaDesde" name="horaDesde">
            </div>
            <div class="form-group">
              <label for="horaHasta">Hora hasta:</label>
              <input type="text" class="form-control" id="horaHasta" name="horaHasta">
            </div>
            <div class="form-group">
              <label for="cal">Calendario</label>
              <input type="text" class="form-control" id="cal" name="cal">
            </div>

            <input type="submit" name="create-calendar-submit" id="create-calendar-submit" tabindex="4" class="form-control btn btn-default" value="Crear">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>




<script>
   $(document).ready(function(){
     // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
     //$('#modal1').modal();
     $('#create-client-submit').click(function(event) {
        event.preventDefault();
        $.ajax( {
        	url: '<?php echo base_url()?>client_controller/crear/',
        	type: 'POST',
        	dataType: "json",
        	data: 'name=' + $('#name').val() +'&'+
                'address=' + $('#address').val() +'&'+
                'web=' + $('#web').val() +'&'+
                'email=' + $('#email').val() +'&'+
                'phone=' + $('#email').val(),

           success: function(data) {
           	if(data.status == 0){
           		//TODO Mostrar error en login
           		$('#mensaje').html('Error al crear cliente.')
           		//$("#selector_hijo").html(data.contenido);
           	}
             else {
             		//TODO todo esta bien
             		$('#mensaje').html('Creado correctamente.')
             	  window.location.assign("<?php echo base_url()?>login_controller/load_home/");
           	}
           },
           error: function() {
              //$('#notification-bar').text('An error occurred');
           }
        });
     });

     $('#create-calendar-submit').click(function(event) {
        event.preventDefault();
        $.ajax( {
         url: '<?php echo base_url()?>calendar_controller/crear/',
         type: 'POST',
         dataType: "json",
         data: 'nombre=' + $('#calendar_name').val() +'&'+
               'cliente=' + $('#calendar_client').val(),

           success: function(data) {
             if(data.status == 0){
               //TODO Mostrar error en login
               $('#mensaje').html('Error al crear calendario.')
               //$("#selector_hijo").html(data.contenido);
             }
             else {
                 //TODO todo esta bien
                 $('#mensaje').html('Creado correctamente.')
                 window.location.assign("<?php echo base_url()?>login_controller/load_home/");
             }
           },
           error: function() {
              //$('#notification-bar').text('An error occurred');
           }
        });
     });






   });
   </script>
