/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
import i from"@typo3/core/document-service.js";import s from"@typo3/backend/form-engine-validation.js";import n from"@typo3/core/ajax/ajax-request.js";import l from"@typo3/backend/notification.js";class d{constructor(t){this.controlElement=null,this.humanReadableField=null,this.hiddenField=null,this.passwordRules=null,i.ready().then(()=>{if(this.controlElement=document.getElementById(t),this.humanReadableField=document.querySelector('input[data-formengine-input-name="'+this.controlElement.dataset.itemName+'"]'),this.hiddenField=document.querySelector('input[name="'+this.controlElement.dataset.itemName+'"]'),this.passwordRules=JSON.parse(this.controlElement.dataset.passwordRules||"{}"),!this.controlElement.dataset.allowEdit&&(this.humanReadableField.disabled=!0,this.humanReadableField.readOnly=!0,this.humanReadableField.isClearable||this.humanReadableField.classList.contains("t3js-clearable"))){this.humanReadableField.classList.remove("t3js-clearable");const e=this.humanReadableField.closest("div.form-control-clearable-wrapper");if(e){e.classList.remove("form-control-clearable");const a=e.querySelector("button.close");a&&e.removeChild(a)}}this.controlElement.addEventListener("click",this.generatePassword.bind(this))})}generatePassword(t){t.preventDefault(),new n(TYPO3.settings.ajaxUrls.password_generate).post({passwordRules:this.passwordRules}).then(async e=>{const a=await e.resolve();a.success===!0?(this.humanReadableField.type="text",this.humanReadableField.value=a.password,this.humanReadableField.dispatchEvent(new Event("change")),this.humanReadableField.value=this.hiddenField.value,s.validateField(this.humanReadableField),s.markFieldAsChanged(this.humanReadableField)):l.warning(a.message||"No password was generated")}).catch(()=>{l.error("Password could not be generated")})}}export{d as default};
