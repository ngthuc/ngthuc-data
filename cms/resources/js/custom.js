$(document).ready(function() {
     $("#menu").click(function(){
         $('.main-nav').sidebar({
       dimPage          : false,
       transition       : 'push',
       }).sidebar('toggle');;

     });
     $('#intro').waypoint(function(direction) {
         $('nav').toggleClass('fix-navigation');
     });

     $('#home-menu').onePageNav({
         currentClass: 'current',
         changeHash: false,
         scrollSpeed: 750,
         scrollThreshold: 0.5,
         filter: '',
         easing: 'swing',
         begin: function() {
             //I get fired when the animation is starting
         },
         end: function() {
             //I get fired when the animation is ending
         },
         scrollChange: function($currentListItem) {
             //I get fired when you enter a section and I pass the list item of the section
         }
     });
     new WOW().init();
 });
