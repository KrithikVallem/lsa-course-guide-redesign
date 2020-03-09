<!-- If nothing is hapenning, then make sure the path in app.js is correct-->



<template>
    <b-container fluid>
      <b-row id="search-criteria-form-row" class="pb-5 pt-3">
        <b-col id="search-criteria-form-col">
          <b-card title="LSA Course Guide Redesign" id="search-criteria-form-card">
              <!-- Don't put a form tag around everything - the multiselects won't work correctly inside them -->
                <b-form-row>
                  <b-col class="col-md-4 col-12">
                    <b-form-group id="term-group" label="Term:" label-for="term-input">
                      <multiselect
                        id="term-input"
                        placeholder="No Term Selected"
                        v-model="termValue"
                        :options="termOptions" 
                        :multiple="false"
                        :searchable="false"
                        :close-on-select="true"
                        :allow-empty="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="credit-type-group" label="Credit Type:" label-for="credit-type-input">
                      <multiselect
                        id="credit-type-input"
                        placeholder="Credit Type: (Undergraduate)"
                        v-model="creditTypeValue"
                        :options="creditTypeOptions"
                        :multiple="false"
                        :searchable="false"
                        :close-on-select="false"
                        :allow-empty="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>
                  
                  <b-col class="col-md-4 col-12">
                  </b-col>

                </b-form-row>

                <b-form-row>
                  <b-col class="col-md-4 col-12">
                    <b-form-group id="course-group" label="Course (eg CHEM or CHEM 120):" label-for="course-input">
                      <b-form-input
                        id="course-input"
                        v-model="courseValue"
                        placeholder=""
                      ></b-form-input>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="instructor-group" label="Instructor Uniqname:" label-for="instructor-input">
                      <b-form-input
                        id="instructor-input"
                        v-model="instructorValue"
                        placeholder=""
                      ></b-form-input>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="keyword-group" label="Keyword:" label-for="keyword-input">
                      <b-form-input
                        id="keyword-input"
                        v-model="keywordValue"
                        placeholder=""
                      ></b-form-input>
                    </b-form-group>
                  </b-col>
                </b-form-row>
                  
                <b-form-row>
                  <b-col class="col-md-4 col-12">
                    <b-form-group id="subject-group" label="Subject:" label-for="subject-input">
                      <multiselect
                        id="subject-input"
                        placeholder="Subject: (all)"
                        v-model="subjectValue"
                        :options="subjectOptions"
                        :multiple="true"
                        :searchable="true"
                        :close-on-select="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="course-level-group" label="Course Level:" label-for="course-level-input">
                      <multiselect
                        id="course-level-input"
                        placeholder="Course Level: (all)"
                        v-model="courseLevelValue"
                        :options="courseLevelOptions"
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="credit-hours-group" label="Credit Hours:" label-for="credit-hours-input">
                      <multiselect
                        id="credit-hours-input"
                        placeholder="Credit Hours: (all)"
                        v-model="creditHoursValue"
                        :options="creditHoursOptions"
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>
                </b-form-row>

                <b-form-row>
                  <b-col class="col-md-4 col-12">
                    <b-form-group id="distribution-req-group" label="Distribution Req:" label-for="distribution-req-input">
                      <multiselect
                        id="distribution-req-input"
                        placeholder="Distribution Req: (none selected)"
                        v-model="distributionReqValue"
                        :options="distributionReqOptions"
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="skills-req-group" label="Skills Req:" label-for="skills-req-input">
                      <multiselect
                        id="skills-req-input"
                        placeholder="Skills Req: (none selected)"
                        v-model="skillsReqValue"
                        :options="skillsReqOptions"
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="special-offerings-group" label="Special Offerings:" label-for="special-offerings-input">
                      <multiselect
                        id="special-offerings-input"
                        placeholder="Special Offerings: (none selected)"
                        v-model="specialOfferingsValue"
                        :options="specialOfferingsOptions"
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>
                </b-form-row>

                <b-form-row>
                  <b-col class="col-md-4 col-12">
                    <b-form-group id="start-time-group" label="Start Time:" label-for="start-time-input">
                      <multiselect
                        id="start-time-input"
                        placeholder="Start Time: (all)"
                        v-model="startTimeValue"
                        :options="startTimeOptions"
                        :multiple="false"
                        :searchable="false"
                        :close-on-select="true"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="end-time-group" label="End Time:" label-for="end-time-input">
                      <multiselect
                        id="end-time-input"
                        placeholder="End Time: (all)"
                        v-model="endTimeValue"
                        :options="endTimeOptions"
                        :multiple="false"
                        :searchable="false"
                        :close-on-select="true"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>

                  <b-col class="col-md-4 col-12">
                    <b-form-group id="meeting-days-group" label="Meeting Days:" label-for="meeting-days-input">
                      <multiselect
                        id="meeting-days-input"
                        placeholder="Meeting Days: (all)"
                        v-model="meetingDaysValue"
                        :options="meetingDaysOptions"
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="false"
                        :show-labels="false"
                        track-by="option"
                        label="option"
                        open-direction="bottom"
                        >
                      </multiselect>
                    </b-form-group>
                  </b-col>
                </b-form-row>

                <b-form-row>
                  <!-- class="col text-center" inside the div will center buttons if needed -->
                  <div id="form-buttons-container">
                    <b-button type="submit" id="searchButton" @click="searchFunction(1)">Search</b-button>
                    <b-button type="reset" id="clearButton" @click="clearFunction">Clear</b-button>
                  </div>
                </b-form-row>
          </b-card>
        </b-col>
      </b-row>

      <b-row>
        <b-col id="search-results-col" style="color: white;" class="col-4">
          <div class="col text-center">
            <em>Click on a class below!</em>
          </div>

          <b-table
           striped 
           hover 
           stacked 
           borderless  
           small

           :items="searchResultsArray" 
           :fields="searchResultsTableFields"

           id="search-results-table" 
           @row-clicked="getCourseData"

           >
          
          </b-table>

          <div id="page-buttons-container" class="col text-center">
            <b-button id="nextPageButton" @click="searchFunction(currentPageNum - 1)">&lt;</b-button>
            <span>Page {{currentPageNum}} of {{totalPages}}</span>
            <b-button id="lastPageButton" @click="searchFunction(currentPageNum + 1)">&gt;</b-button>
          </div>
        </b-col>

        <b-col id="course-details-col" class="col-8">
          <div id="selected-course-title" class="col text-center pb-2">
            <strong>{{this.courseDataJSON.Title}}</strong><br/>{{this.courseDataJSON.Section}}
          </div>

          <b-card no-body id="course-details-card">
            <b-tabs pills card id="course-details-tab-container">
              <b-tab title="Details" active>
                <b-card-text>
                  <span v-if="!this.courseDataJSON.ClassDescr"> <h3><strong>Click on a class in the column on the left to see more information about it!</strong></h3> </span>
  
                  <!-- Replaced the stuff below with an HTML string making function because I couldn't figure out how to get rid of the empty fields in the json object -->
                  <table v-else v-html="makeCourseDetailsHTMLString(this.allCourseDetailsJSON, this.courseDataJSON.I)" style='border-collapse: separate; border-spacing: 10px;'></table>

                  <!--how can I make the blank stuff not show up ??
                  <div v-else v-for="(value, name) in this.allCourseDetailsJSON" v-bind:key = "name">
                    <span v-if=" name !== 'ClassDescr' ">
                      <strong>{{ name }}:</strong> {{ value }}
                    </span>
                  </div> -->

                </b-card-text>
              </b-tab>
              
              <b-tab title="Description" class="small" active>
                <b-card-text>
                  <span v-if="!this.courseDataJSON.ClassDescr"> <h3><strong>Click on a class in the column on the left to see more information about it!</strong></h3> </span>

                  <!-- The api spits out pure html, so the line below renders the html it recieves properly -->
                  <span v-else v-html="this.courseDataJSON.ClassDescr"></span>
                </b-card-text>
              </b-tab>
              
              <b-tab title="Schedule" class="small">
                <b-card-text>
                  <span v-if="!this.courseDataJSON.ClassDescr"> <h3><strong>Click on a class in the column on the left to see more information about it!</strong></h3> </span>

                  <b-table v-else
                    striped 
                    stacked   
                    small
                    hover

                    :items="scheduleArray" 
                    :fields="scheduleTableFields"
                    :tbody-tr-class="enrollStatColor"

                    id="schedule-table" 
                  >
                  </b-table>
                </b-card-text>
              </b-tab>

              <b-tab title="GradeGuide" class="small">
                <b-card-text style="overflow: hidden;">
                  <span v-if="!this.courseDataJSON.ClassDescr"> <h3><strong>Click on a class in the column on the left to see more information about it!</strong></h3> </span>

                  <iframe v-else scrolling='no' v-bind:src="`https://gradeguide.com/course/${this.courseDataJSON.Subject}/${this.courseDataJSON.CatalogNum}/`" style='border: 0px none; margin-left: -20px; height: 960px; margin-top: -250px; margin-bottom: -20px; width: 615px;'></iframe>
                </b-card-text>
              </b-tab>

            </b-tabs>
          </b-card>
          
          <b-row v-if="this.courseDataJSON.ClassDescr" id="course-details-link-buttons-container">
            <b-col sm>
              <b-button class="course-details-link-button" v-bind:href="'https://www.lsa.umich.edu/cg/cg_detail.aspx?content=' + this.courseDataJSON.TermCode + this.courseDataJSON.Subject + this.courseDataJSON.CatalogNum + this.courseDataJSON.SectionNum" target="_blank">Open in New Tab</b-button>
            </b-col>

            <b-col sm>
              <b-button style="color: #ffcb05;" class="course-details-link-button" v-bind:href="'https://atlas.ai.umich.edu/course/' + this.courseDataJSON.Subject + ' ' + this.courseDataJSON.CatalogNum" target="_blank">CourseProfile (Atlas)</b-button>
            </b-col>

            <!--<div class="w-100"></div>  This would make it a 2x2 square button arrangement, but it doesnt look that good-->

            <b-col sm>
              <b-button class="course-details-link-button" v-bind:href="'https://bookstore.mbsdirect.net/vbm/vb_buy2.php?ACTION=registrar&amp;FVGRP=UMI&amp;TERMCOURSES=' + this.courseDataJSON.TermCode + '|CENTRAL|' + this.courseDataJSON.Subject + ' ' + this.courseDataJSON.CatalogNum + ' ' + this.courseDataJSON.SectionNum" target="_blank">View/Buy Textbooks</b-button>
            </b-col>

            <b-col sm>
              <b-button class="course-details-link-button" v-bind:href="'https://webapps.lsa.umich.edu/syllabi/cg_syllabus_results.aspx?Subject=' + this.courseDataJSON.Subject + '&amp;CatNbr=' + this.courseDataJSON.CatalogNum" target="_blank">View Previous Syllabi</b-button>
            </b-col>
          </b-row>
        </b-col>
      </b-row>

    </b-container>
