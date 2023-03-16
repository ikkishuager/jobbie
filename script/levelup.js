$('.ok').click(function() {
    $('.progress').animate({
      width: "152px"
    }, 500, function() {
      $('.target-lvl').addClass('lvl-animate');
      $('#initial-lvl').fadeOut('500');
      $('.line').fadeOut('500');
    });
    $('.cur-xp').each(function() {
      $(this).prop('Counter', 1500).animate({
        Counter: 2000
      }, {
        duration: 300,
        easing: 'swing',
        step: function(now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  });
  
  $('.reset').click(function() {
    $('.progress').animate({
      width: "114px"
    }, 500, function() {
      $('.target-lvl').removeClass('lvl-animate');
      $('#initial-lvl').fadeIn('500');
      $('.line').fadeIn('500');
      $('.cur-xp').html("1500");
    });
  });