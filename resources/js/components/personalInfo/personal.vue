<template>
   <form>
        <h5 class="text-center">From vue Personal Information&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s personal basic information that is required for the tax return."></i></h5>
    <p class="text-center">Please enter your full name&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s full formal name that is used for e-TIN."></i></p>
    <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input onkeyup="validate(id);" id="PersonalInformation_FullName" name="PersonalInformation[Name]" type="text" placeholder="Please Enter your full name" value="" class="form-control">
    </div>   

    <p class="text-center">Please enter your date of birth&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Legal date of birth which is on National ID card or on Passport."></i></p>
    <div class="input-group datepicker date margin-bottom-sm">
        <b-form-datepicker id="datepicker-placeholder" placeholder="Date of Birth" local="en"></b-form-datepicker>
    </div>

    <p class="text-center">Please enter your marital status&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer to select marital condition."></i></p>
    <div class="info">
        <p>
            <label>
                <input value="single" name="single" id="PersonalInformation_Disability" type="radio">
                <span class="overlay"></span> <span class="text">Single</span>
            </label>
            <label style="margin-left:10px">
                <input value="married" name="married" id="PersonalInformation_Disability" type="radio">
                <span class="overlay"></span> <span class="text">Married</span>
            </label>
        </p>
    </div>

    <div class="married box">
        <p class="text-center"> Please enter your Spouse Name&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Electronic Taxpayer's Identification Number. It contains 12 digits."></i></p>
        <div class="input-group margin-bottom-sm single-input">
            <input class="form-control" placeholder="Spouse name" name="PersonalInformation[ETIN]" id="PersonalInformation_ETIN" type="text" value="">
        </div>
        <p class="text-center"> Please enter your Spouse e-TIN&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Electronic Taxpayer's Identification Number. It contains 12 digits."></i></p>
        <div class="input-group margin-bottom-sm single-input">
            <input class="form-control" placeholder="E-TIN Number" name="PersonalInformation[ETIN]" id="PersonalInformation_ETIN" type="text" value="">
        </div>
    </div>
    <p class="text-center">Is any of your children disabled?&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Person with disability means an individual registered as person with disability under section 31 of Persons with Disabilities Rights and Protection Act 2013."></i></p>
    <div class="info">
        <p>
            <label>
                <input value="No" name="PersonalInformation[Children]" id="PersonalInformation_Children" class="static_class" type="radio" onclick="showNo();">										<span class="overlay"></span> <span class="text">NO</span>
            </label>
            <label style="margin-left:10px">
                <input value="Yes" name="PersonalInformation[Children]" id="PersonalInformation_Children"  class="static_class" type="radio" onclick="showYes();">										<span class="overlay"></span> <span class="text">YES</span>
            </label>
        </p>
        <div id="yesContent">
            <p class="text-center">Has your spouse availed the exemption for disable child?  &nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Person with disability means an individual registered as person with disability under section 31 of Persons with Disabilities Rights and Protection Act 2013."></i></p>
            <p>
            <label>
                <input value="No" name="PersonalInformation[Children]" id="PersonalInformation_Children" class="static_class" type="radio">										<span class="overlay"></span> <span class="text">NO</span>
            </label>
            <label style="margin-left:10px">
                <input value="Yes" name="PersonalInformation[Children]" id="PersonalInformation_Children"  class="static_class" type="radio">										<span class="overlay"></span> <span class="text">YES</span>
            </label>
        </p>
        </div>
        
    </div>

    <p class="text-center">Your Gender&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer to select gender option."></i></p>
    <div class="info">
        <p>
            <label>
                <input value="Male" name="PersonalInformation[Disability]" id="PersonalInformation_Disability" type="radio">
                <span class="overlay"></span> <span class="text">Male</span>
            </label>
            <label style="margin-left:10px">
                <input value="Female" name="PersonalInformation[Disability]" id="PersonalInformation_Disability" type="radio">
                <span class="overlay"></span> <span class="text">Female</span>
            </label>
        </p>
    </div>

    <p class="text-center">Your residential status?&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="If taxpayers stay minimum 180days in an income year Occasional or continuous In Bangladesh consider as residential. Any one Occasional or continuous Stay 90days and next 4year total minimum 360days in Bangladesh also consider as residential."></i></p>
    <div class="info">
        <p>
            <label>
                <input value="no-resident" name="PersonalInformation[Disability]" id="PersonalInformation_Disability" type="radio">
                <span class="overlay"></span> <span class="text">No-resident</span>
            </label>
            <label style="margin-left:10px">
                <input value="Resident" name="PersonalInformation[Disability]" id="PersonalInformation_Disability" type="radio">
                <span class="overlay"></span> <span class="text">Resident</span>
            </label>
        </p>
    </div>

    <p class="text-center">Your National ID #?&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="An identity number. The national identification number which is given by Bangladesh Election commission."></i></p>
    <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input onkeyup="validate(id);" id="PersonalInformation_FullName" name="PersonalInformation[Name]" type="text" placeholder="Your National ID" value="" class="form-control">
    </div> 

    <p class="text-center">
        <a href="" class="btn btn-success btn-tab-next btn-outline-rounded green"> Save & Continoue <span style="margin-left:10px;" class="fa fa-arrow-right"></span></a>
    </p>
    <div class="login-button">
        <div class="back float-left">
            <a class="btn btn-success btn-tab-prev  for-clr" data-toggle="tab" href="#PIDetails-1" id="knowMe_btn"> <i class="fa fa-chevron-left"></i><span class="previous-text"> Previous</span></a>
        </div>
        <div class="next float-right">
                <a class="btn btn-success btn-tab-next for-clr" href="#" id="final_btn"><span class="previous-text"> Next </span> <i class="fa fa-chevron-right"></i></a>
        </div>
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