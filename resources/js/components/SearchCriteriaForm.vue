<!-- If nothing is hapenning, then make sure the path in app.js is correct-->
<template>
    <div class="form-container">
        <b-card title="Card title" sub-title="Card subtitle">
            <b-form @submit="onSearchCriteriaFormSubmit" v-if="show">
                <b-form-group>
                </b-form-group>
            </b-form>
        </b-card>
    </div>
</template>




<script>
import Multiselect from 'vue-multiselect'

  // register globally
  Vue.component('multiselect', Multiselect)

  export default {
    // OR register locally
    components: { Multiselect },
    data () {
      return {
        value: null,
        options: ['list', 'of', 'options']
      }
    }
  }
</script>




<style src="vue-multiselect/dist/vue-multiselect.min.css" scoped>

</style>