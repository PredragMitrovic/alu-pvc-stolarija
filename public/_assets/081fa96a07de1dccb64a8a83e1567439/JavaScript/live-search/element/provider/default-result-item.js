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
var __decorate=function(e,t,r,i){var o,l=arguments.length,a=l<3?t:null===i?i=Object.getOwnPropertyDescriptor(t,r):i;if("object"==typeof Reflect&&"function"==typeof Reflect.decorate)a=Reflect.decorate(e,t,r,i);else for(var c=e.length-1;c>=0;c--)(o=e[c])&&(a=(l<3?o(a):l>3?o(t,r,a):o(t,r))||a);return l>3&&a&&Object.defineProperty(t,r,a),a};import{customElement,property}from"lit/decorators.js";import{html,LitElement}from"lit";import"@typo3/backend/element/icon-element.js";let DefaultProviderResultItem=class extends LitElement{createRenderRoot(){return this}render(){return html`<div class="livesearch-result-item-icon"><typo3-backend-icon title="${this.icon.title}" identifier="${this.icon.identifier}" overlay="${this.icon.overlay}" size="small"></typo3-backend-icon></div><div class="livesearch-result-item-title">${this.itemTitle}${void 0!==this.extraData.breadcrumb?html`<br><small>${this.extraData.breadcrumb}</small>`:""}</div>`}};__decorate([property({type:Object,attribute:!1})],DefaultProviderResultItem.prototype,"icon",void 0),__decorate([property({type:String,attribute:!1})],DefaultProviderResultItem.prototype,"itemTitle",void 0),__decorate([property({type:String,attribute:!1})],DefaultProviderResultItem.prototype,"typeLabel",void 0),__decorate([property({type:Object,attribute:!1})],DefaultProviderResultItem.prototype,"extraData",void 0),DefaultProviderResultItem=__decorate([customElement("typo3-backend-live-search-result-item-default")],DefaultProviderResultItem);export{DefaultProviderResultItem};