$(document).ready(function() {

  //for (let ) {}

  let svgObject = document.getElementById('svg');
  let isoCodes = svgObject.getAttribute("data-isocodes");
  let isCodesArray = isoCodes.split(',');
  let color = svgObject.getAttribute("data-highlightcolor");
  for (let i = 0; i < isCodesArray.length; i++) {
    let id = isCodesArray[i];
    changePath(id, color);
  }

  function changePath(id, color) {
    id = id.replace(/\s/g, '');
    let path = document.getElementById(id);
    console.log(path);
    path.setAttribute("fill", color);
  }

  $('.select').on('click', 'a', function(e) {
    var ajaxUrl = $(this).data('url');
    if (ajaxUrl !== undefined && ajaxUrl !== '') {

      e.preventDefault();
      var container = 'avpartners';
      $.ajax({
        url: ajaxUrl,
        type: 'GET',
        success: function(result) {
          var ajaxDom = $(result).find('#' + container);
          $('#' + container).replaceWith(ajaxDom);
          window.history.pushState("object or string", "Title", ajaxUrl);
        }
      });
    }
  });


});
