!function(n){var o={};function i(e){if(o[e])return o[e].exports;var t=o[e]={i:e,l:!1,exports:{}};return n[e].call(t.exports,t,t.exports,i),t.l=!0,t.exports}i.m=n,i.c=o,i.d=function(e,t,n){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)i.d(n,o,function(e){return t[e]}.bind(null,o));return n},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="",i(i.s=0)}([function(e,t,n){n(1),e.exports=n(2)},function(e,t,n){"use strict";function o(){1<=$(window).scrollTop()?($("header").addClass("white"),$(".logo").attr("src","./wp-content/themes/atate/assets/build/img/atate-logo-black.png")):($("header").removeClass("white"),$(".logo").attr("src","./wp-content/themes/atate/assets/build/img/atate-logo-clear.png"))}$(window).scroll(function(){o()}),$("a").click(function(){return $("html, body").animate({scrollTop:$($(this).attr("href")).offset().top-60},500),!1}),$(document).ready(function(){o(),$("#menu-toggle").click(function(){$("body").toggleClass("mobile-menu-open"),$(this).toggleClass("open"),$(".navbar__menu").slideToggle(),$("header").toggleClass("mobile-nav-open")}),$(".mob-menu .fa").click(function(){$(".main-nav").toggleClass("visible"),$("header .menu-ros").toggleClass("visible"),$("nav").hasClass("visible")&&$("nav ul li a").click(function(){$("nav").hasClass("visible")&&($("nav").toggleClass("visible"),$("header .menu-ros").toggleClass("visible"))})})}),$(function(){window.sr=ScrollReveal(),$(window).width()<768?$(".timeline-content").hasClass("js--fadeInLeft")&&$(".timeline-content").removeClass("js--fadeInLeft").addClass("js--fadeInRight"):sr.reveal(".js--fadeInLeft",{origin:"left",distance:"300px",easing:"ease-in-out",duration:800}),sr.reveal(".js--fadeInRight",{origin:"right",distance:"300px",easing:"ease-in-out",duration:800}),sr.reveal(".js--fadeInLeft",{origin:"left",distance:"300px",easing:"ease-in-out",duration:800}),sr.reveal(".js--fadeInRight",{origin:"right",distance:"300px",easing:"ease-in-out",duration:800})})},function(e,t,n){}]);