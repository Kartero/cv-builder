$(document).ready(function() {
	addField("personal");
	addStaticField("jobs");
});

function addStaticField( classPrefix ) {
	$("#save-" + classPrefix).click(function() {
		var count = $("." + classPrefix).length;
		$.get({
			method: 'GET',
		    url: 'templates/static-template.php',
		    headers: {
		        'Content-Type': 'application/json',
		    },
		    data: {
		        classPrefix: classPrefix,
		        count: count
		    }
		}).done(function(field) {
			$("#" + classPrefix + "-empty").append(field);
		});
	})
	
}

function addField( classPrefix ) {
	// General function to add new fields to form
	// classPrefix variable defines where field will be located and
	// also field name, id and class
	$("#save-" + classPrefix).click(function() {
		var name = $("#" + classPrefix + "-title").val().toLowerCase();
		
		if (!forceTitle(name)) {
			return false;
		}
		
		name = validName(name);
		name = nameExists(name, 0);
		
		var type = $("#" + classPrefix + "-select option:selected").val();
		var id = "personal-" + ($("." + classPrefix).length + 1);
		var title = capitalizeFirstLetter(($("#" + classPrefix + "-title").val()));
		var formClass = classPrefix;
		
		var field = "";
		if (type === "textarea") {
			field = textAreaField(name, title, id, formClass);
		} else if (type === "jobs") {
			field = textAreaField(name, title, id, formClass);
		} else {
			field = inputField(name, type, id, title, formClass);
		}	
		$("#" + classPrefix + "-empty").append(field);
		
	});

}

function forceTitle(name) {
	// We want a title
	if ($.trim(name).length < 1) {
		return false;
	}
	return true;
}

function validName(name) {
	// There will be lot of ä and ö chars and that is not acceptable in input[name...
	// Then we simply clear unnecessary characters off
	name = name.replace(/\u00e4/g, 'a');
	name = name.replace(/\u00f6/g, 'o');
	name = name.replace(/[^a-z 0-9 \-_]/g, '');
	if (name.length < 1) {
		name = "unknown-field";
	}
	return name;
}

function nameExists(name, counter) {
	// nameExists checks whether name already is in use somewhere in form
	// and replaces it with numbered version when needed.
	// If name exists, function calls itself
	var i = 0;
	$('input[name="' + name + '"').each(function() {
		i += 1;
	})
	if (i === 0) {
		return name;
	}
	if (counter > 0 && counter < 10) {
		name = name.slice(0, name.length - 1) + counter;
	} else {
		name = name + "-" + counter;
	}
	
	return nameExists(name, counter + 1)
}

function textAreaField(name, title, id, formClass) {
	var field = '<div class="form-group"><label for="' + name + '">' + title + '</label>' +
		'<textarea class="form-control ' + formClass + '" name="' + name + '" id="' + id + '" rows="3"></textarea></div>';
	
	return field;
}

function inputField(name, type, id, title, formClass) {
	var field = '<div class="form-group"><label for="' + name + '">' + title + '</label>' +
		'<input type="' + type + '" class="form-control ' + formClass + '" name="' + name + '" id="' + id + '"></div>';
	
	return field;
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
}