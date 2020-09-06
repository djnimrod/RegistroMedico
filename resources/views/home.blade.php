@extends('adminlte::page')
@section('title', 'Pagina Principal')

@section('content_header')
    <h1>Pagina de Inicio</h1>
@stop

@section('content')
     <div class="card">
     <div class="card-header">Hola Mundo
     </div>
     <div class="card-body">
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus possimus temporibus similique eveniet veritatis, necessitatibus nostrum debitis mollitia, porro optio voluptatem qui atque alias earum perspiciatis dolores minus? Obcaecati, fugiat.
     </div>
     </div>
     <div class="card">
     <div class="card-header">Hola Mundo
     </div>
     <div class="card-body">
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus possimus temporibus similique eveniet veritatis, necessitatibus nostrum debitis mollitia, porro optio voluptatem qui atque alias earum perspiciatis dolores minus? Obcaecati, fugiat.
     </div>
     </div>
     <div class="card">
     <div class="card-header">Hola Mundo
     </div>
     <div class="card-body">
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus possimus temporibus similique eveniet veritatis, necessitatibus nostrum debitis mollitia, porro optio voluptatem qui atque alias earum perspiciatis dolores minus? Obcaecati, fugiat.
     </div>
     </div>
     <div class="card">
     <div class="card-header">Hola Mundo
     </div>
     <div class="card-body">
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus possimus temporibus similique eveniet veritatis, necessitatibus nostrum debitis mollitia, porro optio voluptatem qui atque alias earum perspiciatis dolores minus? Obcaecati, fugiat.
     </div>
     </div>
    <p>Welcome to this beautiful admin panel.</p>

    <div class="card">
    <div class="card-header">
    Registro de Personas

    <div class="col-xl-12 d-flex">
    <div class="col-xl-6">
        <div class="col">Municipio</div>
        <div class="col">Barrio o Comunidad</div>
    </div>
    <div class="col-xl-6">
         <div class="col">Fecha:</div>  
         <div class="col">Brigada Medica:</div>  
    </div>
    </div>
    </div>
    <div class="card-body">
    <span>Formulario</span>
         <div class="card">
               <div class="card-header">Persona</div>
               <div class="card-body">
                    <div class="col-xl-12">
           <div class="form-group">
           <label for="nombres">Nombres</label>
           <input type="text" class="form-control" id="nombres" aria-describedby="nombresHelp" placeholder="nombres" name="nombres">
           <small id="nombresHelp" class="form-text text-muted">nombre de la persona a registrar.</small>
           <label for="nombres">Apellidos</label>
           <input type="text" class="form-control" id="apellidos" aria-describedby="apellidosHelp" placeholder="apellidos" name="apellidos">
           <small id="apellidosHelp" class="form-text text-muted">apellidos de la persona a registrar.</small>
           <label for="fechaNac">Fecha de Nacimiento</label>
           <input type="date" class="form-control" id="fechaNac" aria-describedby="fechaNacHelp" placeholder="fecha Nac" name="fechaNac">
           <small id="fechaNacHelp" class="form-text text-muted">Fecha de Nacimiento de la persona a registrar.</small>
           <label for="sexo">Sexo</label>
           <div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1">
  <label class="custom-control-label" for="customSwitch1">Masculino</label>
