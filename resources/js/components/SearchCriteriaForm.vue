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
                        placeholder="Term: (Winter 2020)"
                        v-model="termValue"
                        :options="termOptions" 
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="false"
                        :allow-empty="true"
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
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="true"
                        :show-labels="false"
                        :max="1"
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
                        :multiple="true"
                        :searchable="false"
                        :close-on-select="true"
                        :show-labels="false"
                        :max="1"
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
                    <b-button type="submit" id="searchButton" @click="searchFunction" >Search</b-button>
                    <b-button type="reset" id="clearButton" @click="clearFunction" >Clear</b-button>
                  </div>
                </b-form-row>
          </b-card>
        </b-col>
      </b-row>

      <b-row>
        <b-col id="search-results-col" style="color: white;" class="col-4">
          <b-table
           striped 
           hover 
           stacked 
           borderless  
           small

           :items="searchResultsArray" 
           :fields="searchResultsTableFields"

           id="searchResultsTable" 
           @row-clicked="showClassData"
           style="background-color: #eee; font-size: 12px; overflow-y: scroll; height: 400px; height: 80vh; overflow-x: hidden;" 
           >
          
          <!-- This works with a normal <table> tag,  not <b-table, but its not responsive like the b-table>
            <b-thead>
              <b-tr>
                <b-th>Title/Section</b-th>
                <b-th>Term</b-th>
                <b-th>Credits</b-th>
                <b-th>Instructor</b-th>
                <b-th>Req</b-th>
              </b-tr>
            </b-thead>

            <b-tbody>
              <b-tr v-for="course of searchResultsArray" :key="course.keyNum">
                <b-td> {{ course.Title }} </b-td>
                <b-td> {{ course.Term }} </b-td>
                <b-td> {{ course.Credits }} </b-td>
                <b-td> {{ course.Instructor }} </b-td>
                <b-td> {{ course.Req }} </b-td>
              </b-tr>
            </b-tbody>
          -->
          </b-table>
          
