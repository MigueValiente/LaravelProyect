document.addEventListener('DOMContentLoaded',function(){
    asociarEventos();
});

function asociarEventos(){



}


function mostrarModal(id){
    $("#"+id).modal('show');
}

function cerrarModal(id){
    $("#"+id).modal('hide');
}