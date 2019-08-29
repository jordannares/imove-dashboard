$(function(){

	var win = $(window);

	var element = $(this);
	var top_nav_wrapper = $('.navbar-top-links > .item-list');

	top_nav_wrapper.hover(function(){
		$(this).find('ul.dropdown-menu').addClass('show');
	}, function(){
		$(this).find('ul.dropdown-menu').removeClass('show');
	});	


	var main_nav = $('.nav-items-link > .link_list');

	main_nav.hover(function(){
		$(this).find('ul.dropdown-menu').addClass('show');
	}, function(){
		$(this).find('ul.dropdown-menu').removeClass('show');
	});	


	/*******Mobile menu*******/

	var toggler = $('.m-toggler-wrapper .nav-toggler');

	toggler.click(function(){
		$(this).find('.b-close').toggleClass('ti-menu');
		$('.left-sidebar').toggleClass('m-open');
	});

	win.resize(function(){
		if(win.width() > 768){
			$('.left-sidebar.m-open').hide();
		}else{
			$('.left-sidebar.m-open').show();
		}
	});
	
	





	/*side bar menu*/
	var sidenav = $('.sidenav-items-link > .sidenav-link-list');

	sidenav.click(function(){
		$(this).find('ul.dropdown-sidemenu').toggleClass('d-show');
		$(this).find('.side-arrow').toggleClass('arrow-current');
	}/*, function(){
		$(this).find('ul.dropdown-sidemenu').removeClass('d-show');
	}*/);


	/*******chart*******/
	/*d3.selectAll('g').attr('class','dgraf').style('color','red');*/
	 var chart = c3.generate({
        bindto: '#chart',
        data: {
            columns: [
            	['BTC', 5.00],
            	['ETH', 6.500],
            	['USD', 30],
            	['JPY', 60],
            	['EUR', 70],
                ['OTHERS', 90],
            ],
            type : 'donut',
           	onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
              },
            width:20,
        },
        
        legend: {
        	show:false
        },
        tooltip: {
		    format: {
		      value: function(value) {
		        var twoDecimal = d3.format('.2f');
		        /*var twoDecimal = d3.formatPrefix(",.0", 1e-6);*/
		        return twoDecimal(value);
		      }
		    }
		  },
        color: {
        	pattern: ['#22a1bf', '#0013ff', '#db341a', '#e56b38', '#f0ae8b', '#1fc9c9']
        }
    });

	 d3.select('.panel-body').insert('div', ':first-child')
	  .attr('class', 'legend col-md-12')
	  .insert('ul').attr('class', 'list-group')
	  .selectAll('span')
	  .data(['BTC', 'ETH', 'USD', 'JPY', 'EUR', 'OTHERS'])
	  .enter().append('li').attr('class', 'list-group-item')
	  .append('div').attr('class', 'legend-label')
	  .attr('data-id', function(id) {
	    return id;
	  })
	  .append('div', '.legend-label')
	  .html(function(id) {
	    var data = chart.data(id);
	    return id + '&nbsp&nbsp&nbsp';
	  })
	  .on('mouseover', function(id) {
	    chart.focus(id);
	  })
	  .on('mouseout', function(id) {
	    chart.revert();
	  })
	  .insert('span', '.legend-label').attr('class', 'badge')
	  .each(function(id) {
	    d3.select(this).style('background-color', chart.color(id));
	  })
	  .html(function(id){
	    return '&nbsp&nbsp&nbsp&nbsp&nbsp'
	});


});

