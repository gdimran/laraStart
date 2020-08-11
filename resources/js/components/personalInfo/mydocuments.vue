<template>
   <div class="container">
        <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <hr>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Sl</th>
            <th scope="col">File name</th>
            <th scope="col">Upload date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
    <div class="back float-left">
    <a class="btn btn-success btn-tab-prev  for-clr" data-toggle="tab" href="#PIDetails-1" id="knowMe_btn"> <i class="fa fa-chevron-left"></i><span class="previous-text"> Previous</span></a>
</div>
   </div>

</template>

<script>


export default {
    mounted(){
        console.log('component mounted.')
    }
}
</script>