/* idTabs ~ Sean Catchpole - Version 1.0 */

/* Options (in any order):

 start (number|string)
 Index number of default tab. ex: idTabs(0)
 String of id of default tab. ex: idTabs("#tab1")
 default: class "selected" or index 0

 return (boolean)
 True - Url will change. ex: idTabs(true)
 False - Url will not change. ex: idTabs(false)
 default: false

 click (function)
 Function will be called when a tab is clicked. ex: idTabs(foo)
 If the function returns true, idTabs will show/hide content (as usual).
 If the function returns false, idTabs will not take any action.
 The function is passed three variables:
 The id of the element to be shown
 an array of all id's that can be shown
 and the element containing the tabs


 */

(function($){$.fn.idTabs=function(){var s={"start":null,"return":false,"click":null};for(var i=0;i<arguments.length;++i){var n={},a=arguments[i];switch(typeof a){case"object":$.extend(n,a);break;case"number":case"string":n.start=a;break;case"boolean":n["return"]=a;break;case"function":n.click=a;break;};$.extend(s,n);}
    var self=this;var list=$("a[href^='#']",this).click(function(){if($("a.selected",self)[0]==this)
        return s["return"];var id="#"+this.href.split('#')[1];var aList=[];var idList=[];$("a",self).each(function(){if(this.href.match(/#/)){aList[aList.length]=this;idList[idList.length]="#"+this.href.split('#')[1];}});if(s.click&&!s.click(id,idList,self))return s["return"];for(i in aList)$(aList[i]).removeClass("selected");for(i in idList){$(idList[i]).addClass('block_hidden_only_for_screen');}
        $(this).addClass("selected");$(id).removeClass('block_hidden_only_for_screen');return s["return"];});var test;if(typeof s.start=="number"&&(test=list.filter(":eq("+s.start+")")).length)
        test.click();else if(typeof s.start=="string"&&(test=list.filter("[href='#"+s.start+"']")).length)
        test.click();else if((test=list.filter(".selected")).length)
        test.removeClass("selected").click();else list.filter(":first").click();return this;};$(function(){$(".idTabs").each(function(){$(this).idTabs();});});})(jQuery)


    /*
     * jQuery.SerialScroll - Animated scrolling of series
     * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
     * Dual licensed under MIT and GPL.
     * Date: 06/14/2009
     * @author Ariel Flesler
     * @version 1.2.2
     * http://flesler.blogspot.com/2008/02/jqueryserialscroll.html
     */
;(function(a){var b=a.serialScroll=function(c){return a(window).serialScroll(c)};b.defaults={duration:1e3,axis:"x",event:"click",start:0,step:1,lock:!0,cycle:!0,constant:!0};a.fn.serialScroll=function(c){return this.each(function(){var t=a.extend({},b.defaults,c),s=t.event,i=t.step,r=t.lazy,e=t.target?this:document,u=a(t.target||this,e),p=u[0],m=t.items,h=t.start,g=t.interval,k=t.navigation,l;if(!r){m=d()}if(t.force){f({},h)}a(t.prev||[],e).bind(s,-i,q);a(t.next||[],e).bind(s,i,q);if(!p.ssbound){u.bind("prev.serialScroll",-i,q).bind("next.serialScroll",i,q).bind("goto.serialScroll",f)}if(g){u.bind("start.serialScroll",function(v){if(!g){o();g=!0;n()}}).bind("stop.serialScroll",function(){o();g=!1})}u.bind("notify.serialScroll",function(x,w){var v=j(w);if(v>-1){h=v}});p.ssbound=!0;if(t.jump){(r?u:d()).bind(s,function(v){f(v,j(v.target))})}if(k){k=a(k,e).bind(s,function(v){v.data=Math.round(d().length/k.length)*k.index(this);f(v,this)})}function q(v){v.data+=h;f(v,this)}function f(B,z){if(!isNaN(z)){B.data=z;z=p}var C=B.data,v,D=B.type,A=t.exclude?d().slice(0,-t.exclude):d(),y=A.length,w=A[C],x=t.duration;if(D){B.preventDefault()}if(g){o();l=setTimeout(n,t.interval)}if(!w){v=C<0?0:y-1;if(h!=v){C=v}else{if(!t.cycle){return}else{C=y-v-1}}w=A[C]}if(!w||t.lock&&u.is(":animated")||D&&t.onBefore&&t.onBefore(B,w,u,d(),C)===!1){return}if(t.stop){u.queue("fx",[]).stop()}if(t.constant){x=Math.abs(x/i*(h-C))}u.scrollTo(w,x,t).trigger("notify.serialScroll",[C])}function n(){u.trigger("next.serialScroll")}function o(){clearTimeout(l)}function d(){return a(m,p)}function j(w){if(!isNaN(w)){return w}var x=d(),v;while((v=x.index(w))==-1&&w!=p){w=w.parentNode}return v}})}})(jQuery);


/**
 * jQuery.ScrollTo - Easy element scrolling using jQuery.
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 5/25/2009
 * @author Ariel Flesler
 * @version 1.4.2
 *
 * http://flesler.blogspot.com/2007/10/jqueryscrollto.html
 */
;(function(d){var k=d.scrollTo=function(a,i,e){d(window).scrollTo(a,i,e)};k.defaults={axis:'xy',duration:parseFloat(d.fn.jquery)>=1.3?0:1};k.window=function(a){return d(window)._scrollable()};d.fn._scrollable=function(){return this.map(function(){var a=this,i=!a.nodeName||d.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!i)return a;var e=(a.contentWindow||a).document||a.ownerDocument||a;return d.browser.safari||e.compatMode=='BackCompat'?e.body:e.documentElement})};d.fn.scrollTo=function(n,j,b){if(typeof j=='object'){b=j;j=0}if(typeof b=='function')b={onAfter:b};if(n=='max')n=9e9;b=d.extend({},k.defaults,b);j=j||b.speed||b.duration;b.queue=b.queue&&b.axis.length>1;if(b.queue)j/=2;b.offset=p(b.offset);b.over=p(b.over);return this._scrollable().each(function(){var q=this,r=d(q),f=n,s,g={},u=r.is('html,body');switch(typeof f){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(f)){f=p(f);break}f=d(f,this);case'object':if(f.is||f.style)s=(f=d(f)).offset()}d.each(b.axis.split(''),function(a,i){var e=i=='x'?'Left':'Top',h=e.toLowerCase(),c='scroll'+e,l=q[c],m=k.max(q,i);if(s){g[c]=s[h]+(u?0:l-r.offset()[h]);if(b.margin){g[c]-=parseInt(f.css('margin'+e))||0;g[c]-=parseInt(f.css('border'+e+'Width'))||0}g[c]+=b.offset[h]||0;if(b.over[h])g[c]+=f[i=='x'?'width':'height']()*b.over[h]}else{var o=f[h];g[c]=o.slice&&o.slice(-1)=='%'?parseFloat(o)/100*m:o}if(/^\d+$/.test(g[c]))g[c]=g[c]<=0?0:Math.min(g[c],m);if(!a&&b.queue){if(l!=g[c])t(b.onAfterFirst);delete g[c]}});t(b.onAfter);function t(a){r.animate(g,j,b.easing,a&&function(){a.call(this,n,b)})}}).end()};k.max=function(a,i){var e=i=='x'?'Width':'Height',h='scroll'+e;if(!d(a).is('html,body'))return a[h]-d(a)[e.toLowerCase()]();var c='client'+e,l=a.ownerDocument.documentElement,m=a.ownerDocument.body;return Math.max(l[h],m[h])-Math.min(l[c],m[c])};function p(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);

//**************************************************************
// jQZoom allows you to realize a small magnifier window,close
// to the image or images on your web page easily.
//
// jqZoom version 1.2
// Author Doc. Ing. Renzi Marco(www.mind-projects.it)
// Released on Dec 05 2007
// i'm searching for a job,pick me up!!!
// mail: renzi.mrc@gmail.com
//**************************************************************

(function($) {
    $.fn.jqueryzoom = function(options) {
        var settings = {
            xzoom: 200,			//zoomed width default width
            yzoom: 200,			//zoomed div default width
            offset: 10,			//zoomed div default offset
            position: "right"	//zoomed div default position,offset position is to the right of the image
        };

        if(options)
            $.extend(settings, options);

        var noalt ='';

        $(this).hover(function() {
            var imageRelativeLeft = $(this).get(0).offsetLeft;
            var imageLeft = $($(this).get(0)).offset().left;
            var imageRelativeTop =  $(this).get(0).offsetTop;
            var imageTop = $($(this).get(0)).offset().top;
            var imageWidth = $(this).get(0).offsetWidth;
            var imageHeight = $(this).get(0).offsetHeight;

            noalt = $(this).attr("alt");
            var bigimage = noalt;
            $(this).attr("alt", '');

            if($("div.zoomdiv").get().length == 0)
                $(this).after("<div class='zoomdiv'><img class='bigimg' src='"+bigimage+"'/></div>");

            if(settings.position == "right")
                leftpos = imageRelativeLeft + imageWidth + settings.offset;
            else
                leftpos = imageRelativeLeft - settings.xzoom - settings.offset;

            $("div.zoomdiv").css({top: imageRelativeTop,left: leftpos});
            $("div.zoomdiv").width(settings.xzoom);
            $("div.zoomdiv").height(settings.yzoom);
            $("div.zoomdiv").show();

            $(document.body).mousemove(function(e) {
                var bigwidth = $(".bigimg").get(0).offsetWidth;
                var bigheight = $(".bigimg").get(0).offsetHeight;
                var scaley ='x';
                var scalex= 'y';

                if(isNaN(scalex)|isNaN(scaley)) {
                    var scalex = Math.round(bigwidth/imageWidth) ;
                    var scaley = Math.round(bigheight/imageHeight);
                }

                mouse = new MouseEvent(e);

                scrolly = mouse.y - imageTop - ($("div.zoomdiv").height()*1/scaley)/2 ;
                $("div.zoomdiv").get(0).scrollTop = scrolly * scaley  ;
                scrollx = mouse.x - imageLeft - ($("div.zoomdiv").width()*1/scalex)/2 ;
                $("div.zoomdiv").get(0).scrollLeft = (scrollx) * scalex ;
            });
        }, function() {
            $(this).attr("alt", noalt);
            $("div.zoomdiv").hide();
            $(document.body).unbind("mousemove");
            $(".lenszoom").remove();
            $("div.zoomdiv").remove();
        });
    }
})(jQuery);

function MouseEvent(e) {
    this.x = e.pageX
    this.y = e.pageY
}

