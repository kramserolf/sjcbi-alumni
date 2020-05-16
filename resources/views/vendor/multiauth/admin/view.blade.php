<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
   	<div class="modal-header">
   		<h5 class="modal-title" id="myLargeModalLabel">View Alumni</h5>
   	</div>
   	<div class="modal-body">
   		<div class="border-bottom pt-3 mb-4">
   		    <h4 class="text-monospace">Alumni Profile</h4>
   		    <div class="form-group row">
   		        <div class="col-sm-12">
   		            <label>Name</label>
   		            <input id="name" type="text" name="name" id="name" class="form-control font-weight-bold" disabled>
   		        </div>
   		    </div>
   		    <div class="form-group row">
   		        <div class="col-sm-4">
   		            <label>Gender</label>
   		               <input type="text" name="gender" class="form-control font-weight-bold" id="gender" disabled>
   		          </div>
   		        <div class="col-sm-3">
   		            
   		        </div>
   		        <div class="col-sm-5">
   		            <label>Civil Status</label>
   		            <select class="custom-select font-weight-bold" name="civil_status" id="civil_status" disabled>
   		                <option selected>{{old('civil_status')}}</option>
   		                <option value="Single">Single</option>
   		                <option value="Married">Married</option>
   		                <option value="Separated">Separated</option>
   		                <option value="Divorced">Divorced</option>
   		                <option value="Widowed">Widowed</option>
   		            </select>
   		        </div>
   		    </div>
   		    <div class="form-group row">
   		        <div class="col-sm-8">
   		            <label>Degree Obtained in SJBCI</label>
   		            <input type="text" name="degree" id="degree" class="form-control font-weight-bold" disabled> 
   		        </div>
   		        <div class="col-sm-4">
   		            <label>Year Graduated</label>
   		            <select class="custom-select font-weight-bold" name="year" id="year" disabled>
   		                <option selected>{{old('year')}}</option>
   		                @for($year = 2010; $year < 2021; $year++);
   		                <option value="{{$year}}">{{$year}}</option>
   		                @endfor
   		            </select>
   		        </div>
   		    </div>
   		</div>{{-- End of alumni--}}
   		<div class="border-bottom pt-3 mb-4">
   			<h4 class="text-monospace">Employment</h4>
   			<div class="form-group row">
   				<div class="col-sm-4">
   				    <label>Employment Status</label>
   				    <select class="custom-select font-weight-bold" name="emp_status" id="emp_status" disabled>
   				        <option selected>{{old('emp_status')}}</option>
   				            <option value="Employed">Employed</option>
   				            <option value="Self-employed">Self-employed</option>
   				            <option value="Unemployed">Unemployed</option>
   				        </option>
   				    </select>
   				</div>
   				<div class="col-sm-8">
   				    <label>Type of Job</label>
   				    <input type="text" class="form-control font-weight-bold" name="job_type" id="job_type" disabled>
   				</div>
   			</div>
   			<div class="form-group row">
   			    <div class="col-sm-7">
   			        <label>Position</label>
   			        <input type="text" name="position" id="position" class="form-control font-weight-bold" disabled>
   			    </div>
   			    <div class="col-sm-5">
   			        <label>Status</label>
   			           <input type="text" name="part_time" id="part_time" class="form-control font-weight-bold" disabled>
   			   </div>
   			</div>
   			<div class="form-group row">
   			    <div class="col-sm-4">
   			        <label>Tenure of Employment</label>
   			        <select class="custom-select font-weight-bold" name="tenure" id="tenure" disabled>
   			          <option selected>{{old('tenure')}}</option>
   			          <option value="Less than 6 Months">0 - 6 months</option>
   			          <option value="Less than  1 Year">6 - 12 months</option>
   			          <option value="Less than 2 Years">1 - 2 Years</option>
   			          <option value="More than 3 Years">More than 3 years</option>
   			        </select>
   			    </div>
   			    <div class="col-sm-4">
   			        <label>Salary</label>
   			        <select class="custom-select font-weight-bold" name="salary" id="salary" disabled>
   			          <option selected>{{old('salary')}}</option>
   			          <option value="Less than 10,000">Less than 10,000</option>
   			          <option value="11,000 to 20, 000">11,000 - 20, 000</option>
   			          <option value="21,000 to 30,000">21,000 to 30,000</option>
   			          <option value="31,000 to 41,000">31,000 to 40,000</option>
   			          <option value="41,000 to 50,000">41,000 to 50,000</option>
   			          <option value="More than 50,000">More than 50,000</option>
   			        </select>
   			    </div>
   			    <div class="col-sm-4">
   			        <label>Type of Company</label>
   			          <input type="text" class="form-control font-weight-bold" name="comp_type" id="comp_type" disabled>
   			   </div>
   			</div>
   			<div class="form-group row">
   			    <div class="col-sm-5">
   			        <label>Government type
   			           <input type="text" class="form-control font-weight-bold" name="private" id="private" disabled>
   			        </label>
   			    </div>
   			    <div class="col-sm-1">
   			        
   			    </div>
   			    <div class="col-sm-6">
   			        <label>Length of Job Search</label>.
   			        <select class="custom-select font-weight-bold" name="job_search" id="job_search" disabled>
   			          <option selected>{{old('job_search')}}</option>
   			          <option value="0 to 6 Months">0 to 6 Months</option>
   			          <option value="6 to 12 months">6 to 12 months</option>
   			          <option value="1 year to 2 years">1 year to 2 years</option>
   			          <option value="More than 2 years">More than 2 years</option>
   			        </select>
   			    </div>
   			 </div>
   			 <div class="form-group row">
   			     <div class="col-sm-7">
   			         <label>Business Venture</label>
   			         <textarea class="form-control font-weight-bold" name="venture" id="venture" style="min-height: 150px;" disabled></textarea>
   			     </div>
   			 </div>
   		</div> {{-- End of employment--}}
   		<div class="border-bottom pt-3 mb-4">
   			<h4 class="text-monospace">Academic Preparation</h4>
   			<div class="form-group row">
   			    <div class="col-sm-6">
   			        <label>Knowledge</label>
   			        <textarea class="form-control font-weight-bold" name="knowledge" id="knowledge" disabled></textarea>
   			    </div>
   			    <div class="col-sm-6">
   			        <label>Skills</label>
   			        <textarea class="form-control font-weight-bold" name="skills" id="skills" disabled></textarea>
   			    </div>
   			</div>
   			<div class="form-group row">
   			    <div class="col-sm-4">
   			        <label>Curriculum</label>
   			        <textarea class="form-control font-weight-bold" name="curriculum" id="curriculum" disabled></textarea>
   			    </div>
   			    <div class="col-sm-4">
   			        <label>Faculty & Staff</label>
   			        <textarea class="form-control font-weight-bold" name="faculty" id="faculty" disabled></textarea>
   			    </div>
   			    <div class="col-sm-4">
   			        <label>Facilities & Resources</label>
   			        <select class="custom-select font-weight-bold" name="facilities" id="facilities" disabled>
   			            <option selected></option>
                        
   			        </select>
   			    </div>
   			</div>
   		</div> {{-- End of academic prep  --}}
   		<div class="border-bottom pt-3 mb-4">
   			<h4 class="text-monospace">Professional Development</h4>
   			<div class="form-group row">
   			    <div class="col-sm-8">
   			        <label>Master's Degree</label>
   			        <input type="text" name="masters_degree" id="masters_degree" class="form-control font-weight-bold" disabled>
   			    </div>
   			    <div class="col-sm-4">
   			        <label>Year Graduated</label>
   			        <input type="text" name="masters_year" id="masters_year" class="form-control font-weight-bold" disabled>
   			    </div>
   			</div>
   			<div class="form-group row">
   			    <div class="col-sm-8">
   			        <label>Doctoral's Degree</label>
   			        <input type="text" name="doctors_degree" id="doctors_degree" class="form-control font-weight-bold" disabled>
   			    </div>
   			    <div class="col-sm-4">
   			        <label>Year Graduated</label>
   			        <input type="text" name="doctors_year" id="doctors_year" class="form-control font-weight-bold" disabled>
   			    </div>
   			</div>
   			<div class="form-group row">
   			    <div class="col-sm-6">
   			        <label>Seminars & Trainings</label>
   			        <textarea class="form-control font-weight-bold" name="seminars" id="seminars" disabled></textarea>
   			    </div>
   			    <div class="col-sm-6">
   			        <label>IT Certifications</label>
   			        <textarea class="form-control font-weight-bold" name="certificates" id="certificates" disabled></textarea>
   			    </div>
   			</div>
   		</div> {{-- End of prof dev  --}}
   </div>
  </div>
</div>