</div>
           <!-- <span>Masculino</span>
           <input type="checkbox" class="form-control" id="sexoM" aria-describedby="sexoHelp" placeholder="sexo" name="sexoM">
           <span>Femenino</span>
           <input type="checkbox" class="form-control" id="sexoF" aria-describedby="sexoFHelp" placeholder="sexo" name="sexoF">
           <small id="sexoFHelp" class="form-text text-muted">Sexo de la persona a registrar.</small> -->

          </div>
                    </div>
               </div>
         </div>
         
    </div>


    </div>
    <div class="card">
    <form class="wizard-form steps-basic" action="#" data-fouc>
						<h6>Personal data</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Select location:</label>
										<select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
											<option></option>
											<optgroup label="North America">
												<option value="1">United States</option>
												<option value="2">Canada</option>
											</optgroup>
											<optgroup label="Latin America">
												<option value="3">Chile</option>
												<option value="4">Argentina</option>
												<option value="5">Colombia</option>
												<option value="6">Peru</option>
											</optgroup>
											<optgroup label="Europe">
												<option value="8">Croatia</option>
												<option value="9">Hungary</option>
												<option value="10">Ukraine</option>
												<option value="11">Greece</option>
											</optgroup>
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Select position:</label>
										<select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
											<option></option>
											<optgroup label="Developer Relations">
												<option value="1">Sales Engineer</option>
												<option value="2">Ads Solutions Consultant</option>
												<option value="3">Technical Solutions Consultant</option>
												<option value="4">Business Intern</option>
											</optgroup>

											<optgroup label="Engineering &amp; Design">
												<option value="5">Interaction Designer</option>
												<option value="6">Technical Program Manager</option>
												<option value="7">Software Engineer</option>
												<option value="8">Information Security Engineer</option>
											</optgroup>

											<optgroup label="Marketing &amp; Communications">
												<option value="13">Media Outreach Manager</option>
												<option value="14">Research Manager</option>
												<option value="15">Marketing Intern</option>
												<option value="16">Business Intern</option>
											</optgroup>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Applicant name:</label>
										<input type="text" name="name" class="form-control" placeholder="John Doe">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Email address:</label>
										<input type="email" name="email" class="form-control" placeholder="your@email.com">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone #:</label>
										<input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
									</div>
								</div>

								<div class="col-md-6">
									<label>Date of birth:</label>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
													<option></option>
													<option value="1">January</option>
													<option value="2">February</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
													<option></option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="...">...</option>
													<option value="31">31</option>
												</select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
													<option></option>
													<option value="1">1980</option>
													<option value="2">1981</option>
													<option value="3">1982</option>
													<option value="4">1983</option>
													<option value="5">1984</option>
													<option value="6">1985</option>
													<option value="7">1986</option>
													<option value="8">1987</option>
													<option value="9">1988</option>
													<option value="10">1989</option>
													<option value="11">1990</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</fieldset>

						<h6>Your education</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>University:</label>
		                                <input type="text" name="university" placeholder="University name" class="form-control">
	                                </div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Country:</label>
	                                    <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
	                                        <option></option> 
	                                        <option value="1">United States</option> 
	                                        <option value="2">France</option> 
	                                        <option value="3">Germany</option> 
	                                        <option value="4">Spain</option> 
	                                    </select>
                                    </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Degree level:</label>
		                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
	                                </div>

									<div class="form-group">
										<label>Specialization:</label>
		                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
	                                </div>
								</div>

								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6">
											<label>From:</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
					                                    	<option></option>
					                                        <option value="January">January</option> 
					                                        <option value="...">...</option> 
					                                        <option value="December">December</option> 
					                                    </select>
				                                    </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
					                                        <option></option> 
					                                        <option value="1995">1995</option> 
					                                        <option value="...">...</option> 
					                                        <option value="1980">1980</option> 
					                                    </select>
				                                    </div>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<label>To:</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
					                                    	<option></option>
					                                        <option value="January">January</option> 
					                                        <option value="...">...</option> 
					                                        <option value="December">December</option> 
					                                    </select>
				                                    </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
					                                        <option></option> 
					                                        <option value="1995">1995</option> 
					                                        <option value="...">...</option> 
					                                        <option value="1980">1980</option> 
					                                    </select>
				                                    </div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Language of education:</label>
		                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
	                                </div>
								</div>
							</div>
						</fieldset>

						<h6>Your experience</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Company:</label>
		                                <input type="text" name="experience-company" placeholder="Company name" class="form-control">
	                                </div>

									<div class="form-group">
										<label>Position:</label>
		                                <input type="text" name="experience-position" placeholder="Company name" class="form-control">
	                                </div>

									<div class="row">
										<div class="col-md-6">
											<label>From:</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
					                                    	<option></option>
					                                        <option value="January">January</option> 
					                                        <option value="...">...</option> 
					                                        <option value="December">December</option> 
					                                    </select>
				                                    </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
					                                        <option></option> 
					                                        <option value="1995">1995</option> 
					                                        <option value="...">...</option> 
					                                        <option value="1980">1980</option> 
					                                    </select>
				                                    </div>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<label>To:</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
					                                    	<option></option>
					                                        <option value="January">January</option> 
					                                        <option value="...">...</option> 
					                                        <option value="December">December</option> 
					                                    </select>
				                                    </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
					                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
					                                        <option></option> 
					                                        <option value="1995">1995</option> 
					                                        <option value="...">...</option> 
					                                        <option value="1980">1980</option> 
					                                    </select>
				                                    </div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
	                                <div class="form-group">
										<label>Brief description:</label>
	                                    <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
	                                </div>

									<div class="form-group">
										<label class="d-block">Recommendations:</label>
	                                    <input name="recommendations" type="file" class="form-input-styled" data-fouc>
	                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
	                                </div>
								</div>
							</div>
						</fieldset>

						<h6>Additional info</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="d-block">Applicant resume:</label>
	                                    <input type="file" name="resume" class="form-input-styled" data-fouc>
	                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Where did you find us?</label>
	                                    <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
	                                        <option></option> 
	                                        <option value="monster">Monster.com</option> 
	                                        <option value="linkedin">LinkedIn</option> 
	                                        <option value="google">Google</option> 
	                                        <option value="adwords">Google AdWords</option> 
	                                        <option value="other">Other source</option>
	                                    </select>
                                    </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Availability:</label>
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="availability" class="form-input-styled" data-fouc>
												Immediately
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="availability" class="form-input-styled" data-fouc>
												1 - 2 weeks
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="availability" class="form-input-styled" data-fouc>
												3 - 4 weeks
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="availability" class="form-input-styled" data-fouc>
												More than 1 month
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Additional information:</label>
	                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                    </div>
								</div>
							</div>
						</fieldset>
					</form>
    </div>
@stop

<!-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop -->

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
@stop

