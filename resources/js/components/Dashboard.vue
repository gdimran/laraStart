<template>
    <div id="personal" class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                      
                    </div>
                    <div class="card-body">
                      <etin></etin>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>


<script>
//Vue.component('Etin', require('./components/personalInfo/e-tin.vue').default);
import Etin from './personalInfo/e-tin.vue';

export default {
    components: {
            Etin
        },
    // mounted(){
    //     console.log('component mounted.')
    // }
}
</script>