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
                      :close-on-select="false"
                      track-by="option"
                      label="option"
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
                      :close-on-select="false"
                      track-by="option"
                      label="option"
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
                      :close-on-select="false"
                      track-by="option"
                      label="option"
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
                      :close-on-select="false"
                      track-by="option"
                      label="option"
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
                      track-by="option"
                      label="option"
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
                      :close-on-select="false"
                      track-by="option"
                      label="option"
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
                      :close-on-select="false"
                      track-by="option"
                      label="option"
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
                      :close-on-select="false"
                      track-by="option"
                      label="option"
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
          {{ creditHoursValue }}
          {{ meetingDaysValue }}
    </div>
  </div>
</template>



<script>
  import Multiselect from 'vue-multiselect'
  export default {
    components: { Multiselect },
    data () {
      return {
        //termValue:,
        //termOptions:,
        //creditTypeValue:,
        //creditTypeOptions:,
        subjectValue: null,
        subjectOptions: ["a", "b"],
        courseLevelValue: null,
        courseLevelOptions: [{option: "100", value: "100"}, {option: "200", value: "200"}, {option: "300", value: "300"}, {option: "400", value: "400"}, {option: "500+", value: "500,600,700,800,900"}],
        creditHoursValue: null,
        creditHoursOptions: [{option: "1", value: "1"}, {option: "2", value: "2"}, {option: "3", value: "3"}, {option: "4", value: "4"}, {option: "5+", value: "5,6,7,8,9,10,11,12,13,14,15,16,17,18"}],
        distributionReqValue: null,
        distributionReqOptions: [{option: "Creative Expression (CE)", value: "CE"}, {option: "Humanities (HU)", value: "HU"}, {option: "Interdisciplinary Course (ID)", value: "ID"}, {option: "Math and Symbolic Analysis (MSA)", value: "MSA"}, {option: "Natural Sciences (NS)", value: "NS"}, {option: "Social Sciences (SS)", value: "SS"}],
        skillsReqValue: null,
        skillsReqOptions: [{option: "First Year Writing (FYWR)", value: "IC"}, {option: "Upper Level Writing (ULWR)", value: "ULWR"}, {option: "Race & Ethnicity (RE)", value: "RE"}, {option: "Quantitative Reasoning 1 (QR/1)", value: "QR/1"}, {option: "Quantitative Reasoning 2 (QR/2)", value: "QR/2"}, {option: "Language Requirement (LANG_REQ)", value: "Lang_Req"}],
        specialOfferingsValue: null,
        specialOfferingsOptions: [{option: "Bachelor of Science Eligibility", value: "BS"}, {option: "Community Based Learning", value: "CBL"}, {option: "Extended Course", value: "Extended"}, {option: "First-Year Seminar", value: "First_Year_Sem"}, {option: "Graduate Interdisciplinary Humanities", value: "IHG"}, {option: "Honors", value: "HNRS"}, {option: "Minicourse", value: "MINI"}, {option: "Sustainability", value: "Sustain"}, {option: "Theme Semester", value: "Theme_Sem"}, {option: "World Literature and Culture", value: "WLIT"}],
      }
    }
  }
</script>


<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style>
  
</style>




