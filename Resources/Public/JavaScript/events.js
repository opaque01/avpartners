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
    path.setAttribute("fill", color);
    path.classList.add("cursor");

    path.addEventListener("click", function() {
      let button = $('.select a').each(function() {
        if ($(this).data('iso') === id) {
          var ajaxUrl = $(this).data('url');
          callAjax(ajaxUrl)
        }
      });
    });

  }

  function callAjax(ajaxUrl) {

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

  $('.select').on('click', 'a', function(e) {
    var ajaxUrl = $(this).data('url');
    if (ajaxUrl !== undefined && ajaxUrl !== '') {
      e.preventDefault();
      callAjax(ajaxUrl);
/*
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

      */
    }


  });


});


function handleZoom(e) {
	d3.select('svg g')
		.attr('transform', e.transform);
}

let zoom = d3.zoom()
	.on('zoom', handleZoom);

d3.select('svg')
  .call(zoom);
