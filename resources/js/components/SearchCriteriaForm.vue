<!-- If nothing is hapenning, then make sure the path in app.js is correct-->



<template>
    <div class="form-container">
        <b-card title="Card title" sub-title="Card subtitle">
            <b-form @submit="onSCFormSubmit" @reset="onSCFormReset">
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
                  <div>
                    <multiselect
                      placeholder="Subject: (all)"
                      v-model="subjectValue"
                      :options="subjectOptions"
                      :multiple="true"
                      :searchable="true"
                      >
                    </multiselect>
                  </div>
                </b-form-group>

                <b-form-group id="course-level-group" label="Course Level:" label-for="">
                  <div>
                    <multiselect
                      placeholder="Course Level: (all)"
                      v-model="courseLevelValue"
                      :options="courseLevelOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </div>
                </b-form-group>

                <b-form-group id="credit-hours-group" label="Credit Hours:" label-for="">
                  <div>
                    <multiselect
                      placeholder="Credit Hours: (all)"
                      v-model="creditHoursValue"
                      :options="creditHoursOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </div>
                </b-form-group>

                <b-form-group id="distribution-req-group" label="Distribution Req:" label-for="">
                  <div>
                    <multiselect
                      placeholder="Distribution Req: (none selected)"
                      v-model="distributionReqValue"
                      :options="distributionReqOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </div>
                </b-form-group>

                <b-form-group id="skills-req-group" label="Skills Req:" label-for="">
                  <div>
                    <multiselect
                      placeholder="Skills Req: (none selected)"
                      v-model="skillsReqValue"
                      :options="skillsReqOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </div>
                </b-form-group>

                <b-form-group id="special-offerings-group" label="Special Offerings:" label-for="">
                  <div>
                    <multiselect
                      placeholder="Special Offerings: (none selected)"
                      v-model="specialOfferingsValue"
                      :options="specialOfferingsOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </div>
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
  export default {
    components: { Multiselect },
    data () {
      return {
        selected: null,
        options: ['Laravel', 'Laravel 5', 'Vue JS', 'ItSolutionStuff.com', 'HDTuto.com']
      }
    }
  }
</script>


<style src="vue-multiselect/dist/vue-multiselect.min.css">




