<style>
  .collapse{
    margin-left: 500px;
  }
   .navbar-light .navbar-nav .butss .nav-link {
    border: none;
    background-color: white;
    color: #B67A0E;
    font-size: larger;
    font-weight: 700;
    margin-right: 10px;

  }
  .navbar-light .navbar-nav .butss .nav-link:hover{
    color: #FDC474;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="./">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="70" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                <?php echo $_settings->info('short_name') ?>
                </a>

                <div class="collapse navbar-collapse nav-top" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="butss nav-item"><a class="nav-link" aria-current="page" href="./">Home</a></li>
                        <li class="butss nav-item"><a class="nav-link" aria-current="page" href="#faq">Support</a></li>
                        <li class="butss nav-item"><a class="nav-link" aria-current="page" href="#contact">Contact</a></li>
                        <li class="butss nav-item"><a class="nav-link" aria-current="page" href="./user" href="user/register.php">Login</a></li>
                     
                         
                    </ul>
                    <div class="d-flex align-items-center">
                      
                    </div>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>
