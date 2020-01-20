<template>
  <div>
      <modal>
      
      <div class="card" style="width: 800px;">
    <div class="p-3 flex items-center justify-between border-b border-50">
    	<form @submit="formSubmit" enctype="multipart/form-data">

	        <div class="w-full flex flex-wrap">
	           	<div class="w-1/5 px-8">
	                <select v-model='fabricname' class="form-control form-select">
	                	<option value="0" disabled>select a fabric</option>
	                    <option v-for="fabric in fabrics" :value="fabric.slug" >
	                      {{fabric.title}}
	                    </option>
	                </select>
	            </div>

	            <div class="w-2/5 px-8">
	                <span class="form-file mr-4">
	                	<label class="form-file-btn btn btn-default btn-primary select-none" style="width: 300px;">
                        	<input type="file" class="form-control" v-on:change="onFileChange">
                    	</label>
                    </span> 
	            </div>
	            <div class="w-1/5 px-8">
	              <button type="submit" class="ml-auto btn btn-default btn-primary mr-3">
	                  Upload
	              </button>
	            </div>

	            <div class="w-1/5 px-8">
	              <button @click="$emit('close')"  class="ml-auto btn btn-default btn-primary mr-3">
	                  x
	              </button>
	            </div>

	        </div>
	    </form>
    </div>
    <div class="p-3">
        <nav class="bg-grey-light rounded font-sans w-full m-4">
            <ol class="list-reset flex text-grey-dark">
                <li>
                  <span class="text-blue font-bold cursor-pointer">Uploads</span>
                </li>
                <!---->
            </ol>
        </nav>
        <div class="px-2 overflow-y-auto files">
            <div class="flex flex-wrap -mx-2">

                <div v-for="folder in folders" class="w-1/6 h-40  px-2 mb-3">
                    <div  class="card relative flex flex-wrap justify-center border border-lg border-50 overflow-hidden px-0 py-0 cursor-pointer h-40 folder-item">
                        <!---->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-2/3 h-5/6">
                            <path data-v-b4ddd64a="" fill="#B3C1D1" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"></path>
                        </svg>
  
                        <div  class="h-1/6 w-full text-center text-xs  border-t border-30 bg-50 flex items-center justify-center">
                            {{folder}}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div data-v-10e6360d="" data-v-26ee6bae="" class="v-portal" style="display: none;" transition="fade-transition"></div>
    <!---->
</div>

      </modal>
  </div>
</template>

<script>
export default {
    props: [],
    data: function() {
      return {
        fabrics: '',
        fabricname: 0,
        file: '',
        folders:''
        // success: ''
      };
    },

    mounted() {
    	this.getFabrics()
    	this.getFolders()
    },
    methods:{
        getFabrics(){
            Nova.request().get("/nova-vendor/product-style/getfabrics")
                .then(response => {
                    // console.log(response.data)
                     this.fabrics = response.data.getfabrics
                })
                .catch(() => this.error = true)
        },

        onFileChange(e){
            // console.log(e.target.files[0]);

            this.file = e.target.files[0];
        },
        formSubmit(e) {

	        e.preventDefault();
	        let currentObj = this;
	        const config = {
	            headers: { 'content-type': 'multipart/form-data' }
	        }

	        let formData = new FormData();

	        formData.append('file', this.file);

	        formData.append('name', this.fabricname);

	        Nova.request().post('/nova-vendor/product-style/formSubmit',formData, config)
		        .then(function (response) {
		        	console.log(response.data)
		            // currentObj.success = response.data.success
		            currentObj.$toasted.success(response.data.success, {
                            duration : 1000,
                             // onComplete : () => window.location.reload(true)
                         })
		        })
		        .catch(function (error) {
		            currentObj.output = error;
	        	});

    		},

    		getFolders(){
    			Nova.request().get("/nova-vendor/product-style/getfolders")
                .then(response => {
                     console.log(response.data.folders)
                     this.folders = response.data.folders
                })
                .catch(() => this.error = true)
    		}

          

    },
    computed:{
      
    }
};
</script>

<style scoped>

</style>