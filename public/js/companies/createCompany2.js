!function(e){var n={};function t(a){if(n[a])return n[a].exports;var o=n[a]={i:a,l:!1,exports:{}};return e[a].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=n,t.d=function(e,n,a){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:a})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(t.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var o in e)t.d(a,o,function(n){return e[n]}.bind(null,o));return a},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="/",t(t.s=4)}({4:function(e,n,t){e.exports=t("d+nu")},"d+nu":function(e,n){function t(e){var n={};n[e.name]=e.value,function(e){$(e).parent().find(".spinner-border").removeClass("invisible")}(e),axios.post("/companies/validar",n).then(function(n){a(e,n.data[e.name])}).catch(function(e){console.log(e)}).then(function(){!function(e){$(e).parent().find(".spinner-border").addClass("invisible")}(e)})}function a(e,n){var t=!1,a=$(e).next();if(a.html(""),$(e).removeClass("is-invalid is-valid"),void 0===n||0===n.length)$(e).addClass("is-valid");else{t=!0,$(e).addClass("is-invalid");var o=!0,r=!1,i=void 0;try{for(var c,u=n[Symbol.iterator]();!(o=(c=u.next()).done);o=!0){var d=c.value;a.append('<div class="alert alert-danger">'.concat(d,"</div>"))}}catch(e){r=!0,i=e}finally{try{o||null==u.return||u.return()}finally{if(r)throw i}}}return t}document.addEventListener("DOMContentLoaded",function(){document.getElementById("name").addEventListener("change",function(e){t(e.target)}),document.getElementById("address").addEventListener("change",function(e){t(e.target)}),document.getElementById("web").addEventListener("change",function(e){t(e.target)}),document.getElementById("email").addEventListener("change",function(e){t(e.target)}),document.getElementById("createCompanyForm").addEventListener("submit",function(e){var n,t,o,r;e.preventDefault(),n=e.target,t=$(n).serialize(),axios.post("/companies/validar",t).then(function(e){if(void 0!==e.data)for(campo in e.data){var n=document.getElementsByName(campo)[0];a(n,e.data[campo])}}).catch(function(e){console.log(e)}).then(function(){console.log("termino")}),o=$("#createCompanyForm").serialize(),r=!1,axios.post("/companies/createCompanyAjax",o).then(function(e){$("#companyData").append(e.data),r=!0}).catch(function(){alert("Ha habido un ERROR")}),r&&axios.get("/companies/nuevoFormulario").then(function(e){$("#createCompanyForm").html(e.data);var n=$("<button type='submit' class='btn btn-primary' name='saveCompanyButton' idea='saveCompanyButton'>Save Company</button>");$("#createCompanyForm").append(n)}).catch(function(){alert("Ha habido un ERROR con el nuevo formulario")})})})}});