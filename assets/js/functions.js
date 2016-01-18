$(document).ready(function() {
	
	// index toggles
	$("#menu .menu-item a").not("#back a").click(function(e){
		// prevent scrolling to anchor
		setTimeout(function() {
		    window.scrollTo(0, 0);
		  }, 1);
		
		var tar = $(this).attr("href");
		// add visible class to the target index
	    $(tar).addClass("visible");
	    // remove visible class from sibling index divs
	    $(tar).siblings(".index").not(tar).removeClass("visible");
	    // add active class to this menu item
	    $(this).closest(".menu-item").addClass("active");
	    // remove active class from other menu items
	    $(this).closest(".menu-item").siblings(".menu-item").removeClass("active");
	});
    
	// collapse ul sub-lists
    $("ul.collapser > li > a").click(function(e){
    	// prevent scrolling and changing url hash
    	e.preventDefault();
		// add visible class to child .show-hide element
    	$(this).parent("li").children(".show-hide").toggleClass("visible");
    	// toggle the +/- icons
    	$(this).children("span").toggleClass("i-plus-circle").toggleClass("i-minus-circle");
    });
    
    // show/hide indices based on url hash when navigating between pages
    if (window.location.hash) {
      // prevent scrolling to anchor
      setTimeout(function() {
        window.scrollTo(0, 0);
      }, 1);
      
	  // identify id of index from url hash 
      var hash = window.location.hash;
      if (hash) {
      	  // add visible class to the hash target
          $(hash).addClass("visible");
          // hide other indices
          $(hash).siblings(".index").not(hash).removeClass("visible");
          // get position of of targeted element within parent, returns integer from 0 to 3
          var ind = $(".indices .index").index($(hash));
		  // use integer to target equivalent menu item
          var menu = $(".menu-item").eq(ind);
          // add active class to this menu item
          $(menu).addClass("active");
          // remove active class from other menu items
          $(menu).siblings(".menu-item").removeClass("active");
      }; 
    }
    
    	
});

//window resize functions
$(window).resize(function() {

});