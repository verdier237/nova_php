(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-login-index"],{"0447":function(e,t,a){"use strict";a.r(t);var n=a("4abc"),o=a.n(n);for(var i in n)["default"].indexOf(i)<0&&function(e){a.d(t,e,(function(){return n[e]}))}(i);t["default"]=o.a},"0be5":function(e,t,a){"use strict";var n=a("5a22"),o=a.n(n);o.a},"1c46":function(e,t,a){"use strict";a("7a82"),Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0,a("a9e3"),a("14d9"),a("d81d");var n={name:"u-checkbox",props:{name:{type:[String,Number],default:""},shape:{type:String,default:""},value:{type:Boolean,default:!1},disabled:{type:[String,Boolean],default:""},labelDisabled:{type:[String,Boolean],default:""},activeColor:{type:String,default:""},iconSize:{type:[String,Number],default:""},labelSize:{type:[String,Number],default:""},size:{type:[String,Number],default:""}},data:function(){return{parentDisabled:!1,newParams:{}}},created:function(){this.parent=this.$u.$parent.call(this,"u-checkbox-group"),this.parent&&this.parent.children.push(this)},computed:{isDisabled:function(){return""!==this.disabled?this.disabled:!!this.parent&&this.parent.disabled},isLabelDisabled:function(){return""!==this.labelDisabled?this.labelDisabled:!!this.parent&&this.parent.labelDisabled},checkboxSize:function(){return this.size?this.size:this.parent?this.parent.size:34},checkboxIconSize:function(){return this.iconSize?this.iconSize:this.parent?this.parent.iconSize:20},elActiveColor:function(){return this.activeColor?this.activeColor:this.parent?this.parent.activeColor:"primary"},elShape:function(){return this.shape?this.shape:this.parent?this.parent.shape:"square"},iconStyle:function(){var e={};return this.elActiveColor&&this.value&&!this.isDisabled&&(e.borderColor=this.elActiveColor,e.backgroundColor=this.elActiveColor),e.width=this.$u.addUnit(this.checkboxSize),e.height=this.$u.addUnit(this.checkboxSize),e},iconColor:function(){return this.value?"#ffffff":"transparent"},iconClass:function(){var e=[];return e.push("u-checkbox__icon-wrap--"+this.elShape),1==this.value&&e.push("u-checkbox__icon-wrap--checked"),this.isDisabled&&e.push("u-checkbox__icon-wrap--disabled"),this.value&&this.isDisabled&&e.push("u-checkbox__icon-wrap--disabled--checked"),e.join(" ")},checkboxStyle:function(){var e={};return this.parent&&this.parent.width&&(e.width=this.parent.width,e.flex="0 0 ".concat(this.parent.width)),this.parent&&this.parent.wrap&&(e.width="100%",e.flex="0 0 100%"),e}},methods:{onClickLabel:function(){this.isLabelDisabled||this.isDisabled||this.setValue()},toggle:function(){this.isDisabled||this.setValue()},emitEvent:function(){var e=this;this.$emit("change",{value:!this.value,name:this.name}),setTimeout((function(){e.parent&&e.parent.emitEvent&&e.parent.emitEvent()}),80)},setValue:function(){var e=0;if(this.parent&&this.parent.children&&this.parent.children.map((function(t){t.value&&e++})),1==this.value)this.emitEvent(),this.$emit("input",!this.value);else{if(this.parent&&e>=this.parent.max)return this.$u.toast("最多可选".concat(this.parent.max,"项"));this.emitEvent(),this.$emit("input",!this.value)}}}};t.default=n},2360:function(e,t,a){"use strict";a.d(t,"b",(function(){return o})),a.d(t,"c",(function(){return i})),a.d(t,"a",(function(){return n}));var n={uForm:a("47d7").default,uFormItem:a("4c5e").default,uInput:a("9d56").default,uCheckbox:a("ba13").default,myButton:a("1b78").default,myService:a("ce5c2").default},o=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("v-uni-view",[a("gradient-bg",{scopedSlots:e._u([{key:"content",fn:function(){return[a("u-form",{ref:"uForm",attrs:{model:e.formData,rules:e.rules,errorType:["message"]}},[a("p",{staticClass:"m-top-label"},[e._v(e._s(e.$t("login.phone.label")))]),a("u-form-item",{staticClass:"form-cell phone label",attrs:{"label-align":"center",label:"+"+e.$t("common.areaCode"),"label-width":"130","label-style":{fontSize:"30rpx",color:"#004281",fontWeight:600},prop:"phone_number","border-bottom":!1}},[a("u-input",{attrs:{type:"number",placeholder:e.$t("login.phone.placeholder"),height:"90"},model:{value:e.formData.phone_number,callback:function(t){e.$set(e.formData,"phone_number",t)},expression:"formData.phone_number"}})],1),a("p",{staticClass:"m-top-label"},[e._v(e._s(e.$t("login.pwd.label")))]),a("u-form-item",{staticClass:"form-cell",attrs:{"label-align":"center","label-width":"30",prop:"password","border-bottom":!1}},[a("u-input",{attrs:{type:"password",placeholder:e.$t("login.pwd.placeholder"),height:"90"},model:{value:e.formData.password,callback:function(t){e.$set(e.formData,"password",t)},expression:"formData.password"}})],1),a("u-form-item",{attrs:{"label-align":"center",prop:"remember","border-bottom":!1}},[a("u-checkbox",{attrs:{size:"30","active-color":"#004281"},model:{value:e.formData.remember,callback:function(t){e.$set(e.formData,"remember",t)},expression:"formData.remember"}},[a("span",{staticClass:"remember"},[e._v(e._s(e.$t("login.remember")))])])],1)],1),a("my-button",{attrs:{loading:e.loading},on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.onSubmit.apply(void 0,arguments)}}},[e._v(e._s(e.$t("common.login")))]),"h5"===e.$system?[a("my-button",{staticClass:"c-mt-30",attrs:{bgColor:"transparent",color:"#004281",br:"1px"},on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.linkTo(e.url)}}},[e._v(e._s(e.$t("common.appDownload")))])]:e._e()]},proxy:!0},{key:"link",fn:function(){return[a("a",{staticClass:"c-f34-f",on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.goTo("/pages/register/index")}}},[e._v(e._s(e.$t("common.register")))])]},proxy:!0}])}),a("my-service")],1)},i=[]},"2a64":function(e,t,a){var n=a("24fb");t=n(!1),t.push([e.i,'@charset "UTF-8";\n/* 颜色变量 */\n/* 行为相关颜色 */\n/* 文字基本颜色 */\n/* 背景颜色 */\n/* 边框颜色 */\n/* 尺寸变量 */\n/* 文字尺寸 */\n/* 图片尺寸 */\n/* Border Radius */\n/* 水平间距 */\n/* 垂直间距 */\n/* 透明度 */\n/* 文章场景相关 */[data-v-5d0f80a1] .form-cell.active .uni-input-input{color:#004281}[data-v-5d0f80a1] .form-cell.active .u-form-item__body{background-color:#fff}[data-v-5d0f80a1] .form-cell.label .u-form-item__body{padding:0 %?28?% 0 0}[data-v-5d0f80a1] .form-cell .u-form-item__body{padding:0 %?28?%;border:1px solid #004281;border-radius:50px}[data-v-5d0f80a1] .form-cell .uni-input-input{font-size:%?30?%;color:#222}[data-v-5d0f80a1] .form-cell .u-form-item--left__content{padding-right:0}[data-v-5d0f80a1] .form-cell .icon{width:%?48?%;height:%?48?%;margin-right:%?19?%}.m-top-label[data-v-5d0f80a1]{padding-bottom:%?10?%;font-size:%?30?%;color:#222}uni-page-body[data-v-5d0f80a1]{padding-top:0;background-color:#004281}body.?%PAGE?%[data-v-5d0f80a1]{background-color:#004281}.max-btn[data-v-5d0f80a1]{padding-bottom:%?6?%}.forget[data-v-5d0f80a1]{margin:%?40?% 0 %?20?%;font-size:%?30?%;color:#222;text-align:center;text-decoration:underline}.forget span[data-v-5d0f80a1]{padding:%?15?% %?20?%}.btm[data-v-5d0f80a1]{margin-top:%?50?%;font-size:%?28?%;color:#fcfc30}.btm .link[data-v-5d0f80a1]{margin-left:%?10?%;color:#fcfc30;text-decoration:underline}',""]),e.exports=t},"2b8a":function(e,t,a){var n=a("2a64");n.__esModule&&(n=n.default),"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var o=a("4f06").default;o("fe62936e",n,!0,{sourceMap:!1,shadowMode:!1})},"4abc":function(e,t,a){"use strict";a("7a82");var n=a("4ea4").default;Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0,a("4d63"),a("c607"),a("ac1f"),a("2c3e"),a("25f0"),a("466d");var o=a("b445"),i=a("a49d"),r=n(a("fa14")),c=n(a("1b78")),s={name:"Login",components:{GradientBg:r.default,MyButton:c.default},data:function(){return{url:"",loading:!1,formData:{phone_number:"",password:"",remember:!0},rules:{phone_number:{required:!0,pattern:/^\d{9,11}$/g,message:this.$t("login.phone.message"),trigger:["change","blur"]},password:[{required:!0,min:6,max:18,message:this.$t("login.pwd.message"),trigger:"blur"}]}}},onLoad:function(){this.init()},onReady:function(){this.$refs.uForm.setRules(this.rules)},methods:{delCookie:function(e){this.setCookie(e,null,-1)},setCookie:function(e,t,a){var n=new Date;n.setDate(n.getDate()+a),document.cookie=e+"="+t+";expires="+n},getCookie:function(e){var t=RegExp(e+"=([^;]+)"),a=document.cookie.match(t);return a?a[1]:""},init:function(){var e=this,t=this.getCookie("phone_number"),a=this.getCookie("password");t&&a&&(this.formData.phone_number=t,this.formData.password=a,this.formData.remember=!0),(0,o.appDownload)().then((function(t){e.url=t.data.app_download})),(0,o.uv)({position:1}).then((function(e){}))},onSubmit:function(){var e=this;this.loading||this.$refs["uForm"].validate((function(t){t&&(e.loading=!0,(0,o.loginApi)(e.formData).then((function(t){uni.removeStorageSync("homeGroupPopup"),(0,i.setToken)(t.data.token).then((function(){e.loading=!1,e.$showToast({title:e.$t("login.toast.loginSuccess"),callback:function(){localStorage.setItem("flag",!0),uni.reLaunch({url:"/pages/index/index"})}})})),e.formData.remember?(e.setCookie("phone_number",e.formData.phone_number,7),e.setCookie("password",e.formData.password,7)):(e.delCookie("phone_number"),e.delCookie("password"))})).catch((function(t){e.loading=!1})))}))}}};t.default=s},5295:function(e,t,a){"use strict";a.d(t,"b",(function(){return o})),a.d(t,"c",(function(){return i})),a.d(t,"a",(function(){return n}));var n={uIcon:a("afc6").default},o=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("v-uni-view",{staticClass:"u-checkbox",style:[e.checkboxStyle]},[a("v-uni-view",{staticClass:"u-checkbox__icon-wrap",class:[e.iconClass],style:[e.iconStyle],on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.toggle.apply(void 0,arguments)}}},[a("u-icon",{staticClass:"u-checkbox__icon-wrap__icon",attrs:{name:"checkbox-mark",size:e.checkboxIconSize,color:e.iconColor}})],1),a("v-uni-view",{staticClass:"u-checkbox__label",style:{fontSize:e.$u.addUnit(e.labelSize)},on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.onClickLabel.apply(void 0,arguments)}}},[e._t("default")],2)],1)},i=[]},"53aa":function(e,t,a){"use strict";a.r(t);var n=a("1c46"),o=a.n(n);for(var i in n)["default"].indexOf(i)<0&&function(e){a.d(t,e,(function(){return n[e]}))}(i);t["default"]=o.a},"57c6":function(e,t,a){"use strict";var n=a("2b8a"),o=a.n(n);o.a},5866:function(e,t,a){"use strict";a.r(t);var n=a("2360"),o=a("0447");for(var i in o)["default"].indexOf(i)<0&&function(e){a.d(t,e,(function(){return o[e]}))}(i);a("57c6");var r=a("f0c5"),c=Object(r["a"])(o["default"],n["b"],n["c"],!1,null,"5d0f80a1",null,!1,n["a"],void 0);t["default"]=c.exports},"5a22":function(e,t,a){var n=a("94c9");n.__esModule&&(n=n.default),"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var o=a("4f06").default;o("621a2bf0",n,!0,{sourceMap:!1,shadowMode:!1})},"94c9":function(e,t,a){var n=a("24fb");t=n(!1),t.push([e.i,'@charset "UTF-8";\n/* 颜色变量 */\n/* 行为相关颜色 */\n/* 文字基本颜色 */\n/* 背景颜色 */\n/* 边框颜色 */\n/* 尺寸变量 */\n/* 文字尺寸 */\n/* 图片尺寸 */\n/* Border Radius */\n/* 水平间距 */\n/* 垂直间距 */\n/* 透明度 */\n/* 文章场景相关 */.u-checkbox[data-v-326f4b11]{display:inline-flex;align-items:center;overflow:hidden;-webkit-user-select:none;user-select:none;line-height:1.8}.u-checkbox__icon-wrap[data-v-326f4b11]{color:#606266;flex:none;display:-webkit-flex;display:flex;flex-direction:row;align-items:center;justify-content:center;box-sizing:border-box;width:%?42?%;height:%?42?%;color:transparent;text-align:center;transition-property:color,border-color,background-color;font-size:20px;border:1px solid #c8c9cc;transition-duration:.2s}.u-checkbox__icon-wrap--circle[data-v-326f4b11]{border-radius:100%}.u-checkbox__icon-wrap--square[data-v-326f4b11]{border-radius:%?6?%}.u-checkbox__icon-wrap--checked[data-v-326f4b11]{color:#fff;background-color:#2979ff;border-color:#2979ff}.u-checkbox__icon-wrap--disabled[data-v-326f4b11]{background-color:#ebedf0;border-color:#c8c9cc}.u-checkbox__icon-wrap--disabled--checked[data-v-326f4b11]{color:#c8c9cc!important}.u-checkbox__label[data-v-326f4b11]{word-wrap:break-word;margin-left:%?10?%;margin-right:%?24?%;color:#606266;font-size:%?30?%}.u-checkbox__label--disabled[data-v-326f4b11]{color:#c8c9cc}',""]),e.exports=t},ba13:function(e,t,a){"use strict";a.r(t);var n=a("5295"),o=a("53aa");for(var i in o)["default"].indexOf(i)<0&&function(e){a.d(t,e,(function(){return o[e]}))}(i);a("0be5");var r=a("f0c5"),c=Object(r["a"])(o["default"],n["b"],n["c"],!1,null,"326f4b11",null,!1,n["a"],void 0);t["default"]=c.exports}}]);