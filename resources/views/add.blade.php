@extends('layouts.app')

@section('content')
<main>
      <div class="main-wrapper">
        <div class="container-fluid">
          <div style="height: 100vh">
		<div class="md-form input-group">
	<span class="input-group-btn">
	<input type="text" id="search" class="form-control col-md-10">
    <label for="search">Search</label>
	</span>
	<button class="btn btn-primary btn-sm"><i class="fa fa-search mr-1"></i> Search</button>
</div>
<hr>
            <!-- Card -->
            <div class="card">

                <!-- Card body -->
                <div class="card-body">

                    <!-- Material form register -->
                    <!-- Default horizontal form -->
                    <form>
                        <!-- Grid row -->
                        <div class="form-row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                    <label for="name"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                            <div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <select class="form-control" id="gender" name="gender">
									<option value="">Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
									</select>
                                    <label for="gender"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="number" class="form-control" id="age" placeholder="Age">
                                    <label for="age"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="missing_from" name="missing_from" placeholder="Missing From">
                                    <label for="missing_from"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="missing_date" name="missing_date" placeholder="Missing Since">
                                    <label for="missing_date"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
								<select class="form-control" id="district" name="district">
								<option value="">District</option>
								<option value="ALA">Alappuzha</option>
								<option value="EKM">Ernakulam</option>
								<option value="IDK">Idukki</option>
								<option value="CAN">Kannur</option>
								<option value="KGD">Kasargod</option>
								<option value="QLN">Kollam</option>
								<option value="KTM">Kottayam</option>
								<option value="CLT">Kozhikode</option>
								<option value="MLP">Malappuram</option>
								<option value="PKD">Palakkad</option>
								<option value="PTA">Pathanamthitta</option>
								<option value="TVM">Thiruvananthapuram</option>
								<option value="TCR">Thrissur</option>
								<option value="WYD">Wayanad</option>
								</select>
                                <label for="district"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="ps" name="ps" placeholder="Police Station">
                                    <label for="ps"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                     <input type="text" class="form-control" id="notes" placeholder="Notes">
                                     <label for="notes"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    
                        <!-- Grid row -->
                        <div class="form-row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="file" class="form-control" id="image" placeholder="Image">
                                    <label for="inputCityMD"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number">
                                    <label for="contact_number"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                      </div>
                      <!-- Grid row -->
                        <button type="submit" class="btn btn-primary btn-md">Register</button>
                    </form>
                    <!-- Default horizontal form -->
                    <!-- Material form register -->

                </div>
                <!-- Card body -->

            </div>
            <!-- Card -->

          </div>
        </div>
      </div>
    </main>
@endsection
