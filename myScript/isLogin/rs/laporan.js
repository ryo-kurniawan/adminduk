document.getElementById("laporan-rs-akta").addEventListener("submit", function (event) {
	event.preventDefault();

});

if($("#nama_ayah").focus())
{
	focusInput("elem_nama_ayah");
}


function mundur(id, elemData1, elemData2, elemData3, elemData4)
{
	if (id == 'btn-cencel-1') {
		$("#"+elemData2).addClass("d-none");
		validateElem(elemData1, 'd-none');
		$("#validFor").val('Data-01');
	}

	if (id == 'btn-cencel-2') {
		$("#"+elemData3).addClass("d-none");
		validateElem(elemData2, 'd-none');
		$("#validFor").val('Data-02');
	}

	if (id == 'btn-cencel-3') {
		$("#"+elemData4).addClass("d-none");
		validateElem(elemData3, 'd-none');
		$("#validFor").val('Data-03');
	}
}

function proses(id, elemData1, elemData2, elemData3, elemData4)
{
	if(id == "btn-text-0")
	{
		// Data Ayah
		var formData = new FormData($('form')[0]);
    
		formData.append('validFor', $("#validFor").val());
		formData.append('nama_ayah', $("#nama_ayah").val());
		formData.append('nik_ayah', $("#nik_ayah").val());

		var link 		= "prosesKirimLaporan";
		var elemNama	= "elem_nama_ayah";
		var inputNama	= "nama_ayah";
		var elemNik		= "elem_nik_ayah";
		var inputNik	= "nik_ayah";
		var messNama	= "mess_nama_ayah";
		var messNik		= "mess_nik_ayah";
	}


	

	if(id == "btn-text-1")
	{
		// Data Ibu
		
		var formData = new FormData($('form')[0]);
    
		formData.append('validFor', $("#validFor").val());
		formData.append('nama_ibu', $("#nama_ibu").val());
		formData.append('nik_ibu', $("#nik_ibu").val());

		var link 		= "prosesKirimLaporan";
		var elemNama	= "elem_nama_ibu";
		var inputNama	= "nama_ibu";
		var elemNik		= "elem_nik_ibu";
		var inputNik	= "nik_ibu";
		var messNama	= "mess_nama_ibu";
		var messNik		= "mess_nik_ibu";
	}

	if(id == "btn-text-2")
	{
		
		var formData = new FormData($('form')[0]);

		// Data Anak
		formData.append('validFor', $("#validFor").val());
		formData.append('nama_anak', $("#nama_anak").val());
		formData.append('tempat_lahir_anak', $("#tempat_lahir_anak").val());
		formData.append('tgl_lahir_anak', $("#tgl_lahir_anak").val());

		var link 			= "prosesKirimLaporan";
		var elemNama		= "elem_nama_anak";
		var inputNama		= "nama_anak";
		var elemTmptLahir	= "elem_tempat_lahir_anak";
		var inputTmptLahir	= "tempat_lahir_anak";
		var elemTglLahir	= "elem_tgl_lahir_anak";
		var inputTglLahir	= "tgl_lahir_anak";

		var messNama		= "mess_nama_anak";
		var messTmptLahir	= "mess_tempat_lahir_anak";
		var messTglLahir	= "mess_tgl_lahir_anak";
	}

	if(id == 'btn-text-3')
	{
		var formData = new FormData($('form')[0]);

		// Data Ayah
		formData.append('nama_ayah', $("#nama_ayah").val());
		formData.append('nik_ayah', $("#nik_ayah").val());

		// Data Ibu
		formData.append('nama_ibu', $("#nama_ibu").val());
		formData.append('nik_ibu', $("#nik_ibu").val());

		// Data Anak
		formData.append('nama_anak', $("#nama_anak").val());
		formData.append('tempat_lahir_anak', $("#tempat_lahir_anak").val());
		formData.append('tgl_lahir_anak', $("#tgl_lahir_anak").val());
    
		// Data berkas
		formData.append('validFor', $("#validFor").val());
		formData.append('no_kk', $("#no_kk").val());
		formData.append('file_kk', $('#file_kk').prop('files')[0]);
		formData.append('file_ktp_ayah', $('#file_ktp_ayah').prop('files')[0]);
		formData.append('file_ktp_ibu', $('#file_ktp_ibu').prop('files')[0]);

		var link 				= "tes";
		var inputNoKK			= "no_kk";
		var inputFileKK			= "file_kk";
		var inputFileKtpAyah	= "file_ktp_ayah";
		var inputFileKtpIbu		= "file_ktp_ibu";

		var messNoKK			= "mess_no_kk";
		var messFileKK			= "mess_file_kk";
		var messFileKtpAyah		= "mess_file_ktp_ayah";
		var messFileKtpIbu		= "mess_file_ktp_ibu";
	}



	$.ajax({
			url: base_url() + "rs/permohonan/"+link,
			type: 'post',
			dataType: 'json',
			cache: false,
			processData : false,
			contentType : false,   
			data: formData,
			success: function(res)
			{
				if (res.proccess == "error") {
					Swal.fire("Data Tidak Valid!", res.message, "error");

					if (res.validFor == 'Data-01' || res.validFor == 'Data-02') {

						if (res.mess_nama != "") {					
						
							validateElem(elemNama, 'is-valid');
							focusInput(inputNama);
		
							$("#"+elemNama).addClass("is-invalid");
							
						}
						else
						{
							validateElem(elemNama, 'is-invalid');
		
							$("#"+elemNama).addClass("is-valid");
						}
		
						if (res.mess_nik != "") {
							validateElem(elemNik, 'is-valid');
							focusInput(inputNik);
							
							$("#"+elemNik).addClass("is-invalid");
						}
						else
						{
							validateElem(elemNik, 'is-invalid');
		
							$("#"+elemNik).addClass("is-valid");
						}

						$("#"+messNama).html(res.mess_nama);
						$("#"+messNik).html(res.mess_nik);
					}

					if (res.validFor == 'Data-03') {
						
						// feedback error form nama
						if (res.mess_nama != "") {					
						
							validateElem(elemNama, 'is-valid');
							focusInput(inputNama);
		
							$("#"+elemNama).addClass("is-invalid");
						}
						else
						{
							validateElem(elemNama, 'is-invalid');
		
							$("#"+elemNama).addClass("is-valid");
						}
						// -----------------------------------------

						
						// feedback error form tempat lahir
						if (res.mess_tempat_lahir != "") {					
						
							validateElem(elemTmptLahir, 'is-valid');
							focusInput(inputTmptLahir);
		
							$("#"+elemTmptLahir).addClass("is-invalid");
						}
						else
						{
							validateElem(elemTmptLahir, 'is-invalid');
		
							$("#"+elemTmptLahir).addClass("is-valid");
						}
						// ----------------------------------------------


						// feedback error form taggal lahir
						if (res.mess_tgl_lahir != "") {					
						
							validateElem(elemTglLahir, 'is-valid');
							focusInput(inputTglLahir);
		
							$("#"+elemTglLahir).addClass("is-invalid");
						}
						else
						{
							validateElem(elemTglLahir, 'is-invalid');
		
							$("#"+elemTglLahir).addClass("is-valid");
						}
						// ------------------------------------------

						$("#"+messNama).html(res.mess_nama);
						$("#"+messTmptLahir).html(res.mess_tempat_lahir);
						$("#"+messTglLahir).html(res.mess_tgl_lahir);
					}

					if (res.validFor == 'Data-04') {
						
					}
				}
				else if (res.proccess == "success") {

					Swal.fire("Data Valid!", res.message, "success");

					if (res.validFor == 'Data-01' || res.validFor == 'Data-02') {
						validateElem(elemNama, 'is-invalid');
						$("#"+elemNama).addClass("is-valid");

						validateElem(elemNik, 'is-invalid');
						$("#"+elemNik).addClass("is-valid");

						if(res.validFor == "Data-01")
						{
							$("#"+elemData1).addClass("d-none");
							validateElem(elemData2, 'd-none');
							$("#validFor").val('Data-02');

						}

						if(res.validFor == "Data-02")
						{
							$("#"+elemData2).addClass("d-none");
							validateElem(elemData3, 'd-none');
							$("#validFor").val('Data-03');
						}

						$("#"+messNama).html(res.mess_nama);
						$("#"+messNik).html(res.mess_nik);
					}

					if (res.validFor == 'Data-03') {

						validateElem(elemNama, 'is-invalid');
						$("#"+elemNama).addClass("is-valid");

						validateElem(elemTmptLahir, 'is-invalid');
						$("#"+elemTmptLahir).addClass("is-valid");

						validateElem(elemTglLahir, 'is-invalid');
						$("#"+elemTglLahir).addClass("is-valid");

						$("#"+elemData3).addClass("d-none");
						validateElem(elemData4, 'd-none');

						$("#"+messNama).html(res.mess_nama);
						$("#"+messTmptLahir).html(res.mess_tempat_lahir);
						$("#"+messTglLahir).html(res.mess_tgl_lahir);

						$("#validFor").val('Data-04');
					}
				}
				console.log(res);
				
			},
			error: function(e) {
				console.log(e.responseText);
			}
		});


	// if(id == "btn-text-4")
	// {
	// 	var formData = new FormData($('form')[0]);
    
	// 	formData.append('no_kk', $("#no_kk").val());
	// 	// formData.append('file_kk', $('#file_kk').prop('files')[0]);
	// 	// formData.append('file_ktp_ayah', $('#file_ktp_ayah').prop('files')[0]);
	// 	formData.append('file_ktp_ibu', $('#file_ktp_ibu').prop('files')[0]);
    
    
	// 	$.ajax({
	// 		url: base_url() + "rs/permohonan/prosesKirimLaporan",
	// 		type: 'post',
	// 		dataType: 'json',
	// 		cache: false,
	// 		processData : false,
	// 		contentType : false,   
	// 		data: formData,
	// 		success: function(response)
	// 		{
	// 			console.log(response);
				
	// 		},
	// 		error: function(e) {
	// 			console.log(e.responseText);
	// 		}
	// 	});

	// }

	
}

