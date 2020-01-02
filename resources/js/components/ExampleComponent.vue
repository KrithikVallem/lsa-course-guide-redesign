<!-- I got this example vue template from a guide on https://www.itsolutionstuff.com/ -->

<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">card header testing - please work</div>
 
                    <div class="card-body">
                        <form @submit="formSubmit">
                        <p>card body testing - please work</p>
                        <strong>Name:</strong>
                        <input type="text" class="form-control" v-model="name">
                        <strong>Description:</strong>
                        <textarea class="form-control" v-model="description"></textarea>
 
                        <button class="btn btn-success">Submit</button>
                        </form>
                        <strong>Output:</strong>
                        <pre>
                        {{output}}
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              name: '',
              description: '',
              output: ''
            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('/formSubmit', {
                    name: this.name,
                    description: this.description
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    // data gets sent to backend using axios.post, which sends back a response
                    // then the output spot on the frontend above has its value set to the response sent from backend
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }
        }
    }
</script>


<style scoped>
    /* 
    this works!, just use npm run dev and an incognito window to test
    */
</style>