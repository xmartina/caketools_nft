UAGBForms={getElement:e=>{const t=document.querySelector(e+":not(.uagb-activated-script)");return t?(t.classList.add("uagb-activated-script"),t):null},init(r,a,d){const p=UAGBForms.getElement(a);if(p){const o=p.querySelector(".uagb-forms-main-form"),t=o.querySelectorAll(".uagb-forms-phone-input");if(0!==t.length)for(let e=0;e<t.length;e++)t[e].addEventListener("keypress",function(e){e=e.which||e.keyCode;return 45===e||!(31<e&&(e<48||57<e))});const n=o.querySelectorAll(".uagb-forms-toggle-input");if(0!==n.length)for(let t=0;t<n.length;t++)n[t].addEventListener("change",function(){var e;n[t].checked?(e=n[t].getAttribute("data-truestate"),n[t].setAttribute("value",e)):(e=n[t].getAttribute("data-falsestate"),n[t].setAttribute("value",e))});const s=p.querySelectorAll(".uagb-forms-checkbox-wrap");if(0!==s.length)for(let e=0;e<s.length;e++){const i=s[e].querySelectorAll("input[type=checkbox]");if(0<i.length)for(let c=0;c<i.length;c++)i[c].addEventListener("change",function(){var t=i[c].checked,e=i[c].getAttribute("name");const a=document.querySelectorAll('[name="'+e+'"]');for(let e=0;e<a.length;e++)a[e].required=!t})}let a="",c="";if(!0===r.reCaptchaEnable&&"v2"===r.reCaptchaType){if(a=uagb_forms_data.recaptcha_site_key_v2){null===document.querySelector(".uagb-forms-field-set").getAttribute("data-sitekey")&&document.querySelector(".g-recaptcha ").setAttribute("data-sitekey",a);const e=document.createElement("script");e.type="text/javascript",e.src="https://www.google.com/recaptcha/api.js",document.head.appendChild(e)}}else if(!0===r.reCaptchaEnable&&"v3"===r.reCaptchaType&&(c=uagb_forms_data.recaptcha_site_key_v3)){r.hidereCaptchaBatch&&setTimeout(function(){const e=document.getElementsByClassName("grecaptcha-badge")[0];e&&(e.style.visibility="hidden")},500);const g=document.createElement("script");g.type="text/javascript",g.src="https://www.google.com/recaptcha/api.js?render="+c,document.head.appendChild(g)}const l=document.getElementsByClassName("uagb-block-"+r.block_id);if(l?.[0]){const u=l[0].children[0].children;for(let e=0;e<u.length;e++){if(u[e].classList.contains("uag-col-2")&&u[e+1].classList.contains("uag-col-2")){const f=document.createElement("div"),h=(f.className="uag-col-2-wrap uag-col-wrap-"+e,u[e+1].after(f),l[0].getElementsByClassName("uag-col-wrap-"+e));h[0].appendChild(u[e]),h[0].appendChild(u[e])}if(u[e].classList.contains("uag-col-3")&&u[e+1].classList.contains("uag-col-3")&&u[e+2].classList.contains("uag-col-3")){const b=document.createElement("div"),y=(b.className="uag-col-3-wrap uag-col-wrap-"+e,u[e+2].after(b),l[0].getElementsByClassName("uag-col-wrap-"+e));y[0].appendChild(u[e]),y[0].appendChild(u[e]),y[0].appendChild(u[e])}if(u[e].classList.contains("uag-col-4")&&u[e+1].classList.contains("uag-col-4")&&u[e+2].classList.contains("uag-col-4")&&u[e+3].classList.contains("uag-col-4")){const _=document.createElement("div"),m=(_.className="uag-col-4-wrap uag-col-wrap-"+e,u[e+3].after(_),l[0].getElementsByClassName("uag-col-wrap-"+e));m[0].appendChild(u[e]),m[0].appendChild(u[e]),m[0].appendChild(u[e]),m[0].appendChild(u[e])}}}o.addEventListener("submit",function(t){if(t.preventDefault(),!0===r.reCaptchaEnable&&"v3"===r.reCaptchaType&&c){if(0===document.getElementsByClassName("grecaptcha-logo").length)return!(document.querySelector(".uagb-form-reacaptcha-error-"+r.block_id).innerHTML='<p style="color:red !important" class="error-captcha">Invalid Google reCAPTCHA Site Key.</p>');grecaptcha.ready(function(){grecaptcha.execute(c,{action:"submit"}).then(function(e){if(e){if(0===document.getElementsByClassName("uagb-forms-recaptcha").length)return!(document.querySelector(".uagb-form-reacaptcha-error-"+r.block_id).innerHTML='<p style="color:red !important" class="error-captcha">Google reCAPTCHA Response not found.</p>');document.getElementById("g-recaptcha-response").value=e,window.UAGBForms._formSubmit(t,o,r,a,c,d)}})})}else window.UAGBForms._formSubmit(t,this,r,a,c,d)})}},_formSubmit(e,u,r,m,d,p){e.preventDefault();let t;if(""===r.afterSubmitToEmail||null===r.afterSubmitToEmail){const s=document.querySelector('[name="uagb-form-'+r.block_id+'"]'),l=(s.style.display="none",document.querySelector(".uagb-forms-failed-message-"+r.block_id));return l?.classList?.remove("uagb-forms-submit-message-hide"),l?.classList?.add("uagb-forms-failed-message"),!1}if(!0===r.reCaptchaEnable)if("v2"===r.reCaptchaType&&m){if(0===document.getElementsByClassName("uagb-forms-recaptcha").length)return!(document.querySelector(".uagb-form-reacaptcha-error-"+r.block_id).innerHTML='<p style="color:red !important" class="error-captcha"> Google reCAPTCHA Response not found.</p>');if(!(t=document.getElementById("g-recaptcha-response").value))return document.querySelector(".uagb-form-reacaptcha-error-"+r.block_id).innerHTML='<p style="color:red !important" class="error-captcha">'+r.captchaMessage+"</p>",!1;document.querySelector(".uagb-form-reacaptcha-error-"+r.block_id).innerHTML=""}else"v3"===r.reCaptchaType&&d&&(t=document.getElementById("g-recaptcha-response").value);const a=window.UAGBForms._serializeIt(u),c={};c.id=r.block_id;for(let e=0;e<a.length;e++){var o,n=document.getElementById(a[e].name);a[e].name.endsWith("[]")?((o=a[e].name.replace(/[\[\]']+/g,""))in c||(c[o]=[]),c[o].push(a[e].value)):null!==n&&(c[n.innerHTML]=a[e].value);const i=document.getElementById("hidden");null!==i&&void 0!==i&&(c[i.getAttribute("name")]=i.getAttribute("value"))}fetch(uagb_forms_data.ajax_url,{method:"POST",headers:new Headers({"Content-Type":"application/x-www-form-urlencoded"}),body:new URLSearchParams({action:"uagb_process_forms",nonce:uagb_forms_data.uagb_forms_ajax_nonce,form_data:JSON.stringify(c),sendAfterSubmitEmail:r.sendAfterSubmitEmail,captcha_version:r.reCaptchaType,captcha_response:t,post_id:p,block_id:r.block_id})}).then(e=>e.json()).then(function(e){const t=document.querySelector('[name="uagb-form-'+r.block_id+'"]');if(t.style.display="none",200===e.data){if("message"===r.confirmationType){const a=document.querySelector(".uagb-forms-success-message-"+r.block_id);a.classList.remove("uagb-forms-submit-message-hide"),a.classList.add("uagb-forms-success-message")}"url"===r.confirmationType&&window.location.replace(r.confirmationUrl)}else if(400===e.data&&"message"===r.confirmationType){const c=document.querySelector(".uagb-forms-failed-message-"+r.block_id);c.classList.remove("uagb-forms-submit-message-hide"),c.classList.add("uagb-forms-failed-message")}}).catch(function(e){})},_serializeIt(e){return Array.apply(0,e.elements).map(t=>(e=>"radio"!==t.type&&"checkbox"!==t.type||t.checked?e:null)({name:t.name,value:t.value})).filter(e=>e)}};