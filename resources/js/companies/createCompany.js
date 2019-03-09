document.addEventListener('DOMContentLoaded',function(){
    $("#name").on("change",validarNombre);
    $("#address").on("change",validarDireccion);
    $("#web").on("change",validarWeb);
    $("#email").on("change",validarEmail);
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
  let datosFormularios = $("#createCompanyForm").serialize;

  axios.post("/register/validar",{
    datosFormularios
  }).then(function(response){
    let formularioCorrecto=true;

    for(let campo of response.data){
      if(!gestionarErrores($(`#${campo}`),
          response.data[$campo])
      ){
        formularioCorrecto = false;
      }
    }
    if(formularioCorrecto){
      let formulario = document.getElementById("createCompanyForm");
      formulario.submit;
    }
  })
    // let datosFormularios = $("#createCompanyForm").serialize();
  
    // axios.post("/companies/createCompanyAjax",datosFormularios)
    //   .then(function(response){
    //     let divCompanyData = $("#companyData");
    //     divCompanyData.append(response.data);
    //   }).catch(function(){
    //     alert("Ha habido un ERROR")
    //   })
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

  function validarNombre(){
    axios.post('/companies/validar',{
      name: $('#name').val()
    }).then(function(response){
        console.log(response.data);
    }).cath(function(error){
        gestionarErrores($('#name'),response.data.name);
    }).catch(function(error){
        alert("Ha Habido un Error");
        console.log(error);
    });
  }
  
  function validarDireccion(){
      axios.post('/companies/validar',{
          address: $('#address').val()
      }).then(function(response){
          console.log(response.data);
      }).cath(function(error){
          gestionarErrores($('#address'),response.data.address);
      }).catch(function(error){
          alert("Ha Habido un Error");
          console.log(error);
      });
  }
  
  function validarWeb(){
      axios.post('/companies/validar',{
        web: $('#web').val()
      }).then(function(response){
          console.log(response.data);
      }).cath(function(error){
          gestionarErrores($('#web'),response.data.web);
      }).catch(function(error){
          alert("Ha Habido un Error");
          console.log(error);
      });
  }
  
  function validarEmail(){
    axios.post('/companies/validar',{
      email: $('#email').val()
    }).then(function(response){
        gestionarErrores($('#email'),response.data.email);
    }).catch(function(error){
        alert("Ha Habido un Error");
        console.log(error);
    });
  }
  
  function gestionarErrores(input,errores){
    let hayErrores = false;
    let divErrores = input.next();
    divErrores.html("");
    input.removeClass("bg-success bg-danger");
    if (errores.length === 0) {
        input.addClass("bg-success");
    } else {
        hayErrores = true;
        input.addClass("bg-danger");
        for (let error of errores) {
            divErrores.append("<div>"+error+"</div>");
        }
    }
    //Para quitar el spinner
    // input.parent().next().remove();
    return hayErrores;
}