<!-- If nothing is hapenning, then make sure the path in app.js is correct-->



<template>
    <div class="container-fluid">
      <div class="row">
          <b-card title="Card title" sub-title="Card subtitle" class="col-sm-12">
              
                  <b-form-group id="term-group" label="Term:" label-for="term-input">
                    <multiselect
                      id="term-input"
                      placeholder="Term: (none)"
                      v-model="termValue"
                      :options="termOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </b-form-group>

                  <b-form-group id="credit-type-group" label="Credit Type:" label-for="credit-type-input">
                    <multiselect
                      id="credit-type-input"
                      placeholder="Credit Type: (none)"
                      v-model="creditTypeValue"
                      :options="creditTypeOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </b-form-group>

                  <b-form-group id="course-group" label="Course:" label-for="course-input">
                    <b-form-input
                      id="course-input"
                      v-model="courseValue"
                      placeholder=""
                    ></b-form-input>
                  </b-form-group>

                  <b-form-group id="instructor-group" label="Instructor:" label-for="instructor-input">
                    <b-form-input
                      id="instructor-input"
                      v-model="instructorValue"
                      placeholder=""
                    ></b-form-input>
                  </b-form-group>

                  <b-form-group id="keyword-group" label="Keyword:" label-for="keyword-input">
                    <b-form-input
                      id="keyword-input"
                      v-model="keywordValue"
                      placeholder=""
                    ></b-form-input>
                  </b-form-group>

                  <b-form-group id="subject-group" label="Subject:" label-for="subject-input">
                    <multiselect
                      id="subject-input"
                      placeholder="Subject: (all)"
                      v-model="subjectValue"
                      :options="subjectOptions"
                      :multiple="true"
                      :searchable="true"
                      >
                    </multiselect>
                  </b-form-group>

                  <b-form-group id="course-level-group" label="Course Level:" label-for="course-level-input">
                    <multiselect
                      id="course-level-input"
                      placeholder="Course Level: (all)"
                      v-model="courseLevelValue"
                      :options="courseLevelOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </b-form-group>

                  <b-form-group id="credit-hours-group" label="Credit Hours:" label-for="credit-hours-input">
                    <multiselect
                      id="credit-hours-input"
                      placeholder="Credit Hours: (all)"
                      v-model="creditHoursValue"
                      :options="creditHoursOptions"
                      :multiple="true"
                      :searchable="false"
                      :close-on-select="false"
                      >
                    </multiselect>
                  </b-form-group>

                  <b-form-group id="distribution-req-group" label="Distribution Req:" label-for="distribution-req-input">
                    <multiselect
                      id="distribution-req-input"
                      placeholder="Distribution Req: (none selected)"
                      v-model="distributionReqValue"
                      :options="distributionReqOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </b-form-group>

                  <b-form-group id="skills-req-group" label="Skills Req:" label-for="skills-req-input">
                    <multiselect
                      id="skills-req-input"
                      placeholder="Skills Req: (none selected)"
                      v-model="skillsReqValue"
                      :options="skillsReqOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </b-form-group>

                  <b-form-group id="special-offerings-group" label="Special Offerings:" label-for="special-offerings-input">
                    <multiselect
                      id="special-offerings-input"
                      placeholder="Special Offerings: (none selected)"
                      v-model="specialOfferingsValue"
                      :options="specialOfferingsOptions"
                      :multiple="true"
                      :searchable="false"
                      >
                    </multiselect>
                  </b-form-group>

                  <b-form-group id="meeting-time-group" label="Meeting Time:" label-for="">
                    <b-form-input
                      id="start-time-input"
                      v-model="startTimeValue"
                      placeholder="Start Time"
                      type="time"
                      min="8:00"
                      step="1800"
                    ></b-form-input>

                    <b-form-input
                      id="end-time-input"
                      v-model="endTimeValue"
                      placeholder="End Time"
                      type="time"
                      min="9:00"
                      step="1800"
                    ></b-form-input>
                  </b-form-group>

                  <b-form-group id="meeting-days-group" label="Meeting Days:" label-for="meeting-days-checkbox-group">
                    <b-form-checkbox-group v-model="meetingDaysValue" id="meeting-days-checkbox-group">
                      <b-form-checkbox value="Mon">Mon</b-form-checkbox>
                      <b-form-checkbox value="Tues">Tue</b-form-checkbox>
                      <b-form-checkbox value="Wed">Wed</b-form-checkbox>
                      <b-form-checkbox value="Thurs">Thu</b-form-checkbox>
                      <b-form-checkbox value="Fri">Fri</b-form-checkbox>
                      <b-form-checkbox value="Sat">Sat</b-form-checkbox>
                      <b-form-checkbox value="Sun">Sun</b-form-checkbox>
                    </b-form-checkbox-group>
                  </b-form-group>

                  <b-form-group id="-group" label="" label-for="">
                  </b-form-group>

                  <b-button type="submit" variant="primary">Submit</b-button>
                  <b-button type="reset" variant="danger">Reset</b-button>
              
          </b-card>
    </div>
  </div>
</template>


<script>
  import Multiselect from 'vue-multiselect'
  export default {
    components: { Multiselect },
    data () {
      return {
        creditHoursValue: null,
        creditHoursOptions: ["1", "2", "3", "4", "5+"]
      }
    }
  }
</script>


<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style>
  
</style>




