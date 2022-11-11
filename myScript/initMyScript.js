function base_url() {
	var pathparts = location.pathname.split("/");
	if (location.host == "localhost") {
		var url = location.origin + "/" + pathparts[1].trim("/") + "/"; // http://localhost/myproject/
	} else {
		var url = location.origin; // http://stackoverflow.com
	}

	return url;
}

function focusInput(elemId) {
	$("#"+elemId).addClass("is-filled");
}

function blurInput(id) {
	if (id == "email") {
		$("#elem_email").removeClass("is-filled");
	}

	if (id == "password") {
		$("#elem_pass").removeClass("is-filled");
	}

	if (id == "ulangi_password") {
		$("#elem_ulangi_password").removeClass("is-filled");
	}
}

function validateElem(id, namaClass)
{
	var classString = $("#"+id).attr("class");
	let result = classString.includes(namaClass, 0);

	if(result == true)
	{
		$("#"+id).removeClass(namaClass);
	}
}