/* @license MIT
 * letItSnow.js
 * @author M1nified http://prowebject.com
 * Requires: jquery 2.x & jquery-ui 1.11+ with Effects Core
 */
!function(n){n.fn.extend({letItSnow:function(t){var e=n.extend({color:"#fff",size_min:1,size_max:5,zindex:99999,maxcount:100,wind:250,easing_x:"easeInBack",easing_y:"easeInCubic",fall_time:1e4},t),o=!0;return n(window).on("blur",function(){o=!1}),n(window).on("focus",function(){o=!0}),this.each(function(){var t=n(document).innerHeight(),a=e.fall_time,s=function c(){if(!o)return void setTimeout(c.bind(this),2e3);var i=Math.floor(1e5*Math.random()%(n(this).width()+e.wind))-e.wind,t=Math.ceil(10*Math.random()%e.size_max)+e.size_min,s=Math.floor(1e5*Math.random()%a),r=n('<div class="snowflake" style="display:block; pointer-events: none; z-index:'+e.zindex+";position:absolute; top:0px; left:"+i+"px; width:"+t+"px; height:"+t+"px; border-radius:100%;background-color:"+e.color+';"></div>');setTimeout(d.bind(this,r,c,i),s)}.bind(this),d=function(i,o,s){n(this).append(i),i.animate({left:s+e.wind,top:t},{duration:a,specialEasing:{left:e.easing_x,top:e.easing_y},step:function(i,t){if("left"===t.prop)try{0>=i||i+e.size_max>=n(window).innerWidth()?n(this).hide():n(this).show()}catch(o){n(this).stop()}}}).promise().always(r.bind(this,i,o))},r=function(i,n){n.call(this),i.remove()};for(i=0;i<e.maxcount;i++)s()})}})}(jQuery);