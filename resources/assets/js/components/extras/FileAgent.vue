<template>
	<div>
		<!--grid  list-->
		<VueFileAgent
		ref="vueFileAgent"
		:theme="'grid'"
		:multiple="true"
		:deletable="true"
		:meta="true"
		:accept="tipos_"
		:maxSize="'10MB'"
		:maxFiles="maxFiles"
		:helpText="textoayuda"
		:uploadUrl="uploadUrl"
		@select="filesSelected($event)"
		@delete="fileDeleted($event)"
		v-model="fileRecords"></VueFileAgent>
		<div class="text-center">
			<loader :mostrar="mostrarLoader" :texto="texto"></loader>
		</div>
		<br>
	</div>
</template>

<script>
export default {
	props: {
		tipos: String,
		maxFiles: Number,
	},
	data() {
		return {
			textoayuda: '',
			tipos_: '',
			fileRecords: [],
			fileRecordsForUpload: [],
			uploadUrl: '',
			uploadHeaders: {
				//'csrf-token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
				'X-Test-Header': 'vue-file-agent',
				//'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
			},
			varRepeticiones: null,
			mostrarLoader: false,
			texto: '',
		}
	},
	methods: {
		reset: function(){
			this.fileRecords = [];
		},
		invocar: function(valor){
			console.log(this.fileRecords);
			this.mostrarLoader = valor;
			this.$emit('archivosubido', {valor: valor, fileRecords: this.fileRecords});
		},
		funccionn: function(that){
			//console.log(that.fileRecords);
			//true=ya subió, false=todavía
			var bul = true;
			that.fileRecords.forEach((item)=>{
				bul = bul && (item.upload.data!=null);
			});
			if (bul){
				this.invocar(false);
				clearInterval(this.varRepeticiones);
			}
		},
		funcionnn: function() {
			this.invocar(true);
			var that = this;
			this.varRepeticiones = setInterval(this.funccionn, 500, that);
		},
		filesSelected: function(fileRecordsNewlySelected) {
			this.funcionnn();
			var validFileRecords = fileRecordsNewlySelected.filter((fileRecord) => !fileRecord.error);
			this.fileRecordsForUpload = this.fileRecordsForUpload.concat(validFileRecords);
		},
		fileDeleted: function(fileRecord) {
			this.funcionnn();
			var i = this.fileRecordsForUpload.indexOf(fileRecord);
			if (i !== -1) {
				this.fileRecordsForUpload.splice(i, 1);
			} else {
				this.deleteUploadedFile(fileRecord);
			}
		},
		uploadFiles: function() {
			this.$refs.vueFileAgent.upload(this.uploadUrl, this.uploadHeaders, this.fileRecordsForUpload);
			this.fileRecordsForUpload = [];
		},
		deleteUploadedFile: function(fileRecord) {
			this.$refs.vueFileAgent.deleteUpload(this.uploadUrl, this.uploadHeaders, fileRecord);
		}
	},
	mounted() {
		//console.log('this');
		//console.log(this.tipos);
		//console.log(this.tipos);
		this.texto = 'Su archivo se está procesando, espere por favor';
		this.uploadUrl = '/fileupload';
		if (this.tipos == undefined){
			this.tipos_ = 'image/*';
			this.textoayuda = 'Arrastre su imagen o haga click para seleccionar';
		}
		if (this.tipos == 'doc_pdf_img'){
			this.tipos_ = 'image/*,.pdf,.doc,.docx,';
			this.textoayuda = 'Arrastre su imagen o haga click para seleccionar';
		}
		if (this.maxFiles == undefined){
			this.maxFiles = 10;
		}
		else{
			this.maxFiles = parseInt(this.maxFiles);
		}
		//console.log(this.tipos);
		/*
		else if (this.tipos == 'imgdoc'){
			this.tipos_ = 'image/*,.pdf,.doc,.docx,.bpm';
			this.uploadUrl = '/mapaprocesosver/subirfoto';
			this.textoayuda = 'Click para seleccionar su archivo pdf, bpm, doc, img, etc';
		}
		*/
		//console.log(this.tipos_);
		//console.log(this.tipos_);
	},
	created: function(){
	},
}
</script>
