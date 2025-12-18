<?php $this->layout = 'default_familia' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
	<h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
		Cargue Plan de cuidado <br>
		<span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
			Primario Familiar
		</span>
	</h1>
	<p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
		Carga el Plan de cuidado firmado en formato PDF.</p>
</div>


<?php

echo $this->Form->create('Observacion',  [
	'type' => 'file',
	'novalidate' => 'novalidate',
	'class' => 'space-y-6',
]);

// se utiliza para llamar el id responsable donde sea necesario
$idAux = isset($this->request->data['Observacion']['familia_id']) ? $this->request->data['Observacion']['familia_id'] : '';
echo $this->Form->hidden('id');
echo $this->Form->hidden('familia_id');
echo $this->Form->hidden('responsable_id');

// Mostrar errores generales del modelo
if (isset($validationErrors['Observacion']) && !empty($validationErrors['Observacion'])) {
	echo '<div class="text-red-600 text-md mt-1 font-semibold">';
	foreach ($validationErrors['Observacion'] as $field => $errors) {
		foreach ((array)$errors as $err) {
			echo h($field) . ': ' . h($err) . '<br>';
		}
	}
	echo '</div>';
}
?>


<div class="max-w-6xl mx-auto p-18 mt-8">
	<div class="bg-white shadow-2xl rounded-xl p-12">
		<!-- Header -->
		<div class="flex items-center mb-4">
			<i class="fa-solid fa-file-waveform text-teal-600 text-3xl bg-teal-100 p-4 rounded-lg"></i>
			<div class="ml-4">
				<h1 class="text-xl font-semibold">Cargue de Plan de Cuidado</h1>
				<p class="text-gray-500">Anexe el archivo comprimido correspondiente.</p>
			</div>

		</div>
		<div class="grid grid-cols-1 md:grid-cols-2">

			<div class="col-span-2 text-md font-semibold my-6">
				<div class="flex items-center mb-4">
					<span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
					<label for="proactividad_id" class="font-semibold">Plan de Cuidado Firmado</label>
					<p class="text-red-600">*</p>

				</div>

				<div class="flex flex-col gap-2">
					<label for="familiograma" class="block text-gray-700 font-semibold text-sm mb-2">
						Adjuntar archivo con 3MB (pdf, jpg, png , jpeg)
					</label>
					<div class="relative w-full">
						<?php
						echo $this->Form->input('plancuidado', [
							'label' => false,
							'type' => 'file',
							'class' => 'block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-blue-400 p-3 file:mr-4 file:py-6 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100',
							'onchange' => 'validarTamanioSoporte()',
							'id' => 'ProcesoregistroAnexo',
							'error' => false
						]);
						if (!empty($this->Form->error('plancuidado'))) {
							echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('plancuidado') . '</div>';
						}

						echo $this->Form->input('dirplancuidado', array('type' => 'hidden'));
						?>
					</div>
					<span class="text-xs text-gray-500 mt-1">
						NOTA:
						* Cargar en archivo con extension "pdf", "jpg", "png", "jpeg" <br>
						* Familiograma Diligenciado <br>
						* Nomenclatura recomendada IDFAMILIA_APELLIDOS <br>
						El nombre del archivo no debe tener tildes o diéresis.
					</span>
				</div>
				<div class="relative w-full mt-4">
					<?php if (!empty($this->request->data['Observacion']['plancuidado'])): ?>
						<div class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-blue-400 p-3 file:mr-4 file:py-6 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
							Archivo actual:
							<a href="<?php echo $this->webroot . 'files/Observacion/plancuidado/' . $this->request->data['Observacion']['dirplancuidado'] . '/' . $this->request->data['Observacion']['plancuidado']; ?>" target="_blank" class="text-blue-600 underline ml-2">
								<?php echo $this->request->data['Observacion']['plancuidado']; ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="pt-2 flex gap-4">
				<!-- Botón -->
				<div class="w-full p-2">
					<button name="btn" value="Guardar Plan" type="submit" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
								<path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
								<path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
								<path d="M7 3v4a1 1 0 0 0 1 1h7" />
							</svg>
						</span>
						Guardar Plan
					</button>
				</div>
				<div class="w-full p-2">
					<button onclick="preventBackNavigation()" name="btn" value="volver" type="button" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
						<span>
							<i class="fa-solid fa-person-walking-arrow-loop-left "></i>
						</span>
						Volver a Familia
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function preventBackNavigation() {
		if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
			window.location.href = '<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'view', $idAux]); ?>';
		}
	}

	async function validarTamanioSoporte() {
		const auxFile = document.getElementById('ProcesoregistroAnexo');
		if (!auxFile || !auxFile.files || !auxFile.files[0]) return;

		const file = auxFile.files[0];
		const maxBytes = 3 * 1024 * 1024; // objetivo: 3MB

		// Si no es imagen, solo validamos tamaño
		if (!file.type.startsWith('image/')) {
			if (file.size > maxBytes) {
				alert('El archivo debe ser menor a 3 MB o suba una imagen para comprimir automáticamente.');
				auxFile.value = '';
			}
			return;
		}

		// Si ya cumple el tamaño, no hacer nada
		if (file.size <= maxBytes) return;

		// Comprimir imagen en cliente
		try {
			const dataUrl = await new Promise((resolve, reject) => {
				const reader = new FileReader();
				reader.onload = e => resolve(e.target.result);
				reader.onerror = reject;
				reader.readAsDataURL(file);
			});

			const img = await new Promise((resolve, reject) => {
				const i = new Image();
				i.onload = () => resolve(i);
				i.onerror = reject;
				i.src = dataUrl;
			});

			const canvas = document.createElement('canvas');
			const ctx = canvas.getContext('2d');

			// Inicializar tamaño original
			let width = img.width;
			let height = img.height;
			canvas.width = width;
			canvas.height = height;
			ctx.drawImage(img, 0, 0, width, height);

			// Convertiremos a JPEG para poder controlar la calidad
			const outputType = 'image/jpeg';
			let quality = 0.9;
			let blob = await new Promise(res => canvas.toBlob(res, outputType, quality));

			// Reducir calidad iterativamente
			while (blob && blob.size > maxBytes && quality > 0.2) {
				quality -= 0.1;
				blob = await new Promise(res => canvas.toBlob(res, outputType, quality));
			}

			// Si aún demasiado grande, reducir dimensiones progresivamente
			while (blob && blob.size > maxBytes && (width > 800 || height > 800)) {
				width = Math.round(width * 0.9);
				height = Math.round(height * 0.9);
				canvas.width = width;
				canvas.height = height;
				ctx.drawImage(img, 0, 0, width, height);
				quality = Math.max(quality - 0.05, 0.1);
				blob = await new Promise(res => canvas.toBlob(res, outputType, quality));
			}

			if (!blob || blob.size > maxBytes) {
				alert('No fue posible reducir el tamaño por debajo de 3 MB. Intente con otra imagen o reduzca la resolución manualmente.');
				auxFile.value = '';
				return;
			}

			// Crear nuevo File y reemplazar el input
			const compressedFile = new File([blob], file.name.replace(/\.(png|jpg|jpeg|gif)$/i, '.jpg'), {
				type: outputType,
				lastModified: Date.now()
			});

			const dataTransfer = new DataTransfer();
			dataTransfer.items.add(compressedFile);
			auxFile.files = dataTransfer.files;

		} catch (err) {
			console.error(err);
			alert('Error al procesar la imagen. Intente con otro archivo.');
			auxFile.value = '';
		}
	}
</script>