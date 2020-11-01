<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Student_detail</title>
<link type="text/css" rel="stylesheet" href="{{ asset('single_asset/css/blue.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('single_asset/css/print.css') }}" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="{{ asset('single_asset/js/jquery-1.4.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('single_asset/js/jquery.tipsy.js') }}"></script>
<script type="text/javascript" src="{{ asset('single_asset/js/cufon.yui.js') }}"></script>
<script type="text/javascript" src="{{ asset('single_asset/js/scrollTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('single_asset/js/myriad.js') }}"></script>
<script type="text/javascript" src="{{ asset('single_asset/js/jquery.colorbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('single_asset/js/custom.js') }}"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="school_name">Shree Ratan Panday Secondary School</div>
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="{{ asset('storage/student/img/'.$result[0]->image) }}" width="20px;" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name">{{$result[0]->f_name}}&nbsp{{$result[0]->l_name}}<br />
              <span>class:{{$result[0]->class}}</span></h1>
            <ul>
              <li class="ad">{{$result[0]->address}}</li>
              <li class="mail">{{$result[0]->guardian_name}}</li>
              <li class="tel">{{$result[0]->contact_no}}</li>
              <li class="ad">Acedamic Year:<?php echo date('Y')?></li>
              <button style="background-color: yellow;"><a href="{{ url('/') }}">Go Back</a></button>
            </ul>
          </div>
          <!-- End Personal Information -->
         
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>Result Section</h2>
          <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Subject</th>
                          <th>First Terminal</th>
                          <th>Second Terminal</th>
                          <th>Third Terminal</th>
                          <th>Final Exam</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Math</th>
                          <td>15</td>
                          <td>50</td>
                          <td>41</td>
                          <td>32</td>
                        </tr>
                        <tr>
                          <th>Science</th>
                          <td>77</td>
                          <td>65</td>
                          <td>57</td>
                          <td>90</td>
                        </tr>
                        <tr>
                          <th>Nepali</th>
                          <td>45</td>
                          <td>54</td>
                          <td>81</td>
                          <td>39</td>
                        </tr>
                        <tr>
                          <th>Social</th>
                          <td>45</td>
                          <td>54</td>
                          <td>81</td>
                          <td>39</td>
                        </tr>
                        <tr>
                          <th>HPE</th>
                          <td>45</td>
                          <td>54</td>
                          <td>81</td>
                          <td>39</td>
                        </tr>
                        <tr>
                          <th>Echonomics</th>
                          <td>45</td>
                          <td>54</td>
                          <td>81</td>
                          <td>39</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
        </div>
        <div class="entry">
          <h2>Fees Section<br>
            Monthly Fee:Rs850
          </h2>
          <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Month</th>
                          <th>Paid</th>
                          <th>Not-Paid</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Junary</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                        <tr>
                          <th>Febrary</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                         <tr>
                          <th>March</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                         <tr>
                          <th>April</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                         <tr>
                          <th>May</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                         <tr>
                          <th>June</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                        <tr>
                          <th>July</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                        <tr>
                          <th>Augest</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                        <tr>
                          <th>September</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                        <tr>
                          <th>October</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                        <tr>
                          <th>November</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                        <tr>
                          <th>December</th>
                          <td>Null</td>
                          <td>unpaid</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
        </div>
        <!-- End 1st Row -->
        
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
