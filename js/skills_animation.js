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

