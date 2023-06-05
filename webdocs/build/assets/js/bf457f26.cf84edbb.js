"use strict";(self.webpackChunkwebdocs=self.webpackChunkwebdocs||[]).push([[914],{3905:(e,t,n)=>{n.d(t,{Zo:()=>p,kt:()=>f});var o=n(7294);function r(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function i(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,o)}return n}function a(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?i(Object(n),!0).forEach((function(t){r(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):i(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function l(e,t){if(null==e)return{};var n,o,r=function(e,t){if(null==e)return{};var n,o,r={},i=Object.keys(e);for(o=0;o<i.length;o++)n=i[o],t.indexOf(n)>=0||(r[n]=e[n]);return r}(e,t);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(e);for(o=0;o<i.length;o++)n=i[o],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(r[n]=e[n])}return r}var s=o.createContext({}),c=function(e){var t=o.useContext(s),n=t;return e&&(n="function"==typeof e?e(t):a(a({},t),e)),n},p=function(e){var t=c(e.components);return o.createElement(s.Provider,{value:t},e.children)},d="mdxType",u={inlineCode:"code",wrapper:function(e){var t=e.children;return o.createElement(o.Fragment,{},t)}},g=o.forwardRef((function(e,t){var n=e.components,r=e.mdxType,i=e.originalType,s=e.parentName,p=l(e,["components","mdxType","originalType","parentName"]),d=c(n),g=r,f=d["".concat(s,".").concat(g)]||d[g]||u[g]||i;return n?o.createElement(f,a(a({ref:t},p),{},{components:n})):o.createElement(f,a({ref:t},p))}));function f(e,t){var n=arguments,r=t&&t.mdxType;if("string"==typeof e||r){var i=n.length,a=new Array(i);a[0]=g;var l={};for(var s in t)hasOwnProperty.call(t,s)&&(l[s]=t[s]);l.originalType=e,l[d]="string"==typeof e?e:r,a[1]=l;for(var c=2;c<i;c++)a[c]=n[c];return o.createElement.apply(null,a)}return o.createElement.apply(null,n)}g.displayName="MDXCreateElement"},2739:(e,t,n)=>{n.r(t),n.d(t,{assets:()=>s,contentTitle:()=>a,default:()=>u,frontMatter:()=>i,metadata:()=>l,toc:()=>c});var o=n(7462),r=(n(7294),n(3905));const i={id:"logs",title:"Sending Logs"},a=void 0,l={unversionedId:"sending-logs/logs",id:"sending-logs/logs",title:"Sending Logs",description:"To store logs in LAAS, you can make use of the HTTP POST request to the '/logs' endpoint. The request body should be formatted as a JSON object, which includes the following fields:",source:"@site/docs/sending-logs/logs.md",sourceDirName:"sending-logs",slug:"/sending-logs/logs",permalink:"/docs/docs/sending-logs/logs",draft:!1,tags:[],version:"current",frontMatter:{id:"logs",title:"Sending Logs"},sidebar:"tutorialSidebar",previous:{title:"Managing Apps",permalink:"/docs/docs/sending-logs/applications"}},s={},c=[],p={toc:c},d="wrapper";function u(e){let{components:t,...n}=e;return(0,r.kt)(d,(0,o.Z)({},p,n,{components:t,mdxType:"MDXLayout"}),(0,r.kt)("pre",null,(0,r.kt)("code",{parentName:"pre",className:"language-curl"},'curl -X POST --data \'{"origin": "app", "text": "This is a log message"}\' \nhttps://laas-api.onrender.com/api/v1/logs\n\n')),(0,r.kt)("p",null,"To store logs in LAAS, you can make use of the HTTP POST request to the '/logs' endpoint. The request body should be formatted as a JSON object, which includes the following fields:"),(0,r.kt)("p",null,(0,r.kt)("inlineCode",{parentName:"p"},"origin")," (string, required): This field specifies the origin or source of the log within your application. It helps identify which part of your application the log is coming from."),(0,r.kt)("p",null,(0,r.kt)("inlineCode",{parentName:"p"},"text")," (string, required): The text field contains the actual log message itself. It provides a concise description of the event or message you want to log."),(0,r.kt)("p",null,(0,r.kt)("inlineCode",{parentName:"p"},"level")," (string, optional): The level field indicates the log level, which determines the severity or importance of the log. It can take one of the following values: ",(0,r.kt)("inlineCode",{parentName:"p"},"debug"),", ",(0,r.kt)("inlineCode",{parentName:"p"},"info"),", ",(0,r.kt)("inlineCode",{parentName:"p"},"warn"),", ",(0,r.kt)("inlineCode",{parentName:"p"},"error"),", or ",(0,r.kt)("inlineCode",{parentName:"p"},"emergency"),". If not specified, the default log level is set to ",(0,r.kt)("inlineCode",{parentName:"p"},"info"),"."),(0,r.kt)("p",null,(0,r.kt)("inlineCode",{parentName:"p"},"context")," (object, optional): The context field is a JSON object that can hold additional information related to the log. It allows you to provide relevant contextual data associated with the log, such as request details or environment variables."),(0,r.kt)("admonition",{type:"tip"},(0,r.kt)("p",{parentName:"admonition"},"You can also use the ",(0,r.kt)("inlineCode",{parentName:"p"},"context")," field to send structured logs to LAAS. By including structured data in the ",(0,r.kt)("inlineCode",{parentName:"p"},"context")," field, you can easily search and filter logs based on the structured data.")),(0,r.kt)("p",null,(0,r.kt)("inlineCode",{parentName:"p"},"extra")," (object, optional): The extra field is another JSON object that provides an avenue to include further supplementary information specific to the log. This can be any additional details or metadata that might be helpful for log analysis or troubleshooting purposes."),(0,r.kt)("p",null,"By including these fields and their respective values in the JSON request body, you can effectively send and store logs in LAAS. This enables you to have a structured and organized approach to log storage and retrieval, facilitating easier log analysis and problem resolution."))}u.isMDXComponent=!0}}]);