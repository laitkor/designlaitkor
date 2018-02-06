!function(e,t,r){"use strict";function n(r){if(o=t.documentElement,a=t.body,M(),oe=this,r=r||{},ce=r.constants||{},r.easing)for(var n in r.easing)U[n]=r.easing[n];ve=r.edgeStrategy||"set",le={beforerender:r.beforerender,render:r.render},se=r.forceHeight!==!1,se&&(Ce=r.scale||1),fe=r.mobileDeceleration||x,pe=r.smoothScrolling!==!1,ge=r.smoothScrollingDuration||A,me={targetTop:oe.getScrollTop()},Ie=(r.mobileCheck||function(){return/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i.test(navigator.userAgent||navigator.vendor||e.opera)})(),Ie?(ie=t.getElementById("skrollr-body"),ie&&ne(),j(),ke(o,[y,S],[T])):ke(o,[y,b],[T]),oe.refresh(),ye(e,"resize orientationchange",function(){var e=o.clientWidth,t=o.clientHeight;(t!==Oe||e!==ze)&&(Oe=t,ze=e,Pe=!0)});var i=R();return function l(){X(),i(l)}(),oe}var o,a,i=e.skrollr={get:function(){return oe},init:function(e){return oe||new n(e)},VERSION:"0.6.11"},l=Object.prototype.hasOwnProperty,s=e.Math,c=e.getComputedStyle,f="touchstart",u="touchmove",p="touchcancel",g="touchend",m="skrollable",d=m+"-before",v=m+"-between",h=m+"-after",y="skrollr",T="no-"+y,b=y+"-desktop",S=y+"-mobile",k="linear",w=1e3,x=.004,A=200,E="start",F="end",C="center",D="bottom",H="___skrollable_id",V=/^\s+|\s+$/g,z=/^data(?:-(_\w+))?(?:-?(-?\d+))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/,O=/\s*([\w\-\[\]]+)\s*:\s*(.+?)\s*(?:;|$)/gi,P=/^([a-z\-]+)\[(\w+)\]$/,q=/-([a-z])/g,I=function(e,t){return t.toUpperCase()},B=/[\-+]?[\d]*\.?[\d]+/g,_=/\{\?\}/g,G=/rgba?\(\s*-?\d+\s*,\s*-?\d+\s*,\s*-?\d+/g,L=/[a-z\-]+-gradient/g,N="",$="",M=function(){var e=/^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;if(c){var t=c(a,null);for(var r in t)if(N=r.match(e)||+r==r&&t[r].match(e))break;if(!N)return void(N=$="");N=N[0],"-"===N.slice(0,1)?($=N,N={"-webkit-":"webkit","-moz-":"Moz","-ms-":"ms","-o-":"O"}[N]):$="-"+N.toLowerCase()+"-"}},R=function(){var t=e.requestAnimationFrame||e[N.toLowerCase()+"RequestAnimationFrame"],r=Ae();return(Ie||!t)&&(t=function(t){var n=Ae()-r,o=s.max(0,1e3/60-n);e.setTimeout(function(){r=Ae(),t()},o)}),t},U={begin:function(){return 0},end:function(){return 1},linear:function(e){return e},quadratic:function(e){return e*e},cubic:function(e){return e*e*e},swing:function(e){return-s.cos(e*s.PI)/2+.5},sqrt:function(e){return s.sqrt(e)},outCubic:function(e){return s.pow(e-1,3)+1},bounce:function(e){var t;if(.5083>=e)t=3;else if(.8489>=e)t=9;else if(.96208>=e)t=27;else{if(!(.99981>=e))return 1;t=91}return 1-s.abs(3*s.cos(e*t*1.028)/t)}};n.prototype.refresh=function(e){var n,o,a=!1;for(e===r?(a=!0,ae=[],qe=0,e=t.getElementsByTagName("*")):e=[].concat(e),n=0,o=e.length;o>n;n++){var i=e[n],l=i,s=[],c=pe,f=ve;if(i.attributes){for(var u=0,p=i.attributes.length;p>u;u++){var g=i.attributes[u];if("data-anchor-target"!==g.name)if("data-smooth-scrolling"!==g.name)if("data-edge-strategy"!==g.name){var d=g.name.match(z);if(null!==d){var v=d[1];v=v&&ce[v.substr(1)]||0;var h=(0|d[2])+v,y=d[3],T=d[4]||y,b={offset:h,props:g.value,element:i};s.push(b),y&&y!==E&&y!==F?(b.mode="relative",b.anchors=[y,T]):(b.mode="absolute",y===F?b.isEnd=!0:(b.frame=h*Ce,delete b.offset))}}else f=g.value;else c="off"!==g.value;else if(l=t.querySelector(g.value),null===l)throw'Unable to find anchor target "'+g.value+'"'}if(s.length){var S,k,w;!a&&H in i?(w=i[H],S=ae[w].styleAttr,k=ae[w].classAttr):(w=i[H]=qe++,S=i.style.cssText,k=Se(i)),ae[w]={element:i,styleAttr:S,classAttr:k,anchorTarget:l,keyFrames:s,smoothScrolling:c,edgeStrategy:f},ke(i,[m],[])}}}for(Te(),n=0,o=e.length;o>n;n++){var x=ae[e[n][H]];x!==r&&(Z(x),K(x))}return oe},n.prototype.relativeToAbsolute=function(e,t,r){var n=o.clientHeight,a=e.getBoundingClientRect(),i=a.top,l=a.bottom-a.top;return t===D?i-=n:t===C&&(i-=n/2),r===D?i+=l:r===C&&(i+=l/2),i+=oe.getScrollTop(),i+.5|0},n.prototype.animateTo=function(e,t){t=t||{};var n=Ae(),o=oe.getScrollTop();return ue={startTop:o,topDiff:e-o,targetTop:e,duration:t.duration||w,startTime:n,endTime:n+(t.duration||w),easing:U[t.easing||k],done:t.done},ue.topDiff||(ue.done&&ue.done.call(oe,!1),ue=r),oe},n.prototype.stopAnimateTo=function(){ue&&ue.done&&ue.done.call(oe,!0),ue=r},n.prototype.isAnimatingTo=function(){return!!ue},n.prototype.setScrollTop=function(t,r){return r===!0&&(He=t,de=!0),Ie?Be=s.min(s.max(t,0),Fe):e.scrollTo(0,t),oe},n.prototype.getScrollTop=function(){return Ie?Be:e.pageYOffset||o.scrollTop||a.scrollTop||0},n.prototype.on=function(e,t){return le[e]=t,oe},n.prototype.off=function(e){return delete le[e],oe};var j=function(){var t,n,i,l,c,m,d,v,h,y,T;ye(o,[f,u,p,g].join(" "),function(e){e.preventDefault();var o=e.changedTouches[0];switch(l=o.clientY,c=o.clientX,h=e.timeStamp,e.type){case f:t&&t.blur(),oe.stopAnimateTo(),t=e.target,n=m=l,i=c,v=h;break;case u:d=l-m,T=h-y,oe.setScrollTop(Be-d,!0),m=l,y=h;break;default:case p:case g:var a=n-l,b=i-c,S=b*b+a*a;if(49>S)return t.focus(),void t.click();t=r;var k=d/T;k=s.max(s.min(k,3),-3);var w=s.abs(k/fe),x=k*w+.5*fe*w*w,A=oe.getScrollTop()-x,E=0;A>Fe?(E=(Fe-A)/x,A=Fe):0>A&&(E=-A/x,A=0),w*=1-E,oe.animateTo(A,{easing:"outCubic",duration:w})}}),e.scrollTo(0,0),o.style.overflow=a.style.overflow="hidden"},W=function(){var e,t,r,n,o,a,i,l,c;for(l=0,c=ae.length;c>l;l++)for(e=ae[l],t=e.element,r=e.anchorTarget,n=e.keyFrames,o=0,a=n.length;a>o;o++)i=n[o],"relative"===i.mode&&(re(t),i.frame=oe.relativeToAbsolute(r,i.anchors[0],i.anchors[1])-i.offset,re(t,!0)),se&&!i.isEnd&&i.frame>Fe&&(Fe=i.frame);for(Fe=s.max(Fe,be()),l=0,c=ae.length;c>l;l++){for(e=ae[l],n=e.keyFrames,o=0,a=n.length;a>o;o++)i=n[o],i.isEnd&&(i.frame=Fe-i.offset);e.keyFrames.sort(Ee)}},Y=function(e,t){for(var r=0,n=ae.length;n>r;r++){var o,a,s=ae[r],c=s.element,f=s.smoothScrolling?e:t,u=s.keyFrames,p=u[0].frame,g=u[u.length-1].frame,y=p>f,T=f>g,b=u[y?0:u.length-1];if(y||T){if(y&&-1===s.edge||T&&1===s.edge)continue;switch(ke(c,[y?d:h],[d,v,h]),s.edge=y?-1:1,s.edgeStrategy){case"reset":re(c);continue;case"ease":f=b.frame;break;default:case"set":var S=b.props;for(o in S)l.call(S,o)&&(a=te(S[o].value),i.setStyle(c,o,a));continue}}else 0!==s.edge&&(ke(c,[m,v],[d,h]),s.edge=0);for(var k=0,w=u.length-1;w>k;k++)if(f>=u[k].frame&&f<=u[k+1].frame){var x=u[k],A=u[k+1];for(o in x.props)if(l.call(x.props,o)){var E=(f-x.frame)/(A.frame-x.frame);E=x.props[o].easing(E),a=ee(x.props[o].value,A.props[o].value,E),a=te(a),i.setStyle(c,o,a)}break}}},X=function(){Pe&&(Pe=!1,Te());var e,t,n=oe.getScrollTop(),o=Ae();if(ue)o>=ue.endTime?(n=ue.targetTop,e=ue.done,ue=r):(t=ue.easing((o-ue.startTime)/ue.duration),n=ue.startTop+t*ue.topDiff|0),oe.setScrollTop(n,!0);else if(!Ie){var a=me.targetTop-n;a&&(me={startTop:He,topDiff:n-He,targetTop:n,startTime:Ve,endTime:Ve+ge}),o<=me.endTime&&(t=U.sqrt((o-me.startTime)/ge),n=me.startTop+t*me.topDiff|0)}if(Ie&&ie&&i.setStyle(ie,"transform","translate(0, "+-Be+"px) "+he),de||He!==n){De=n>=He?"down":"up",de=!1;var l={curTop:n,lastTop:He,maxTop:Fe,direction:De},s=le.beforerender&&le.beforerender.call(oe,l);s!==!1&&(Y(n,oe.getScrollTop()),He=n,le.render&&le.render.call(oe,l)),e&&e.call(oe,!1)}Ve=o},Z=function(e){for(var t=0,r=e.keyFrames.length;r>t;t++){for(var n,o,a,i,l=e.keyFrames[t],s={};null!==(i=O.exec(l.props));)a=i[1],o=i[2],n=a.match(P),null!==n?(a=n[1],n=n[2]):n=k,o=o.indexOf("!")?J(o):[o.slice(1)],s[a]={value:o,easing:U[n]};l.props=s}},J=function(e){var t=[];return G.lastIndex=0,e=e.replace(G,function(e){return e.replace(B,function(e){return e/255*100+"%"})}),$&&(L.lastIndex=0,e=e.replace(L,function(e){return $+e})),e=e.replace(B,function(e){return t.push(+e),"{?}"}),t.unshift(e),t},K=function(e){var t,r,n={};for(t=0,r=e.keyFrames.length;r>t;t++)Q(e.keyFrames[t],n);for(n={},t=e.keyFrames.length-1;t>=0;t--)Q(e.keyFrames[t],n)},Q=function(e,t){var r;for(r in t)l.call(e.props,r)||(e.props[r]=t[r]);for(r in e.props)t[r]=e.props[r]},ee=function(e,t,r){var n,o=e.length;if(o!==t.length)throw"Can't interpolate between \""+e[0]+'" and "'+t[0]+'"';var a=[e[0]];for(n=1;o>n;n++)a[n]=e[n]+(t[n]-e[n])*r;return a},te=function(e){var t=1;return _.lastIndex=0,e[0].replace(_,function(){return e[t++]})},re=function(e,t){e=[].concat(e);for(var r,n,o=0,a=e.length;a>o;o++)n=e[o],r=ae[n[H]],r&&(t?(n.style.cssText=r.dirtyStyleAttr,ke(n,r.dirtyClassAttr)):(r.dirtyStyleAttr=n.style.cssText,r.dirtyClassAttr=Se(n),n.style.cssText=r.styleAttr,ke(n,r.classAttr)))},ne=function(){he="translateZ(0)",i.setStyle(ie,"transform",he);var e=c(ie),t=e.getPropertyValue("transform"),r=e.getPropertyValue($+"transform"),n=t&&"none"!==t||r&&"none"!==r;n||(he="")};i.setStyle=function(e,t,r){var n=e.style;if(t=t.replace(q,I).replace("-",""),"zIndex"===t)n[t]=""+(0|r);else if("float"===t)n.styleFloat=n.cssFloat=r;else try{N&&(n[N+t.slice(0,1).toUpperCase()+t.slice(1)]=r),n[t]=r}catch(o){}};var oe,ae,ie,le,se,ce,fe,ue,pe,ge,me,de,ve,he,ye=i.addEvent=function(t,r,n){var o=function(t){return t=t||e.event,t.target||(t.target=t.srcElement),t.preventDefault||(t.preventDefault=function(){t.returnValue=!1}),n.call(this,t)};r=r.split(" ");for(var a=0,i=r.length;i>a;a++)t.addEventListener?t.addEventListener(r[a],n,!1):t.attachEvent("on"+r[a],o)},Te=function(){var e=oe.getScrollTop();Fe=0,se&&!Ie&&(a.style.height="auto"),W(),se&&!Ie&&(a.style.height=Fe+o.clientHeight+"px"),Ie?oe.setScrollTop(s.min(oe.getScrollTop(),Fe)):oe.setScrollTop(e,!0),de=!0},be=function(){var e=ie&&ie.offsetHeight||0,t=s.max(e,a.scrollHeight,a.offsetHeight,o.scrollHeight,o.offsetHeight,o.clientHeight);return t-o.clientHeight},Se=function(t){var r="className";return e.SVGElement&&t instanceof e.SVGElement&&(t=t[r],r="baseVal"),t[r]},ke=function(t,n,o){var a="className";if(e.SVGElement&&t instanceof e.SVGElement&&(t=t[a],a="baseVal"),o===r)return void(t[a]=n);for(var i=t[a],l=0,s=o.length;s>l;l++)i=xe(i).replace(xe(o[l])," ");i=we(i);for(var c=0,f=n.length;f>c;c++)-1===xe(i).indexOf(xe(n[c]))&&(i+=" "+n[c]);t[a]=we(i)},we=function(e){return e.replace(V,"")},xe=function(e){return" "+e+" "},Ae=Date.now||function(){return+new Date},Ee=function(e,t){return e.frame-t.frame},Fe=0,Ce=1,De="down",He=-1,Ve=Ae(),ze=0,Oe=0,Pe=!1,qe=0,Ie=!1,Be=0}(window,document);