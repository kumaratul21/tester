<style>
  input[type=text],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #f71735;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  /*input[type=submit]:hover {*/
  /*  background-color: #45a049;*/

  /*}*/
</style>
<!-- page-title -->
<div class="ttm-page-title-row">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-box ttm-textcolor-white">
          <div class="page-title-heading">
            <h1 class="title">Careers</h1>
          </div><!-- /.page-title-captions -->
          <div class="breadcrumb-wrapper">
            <span>
              <a title="Homepage" href="<?php echo base_url() ?>"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
            </span>
            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
            <span>Careers</span>
          </div>
        </div>
      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- page-title end-->



<!-- about-section -->
<section class="about-top-section clearfix">



  <div class="container">
    <div class="pg_cnt_ar ">
      <h1 id="page-heading">Career opportunities</h1>
      <p>NIIF IFL is an integral part of the country's development story. Our set up is for the purpose of nation building and we continue to live by the philosophy that Nation Building is in our DNA.</p>

      <p>We are recognized as one of the India's premier financial services organization.</p>


      <p>NIIF IFL invests in infrastructure projects that have completed at least one year of satisfactory commercial operations.Our business offers you an exceptional opportunity to work, learn and grow horizontally as well as vertically.</p>

      <p>We offer career opportunities that will excite and challenge you and there is no limit if you have the right attitude and know how to deliver on your role. We seek profiles that have good academic backgrounds, project financing and customer orientation skills that address the needs of our clients.</p>

      <p>We believe women and men equally matter to the bottom line of the company and are proud of our healthy gender-diverse workforce in the organization.</p>

      <p>The applicants who want to be part of this exciting opportunity can mail their updated CVs to <a href="mailto:careers@niififl.in">careers@niififl.in</a></p>


    </div>
  </div><br>





  <body>
    <div class="container">
      <div class="pg_cnt_ar mt-50">
        <h1 id="page-heading">UPLOAD YOUR CV </h1>

        <div class="container">

          <?php if ($this->session->flashdata('success')) { ?> <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('success') ?></div><?php } ?>

          <form action="<?php echo base_url(); ?>Home/addcareers" enctype='multipart/form-data' method="post" onsubmit="return validateb()">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <label for="name"><b>Name</b></label>
            <input class="form-control" id="name" type="text" name="name">
            <span id="namelocation" class="err" style="color:red"></span><br>

            <label for="email"><b>Email</b></label>
            <input class="form-control" id="email" type="text" name="email">
            <span id="emaillocation" class="err" style="color:red"></span><br>


            <label for="cv"><b>Upload Your CVs</b></label>
            <input class="form-control" id="file" type="file" name="cv" accept="application/pdf,image/png,image/jpg,image/jpeg">
            <span id="filelocation" class="err" style="color:red"></span><br>


            <label for="subject"><b>Subject</b></label>
            <textarea name="subject" style="height:100px"></textarea>

            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>

  </body>

</section>
<!-- about-section end -->


<script type="text/javascript">
  function validateb() {
    var titles = $('#name').val();
    var image2 = $('#file').val();
    // var descriptions=document.f4.description.value;
    var email = $('#email').val();
    // console.log(image2)
    var status = true;
    $('.err').html('');

    if (titles == "") {
      document.getElementById("namelocation").innerHTML =
        " Please enter your name";
      status = false;
    }
    if (image2 == "") {
      document.getElementById("filelocation").innerHTML =
        "  Please select a file";
      status = false;
    }
    if (email == "") {
      document.getElementById("emaillocation").innerHTML =
        " Please enter your email";
      status = false;
    } else if (IsEmail(email) == false) {
      document.getElementById("emaillocation").innerHTML =
        ("Please enter a valid e-mail address ");
      status = false;
    }

    if (status == true) {
      return true;
    } else {
      return false;
    }
  }

  function IsEmail(email) {

    var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var flag = 0;
    if (!regex.test(email)) {
      flag = 1;
    }
    if (flag == 0) {
      return true;
    } else {
      return false;
    }
  }
</script>