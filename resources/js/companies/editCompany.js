document.addEventListener('DOMContentLoaded',function(){

    asociarEventos();

})

function  asociarEventos(){
    let inputName = document.getElementById('name');
    inputName.addEventListener('change',function(event){
        validarCampo(event.target);
    });

    let inputAddress = document.getElementById('address');
    inputAddress.addEventListener('change',function(event){
        validarCampo(event.target);
    });

    let inputWeb = document.getElementById('web');
    inputWeb.addEventListener('change',function(event){
        validarCampo(event.target);
    });

    let inputEmail = document.getElementById('email');
    inputEmail.addEventListener('change',function(event){
        validarCampo(event.target);
    });



    let form = document.getElementById('createCompanyForm');
    form.addEventListener('submit',function(event){
        event.preventDefault();
        validarFormulario(event.target);
        editCompanyAjax();
    });
}

function validarCampo(input){
    let datosPost = {};
    datosPost[input.name] = input.value; 
    mostrarSpinner(input);
    axios.post('/companies/validar',datosPost)
    .then(function(response){
        tieneErrores(input,response.data[input.name]);
    }).catch(function (error) {
        console.log(error);
    }).then(function(){
        esconderSpinner(input);
    });
}


function tieneErrores(input,errores){
    let hayErrores = false;
    let divErrores = $(input).next();
    divErrores.html("");
    $(input).removeClass("is-invalid is-valid");

    /*Si es undefined o esta vacío, 
    significa que no hay errores en dicho campo*/
    if (errores === undefined || errores.length === 0) {
        $(input).addClass("is-valid");
    } else {
        hayErrores = true;
        $(input).addClass("is-invalid");
        for (let error of errores) {
            divErrores.append(`<div>${error}</div>`);
        }
    }
    return hayErrores;
}

function mostrarSpinner(input){
    $(input).parent().find(".spinner-border").removeClass("invisible");
}

function esconderSpinner(input){
    $(input).parent().find(".spinner-border").addClass("invisible");
}

function validarFormulario(form){
    let datosPost = $(form).serialize();
    axios.post('/companies/validar',datosPost)
    .then(function(response){
        let formularioCorrecto = true;

        if(response.data !== undefined){
            for(campo in response.data){
                let input = document.getElementsByName(campo)[0];
                if(tieneErrores(input,response.data[campo])){
                    formularioCorrecto = false;
                }
            }    
        }

        if(formularioCorrecto){
            form.submit();
        }
    }).catch(function (error) {
        console.log(error);
    }).then(function(){
        console.log("termino");
    });
}

function editCompanyAjax(){
    let datosFormularios = $("#createCompanyForm").serialize();
  
    axios.post("/companies/editCompanyAjax",datosFormularios)
      .then(function(response){
        let divCompanyData = $("#companyData");
        divCompanyData.append(response.data);
      }).catch(function(){
        alert("Ha habido un ERROR")
      })
  }