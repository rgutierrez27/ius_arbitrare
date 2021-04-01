import Swal from 'sweetalert2'
export default {
	methods:{
		_swal_pregunta: function(text, funcion){
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger'
				},
				buttonsStyling: false
			})
			swalWithBootstrapButtons.fire({
				title: 'Eliminar',
				text: text,
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Si',
				cancelButtonText: 'No',
				reverseButtons: true
			}).then((result) => {
				//console.log(Swal);
				//console.log(Swal.DismissReason);
				if (result.isConfirmed) {
					funcion();
				}
				/*else if (result.dismiss === Swal.DismissReason.cancel) {}*/
			})
		},
		_mensaje_error: function(msj){
			return Swal.fire('Error', msj, 'error');
		},
		_mensaje_exito: function(msj){
			return Swal.fire('Éxito', msj, 'success');
		},
		_mensaje_exito_Toast: function (msg) {
			Toast.fire({
				icon: 'success',
				title: msg
			})
		},
		_axios_: function (metodo, ruta, parametros, funcion, funcion2) {
			return axios({
				method: metodo,
				url: ruta,
				data: parametros,
				headers: {
					"Access-Control-Allow-Origin": "*"
				}
			})
				.then((response) => {
					let respuesta = response.data
					if (respuesta.success){
						if (funcion != null)
							funcion(respuesta.data);
					}
					else
						this._mensaje_error(respuesta.message)
				})
				.catch((e) => {
					console.log(e);
				})
				.finally(() => {
					if (funcion2 != null)
						funcion2();
				});
		},
		_axios: function(ruta, parametros, funcion, funcion2 = null){
			axios.post(ruta, parametros)
			.then(funcion)
			.catch((e)=>{
				console.log(e);
			})
			.finally(() => {
				if (funcion2 != null)
				funcion2();
			});
		},
		_getUrl: function(){
			//console.log(window.location);
			var location = window.location;
			location = location.origin + location.pathname;
			while (location[location.length - 1] == '/') {
				location = location.slice(0, location.length-1);
			}
			location = location + '/'
			return location;
		},
		_listPublications(category,cant,pagination,funcion) {
			this._axios(
				'/news/categoryPagination',
				{
					category: category,
					cant:cant,
					pagination:pagination
				},
				funcion
			)
		}
	}
};
