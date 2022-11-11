// Form sendLinkEmail onsubmit
document
	.getElementById("sendLinkEmail")
	.addEventListener("submit", function (event) {
		event.preventDefault();

		$.ajax({
			url: base_url() + "auth/aksi_lupaPassword",
			type: "post",
			data: { email: $("#email").val() },
			dataType: "json",
			cache: false,
			beforeSend: function () {
				var btn = document.getElementById("btnSendLink");
				btn.setAttribute("disabled", "true");

				$("#btnSendLink").html(
					'<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
				);
			},
			success: function (res) {
				if (res.proccess == "error") {
					Swal.fire("Gagal!", res.message, "error");

					if (res.err_email != "") {
						$("#elem_email").addClass("is-invalid");
					}
				} else if (res.proccess == "success") {
					Swal.fire("Berhasil!", res.message, "success");
					$("#elem_email").removeClass("is-invalid");
					$("#elem_email").addClass("is-valid");
				}

				$("#err_message_email").html(res.err_email);
				$("#succ_message_email").html(res.succ_email);
				focusInput("email");
			},
			complete: function () {
				var btn = document.getElementById("btnSendLink");
				btn.removeAttribute("disabled");

				$("#btnSendLink").html("Kirim Link Reset Password");
			},
			error: function (e) {
				console.log(e.responseText);
			},
		});
	});
// ---------------------------------------------------------------------

// Focus Input Email
$("#email").focus();
