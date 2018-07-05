$('a').on('click', function(){
  $('a').removeClass('active');
  $(this).addClass('active');
  // console.log(this);
})

$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
