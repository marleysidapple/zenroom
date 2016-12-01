@extends('layouts.master')

@section('main')
 
@if(Session::has('message'))
<div class="alert alert-info">
  <span>{{Session::get('message')}}</span>
</div>
@endif

 <div id="singler" title="Update Details">
    <form method="post" action="{{url('booking/singleroom')}}">
    {!! csrf_field() !!}
    <input type="hidden" name="columnid" id="columnid">
    <input type="text" name="singleroom" id="singleroom" required>
    <button type="submit" class="updaterow">Update</button>
    </form>
</div>

 <div id="singlep" title="Update Details">
    <form method="post" action="{{url('booking/singleprice')}}">
    {!! csrf_field() !!}
    <input type="hidden" name="columnid" id="columnid1">
    <input type="text" name="singleprice" id="singleprice" required>
    <button type="submit" class="updaterow">Update</button>
    </form>
</div>

 <div id="doubler" title="Update Details">
    <form method="post" action="{{url('booking/doubleroom')}}">
    {!! csrf_field() !!}
    <input type="hidden" name="columnid" id="columnid2">
    <input type="text" name="doubleroom" id="doubleroom" required>
    <button type="submit" class="updaterow">Update</button>
    </form>
</div>

 <div id="doublep" title="Update Details">
    <form method="post" action="{{url('booking/doubleprice')}}">
    {!! csrf_field() !!}
    <input type="hidden" name="columnid" id="columnid3">
    <input type="text" name="doubleprice" id="doubleprice" required>
    <button type="submit" class="updaterow">Update</button>
    </form>
</div>

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
              <option value="single" {{(old('room') == 'single') ? 'selected' : ''}}>Single</option>
              <option value="double" {{(old('room') == 'double') ? 'selected' : ''}}>Double</option>
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
                  <input type="text" name="from" autocomplete="off" class="form-control datepicker" id="inputEmail3" value="{{old('from')}}">
                   @if ($errors->has('from'))<span class="help-block">{{ $errors->first('from') }} </span>@endif
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">To:</label>
                <div class="col-sm-9">
                  <input type="text" name="to" autocomplete="off" class="form-control datepicker" id="inputPassword3" value="{{old('to')}}">
                    @if ($errors->has('to'))<span class="help-block">{{ $errors->first('to') }} </span>@endif
                </div>
              </div>
            </div>


          </div>

           <div class="col-sm-9 row">
               <div class="form-group col-sm-9">
                 <label for="inputEmail3" class="col-sm-2 control-label" style="margin-top: 10px;">Refine Days:</label>
                  <div class="col-sm-3">
                    <ul class="checklist">
                      <li> <div class="checkbox"><label><input type="checkbox" id="all">All Days</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" id="weekdays">All Weekdays</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" id="weekends">All Weekends</label></div></li>
                    </ul>
                  </div>

                  <div class="col-sm-3">
                     <ul class="checklist">
                      <li> <div class="checkbox"><label><input type="checkbox" class="weekday" name="days[]" value="1" {{((old('days') != "") ? (in_array('1', old('days'))) ? 'checked' : '' : '')}}>Mondays</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" class="weekday"  name="days[]" value="2" {{((old('days') != "") ? (in_array('2', old('days'))) ? 'checked' : '' : '')}}>Tuesdays</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" class="weekday" name="days[]" value="3" {{((old('days') != "") ? (in_array('3', old('days'))) ? 'checked' : '' : '')}}>Wednesdays</label></div></li>
                    </ul>
                  </div>
                  <div class="col-sm-2">
                     <ul class="checklist">
                      <li> <div class="checkbox"><label><input type="checkbox" class="weekday" name="days[]" value="4" {{((old('days') != "") ? (in_array('4', old('days'))) ? 'checked' : '' : '')}}>Thursday</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" class="weekday" name="days[]" value="5" {{((old('days') != "") ? (in_array('5', old('days'))) ? 'checked' : '' : '')}}>Fridays</label></div></li>
                      <li> <div class="checkbox"><label><input type="checkbox" class="weekend" name="days[]" value="6" {{((old('days') != "") ? (in_array('6', old('days'))) ? 'checked' : '' : '')}}>Saturdays</label></div></li>
                    </ul>
                  </div>

                   <div class="col-sm-2">
                     <ul class="checklist">
                      <li> <div class="checkbox"><label><input type="checkbox" class="weekend" name="days[]" value="0" {{((old('days') != "") ? (in_array('0', old('days'))) ? 'checked' : '' : '')}}>Sundays</label></div></li>
                    </ul>
                  </div>
             </div>
              @if ($errors->has('days'))<span class="help-block">{{ $errors->first('days') }} </span>@endif
           </div>
      </div>



      <div class="panel-body">
         <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Change Price To:</label>
          <div class="col-sm-2">
            <input type="text" name="price" class="form-control" id="inputEmail3" value="{{old('price')}}">
          </div>
           @if ($errors->has('price'))<span class="help-block">{{ $errors->first('price') }} </span>@endif
          <div class="clearfix"></div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Change Availability To:</label>
          <div class="col-sm-2">
            <input type="text" name="available" class="form-control" id="inputPassword3" value="{{old('available')}}">
          </div>
           @if ($errors->has('available'))<span class="help-block">{{ $errors->first('available') }} </span>@endif
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
                <td colspan="{{count($singleBooking)}}" style="text-align: center">{{date('F') .' '. date('Y')}}</td>
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
                <td colspan="{{count($singleBooking)}}" style="text-align: center">&nbsp;</td>
              </tr>

              <tr>
               @foreach($singleBooking as $room)
                <td><span class="singleroom" attr="{{$room->id}}">{{$room->available_room}}</span></td>
               @endforeach
              </tr>

               <tr>
                @foreach($singleBooking as $price)
                <td><span class="singleprice" attr="{{$price->id}}">{{$price->price}}</span></td>
               @endforeach
              </tr>

               <tr class="double-separator">
                <td colspan="{{count($singleBooking)}}" style="text-align: center">&nbsp;</td>
              </tr>

               <tr>
               @foreach($doubleBooking as $room)
                <td><span class="doubleroom" attr="{{$room->id}}">{{$room->available_room}}</span></td>
               @endforeach
              </tr>

               <tr>
                @foreach($doubleBooking as $price)
                <td><span class="doubleprice" attr="{{$price->id}}">{{$price->price}}</span></td>
               @endforeach
              </tr>


            </table>
          </div>
        </div>
  @endsection