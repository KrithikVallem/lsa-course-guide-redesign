<!-- If nothing is hapenning, then make sure the path in app.js is correct-->
<template>
    <div class="form-container">
        <b-card title="Card title" sub-title="Card subtitle">
            <b-form @submit="onSCFormSubmit" @reset="onSCFormReset"  v-if="show">
                <b-form-group id="term-group" label="Term:" label-for="">
                </b-form-group>

                <b-form-group id="credit-type-group" label="Credit Type:" label-for="">
                </b-form-group>

                <b-form-group id="course-group" label="Course:" label-for="">
                </b-form-group>

                <b-form-group id="instructor-group" label="Instructor:" label-for="">
                </b-form-group>

                <b-form-group id="keyword-group" label="Keyword:" label-for="">
                </b-form-group>

                <b-form-group id="subject-group" label="Subject:" label-for="">
                </b-form-group>

                <b-form-group id="course-level-group" label="Course Level:" label-for="">
                </b-form-group>

                <b-form-group id="credit-hours-group" label="Credit Hours:" label-for="">
                </b-form-group>

                <b-form-group id="distribution-req-group" label="Distribution Req:" label-for="">
                </b-form-group>

                <b-form-group id="skills-req-group" label="Skills Req:" label-for="">
                </b-form-group>

                <b-form-group id="special-offerings-group" label="Special Offerings:" label-for="">
                </b-form-group>

                <b-form-group id="meeting-time-group" label="Meeting Time:" label-for="">
                </b-form-group>

                <b-form-group id="meeting-days-group" label="Meeting Days:" label-for="">
                </b-form-group>

                <b-form-group id="-group" label="" label-for="">
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