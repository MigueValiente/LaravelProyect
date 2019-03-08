document.addEventListener('DOMContentLoaded',function(){
    asociarEventos();
});


function asociarEventos(){
    const MARGEN = .1;
    let contador = 5;

    $(function(){
    $(window).on("scroll",endPage)
    })

    function endPage(){
        if(MARGEN > $(document).height() - $(window).scrollTop() - $(window).height()) {
            contador = contador+5;
            mostrarSpinner(spinnerLoad);
            axios.get(`/jobs/paginar/${contador}`)
            .then(function(response){
                if(response.data == ""){
                    mostrarModal("obtainJobs");
                }else{
                        $('#mostrarJobs').append(response.data);
                }
                esconderSpinner(spinnerLoad);
            })
            .catch(function(error){
                console.log(error);
                alert("HA HABIDO UN ERROR");
            })
        }
    }

}

function mostrarSpinner(spinner){
    $(spinner).removeClass("invisible");
}

function esconderSpinner(spinner){
    $(spinner).addClass("invisible");
}

function mostrarModal(id){
    $("#"+id).modal('show');
}

function cerrarModal(id){
    $("#"+id).modal('hide');
}
