@extends('frontend.layout.app')

@section('content')

<style>
    label
    {
        color: white;
        font-family: 'Open-sans', sans-serif;
    }
</style>


<!--Start Register-->
<section class="contact" id="contact">
    <div class="container">
    <h2>Registration Form</h2>
        <div class="content">
            <div class="box form wow slideInLeft">
                <form>
                    <label>First Name</label>
                    <input type="text" name="first_name" id="first_name">
                    <label>Gender</label>
                    <select name="gender" id="gender">
                        <option value="" selected>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <label>Age</label>
                    <input type="number" name="age" id="age">
                    <label>Email</label>
                    <input type="email" name="email" id="email">
                    <label>Address Line 2</label>
                    <input type="text" name="address_2" id="address_2">
                    <label>County</label>
                    <input type="text" name="county" id="county">
                    <label>Country</label>
                    <input type="text" name="country" id="country">
                    <label>Current Weight (in KG)</label>
                    <input type="number" name="weight" id="weight">
                    <label>Emergency Contact Number</label>
                    <input type="tel" name="emergency_number" id="emergency_number">
                    <label>Tell why you deserve to be in the ABC Health & Fitness</label>
                    <textarea name="reason" id="reason"></textarea>
                    <button onclick="register()" type="button">Submit</button>
                </form>
            </div>
            <div class="box form wow slideInRight">
                <form>
                    <label>Last Name</label>
                    <input type="text" name="last_name" id="last_name">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" id="dob">
                    <label>Phone Number</label>
                    <input type="tel" name="phone_number" id="phone_number">
                    <label>Address Line 1</label>
                    <input type="text" name="address_1" id="address_1">
                    <label>City</label>
                    <input type="text" name="city" id="city">
                    <label>Province</label>
                    <input type="text" name="province" id="province">
                    <label>Current Height (in Centimeters)</label>
                    <input type="number" name="height" id="height">
                    <label>Goal Weight (in KG)</label>
                    <input type="number" name="goal_weight" id="goal_weight">
                    <label>Relationship of the Emergency Contact</label>
                    <input type="text" name="emergency_relationship" id="emergency_relationship">                   
                </form>
            </div>
        </div>
    </div>
</section>

<script src="//cdn.jsdelivr.net/npm/jquery@3.6.0"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
    function register()
    {
        var first_name = document.getElementById('first_name').value;
        var last_name = document.getElementById('last_name').value;
        var gender = document.getElementById('gender').value;
        var dob = document.getElementById('dob').value;
        var age = document.getElementById('age').value;
        var phone_number = document.getElementById('phone_number').value;
        var email = document.getElementById('email').value;
        var address_1 = document.getElementById('address_1').value;
        var address_2 = document.getElementById('address_2').value;
        var city = document.getElementById('city').value;
        var county = document.getElementById('county').value;
        var province = document.getElementById('province').value;
        var country = document.getElementById('country').value;
        var height = document.getElementById('height').value;
        var weight = document.getElementById('weight').value;
        var goal_weight = document.getElementById('goal_weight').value;
        var emergency_number = document.getElementById('emergency_number').value;
        var emergency_relationship = document.getElementById('emergency_relationship').value;
        var reason = document.getElementById('reason').value;

        $.ajax({
            url: "/user/registration",
            type: "post",
            data: {
                first_name: first_name,
                last_name: last_name,
                gender: gender,
                dob: dob,
                age: age,
                phone_number: phone_number,
                email: email,
                address_1: address_1,
                address_2: address_2,
                city: city,
                county: county,
                province: province,
                country: country,
                height: height,
                weight: weight,
                goal_weight: goal_weight,
                emergency_number: emergency_number,
                emergency_relationship: emergency_relationship,
                reason: reason,
                _token: $('meta[name="csrf-token"]').attr('content')

            },
            dataType: 'json',
            error: function(error) {
                console.log(error);
                Swal.fire(
                    'ERROR',
                    'Something went wrong',
                    'question'
                )
            },
            success: function(r) {
                console.log(r);
                swal.fire({
                    title: 'You have Successfully Registered',
                    position: 'center',
                    icon: 'success',
                    type: 'success',
                    padding: '2em',
                    confirmButtonColor: '#282d3b',
                    confirmButtonText: 'SUCCESS',
                    onClose: function() {
                        window.location.href = '{{url('/')}}';
                    }
                });
            }
        });
    }
</script>
    

<!--End Register-->

@endsection