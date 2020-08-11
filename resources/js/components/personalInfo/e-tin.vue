<template>
    
    <form>
        <h5 class="text-center">Please enter your e-TIN&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"  v-b-tooltip.hover  title="Electronic Taxpayer's Identification Number. It contains 12 digits."></i></h5>
        <div class="input-group margin-bottom-sm single-input">
            <input class="form-control form-outline-rounded" placeholder="E-TIN Number" name="PersonalInformation[ETIN]" id="PersonalInformation_ETIN" type="text" value="">
        </div>
        <div class="login-button">
            <p class="button-padding">
                <button class="btn btn-success btn-lg btn-tab-next" type="button" id="PIDetails-2_btn">Save &amp; Continue</button>
            </p>
                        
            <div class="clearfix"></div>
        </div>
    </form>


</template>

<script>


export default {
    mounted(){
        console.log('component mounted.')
    }
}
</script>