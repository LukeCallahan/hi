<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type"
        content="text/html; charset=iso-8859-1" />
  <meta name="robots"
        content="all" />
  <meta name="generator"
        content="RapidWeaver" />
  <meta name="generatorversion"
        content="3.5.1 (Build 264)" />

  <title>Customer Survey 2</title>
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/simple/styles.css" />
  <link rel="stylesheet"
        type="text/css"
        media="print"
        href="../rw_common/themes/simple/print.css" />
  <link rel="stylesheet"
        type="text/css"
        media="handheld"
        href="../rw_common/themes/simple/handheld.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/simple/css/styles/soft_pink.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/simple/css/width/width_default.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/simple/css/sidebar/sidebar_right.css" />
        
<script type="text/javascript"
      src="../rw_common/themes/simple/javascript.js">
</script>
</head>

<body>
  <div id="container">
    <!-- Start container -->

    <div id="pageHeader">
      <!-- Start page header -->
      <img src="files/Untitled-2.jpg"
           alt="Site logo" />

      <h1>Handwriting Insights</h1>

      <h2>the 5-minute handwriting analysis kit</h2>
    </div><!-- End page header -->

    <div id="sidebarContainer">
      <!-- Start Sidebar wrapper -->

      <div id="navcontainer">
        <!-- Start Navigation -->

        <ul>
          <li><a href="../index.html"
             rel="self">Home</a></li>

          <li><a href="../lesson.html"
             rel="self">Free Course</a></li>

          <li><a href="../lesson2.html"
             rel="self">Course Examples</a></li>

          <li><a href="../ideas.html"
             rel="self">Uses</a></li>

          <li><a href="../compare.html"
             rel="self">Compare</a></li>

          <li><a href="../reviews.html"
             rel="self">Reviews</a></li>

          <li><a href="../contacts.html"
             rel="self">Contact Us</a></li>

          <li><a href="../authors.html"
             rel="self">Authors</a></li>

          <li><a href="../order.html"
             rel="self">Order</a></li>

          <li><a href="../declaration.htm"
             rel="self">Declaration of Independence</a></li>

          <li><a href="../special.html"
             rel="self">Special Offer</a></li>
        </ul>
      </div><!-- End navigation -->

      <div class="sideHeader"></div><!-- Sidebar header -->

      <div id="sidebar">
        <!-- Start sidebar content -->
        <!-- sidebar content you enter in the page inspector -->
        <!-- sidebar content such as the blog archive links -->
      </div><!-- End sidebar content -->
    </div><!-- End sidebar wrapper -->

    <div id="contentContainer">
      <!-- Start main content wrapper -->

      <div id="content">
        <!-- Start content -->
        <?php
        if(!array_key_exists('formMessage', $_SESSION))
        $_SESSION['formMessage'] = "";
        if(!array_key_exists('form_element0', $_SESSION))
        $_SESSION['form_element0'] = "";
        if(!array_key_exists('form_element1', $_SESSION))
        $_SESSION['form_element1'] = "";
        if(!array_key_exists('form_element2', $_SESSION))
        $_SESSION['form_element2'] = "";
        if(!array_key_exists('form_element3', $_SESSION))
        $_SESSION['form_element3'] = "";
        ?>

        <div class="message-text">
          <?php
          if (!$_SESSION['formMessage']) { 
          echo "Fill in the form below to send me an email.";
          } else {
           echo $_SESSION['formMessage'];
           }
           ?>
        </div>
        <br />

        <form action="./files/mailer.php"
              method="post"
              enctype="multipart/form-data">
          <label>Your Name:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element0']; ?>"
                name="form_element0"
                size="40" />
          <br />
          <br />
          <label>Your Email:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element1']; ?>"
                name="form_element1"
                size="40" />
          <br />
          <br />
          <label>Subject:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element2']; ?>"
                name="form_element2"
                size="40" />
          <br />
          <br />
          <label>Message:</label> *
          <br />
          <textarea class="form-input-field"
                name="form_element3"
                rows="8"
                cols="38">
<?php echo $_SESSION['form_element3']; ?>
</textarea>
          <br />
          <br />
          <input class="form-input-button"
                type="reset"
                name="resetButton"
                value="Reset" /> <input class="form-input-button"
                type="submit"
                name="submitButton"
                value="Submit" />
        </form><?php session_destroy(); ?>
      </div><!-- End content -->
    </div><!-- End main content wrapper -->

    <div class="clearer"></div>

    <div id="footer">
      <!-- Start Footer -->

      <div id="breadcrumbcontainer">
        <!-- Start the breadcrumb wrapper -->
      </div><!-- End breadcrumb -->

      <p>� 2006 Handwriting Insights <a href=
      "mailto:melinda@personalitytest123.com">Contact Me</a></p>
    </div><!-- End Footer -->
  </div><!-- End container -->
</body>
</html>