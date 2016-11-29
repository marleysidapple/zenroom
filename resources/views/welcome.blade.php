<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Booking Template</title>

    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container main">

    <div class="row">
        <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Bulk Operations</div>
      <form method="post" action="{{url('booking/filter')}}">
      {!! csrf_field() !!}
      <div class="panel-body">
         <div class="form-group">
          <label for="inputEmail3" class="col-sm-1 control-label" style="margin-top: 10px;">Select Room</label>
          <div class="col-sm-2">
            <select class="form-control" name="room">
              <option value="single">Single</option>
              <option value="double">Double</option>
            </select>
          </div>
        </div>
      </div>

      <div class="panel-body">
         

         
             
              
          <div class="col-sm-3 row">

          <div class="col-sm-3">
            <span>Select Days</span>
          </div>


            <div class="col-sm-9">
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">From:</label>
                <div class="col-sm-9">
                  <input type="text" name="from" class="form-control datepicker" id="inputEmail3">
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">To:</label>
                <div class="col-sm-9">
                  <input type="text" name="to" class="form-control datepicker" id="inputPassword3">
                </div>
              </div>
            </div>


          </div>

           <div class="col-sm-9 row">
               <div class="form-group col-sm-9">
                 <label for="inputEmail3" class="col-sm-2 control-label" style="margin-top: 10px;">Refine Days:</label>
                  <div class="col-sm-3">
                    <ul class="checklist">
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="all">All Days</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="weekday">All Weekdays</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="weekend">All Weekeneds</label></div></li>
                    </ul>
                  </div>

                  <div class="col-sm-3">
                     <ul class="checklist">
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="mon">Mondays</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="tue">Tuesdays</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="wed">Wednesdays</label></div></li>
                    </ul>
                  </div>
                  <div class="col-sm-2">
                     <ul class="checklist">
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="thu">Thursday</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="fri">Fridays</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="sat">Saturdays</label></div></li>
                    </ul>
                  </div>

                   <div class="col-sm-2">
                     <ul class="checklist">
                      <li> <div class="checkbox"><label><input type="checkbox" name="days[]" value="sun">Sundays</label></div></li>
                    </ul>
                  </div>
             </div>
           </div>

       
      </div>



      <div class="panel-body">
         <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Change Price To:</label>
          <div class="col-sm-2">
            <input type="text" name="price" class="form-control" id="inputEmail3">
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Change Availability To:</label>
          <div class="col-sm-2">
            <input type="text" name="available" class="form-control" id="inputPassword3">
          </div>
        </div>
      </div>
     
      <div class="panel-footer">
        <button type="submit" class="btn btn-success btn-sm">Update</button>
      </div>

      </form>
    </div>
    </div>


      <div class="row">
        <div class="info-left">
          <h5 class="head">Price and availability</h5>  

          <ul class="detail">
            <li><span>Single Room</span></li>
            <li><span>Room available</span></li>
            <li><span>Price</span></li>
            <li><span>Double Room</span></li>
            <li><span>Room available</span></li>
            <li><span>Price</span></li>
          </ul>
        </div>

        <div class="my-table">
            <table class="table table-bordered">
              <tr>
                <td colspan="30" style="text-align: center">November 2016</td>
              </tr>

              <tr>
                @foreach($list as $key => $val)
                <td {{($val == 'Saturday' || $val == 'Sunday') ? 'class=weekend' : ''}}>{{$val}}</td>
                @endforeach
              </tr>

              <tr>
                @foreach($day as $key => $value)
                 <td>{{$value}}</td>
                @endforeach
              </tr>

              <tr class="single-separator">
                <td colspan="30" style="text-align: center">&nbsp;</td>
              </tr>

              <tr>
               @foreach($singleBooking as $room)
                <td>{{$room->available_room}}</td>
               @endforeach
              </tr>

               <tr>
                @foreach($singleBooking as $price)
                <td>{{$price->price}}</td>
               @endforeach
              </tr>

               <tr class="double-separator">
                <td colspan="30" style="text-align: center">&nbsp;</td>
              </tr>

               <tr>
               @foreach($doubleBooking as $room)
                <td>{{$room->available_room}}</td>
               @endforeach
              </tr>

               <tr>
                @foreach($doubleBooking as $price)
                <td>{{$price->price}}</td>
               @endforeach
              </tr>


            </table>
          </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script>
      $( function(){
        $( ".datepicker" ).datepicker();
      });
  </script>
  </body>
</html>