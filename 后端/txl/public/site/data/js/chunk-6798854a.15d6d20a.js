(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6798854a"],{3103:function(t,e,a){"use strict";var n=a("adeb"),i=a.n(n);i.a},"3f29":function(t,e,a){},"73b0":function(t,e,a){"use strict";var n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("van-tabbar",{attrs:{route:"","active-color":"#FA86CD ",border:!1,"inactive-color":"#AEAEAE",fixed:"","safe-area-inset-bottom":""},model:{value:t.active,callback:function(e){t.active=e},expression:"active"}},[a("van-tabbar-item",{attrs:{to:"/"}},[a("span",{staticClass:"tabbar-item"},[[a("img",{attrs:{src:"/"===t.active?t.getImgUrl("home_select"):t.getImgUrl("home"),width:"22"}})],a("span",[t._v("首页")])],2)]),a("van-tabbar-item",{attrs:{to:"/attention"}},[a("span",{staticClass:"tabbar-item"},[[a("img",{attrs:{src:"/attention"===t.active?t.getImgUrl("meet_select"):t.getImgUrl("meet"),width:"22"}})],a("span",[t._v("约啪")])],2)]),a("van-tabbar-item",{attrs:{to:"/message"}},[a("span",{staticClass:"tabbar-item"},[[a("img",{attrs:{src:"/message"===t.active?t.getImgUrl("message_select"):t.getImgUrl("message"),width:"22"}})],a("span",[t._v("消息")])],2)]),a("van-tabbar-item",{attrs:{to:"/user"}},[a("span",{staticClass:"tabbar-item"},[[a("img",{attrs:{src:"/user"===t.active?t.getImgUrl("personal_select"):t.getImgUrl("persona"),width:"22"}})],a("span",[t._v("我的")])],2)])],1)},i=[],s={name:"TabBar",data:function(){return{active:this.$route.path}},mounted:function(){},methods:{getImgUrl:function(t){return t?a("e078")("./".concat(t,".png")):null}}},c=s,o=(a("d5b6"),a("2877")),l=Object(o["a"])(c,n,i,!1,null,"de685448",null);e["a"]=l.exports},7584:function(t,e,a){var n={"./baiyin.png":"d306","./card_coin.png":"45b2","./card_vip.png":"b1b3","./dhhy.png":"217e","./empty_nodate.png":"9a70","./empty_nomessage.png":"bb66","./floating_medal.png":"0767","./floating_wallet.png":"112b","./home.png":"28ea","./home_select.png":"c027","./ic_alipay@3x.png":"c248","./jcgx.png":"31a2","./live_btn_follow.png":"1d48","./live_ic_gift.png":"4483","./live_ic_present.png":"fda2","./live_ic_share.png":"0c14","./live_pop_close.png":"31da","./live_pop_decoration.png":"432a","./meet.png":"7d57","./meet_heart.png":"7c63","./meet_ic_play.png":"6995","./meet_label.png":"8f54","./meet_select.png":"89bd","./message.png":"9686","./message_select.png":"d86b","./persona.png":"63ef","./personal_select.png":"168f","./pic_avatar.png":"f24e","./qchc.png":"9575","./waiwei.png":"c2d4","./wdsc.png":"5915","./wyrz.png":"4252","./yhdd.png":"4d1b","./yjfk.png":"b196","./zhizun.png":"261f","./zhmx.png":"d440","./zuanshi.png":"8e96"};function i(t){var e=s(t);return a(e)}function s(t){if(!a.o(n,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return n[t]}i.keys=function(){return Object.keys(n)},i.resolve=s,t.exports=i,i.id="7584"},adeb:function(t,e,a){},d5b6:function(t,e,a){"use strict";var n=a("3f29"),i=a.n(n);i.a},e078:function(t,e,a){var n={"./baiyin.png":"d306","./card_coin.png":"45b2","./card_vip.png":"b1b3","./dhhy.png":"217e","./empty_nodate.png":"9a70","./empty_nomessage.png":"bb66","./floating_medal.png":"0767","./floating_wallet.png":"112b","./home.png":"28ea","./home_select.png":"c027","./ic_alipay@3x.png":"c248","./jcgx.png":"31a2","./live_btn_follow.png":"1d48","./live_ic_gift.png":"4483","./live_ic_present.png":"fda2","./live_ic_share.png":"0c14","./live_pop_close.png":"31da","./live_pop_decoration.png":"432a","./meet.png":"7d57","./meet_heart.png":"7c63","./meet_ic_play.png":"6995","./meet_label.png":"8f54","./meet_select.png":"89bd","./message.png":"9686","./message_select.png":"d86b","./persona.png":"63ef","./personal_select.png":"168f","./pic_avatar.png":"f24e","./qchc.png":"9575","./waiwei.png":"c2d4","./wdsc.png":"5915","./wyrz.png":"4252","./yhdd.png":"4d1b","./yjfk.png":"b196","./zhizun.png":"261f","./zhmx.png":"d440","./zuanshi.png":"8e96"};function i(t){var e=s(t);return a(e)}function s(t){if(!a.o(n,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return n[t]}i.keys=function(){return Object.keys(n)},i.resolve=s,t.exports=i,i.id="e078"},e382:function(t,e,a){"use strict";a.r(e);var n=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"userPage"},[n("div",{staticClass:"hade"},[n("img",{staticClass:"avatar",attrs:{src:a("f24e"),alt:""}}),n("div",{staticClass:"right"},[n("div",{staticClass:"userId"},[t._v("昵称："+t._s(t.appId)+"-"+t._s(t.mobile))]),t._m(0)])]),n("div",{staticClass:"vipBox"},[n("div",{staticClass:"vip",on:{click:t.goVip}},[n("span",{staticClass:"v1"},[t._v("会员")]),n("span",{staticClass:"v2"},[t._v("您还未开通会员")]),n("span",{staticClass:"v3"},[t._v("新手专享，限时抢购")])]),n("div",{staticClass:"coin",on:{click:t.goVip}},[n("span",{staticClass:"c1"},[t._v("金币")]),n("span",{staticClass:"c2"},[t._v("当前金币余额")]),n("span",{staticClass:"c3"},[t._v("0")])])]),n("div",{staticClass:"userList"},t._l(t.listData1,(function(e){return n("div",{key:e.index,staticClass:"listItem",on:{click:function(a){return t.toDevelop(e)}}},[n("img",{staticClass:"left",attrs:{src:t.getImgUrl(e.icon),mode:""}}),n("div",{staticClass:"body"},[t._v(t._s(e.text))]),n("van-icon",{attrs:{name:"arrow",size:"20",color:"#D8D8D8 "}}),e.line?n("div",{staticClass:"line"}):t._e()],1)})),0),n("div",{staticClass:"userList"},t._l(t.listData2,(function(e){return n("div",{key:e.index,staticClass:"listItem",on:{click:function(a){return t.toDevelop(e)}}},[n("img",{staticClass:"left",attrs:{src:t.getImgUrl(e.icon),mode:""}}),n("div",{staticClass:"body"},[t._v(t._s(e.text))]),n("span",{directives:[{name:"show",rawName:"v-show",value:e.ver,expression:"i.ver"}],staticClass:"ver"},[t._v(t._s(e.ver))]),n("van-icon",{attrs:{name:"arrow",size:"20",color:"#D8D8D8 "}}),e.line?n("div",{staticClass:"line"}):t._e()],1)})),0),n("TabBar"),n("van-popup",{style:{overflow:"initial"},attrs:{round:"","close-on-click-overlay":!1},model:{value:t.vipTisp,callback:function(e){t.vipTisp=e},expression:"vipTisp"}},[n("div",{staticClass:"tipsBox1"},[n("img",{staticClass:"top",attrs:{src:a("432a"),alt:""}}),n("div",{staticClass:"text"},[t._v("该功能仅对会员开放")]),n("div",{staticClass:"text2"},[t._v("限时活动价仅需 1 元")]),n("div",{staticClass:"jj",on:{click:t.goVip}},[t._v("快去升级VIP")]),n("img",{staticClass:"close",attrs:{src:a("31da"),alt:""},on:{click:t.closeModal}})])])],1)},i=[function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"userCode"},[a("span",[t._v("动态 0")]),a("span",[t._v("关注 0")]),a("span",[t._v("粉丝 0")])])}],s=a("73b0"),c={name:"User",data:function(){return{mobile:"",appId:"",vipTisp:!1,listData1:[{icon:"zhmx.png",text:"账户明细",line:!0,jump:"blank",image:"empty_nodate",content:"暂无数据"},{icon:"yhdd.png",text:"约啪订单",line:!0,jump:"blank",image:"empty_nodate",content:"暂无数据"},{icon:"wdsc.png",text:"我的收藏",jump:"blank",line:!0,image:"empty_nodate",content:"暂无数据"},{icon:"wyrz.png",text:"我要认证",line:!0,jump:"modal"},{icon:"dhhy.png",text:"兑换会员",jump:"Exchange"}],listData2:[{icon:"yjfk.png",text:"意见反馈",line:!0,jump:"Feedback"},{icon:"qchc.png",text:"清除缓存",line:!0,jump:"click",tips:"清理完成"},{icon:"jcgx.png",text:"检查更新",ver:"2.1.0",jump:"click",tips:"已是最新版本"}]}},components:{TabBar:s["a"]},mounted:function(){this.init()},methods:{init:function(){var t=localStorage.getItem("mobile"),e=localStorage.getItem("AppId");t?t.length>=6?this.mobile=t.substring(0,5):this.mobile=t:this.mobile="",this.appId=e||""},getImgUrl:function(t){return t?a("7584")("./".concat(t)):null},toDevelop:function(t){var e=this;"blank"===t.jump?t.image?this.$router.push({name:"Develop",query:{title:t.text,image:t.image,content:t.content}}):this.$router.push({name:"Develop",query:{title:t.text}}):"click"===t.jump?(this.$Toast.loading({duration:1e3}),setTimeout((function(){e.$Toast(t.tips)}),1001)):"modal"===t.jump?this.closeModal():this.$router.push({name:t.jump})},goVip:function(){this.$router.push({name:"Recharge"})},closeModal:function(){this.vipTisp=!this.vipTisp}}},o=c,l=(a("3103"),a("2877")),p=Object(l["a"])(o,n,i,!1,null,"2aeefebe",null);e["default"]=p.exports}}]);
//# sourceMappingURL=chunk-6798854a.15d6d20a.js.map