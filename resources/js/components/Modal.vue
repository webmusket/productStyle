<template>
  <div>
      <modal>
          <transition>
              <div class="bg-white rounded-lg shadow-lg" style="width: 600px;">
                <form enctype="multipart/form-data"  @submit.prevent="updateStyle()">
                    <div  class="p-8">
                          <div class="flex border-b border-40">
                              <div class="w-1/5 py-4">
                                  <label class="inline-block text-80 pt-2 leading-tight">
                                      Name
                                  </label>
                              </div>
                              <div class="py-4 w-4/5">
                                  <input v-model='stylebyid.name'   type="text" placeholder="Name" class="w-full form-control form-input form-input-bordered">
                              </div>
                          </div>
                          <div class="flex border-b border-40">
                              <div class="w-1/5 py-4">
                                  <label class="inline-block text-80 pt-2 leading-tight">
                                      Title
                                  </label>
                              </div>
                              <div class="py-4 w-4/5">
                                  <input v-model='stylebyid.title'   type="text" placeholder="Title" class="w-full form-control form-input form-input-bordered">
                              </div>
                          </div>
                          <div class="flex border-b border-40">
                              <div class="w-1/5 py-4">
                                  <label class="inline-block text-80 pt-2 leading-tight">
                                      Image
                                  </label>
                              </div>
                              <div class="py-4 w-4/5">
                                  <span class="form-file mr-4">
                                    <input  @change="onChange" dusk="profile_photo" type="file" id="file-profile_photo" name="name" accept="image/*" class="form-file-input select-none"> 
                                    <label for="file-profile_photo" class="form-file-btn btn btn-default btn-primary select-none">
                                    Choose File
                                    </label>
                                </span>
                              </div>
                              <div class="w-1/4 px-8 py-6">
                                  <img :src="path + stylebyid.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;">
                              </div>

                              <div class="w-1/4 px-8 py-6">
                                  <img :src="imageurl" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;">
                              </div>

                          </div>
                    </div>
                    <div  class="bg-30 px-6 py-3 flex">
                        <div class="w-full  flex justify-end">
                            <div class="ml-auto">
                                <button @click="$emit('closeisopen')" type="button" class="btn text-80 font-normal h-9 px-3 mr-3 btn-link">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-default btn-primary">
                                    Update item
                                </button>
                            </div>
                            
                        </div>
                    </div>
                  </form>
              </div>
          </transition>

      </modal>
  </div>
</template>

<script>
export default {
    props: ['stylebyid','identifier'],
    data: function() {
      return {
        // open: this.modalclose
        image: '',
        imageurl: this.stylebyid.image,
        path: "http://127.0.0.1:8000/image/",
      };
    },

    mounted() {

    },
    methods:{
          // close(){
          //     this.Open = false
          //     this.$emit('childToParent', false)
          // },

          onChange(e) {
              let files = e.target.files || e.dataTransfer.files;
              if (!files.length)
                  return;
              this.createImage(files[0]);
          },
          createImage(file) {
              this.imageurl =  URL.createObjectURL(file)
              let reader = new FileReader();
              let vm = this;
              reader.onload = (e) => {
                  this.image= e.target.result;

              };
              reader.readAsDataURL(file);
          },

          updateStyle(){
            
            Nova.request().put("/nova-vendor/product-style/updatestyle", {stylebyid: this.stylebyid,identifier: this.identifier,image: this.image})
                .then(response => {
                  console.log(response.data)
                     this.$parent.getStyles();
                     this.isOpen = false
                        this.$toasted.success(response.data, {
                            duration : 1000,
                             // onComplete : () => window.location.reload(true)
                         })
                })
                // .catch(() => this.error = true)
          },

          

          

    },
    computed:{
      open: function(){
        return this.isOpen
      }
    }
};
</script>

<style scoped>

</style>