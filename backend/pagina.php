<?php
class Page
{
	public static function header($title)
	{
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		$sesion = false;
		$filename = basename($_SERVER['PHP_SELF']);
		$header = '<!DOCTYPE html>
			<html lang="en">
			  <head>
			    <meta charset="utf-8">
			    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			    <meta name="description" content="">
			    <meta name="author" content="Dashboard">
			    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

			    <title>Cargos</title>

			    <!-- Bootstrap core CSS -->
			    <link href="assets/css/bootstrap.css" rel="stylesheet">
			    <!--external css-->
			    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
			    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
			    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
			        
			    <!-- Custom styles for this template -->
			    <link href="assets/css/style.css" rel="stylesheet">
			    <link href="assets/css/style-responsive.css" rel="stylesheet">
			  </head>

			  <body>
			  <!--Abertura de section general -->
			  <section id="container" >';
		      	if(isset($_SESSION['nombrePersonal']))
    			{
    				
    				$sesion = true;
	        		$header .= '<header class="header black-bg">
		              <div class="sidebar-toggle-box">
		                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
		              </div>
		            <!--logo start-->
		            <a href="index.html" class="logo"><b>La Carpinteria SV</b></a>
		            <!--logo end-->
		            <div class="nav notify-row" id="top_menu">
		                <!--  notification start -->
		                <ul class="nav top-menu">
		                    
		                    <!-- inbox dropdown start-->
		                    <li id="header_inbox_bar" class="dropdown">
		                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
		                            <i class="fa fa-envelope-o"></i>
		                            <span class="badge bg-theme">5</span>
		                        </a>
		                        <ul class="dropdown-menu extended inbox">
		                            <div class="notify-arrow notify-arrow-green"></div>
		                            <li>
		                                <p class="green">You have 5 new messages</p>
		                            </li>
		                            <li>
		                                <a href="index.html#">
		                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
		                                    <span class="subject">
		                                    <span class="from">Zac Snider</span>
		                                    <span class="time">Just now</span>
		                                    </span>
		                                    <span class="message">
		                                        Hi mate, how is everything?
		                                    </span>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="index.html#">
		                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
		                                    <span class="subject">
		                                    <span class="from">Divya Manian</span>
		                                    <span class="time">40 mins.</span>
		                                    </span>
		                                    <span class="message">
		                                     Hi, I need your help with this.
		                                    </span>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="index.html#">
		                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
		                                    <span class="subject">
		                                    <span class="from">Dan Rogers</span>
		                                    <span class="time">2 hrs.</span>
		                                    </span>
		                                    <span class="message">
		                                        Love your new Dashboard.
		                                    </span>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="index.html#">
		                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
		                                    <span class="subject">
		                                    <span class="from">Dj Sherman</span>
		                                    <span class="time">4 hrs.</span>
		                                    </span>
		                                    <span class="message">
		                                        Please, answer asap.
		                                    </span>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="index.html#">See all messages</a>
		                            </li>
		                        </ul>
		                    </li>
		                    <!-- inbox dropdown end -->
		                </ul>
		                <!--  notification end -->
		            </div>
		            <div class="top-menu">
		            	<ul class="nav pull-right top-menu">
		                    <li><a class="logout" href="login.php">Logout</a></li>
		            	</ul>
		            </div>
		        </header>

		        <!--sidebar start-->
		      <aside>
		          <div id="sidebar"  class="nav-collapse ">
		              <!-- sidebar menu start-->
		              <ul class="sidebar-menu" id="nav-accordion">
		              
		                  <h5 class="centered">Miguel Cumi</h5>
		                    
		                  <li class="mt">
		                      <a class="active" href="dashboard.php">
		                          <i class="fa fa-dashboard"></i>
		                          <span>Dashboard</span>
		                      </a>
		                  </li>

		                  <li class="sub-menu">
		                      <a href="javascript:;" >
		                          <i class="glyphicon glyphicon-shopping-cart"></i>
		                          <span>Productos</span>
		                      </a>
		                      <ul class="sub">
		                          <li><a  href="general.html">Categorias</a></li>
		                          <li><a  href="buttons.html">Subcategoria</a></li>
		                          <li><a  href="panels.html">Inventario</a></li>
		                          <li><a  href="panels.html">Productos</a></li>
		                      </ul>
		                  </li>

		                  <li class="sub-menu">
		                      <a href="javascript:;" >
		                          <i class="glyphicon glyphicon-user"></i>
		                          <span>Personal</span>
		                      </a>
		                      <ul class="sub">
		                          <li><a  href="calendar.html">Personal</a></li>
		                          <li><a  href="cargos.php">Cargos</a></li>
		                      </ul>
		                  </li>
		                  <li class="sub-menu">
		                      <a href="javascript:;" >
		                          <i class="glyphicon glyphicon-list-alt"></i>
		                          <span>Pedidos</span>
		                      </a>
		                      <ul class="sub">
		                          <li><a  href="blank.html">Lista de Pedidos</a></li>
		                          <li><a  href="form_component.html">Cotizaciones</a></li>
		                      </ul>
		                  </li>
		                  <li class="sub-menu">
		                      <a href="javascript:;" >
		                          <i class="glyphicon glyphicon-book"></i>
		                          <span>Clientes</span>
		                      </a>
		                      <ul class="sub">
		                          <li><a  href="form_component.html">Clientes</a></li>
		                          <li><a  href="form_component.html">Carritos</a></li>
		                      </ul>
		                  </li>
		                  <li class="sub-menu">
		                      <a href="javascript:;" >
		                          <i class="glyphicon glyphicon-cog"></i>
		                          <span>Extras</span>
		                      </a>
		                      <ul class="sub">
		                          <li><a  href="basic_table.html">Basic Table</a></li>
		                          <li><a  href="responsive_table.html">Responsive Table</a></li>
		                      </ul>
		                  </li>
		              </ul>
		              <!-- sidebar menu end-->
		          </div>
		      </aside>
		      <!--sidebar end-->
		      ';
	      		}
	      		else
	      		{
	      			$header .= "<a href='../../' class='brand-logo'>
	        						<i class='material-icons'>web</i>
	    						</a>";
	      		}
		      	$header .= "</div>
		    			</nav>
	  				</div>
	  				<div class='container center-align'>";
	  	print($header);
  		if($sesion)
  		{
  			if($filename != "login.php")
  			{
  				print("<h3>$title</h3>");
  			}
  			else
  			{
  				header("location: index.php");
  			}
  		}
  		else
  		{
  			if($filename != "login.php" && $filename != "register.php")
  			{
  				print("<div class='card-panel red'><a href='../main/login.php'><h5>Debe iniciar sesión.</h5></a></div>");
		  		self::footer();
		  		exit();
  			}
  			else
  			{
  				print("<h3>$title</h3>");
  			}
  		}
	}

