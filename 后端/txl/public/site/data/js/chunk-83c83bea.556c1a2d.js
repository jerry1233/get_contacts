(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-83c83bea"],{"1d11":function(n,e,t){"use strict";t.r(e);var a=function(){var n=this,e=n.$createElement,t=n._self._c||e;return t("div",{staticClass:"messagePage"},[t("van-nav-bar",{attrs:{title:"消息",fixed:"",placeholder:""}}),t("van-notice-bar",{attrs:{text:"私信消息非即时通讯，接收消息，请下拉刷新。",background:"#FFEAEA",color:"#FA7B7B"}}),t("TabBar"),n._m(0)],1)},i=[function(){var n=this,e=n.$createElement,a=n._self._c||e;return a("div",{staticClass:"blankBox"},[a("img",{staticClass:"img",attrs:{src:t("bb66"),alt:""}}),a("div",{staticClass:"text"},[n._v("暂无私信消息")])])}],c=t("73b0"),p={name:"Message",data:function(){return{gridData:[{icon:"ic_fans.png",text:"粉丝",id:1},{icon:"ic_like.png",text:"喜欢",id:2},{icon:"ic_@.png",text:"@我的",id:3},{icon:"ic_comment.png",text:"评论",id:4}]}},components:{TabBar:c["a"]},mounted:function(){},methods:{getImgUrl:function(n){if(n)return t("bb6e1")("./".concat(n))}}},g=p,o=(t("fe4f"),t("2877")),r=Object(o["a"])(g,a,i,!1,null,"92bf67b4",null);e["default"]=r.exports},"3f29":function(n,e,t){},"73b0":function(n,e,t){"use strict";var a=function(){var n=this,e=n.$createElement,t=n._self._c||e;return t("van-tabbar",{attrs:{route:"","active-color":"#FA86CD ",border:!1,"inactive-color":"#AEAEAE",fixed:"","safe-area-inset-bottom":""},model:{value:n.active,callback:function(e){n.active=e},expression:"active"}},[t("van-tabbar-item",{attrs:{to:"/"}},[t("span",{staticClass:"tabbar-item"},[[t("img",{attrs:{src:"/"===n.active?n.getImgUrl("home_select"):n.getImgUrl("home"),width:"22"}})],t("span",[n._v("首页")])],2)]),t("van-tabbar-item",{attrs:{to:"/attention"}},[t("span",{staticClass:"tabbar-item"},[[t("img",{attrs:{src:"/attention"===n.active?n.getImgUrl("meet_select"):n.getImgUrl("meet"),width:"22"}})],t("span",[n._v("约啪")])],2)]),t("van-tabbar-item",{attrs:{to:"/message"}},[t("span",{staticClass:"tabbar-item"},[[t("img",{attrs:{src:"/message"===n.active?n.getImgUrl("message_select"):n.getImgUrl("message"),width:"22"}})],t("span",[n._v("消息")])],2)]),t("van-tabbar-item",{attrs:{to:"/user"}},[t("span",{staticClass:"tabbar-item"},[[t("img",{attrs:{src:"/user"===n.active?n.getImgUrl("personal_select"):n.getImgUrl("persona"),width:"22"}})],t("span",[n._v("我的")])],2)])],1)},i=[],c={name:"TabBar",data:function(){return{active:this.$route.path}},mounted:function(){},methods:{getImgUrl:function(n){return n?t("e078")("./".concat(n,".png")):null}}},p=c,g=(t("d5b6"),t("2877")),o=Object(g["a"])(p,a,i,!1,null,"de685448",null);e["a"]=o.exports},abca:function(n,e,t){},bb6e1:function(n,e,t){var a={"./Android@2x.png":"6c2a","./and1_down.png":"fe04","./avatar@3x.png":"4071","./bofang.gif":"5026","./btn_share@2x.png":"1615","./c_lose.png":"c455","./construction.png":"495f","./distance.png":"3a94","./downBg.png":"8b54","./downBg的副本.png":"b4e3","./down_btn.png":"9928","./empty_billnone.png":"c5c5","./empty_none.png":"c9f8","./empty_vip.png":"3ab5","./header1_down.png":"ee60","./header_bg.png":"5471","./heart.png":"4cb0","./home_ic_Love_light@3x.png":"fa1f","./home_ic_follow@3x.png":"838b","./iOS@2x.png":"5884","./ic_1to1@3x.png":"4c9b","./ic_@.png":"dbc6","./ic_WeChatpay@3x.png":"e652","./ic_alipay@3x.png":"b51d","./ic_bill@3x.png":"6c1d","./ic_cashback@3x.png":"6aa3","./ic_coin@3x.png":"67fe","./ic_comment.png":"1927","./ic_dressUp.png":"6024","./ic_fans.png":"5a07","./ic_female@3x.png":"8a3b","./ic_grade@3x.png":"7287","./ic_help@3x.png":"0bfe","./ic_like.png":"9ba8","./ic_lock@3x.png":"6d81","./ic_meet@3x.png":"8095","./ic_microphone@3x.png":"274c","./ic_music.png":"6ad8","./ic_mute@2x.png":"b27d","./ic_opinion@3x.png":"01b2","./ic_play@2x.png":"81f9","./ic_service@3x.png":"d39e","./ic_set@3x.png":"d100","./ic_sound@2x.png":"8dde","./ic_unionpay@3x.png":"1c41","./ic_value.png":"a7ff","./ic_video@3x.png":"86ce","./ic_vip1@3x.png":"65ec","./ic_vip2@3x.png":"4efd","./ic_vip3@3x.png":"b5da","./ic_vip4@3x.png":"489b","./ic_vip5@3x.png":"cedb","./ic_vipwelfare.png":"a430","./iosapp_down.png":"88d7","./kfxjj.jpg":"5812","./live.gif":"4390","./live_bg.png":"4792","./living.gif":"bf5b","./load.gif":"ce32","./logo.jpg":"aca7","./logo.png":"4ffd","./logo2.jpg":"f722","./logo@3x.png":"bfbf","./online.png":"6d27","./pic_pop@2x.png":"7a8f","./pic_vipcard@3x.png":"823d","./picture.jpg":"cb12","./promote.png":"5c00","./surevideo.png":"8efa","./tag1.png":"ba54","./tag2.png":"0c43","./tag3.png":"77ee","./tg1.png":"4c38","./tg2.png":"f043","./trueuser.png":"3fd7","./v_play.png":"2a1b","./yqfx.png":"5883"};function i(n){var e=c(n);return t(e)}function c(n){if(!t.o(a,n)){var e=new Error("Cannot find module '"+n+"'");throw e.code="MODULE_NOT_FOUND",e}return a[n]}i.keys=function(){return Object.keys(a)},i.resolve=c,n.exports=i,i.id="bb6e1"},d5b6:function(n,e,t){"use strict";var a=t("3f29"),i=t.n(a);i.a},e078:function(n,e,t){var a={"./baiyin.png":"d306","./card_coin.png":"45b2","./card_vip.png":"b1b3","./dhhy.png":"217e","./empty_nodate.png":"9a70","./empty_nomessage.png":"bb66","./floating_medal.png":"0767","./floating_wallet.png":"112b","./home.png":"28ea","./home_select.png":"c027","./ic_alipay@3x.png":"c248","./jcgx.png":"31a2","./live_btn_follow.png":"1d48","./live_ic_gift.png":"4483","./live_ic_present.png":"fda2","./live_ic_share.png":"0c14","./live_pop_close.png":"31da","./live_pop_decoration.png":"432a","./meet.png":"7d57","./meet_heart.png":"7c63","./meet_ic_play.png":"6995","./meet_label.png":"8f54","./meet_select.png":"89bd","./message.png":"9686","./message_select.png":"d86b","./persona.png":"63ef","./personal_select.png":"168f","./pic_avatar.png":"f24e","./qchc.png":"9575","./waiwei.png":"c2d4","./wdsc.png":"5915","./wyrz.png":"4252","./yhdd.png":"4d1b","./yjfk.png":"b196","./zhizun.png":"261f","./zhmx.png":"d440","./zuanshi.png":"8e96"};function i(n){var e=c(n);return t(e)}function c(n){if(!t.o(a,n)){var e=new Error("Cannot find module '"+n+"'");throw e.code="MODULE_NOT_FOUND",e}return a[n]}i.keys=function(){return Object.keys(a)},i.resolve=c,n.exports=i,i.id="e078"},fe4f:function(n,e,t){"use strict";var a=t("abca"),i=t.n(a);i.a}}]);
//# sourceMappingURL=chunk-83c83bea.556c1a2d.js.map