</template>


<script>
  import Multiselect from 'vue-multiselect'
  export default {
    components: { Multiselect },
    data () {
      return {

        termValue: {value: "2310", option: "Fall 2020"}, /* TODO: change this every now and then, and add more options to the stuff below */
        termOptions: [{value: "2350", option: "Summer 2021"}, {value: "2340", option: "Sp/Su 2021"}, {value: "2330", option: "Spring 2021"}, {value: "2320", option: "Winter 2021"}, {value: "2310", option: "Fall 2020"}, {value: "2300", option: "Summer 2020"}, {value: "2290", option: "Sp/Su 2020"}, {value: "2280", option: "Spring 2020"}, {value: "2270", option: "Winter 2020"}, {value: "2260", option: "Fall 2019"}, {value: "2250", option: "Summer 2019"}, {value: "2240", option: "Sp/Su 2019"}, {value: "2230", option: "Spring 2019"}, {value: "2220", option: "Winter 2019"}, {value: "2210", option: "Fall 2018"}, {value: "2200", option: "Summer 2018"}, {value: "2190", option: "Sp/Su 2018"}, {value: "2180", option: "Spring 2018"}, {value: "2170", option: "Winter 2018"}, {value: "2160", option: "Fall 2017"}, {value: "2150", option: "Summer 2017"}, {value: "2140", option: "Sp/Su 2017"}, {value: "2130", option: "Spring 2017"}, {value: "2120", option: "Winter 2017"}, {value: "2110", option: "Fall 2016"}, {value: "2100", option: "Summer 2016"}, {value: "2090", option: "Sp/Su 2016"}, {value: "2080", option: "Spring 2016"}, {value: "2070", option: "Winter 2016"}, {value: "2060", option: "Fall 2015"}, {value: "2050", option: "Summer 2015"}, {value: "2040", option: "Sp/Su 2015"}, {value: "2030", option: "Spring 2015"}, {value: "2020", option: "Winter 2015"}, {value: "2010", option: "Fall 2014"}, {value: "2000", option: "Summer 2014"}, {value: "1990", option: "Sp/Su 2014"}, {value: "1980", option: "Spring 2014"}, {value: "1970", option: "Winter 2014"}, {value: "1960", option: "Fall 2013"}, {value: "1950", option: "Summer 2013"}, {value: "1940", option: "Sp/Su 2013"}, {value: "1930", option: "Spring 2013"}, {value: "1920", option: "Winter 2013"}, {value: "1910", option: "Fall 2012"}, {value: "1900", option: "Summer 2012"}, {value: "1890", option: "Sp/Su 2012"}, {value: "1880", option: "Spring 2012"}, {value: "1870", option: "Winter 2012"}, {value: "1860", option: "Fall 2011"}, {value: "1850", option: "Summer 2011"}, {value: "1840", option: "Sp/Su 2011"}, {value: "1830", option: "Spring 2011"}, {value: "1820", option: "Winter 2011"}, {value: "1810", option: "Fall 2010"}, {value: "1800", option: "Summer 2010"}, {value: "1790", option: "Sp/Su 2010"}, {value: "1780", option: "Spring 2010"}, {value: "1770", option: "Winter 2010"}, {value: "1760", option: "Fall 2009"}, {value: "1750", option: "Summer 2009"}, {value: "1740", option: "Sp/Su 2009"}, {value: "1730", option: "Spring 2009"}, {value: "1720", option: "Winter 2009"}, {value: "1710", option: "Fall 2008"}, {value: "1700", option: "Summer 2008"}, {value: "1690", option: "Sp/Su 2008"}, {value: "1680", option: "Spring 2008"}, {value: "1670", option: "Winter 2008"}, {value: "1660", option: "Fall 2007"}, {value: "1650", option: "Summer 2007"}, {value: "1640", option: "Sp/Su 2007"}, {value: "1630", option: "Spring 2007"}, {value: "1620", option: "Winter 2007"}, {value: "1610", option: "Fall 2006"}, {value: "1600", option: "Summer 2006"}, {value: "1590", option: "Sp/Su 2006"}, {value: "1580", option: "Spring 2006"}, {value: "1570", option: "Winter 2006"}, {value: "1560", option: "Fall 2005"}, {value: "1550", option: "Summer 2005"}, {value: "1540", option: "Sp/Su 2005"}, {value: "1530", option: "Spring 2005"}, {value: "1520", option: "Winter 2005"}, {value: "1510", option: "Fall 2004"}, {value: "1500", option: "Summer 2004"}, {value: "1490", option: "Sp/Su 2004"}, {value: "1480", option: "Spring 2004"}],
        
        creditTypeValue: {option: "Undergraduate", value: "ug"},
        creditTypeOptions: [{option: "Undergraduate", value: "ug"}, {option: "Graduate", value: "gr"}],
        
        courseValue: "",

        instructorValue: "",

        keywordValue: "",
        
        subjectValue: null,
        subjectOptions: [{value: "AAS", option: "LSA: Afroamerican & African Studies"}, {value: "AMCULT", option: "LSA: American Culture"}, {value: "ANTHRARC", option: "LSA: Anthropological Archaeology"}, {value: "ANTHRBIO", option: "LSA: Anthropology,Biological"}, {value: "ANTHRCUL", option: "LSA: Anthropology,Cultural"}, {value: "ALA", option: "LSA: Applied Liberal Arts"}, {value: "APPPHYS", option: "LSA: Applied Physics"}, {value: "ARABAM", option: "LSA: Arab American Studies"}, {value: "ARABIC", option: "LSA: Arabic Language"}, {value: "ARMENIAN", option: "LSA: Armenian Language"}, {value: "ASIANLAN", option: "LSA: Asian Languages"}, {value: "ASIAN", option: "LSA: Asian Studies"}, {value: "ASIANPAM", option: "LSA: Asian/Pacific Island Amer Std"}, {value: "ASTRO", option: "LSA: Astronomy"}, {value: "BIOLOGY", option: "LSA: Biology"}, {value: "BIOPHYS", option: "LSA: Biophysics"}, {value: "BCS", option: "LSA: Bosnian/Croatian/Serbian"}, {value: "BUDDHST", option: "LSA: Buddhist Studies"}, {value: "CATALAN", option: "LSA: Catalan"}, {value: "CHEM", option: "LSA: Chemistry"}, {value: "CCS", option: "LSA: Chinese Studies"}, {value: "CLARCH", option: "LSA: Classical Archaeology"}, {value: "CLCIV", option: "LSA: Classical Civilization"}, {value: "CLLING", option: "LSA: Classical Linguistics"}, {value: "COGSCI", option: "LSA: Cognitive Science"}, {value: "HONORS", option: "LSA: College Honors"}, {value: "COMM", option: "LSA: Communication and Media"}, {value: "COMPLIT", option: "LSA: Comparative Literature"}, {value: "CMPLXSYS", option: "LSA: Complex Systems"}, {value: "CSP", option: "LSA: Comprehensive Studies Program"}, {value: "CZECH", option: "LSA: Czech"}, {value: "DATASCI", option: "LSA: Data Science"}, {value: "DIGITAL", option: "LSA: Digital Studies"}, {value: "DUTCH", option: "LSA: Dutch"}, {value: "EARTH", option: "LSA: Earth & Environmental Sciences"}, {value: "EEB", option: "LSA: Ecology & Evolutionary Biology"}, {value: "ECON", option: "LSA: Economics"}, {value: "ENGLISH", option: "LSA: English Lang & Literature"}, {value: "ELI", option: "LSA: English Language Institute"}, {value: "EURO", option: "LSA: European Studies"}, {value: "FTVM", option: "LSA: Film, Television, and Media"}, {value: "FRENCH", option: "LSA: French"}, {value: "GEOG", option: "LSA: Geography"}, {value: "GERMAN", option: "LSA: German"}, {value: "GTBOOKS", option: "LSA: Great Books"}, {value: "GREEK", option: "LSA: Greek"}, {value: "HEBREW", option: "LSA: Hebrew Language"}, {value: "HISTORY", option: "LSA: History"}, {value: "HISTART", option: "LSA: History of Art"}, {value: "INSTHUM", option: "LSA: Institute For The Humanities"}, {value: "INTLRGN", option: "LSA: International & Regional Sts"}, {value: "INTLSTD", option: "LSA: International Studies"}, {value: "ISLAM", option: "LSA: Islamic Studies"}, {value: "ITALIAN", option: "LSA: Italian"}, {value: "CJS", option: "LSA: Japanese Studies"}, {value: "JUDAIC", option: "LSA: Judaic Studies"}, {value: "KRSTD", option: "LSA: Korean Studies"}, {value: "LATIN", option: "LSA: Latin"}, {value: "LACS", option: "LSA: Latin Amer & Caribbean Stu"}, {value: "LATINOAM", option: "LSA: Latina/o American Studies"}, {value: "LING", option: "LSA: Linguistics"}, {value: "LHSP", option: "LSA: Lloyd Hall Scholars Program"}, {value: "MACROMOL", option: "LSA: Macromolecular Science"}, {value: "MATH", option: "LSA: Mathematics"}, {value: "MEMS", option: "LSA: Medieval & Early Modern Std"}, {value: "MELANG", option: "LSA: Middle East Languages"}, {value: "MIDEAST", option: "LSA: Middle East Studies"}, {value: "MENAS", option: "LSA: Middle Eastern & N African Stu"}, {value: "GREEKMOD", option: "LSA: Modern Greek"}, {value: "MCDB", option: "LSA: Molec, Cell & Develop Biology"}, {value: "MUSMETH", option: "LSA: Museum Methods"}, {value: "MUSEUMS", option: "LSA: Museums"}, {value: "NATIVEAM", option: "LSA: Native American Studies"}, {value: "ORGSTUDY", option: "LSA: Organizational Studies"}, {value: "PERSIAN", option: "LSA: Persian Language"}, {value: "PPE", option: "LSA: Philos, Politics & Economics"}, {value: "PHIL", option: "LSA: Philosophy"}, {value: "PHYSICS", option: "LSA: Physics"}, {value: "POLISH", option: "LSA: Polish"}, {value: "POLSCI", option: "LSA: Political Science"}, {value: "PORTUG", option: "LSA: Portuguese"}, {value: "PSYCH", option: "LSA: Psychology"}, {value: "RCASL", option: "LSA: RC American Sign Language"}, {value: "RCCORE", option: "LSA: RC Core Courses"}, {value: "RCARTS", option: "LSA: RC Fine Arts"}, {value: "RCHUMS", option: "LSA: RC Humanities"}, {value: "RCIDIV", option: "LSA: RC Interdivisional"}, {value: "RCLANG", option: "LSA: RC Languages"}, {value: "RCNSCI", option: "LSA: RC Natural Sciences"}, {value: "RCSSCI", option: "LSA: RC Social Sciences"}, {value: "RELIGION", option: "LSA: Religion"}, {value: "ROMLANG", option: "LSA: Romance Languages&amp;Literatures"}, {value: "ROMLING", option: "LSA: Romance Linguistics"}, {value: "RUSSIAN", option: "LSA: Russian"}, {value: "REEES", option: "LSA: Russian, E Europe & Euras Stu"}, {value: "SCAND", option: "LSA: Scandinavian"}, {value: "SLAVIC", option: "LSA: Slavic"}, {value: "SOC", option: "LSA: Sociology"}, {value: "SAS", option: "LSA: South Asian Studies"}, {value: "SEAS", option: "LSA: Southeast Asian Studies"}, {value: "SPANISH", option: "LSA: Spanish"}, {value: "STATS", option: "LSA: Statistics"}, {value: "STDABRD", option: "LSA: Study Abroad"}, {value: "SURVMETH", option: "LSA: Survey Methodology"}, {value: "WRITING", option: "LSA: Sweetland Center for Writing"}, {value: "TCS", option: "LSA: Transcultural Studies"}, {value: "TURKISH", option: "LSA: Turkish Language"}, {value: "UKR", option: "LSA: Ukrainian"}, {value: "UC", option: "LSA: University Courses"}, {value: "WOMENSTD", option: "LSA: Womens Studies"}, {value: "YIDDISH", option: "LSA: Yiddish"}, {value: "ARTDES", option: "ART: Art and Design"}, {value: "ARCH", option: "AUP: Architecture"}, {value: "URP", option: "AUP: Urban and Regional Planning"}, {value: "BA", option: "BA: Business Administration"}, {value: "ES", option: "BA: Entrepreneurial Studies"}, {value: "MO", option: "BA: Management & Organizations"}, {value: "MKT", option: "BA: Marketing"}, {value: "TO", option: "BA: Technology & Operations"}, {value: "BIOMATLS", option: "DEN: Biomaterials"}, {value: "ENVIRON", option: "EAS: Environment"}, {value: "EDBEHAVR", option: "EDU: Educ C Behavior Sci In Educ"}, {value: "EDUC", option: "EDU: Education"}, {value: "EDCURINS", option: "EDU: Education D Curriculum & Instr"}, {value: "AEROSP", option: "ENG: Aerospace Engineering"}, {value: "AUTO", option: "ENG: Automotive Engineering Program"}, {value: "BIOMEDE", option: "ENG: Biomedical Engineering"}, {value: "CHE", option: "ENG: Chemical Engineering"}, {value: "CEE", option: "ENG: Civil & Environmental Engin"}, {value: "CLIMATE", option: "ENG: Climate & Meteorology"}, {value: "EECS", option: "ENG: Elec Engin & Computer Sci"}, {value: "ESENG", option: "ENG: Energy Systems Engineering"}, {value: "ENGR", option: "ENG: Engineering"}, {value: "ENSCEN", option: "ENG: Environmental Sciences & Engin"}, {value: "IOE", option: "ENG: Industrial & Operations Engin"}, {value: "ISD", option: "ENG: Integrative Systems & Design"}, {value: "MFG", option: "ENG: Manufacturing"}, {value: "MATSCIE", option: "ENG: Materials Science Engineering"}, {value: "MECHENG", option: "ENG: Mechanical Engineering"}, {value: "NAVARCH", option: "ENG: Naval Arch & Marine Engin"}, {value: "NERS", option: "ENG: Nuclear Engin & Radiolog Sci"}, {value: "ROB", option: "ENG: Robotics"}, {value: "SPACE", option: "ENG: Space Science & Engineering"}, {value: "TCHNCLCM", option: "ENG: Technical Communication"}, {value: "UARTS", option: "ENG: University Arts"}, {value: "SI", option: "INF: Information"}, {value: "PUBPOL", option: "IPP: Public Policy"}, {value: "AES", option: "KIN: Applied Exercise Science"}, {value: "KINESLGY", option: "KIN: Kinesiology"}, {value: "MOVESCI", option: "KIN: Movement Science"}, {value: "LAW", option: "LAW: Law"}, {value: "ANATOMY", option: "MED: Anatomy"}, {value: "BIOINF", option: "MED: Bioinformatics"}, {value: "BIOLCHEM", option: "MED: Biological Chemistry"}, {value: "PIBS", option: "MED: Biomedical Sciences"}, {value: "CDB", option: "MED: Cell and Developmental Biology"}, {value: "CMBIOL", option: "MED: Cellular And Molecular Biology"}, {value: "HUMGEN", option: "MED: Human Genetics"}, {value: "IMMUNO", option: "MED: Immunology"}, {value: "INTMED", option: "MED: Internal Medicine"}, {value: "MICRBIOL", option: "MED: Microbiology"}, {value: "NEUROSCI", option: "MED: Neuroscience"}, {value: "PATH", option: "MED: Pathology"}, {value: "PHRMACOL", option: "MED: Pharmacology"}, {value: "PMR", option: "MED: Physical Medicine & Rehab"}, {value: "PHYSIOL", option: "MED: Physiology"}, {value: "ARTSADMN", option: "MUS: Arts Administration"}, {value: "COMP", option: "MUS: Composition"}, {value: "DANCE", option: "MUS: Dance"}, {value: "ENS", option: "MUS: Ensemble"}, {value: "JAZZ", option: "MUS: Jazz & Improvisational Studies"}, {value: "MUSPERF", option: "MUS: Music Performance"}, {value: "MUSTHTRE", option: "MUS: Musical Theatre"}, {value: "MUSICOL", option: "MUS: Musicology"}, {value: "PAT", option: "MUS: Performing Arts & Technology"}, {value: "THTREMUS", option: "MUS: Theatre & Drama"}, {value: "THEORY", option: "MUS: Theory"}, {value: "VOICELIT", option: "MUS: Voice Literature"}, {value: "EAS", option: "NRE: Environment and Sustainability"}, {value: "HS", option: "NUR: Health Sciences"}, {value: "NURS", option: "NUR: Nursing"}, {value: "AERO", option: "OEP: Air Force Officer Education"}, {value: "MILSCI", option: "OEP: Military Science"}, {value: "NAVSCI", option: "OEP: Naval Science"}, {value: "BIOSTAT", option: "PH: Biostatistics"}, {value: "EHS", option: "PH: Environmental Health Sciences"}, {value: "EPID", option: "PH: Epidemiology"}, {value: "HMP", option: "PH: Health Management And Policy"}, {value: "NUTR", option: "PH: Nutritional Sciences"}, {value: "PUBHLTH", option: "PH: Public Health"}, {value: "MEDCHEM", option: "PHR: Medicinal Chemistry"}, {value: "PHARMSCI", option: "PHR: Pharmaceutical Sciences"}, {value: "PHARMACY", option: "PHR: Pharmacy"}, {value: "CHEMBIO", option: "RAC: Chemical Biology"}, {value: "RACKHAM", option: "RAC: Rackham Graduate School"}, {value: "SW", option: "SW: Social Work"}],
        
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
        
        startTimeValue: null,
        startTimeOptions: [{option: "8:00 AM", value: "8:00%20AM"}, {option: "8:30 AM", value: "8:30%20AM"}, {option: "9:00 AM", value: "9:00%20AM"}, {option: "9:30 AM", value: "9:30%20AM"}, {option: "10:00 AM", value: "10:00%20AM"}, {option: "10:30 AM", value: "10:30%20AM"}, {option: "11:00 AM", value: "11:00%20AM"}, {option: "11:30 AM", value: "11:30%20AM"}, {option: "12:00 PM", value: "12:00%20PM"}, {option: "12:30 PM", value: "12:30%20PM"}, {option: "1:00 PM", value: "1:00%20PM"}, {option: "1:30 PM", value: "1:30%20PM"}, {option: "2:00 PM", value: "2:00%20PM"}, {option: "2:30 PM", value: "2:30%20PM"}, {option: "3:00 PM", value: "3:00%20PM"}, {option: "3:30 PM", value: "3:30%20PM"}, {option: "4:00 PM", value: "4:00%20PM"}, {option: "4:30 PM", value: "4:30%20PM"}, {option: "5:00 PM", value: "5:00%20PM"}, {option: "5:30 PM", value: "5:30%20PM"}, {option: "6:00 PM", value: "6:00%20PM"}, {option: "6:30 PM", value: "6:30%20PM"}, {option: "7:00 PM", value: "7:00%20PM"}, {option: "7:30 PM", value: "7:30%20PM"}, {option: "8:00 PM", value: "8:00%20PM"}, {option: "8:30 PM", value: "8:30%20PM"}, {option: "9:00 PM", value: "9:00%20PM"}, {option: "9:30 PM", value: "9:30%20PM"}, {option: "10:00 PM", value: "10:00%20PM"}, {option: "10:30 PM", value: "10:30%20PM"}, {option: "11:00 PM", value: "11:00%20PM"}, {option: "11:30 PM", value: "11:30%20PM"}],
        endTimeValue: null,
        endTimeOptions: [{option: "9:00 AM", value: "9:00%20AM"}, {option: "9:30 AM", value: "9:30%20AM"}, {option: "10:00 AM", value: "10:00%20AM"}, {option: "10:30 AM", value: "10:30%20AM"}, {option: "11:00 AM", value: "11:00%20AM"}, {option: "11:30 AM", value: "11:30%20AM"}, {option: "12:00 PM", value: "12:00%20PM"}, {option: "12:30 PM", value: "12:30%20PM"}, {option: "1:00 PM", value: "1:00%20PM"}, {option: "1:30 PM", value: "1:30%20PM"}, {option: "2:00 PM", value: "2:00%20PM"}, {option: "2:30 PM", value: "2:30%20PM"}, {option: "3:00 PM", value: "3:00%20PM"}, {option: "3:30 PM", value: "3:30%20PM"}, {option: "4:00 PM", value: "4:00%20PM"}, {option: "4:30 PM", value: "4:30%20PM"}, {option: "5:00 PM", value: "5:00%20PM"}, {option: "5:30 PM", value: "5:30%20PM"}, {option: "6:00 PM", value: "6:00%20PM"}, {option: "6:30 PM", value: "6:30%20PM"}, {option: "7:00 PM", value: "7:00%20PM"}, {option: "7:30 PM", value: "7:30%20PM"}, {option: "8:00 PM", value: "8:00%20PM"}, {option: "8:30 PM", value: "8:30%20PM"}, {option: "9:00 PM", value: "9:00%20PM"}, {option: "9:30 PM", value: "9:30%20PM"}, {option: "10:00 PM", value: "10:00%20PM"}, {option: "10:30 PM", value: "10:30%20PM"}, {option: "11:00 PM", value: "11:00%20PM"}, {option: "11:30 PM", value: "11:30%20PM"}],
        
        meetingDaysValue: null,
        meetingDaysOptions: [{option: "Monday", value: "Mon"}, {option: "Tuesday", value: "Tues"}, {option: "Wednesday", value: "Wed"}, {option: "Thursday", value: "Thurs"}, {option: "Friday", value: "Fri"}, {option: "Saturday", value: "Sat"}, {option: "Sunday", value: "Sun"}],

        currentPageNum: 1,
        rowsPerPage: 30, // change to get less/more results per page in the table
        totalPages: 1,

        searchResultsTableFields: ["Title", "Section", "Term", "Credits", "Reqs", "Other", "Instructor"],
        searchResultsArray: [],

        courseDataJSON: [],
        courseDetailsTableFields: ["Term", "Credits", "Reqs", "Other", "Credit Exclusions", "Other Course Info", "Cross-Listed Classes", "Waitlist Capacity", "Enforced Prerequisites", "Advisory Prerequisites", "BS", "Lang Req", "Repeatability", "Instructor"],

        scheduleJSON: [],
        scheduleTableFields: ["Section", "Enroll Stat", "Open Seats", "Meeting Day/Time"],
        scheduleArray: [],

        allCourseDetailsJSON: [],

      }
    },

    // stuff that happens more or less on page load
    mounted () {
    
    },

    methods: {

      /* Clears the form if user clicks the clear button */
      clearFunction() {
        const confirmResponse = confirm("Do you want to clear your search criteria?")

        if (confirmResponse === true) {
          //this.termValue = null; // I'll just not reset the term after each search since I don't think its that important to reset
          //this.creditTypeValue = {option: "Undergraduate", value: "ug"}; // I'll just not reset this credit type (undergrad vs grad) after each search since I don't think its that important to reset
          this.courseValue = "";
          this.instructorValue = "";
          this.keywordValue = "";
          this.subjectValue = null;
          this.courseLevelValue = null;
          this.creditHoursValue = null;
          this.distributionReqValue = null;
          this.skillsReqValue = null;
          this.specialOfferingsValue = null;
          this.startTimeValue = null;
          this.endTimeValue = null;
          this.meetingDaysValue = null;          

        }
      },

      /* Searches for classes meeting the search criteria entered by user when they click the search button
      ** Calls constructQueryUrl() to make the correct api request url, and sends it to backend to circumvent CORS     
      ** Once JSON course results data is returned, formats it into an array so that bootstrap-vue can turn it into a neat table */
      searchFunction(pageNumberIn) {
        if (this.termValue === null) {
          alert("Please Select a Term!");
          return;
        }

        let currentObject = this;
        this.currentPageNum = pageNumberIn;

        if (this.currentPageNum < 1) this.currentPageNum = 1;
        if (this.currentPageNum > this.totalPages) this.currentPageNum = this.totalPages;

        const searchResultsTable = document.getElementById("search-results-table");
        searchResultsTable.scrollTop = 0;
        searchResultsTable.scrollIntoView({ block: "start",  behavior: "smooth" });

        // removed since it triggers on every page flip - I added the large h3 message in the ClassDescr area instead
        //alert("Click on a class in the column on the left to see more information about it!");

        axios.post('/searchFunction', {
          queryUrl: this.constructQueryUrl(pageNumberIn)
        })
        .then(function (response) {
          
          // clears the previous data if a new search is successful
          currentObject.courseDataJSON = [];
          currentObject.searchResultsArray = [];
          currentObject.scheduleJSON = [];
          currentObject.scheduleArray = [];

          // PageSummary is a string like "Page 1 of 8, Results 1 - 100 of 746"
          // this code splits the string into an array of individual words and gets the last one (total number of classes in the search results)
          const totalSearchResults = ((response.data).PageSummary).trim().split(" ").pop();
          currentObject.totalPages = Math.ceil(totalSearchResults / (currentObject.rowsPerPage));

          // I'm building the array of data I want in the axios response because I couldn't get it to work with Vue's v-for loop
          for (let course of (response.data).Classes.CGClassAbbr) {
            let tempObject = {
              "Title": `${course.Subject} ${course.CatalogNbr} - ${course.Title}`,
              "Subject": course.Subject,
              "CatalogNum": course.CatalogNbr,
              "Section": (`Section ${course.ClassSection} (${course.Component}) - ${course.Topic}`).replace(" - [object Object]", ""), // removes the error text for classes with no section topic
              "SectionNum": course.ClassSection,
              "Term": course.TermDescr,
              "TermCode": course.Term,
              "Credits": course.Credit,
              "Reqs": course.ReqMet,
              "Other": course.OtherGroupings,
              "Instructor": "",
              "ClassDescr": course.ClassDescr,

              "Credit Exclusions": "",
              "Other Course Info": "",
              "BS": "",
              "Repeatability": "",
              "Waitlist Capacity": "",
              "Enforced Prerequisites": "",
              "Advisory Prerequisites": "",
              "Cross-Listed Classes": "",
              "Lang Req": "",
            };

            // CGInstructor is a normal object where theres only 1 instructor, but is an array of objects when theres multiple instructors
            // So, I have to first check if its an array or not and then get the name value(s) accordingly
            if (Array.isArray(course.Instructors.CGInstructor)) {
              for (let instr of course.Instructors.CGInstructor) {
                // if first instructor in array, then don't add the & before their name
                if (tempObject.Instructor === "") {
                  tempObject.Instructor = instr.Name;
                }
                // for non-first instructors in array, add a " & " before their names
                else {
                  tempObject.Instructor += ` & ${instr.Name}`;
                }
              }
            }
            else {
              tempObject.Instructor = course.Instructors.CGInstructor.Name;
            }
            

            (currentObject.searchResultsArray).push(tempObject);
          }
        })
        .catch(function (error) {
          //commenting out until I can identify the bug
          //alert("There were no classes that met your search criteria :("); // theres a bug that makes this error set off when you only select 1 subject or 1 special offering
        });
      },


      /* makes a query url based on the search criteria seleted by the user
      ** also sanatizes input from the text boxes to a degree in order to prevent injection */
      constructQueryUrl(pageNumberIn) {
        // url is constructed in the order presented in the docs: http://webapps.lsa.umich.edu/SAA/LSACGSvc/AdvSrch.svc/help

        const AUDIENCE = "public";
        const PAGENO = pageNumberIn.toString();
        const ROWSPERPAGE = this.rowsPerPage;
        
        let queryUrl = `http://webapps.lsa.umich.edu/SAA/LSACGSvc/AdvSrch.svc/Classes/PagedListAbbr`;

        // CLASSTYPE
        const CLASSTYPE = this.creditTypeValue.value;
        queryUrl += `/${CLASSTYPE}/${AUDIENCE}/${PAGENO}/${ROWSPERPAGE}/search?`;

        // TERM
        queryUrl += `term=${(this.termValue).value}&`;

        // the commented out stuff is for when Term selection was a multiselect
        /*
        if (this.termValue !== null) {
          for (let item of this.termValue) { 
            queryUrl += `term=${item.value}&`;
          }
        }
        // if user didn't select a term, the term is set to the current term based on the computer's system date
        // this complex stuff is needed because the url won't form properly when I set a default term on page load
        else if (this.termValue === null){
          //I'm no longer using this
          queryUrl += `term=${this.getTermCodeOfSystemDate()}&`;
        }
        */


        // SUBJECT
        if (this.subjectValue !== null) {
          for (let item of this.subjectValue) {
            queryUrl += `subject=${item.value}&`;
          }
        }


        // moved COURSE input stuff to end due to formatting difficulties


        if (this.keywordValue !== "") {
          // regexes replace '<' and '>' to prevent html/script injection to a degree

          let keyword = (this.keywordValue).trim().replace(" ", "+").replace(/</g, "&lt;").replace(/>/g, "&gt;");
          queryUrl += `keyword=${keyword}&`;
        }
     
        if (this.instructorValue !== "") {
          // regexes replace '<' and '>' to prevent html/script injection to a degree

          // replacing the spaces with '+' doesn't make the search work, but keeps the url valid
          // I should replace the instructor text box with a multisearch once I get a list of all faculty
          let instrname = (this.instructorValue).trim().replace(" ", "+").replace(/</g, "&lt;").replace(/>/g, "&gt;");
          queryUrl += `instructor=${instrname}&`;
        }

        // Credit Hours
        if (this.creditHoursValue !== null) {
          for (let item of this.creditHoursValue) {
            queryUrl += `credit=${item.value}&`;
          }
        }

        // DISTRIBUTION REQ
        if (this.distributionReqValue !== null) {  
          for (let item of this.distributionReqValue) {
            queryUrl += `distr=${item.value}&`;
          }
        }

        // Skills Reqs - categorized as 'other'
        if (this.skillsReqValue !== null) {
          for (let item of this.skillsReqValue) {
            queryUrl += `other=${item.value}&`;
          }
        }

        // Special Offerings - categorized as 'other'
        if (this.specialOfferingsValue !== null) {
          for (let item of this.specialOfferingsValue) {
            queryUrl += `other=${item.value}&`;
          }
        }

        // Course Level
        if (this.courseLevelValue !== null) {
          for (let item of this.courseLevelValue) {
            queryUrl += `numlvl=${item.value}&`;
          }
        }

        // Meeting Days
        if (this.meetingDaysValue !== null) {
          for (let item of this.meetingDaysValue) {
            queryUrl += `mp_day=${item.value}&`;
          }
        }

        // Meeting Start & End Times
        if (this.startTimeValue !== null) {
          queryUrl += `mp_starttime=${(this.startTimeValue).value}&`;
        }
        
        if (this.endTimeValue !== null) {
          queryUrl += `mp_endtime=${(this.endTimeValue).value}&`;
        }

        // Course Text Input - eg CHEM or CHEM 120
        if (this.courseValue !== "") {
          // user entered class number - eg CHEM 120
          // regex searches for a number in input string
          if (/\d/g.test(this.courseValue)) {
            // first regex removes whitespace,
            // second and third regexes replace '<' and '>' to prevent html/script injection to a degree
            // the slice gets the last three characters which should be the class number
            // substring gets everything else, which should be the subject
            const tempStr = (this.courseValue).trim().replace(/\s/g, '').replace(/</g, "&lt;").replace(/>/g, "&gt;");
            
            const CATALOGNBR = tempStr.slice(tempStr.length - 3);
            const SUBJECT = tempStr.substring(0, tempStr.length - 3);

            queryUrl += `subject=${SUBJECT}&catalog=${CATALOGNBR}&`;
          }
          
          // user did not enter class number - eg CHEM
          else {
            // first regex removes whitespace,
            // second and third regexes replace '<' and '>' to prevent html/script injection to a degree
            const SUBJECT = (this.courseValue).trim().replace(/\s/g, '').replace(/</g, "&lt;").replace(/>/g, "&gt;");

            queryUrl += `subject=${SUBJECT}&`;
          }
        }

        return queryUrl;
      },


      /* Allows the course details box on the right to show data for a specific class 
      ** when that class is clicked on in the table on the left */
      getCourseData(item) {
        this.courseDataJSON = item; // this takes care of everything except the schedule data        

        // Everything below is related to calling the schedule api and getting data from it
        const termCodeIn = item.TermCode;
        const subjectIn = item.Subject;
        const catalogNumIn = item.CatalogNum;
        const sectionNumIn = item.SectionNum;

        const instructorNamesIn = item.Instructor;


        let currentObject = this;


        /* Makes a query url and sends it to the backend to get the secondary course details like Credit Exxlusions, Other Course Info, BS, Repeatability, Waitlist Capacity, Adv Prereqs, etc...
           that are not in the general search api and must instead be retrieved from an api call for a specific class only */
        axios.post('/secondaryCourseDetailsFunction', {
          queryUrl: `http://webapps.lsa.umich.edu/SAA/LSACGSvc/LSACGClasses.svc/${termCodeIn}/${subjectIn}/${catalogNumIn}/${sectionNumIn}/All`
        })
        .then(function (response) {
          // theres more - check out the SPANISH 232 page on actual lsa course guide or even better the actual api xml page in a browser - but these are the ones I'm choosing to include for the time being
          
          // You can find course building location in here also (Facility ID)
          // use this website to untangle facility_id, https://rooms.lsa.umich.edu/classrooms/CHEM1200
          // I don't think I can get location to work nicely enough to bother for now since you'd have to do some log-in duo shenanigans
          //currentObject.courseDataJSON["Location"] = (response.data).Facility_ID;

          // add Course Note, Location, remove waitlist capacity
          // theres other places these need to be added as well
          /*
          currentObject.courseDataJSON["Credit Exclusions"] = (response.data).CreditExcl;
          currentObject.courseDataJSON["Other Course Info"] = (response.data).CrsMiscInfo;
          currentObject.courseDataJSON["BS"] = (response.data).BSReqMetLongDesc;
          currentObject.courseDataJSON["Repeatability"] = (response.data).Repeat;
          currentObject.courseDataJSON["Waitlist Capacity"] = (response.data).WaitlistCapacity;
          currentObject.courseDataJSON["Advisory Prerequisites"] = (response.data).AdvPrereq;
          currentObject.courseDataJSON["Enforced Prerequisites"] = (response.data).EnfPrereq;
          currentObject.courseDataJSON["Lang Req"] = (response.data).LangReqMetLongDesc;
          currentObject.courseDataJSON["Cross-Listed Classes"] = (response.data).CrossListedWith;
          */

         currentObject.allCourseDetailsJSON = []; // clear out previous data, to be safe
         currentObject.allCourseDetailsJSON = response.data;

         currentObject.allCourseDetailsJSON.InstructorNames = instructorNamesIn;

        })
        .catch(function (error) {
          //alert(`There was an error retrieving the secondary course details for ${subjectIn} ${catalogNumIn} :(`);
        });




        /* Makes a query url and sends it to the backend to get the scheduling info for the currently selected class from the scheduling api */
        axios.post('/scheduleFunction', {
          scheduleUrl: `http://umich-schedule-api.herokuapp.com/v4/get_sections?term_code=${termCodeIn}&school=lsa&subject=${subjectIn}&catalog_num=${catalogNumIn}`
        })
        .then(function (response) {
          //clear the previous course's schedule data
          currentObject.scheduleJSON = [];
          currentObject.scheduleArray = [];

          currentObject.scheduleJSON = response.data;
          
          for (let section of response.data) {
            let tempObject = {
              "Section": `${section.SectionNumber} (${section.SectionType})`,
              "Enroll Stat": section.EnrollmentStatus,
              "Open Seats": section.AvailableSeats,
              "Meeting Day/Time": "",
            };

            for (let meeting of section.Meetings) {
              // if first meeting in array, then don't add a comma before it
              if (meeting.MeetingNumber === 1) {
                tempObject["Meeting Day/Time"] = `${meeting.Days} (${meeting.Times})`;
              }
              // for non-first meetings, add comma before them
              else {
                tempObject["Meeting Day/Time"] += `, ${meeting.Days} (${meeting.Times})`;
              }
            }

            (currentObject.scheduleArray).push(tempObject);
          }
        })
        .catch(function (error) {
          alert(`There was an error retrieving the schedule information for ${subjectIn} ${catalogNumIn} :(`);
        });
      },


      enrollStatColor(item, type) {
        if (!item || type !== "row") return;
        if (item["Enroll Stat"] === "Open") return 'table-success';
        if (item["Enroll Stat"] === "Wait List") return 'table-warning';
        if (item["Enroll Stat"] === "Closed") return 'table-danger';
      },

      // This function is no longer being used
      getTermCodeOfSystemDate() {
        const d = new Date();
        const year = d.getFullYear();
        const monthNum = d.getMonth();

        let codeFor2004Season;

        // Winter
        if (monthNum <= 3) {
          codeFor2004Season = 1470;
        }
        // Spring
        else if (monthNum <= 5) {
          codeFor2004Season = 1480;
        }
        // Summer
        else if (monthNum <= 7) {
          codeFor2004Season = 1500; // 1490 is the Sp/Su combined term
        }
        // Fall
        else {
          codeFor2004Season = 1510;
        }
        
        return (codeFor2004Season + (50 * (year - 2004)))
      },


      makeCourseDetailsHTMLString(jsonIn) {
        let HTMLstringArray = [];

        for (let property in jsonIn) {
          
          if (property === "ClassDescr") { // don't print the class description, theres a separate tab for it
            continue;
          }

          else if (property === "Instructors") {
              // unshift is push to front
              HTMLstringArray.unshift(`<tr><td><strong>Instructors: </strong></td> <td>${jsonIn.InstructorNames}</td></tr>`);
          }

          else if (property === "MeetingPatterns") {
            
            let meetingHTML = "";

            //Meeting Place
            meetingHTML += `<tr><td><strong>Meeting Place: </strong></td> <td>${jsonIn.MeetingPatterns.CGMeetingPattern.Facility_ID}</td></tr>`;
            
            //Meeting Days
            meetingHTML += `<tr><td><strong>Meeting Days: </strong></td> <td>`;
            
            if (jsonIn.MeetingPatterns.CGMeetingPattern.Mon == 'Y') {meetingHTML += `Mon, `;}
            if (jsonIn.MeetingPatterns.CGMeetingPattern.Tues == 'Y') {meetingHTML += `Tues, `;}
            if (jsonIn.MeetingPatterns.CGMeetingPattern.Wed == 'Y') {meetingHTML += `Wed, `;}
            if (jsonIn.MeetingPatterns.CGMeetingPattern.Thurs == 'Y') {meetingHTML += `Thurs, `;}
            if (jsonIn.MeetingPatterns.CGMeetingPattern.Fri == 'Y') {meetingHTML += `Fri, `;}
            if (jsonIn.MeetingPatterns.CGMeetingPattern.Sat == 'Y') {meetingHTML += `Sat, `;}
            if (jsonIn.MeetingPatterns.CGMeetingPattern.Sun == 'Y') {meetingHTML += `Sun, `;}

            meetingHTML = meetingHTML.slice(0, -2); // removes the space and comma after last meeting date
            meetingHTML += `</td></tr>`;


            //Meeting Time: Time like 16:00, which is 4:00PM
            let startTime = ((jsonIn.MeetingPatterns.CGMeetingPattern.Meeting_Time_Start).slice(11, 16)).toString();
            let endTime = ((jsonIn.MeetingPatterns.CGMeetingPattern.Meeting_Time_End).slice(11, 16)).toString();

            const startTimeArray = startTime.split(":");
            let hour = parseInt(startTimeArray[0]);
            let minutes = startTimeArray[1];

            //format start time
            if (hour === 0) {startTime = ("12:" + minutes + "AM");}
            else if (hour === 12) {startTime = ("12:" + minutes + "PM");}
            else if (hour > 12) {startTime = ((hour - 12) + ":" + minutes + "PM");} // other PM times
            else {startTime = (hour + ":" + minutes + "AM");} // other AM times

            const endTimeArray = endTime.split(":");
            hour = parseInt(endTimeArray[0]);
            minutes = endTimeArray[1];

            //format end time
            if (hour === 0) {endTime = ("12:" + minutes + "AM");}
            else if (hour === 12) {endTime = ("12:" + minutes + "PM");}
            else if (hour > 12) {endTime = ((hour - 12) + ":" + minutes + "PM");} // other PM times
            else {endTime = (hour + ":" + minutes + "AM");} // other AM times

            meetingHTML += `<tr><td><strong>Meeting Time: </strong></td> <td> ${startTime} to ${endTime} </td></tr>`;


            //Meeting Dates Range: Date like 2020-01-08, which is 01/08/20
            let startDate = ((jsonIn.MeetingPatterns.CGMeetingPattern.Meeting_Start_Dt).slice(0, 10)).toString();
            let endDate = ((jsonIn.MeetingPatterns.CGMeetingPattern.Meeting_End_Dt).slice(0, 10)).toString();

            //format start date
            const startDateArray = startDate.split("-");
            startDate = (startDateArray[1] + "/" + startDateArray[2] + "/" + startDateArray[0].slice(2,4));

            //format end date
            const endDateArray = endDate.split("-");
            endDate = (endDateArray[1] + "/" + endDateArray[2] + "/" + endDateArray[0].slice(2,4));

            meetingHTML += `<tr><td><strong>Meeting Dates: </strong></td> <td> ${startDate} to ${endDate} </td></tr>`;

            // unshift = push to front
            HTMLstringArray.unshift(meetingHTML);
          }

          else { // every other property
            HTMLstringArray.push(`<tr><td><strong>${property}:</strong></td> <td>${jsonIn[property]}</td></tr>`);

            for (let i = 0; i < HTMLstringArray.length; i++) {
              if (HTMLstringArray[i].includes("[object Object]")) {
                HTMLstringArray[i] = "";
              }
            }
          }
        }

        return HTMLstringArray.join("");
      },
    }
  }
