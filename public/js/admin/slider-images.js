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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admin/slider-images.js":
/*!*********************************************!*\
  !*** ./resources/js/admin/slider-images.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var classes = {\n  wrapper_s: \".slider-images-wrapper\",\n  addBtn_s: \".slider-images-add\",\n  removeBtn_s: \".slider-images-remove\",\n  row_s: \".slider-images-row\"\n};\nvar htmlTemplate_s = \"\\n\\t<div class=\\\"row slider-images-row\\\"\\n\\t\\t style=\\\"width: 100%; margin: 32px auto 0;\\\">\\n\\t\\t <div class=\\\"col-8\\\">\\n\\t\\t\\t  <input type=\\\"file\\\" name=\\\"slider_images[]\\\" />\\n\\t\\t </div>\\n\\t\\t <div class=\\\"col-4\\\">\\n\\t\\t\\t  <button class=\\\"btn btn-danger slider-images-remove \\\">Remove</button> \\n\\t\\t </div>\\n\\t</div>\";\n$(document).on(\"click\", classes.addBtn_s, function (e) {\n  e.preventDefault();\n  $(classes.wrapper_s).append(htmlTemplate_s);\n});\n$(document).on(\"click\", classes.removeBtn_s, function (e) {\n  e.preventDefault();\n\n  if ($(this).hasClass(\"ajax\")) {\n    S.ajaxSetup({\n      headers: {\n        \"X-CSRF-TOKEN\": jQuery('meta[name=\"csrf-token\"]').attr(\"content\")\n      }\n    });\n    var route = $(this).data(\"route\");\n    var $btn = $(this);\n    $.ajax({\n      url: route,\n      type: \"DELETE\",\n      dataType: \"json\",\n      success: function success(data) {\n        var parent = $btn.parents(classes.row_s);\n        parent.html(data.message);\n        setTimeout(function (parent) {\n          parent.remove();\n        }, 2000, parent);\n      },\n      error: function error(data) {\n        console.log(\"Error:\", data);\n      }\n    });\n  } else {\n    var parent = $(this).parents(classes.row_s);\n\n    if (parent) {\n      parent.remove();\n    }\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW4vc2xpZGVyLWltYWdlcy5qcz9lOTJiIl0sIm5hbWVzIjpbImNsYXNzZXMiLCJ3cmFwcGVyX3MiLCJhZGRCdG5fcyIsInJlbW92ZUJ0bl9zIiwicm93X3MiLCJodG1sVGVtcGxhdGVfcyIsIiQiLCJkb2N1bWVudCIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiYXBwZW5kIiwiaGFzQ2xhc3MiLCJTIiwiYWpheFNldHVwIiwiaGVhZGVycyIsImpRdWVyeSIsImF0dHIiLCJyb3V0ZSIsImRhdGEiLCIkYnRuIiwiYWpheCIsInVybCIsInR5cGUiLCJkYXRhVHlwZSIsInN1Y2Nlc3MiLCJwYXJlbnQiLCJwYXJlbnRzIiwiaHRtbCIsIm1lc3NhZ2UiLCJzZXRUaW1lb3V0IiwicmVtb3ZlIiwiZXJyb3IiLCJjb25zb2xlIiwibG9nIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxPQUFPLEdBQUc7QUFDZkMsV0FBUyxFQUFFLHdCQURJO0FBRWZDLFVBQVEsRUFBRSxvQkFGSztBQUdmQyxhQUFXLEVBQUUsdUJBSEU7QUFJZkMsT0FBSyxFQUFFO0FBSlEsQ0FBaEI7QUFNQSxJQUFNQyxjQUFjLHVVQUFwQjtBQVdBQyxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsT0FBZixFQUF3QlIsT0FBTyxDQUFDRSxRQUFoQyxFQUEwQyxVQUFTTyxDQUFULEVBQVk7QUFDckRBLEdBQUMsQ0FBQ0MsY0FBRjtBQUNBSixHQUFDLENBQUNOLE9BQU8sQ0FBQ0MsU0FBVCxDQUFELENBQXFCVSxNQUFyQixDQUE0Qk4sY0FBNUI7QUFDQSxDQUhEO0FBS0FDLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEVBQVosQ0FBZSxPQUFmLEVBQXdCUixPQUFPLENBQUNHLFdBQWhDLEVBQTZDLFVBQVNNLENBQVQsRUFBWTtBQUN4REEsR0FBQyxDQUFDQyxjQUFGOztBQUVFLE1BQUlKLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUU0sUUFBUixDQUFpQixNQUFqQixDQUFKLEVBQThCO0FBQzlCQyxLQUFDLENBQUNDLFNBQUYsQ0FBWTtBQUNWQyxhQUFPLEVBQUU7QUFDVCx3QkFBZ0JDLE1BQU0sQ0FBQyx5QkFBRCxDQUFOLENBQWtDQyxJQUFsQyxDQUF1QyxTQUF2QztBQURQO0FBREMsS0FBWjtBQU1BLFFBQUlDLEtBQUssR0FBS1osQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRYSxJQUFSLENBQWEsT0FBYixDQUFkO0FBQ0EsUUFBSUMsSUFBSSxHQUFNZCxDQUFDLENBQUMsSUFBRCxDQUFmO0FBRUFBLEtBQUMsQ0FBQ2UsSUFBRixDQUFPO0FBQ0xDLFNBQUcsRUFBRUosS0FEQTtBQUVMSyxVQUFJLEVBQUUsUUFGRDtBQUdMQyxjQUFRLEVBQUUsTUFITDtBQUlMQyxhQUFPLEVBQUUsaUJBQVNOLElBQVQsRUFBZTtBQUN4QixZQUFJTyxNQUFNLEdBQUlOLElBQUksQ0FBQ08sT0FBTCxDQUFhM0IsT0FBTyxDQUFDSSxLQUFyQixDQUFkO0FBQ0FzQixjQUFNLENBQUNFLElBQVAsQ0FBWVQsSUFBSSxDQUFDVSxPQUFqQjtBQUVBQyxrQkFBVSxDQUFDLFVBQVNKLE1BQVQsRUFBaUI7QUFDMUJBLGdCQUFNLENBQUNLLE1BQVA7QUFDRCxTQUZTLEVBRVAsSUFGTyxFQUVETCxNQUZDLENBQVY7QUFHQyxPQVhJO0FBWUxNLFdBQUssRUFBRSxlQUFTYixJQUFULEVBQWU7QUFDdEJjLGVBQU8sQ0FBQ0MsR0FBUixDQUFZLFFBQVosRUFBc0JmLElBQXRCO0FBQ0M7QUFkSSxLQUFQO0FBZ0JELEdBMUJDLE1BMEJLO0FBQ0wsUUFBSU8sTUFBTSxHQUFHcEIsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRcUIsT0FBUixDQUFnQjNCLE9BQU8sQ0FBQ0ksS0FBeEIsQ0FBYjs7QUFDQSxRQUFJc0IsTUFBSixFQUFZO0FBQ1ZBLFlBQU0sQ0FBQ0ssTUFBUDtBQUNEO0FBQ0Y7QUFDRCxDQW5DRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hZG1pbi9zbGlkZXItaW1hZ2VzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgY2xhc3NlcyA9IHtcblx0d3JhcHBlcl9zOiBcIi5zbGlkZXItaW1hZ2VzLXdyYXBwZXJcIixcblx0YWRkQnRuX3M6IFwiLnNsaWRlci1pbWFnZXMtYWRkXCIsXG5cdHJlbW92ZUJ0bl9zOiBcIi5zbGlkZXItaW1hZ2VzLXJlbW92ZVwiLFxuXHRyb3dfczogXCIuc2xpZGVyLWltYWdlcy1yb3dcIlxufTtcbmNvbnN0IGh0bWxUZW1wbGF0ZV9zID0gYFxuXHQ8ZGl2IGNsYXNzPVwicm93IHNsaWRlci1pbWFnZXMtcm93XCJcblx0XHQgc3R5bGU9XCJ3aWR0aDogMTAwJTsgbWFyZ2luOiAzMnB4IGF1dG8gMDtcIj5cblx0XHQgPGRpdiBjbGFzcz1cImNvbC04XCI+XG5cdFx0XHQgIDxpbnB1dCB0eXBlPVwiZmlsZVwiIG5hbWU9XCJzbGlkZXJfaW1hZ2VzW11cIiAvPlxuXHRcdCA8L2Rpdj5cblx0XHQgPGRpdiBjbGFzcz1cImNvbC00XCI+XG5cdFx0XHQgIDxidXR0b24gY2xhc3M9XCJidG4gYnRuLWRhbmdlciBzbGlkZXItaW1hZ2VzLXJlbW92ZSBcIj5SZW1vdmU8L2J1dHRvbj4gXG5cdFx0IDwvZGl2PlxuXHQ8L2Rpdj5gO1xuXG4kKGRvY3VtZW50KS5vbihcImNsaWNrXCIsIGNsYXNzZXMuYWRkQnRuX3MsIGZ1bmN0aW9uKGUpIHtcblx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xuXHQkKGNsYXNzZXMud3JhcHBlcl9zKS5hcHBlbmQoaHRtbFRlbXBsYXRlX3MpO1xufSk7XG5cbiQoZG9jdW1lbnQpLm9uKFwiY2xpY2tcIiwgY2xhc3Nlcy5yZW1vdmVCdG5fcywgZnVuY3Rpb24oZSkge1xuXHRlLnByZXZlbnREZWZhdWx0KCk7XG5cblx0ICBpZiAoJCh0aGlzKS5oYXNDbGFzcyhcImFqYXhcIikpIHtcblx0XHQgUy5hamF4U2V0dXAoe1xuXHRcdFx0ICBoZWFkZXJzOiB7XG5cdFx0XHRcdFx0XCJYLUNTUkYtVE9LRU5cIjogalF1ZXJ5KCdtZXRhW25hbWU9XCJjc3JmLXRva2VuXCJdJykuYXR0cihcImNvbnRlbnRcIilcblx0XHRcdCAgfVxuXHRcdCB9KTtcblxuXHRcdCBsZXQgcm91dGUgICA9ICQodGhpcykuZGF0YShcInJvdXRlXCIpO1xuXHRcdCBsZXQgJGJ0biAgICA9ICQodGhpcyk7XG5cblx0XHQgJC5hamF4KHtcblx0XHRcdCAgdXJsOiByb3V0ZSxcblx0XHRcdCAgdHlwZTogXCJERUxFVEVcIixcblx0XHRcdCAgZGF0YVR5cGU6IFwianNvblwiLFxuXHRcdFx0ICBzdWNjZXNzOiBmdW5jdGlvbihkYXRhKSB7XG5cdFx0XHRcdFx0bGV0IHBhcmVudCA9ICAkYnRuLnBhcmVudHMoY2xhc3Nlcy5yb3dfcyk7XG5cdFx0XHRcdFx0cGFyZW50Lmh0bWwoZGF0YS5tZXNzYWdlKTtcblx0XHRcdFx0XG5cdFx0XHRcdFx0c2V0VGltZW91dChmdW5jdGlvbihwYXJlbnQpIHtcblx0XHRcdFx0XHQgIHBhcmVudC5yZW1vdmUoKTtcblx0XHRcdFx0XHR9LCAyMDAwLCBwYXJlbnQpO1xuXHRcdFx0ICB9LFxuXHRcdFx0ICBlcnJvcjogZnVuY3Rpb24oZGF0YSkge1xuXHRcdFx0XHRcdGNvbnNvbGUubG9nKFwiRXJyb3I6XCIsIGRhdGEpO1xuXHRcdFx0ICB9XG5cdFx0IH0pO1xuXHR9IGVsc2Uge1xuXHRcdCBsZXQgcGFyZW50ID0gJCh0aGlzKS5wYXJlbnRzKGNsYXNzZXMucm93X3MpO1xuXHRcdCBpZiAocGFyZW50KSB7XG5cdFx0XHQgIHBhcmVudC5yZW1vdmUoKTtcblx0XHQgfVxuXHR9XG59KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/admin/slider-images.js\n");

/***/ }),

/***/ 2:
/*!***************************************************!*\
  !*** multi ./resources/js/admin/slider-images.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/test.com/resources/js/admin/slider-images.js */"./resources/js/admin/slider-images.js");


/***/ })

/******/ });