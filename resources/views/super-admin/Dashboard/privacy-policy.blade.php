<!-- headr-file-start -->
@include('header')

<style>
    .notification-form {
    padding: 40px;
    margin: 40px 0px 40px 0px;
}
</style>
<!-- headr-file-end-->
<div class="content-wrapper">
   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
      <div class="row">
         <div class="main-header">
            <h4>Privacy-Policy</h4>
         </div>
      </div>
      <div class="row dashboard-header" style="background: #e5e5e5;">
         <div class="col-md-11  mx-auto">
            <form class="notification-form shadow rounded">
               <div class="form-group">
                  <label for="exampleInputEmail1">Page Title</label>
                  <input type="text" class="form-control" id="exampleInputsubject" aria-describedby="textHelp" placeholder="Page Title">
               </div>
               <div class="form-group">
                  <label for="exampleFormControlTextarea1">Page Content</label>
                  <textarea class="form-control" placeholder="Page Content" id="exampleFormControlTextarea1" rows="8"></textarea>
               </div>
               <button type="submit" class="btn btn-primary btn-md">Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- footer-file-start -->
@include('footer')
<!-- footer-file-end -->