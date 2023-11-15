/*! For license information please see createcoll-1155-addon.bundle.js.LICENSE.txt */
(()=>{"use strict";var e={408:(e,t)=>{var r=Symbol.for("react.element"),n=Symbol.for("react.portal"),o=Symbol.for("react.fragment"),u=Symbol.for("react.strict_mode"),a=Symbol.for("react.profiler"),c=Symbol.for("react.provider"),l=Symbol.for("react.context"),i=Symbol.for("react.forward_ref"),f=Symbol.for("react.suspense"),s=Symbol.for("react.memo"),p=Symbol.for("react.lazy"),y=Symbol.iterator,d={isMounted:function(){return!1},enqueueForceUpdate:function(){},enqueueReplaceState:function(){},enqueueSetState:function(){}},_=Object.assign,m={};function v(e,t,r){this.props=e,this.context=t,this.refs=m,this.updater=r||d}function h(){}function b(e,t,r){this.props=e,this.context=t,this.refs=m,this.updater=r||d}v.prototype.isReactComponent={},v.prototype.setState=function(e,t){if("object"!=typeof e&&"function"!=typeof e&&null!=e)throw Error("setState(...): takes an object of state variables to update or a function which returns an object of state variables.");this.updater.enqueueSetState(this,e,t,"setState")},v.prototype.forceUpdate=function(e){this.updater.enqueueForceUpdate(this,e,"forceUpdate")},h.prototype=v.prototype;var S=b.prototype=new h;S.constructor=b,_(S,v.prototype),S.isPureReactComponent=!0;var E=Array.isArray,C=Object.prototype.hasOwnProperty,R={current:null},w={key:!0,ref:!0,__self:!0,__source:!0};function k(e,t,n){var o,u={},a=null,c=null;if(null!=t)for(o in void 0!==t.ref&&(c=t.ref),void 0!==t.key&&(a=""+t.key),t)C.call(t,o)&&!w.hasOwnProperty(o)&&(u[o]=t[o]);var l=arguments.length-2;if(1===l)u.children=n;else if(1<l){for(var i=Array(l),f=0;f<l;f++)i[f]=arguments[f+2];u.children=i}if(e&&e.defaultProps)for(o in l=e.defaultProps)void 0===u[o]&&(u[o]=l[o]);return{$$typeof:r,type:e,key:a,ref:c,props:u,_owner:R.current}}function O(e){return"object"==typeof e&&null!==e&&e.$$typeof===r}var $=/\/+/g;function g(e,t){return"object"==typeof e&&null!==e&&null!=e.key?function(e){var t={"=":"=0",":":"=2"};return"$"+e.replace(/[=:]/g,(function(e){return t[e]}))}(""+e.key):t.toString(36)}function A(e,t,o,u,a){var c=typeof e;"undefined"!==c&&"boolean"!==c||(e=null);var l=!1;if(null===e)l=!0;else switch(c){case"string":case"number":l=!0;break;case"object":switch(e.$$typeof){case r:case n:l=!0}}if(l)return a=a(l=e),e=""===u?"."+g(l,0):u,E(a)?(o="",null!=e&&(o=e.replace($,"$&/")+"/"),A(a,t,o,"",(function(e){return e}))):null!=a&&(O(a)&&(a=function(e,t){return{$$typeof:r,type:e.type,key:t,ref:e.ref,props:e.props,_owner:e._owner}}(a,o+(!a.key||l&&l.key===a.key?"":(""+a.key).replace($,"$&/")+"/")+e)),t.push(a)),1;if(l=0,u=""===u?".":u+":",E(e))for(var i=0;i<e.length;i++){var f=u+g(c=e[i],i);l+=A(c,t,o,f,a)}else if(f=function(e){return null===e||"object"!=typeof e?null:"function"==typeof(e=y&&e[y]||e["@@iterator"])?e:null}(e),"function"==typeof f)for(e=f.call(e),i=0;!(c=e.next()).done;)l+=A(c=c.value,t,o,f=u+g(c,i++),a);else if("object"===c)throw t=String(e),Error("Objects are not valid as a React child (found: "+("[object Object]"===t?"object with keys {"+Object.keys(e).join(", ")+"}":t)+"). If you meant to render a collection of children, use an array instead.");return l}function j(e,t,r){if(null==e)return e;var n=[],o=0;return A(e,n,"","",(function(e){return t.call(r,e,o++)})),n}function T(e){if(-1===e._status){var t=e._result;(t=t()).then((function(t){0!==e._status&&-1!==e._status||(e._status=1,e._result=t)}),(function(t){0!==e._status&&-1!==e._status||(e._status=2,e._result=t)})),-1===e._status&&(e._status=0,e._result=t)}if(1===e._status)return e._result.default;throw e._result}var x={current:null},N={transition:null},I={ReactCurrentDispatcher:x,ReactCurrentBatchConfig:N,ReactCurrentOwner:R};t.Children={map:j,forEach:function(e,t,r){j(e,(function(){t.apply(this,arguments)}),r)},count:function(e){var t=0;return j(e,(function(){t++})),t},toArray:function(e){return j(e,(function(e){return e}))||[]},only:function(e){if(!O(e))throw Error("React.Children.only expected to receive a single React element child.");return e}},t.Component=v,t.Fragment=o,t.Profiler=a,t.PureComponent=b,t.StrictMode=u,t.Suspense=f,t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED=I,t.cloneElement=function(e,t,n){if(null==e)throw Error("React.cloneElement(...): The argument must be a React element, but you passed "+e+".");var o=_({},e.props),u=e.key,a=e.ref,c=e._owner;if(null!=t){if(void 0!==t.ref&&(a=t.ref,c=R.current),void 0!==t.key&&(u=""+t.key),e.type&&e.type.defaultProps)var l=e.type.defaultProps;for(i in t)C.call(t,i)&&!w.hasOwnProperty(i)&&(o[i]=void 0===t[i]&&void 0!==l?l[i]:t[i])}var i=arguments.length-2;if(1===i)o.children=n;else if(1<i){l=Array(i);for(var f=0;f<i;f++)l[f]=arguments[f+2];o.children=l}return{$$typeof:r,type:e.type,key:u,ref:a,props:o,_owner:c}},t.createContext=function(e){return(e={$$typeof:l,_currentValue:e,_currentValue2:e,_threadCount:0,Provider:null,Consumer:null,_defaultValue:null,_globalName:null}).Provider={$$typeof:c,_context:e},e.Consumer=e},t.createElement=k,t.createFactory=function(e){var t=k.bind(null,e);return t.type=e,t},t.createRef=function(){return{current:null}},t.forwardRef=function(e){return{$$typeof:i,render:e}},t.isValidElement=O,t.lazy=function(e){return{$$typeof:p,_payload:{_status:-1,_result:e},_init:T}},t.memo=function(e,t){return{$$typeof:s,type:e,compare:void 0===t?null:t}},t.startTransition=function(e){var t=N.transition;N.transition={};try{e()}finally{N.transition=t}},t.unstable_act=function(){throw Error("act(...) is not supported in production builds of React.")},t.useCallback=function(e,t){return x.current.useCallback(e,t)},t.useContext=function(e){return x.current.useContext(e)},t.useDebugValue=function(){},t.useDeferredValue=function(e){return x.current.useDeferredValue(e)},t.useEffect=function(e,t){return x.current.useEffect(e,t)},t.useId=function(){return x.current.useId()},t.useImperativeHandle=function(e,t,r){return x.current.useImperativeHandle(e,t,r)},t.useInsertionEffect=function(e,t){return x.current.useInsertionEffect(e,t)},t.useLayoutEffect=function(e,t){return x.current.useLayoutEffect(e,t)},t.useMemo=function(e,t){return x.current.useMemo(e,t)},t.useReducer=function(e,t,r){return x.current.useReducer(e,t,r)},t.useRef=function(e){return x.current.useRef(e)},t.useState=function(e){return x.current.useState(e)},t.useSyncExternalStore=function(e,t,r){return x.current.useSyncExternalStore(e,t,r)},t.useTransition=function(){return x.current.useTransition()},t.version="18.2.0"},294:(e,t,r)=>{e.exports=r(408)}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var u=t[n]={exports:{}};return e[n](u,u.exports,r),u.exports}(()=>{var e=r(294),t={SLUG:local_1155.SLUG};function n(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}var o=wp.i18n.__,u=function(r){var n=r.selectStandard;return e.createElement("div",{className:"contract__multiple",onClick:function(){n("Erc1155")}},e.createElement("h2",null,o("Multiple",t.SLUG)),e.createElement("p",null,o("Create collection on ERC-1155 standard.",t.SLUG)))};wp.hooks.addFilter("RENDER_CONTRACT_STANDARD_FOR_COLLECTION","NFT_STANDARD_FOR_COLLECTION",(function(t,r,o){var a,c,l,i,f,s;return[].concat(function(e){if(Array.isArray(e))return n(e)}(s=t)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(s)||function(e,t){if(e){if("string"==typeof e)return n(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?n(e,t):void 0}}(s)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),[null!=r&&null!==(a=r.selectedContract)&&void 0!==a&&null!==(c=a.contract)&&void 0!==c&&c.Erc1155&&null!=r&&null!==(l=r.selectedContract)&&void 0!==l&&null!==(i=l.contract)&&void 0!==i&&null!==(f=i.Erc1155)&&void 0!==f&&f.address?e.createElement(u,{selectStandard:function(e){o({type:"SET_STANDARD",payload:e}),o({type:"CHANGE_COMPONENT",payload:2})},key:"multi-standard"}):null])}),11)})()})();