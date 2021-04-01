<template>
	<div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 text-center">
				<h6><label for="titulo">Título</label></h6>
				<input v-model="obj.title" id="titulo" type="text" class="form-control">
				<br>
				<h6><label for="contenido">Contenido</label></h6>
				<ckeditor v-model="obj.content" id="contenido" :config="editorConfig"></ckeditor>
				<br>
				<h6><label for="contenido">Archivos: Imágenes y/o documentos</label></h6>
				<file-agent @archivosubido="archivosubido" tipos="doc_pdf_img" :maxFiles="10"></file-agent>
				<div class="row d-flex justify-content-center">
					<div class="col-md-3 col-sm-6" v-for="(item, index) in files_in_view" :key="index">
						<div class="card border">
							<div class="card-body">
								<i v-if="item.extension=='doc' || item.extension=='docx'" class="fas fa-file-word fa-2x text-info"></i>
								<i v-else-if="item.extension=='pdf'" class="fas fa-file-pdf fa-2x text-danger"></i>
								<img v-else :src="folderimg[index]+item.name" class="img-fluid" alt="">
							</div>
							<div class="card-footer bg-secsondary">
								<a :href="folderimg[index]+item.name" target="_blank">
									<i class="fas fa-eye text-success"></i>
								</a>
								<a v-if="folderimg[index]==routeimg" @click="eliminar(index)" style="cursor: pointer">
									<i class="fas fa-trash text-danger"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<h6 class="pt-2"><label for="url_redirect">Ver más en:</label></h6>
					</div>
					<div class="col-md-8 col-sm-12">
						<input v-model="obj.url_redirect" type="text" class="form-control" placeholder="Dirección web (Opcional)" id="url_redirect">
					</div>
					<div class="col-md-4 col-sm-12">
						<h6 class="pt-2"><label for="url_youtube">Link de Youtube:</label></h6>
					</div>
					<div class="col-md-8 col-sm-12">
						<input v-model="obj.url_youtube" type="text" class="form-control" placeholder="Link de video en Youtube (Opcional)" id="url_youtube">
					</div>
				</div>
				<br>
				<div class="row text-left">
					<div class="col-sm-12 col-md-8">
						<h6><label>Estado</label></h6>
						<div class="form-check">
							<input v-model="obj.state" class="form-check-input" type="radio" name="est" id="est_1" value="A" checked>
							<label class="form-check-label pl-2" for="est_1">Publicar ahora</label>
							<br>
							<input v-model="obj.state" class="form-check-input" type="radio" name="est" id="est_2" value="P">
							<label class="form-check-label pl-2" for="est_2">Programar publicación</label>
							<section v-if="obj.state == 'P'">
								<label for="id_fecha">Fecha</label>
								<input v-model="obj.date" id="id_fecha" type="date" class="form-control" style="display:inline; max-width:200px; border-radius: 0px;">
								<br>
								<label for="id_hora">Hora &nbsp &nbsp</label>
								<vue-timepicker v-model="obj.time" id="id_hora" format="hh:mm A" input-width="200px"></vue-timepicker>
							</section>
							<br>
							<input v-model="obj.state" class="form-check-input" type="radio" name="est" id="est_3" value="S">
							<label class="form-check-label pl-2" for="est_3">Solo guardar</label>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<h6><label>Categoria</label></h6>
						<div class="form-check">
							<div v-for="(item,index) in listCategories" :key="index" class=" mt-2">
								<input v-model="obj.idcategory" class="form-check-input" type="radio" :id="'categ_'+item.idcategory" :value="item.idcategory" :checked="(index === 0)? true: false">
								<label class="form-check-label pl-2" :for="'categ_'+item.idcategory">{{item.name}}</label>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="form-check">
					<label class="form-check-label">
						<input v-model="obj.priority" class="form-check-input" type="checkbox">
						<span class="form-check-sign">Marcar publicación como prioritaria</span>
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input v-model="obj.slide_active" class="form-check-input" type="checkbox">
						<span class="form-check-sign">Poner publicación en slide</span>
					</label>
				</div>
				<br>
				<!--
				<button type="button" class="btn btn-info">Vista previa</button>
				&nbsp&nbsp&nbsp&nbsp&nbsp
				-->
				<button @click="guardar" :disabled="enable_save" type="button" class="btn btn-success">Guardar cambios</button>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</template>

