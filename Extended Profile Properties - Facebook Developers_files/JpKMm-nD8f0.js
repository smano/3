/*!CK:61934937!*//*1385479348,173212953*/

if (self.CavalryLogger) { CavalryLogger.start_js(["HLFV+"]); }

__d("SelectOnFocus",["copyProperties","DOM","Event"],function(a,b,c,d,e,f){var g=b('copyProperties'),h=b('DOM'),i=b('Event');function j(){}g(j,{forElement:function(k){i.listen(k,'click',function(){j.select(k);});},select:function(k){var l=0,m=k.innerHTML.length;if(document.createRange&&window.getSelection){var n=document.createRange();n.selectNodeContents(k);var o=j._getTextNodesIn(k),p=false,q=0,r;for(var s=0;s<o.length;s++){var t=o[s++];r=q+t.length;if(!p&&l>=q&&(l<r||(l==r&&s<o.length))){n.setStart(t,l-q);p=true;}if(p&&m<=r){n.setEnd(t,m-q);break;}q=r;}var u=window.getSelection();if(!u.isCollapsed)return;u.removeAllRanges();u.addRange(n);}else if(document.selection&&document.body.createTextRange){var v=document.body.createTextRange();v.moveToElementText(k);v.collapse(true);v.moveEnd("character",m);v.moveStart("character",l);v.select();}},forCode:function(){h.scry(document,'pre code').forEach(function(k){j.forElement(k.parentNode);});},_getTextNodesIn:function(k){var l=[];if(k.nodeType==3){l.push(k);}else{var m=k.childNodes;for(var n=0,o=m.length;n<o;++n)l.push.apply(l,j._getTextNodesIn(m[n]));}return l;}});e.exports=j;});
__d("legacy:select-on-focus",["SelectOnFocus"],function(a,b,c,d){a.SelectOnFocus=b('SelectOnFocus');},3);