	public static function footer()
	{
		$footer = '<!--main content end-->
				      <!--footer start-->
				      <footer class="site-footer">
				          <div class="text-center">
				              2014 - Alvarez.is
				              <a href="form_component.html#" class="go-top">
				                  <i class="fa fa-angle-up"></i>
				              </a>
				          </div>
				      </footer>
					
					<!--Cierre de section general -->
					  </section>

				      <script src="assets/js/jquery.js"></script>
					    <script src="assets/js/bootstrap.min.js"></script>
					    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
					    <script src="assets/js/jquery.scrollTo.min.js"></script>
					    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


					    <!--common script for all pages-->
					    <script src="assets/js/common-scripts.js"></script>

					    <!--script for this page-->
					    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

					  <!--custom switch-->
					  <script src="assets/js/bootstrap-switch.js"></script>
					  
					  <!--custom tagsinput-->
					  <script src="assets/js/jquery.tagsinput.js"></script>
					  
					  <!--custom checkbox & radio-->
					  
					  <script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					  <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
					  <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
					  
					  <script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
					  
					  
					  <script src="assets/js/form-component.js"></script>    
					    
					    
					  <script>
					      //custom select box

					      $(function(){
					          $("select.styled").customSelect();
					      });

					  </script>
					</body>
					</html>';
		print($footer);
	}

	public static function setCombo($name, $value, $query)
	{
		$data = Database::getRows($query, null);
		$combo = "<select name='$name' required>";
		if($value == null)
		{
			$combo .= "<option value='' disabled selected>Seleccione una opción</option>";
		}
		foreach($data as $row)
		{
			$combo .= "<option value='$row[0]'";
			if(isset($_POST[$name]) == $row[0] || $value == $row[0])
			{
				$combo .= " selected";
			}
			$combo .= ">$row[1]</option>";
		}	
		$combo .= "</select>
				<label style='text-transform: capitalize;'>$name</label>";
		print($combo);
	}
}
?>