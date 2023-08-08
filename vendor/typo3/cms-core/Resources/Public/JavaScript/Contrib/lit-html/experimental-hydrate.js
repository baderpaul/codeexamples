import{noChange as e,_$LH as t}from"lit-html/lit-html.js";import{PartType as r}from"lit-html/directive.js";import{isPrimitive as n,isTemplateResult as o,isSingleExpression as a}from"lit-html/directive-helpers.js";
/**
 * @license
 * Copyright 2019 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const{L:i,D:l,R:s,I:c,F:d}=t,f=(e,t,r={})=>{if(console.warn("Importing `hydrate()` from `lit-html/experimental-hydrate.js` is deprecated.Import from `@lit-labs/ssr-client` instead."),void 0!==t._$litPart$)throw Error("container already contains a live render");let n,o,a;const i=[],l=document.createTreeWalker(t,NodeFilter.SHOW_COMMENT,null,!1);let s;for(;null!==(s=l.nextNode());){const t=s.data;if(t.startsWith("lit-part")){if(0===i.length&&void 0!==n)throw Error(`There must be only one root part per container. Found a part marker (${s}) when we already have a root part marker (${o})`);a=p(e,s,i,r),null!=n||(n=a),null!=o||(o=s)}else if(t.startsWith("lit-node"))h(s,i,r);else if(t.startsWith("/lit-part")){if(1===i.length&&a!==n)throw Error("internal error");a=m(s,a,i)}}if(void 0===n){const e=t instanceof ShadowRoot?"{container.host.localName}'s shadow root":t instanceof DocumentFragment?"DocumentFragment":t.localName;console.error(`There should be exactly one root part in a render container, but we didn't find any in ${e}.`)}t._$litPart$=n},p=(t,r,a,d)=>{let f,p;if(0===a.length)p=new c(r,null,void 0,d),f=t;else{const e=a[a.length-1];if("template-instance"===e.type)p=new c(r,null,e.instance,d),e.instance._$AV.push(p),f=e.result.values[e.instancePartIndex++],e.templatePartIndex++;else if("iterable"===e.type){p=new c(r,null,e.part,d);const t=e.iterator.next();if(t.done)throw f=void 0,e.done=!0,Error("Unhandled shorter than expected iterable");f=t.value,e.part._$AH.push(p)}else p=new c(r,null,e.part,d)}if(f=s(p,f),f===e)a.push({part:p,type:"leaf"});else if(n(f))a.push({part:p,type:"leaf"}),p._$AH=f;else if(o(f)){const e="lit-part "+u(f);if(r.data!==e)throw Error("Hydration value mismatch: Unexpected TemplateResult rendered to part");{const e=c.prototype._$AC(f),t=new i(e,p);a.push({type:"template-instance",instance:t,part:p,templatePartIndex:0,instancePartIndex:0,result:f}),p._$AH=t}}else l(f)?(a.push({part:p,type:"iterable",value:f,iterator:f[Symbol.iterator](),done:!1}),p._$AH=[]):(a.push({part:p,type:"leaf"}),p._$AH=null==f?"":f);return p},m=(e,t,r)=>{if(void 0===t)throw Error("unbalanced part marker");t._$AB=e;const n=r.pop();if("iterable"===n.type&&!n.iterator.next().done)throw Error("unexpected longer than expected iterable");if(r.length>0)return r[r.length-1].part},h=(e,t,n)=>{const o=/lit-node (\d+)/.exec(e.data),i=parseInt(o[1]),l=e.nextElementSibling;if(null===l)throw Error("could not find node for attribute parts");l.removeAttribute("defer-hydration");const c=t[t.length-1];if("template-instance"!==c.type)throw Error("internal error");{const e=c.instance;for(;;){const t=e._$AD.parts[c.templatePartIndex];if(void 0===t||t.type!==r.ATTRIBUTE&&t.type!==r.ELEMENT||t.index!==i)break;if(t.type===r.ATTRIBUTE){const o=new t.ctor(l,t.name,t.strings,c.instance,n),i=a(o)?c.result.values[c.instancePartIndex]:c.result.values,s=!(o.type===r.EVENT||o.type===r.PROPERTY);o._$AI(i,o,c.instancePartIndex,s),c.instancePartIndex+=t.strings.length-1,e._$AV.push(o)}else{const t=new d(l,c.instance,n);s(t,c.result.values[c.instancePartIndex++]),e._$AV.push(t)}c.templatePartIndex++}}},u=e=>{const t=new Uint32Array(2).fill(5381);for(const r of e.strings)for(let e=0;e<r.length;e++)t[e%2]=33*t[e%2]^r.charCodeAt(e);const r=String.fromCharCode(...new Uint8Array(t.buffer));return btoa(r)};export{u as digestForTemplateResult,f as hydrate};
