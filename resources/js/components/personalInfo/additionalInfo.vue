<template>
            
											<form id="PIDetailsForm-2">
                                                <h2>From Component Additional Personal Information &nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s additional personal information that is required for the tax return."></i></h2>
												<div class="col-lg-12">
													<p>Do you have any kind of disability?<span class="required">*</span>&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Person with disability means an individual registered as person with disability under section 31 of Persons with Disabilities Rights and Protection Act 2013."></i></p>
													<div class="col-lg-offset-4 col-lg-4" id="disability_error"></div>
												</div>
												<div id="PersonalInformation_details2_error"></div>
												<div class="info">
													<p>
														<label>
															<input value="NO" name="PersonalInformation[Disability]" id="PersonalInformation_Disability" type="radio">
															<span class="overlay"></span> <span class="text">NO</span>
														</label>
														<label style="margin-left:10px">
															<input value="YES" name="PersonalInformation[Disability]" id="PersonalInformation_Disability" type="radio">
															<span class="overlay"></span> <span class="text">YES</span>
														</label>
													</p>
												</div>


												<input value="40377" id="CPIId" name="PersonalInformation[CPIId]" type="hidden">
												<div class="mail-box">
													<div class="col-lg-12">
														<p>Please enter your father's name&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s father’s name"></i></p>
														<div id="PersonalInformation_fathersName_error"></div>
														<input class="form-control" placeholder="Father's Name" onkeyup="validate(id);" name="PersonalInformation[FathersName]" id="PersonalInformation_FathersName" type="text" maxlength="80">
													</div>
												</div>

												<div class="mail-box">
													<div class="col-lg-12">
														<p>Please enter your mother's name&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s mother's name"></i></p>
														<div id="PersonalInformation_mothersName_error"></div>
														<input class="form-control" placeholder="Mother's Name" onkeyup="validate(id);" name="PersonalInformation[MothersName]" id="PersonalInformation_MothersName" type="text" maxlength="80">
													</div>
												</div>
												<div class="clearfix"></div>


												<div class="mail-box">
													<div class="clearfix"></div>


														<p>Number of dependant children of the family&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Number of children who are dependant on the family."></i></p>

														<div id="PersonalInformation_NoOfAdultInFamily_error"></div>
														<div class="col-lg-12">
															<input class="form-control" placeholder="Number of Adult" min="0" max="10" onkeypress="return isNumberKey(event)" name="PersonalInformation[NoOfAdultInFamily]" id="PersonalInformation_NoOfAdultInFamily" type="number">									
														</div>
														<div class="col-lg-12">
															<input class="form-control" placeholder="Number of Children" min="0" max="10" onkeypress="return isNumberKey(event)" name="PersonalInformation[NoOfChildInFamily]" id="PersonalInformation_NoOfChildInFamily" type="number">									
														</div>

												</div>
												<br>
												<div class="clearfix"></div>


												<p>Are you a gazetted war wounded freedom fighter?<span class="required">*</span>&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="If Taxpayer is a gazetted war wounded freedom fighter?"></i></p>
												<div class="col-lg-12">
													<div class="col-lg-offset-4 col-lg-4" id="freedomFighter_error"></div>
												</div>
												<div class="info">
													<p>
														<label>
															<input value="N" name="PersonalInformation[FreedomFighter]" id="PersonalInformation_FreedomFighter" type="radio">										<span class="overlay"></span> <span class="text">NO </span>
														</label>
														<label style="margin-left:10px">
															<input value="Y" name="PersonalInformation[FreedomFighter]" id="PersonalInformation_FreedomFighter" type="radio">										<span class="overlay"></span> <span class="text">YES</span>
														</label>
													</p>
												</div>


												<p>Are you a government employee?<span class="required">*</span>&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="If Taxpayer is/was employed to a government organization."></i></p>
												<div class="col-lg-12">
													<div class="col-lg-offset-4 col-lg-4" id="govEmployee_error"></div>
												
													<div class="info">
														<p>
															<label>
																<input value="No" name="PersonalInformation[GovernmentEmployee]" id="PersonalInformation_GovernmentEmployee" class="static_class" type="radio">										<span class="overlay"></span> <span class="text">NO</span>
															</label>
															<label style="margin-left:10px">
																<input value="Yes" name="PersonalInformation[GovernmentEmployee]" id="PersonalInformation_GovernmentEmployee"  class="static_class" type="radio">										<span class="overlay"></span> <span class="text">YES</span>
															</label>
														</p>
													</div>
												</div>


												<p>Area of residence<span class="required">*</span>&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s residential location."></i></p>
												<div class="col-lg-12">
													<div class="col-lg-offset-4 col-lg-4" id="AreaOfResidence_error"></div>
												</div>
												<div class="col-lg-12">
													<select id="PersonalInformation_AreaOfResidence" class="form-control" name="PersonalInformation[AreaOfResidence]">
														<option value="">Choose</option>
														<option value="1"> Dhaka and Chittagong City Corporation</option>
														<option value="2">Other City Corporation</option>
														<option value="3"> Other Areas</option>
													</select>
												</div>

												<!--
												################   TAX ZONE   #######################
												-->
												<p>Tax zone<span class="required">*</span>&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer should submit his/her return to a certain circle under a tax zone. You can find your Tax Zone in your ETIN Certificate."></i></p>
												<div class="present-address-group mail-box">
													<div class="col-lg-12">
														<div id="tax_zone_error"></div>
													</div>
													<div class="clearfix"></div>

													<div class="col-lg-12">
														<input class="form-control" placeholder="Taxes Circle" name="PersonalInformation[TaxesCircle]" id="PersonalInformation_TaxesCircle" type="text" maxlength="80">	</div>

													<div class="col-lg-12">
														<input class="form-control" placeholder="Taxes Zone" name="PersonalInformation[TaxesZone]" id="PersonalInformation_TaxesZone" type="text" maxlength="80">	
													</div>
													<div class="clearfix"></div>
												</div>

												<!--
												################   END TAX ZONE   #######################
												-->
												<!--
												################   START Employee/Business name, address   #######################
												-->

												<p>Please enter the name and address of your employer / business &nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s employer’s name and address details."></i></p>

												<div class="mail-box">
													<div class="col-lg-12">
														<input class="form-control" placeholder="Employer Name" name="PersonalInformation[EmployerName]" id="PersonalInformation_EmployerName" type="text" maxlength="80">	</div>

													<div class="col-lg-12">
														<textarea size="20" maxlength="255" class="form-control" placeholder="Employer Address" name="PersonalInformation[EmployerAddress]" id="PersonalInformation_EmployerAddress"></textarea>	</div>
												</div>
												<p>Please enter the BIN number&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s employer’s business identification number like TIN."></i></p>

												<div class="mail-box">
													<div class="col-lg-12">
														<input class="form-control int_field" placeholder="Business Identification Number" maxlength="12" name="PersonalInformation[BusinessIdentificationNumber]" id="PersonalInformation_BusinessIdentificationNumber" type="text">	</div>
												</div>
												<br>
												<br>

												<div class="clearfix"></div>
												<!--
												################   END Employee/Business name, address    #######################
												-->
												<p>Please enter your present address<span class="required">*</span>&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s present location."></i></p>
												<div class="present-address-group mail-box">

													<div class="clearfix"></div>

													<div class="col-lg-12">
														<div id="PersonalInformation_presentAddress_error"></div>
														<textarea class="form-control" placeholder="Present address" name="PersonalInformation[PresentAddress]" id="presentAddress"></textarea>	
													</div>

													<div class="clearfix"></div><p class="p_color"></p>
													<div class="col-lg-12">
														<input class="form-control" placeholder="Postcode" name="PersonalInformation[ZipCode]" id="present_ZipCode" type="text">	</div>
													<div class="clearfix"></div><p class="p_color"></p>


													<div class="col-lg-12">
														<div class="input-group mb-3">
														  <select class="custom-select" id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
															<option value="" disabled selected>Choose Division</option>
															<option>Chattagram</option>
															<option>Rajshahi</option>
															<option>Khulna</option>
															<option>Barisal</option>
															<option>Sylhet</option>
															<option>Dhaka</option>
															<option>Rangpur</option>
															<option>Mymensingh</option>
														  </select>
														  <div class="input-group-append">
															<label class="input-group-text" for="inputGroupSelect02">Options</label>
														  </div>
														</div>
														<div class="input-group mb-3">
														  <select class="custom-select" id="citySelect" size="1">
															<option value="" disabled selected>Choose District</option>
															<option></option>
														  </select>
														  <div class="input-group-append">
															<label class="input-group-text" for="inputGroupSelect02">Options</label>
														  </div>
														</div>
													</div>

													<input id="SC" type="hidden" value="0" name="SC">
													<input id="employeeType" type="hidden" name="employeeType">
													<div class="col-lg-12">
														<div class="checkbox">
															<label class="checkbox-inline">
																<input type="checkbox" id="same" name="same" onchange= "addressFunction()"/>              
																<label for = "same">If same as current address select this box.</label> 
															</label>
														</div>
													</div>

													<div class="col-lg-12">
														<div id="PermanentAddressBox">
															<p>Please enter your permanent address<span class="required">*</span>&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title="Taxpayer’s permanent location."></i></p>
															<div id="PersonalInformation_permanentAddress_error"></div>
															<textarea class="form-control" placeholder="Permanent Address" name="PersonalInformation[PermanentAddress]" id="permanentAddress"></textarea></div>
													</div>
													<div class="clearfix"></div><p class="p_color"></p>

													<p>Contact Details&nbsp;&nbsp;<i class="fa fa-question-circle fa-1"      v-b-tooltip.hover  title=""></i></p>
															<div id="email_error"></div>
														<div class="col-lg-12">
															<input class="form-control int_field" placeholder="Mobile No." name="PersonalInformation[Contact]" id="PersonalInformation_Contact" type="text">		</div>
														<div class="col-lg-12">
															<input class="form-control" type="email" placeholder="E-mail Address" name="PersonalInformation[Email]" id="PersonalInformation_Email">					</div>

													<div class="clearfix"></div><p class="p_color"></p>

													<div id="PersonalInformation_details2_success"></div>


													<p class="button-padding">
														<button class="btn btn-success btn-lg btn-tab-next" type="button" id="PIDetails-2_btn">Save &amp; Continue</button>
													</p>
												</div>


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