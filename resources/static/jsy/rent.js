 var cars = document.querySelectorAll('.thumbnail');

 $('#searchbutton').click(function () {

     var min = parseInt($('#min').val());
     var max = parseInt($('#max').val());
     var search = $('#search').val().toUpperCase();

     $("#products").empty();

     if (isNaN(min) && isNaN(max) && search == 0) {
         for (var i = 0; i < cars.length; i++) {
             $('<div class="item  col-xs-4 col-lg-4" id="' + i + '">').appendTo('#products');
             $('</div>').appendTo('#products');
             $(cars[i]).appendTo('#' + i + '');
         }
     } else if ((min >= 0 || isNaN(min)) && max > 0 && search == 0) {
         for (var i = 0; i < cars.length; i++) {
             var price = cars[i].querySelector('span').innerHTML;
             if ((price >= min || isNaN(min)) && price <= max) {
                 $('<div class="item  col-xs-4 col-lg-4" id="' + i + '">')
                    .appendTo('#products');
                 $('</div>').appendTo('#products');
                 $(cars[i]).appendTo('#' + i + '');
             }
         }
     } else if ((min >= 0 || isNaN(min)) && max > 0 && search != 0) {
         for (var i = 0; i < cars.length; i++) {
             var price = cars[i].querySelector('span').innerHTML;
             var name = cars[i].querySelector('h4').textContent.split(' ');
             if ((price >= min || isNaN(min)) &&
                 price <= max &&
                 (search === name[0].toUpperCase() ||
                  search === name[1].toUpperCase())) {
                 $('<div class="item  col-xs-4 col-lg-4" id="' + i + '">').appendTo('#products');
                 $('</div>').appendTo('#products');
                 $(cars[i]).appendTo('#' + i + '');
             }
         }
     } else if ((isNaN(min) || min == 0) && (isNaN(max) || max == 0) && search != 0) {
         for (var i = 0; i < cars.length; i++) {
             var name = cars[i].querySelector('h4').textContent.split(' ');
             if (search === name[0].toUpperCase() || 
                 search === name[1].toUpperCase()) {
                 $('<div class="item  col-xs-4 col-lg-4" id="' + i + '">').appendTo('#products');
                 $('</div>').appendTo('#products');
                 $(cars[i]).appendTo('#' + i + '');
             }
         }
     } else if ((isNaN(min) || min >= 0) && isNaN(max) && search == 0) {
         for (var i = 0; i < cars.length; i++) {
             var price = cars[i].querySelector('span').innerHTML;
             if ((price >= min || isNaN(min))) {
                 $('<div class="item  col-xs-4 col-lg-4" id="' + i + '">').appendTo('#products');
                 $('</div>').appendTo('#products');
                 $(cars[i]).appendTo('#' + i + '');
             }
         }
     }else if (min > 0 && isNaN(max) && search != 0) {

         for (var i = 0; i < cars.length; i++) {

             var price = parseInt(cars[i].querySelector('span').innerHTML);
             var name = cars[i].querySelector('h4').textContent.split(' ');

             if (price >= min && (name[0].toUpperCase()===search ||
                                  name[1].toUpperCase()===search)) {
                 $('<div class="item  col-xs-4 col-lg-4" id="' + i + '">').appendTo('#products');
                 $('</div>').appendTo('#products');
                 $(cars[i]).appendTo('#' + i + '');
             }
         }
     }

 });
