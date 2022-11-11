// Focus Input Email
if($("#email").focus())
{
	focusInput("elem_email");
}


// Form sendLinkEmail onsubmit
document.getElementById("login").addEventListener("submit", function (event) {
	event.preventDefault();

	$.ajax({
		url: base_url() + "auth/loginAksi",
		type: "post",
		data: { email: $("#email").val(), password: $("#password").val() },
		dataType: "json",
		cache: false,
		beforeSend: function () {
			var btn = document.getElementById("btnLogin");
			btn.setAttribute("disabled", "true");

			$("#btnLogin").html(
				'<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
			);
		},
		success: function (res) {
			if (res.proccess == "error") {
				Swal.fire("Gagal!", res.message, "error");

				if (res.err_email != '') 
				{
					focusInput("elem_email");
					validateElem('elem_email', 'is-valid');
					// $("#email").focus();

					$("#elem_email").addClass("is-invalid");
				}
				else
				{
					validateElem('elem_email', 'is-invalid');

					$("#elem_email").addClass("is-valid");
				}

				if (res.err_password != "") 
				{
					focusInput("elem_pass");
					validateElem('elem_pass', 'is-valid');
					// $("#password").focus();

					$("#elem_pass").addClass("is-invalid");
				}
				else
				{
					validateElem('elem_pass', 'is-invalid');
					focusInput("elem_pass");
					$("#elem_pass").addClass("is-valid");
				}

				console.log(res.err_email);

			} else if (res.proccess == "success") {
				Swal.fire("Berhasil!", res.message, "success");

				validateElem('elem_email', 'is-invalid');
				$("#elem_email").addClass("is-valid");

				validateElem('elem_pass', 'is-invalid');
				$("#elem_pass").addClass("is-valid");

				window.location.replace(base_url() + "home");
			}

			$("#err_message_email").html(res.err_email);
			$("#err_message_password").html(res.err_password);
		},
		complete: function () {
			var btn = document.getElementById("btnLogin");
			btn.removeAttribute("disabled");

			$("#btnLogin").html("Kirim Link Reset Password");
		},
		error: function (e) {
			console.log(e.responseText);
		},
	});
});
// ---------------------------------------------------------------------
