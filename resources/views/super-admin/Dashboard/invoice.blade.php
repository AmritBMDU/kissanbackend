<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice</title>
    <link rel="stylesheet" href="style.css" />
    	<link rel="icon" href="assets/images/fav.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <style>
      body {
        
        font-size: 14px;
        font-family: 'Ubuntu', sans-serif;

      }
      .hr {
        border-bottom: 2px solid blue;
      }
    </style>

    <div
      class="container mt-5 p-5 shadow-lg bg-body rounded"
      style="border: 2px solid whitesmoke; background-color: #faf9f6"
    >
      <div class="d-flex justify-content-end">
        <a href="/invoice.html" download>
          <button type="button" class="btn btn-primary">
            Download <i class="fa-solid fa-download"></i>
          </button>
        </a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-6 h1 lh-lg">
            Product  View
          </div>
          <div class="col-6">
            <strong> YOUR COMPANY</strong>:1234 Your Street
            City,California 90210 United States
            1-888-123-456
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="text-primary">Billed To</p>
            <p>Your Client <br />
              1234 Client Street <br />
              City, California <br />
              90210 <br />
              United States<br />
              1-888-123-8910
            </p>
          </div>
          <div class="col">
            <div class="row row-cols-3 mt-5">
              <div class="col">
                <span class="text-primary">Date Issued</span> <br />
                26/3/2021
              </div>
              <div class="col">
                <span class="text-primary">Invoice Number </span> <br />
                INV-10012
              </div>
              <br />
              <br />
              <div class="col">
                <span class="text-primary"> Amount Due </span><br />$1,699.48
              </div>
              <div class="col">
                <span class="text-primary"> Due Date </span><br />$1,699.48
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="hr" color="blue" width="1000px" />
      <div class="container shadow-lg">
        <div class="row text-primary">
          <div class="col">DESCRIPTION</div>
          <div class="col">
            <div class="row">
              <div class="col">RATE</div>
              <div class="col">QTY</div>
              <div class="col">AMOUNT</div>
            </div>
          </div>
        </div>
        <div class="row shadow">
          <div class="col">
            <strong>Services</strong> <br />
            Cost of various services
          </div>
          <div class="col">
            <div class="row">
              <div class="col">$55.00 <br />+Tax</div>
              <div class="col">10</div>
              <div class="col">$550.00</div>
            </div>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col mt-3">
            <strong> Consulting</strong> <br />Consultant for your business
          </div>

          <div class="col">
            <div class="row">
              <div class="col">$75.00 <br />+Tax</div>
              <div class="col">15</div>
              <div class="col">$1,125.00</div>
            </div>
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col">
            <strong>Materials</strong> <br />Cost of materials and supplies to
            complete job
          </div>
          <div class="col">
            <div class="row">
              <div class="col">$123.39 <br />+Tax</div>
              <div class="col">1</div>
              <div class="col">$1,123.39</div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col"></div>
          <div class="col">
            <div class="row mt-5">
              <div class="col">
                Subtotal <br />Discount <br />
                Tax
              </div>
              <div class="col"></div>
              <div class="col">$1.798.39 <br />-$179.84 <br />+$80.93</div>
            </div>
          </div>
        </div>

        <hr />
        <div class="row">
          <div class="col"></div>
          <div class="col">
            <div class="row">
              <div class="col">Total <br />Deposit Requested</div>
              <div class="col"></div>
              <div class="col">$1.699.48 <br />$169.95</div>
            </div>
          </div>
        </div>

        <div class="container">
          <hr class="hr" color="blue" width="50%" align="right" />
        </div>

        <div class="row">
          <div class="col"></div>
          <div class="col">
            <div class="row">
              <div class="col">Deposit Due</div>
              <div class="col"></div>
              <div class="col">$169.95</div>
            </div>
          </div>
        </div>
      </div>

     
      <div class="container">
        <div class="last-content">
          <p class="text-primary">Notes</p>
          <p>Thanks for Your business</p>
          <p class="text-primary">Terms</p>
          <p>Please pay within 30days using the link in your voice email.</p>
        </div>
      </div>
    </div>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </body>
</html>