<!--
          <ul>
            <li v-for="course of searchResultsArray" :key="course.keyNum">
              {{ course.Title }}
            </li>
          </ul> -->
        </b-col>

        <b-col id="class-details-col" style="color: white;" class="col-8">
          {{ this.searchResultsJSON }}
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
        termValue: null,
        termOptions: [{value: "2300", option: "Summer 2020"}, {value: "2290", option: "Sp/Su 2020"}, {value: "2280", option: "Spring 2020"}, {value: "2270", option: "Winter 2020"}, {value: "2260", option: "Fall 2019"}, {value: "2250", option: "Summer 2019"}, {value: "2240", option: "Sp/Su 2019"}, {value: "2230", option: "Spring 2019"}, {value: "2220", option: "Winter 2019"}, {value: "2210", option: "Fall 2018"}, {value: "2200", option: "Summer 2018"}, {value: "2190", option: "Sp/Su 2018"}, {value: "2180", option: "Spring 2018"}, {value: "2170", option: "Winter 2018"}, {value: "2160", option: "Fall 2017"}, {value: "2150", option: "Summer 2017"}, {value: "2140", option: "Sp/Su 2017"}, {value: "2130", option: "Spring 2017"}, {value: "2120", option: "Winter 2017"}, {value: "2110", option: "Fall 2016"}, {value: "2100", option: "Summer 2016"}, {value: "2090", option: "Sp/Su 2016"}, {value: "2080", option: "Spring 2016"}, {value: "2070", option: "Winter 2016"}, {value: "2060", option: "Fall 2015"}, {value: "2050", option: "Summer 2015"}, {value: "2040", option: "Sp/Su 2015"}, {value: "2030", option: "Spring 2015"}, {value: "2020", option: "Winter 2015"}, {value: "2010", option: "Fall 2014"}, {value: "2000", option: "Summer 2014"}, {value: "1990", option: "Sp/Su 2014"}, {value: "1980", option: "Spring 2014"}, {value: "1970", option: "Winter 2014"}, {value: "1960", option: "Fall 2013"}, {value: "1950", option: "Summer 2013"}, {value: "1940", option: "Sp/Su 2013"}, {value: "1930", option: "Spring 2013"}, {value: "1920", option: "Winter 2013"}, {value: "1910", option: "Fall 2012"}, {value: "1900", option: "Summer 2012"}, {value: "1890", option: "Sp/Su 2012"}, {value: "1880", option: "Spring 2012"}, {value: "1870", option: "Winter 2012"}, {value: "1860", option: "Fall 2011"}, {value: "1850", option: "Summer 2011"}, {value: "1840", option: "Sp/Su 2011"}, {value: "1830", option: "Spring 2011"}, {value: "1820", option: "Winter 2011"}, {value: "1810", option: "Fall 2010"}, {value: "1800", option: "Summer 2010"}, {value: "1790", option: "Sp/Su 2010"}, {value: "1780", option: "Spring 2010"}, {value: "1770", option: "Winter 2010"}, {value: "1760", option: "Fall 2009"}, {value: "1750", option: "Summer 2009"}, {value: "1740", option: "Sp/Su 2009"}, {value: "1730", option: "Spring 2009"}, {value: "1720", option: "Winter 2009"}, {value: "1710", option: "Fall 2008"}, {value: "1700", option: "Summer 2008"}, {value: "1690", option: "Sp/Su 2008"}, {value: "1680", option: "Spring 2008"}, {value: "1670", option: "Winter 2008"}, {value: "1660", option: "Fall 2007"}, {value: "1650", option: "Summer 2007"}, {value: "1640", option: "Sp/Su 2007"}, {value: "1630", option: "Spring 2007"}, {value: "1620", option: "Winter 2007"}, {value: "1610", option: "Fall 2006"}, {value: "1600", option: "Summer 2006"}, {value: "1590", option: "Sp/Su 2006"}, {value: "1580", option: "Spring 2006"}, {value: "1570", option: "Winter 2006"}, {value: "1560", option: "Fall 2005"}, {value: "1550", option: "Summer 2005"}, {value: "1540", option: "Sp/Su 2005"}, {value: "1530", option: "Spring 2005"}, {value: "1520", option: "Winter 2005"}, {value: "1510", option: "Fall 2004"}, {value: "1500", option: "Summer 2004"}, {value: "1490", option: "Sp/Su 2004"}, {value: "1480", option: "Spring 2004"}],
        
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

        searchResultsJSON: [],
        searchResultsTableFields: ["Title", "Section", "Term", "Credits", "Reqs", "Other", "Instructor"],
        searchResultsArray: [],

      }
    },

    // stuff that happens more or less on page load
    mounted () {
      
    },

    methods: {
      clearFunction() {
        const confirmResponse = confirm("Do you want to clear your search criteria?")

        if (confirmResponse === true) {
          this.termValue = null;
          this.creditTypeValue = {option: "Undergraduate", value: "ug"};
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


      searchFunction(event) {
        event.preventDefault();
        this.searchResultsJSON = [];
        this.searchResultsArray = [];
        let currentObject = this;

        axios.post('/searchFunction', {
          queryUrl: this.constructQueryUrl(1)
        })
        .then(function (response) {
          // I'm building the array of data I want in the axios response because I couldn't get it to work with Vue's v-for loop
          
          let keyNum = 0; // provides a unique id for each table row so vue can render it properly

          for (let course of (response.data).Classes.CGClassAbbr) {
            let tempObject = {
              "Title": `${course.Subject} ${course.CatalogNbr} - ${course.Title}`,
              "Section": (`Section ${course.ClassSection} (${course.Component}) - ${course.Topic}`).replace(" - [object Object]", ""), // removes the error text for classes with no section topic,
              "Term": course.TermDescr,
              "Credits": course.Credit,
              "Reqs": course.ReqMet,
              "Other": course.OtherGroupings,
              "Instructor": [],
              "keyNum": keyNum.toString()
            };


            keyNum += 1;
/* will fix this later
            for (let instr of course.Instructors.CGInstructor) {
              (tempObject.Instructor).push(instr.Name);
            }
*/
            (currentObject.searchResultsArray).push(tempObject);
          }
        })
        .catch(function (error) {
          currentObject.searchResultsJSON = error;
        });
      },



      constructQueryUrl(pageNumberIn) {
        // url is constructed in the order presented in the docs: http://webapps.lsa.umich.edu/SAA/LSACGSvc/AdvSrch.svc/help

        const AUDIENCE = "public";
        const PAGENO = pageNumberIn.toString();
        const ROWSPERPAGE = "30";
        
        let queryUrl = `http://webapps.lsa.umich.edu/SAA/LSACGSvc/AdvSrch.svc/Classes/PagedListAbbr`;

        // CLASSTYPE
        const CLASSTYPE = this.creditTypeValue.value;
        queryUrl += `/${CLASSTYPE}/${AUDIENCE}/${PAGENO}/${ROWSPERPAGE}/search?`;

        // TERM
        if (this.termValue !== null) {
          for (let item of this.termValue) {
            queryUrl += `term=${item.value}&`;
          }
        }
        // if user didn't select a term, the term is set to Winter 2020 (2270)
        // this complex stuff is needed because the url won't form properly when I set a default term on page load
        else if (this.termValue === null){
          queryUrl += `term=2270&`;
        }


        // SUBJECT
        if (this.subjectValue !== null) {
          for (let item of this.subjectValue) {
            queryUrl += `subject=${item.value}&`;
          }
        }


        // moved COURSE input stuff to end due to formatting difficulties


        if (this.keywordValue !== "") {
          let keyword = (this.keywordValue).trim().replace(" ", "+");
          queryUrl += `keyword=${keyword}&`;
        }
     
        if (this.instructorValue !== "") {
          // replacing the spaces with '+' doesn't make the search work, but keeps the url valid
          // I should replace the instructor text box with a multisearch once I get a list of all faculty
          let instrname = (this.instructorValue).trim().replace(" ", "+");
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
          for (let item of this.startTimeValue) {
            queryUrl += `mp_starttime=${item.value}&`;
          }
        }
        
        if (this.endTimeValue !== null) {
          for (let item of this.endTimeValue) {
            queryUrl += `mp_endtime=${item.value}&`;
          }
        }

        // Course Text Input - eg CHEM or CHEM 120
        if (this.courseValue !== "") {
          // user entered class number - eg CHEM 120
          // regex searches for a number in input string
          if (/\d/g.test(this.courseValue)) {
            // regex removes whitespace, the slice gets the last three characters which should be the class number
            const tempStr = (this.courseValue).trim().replace(/\s/g, '');
            
            const CATALOGNBR = tempStr.slice(tempStr.length - 3);
            const SUBJECT = tempStr.substring(0, tempStr.length - 3);

            queryUrl += `subject=${SUBJECT}&catalog=${CATALOGNBR}&`;
          }
          
          // user did not enter class number - eg CHEM
          else {
            // to make an invalid input with spaces into a valid (though useless) query with no spaces
            const SUBJECT = (this.courseValue).trim().replace(/\s/g, '');

            queryUrl += `subject=${SUBJECT}&`;
          }
        }

        return queryUrl;
      },


      showClassData(item) {
        this.searchResultsJSON = item;
      }





    }
  }
</script>



<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style>
/*
#00274c is Umich Blue
#ffcb05 is Umich Maize/Yellow
*/

/* changed default vue green to the umich blue on both menu options and tags */
.multiselect__spinner:before,
.multiselect__spinner:after {
  border-color: #00274c transparent transparent;
}
.multiselect__tag,
.multiselect__option--highlight,
.multiselect__option--highlight:after {
  background: #00274c;
}

/* the 'x' used to delete tags */
.multiselect__tag-icon:after {
  color: #ffcb05;
}
.multiselect__tag-icon:focus,
.multiselect__tag-icon:hover {
  background: #32526f;
}
.multiselect__tag-icon:focus:after,
.multiselect__tag-icon:hover:after {
  color: #ffcb05;
}

/* red color when hovering over a tag in case user wants to unselect an option */
.multiselect__option--selected.multiselect__option--highlight {
  background: #cc5454;
  color: #fff;
}
.multiselect__option--selected.multiselect__option--highlight:after {
  background: #cc5454;
  color: #fff;
}

/* font size of dropdown */
.multiselect,
.multiselect__input,
.multiselect__single {
  font-size: 12px;
}


body {
  background-color: #00274c;
}


#searchButton {
  background-color: #00274c;
  border-color: #00274c;
}
#clearButton {
  background-color: #cc5454;
  border-color: #cc5454;
}



#search-criteria-form-card {
  background-color: #eee;
  border-radius: 0px;
}

</style>




