<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">COMPROBAR ACCIÓN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              ¿Seguro que desea <strong>eliminar</strong> la compañia {{$company->name}}?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cerrarModal">CANCELAR</button>
              <button type="button" class="btn btn-primary" id="aceptarModal">CONFIRMAR ACCIÓN</button>
          </div>
      </div>
  </div>
</div>
