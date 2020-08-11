<style>
    .widget-user-header{
        background-position: center center !important;
        background-size: cover !important;
        height: 250px !important;
    }

</style>

<template>
    <div class="container">
        <div class="row">
           <div class="col-md-12">
               <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white" style="background:url('./img/pc2.jpg')">
                <h3 class="widget-user-username text-left"> {{ this.form.name }}</h3>
                <h5 class="widget-user-desc text-left"> {{ this.form.email }}</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" :src="gerProfilePhoto()" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
           </div>

           <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                   <h4>Display user activity</h4>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" v-model="form.name" name="name" id="name" placeholder="Your name" class="form-control":class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                        </div>
                        <div class="form-group">
                            <label for="email" class=" form-control-label">Email</label>
                            <input type="email" v-model="form.email" name="email" id="name" placeholder="example@mail.com" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                        </div>
                        <div class="form-group">
                            <label for="bio" class=" form-control-label">Bio</label>
                            <textarea name="bio" v-model="form.bio" id="textarea-input" rows="4" placeholder="Content..." class="form-control":class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                             <has-error :form="form" field="bio"></has-error>
                        </div>
                        <div class="form-group">
                            <label for="photo" class=" form-control-label">Profile Photo</label>
                            <input type="file" @change="updatePhoto"  name="photo" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class=" form-control-label">Password (Leave empty if not changing)</label>
                            <input type="password" v-model="form.password" name="password" id="name" class="form-control" placeholder="password" :class="{ 'is-invalid': form.errors.has('password') }">
                                <has-error :form="form" field="password"></has-error>
                        </div>
                         <div class="form-group">
                            <button @click.prevent="updateInfo" type="submit" class="btn btn-success">Update</button>
                        </div>
                    
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
           </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
      return {
        form: new Form({
                id: '',
                name: '',
                email: '',
                password: '',
                type: '',
                bio:'',
                photo:''
            })
      }
    },
    mounted(){
        console.log('component mounted.')
    },
    methods: {
      gerProfilePhoto(){
        let photo = (this.form.photo.length >200) ? this.form.photo : "img/profile/"+this.form.photo;
        //return "img/profile/"+this.form.photo;
        return photo;
      },
      updateInfo(){
        this.$Progress.start();
        this.form.put('api/profile/')
        .then(()=>{
                Swal.fire(
                    'Update Successfull',
                    'Your file has been updated Successfull.',
                    'success'
                    )
                    Fire.$emit('AfterCreate');
            
                  this.$Progress.finish();
        })
        .catch(() => {
                this.$Progress.fail();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                    })
        });
      },
      updatePhoto(e){
        //console.log('Uploading photo');
          let file = e.target.files[0];
            console.log(file);
            let reader = new FileReader();
            if (file['size']<2111775){
                reader.onloadend =  (file)=> {
                  // console.log('RESULT',reader.result)
                  this.form.photo=reader.result;
                  
                }
                reader.readAsDataURL(file);
            }else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'File size is more than 2MB!',
                    footer: '<a href>Please upload a file that less than 2MB</a>'
                })
            }
              
       }
    },
    created() {
         axios.get("api/profile")
         .then(({data})=>(this.form.fill(data)));
         Fire.$on('AfterCreate',()=>{
                this.loadUsers();
            });
    }
}
</script>