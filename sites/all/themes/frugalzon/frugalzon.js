(function ($, Drupal) {

  $(document).ready(function() {
    $('.info').each(function() {
      var image = $(this).siblings('img');
      var height = image.attr('height');
      var width = image.attr('width');
      $(this).css('height', height);
      $(this).css('width', width);
    })
  });

})(jQuery, Drupal);
