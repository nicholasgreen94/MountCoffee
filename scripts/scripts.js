$(function() {// Document ready

  var $descriptionImg = $('.description-img');

  //> Mobile Nav
  $('#menu-icon').click(function() {
    $(this).children('span').toggleClass('close-btn');
    $('#nav-mobile').toggleClass('menu-open');
  });

  //> Menu
  $('.food-topic a').click(function(e) {
    e.preventDefault();
    $('.active-item').removeClass('active-item');
    $('.active-type').removeClass('active-type');
    var topicHref = $(this).attr('href');
    $(topicHref).addClass('active-type'); //> add .active-type to the matching href
    $(this).addClass('active-item'); //> add .active-item to the clicked item
    $('.active-type span:first').trigger('click');

    switch (topicHref) {//> compare which current topic is active, change the .description-img accordingly
      case '#iced':
        $descriptionImg.attr('src', 'images/iced_coffee.jpg');
        $descriptionImg.attr('alt', 'A cup of coffee in a clear glass that just had creamer poured into it.');
        break;
      case '#sweets':
        $descriptionImg.attr('src', 'images/chocolate_cake.jpg');
        $descriptionImg.attr('alt', 'A circular choclate cake that looks delicious.');
        break;
      case '#sandwich':
        $descriptionImg.attr('src', 'images/egg_sandwich.jpg');
        $descriptionImg.attr('alt', 'A sandwich that has eggs, spinach and avocado.');
        break;
      default://> Default is drinks.jpg
        $descriptionImg.attr('src', 'images/drinks.jpg');
        $descriptionImg.attr('alt', 'Two cups of coffee with foam.');
        break;
    }
  });

  $('#food-type-wrap span').click(function(e) {
    $('.active-description').removeClass('active-description');
    $('.active').removeClass('active');
    $(this).addClass('active');
    var dataItem = $(this).data('item');
    $('#description .item').each(function() { //> Loop through each .item
      var dataDescription = $(this).data('description');
      if ( dataItem == dataDescription ) {//> See if the data attributes match
        $(this).addClass('active-description');
      }
    });
  });

  //> Contact Form
  $('input[type="submit"]').click(function(e) {
    e.preventDefault();
  });

});
