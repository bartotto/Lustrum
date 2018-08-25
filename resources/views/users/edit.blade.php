@extends('layouts.app')
@section('subtitle', '| '.trans('info.profile'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('info.edit_user') }}</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/users/{{ $user->id }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button class="btn btn-primary" onclick="goBack()">
                            {{ trans('info.cancel') }}
                        </button>
                        <button type="submit" class="btn btn-primary">{{ trans('info.save') }}</button>
                    </div>    
                    @include ('layouts.errors')
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">{{ trans('info.name') }}</label>
                        <div class="col-4">
                            <input type="text" class="form-control" value="{{ $user->first_name }}" id="first_name" name="first_name" placeholder="{{ trans('info.first_name') }}">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="{{ trans('info.last_name') }}">
                        </div>
                    </div>
                    <div class="nativeDatePicker">
                        <label for="dob" class="col-sm-3 col-form-label">{{ trans('info.dob') }}</label>
                        <div class="col-sm-9">
                            <!-- <input class="form-control" type="date" value="{{ date('d-m-Y', strtotime($user->dob)) }}" id="dob" name="dob"> -->
                            <input class="form-control" type="date" id="dob" name="dob">
                            <span class="validity"></span>
                        </div>
                    </div>
                    <div class="fallbackDatePicker">
                        <span>
                            <label for="day">Day:</label>
                            <select id="day" name="day">
                            </select>
                        </span>
                        <span>
                            <label for="month">Month:</label>
                            <select id="month" name="month">
                                <option selected>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </span>
                        <span>
                            <label for="year">Year:</label>
                            <select id="year" name="year">
                            </select>
                        </span>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">{{ trans('info.email_address') }}</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="email" value="{{ $user->email }}" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_address" class="col-sm-3 col-form-label">{{ trans('info.home_address') }}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $user->home_address }}" id="home_address" name="home_address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_postalcode" class="col-sm-4 col-form-label">{{ trans('info.home_postalcode') }}</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="{{ $user->home_postalcode }}" id="home_postalcode" name="home_postalcode" placeholder="{{ trans('info.home_postalcode') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_city" class="col-sm-3 col-form-label">{{ trans('info.home_city') }}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $user->home_city }}" id="home_city" name="home_city" placeholder="{{ trans('info.home_city') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_country" class="col-sm-3 col-form-label">{{ trans('info.home_country') }}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $user->home_country }}" id="home_country" name="home_country">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_tel" class="col-sm-3 col-form-label">{{ trans('info.home_tel') }}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $user->home_tel }}" id="home_tel" name="home_tel" placeholder="{{ trans('info.home_tel') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-sm-3 col-form-label">{{ trans('info.mobile') }}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $user->mobile }}" id="mobile" name="mobile" placeholder="{{ trans('info.mobile') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="size" class="col-sm-3 col-form-label">{{ trans('info.size') }}</label>
                        <div class="col-sm-5">
                            <select class="form-control col-sm-5" id="size" name="size">
                                <option>{{ $user->size }}</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>2XL</option>
                                <option>3XL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">         
                        <label for="strandborrel" class="radio-inline col-sm-9 col-form-label" >{{ trans('info.strand_borrel') }}&nbsp;
                            @if($user->strandborrel == 'No')            
                                <input type="radio" name="strandborrel" value="No" checked> {{ trans('info.no') }}&nbsp;
                                <input type="radio" name="strandborrel" value="Yes"> {{ trans('info.yes') }}  
                            @else
                                <input type="radio" name="strandborrel" value="No"> {{ trans('info.no') }}&nbsp;
                                <input type="radio" name="strandborrel" value="Yes" checked> {{ trans('info.yes') }}
                            @endif
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{ trans('info.save') }}</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->user_role = 'Member' OR Auth::user()->user_role = 'Member+')
                    {{ trans('info.edit_user_warning') }}
                @endif
            </div> 
        </div>
        @if(Auth::user()->user_role = 'Member' || Auth::user()->user_role = 'Member+')
            <div class="card">
                <div class="card-header">
                    <h2>{{ trans('info.details_partner') }}</h2>
                </div>
                <div class="card-body">
                    @if(Auth::id() == $user->id)
                        <div class="btn btn-default">
                            {{ trans('info.edit') }}
                        </div>
                    @endif
                    <TABLE BORDER="0" STYLE="border-style: solid">
                        <TR>
                            <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.name') }}</TD>
                            <TD>{{ $user->partner_first_name }} {{ $user->partner }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_email') }}</TD>
                            <TD>{{ $user->partner_email }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_mobile') }}</TD>
                            <TD>{{ $user->partner_mobile }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_visible') }}</TD>
                            <TD>
                                @if($user->partner_visible=='Yes')
                                    {{ trans('info.yes') }}
                                @else
                                    {{ trans('info.no') }}
                                @endif
                            </TD>
                        </TR>
                        <TR>
                            <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_login') }}</TD>
                            <TD>
                                @if($user->partner_login=='Yes')
                                    {{ trans('info.yes') }}
                                @else
                                    {{ trans('info.no') }}
                                @endif
                            </TD>
                        </TR>
                    </TABLE>
                </div>
                <div class="card-footer text-muted text-left">
                    @if(Auth::user()->user_role = 'Member')
                        <p>{{ trans('info.edit_user_warning2') }}<br>
                        <sup>*</sup>{{ trans('info.edit_user_warning3') }}</p>
                    @endif
                </div>
            </div>
        @endif
    </div>
    <script>
        // define variables
        var nativePicker = document.querySelector('.nativeDatePicker');
        var fallbackPicker = document.querySelector('.fallbackDatePicker');
        var fallbackLabel = document.querySelector('.fallbackLabel');

        var yearSelect = document.querySelector('#year');
        var monthSelect = document.querySelector('#month');
        var daySelect = document.querySelector('#day');

        // hide fallback initially
        fallbackPicker.style.display = 'none';
        fallbackLabel.style.display = 'none';

        // test whether a new date input falls back to a text input or not
        var test = document.createElement('input');
        test.type = 'date';

        // if it does, run the code inside the if() {} block
        if(test.type === 'text') {
            // hide the native picker and show the fallback
            nativePicker.style.display = 'none';
            fallbackPicker.style.display = 'block';
            fallbackLabel.style.display = 'block';

            // populate the days and years dynamically
            // (the months are always the same, therefore hardcoded)
            populateDays(monthSelect.value);
            populateYears();
            }

        function populateDays(month) {
            // delete the current set of <option> elements out of the
            // day <select>, ready for the next set to be injected
            while(daySelect.firstChild){
                daySelect.removeChild(daySelect.firstChild);
                }

            // Create variable to hold new number of days to inject
            var dayNum;

            // 31 or 30 days?
            if(month === 'January' || month === 'March' || month === 'May' || month === 'July' || month === 'August' || month === 'October' || month === 'December') {
              dayNum = 31;
            } else if(month === 'April' || month === 'June' || month === 'September' || month === 'November') {
              dayNum = 30;
            } else {
            // If month is February, calculate whether it is a leap year or not
              var year = yearSelect.value;
              var leap = (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
              dayNum = leap ? 29 : 28;
            }

            // inject the right number of new <option> elements into the day <select>
            for(i = 1; i <= dayNum; i++) {
              var option = document.createElement('option');
              option.textContent = i;
              daySelect.appendChild(option);
            }

            // if previous day has already been set, set daySelect's value
            // to that day, to avoid the day jumping back to 1 when you
            // change the year
            if(previousDay) {
                daySelect.value = previousDay;

                // If the previous day was set to a high number, say 31, and then
                // you chose a month with less total days in it (e.g. February),
                // this part of the code ensures that the highest day available
                // is selected, rather than showing a blank daySelect
                if(daySelect.value === "") {
                    daySelect.value = previousDay - 1;
                    }

                if(daySelect.value === "") {
                    daySelect.value = previousDay - 2;
                    }

                if(daySelect.value === "") {
                    daySelect.value = previousDay - 3;
                    }
                }
            }

        function populateYears() {
            // get this year as a number
            var date = new Date();
            var year = date.getFullYear();

            // Make this year, and the 100 years before it available in the year <select>
            for(var i = 0; i <= 100; i++) {
                var option = document.createElement('option');
                option.textContent = year-i;
                yearSelect.appendChild(option);
                }
            }

        // when the month or year <select> values are changed, rerun populateDays()
        // in case the change affected the number of available days
        yearSelect.onchange = function() {
            populateDays(monthSelect.value);
            }

        monthSelect.onchange = function() {
            populateDays(monthSelect.value);
            }

        //preserve day selection
        var previousDay;

        // update what day has been set to previously
        // see end of populateDays() for usage
        daySelect.onchange = function() {
            previousDay = daySelect.value;
            }
    </script>
@endsection
