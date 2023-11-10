  <style>
      .accordionTitle {
  cursor: pointer;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.accordionTitle + .accordionContent {
  display: none;
}
span.cnacel {
    position: absolute;
    top: 128px;
    font-size: 14px;
}
.accordionTitle.is-open + .accordionContent {
  display: block;
}
  </style>
  
@include('header')

<section style="background-color: #eee;">
     <div class="content-wrapper">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{  url('/electrican-user-profile') }}">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body mx-auto text-center">
           <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                @csrf
                <div id="image-preview">
                  <img id="preview" src="{{ asset('assets/images/ava3.webp') }}" alt="Profile Image" class="rounded-circle img-fluid" style="width: 150px;">
                </div>
            <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;"> -->
              <input type="file" class="form-control" id="profile_image" name="profile_image" accept="image/*" onchange="previewImage(this);" style="width: 150px;">
            <h6 class="mt-3"><b class="text-dark">Name: </b>{{ $user->name }}</h6>
            <p class="text-muted mb-1"><b class="text-dark">Phone: </b>{{ $userProfile ? $userProfile->phone_number : '' }}</p>
            <p class="text-muted mb-1"><b class="text-dark">Registered On: </b> {{ $user->created_at->format('d M Y') }}</p>
            <p class="text-muted mb-2"><b class="text-dark">CIN No. :</b>{{ $userProfile ? $userProfile->cin_number : '' }}</p>
            <div class="d-flex justify-content-center mb-2">
            <button type="button" class="btn btn-sm ms-1 btn-warning">20%</button>
            </div>
          </div>
        </div>
       
      </div>
      <div class="col-lg-8">
 <!--******** Accordian start *********-->

 <div>
    <div class="accordionItem">
      <h2 class="accordionTitle is-open"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     Personal Info
      </button></h2>
      <div class="accordionContent">
           <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Full Name</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="full_name" id="full_name" class="text-muted mb-0" placeholder="Full Name">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Birth Date</p>
              </div>
              <div class="col-sm-9">
              <input type="date" name="birth_date" id="birth_date" class="text-muted mb-0" placeholder="Birth Date">
              </div>
            </div>
            <hr>
         
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Phone Number</p>
              </div>
              <div class="col-sm-9">
              <input type="tel" name="phone_number" id="phone_number" class="text-muted mb-0" placeholder="Phone Number">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Whatsapp Number</p>
              </div>
              <div class="col-sm-9">
              <input type="tel" name="whatsapp_number" id="whatsapp_number" class="text-muted mb-0" placeholder="WhatsApp Number">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Email</p>
              </div>
              <div class="col-sm-9">
              <input type="email" name="email" id="email" class="text-muted mb-0" placeholder="Email">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Address</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="address" id="address" class="text-muted mb-0" placeholder="Address">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save Profile</button>
    </form>
    <div class="accordionItem">
      <h2 class="accordionTitle"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     Transfer Info
      </button></h2>

      <div class="accordionContent">
          <div class="card mb-4 pb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-dark">Bank Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">SBI</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Account Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">34134171530</p>
              </div>
            </div>
            <hr>
         
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">IFSC Code</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">SBIN001132</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Account Holder Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Mohit Kumar</p>
              </div>
            </div>
            <hr>
            <h5 class="text-primary"> Paytm Wallet Detail</h5>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">PayTM Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">77777 77777</p>
              </div>
            </div>
            
             <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">PhonePay Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">77777 77777</p>
              </div>
            </div>
            <!---->
            
             <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">GPay Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">77777 77777</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Bank Documents</p>
              </div>
              <div class="col-sm-9">
              <span class="cnacel"> Cancelled Cheqe</span>  <img src="assets/images/avatar-1.png">
                <span class="cnacel">Passbook</span>   <img src="assets/images/avatar-1.png">
                     <span class="cnacel">Paytm Kyc Screenshot</span>  <img src="assets/images/avatar-1.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="accordionItem">
      <h2 class="accordionTitle"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
   Documents Info
      </button></h2>
      <div class="accordionContent">
         <div class="card mb-4 pb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Aadhar Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">5678 9098 5647 7890</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Aadhard Card Photo</p>
              </div>
              <div class="col-sm-9 pb-2">
              <span class="cnacel">Front Side</span>  <img src="assets/images/avatar-1.png">
                <span class="cnacel text-center">Back Side </span>   <img src="assets/images/avatar-1.png">
              </div>
            </div>
            <hr>
         
         <h5 class="text-primary"> Pan Details</h5>
         <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Pan Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">ABCTY1234D</p>
              </div>
            </div>
            <hr>
           <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">GST Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">22AAAAA0000A1Z5</p>
              </div>
            </div>
           
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0  text-dark">Image</p>
              </div>
              <div class="col-sm-9">
              <span class="cnacel">Pan Card</span>  <img src="assets/images/avatar-1.png">
                <span class="cnacel">GST Certificate</span>   <img src="assets/images/avatar-1.png">
                    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="accordionItem">
      <h2 class="accordionTitle"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
   Additional Info
      </button></h2>
      <div class="accordionContent">
      <div class="accordionContent">
           <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <p class="mb-0  text-dark">Nationality</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">Indian</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-6">
                <p class="mb-0  text-dark">Marital Status</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">Married</p>
              </div>
            </div>
            <hr>
            <h5 class="text-primary">Children Info</h5>
         <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                <p class="mb-0  text-dark">Name</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">Pqrtxyz</p>
              </div>
                        </div> 
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                <p class="mb-0  text-dark">Birth Date</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">19/10/2020</p>
              </div>
                        </div> 
                </div>
                <!---->
               
                  <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                <p class="mb-0  text-dark">Study In</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">1</p>
              </div>
                        </div> 
                </div>
              
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-6">
                <p class="mb-0  text-dark">Blood Group</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">AB</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-6">
                <p class="mb-0  text-dark">Total Work Experience</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">4</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-6">
                <p class="mb-0  text-dark">Language Known (Reading)</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">Hindi, English</p>
              </div>
            </div>
            <hr>
            <!---->
              <div class="row">
              <div class="col-sm-6">
                <p class="mb-0  text-dark">Language Known (Writing)</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">Hindi, English</p>
              </div>
            </div>
            <hr>
              <!---->
              <div class="row">
              <div class="col-sm-6">
                <p class="mb-0  text-dark">Language Known (Speaking)</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">Hindi, English</p>
              </div>
            </div>
            <hr>
               <!---->
              <div class="row">
              <div class="col-sm-6">
                <p class="mb-0  text-dark">Dealer/Partner Info</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">Xyz</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    
  </div>  
  
  
  <script>
     const accordionTitles = document.querySelectorAll(".accordionTitle");

accordionTitles.forEach((accordionTitle) => {
  accordionTitle.addEventListener("click", () => {
    if (accordionTitle.classList.contains("is-open")) {
      accordionTitle.classList.remove("is-open");
    } else {
      const accordionTitlesWithIsOpen = document.querySelectorAll(".is-open");
      accordionTitlesWithIsOpen.forEach((accordionTitleWithIsOpen) => {
        accordionTitleWithIsOpen.classList.remove("is-open");
      });
      accordionTitle.classList.add("is-open");
    }
  });
}); 
  </script>
  
  
  
  
  <!--******** Accordian end *********-->
  
</div>
          
   
      </div>
    </div>
  </div>
    </div>
</section>

<!-- footer-file-start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@include('footer')
<!-- footer-file-start -->

<script>
    function previewImage(input) {
        var preview = document.getElementById('preview');
        var imagePreview = document.getElementById('image-preview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                imagePreview.style.display = 'block'; // Show the image preview container
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            // preview.src = "{{ asset('/images/ava3.webp') }}"; 
             var defaultImage = document.getElementById('default-image');
            preview.src = defaultImage.src;// Display a default image
            imagePreview.style.display = 'block'; // Show the image preview container
        }
    }
</script>