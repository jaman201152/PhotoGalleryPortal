@extends('front_end.master')
@section('content')

                <h2>Contact Information</h2>
                
                <p>I love to write to help all of you who want to know.<br> 
                  This message is for all the wishers of the world who love to know top news to live well.
                </p>
        <div class="cleaner_h40"></div>
        
        	<div class="float_l">
            
           		<h6>Company Address One</h6>
                Tejgaon, Dhaka-1215 <br />
                Bangladesh<br/>
                Mobile:01719-84 58 56
                
                
            </div>
                
            <div class="float_r">
           
                <h6>Company Address Two</h6>
                Banani, Dhaka-1213 <br />
                Bangladesh<br />
                Mobile: 01949-26 08 05 
                
            </div>
                
                <div class="cleaner_h50"></div>
                
                <div id="contact_form">
                
                <h3>Drop a message fill free to know about news</h3>
                  <span style="color:green; padding:10px; font-size: 16px;">
                <?php
                $msg = Session::get('save');
                if ($msg != null) {
                    echo $msg;
                    Session::put('save', null);
                }
                ?>
            </span>
            <span style="color:red;  padding:10px; font-size: 16px;">
                <?php
                $nmsg = Session::get('nsave');
                if ($msg != null) {
                    echo $nmsg;
                    Session::put('nsave', null);
                }
                ?>
            </span>
                {!! Form::open(['method'=>'post','url'=>'/save-contact','name'=>'contact']) !!}
                <label for="author">Name:</label> 
                <input type="text" id="author" name="person_name" class="required input_field" />
                <div class="cleaner_h10"></div>

                <label for="email">Email:</label> 
                <input type="text" id="email" name="email" class="validate-email required input_field" />
                <div class="cleaner_h10"></div>

                <label for="phone">Phone:</label> 
                <input type="text" name="phone" id="phone" class="input_field" />
                <div class="cleaner_h10"></div>

                <label for="text">Message:</label> 
                <textarea id="text" name="message" rows="0" cols="0" class="required"></textarea>
                <div class="cleaner_h10"></div>

                <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />

                {!! Form::close() !!}
                
                    </div>
            @endsection
            