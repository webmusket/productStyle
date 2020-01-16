<template>
  <div>
      <modal v-if="this.isOpen == true">
          <transition>
              <div class="bg-white rounded-lg shadow-lg" style="width: 600px;">
                <form @submit.prevent="updateStyle()">
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
                    </div>
                    <div  class="bg-30 px-6 py-3 flex">
                        <div class="w-full  flex justify-end">
                            <div class="ml-auto">
                                <button @click="close()" type="button" class="btn text-80 font-normal h-9 px-3 mr-3 btn-link">
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
    props: ['isOpen','stylebyid','identifier'],
    data: function() {
      return {
        
      };
    },

    mounted() {

    },
    methods:{
          close(){
              this.isOpen = false
              this.$emit('childToParent', false)
          },

          updateStyle(){
            Nova.request().put("/nova-vendor/product-style/updatestyle", {stylebyid: this.stylebyid,identifier: this.identifier})
                .then(response => {
                     this.$parent.getStyles();
                     this.isOpen = false
                        this.$toasted.success(response.data, {
                            duration : 1000,
                             // onComplete : () => window.location.reload(true)
                         })
                })
                // .catch(() => this.error = true)
          }
          

    },
    computed:{

    }
};
</script>

<style scoped>

</style>