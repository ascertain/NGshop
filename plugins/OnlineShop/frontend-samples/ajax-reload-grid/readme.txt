Sample code for Grid with ajax-reloading

1) make sure the ajax_route is configured

2) add content of AjaxServiceController to a Controller, copy grid.php and reload-products.php to views modify the template
   (eventually also copy content of _shared folder to a location in your views directory)

3) copy are productgrid to area directory - modify templates if necessary

4) make sure all js files are available on the included paths, or modify the include paths in the scripts

5) make sure filters are build like in the example, or modify the filter methods resetFilter, selectFilter, submitForm