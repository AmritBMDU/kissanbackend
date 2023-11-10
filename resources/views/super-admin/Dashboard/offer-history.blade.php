<!-- headr-file-start -->
@include('header')
<!-- headr-file-start -->
<div class="content-wrapper">
   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-10 p-0">
            <div class="main-header">
               <h4 class="text-dark">Offer History</h4>
               <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                  <li class="breadcrumb-item">
                     <a href="index.html">
                     <i class="icofont icofont-home"></i>
                     </a>
                  </li>
               </ol>
            </div>
         </div>
         
            <div class="custom-model-main">
               <div class="custom-model-inner">
                  <div class="close-btn ">×</div>
                  <div class="custom-model-wrap">
                     <div class="pop-up-content-wrap">
                        <div class="container mt-2 p-5">
                           <div class="row justify-content-center">
                              <div class="col-12  " id="form" >
                                 <h3 class="mt-2 "> Create New QR Code</h3>
                                 <form action="" class="mt-3">
                                    <div class="form-group">
                                       <input type="text" name=" " class="form-control"  placeholder="QR Code*">
                                    </div>
                                    <div class="form-group">
                                       <input type="text" name=" " class="form-control"  placeholder="Points*">
                                    </div>
                                 </form>
                                 <div class="buttton mt-3 ">
                                    <button type="button" class="btn-1 px-3 py-1">Save</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="bg-overlay"></div>
            </div>
         </div>
      </div>
      <!-- 4-blocks row start -->
      <div class="row dashboard-header">
         <div class="col-md-12">
            <div class="row mt-3" >
               <div class="col-md-12 boder-danger me-5 pe-5">
                  <div class="row mb" style="margin-bottom: 30px;">
                     <div class="col-sm-1">
                        <p class="text-dark"><b><strong>Filters:</strong></b></p>
                     </div>
                     <div class="col-sm-3 end-date">
                        <p class="text-dark"><strong>Date From:</strong></p>
                        <div class="input-group date d-flex" id="datepicker">
                           <input type="text" class="form-control" id="date" placeholder="dd-mm-yyyy"/>
                           <span class="input-group-append">
                           <span class="input-group-text bg-light d-block">
                           <i class="fa fa-calendar"></i>
                           </span>
                           </span>
                        </div>
                     </div>
                     <div class="col-sm-3 end-date">
                        <p><strong class="text-dark">Date to:</strong></p>
                        <div class="input-group date d-flex" id="datepicker1">
                           <input type="text" class="form-control" id="date" placeholder="dd-mm-yyyy"/>
                           <span class="input-group-append">
                           <span class="input-group-text bg-light d-block">
                           <i class="fa fa-calendar"></i>
                           </span>
                           </span>
                        </div>
                     </div>
                     <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:20px;">
                        <button class="btn " type="submit" >Filter</button>
                     </div>
                     <div class="col-md-1 " style="margin-left: -12px;  margin-top:20px;" >
                        <button class="btn " type="submit" >Reset</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row pt-4">
               <div class="col-md-7 ">
                  <div class="row">
                     <div class="col-md-4  text-center d-flex multiple-btn">
                        <button class="btn " type="submit" style="margin-left: 10px;">Copy</button>
                        <button class="btn " type="submit" style="margin-left: 10px;">CSV</button>
                        <button class="btn  " type="submit" style="margin-left: 10px;">Excel</button>
                        <button class="btn  " type="submit" style="margin-left: 10px;">PDF</button>
                        <button class="btn  " type="submit" style="margin-left: 10px;">Print</button>
                     </div>
                  </div>
               </div>
               <div class="col-md-3" >
                  <input class="form-control border-none me-2" type="search" placeholder="Search" aria-label="Search" >
               </div>
               <div class="col-md-2" style="margin-left: -25px; margin-top: 1.5px;">
                  <button class="btn " type="submit" >Search</button>
               </div>
            </div>
           <div class="row mt-3 px-4">
               <div class="col">
                  <table class="table responsive-table table-striped border shadow">
                     <thead>
                        <tr class="">
                           <th scope="col"><input type="checkbox" name="" id=""></th>
                           <th scope="col">Sr.No.</th>
                           <th scope="col ">Offers Image</th>
                           <th scope="col ">CIN No.</th>
                            <th scope="col ">Name</th>
                           <th scope="col ">Points</th>
                           <th scope="col ">Status</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row"><input type="checkbox" name="" id=""></th>
                           <td><b>1</b></td>
                           <td class="col-2 ">
                              <img src="assets/images/avatar-1.png" class="img-fluid" style="width:50px;" alt="">
                           </td>
                           <td class="col-3 ">
                             CIN004140
                           </td>
                           <td class="col-3 ">
                              Mohan Das
                           </td>
                             
                             <td class="col-3 ">
                              40
                           </td>
                           <td class="color-danger"> Redeem </td>
                           <!-- <td class="text-success"><div class="select"> -->
                                 <!-- <select name="format" id="format">
                                    
                                    <option value="pdf">Active</option>
                                    <option value="txt">Deactive</option>
                                    
                                 </select></td> -->
                           <td class="col">
                              <div class=" d-flex">
                                 <div class="edit  me-2">
                                    <!-- <i class="fa-solid fa-pen-to-square" data-target="simpleModal_2"
                                       data-toggle="modal"></i> -->
                                    <div id="simpleModal_2" class="modal">
                                       <div class="modal-window small">
                                          <span class="close" data-dismiss="modal">&times;</span>
                                          <div class="container mt-2 p-5">
                                             <div class="row justify-content-center">
                                                <div class="col-12  " id="form">
                                                   <h3 class="mt-2 ">Edit QR Code</h3>
                                                   <form action="" class="mt-3">
                                                      <div class="form-group ">
                                                         <input type="text" name=" "
                                                            class="form-control"
                                                            placeholder="QR Code">
                                                         <div class="mt-3"></div>
                                                         <input type="text" name=" "
                                                            class="form-control"
                                                            placeholder="Points">
                                                      </div>
                                                   </form>
                                                   <div class="buttton mt-3 ">
                                                      <button data-dismiss="modal">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="delet">
                                    <i class="fa-solid fa-trash"></i>
                                 </div>
                              </div>
                           </td>
                        </tr>
                       
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="row mt-5  px-3 pb-5">
               <div class="col-md-7">
                  <div class="showing-numb" style="margin-top: 10px;">
                     <p class="text-dark">Showing 1 to 10 of 57 entries</p>
                  </div>
               </div>
               <div class="col-md-5">
                  <nav aria-label="Page navigation example">
                     <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                           <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                           <a class="page-link" href="#">Next</a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
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