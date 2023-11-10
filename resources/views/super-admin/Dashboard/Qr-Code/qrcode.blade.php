<!-- headr-file-start -->

@include('header/header')
<!-- headr-file-start -->
   <div class="content-wrapper">
      <!-- Container-fluid starts -->
      <!-- Main content starts -->
      <div class="container-fluid">
         <div class="row">
              <div class="col-md-8"> 
            <div class="main-header">
               <h4>QR Code </h4>
            </div>
            </div>
            <div class="col-md-4"> 
               <div class="col-sm-12" style="position: relative; top: 10px;">
            <div class="Click-here">  <button class="btn " type="submit" style="padding: 8px 20px; font-size:12px;">+ Add Category</button></div>
            <div class="custom-model-main">
               <div class="custom-model-inner">
                  <div class="close-btn ">×</div>
                  <div class="custom-model-wrap">
                     <div class="pop-up-content-wrap">
                        <div class="container mt-2 p-5">
                           <div class="row justify-content-center">
                              <div class="col-12  " id="form" >
                                 <h3 class="mt-2 "> Add Category</h3>
                                 <form action="" class="mt-3">
                                    
                                     <div class="form-group">
                                       <input type="text" name=" " class="form-control"  placeholder="Create Category*">
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
         </div>
         <!-- 4-blocks row start -->
         <div class="row dashboard-header">
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                
                  <h6 class="dashboard-total-products text-center"><a href="{{ url('qr-code-view') }}">Modular Box </a></h6>
                
                  
               </div>
            </div>
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                <h6 class="dashboard-total-products text-center"> <a href="{{ url('qr-code-view') }}">  Concealed Box </a></h6>
               </div>
            </div>
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                <h6 class="dashboard-total-products text-center"><a href="{{ url('qr-code-view') }}">Fan Box</a></h6>  
               </div>
            </div>
            
             <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                <h6 class="dashboard-total-products text-center"><a href="{{ url('qr-code-view') }}">Non-modular Box </a></h6>
               </div>
            </div>
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                <h6 class="dashboard-total-products text-center"><a href="{{ url('qr-code-view') }}">Mcb Distribution Box </a></h6>  
               </div>
            </div>
            
             <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                <h6 class="dashboard-total-products text-center"><a href="{{ url('qr-code-view') }}">Non Modular Box </a></h6>
               </div>
            </div>
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                <h6 class="dashboard-total-products text-center"><a href="{{ url('qr-code-view') }}">Ceiling Box </a></h6>  
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

@include('footer/footer')
<!-- footer-file-start -->