</script>



<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style>
:root {
  --umichBlue: #00274c;
  --umichYellow: #ffcb05;
  --darkRed: #cc5454;
  --grayBgColor: #eee;
  --umichBlueHover: #32526f;
  --darkRedHover: #d67676;
}

/*
#00274c is Umich Blue
#ffcb05 is Umich Maize/Yellow
*/
/* changed default vue green to the umich blue on both menu options and tags */
.multiselect__spinner:before,
.multiselect__spinner:after {
  border-color: var(--umichBlue) transparent transparent;
}
.multiselect__tag,
.multiselect__option--highlight,
.multiselect__option--highlight:after {
  background: var(--umichBlue);
}

/* the 'x' used to delete tags */
.multiselect__tag-icon:after {
  color: var(--umichYellow);
}
.multiselect__tag-icon:focus,
.multiselect__tag-icon:hover {
  background: var(--umichBlueHover);
}
.multiselect__tag-icon:focus:after,
.multiselect__tag-icon:hover:after {
  color: var(--umichYellow);
}

/* red color when hovering over a tag in case user wants to unselect an option */
.multiselect__option--selected.multiselect__option--highlight {
  background: var(--darkRed);
  color: white;
}
.multiselect__option--selected.multiselect__option--highlight:after {
  background: var(--darkRed);
  color: white;
}