// Form sendLinkEmail onsubmit
function validateForm(formData, dataParam) {


	$.ajax({
		url: base_url() + "rs/permohonan/"+dataParam.link,
		type: "post",
		data: formData,
		dataType: "json",
		cache: false,
		beforeSend: function () {
			var btn = document.getElementById(dataParam.id);
			btn.setAttribute("disabled", "true");

			$("#"+dataParam.id).html(
				'<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
			);
		},
		success: function (res) {

			if (res.proccess == "error") {
				Swal.fire("Data Tidak Valid!", res.message, "error");

				if (data.validFor == 'Data-03') {

					// feedback error form nama
					if (res.mess_nama != "") {					
					
						validateElem(dataParam.elemNama, 'is-valid');
						focusInput(dataParam.inputNama);
	
						$("#"+dataParam.elemNama).addClass("is-invalid");
					}
					else
					{
						validateElem(dataParam.elemNama, 'is-invalid');
	
						$("#"+dataParam.elemNama).addClass("is-valid");
					}
					// -----------------------------------------

					
					// feedback error form tempat lahir
					if (res.mess_tempat_lahir != "") {					
					
						validateElem(dataParam.elemTmptLahir, 'is-valid');
						focusInput(dataParam.inputTmptLahir);
	
						$("#"+dataParam.elemTmptLahir).addClass("is-invalid");
					}
					else
					{
						validateElem(dataParam.elemTmptLahir, 'is-invalid');
	
						$("#"+dataParam.elemTmptLahir).addClass("is-valid");
					}
					// ----------------------------------------------


					// feedback error form taggal lahir
					if (res.mess_tgl_lahir != "") {					
					
						validateElem(dataParam.elemTglLahir, 'is-valid');
						focusInput(dataParam.inputTglLahir);
	
						$("#"+dataParam.elemTglLahir).addClass("is-invalid");
					}
					else
					{
						validateElem(dataParam.elemTglLahir, 'is-invalid');
	
						$("#"+dataParam.elemTglLahir).addClass("is-valid");
					}
					// ------------------------------------------

					$("#"+dataParam.messNama).html(res.mess_nama);
					$("#"+dataParam.messTmptLahir).html(res.mess_tempat_lahir);
					$("#"+dataParam.messTglLahir).html(res.mess_tgl_lahir);

				}
				else {

					if (res.mess_nama != "") {					
					
						validateElem(dataParam.elemNama, 'is-valid');
						focusInput(dataParam.inputNama);
	
						$("#"+dataParam.elemNama).addClass("is-invalid");
						
					}
					else
					{
						validateElem(dataParam.elemNama, 'is-invalid');
	
						$("#"+dataParam.elemNama).addClass("is-valid");
					}
	
					if (res.mess_nik != "") {
						validateElem(dataParam.elemNik, 'is-valid');
						focusInput(dataParam.inputNik);
						
						$("#"+dataParam.elemNik).addClass("is-invalid");
					}
					else
					{
						validateElem(dataParam.elemNik, 'is-invalid');
	
						$("#"+dataParam.elemNik).addClass("is-valid");
					}

					$("#"+dataParam.messNama).html(res.mess_nama);
					$("#"+dataParam.messNik).html(res.mess_nik);

				}

			} else if (res.proccess == "success") {

				Swal.fire("Data Valid!", res.message, "success");

				if (data.validFor == 'Data-03') {
					$("#"+dataParam.elemData3).addClass("d-none");
					validateElem(dataParam.elemData4, 'd-none');

					$("#"+dataParam.messNama).html(res.mess_nama);
					$("#"+dataParam.messTmptLahir).html(res.mess_tempat_lahir);
					$("#"+dataParam.messTglLahir).html(res.mess_tgl_lahir);
				}
				else {
					validateElem(dataParam.elemNama, 'is-invalid');
					$("#"+dataParam.elemNama).addClass("is-valid");

					validateElem(dataParam.elemNik, 'is-invalid');
					$("#"+dataParam.elemNik).addClass("is-valid");

					if(data.validFor == "Data-01")
					{
						$("#"+dataParam.elemData1).addClass("d-none");
						validateElem(dataParam.elemData2, 'd-none');

					}

					if(data.validFor == "Data-02")
					{
						$("#"+dataParam.elemData2).addClass("d-none");
						validateElem(dataParam.elemData3, 'd-none');
					}

					$("#"+dataParam.messNama).html(res.mess_nama);
					$("#"+dataParam.messNik).html(res.mess_nik);
				}
			}

			console.log(res);

			console.log(data);
		},
		complete: function () {
			var btn = document.getElementById(dataParam.id);
			btn.removeAttribute("disabled");

			$("#"+dataParam.id).html("Lanjut Proses");
		},
		error: function (e) {
			console.log(e.responseText);
		},
	});

};
// ---------------------------------------------------------------------

