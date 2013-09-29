  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo base_url(); ?>site/home">The Team B</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url(); ?>site/home">Home</a></li>
			  <li><a href="<?php echo base_url(); ?>site/about">About us</a></li>
			  <li class="dropdown">
                <a href="<?php echo base_url(); ?>wedding" class="dropdown-toggle" data-toggle="dropdown">Wedding <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>wedding">Information</a></li>
                  <li><a href="<?php echo base_url(); ?>wedding#directions">Directions / Parking</a></li>
                  <li><a href="<?php echo base_url(); ?>wedding#registry">Registry</a></li>
<!--                   <li class="divider"></li> -->
<!--                   <li class="nav-header">The event</li> -->
<!--                   <li><a href="#">Wedding party</a></li> -->
<!--                   <li><a href="#">One more separated link</a></li> -->
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>