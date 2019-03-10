import Axios from "axios";

document.addEventListener('DOMContentLoaded',function(){
    asociarEventos();
});

function asociarEventos(){
    let botonShow = $(".showButton");
    let otroModal = $("#searchModal");
    for (let i = 0; i < botonShow.length; i++) {
        $(botonShow[i]).click(function(){
            let jobSlug = $(botonShow[i]).attr("data-jobSlug");
            Axios.post(`/jobs/${jobSlug}/moreInfoAjax`)
            .then(function(response){
                otroModal.after(response.data);
                mostrarModal('showModal');
            }).catch(function(){
                alert("HA HABIDO UN ERROR");
            })
        })
        
    }
    
}


function mostrarModal(id){
    $("#"+id).modal('show');
}

function cerrarModal(id){
    $("#"+id).modal('hide');
}
