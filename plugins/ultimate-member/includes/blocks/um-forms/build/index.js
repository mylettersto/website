(()=>{"use strict";var e={n:t=>{var r=t&&t.__esModule?()=>t.default:()=>t;return e.d(r,{a:r}),r},d:(t,r)=>{for(var n in r)e.o(r,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:r[n]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=window.wp.element,r=window.wp.data,n=window.wp.components,l=window.wp.blockEditor,o=window.wp.serverSideRender;var i=e.n(o);(0,window.wp.blocks.registerBlockType)("um-block/um-forms",{edit:function(e){let{form_id:o,setAttributes:a}=e.attributes;const s=(0,l.useBlockProps)(),m=(0,r.useSelect)((e=>e("core").getEntityRecords("postType","um_form",{per_page:-1,_fields:["id","title"]})));if(!m)return(0,t.createElement)("p",null,(0,t.createElement)(n.Spinner,null),wp.i18n.__("Loading...","ultimate-member"));if(0===m.length)return"No forms found.";let c=[{id:"",title:""}].concat(m).map((e=>({label:e.title.rendered,value:e.id})));return(0,t.createElement)("div",s,(0,t.createElement)(i(),{block:"um-block/um-forms",attributes:e.attributes}),(0,t.createElement)(l.InspectorControls,null,(0,t.createElement)(n.PanelBody,{title:wp.i18n.__("Select Forms","ultimate-member")},(0,t.createElement)(n.SelectControl,{label:wp.i18n.__("Select Forms","ultimate-member"),className:"um_select_forms",value:o,options:c,style:{height:"35px",lineHeight:"20px",padding:"0 7px"},onChange:t=>{e.setAttributes({form_id:t})}}))))},save:function(e){return null}})})();