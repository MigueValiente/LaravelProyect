/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/companies/createCompany2.js":
/*!**************************************************!*\
  !*** ./resources/js/companies/createCompany2.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

document.addEventListener('DOMContentLoaded', function () {
  asociarEventos();
});

function asociarEventos() {
  var inputName = document.getElementById('name');
  inputName.addEventListener('change', function (event) {
    validarCampo(event.target);
  });
  var inputAddress = document.getElementById('address');
  inputAddress.addEventListener('change', function (event) {
    validarCampo(event.target);
  });
  var inputWeb = document.getElementById('web');
  inputWeb.addEventListener('change', function (event) {
    validarCampo(event.target);
  });
  var inputEmail = document.getElementById('email');
  inputEmail.addEventListener('change', function (event) {
    validarCampo(event.target);
  });
  var form = document.getElementById('createCompanyForm');
  form.addEventListener('submit', function (event) {
    event.preventDefault();
    validarFormulario(event.target);
    createCompanyAjax();
  });
}

function validarCampo(input) {
  var datosPost = {};
  datosPost[input.name] = input.value;
  mostrarSpinner(input);
  axios.post('/companies/validar', datosPost).then(function (response) {
    tieneErrores(input, response.data[input.name]);
  }).catch(function (error) {
    console.log(error);
  }).then(function () {
    esconderSpinner(input);
  });
}

function tieneErrores(input, errores) {
  var hayErrores = false;
  var divErrores = $(input).next();
  divErrores.html("");
  $(input).removeClass("is-invalid is-valid");
  /*Si es undefined o esta vacío, 
  significa que no hay errores en dicho campo*/

  if (errores === undefined || errores.length === 0) {
    $(input).addClass("is-valid");
  } else {
    hayErrores = true;
    $(input).addClass("is-invalid");
    var _iteratorNormalCompletion = true;
    var _didIteratorError = false;
    var _iteratorError = undefined;

    try {
      for (var _iterator = errores[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
        var error = _step.value;
        divErrores.append("<div>".concat(error, "</div>"));
      }
    } catch (err) {
      _didIteratorError = true;
      _iteratorError = err;
    } finally {
      try {
        if (!_iteratorNormalCompletion && _iterator.return != null) {
          _iterator.return();
        }
      } finally {
        if (_didIteratorError) {
          throw _iteratorError;
        }
      }
    }
  }

  return hayErrores;
}

function mostrarSpinner(input) {
  $(input).parent().find(".spinner-border").removeClass("invisible");
}

function esconderSpinner(input) {
  $(input).parent().find(".spinner-border").addClass("invisible");
}

function validarFormulario(form) {
  var datosPost = $(form).serialize();
  axios.post('/companies/validar', datosPost).then(function (response) {
    var formularioCorrecto = true;

    if (response.data !== undefined) {
      for (campo in response.data) {
        var input = document.getElementsByName(campo)[0];

        if (tieneErrores(input, response.data[campo])) {
          formularioCorrecto = false;
        }
      }
    }

    if (formularioCorrecto) {
      form.submit();
    }
  }).catch(function (error) {
    console.log(error);
  }).then(function () {
    console.log("termino");
  });
}

function createCompanyAjax() {
  var datosFormularios = $("#createCompanyForm").serialize();
  axios.post("/companies/createCompanyAjax", datosFormularios).then(function (response) {
    var divCompanyData = $("#companyData");
    divCompanyData.append(response.data);
  }).catch(function () {
    alert("Ha habido un ERROR");
  });
}

/***/ }),

/***/ 4:
/*!********************************************************!*\
  !*** multi ./resources/js/companies/createCompany2.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/miguevaliente/Sites/LaravelProyect/resources/js/companies/createCompany2.js */"./resources/js/companies/createCompany2.js");


/***/ })

/******/ });