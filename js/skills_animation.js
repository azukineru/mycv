function toggle_visibility(id) {
    var e = document.getElementById(id);
    var skill = document.getElementById("skills");
    var experience = document.getElementById("experience");
    var project = document.getElementById("project");
    var education = document.getElementById("education");

    if( e == skill ){
   		experience.style.opacity = '0';
   		project.style.opacity = '0';
   		education.style.opacity = '0';
 		e.style.opacity = '1';
    }
    else if( e == experience ){
   		skill.style.opacity = '0';
   		project.style.opacity = '0';
   		education.style.opacity = '0';
   		e.style.opacity = '1';
    }
    else if( e == project ){
   		skill.style.opacity = '0';
   		experience.style.opacity = '0';
   		education.style.opacity = '0';
   		e.style.opacity = '1';
    }
	else{
   		skill.style.opacity = '0';
   		experience.style.opacity = '0';
   		project.style.opacity = '0';
   		e.style.opacity = '1';
    }
}

var currentIndex = 0,
	items = $('.sec2-container div'),
	itemAmt = items.length;

function cycleItems() {
  	var item = $('.sec2-container div').eq(currentIndex);
  	items.hide();
  	item.css('display','inline-block');
}

var autoSlide = setInterval(function() {
  	currentIndex += 1;
  	if (currentIndex > itemAmt - 1) {
    	currentIndex = 0;
  	}
  	cycleItems();
}, 3000);

$('.sec2-next').click(function() {
  	clearInterval(autoSlide);
  	currentIndex += 1;
  	if (currentIndex > itemAmt - 1) {
    	currentIndex = 0;
  	}
  	cycleItems();
});

$('.sec2-prev').click(function() {
  	clearInterval(autoSlide);
  	currentIndex -= 1;
  	if (currentIndex < 0) {
    	currentIndex = itemAmt - 1;
  	}
  	cycleItems();
});

