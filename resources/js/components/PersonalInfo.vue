<template>
    <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class=" m-b-10">Personal Information</h2>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                     
										<form action="" method="post">
											 <ul class="nav nav-tabs" id="tab-next-prev" role="tablist">
												<li class="nav-item">
														<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">E-Tin</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="personalinfo-tab" data-toggle="tab" href="#personalinfo" role="tab" aria-controls="personalinfo" aria-selected="false">Personal Information</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="addinfo-tab" data-toggle="tab" href="#addinfo" role="tab" aria-controls="addinfo" aria-selected="false">Additional Personal Information</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="documents-tab" data-toggle="tab" href="#mydocument" role="tab" aria-controls="mydocument" aria-selected="false">My Documents</a>
													</li>
										  </ul>
										  <div class="tab-content" id="tab-next-prev-content">
											<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
												 <etin></etin>
												
											</div>
											 
											<div class="tab-pane fade" id="personalinfo" role="tabpanel" aria-labelledby="personalinfo-tab">
														<personal></personal>
											</div>
											<div class="tab-pane fade" id="addinfo" role="tabpanel" aria-labelledby="addinfo-tab" onload="resetSelection()">
												<additionalInfo></additionalInfo>
											  
											</div>
											<div class="tab-pane fade" id="mydocument" role="tabpanel" aria-labelledby="documents-tab">
											   <mydoc></mydoc>
											</div>
										  </div>
										</form>
										
								
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
    
</template>


<script>
import Etin from './personalInfo/e-tin.vue';
import Personal from './personalInfo/personal.vue';
import AdditionalInfo from './personalInfo/additionalInfo.vue';
import Mydoc from './personalInfo/mydocuments.vue';
 
export default {
	components: {
            Etin,Personal, AdditionalInfo,Mydoc
        },
    mounted(){
        console.log('component mounted.')
    }
}
</script>