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
/******/ 	return __webpack_require__(__webpack_require__.s = 38);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/range-sliders.init.js":
/*!**************************************************!*\
  !*** ./resources/js/pages/range-sliders.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $("#range_01").ionRangeSlider({
    skin: "square"
  }), $("#range_02").ionRangeSlider({
    skin: "square",
    min: 100,
    max: 1e3,
    from: 550
  }), $("#range_03").ionRangeSlider({
    skin: "square",
    type: "double",
    grid: !0,
    min: 0,
    max: 1e3,
    from: 200,
    to: 800,
    prefix: "$"
  }), $("#range_04").ionRangeSlider({
    skin: "square",
    type: "double",
    grid: !0,
    min: -1e3,
    max: 1e3,
    from: -500,
    to: 500
  }), $("#range_05").ionRangeSlider({
    skin: "square",
    type: "double",
    grid: !0,
    min: -1e3,
    max: 1e3,
    from: -500,
    to: 500,
    step: 250
  }), $("#range_06").ionRangeSlider({
    skin: "square",
    grid: !0,
    from: 3,
    values: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
  }), $("#range_07").ionRangeSlider({
    skin: "square",
    grid: !0,
    min: 1e3,
    max: 1e6,
    from: 2e5,
    step: 1e3,
    prettify_enabled: !0
  }), $("#range_08").ionRangeSlider({
    skin: "square",
    min: 100,
    max: 1e3,
    from: 550,
    disable: !0
  }), $("#range_09").ionRangeSlider({
    skin: "square",
    grid: !0,
    min: 18,
    max: 70,
    from: 30,
    prefix: "Age ",
    max_postfix: "+"
  }), $("#range_10").ionRangeSlider({
    skin: "square",
    type: "double",
    min: 100,
    max: 200,
    from: 145,
    to: 155,
    prefix: "Weight: ",
    postfix: " million pounds",
    decorate_both: !0
  }), $("#range_11").ionRangeSlider({
    skin: "square",
    type: "single",
    grid: !0,
    min: -90,
    max: 90,
    from: 0,
    postfix: "Ã‚Â°"
  }), $("#range_12").ionRangeSlider({
    skin: "square",
    type: "double",
    min: 1e3,
    max: 2e3,
    from: 1200,
    to: 1800,
    hide_min_max: !0,
    hide_from_to: !0,
    grid: !0
  });
});

/***/ }),

/***/ 38:
/*!********************************************************!*\
  !*** multi ./resources/js/pages/range-sliders.init.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\smart.SRVNER5XJWV6V.002\Documents\tom\themeforest-iyxxWD8o-skote-html-laravel-admin-dashboard-template\Skote_v1.5.0\Laravel\vertical\resources\js\pages\range-sliders.init.js */"./resources/js/pages/range-sliders.init.js");


/***/ })

/******/ });