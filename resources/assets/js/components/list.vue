<template>
  <div>
    <div class="row justify-content-center">
      <div class="col-md-12 table-responsive text-center">
        <button @click="goNew" type="button" class="btn btn-info mb-2">
          Agregar Publicación
        </button>
        <div class="pagination justify-content-center mb-2">
          <a
            href="#"
            @click="select_button(1)"
            class="page-link btn btn-outline-info"
          >
            Primero
          </a>
          <li
            class="page-item"
            v-for="(item, index) in paginas_total"
            style="list-style: none"
            :key="index"
          >
            <a
              href="#"
              @click="select_button(item)"
              :class="
                paginas_actual == index + 1
                  ? 'page-link btn'
                  : 'page-link btn btn-outline-info'
              "

              :style="
                paginas_actual == index + 1
                  ? 'color: white; background-color: #36b9cc;'
                  : ''
              "
            >
              {{ index + 1 }}
            </a>
          </li>
          <a
            href="#"
            @click="select_button(paginas_total)"
            class="page-link btn btn-outline-info"
          >
            Último
          </a>
        </div>
        <table class="table">
          <thead class="text-info">
            <th>Titulo</th>
            <th>Fecha de Publicación</th>
            <th>Categoría</th>
            <th>Estado</th>
            <th class="text-right">Opciones</th>
          </thead>
          <tbody>
            <tr v-for="(item, index) in list" :key="index">
              <td>
                {{ item.title }}
              </td>
              <td>
                {{ item.publication_date }}
              </td>
              <td>
                {{ item.category_name }}
              </td>
              <td>
                {{ item.state_txt }}
              </td>
              <td class="text-right">
                 <i class="fas fa-eye text-warning" style="cursor: pointer"></i>
                 <i @click="editPublication(item.idpublication)" class="fas fa-edit text-success" style="cursor: pointer"></i>
                 <i @click="deletePublication(item.idpublication)" class="fas fa-trash text-danger" style="cursor: pointer"></i>
			  </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="pagination justify-content-center mt-2">
      <a
        href="#"
        @click="select_button(1)"
        class="page-link btn btn-outline-info"
      >
        Primero
      </a>
      <li
        class="page-item"
        v-for="(item, index) in paginas_total"
        style="list-style: none"
        :key="index"
      >
        <a
          href="#"
          @click="select_button(index + 1)"
          :class="
            paginas_actual == index + 1
              ? 'page-link btn'
              : 'page-link btn btn-outline-info'
          "

          :style="
            paginas_actual == index + 1
              ? 'color: white; background-color: #36b9cc;'
              : ''
          "
        >
          {{ index + 1 }}
        </a>
      </li>
      <a
        href="#"
        @click="select_button(paginas_total)"
        class="page-link btn btn-outline-info"
      >
        Último
      </a>
    </div>
    <div>
      <h6>Nº total de páginas: {{ paginas_total }}</h6>
      <a class="text-dark" @click="verotraspags = !verotraspags"
        style="cursor: pointer"
        >Click acá para ir a una página en específico</a
      >
      <div :hidden="verotraspags" class="pagination justify-content-center">
        <li
          class="page-item"
          @click="select_button(item)"
          v-for="(item, index) in paginas_total"
          style="list-style: none"
          :key="index"
        >
          <a
            href="#"
			:class="
              paginas_actual == index + 1
                ? 'page-link btn'
                : 'page-link btn btn-outline-info'
            "
            :style="
              paginas_actual == index + 1
                ? 'color: white; background-color: #36b9cc;'
                : ''
            "
          >
            {{ index + 1 }}
          </a>
        </li>
      </div>
    </div>
  </div>
</template>

<script>
var moment = require('moment'); // require
export default {
  name: 'content-manager-list',
	data() {
		return {
			paginas_total: 0,
			perpage:7,
			paginas_actual: 1,
			verotraspags: true,
			list: [],
		}
	},
	methods: {
		select_button: function(index){
			//console.log(index);
			this.paginas_actual = index;
			this.load_publications(index);
		},
		goNew: function(){
			location.href = "/panel/content_manager/new"
		},
		editPublication: function(idpublication){
			//console.log(this._getUrl() + idpublication);
			location.href = this._getUrl() + idpublication;
		},
		deletePublication: function(idpublication){
			var that = this;
			var message = '¿Está seguro que desea eliminar la publicación?';
			this._swal_pregunta(message, () => {
				var thet = that;
				that._axios(that._getUrl() + 'delete/'+idpublication, { }, function(res){
					res = res.data;
					if (res.success){
						thet.load_publications(1);
						thet._mensaje_exito('La publicación se ha borrado correctamente');
					}
					else{
						thet._mensaje_error(res.message);
					}
				});
			});
		},
		normalize_hours: function(){
			this.list.forEach((item, i) => {
				var publication_date = item.publication_date;
				publication_date = moment(publication_date, "YYYY-MM-DD hh:mm:ss");
				publication_date = publication_date.format('YYYY-MM-DD hh:mm A');
				this.list[i].publication_date = publication_date;
			});

		},
		load_publications: function(index){
			//console.log(window.location);
			var url = this._getUrl() + 'page/'+index;
			var that = this;
			this._axios(url, { obj:this.obj }, function(res){
				res = res.data;
				if (res.success){
					that.paginas_total = res.data.publications.last_page;
					that.list = res.data.publications.data;
					that.normalize_hours();
				}
				else{
					that._mensaje_error(res.message);
				}
			});
		},
	},
	mounted() {
		//console.log('Component mounted.');
		this.load_publications(1);
	},
};
</script>
