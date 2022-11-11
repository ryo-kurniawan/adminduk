// Form resetPassword onsubmit
document
	.getElementById("resetPassword")
	.addEventListener("submit", function (event) {
		event.preventDefault();

		var data = {
			hash: $("#hash").val(),
			newPass: $("#password").val(),
			repeatPass: $("#ulangi_password").val(),
		};

		$.ajax({
			url: base_url() + "auth/prosesResetPassword",
			type: "post",
			data: data,
			dataType: "json",
			cache: false,
			beforeSend: function () {
				var btn = document.getElementById("btnResetPassword");
				btn.setAttribute("disabled", "true");

				$("#btnResetPassword").html(
					'<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
				);
			},
			success: function (res) {
				if (res.proccess == "error") {
					Swal.fire("Gagal!", res.message, "error");

					if (res.err_newPass != "") {
						$("#elem_pass").addClass("is-invalid");
					} else {
						$("#elem_pass").removeClass("is-invalid");
						$("#elem_pass").addClass("is-valid");
					}

					if (res.err_repeatPass != "") {
						$("#elem_ulangi_password").addClass("is-invalid");
					} else {
						$("#elem_ulangi_password").removeClass("is-invalid");
						$("#elem_ulangi_password").addClass("is-valid");
					}

					if(res.err_newPass == "" && res.err_repeatPass == "")
					{
						$("#elem_ulangi_password").removeClass("is-valid");
						$("#elem_ulangi_password").addClass("is-invalid");

						$("#elem_pass").removeClass("is-valid");
						$("#elem_pass").addClass("is-invalid");
					}

				} else if (res.proccess == "success") {
					Swal.fire("Berhasil!", res.message, "success");

					$("#elem_pass").removeClass("is-invalid");
					$("#elem_pass").addClass("is-valid");

					$("#elem_ulangi_password").removeClass("is-invalid");
					$("#elem_ulangi_password").addClass("is-valid");
				}

				$("#err_message_pass").html(res.err_newPass);
				$("#err_message_ulang_pass").html(res.err_repeatPass);
				console.log(res);
			},
			complete: function () {
				var btn = document.getElementById("btnResetPassword");
				btn.removeAttribute("disabled");

				$("#btnResetPassword").html("RESET PASSWORD");
			},
			error: function (e) {
				console.log(e);
			},
		});
	});

$("#password").focus();
