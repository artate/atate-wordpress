!function(n){var o={};function r(e){if(o[e])return o[e].exports;var t=o[e]={i:e,l:!1,exports:{}};return n[e].call(t.exports,t,t.exports,r),t.l=!0,t.exports}r.m=n,r.c=o,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)r.d(n,o,function(e){return t[e]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=0)}([function(e,t,n){n(1),e.exports=n(2)},function(e,t,n){"use strict";function o(){1<=$(window).scrollTop()?($("header").addClass("white"),$(".logo").attr("src","/wp-content/themes/atate/assets/img/atate-logo-black.png")):($("header").removeClass("white"),$(".logo").attr("src","/wp-content/themes/atate/assets/img/atate-logo-clear.png"))}$(window).scroll(function(){o()}),$("a").click(function(){return $("html, body").animate({scrollTop:$($(this).attr("href")).offset().top-60},500),!1}),$(document).ready(function(){o(),$("#menu-toggle").click(function(){$("body").toggleClass("mobile-menu-open"),$(this).toggleClass("open"),$(".navbar__menu").slideToggle(),$("header").toggleClass("mobile-nav-open")}),$(".mob-menu .fa").click(function(){$(".main-nav").toggleClass("visible"),$("header .menu-ros").toggleClass("visible"),$("nav").hasClass("visible")&&$("nav ul li a").click(function(){$("nav").hasClass("visible")&&($("nav").toggleClass("visible"),$("header .menu-ros").toggleClass("visible"))})})})},function(e,t,n){}]);