!function(){"use strict";var t={5311:function(t){t.exports=jQuery}},e={};function n(i){var r=e[i];if(void 0!==r)return r.exports;var o=e[i]={exports:{}};return t[i](o,o.exports,n),o.exports}n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,{a:e}),e},n.d=function(t,e){for(var i in e)n.o(e,i)&&!n.o(t,i)&&Object.defineProperty(t,i,{enumerable:!0,get:e[i]})},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},function(){var t=n(5311),e=n.n(t);document.addEventListener("DOMContentLoaded",(function(){i.init()}));const i={isInit:!1,init:function(){this.holder=document.querySelectorAll(".qi-block-tabs-vertical"),this.holder.length&&[...this.holder].map((t=>{i.initItem(t)}))},getRealCurrentItem:function(t){return"string"==typeof t&&""!==t&&(t=qiBlocksEditor.qodefGetCurrentBlockElement.get(t)),t},initItem:function(t,n){if(!(t=i.getRealCurrentItem(t)))return;const r=t.querySelectorAll(".qodef-tabs-vertical-content");r.length&&r.forEach(((e,n)=>{n+=1;let i=e.getAttribute("id"),r=t.querySelector(".qodef-tabs-vertical-navigation li:nth-child("+n+") a"),o=r.getAttribute("href");i="#"+i,i.indexOf(o)>-1&&r.setAttribute("href",i)})),t.classList.contains("qodef--init")?n&&i.isInit&&(i.isInit.tabs("destroy"),i.isInit=e()(t).tabs()):(t.classList.add("qodef--init"),i.isInit=e()(t).tabs())}}}()}();