<!-- headr-file-start -->
<style>
   .notification-form {
   padding: 40px;
   margin: 40px 0px 40px 0px;
   }
   button#status a {
    color: black;
    text-transform: capitalize;
}
</style>
<?php include 'header.php';?>
<!-- headr-file-start -->
<div class="content-wrapper">
   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
      <div class="row">
         <div class="main-header">
            <h4>Complaints Status</h4>
         </div>
      </div>
      <!-- 4-blocks row start -->
      <div class="row dashboard-header" style="background: #e5e5e5;">
         <div class="col-md-8  mx-auto">
            <!--end form-->
          <div class="print-data pt-5 ">
            <!--end form-->
          <h6><span class="text-primary"><b> Name: </b></span>Mohit Kumar</h6>
          <h6><span class="text-primary"><b> Mobile Number: </b> </span>+91 90875 45678</h6>
          <h6><span class="text-primary"><b>Uniq Id:  </b> </span> 0987</h6>
          <h6><span class="text-Success"><b> Suject: </b> </span>Lorem Ipsum SImple dummy text </h6>
          <div class="mt-2"></div>
           <p><span class="text-Success"><b> Messages: </b></span>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. </p> 
           <div class="mt-2"></div>
           <img src="assets/images/avatar-1.png">
         
         </div>
         <div class="mt-2"></div>
         <div class="success pb-5">
         <button type="button" class="btn btn-success">Resolved</button>
         <button type="button" class="btn btn-danger">Pending</button>
         </div>   
         </div>
      </div>
      <!-- 4-blocks row end -->
   </div>
   <!-- Main content ends -->
   <!-- Container-fluid ends -->
</div>
</div>
<style>
   /* CSS to style the toolbar and menu */
   .toolbar {
   display: flex;
   justify-content: flex-end;
   }
   .menu {
   position: relative;
   }
   .menu button {
   border: none;
   cursor: pointer;
   transform: rotate(90deg);
   background: none !important;
   color: #063b6a !important;
   font-size: 22px;
   }
   .menu-options {
   display: none;
   position: absolute;
   background-color: white;
   box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
   }
   ul.menu-options li {
   padding: 5px 10px;
   background: #063b6a;
   z-index: 1;
   color: white;
   }
   .menu:hover .menu-options {
   display: block;
   }
</style>
<script>
   import React, { useState } from 'react';
   
   const Toolbar = () => {
   const [isMenuOpen, setIsMenuOpen] = useState(false);
   
   const toggleMenu = () => {
       setIsMenuOpen(!isMenuOpen);
   };
   
   return (
       <div className="toolbar">
           {/* Toolbar items */}
           <button>Item 1</button>
           <button>Item 2</button>
           {/* Three dots menu */}
           <div className="menu">
               <button onClick={toggleMenu}>...</button>
               {/* Menu options */}
               {isMenuOpen && (
                   <ul className="menu-options">
                       <li>Option 1</li>
                       <li>Option 2</li>
                       <li>Option 3</li>
                   </ul>
               )}
           </div>
       </div>
   );
   };
   
   export default Toolbar;
   
</script>
<!-- footer-file-start -->
<?php include 'footer.php';?>
<!-- footer-file-start -->