/* font size of dropdown */
.multiselect,
.multiselect__input,
.multiselect__single {
  font-size: 12px;
}


body {
  background-color: var(--umichBlue);
}


#searchButton {
  background-color: var(--umichBlue);
  border-color: var(--umichBlue);
}
#clearButton {
  background-color: var(--darkRed);
  border-color: var(--darkRed);
}


#searchButton:hover {
  background-color: var(--umichBlueHover);
}
#clearButton:hover {
  background-color: var(--darkRedHover);
}


#search-criteria-form-card {
  background-color: var(--grayBgColor);
  border-radius: 0px;
}

#search-results-table {
  background-color: var(--grayBgColor);
  font-size: 12px;
  overflow-x: hidden;
  overflow-y: scroll; 
  
  height: 400px; 
  height: 80vh; /* Two heights just in case user's browser doesn't support viewport */
}


#course-details-card {
  border-radius: 0px;
  background-color: var(--grayBgColor);
  overflow-x: hidden;
  overflow-y: scroll; 
  
  height: 360px;
  height: 70vh; /* Two heights just in case user's browser doesn't support viewport */
}

#course-details-tab-container {
  border-radius: 0px;
}

.course-details-link-button {
  margin-top: 10px;
  margin-bottom: 10px;
}

#course-details-link-buttons-container {
  text-align: center;
}


/* Color of the tabs in the Course Details section */
.nav-pills > li > a.active {
  background-color: var(--umichBlue) !important;
  color: #fff !important;
}

.nav-pills > li > a {
  color: var(--umichBlue) !important;
}


#selected-course-title {
  color: var(--umichYellow);
}

#page-buttons-container {
  margin-bottom: 10px;
}

</style>




