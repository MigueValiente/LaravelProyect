document.addEventListener('DOMContentLoaded',function(){
    asociarEventos();
});


function asociarEventos(){
  let deleteForm = $("form[data-accion = 'delete']");

  deleteForm.submit(function(event){
    event.preventDefault();
    mostrarModal("deleteModal");
    let form = $(event.target);
    let idCompany = form.attr("data-companyId");

    let botonAceptarModal = $("#aceptarModal");
    botonAceptarModal.click(function(){
      axios.delete(`/companies/borrarAjax/${idCompany}`)
      .then(function(response){
        alert("Se ha eliminado correctamente la compañia "+response.data);
        cerrarModal("deleteModal");
        //se desactiva con off el evento asociado anteriormente
        botonAceptarModal.off('click');
        //cogemos el div de la compañia y lo eliminamos a el y a sus hijos
        let divCompany = $(`div[data-companyId=${idCompany}]`);
        divCompany.remove();
      }).catch(function(){
        alert("HA HABIDO UN ERROR");
      })
    })
  })

  let botonCerrarModal = $("#cerrarModal");
  botonCerrarModal.on("click",cerrarModal("deleteModal"))


}

function mostrarModal(id){
    $("#"+id).modal('show');
}

function cerrarModal(id){
    $("#"+id).modal('hide');
}
