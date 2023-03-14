@extends('backend.layout.app')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
            <div class="col-lg-12">
                <div class="widget-content searchable-container list">

                    <div class="row">
                        <div
                            class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                            <form class="form-inline my-2 my-lg-0">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                    <input type="text" class="form-control product-search" id="input-search"
                                        placeholder="Search Customers...">
                                </div>
                            </form>
                        </div>

                        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Customers</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Gender</th>
                                                    <th class="text-center">Date of Birth</th>
                                                    <th class="text-center">Age</th>
                                                    <th class="text-center">Phone Number</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Address</th>
                                                    <th class="text-center">Height</th>
                                                    <th class="text-center">Weight</th>
                                                    <th class="text-center">Goal Weight</th>
                                                    <th class="text-center">BMI</th>
                                                    <th class="text-center">Reason</th>
                                                    <th class="text-center">Emergency Contact</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($customers as $customer)
                                                <tr>
                                                    <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                                                    <td>{{ $customer->gender }}</td>
                                                    <td>{{ $customer->dob }}</td>
                                                    <td>{{ $customer->age }}</td>
                                                    <td>{{ $customer->phone_number }}</td>
                                                    <td>{{ $customer->email }}</td>
                                                    <td>{{ $customer->address_1 }}, {{ $customer->address_2 }},
                                                        {{ $customer->city }}, {{ $customer->county }},
                                                        {{ $customer->province }}, {{ $customer->country }}</td>
                                                    <td>{{ $customer->height }}cm</td>
                                                    <td>{{ $customer->weight }}kg</td>
                                                    <td>{{ $customer->goal_weight }}kg</td>
                                                    <td>{{ $customer->bmi }}</td>
                                                    <td>{{ $customer->reason }}</td>
                                                    <td>{{ $customer->emergency_number }} -
                                                        {{ $customer->emergency_relationship }}</td>
                                                    @if($customer->bmi < 18.5) <td class="text-center"><span
                                                            class="badge badge-primary">Underweight</span></td>
                                                        @elseif($customer->bmi >= 18.5 && $customer->bmi < 24.9) <td
                                                            class="text-center"><span
                                                                class="badge badge-success">Normal</span></td>
                                                            @elseif($customer->bmi > 25.0 && $customer->bmi < 29.9) <td
                                                                class="text-center"><span
                                                                    class="badge badge-warning">Overweight</span></td>
                                                                @else
                                                                <td class="text-center"><span
                                                                        class="badge badge-danger">Obesity</span></td>
                                                                @endif
                                                                <td class="text-center">

                                                                    <div class="dropdown custom-dropdown">
                                                                        <a class="dropdown-toggle" href="#"
                                                                            role="button" id="dropdownMenuLink1"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                                <circle cx="5" cy="12" r="1"></circle>
                                                                            </svg>
                                                                        </a>

                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuLink1">
                                                                            <a class="dropdown-item" data-toggle="modal"
                                                                                data-target="#exampleModal"
                                                                                href="javascript:void(0);">Share</a>
                                                                            <a class="dropdown-item"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true"  style="overflow: visible;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assigning Coaches</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <select class="form-control  basic" style="position: static !important;" name="coaches" id="coaches">
                    <option selected="selected">Select Coaches</option>
                    <option value="Kethmi Nihara">Yoga Coach (Male) - Ryan</option>
                    <option value="Kethmi Nihara">Yoga Coach (Female) - Bridget</option>
                    <option value="Kethmi Nihara">Exercise Coach (Male) - Martin</option>
                    <option value="Kethmi Nihara">Exercise Coach (Female) - Fiona</option>
                    <option value="Kethmi Nihara">Virtual Programs Coach (Male) - Riordan</option>
                    <option value="Kethmi Nihara">Virtual Programs Coach (Female) - Mona </option>
                    <option value="Kethmi Nihara">Challenges Coach (Male) - Ruadh</option>
                    <option value="Kethmi Nihara">General Coach (Male) - Calbhach</option>
                    <option value="Kethmi Nihara">General Coach (Female) - Aoife</option>
                    <option value="Kethmi Nihara">Dance Coach (Female) - Líadan</option>
                    <option value="Kethmi Nihara">Telemedicine Coach (Male) - Dubhán</option>
                    <option value="Kethmi Nihara">Special Coach (Male) - Keefe</option>
                    <option value="Kethmi Nihara">Special Coach (Female) - Aurnia</option>
                    <option value="Kethmi Nihara">Underweight Training Coach (Male) - Meallán</option>
                    <option value="Kethmi Nihara">Underweight Training Coach (Female) - Keavy</option>
                    <option value="Kethmi Nihara">Obesity Training Coach (Male) - Brian</option>
                    <option value="Kethmi Nihara">Obesity Training Coach (Female) - Laoise</option>
                    <option value="Kethmi Nihara">Normal Training Coach (Male) - Desmond</option>
                    <option value="Kethmi Nihara">Normal Training Coach (Female) - Rosaleen</option>
                    <option value="Kethmi Nihara">Overweight Training Coach (Male) - Patrick</option>
                    <option value="Kethmi Nihara">Overweight Training Coach (Female) - Sive</option>
                    <option value="Kethmi Nihara">Child Training Coach (Female) - Tríona</option>
                    <option value="Kethmi Nihara">Senior Adult Training Coach (Male) - Aden</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="button" onclick="assignCoach()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->

<script src="//cdn.jsdelivr.net/npm/jquery@3.6.0"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function assignCoach()
    {

    }
</script>

@endsection