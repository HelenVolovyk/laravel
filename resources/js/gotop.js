		 var bl = $('.gotop, .gotop2, .gotop3')
		 window.addEventListener('scroll', function() {
			 var st = document.documentElement.scrollTop
			
			 if (st > 300 ) {
				 bl.css('opacity', '1')
			
			 }else{
				bl.css('opacity', '0')
			 }
		 })