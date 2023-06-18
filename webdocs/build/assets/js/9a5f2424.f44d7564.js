"use strict";(self.webpackChunkwebdocs=self.webpackChunkwebdocs||[]).push([[124],{3905:(e,t,r)=>{r.d(t,{Zo:()=>p,kt:()=>m});var n=r(7294);function o(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function a(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function s(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?a(Object(r),!0).forEach((function(t){o(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function i(e,t){if(null==e)return{};var r,n,o=function(e,t){if(null==e)return{};var r,n,o={},a=Object.keys(e);for(n=0;n<a.length;n++)r=a[n],t.indexOf(r)>=0||(o[r]=e[r]);return o}(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(n=0;n<a.length;n++)r=a[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(o[r]=e[r])}return o}var l=n.createContext({}),c=function(e){var t=n.useContext(l),r=t;return e&&(r="function"==typeof e?e(t):s(s({},t),e)),r},p=function(e){var t=c(e.components);return n.createElement(l.Provider,{value:t},e.children)},d="mdxType",u={inlineCode:"code",wrapper:function(e){var t=e.children;return n.createElement(n.Fragment,{},t)}},f=n.forwardRef((function(e,t){var r=e.components,o=e.mdxType,a=e.originalType,l=e.parentName,p=i(e,["components","mdxType","originalType","parentName"]),d=c(r),f=o,m=d["".concat(l,".").concat(f)]||d[f]||u[f]||a;return r?n.createElement(m,s(s({ref:t},p),{},{components:r})):n.createElement(m,s({ref:t},p))}));function m(e,t){var r=arguments,o=t&&t.mdxType;if("string"==typeof e||o){var a=r.length,s=new Array(a);s[0]=f;var i={};for(var l in t)hasOwnProperty.call(t,l)&&(i[l]=t[l]);i.originalType=e,i[d]="string"==typeof e?e:o,s[1]=i;for(var c=2;c<a;c++)s[c]=r[c];return n.createElement.apply(null,s)}return n.createElement.apply(null,r)}f.displayName="MDXCreateElement"},4698:(e,t,r)=>{r.r(t),r.d(t,{assets:()=>l,contentTitle:()=>s,default:()=>u,frontMatter:()=>a,metadata:()=>i,toc:()=>c});var n=r(7462),o=(r(7294),r(3905));const a={title:"SDKs"},s=void 0,i={unversionedId:"sdks/index",id:"sdks/index",title:"SDKs",description:"LAAS currently has a couple of SDKs to provide easy usage of the API",source:"@site/docs/sdks/index.md",sourceDirName:"sdks",slug:"/sdks/",permalink:"/docs/docs/sdks/",draft:!1,tags:[],version:"current",frontMatter:{title:"SDKs"},sidebar:"tutorialSidebar",previous:{title:"Sending Logs",permalink:"/docs/docs/sending-logs/logs"},next:{title:"php",permalink:"/docs/docs/sdks/php"}},l={},c=[{value:"Official SDKs",id:"official-sdks",level:2},{value:"Community Provided SDKs",id:"community-provided-sdks",level:2}],p={toc:c},d="wrapper";function u(e){let{components:t,...r}=e;return(0,o.kt)(d,(0,n.Z)({},p,r,{components:t,mdxType:"MDXLayout"}),(0,o.kt)("p",null,"LAAS currently has a couple of SDKs to provide easy usage of the API"),(0,o.kt)("h2",{id:"official-sdks"},"Official SDKs"),(0,o.kt)("ul",null,(0,o.kt)("li",{parentName:"ul"},"PHP",(0,o.kt)("ul",{parentName:"li"},(0,o.kt)("li",{parentName:"ul"},(0,o.kt)("a",{href:"https://github.com/peteradeojo/laas-php-sdk"},"laas-php-sdk")," (",(0,o.kt)("a",{href:"https://packagist.org/packages/peteradeojo/laas-php-sdk"},"Composer"),")"))),(0,o.kt)("li",{parentName:"ul"},"Node.js",(0,o.kt)("ul",{parentName:"li"},(0,o.kt)("li",{parentName:"ul"},(0,o.kt)("a",{href:"https://github.com/peteradeojo/laas-node-sdk"},"laas-node-sdk")," (",(0,o.kt)("a",{href:"https://npmjs.com/@peteradeojo/laas-sdk"},"NPM"),")")))),(0,o.kt)("h2",{id:"community-provided-sdks"},"Community Provided SDKs"),(0,o.kt)("p",null,"Members of the community are welcome to contribute and submit their own sdks"))}u.isMDXComponent=!0}}]);