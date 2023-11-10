<!-- headr-file-start -->

<style>
    .notification-form {
    padding: 40px;
    margin: 40px 0px 40px 0px;
}
</style>
@include('header')
<!-- headr-file-start -->
   <div class="content-wrapper">
      <!-- Container-fluid starts -->
      <!-- Main content starts -->
      <div class="container-fluid">
         <div class="row">
            <div class="main-header">
               <h4>Notification</h4>
            </div>
         </div>
         <!-- 4-blocks row start -->
         <div class="row dashboard-header" style="background: #e5e5e5;">
             <div class="col-md-11  mx-auto">
               <form class="notification-form shadow rounded">
                   <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">All</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">For Electrician</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">For Dealer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
  <label class="form-check-label" for="inlineRadio4">For Partner</label>
</div>

  <div class="form-group">
      
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" class="form-control" id="exampleInputsubject" aria-describedby="textHelp" placeholder="Subject">
 
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Notification Message</label>
    <textarea class="form-control" placeholder="Type Message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary btn-md">Submit</button>
</form>

<h3> History</h3>
                 <!--end form-->
                 <!--start Table-->
                 <table class="table table-striped table-hover table-hover border shadow border-light mt-4">
                      <thead>
  <tr>
      <th colspan="1">Sr.No.</th>
      <th scope="col">Suject</th>
      <th colspan="2">Messages</th>
     <th colspan="1">Action</th>
    </tr>
     </thead>
     <tbody>
    <tr>
      <th colspan="1">1</th>
      <td>Mark</td>
      <td colspan="2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</td>
     <td class="text-center"><i class="fa-solid fa-trash text-danger"></i></td>
    </tr>
    <tr>
      <th colspan="1">2</th>
      <td>Jacob</td>
      <td colspan="2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</td>
     <td class="text-center"><i class="fa-solid fa-trash text-danger"></i></td>
    </tr>
    <tr>
      <th colspan="1">3</th>
      <td>Larry the Bird</td>
      <td colspan="2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</td>
      <td class="text-center"><i class="fa-solid fa-trash text-danger"></i></td>
    </tr>
  </tbody>
               </table>
                 <!--end table-->
             </div>
          
            
         </div>
          <!-- 4-blocks row end -->



       

        

      </div>
      <!-- Main content ends -->
      <!-- Container-fluid ends -->

   </div>
   </div>




<!-- footer-file-start -->

@include('footer')
<!-- footer-file-start -->