<script>
// Main JS (in UMD format)
import VueTimepicker from 'vue2-timepicker'
// CSS
import 'vue2-timepicker/dist/VueTimepicker.css'
var moment = require('moment'); // require
moment().format();
export default {
	props: ['publication'],
	components: {
		VueTimepicker
	},
	data() {
		return {
			routelist: '/panel/content_manager',
			routeimg: '/img/',
			routeimgtemp: '/temp/',
			editorConfig: {
				height: 150,
				removeButtons: 'About'
			},
			obj: {
				title: '',
				content: '',
				state: 'A',
				idcategory: 1,
				priority: false,
				slide_active: false,
				date: '',
				time: '',
				files: [], //archivos que se han subido ya
				files_uploading: [], //archivos que se suben en el momento
				url_redirect: '',
				url_youtube: '',
			},
			files_in_view: [],
			folderimg: [],
			enable_save: false,
			listCategories: null
		}
	},
	methods: {
		eliminar: function(index){
			if (this.folderimg[index] == this.routeimg)
				this.obj.files.splice(index, 1);
			else if (this.folderimg[index] == this.routeimgtemp)
				this.obj.files_uploading.splice(index, 1);
			this.actualizar_files();
		},
		archivosubido: function({valor, fileRecords}){
			//console.log(fileRecords.length);
			var files = [];
			fileRecords.forEach((item, i) => {
				files.push({
					extension: item.ext,
					name: item.upload.data,
					size: item.sizeText
				});
			});
			this.enable_save = valor;
			this.obj.files_uploading = files;
			if (valor == false){
				this.actualizar_files();
			}
		},
		actualizar_files: function(){
			//console.log(this.obj.files);
			//console.log(this.obj.files_uploading);
			this.folderimg = [];
			this.files_in_view = this.obj.files.concat(this.obj.files_uploading);
			this.obj.files.forEach((item, i) => {
				this.folderimg.push(this.routeimg);
			});
			this.obj.files_uploading.forEach((item, i) => {
				this.folderimg.push(this.routeimgtemp);
			});
			//console.log(this.folderimg);
		},
		guardar: function(){
			if (this.obj.title.length == 0){
				this._mensaje_error('Por favor, ingrese el título de la publicación');
				return;
			}
			if (this.obj.url_redirect.length > 100){
				this._mensaje_error('El campo "Ver más en" es muy largo, por favor pase el link por un acortador');
				return;
			}
			var newpublication = (this.obj.idpublication == null);
			var URLactual = window.location.href;
			var that = this;
			this._axios(URLactual, { obj:this.obj }, function(res){
				res = res.data;
				if (res.success){
					if (newpublication)
						that._mensaje_exito("Se ha registrado exitosamente");
					else
						that._mensaje_exito("La publicación se ha modificado correctamente");
					location.href = that.routelist;
				}
				else{
					that._mensaje_error(res.message);
				}
			});
		},
		showCategories() {
      var that = this
      this._axios(
        '/panel/content_manager-categories/show',
        null,
        function (params) {
          let res = params.data
          if (res.success) {
            that.listCategories = res.data
			//console.log(that.listCategories);
          }else{
            that._mensaje_error(res.message)
          }
        }
      )
    },
	},
	mounted() {
		this.showCategories()
		if (this.publication !== "null"){
			this.obj = JSON.parse(this.publication);
			this.obj.files = JSON.parse(this.obj.files);
			this.obj.files_uploading = [];
			var publication_date = moment(this.obj.publication_date, "DD/MM/YYYY hh:mm a");
			this.obj.date = publication_date.format('YYYY-MM-DD');
			this.obj.time = publication_date.format('hh:mm A');
		}
		else {
			this.obj.date = moment().format('YYYY-MM-DD');
			this.obj.time = moment().format('hh:mm A');
		}
		this.actualizar_files();
		//console.log(this.obj);

	}
}
</script>
