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
var Variant,__decorate=function(e,t,r,n){var o,i=arguments.length,a=i<3?t:null===n?n=Object.getOwnPropertyDescriptor(t,r):n;if("object"==typeof Reflect&&"function"==typeof Reflect.decorate)a=Reflect.decorate(e,t,r,n);else for(var s=e.length-1;s>=0;s--)(o=e[s])&&(a=(i<3?o(a):i>3?o(t,r,a):o(t,r))||a);return i>3&&a&&Object.defineProperty(t,r,a),a};import{html,LitElement}from"lit";import{customElement,property}from"lit/decorators.js";import{Sizes}from"@typo3/backend/enum/icon-types.js";import{IconStyles}from"@typo3/backend/icons.js";import{styleTag}from"@typo3/core/lit-helper.js";!function(e){e.light="light",e.dark="dark"}(Variant||(Variant={}));let SpinnerElement=class extends LitElement{constructor(){super(...arguments),this.size=Sizes.default,this.variant=Variant.dark}render(){return html`
      ${styleTag(IconStyles.getStyles())}
      ${styleTag`
        :host([variant=dark]) svg {
          fill: #212121;
        }
        :host([variant=light]) svg {
          fill: #fff;
        }
      `}
      <div class="icon-wrapper">
        <span class="icon icon-size-small icon-state-default icon-spin">
          <span class="icon-markup">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 16 16">
              <g class="icon-color">
                <path d="M8 15c-3.86 0-7-3.141-7-7 0-3.86 3.14-7 7-7 3.859 0 7 3.14 7 7 0 3.859-3.141 7-7 7zM8 3C5.243 3 3 5.243 3 8s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" opacity=".3"/>
                <path d="M14 9a1 1 0 0 1-1-1c0-2.757-2.243-5-5-5a1 1 0 0 1 0-2c3.859 0 7 3.14 7 7a1 1 0 0 1-1 1z"/>
              </g>
            </svg>
          </span>
        </span>
      </div>
    `}};__decorate([property({type:String})],SpinnerElement.prototype,"size",void 0),__decorate([property({type:String})],SpinnerElement.prototype,"variant",void 0),SpinnerElement=__decorate([customElement("typo3-backend-spinner")],SpinnerElement);export{SpinnerElement};