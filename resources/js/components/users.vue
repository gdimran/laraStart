<template>
  
       <div class="row " v-if="$gate.isAdmin()">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Table</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNewUser" @click="newModalUser" >Add New <i class="fa fa-user-plus"></i> </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Bio</th>
                       <th>Photo</th>
                       <th>Register At</th>
                        <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <td>{{user.id}}</td>
                      <td>{{user.name}}</td>
                      <td>{{user.email}}</td>
                      <td>{{user.type | upText}}</td>
                      <td>{{user.bio}}</td>
                      <td>{{user.photo}}</td>
                      <td>{{user.created_at | dateFor}}</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>
                          <a href="#" @click="editModalUser(user)">
                              <i class="fa fa-edit"></i>
                          </a>
                          /
                          <a href="#" @click="deleteUser(user.id)">
                              <i class="fa fa-trash red"></i>
                          </a>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
             <!-- Modal -->
        <div class="modal fade" id="addNewUser" tabindex="-1" role="dialog" aria-labelledby="add_new_user" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"  v-show="editmode"  id="add_new_user">Update User's Info</h5>
                        <h5 class="modal-title"  v-show="!editmode"  id="add_new_user">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editmode ? updateUser() : createUser()" >
                    <div class="modal-body">
                        
                            <div class="form-group">
                                <label>Name</label>
                                <input v-model="form.name" type="text" name="name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input v-model="form.email" type="email" name="email"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            
                            <div class="form-group">
                                <label>Bio</label>
                                <textarea v-model="form.bio" name="bio" placeholder = "Short bio for user"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                                <has-error :form="form" field="bio"></has-error>
                            </div>
                            <div class="form-group">
                                <select name="type" v-model="form.type" id="type" class="form-control"   :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option value="">Select User Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="author">Author</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input v-model="form.password" type="password" name="password"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                <has-error :form="form" field="password"></has-error>
                            </div>
                        
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" v-show="editmode" class="btn btn-success">Update User</button>
                        <button type="submit" v-show="!editmode" class="btn btn-primary">Create User</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
        </div>
        
       
    


</template>

<script>
export default {
    data() {
        return{
            editmode:false,
            users:{},
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
    methods: {
        updateUser(){
            //console.log("Editing the data");
            this.$Progress.start();
            this.form.put('api/user/'+this.form.id)
            .then(()=>{
           
                 $('#addNewUser').modal('hide');
                  Swal.fire(
                    'Update Successfull',
                    'Your file has been updated Successfull.',
                    'success'
                    )
                    Fire.$emit('AfterCreate');
            
                this.$Progress.finish();
            })
            .catch(()=>{
                this.$Progress.fail();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                })
            });
        },
        editModalUser(user){
            this.editmode = true;
            this.form.reset();
             $('#addNewUser').modal('show');
             this.form.fill(user);
        },
        newModalUser(){
            this.editmode = false;
            this.form.reset();
             $('#addNewUser').modal('show')
        },
        deleteUser(id){
            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {

                        if (result.value) {
                        //send ajax request to the server
                            this.form.delete('api/user/'+id).then(()=>{
                                    Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                    )
                                    Fire.$emit('AfterCreate');
                            }).catch(()=>{
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!',
                                    footer: '<a href>Why do I have this issue?</a>'
                                    })
                            });
                        }
                    
                    })
        },
        loadUsers(){
            if (this.$gate.isAdmin()){
                axios.get("api/user").then(({data})=>(this.users = data.data));
            }
            
        },
        createUser() {
            this.$Progress.start();
            this.form.post('api/user')
            .then(()=>{
                Fire.$emit('AfterCreate');
                 $('#addNewUser').modal('hide')
                Toast.fire({
                    icon: 'success',
                    title: 'User Created successfully'
                })
                this.$Progress.finish();
            })
            .catch(()=>{

            })
        }
        
    },
   created() {
       this.loadUsers();
            Fire.$on('AfterCreate',()=>{
                this.loadUsers();
            });
        }
}
</script>