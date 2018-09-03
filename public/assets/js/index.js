$('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        onOpen: function(el) { }, // A function to be called when sideNav is opened
        onClose: function(el) { }, // A function to be called when sideNav is closed
    }
);

document.addEventListener('DOMContentLoaded', function() {
    var el = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(el);
});

// Or with jQuery
// $(document).ready(function(){
//     $('.tooltipped').tooltip();
// });

document.addEventListener('DOMContentLoaded', function() {
    var el = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(el);
});



var el = $('.tabs').first()[0];
var instance = M.Tabs.init(el);

