document.addEventListener('DOMContentLoaded',function(){
    asociarEventos();
});

function asociarEventos(){

    $('#createCompanyForm').submit(function(event){
      event.preventDefault();
      validarFormularioAxios();
      nuevoFormulario();
    });
}

function validarFormularioAxios(){
    let datosFormularios = $("#createCompanyForm").serialize();
  
    axios.post("/companies/createCompanyAjax",datosFormularios)
      .then(function(response){
        let divCompanyData = $("#companyData");
        divCompanyData.append(response.data);
      }).catch(function(){
        alert("Ha habido un ERROR")
      })
}

function nuevoFormulario(){

    axios.get("/companies/nuevoFormulario")
      .then(function(response){
        $("#createCompanyForm").html(response.data);
        let botonEnviar = $("<button type='submit' class='btn btn-primary' name='saveCompanyButton' idea='saveCompanyButton'>Save Company</button>");
        $("#createCompanyForm").append(botonEnviar);
        // eventoTitulo();
      }).catch(function(){
        alert("Ha habido un ERROR con el nuevo formulario");
      })
  }