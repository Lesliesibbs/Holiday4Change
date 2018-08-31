<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="STEPS | Multipurpose Working Wizard with Branches">
    <meta name="author" content="Ansonika">


    <!-- BASE CSS -->
    <link href="css3/bootstrap.min.css" rel="stylesheet">
    <link href="css3/style.css" rel="stylesheet">
	<link href="css3/menu.css" rel="stylesheet">
	<link href="css3/vendors.min.css" rel="stylesheet">
	<link href="css3/icon_fonts/css/all_icons.min.css" rel="stylesheet">
	<link href="css3/skins/square/grey.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css3/custom.css" rel="stylesheet">

	<script src="js3/modernizr.js"></script>
	<!-- Modernizr -->

</head>

<body>


	<main>
		<div class="container">
			<div id="wizard_container">
				<form name="example-1" id="wrapped" method="POST">
					<input id="website" name="website" type="text" value="">
					<!-- Leave input above for security protection, read docs for details -->
					<div id="middle-wizard">

						<!-- First branch What Type of Project ============================== -->
						<div class="step" data-state="branchtype">
							<div class="question_title">
								<h3>Which of the options below looks like the capital city of Scotland?</h3>
							</div>
							<div class="row">
								<div class="col">
									<div class="item">
										<input id="answer_1" type="radio" name="branch_1_group_1" value="Seo-Optimization" class="required">
										<label for="answer_1"><strong>London</label>
									</div>
								</div>

              </div>
              <div class="row">
								<div class="col">
									<div class="item">
										<input id="answer_2" name="branch_1_group_1" type="radio" value="Web-Development" class="required">
										<label for="answer_2"><strong>Glasgow</label>
									</div>
								</div>
              </div>
              <div class="row">
								<div class="col">
									<div class="item">
										<input id="answer_3" name="branch_1_group_1" type="radio" value="Design" class="required">
										<label for="answer_3"><strong>Edinburgh</label>
									</div>
								</div>
							</div>
							<!-- /row-->
						</div>
						<!-- /First branch What Type of Project ============================== -->

						<!-- /What Type of Project > Seo-Optimization ============================== -->
						<div class="branch" id="Seo-Optimization">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>What continent is China in?</h3>
								</div>
								<div class="row">
									<div class="col">
										<div class="item">
											<input id="branch_1_answer_1" type="checkbox" name="branch_1_answers[]" value="Page SEO Checker" class="required">
											<label for="branch_1_answer_1"><strong>Southeast Asia</label>
										</div>
									</div>
                </div>
                <div class="row">
									<div class="col">
										<div class="item">
											<input id="branch_1_answer_2" name="branch_1_answers[]" type="checkbox" value="Pay Per Click" class="required">
											<label for="branch_1_answer_2"><strong>Asia</label>
										</div>
									</div>
                </div>
                <div class="row">
									<div class="col">
										<div class="item">
											<input id="branch_1_answer_3" name="branch_1_answers[]" type="checkbox" value="Backlinks Checker" class="required">
											<label for="branch_1_answer_3"><strong>North America</label>
										</div>
									</div>
								</div>
								<!-- /row-->
							</div>
							<!-- /step -->
						</div>
						<!-- /What Type of Project > Seo-Optimization ============================== -->

						<!-- Web-Development > HTML-Development ============================== -->
						<div class="branch" id="HTML-Development">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>Web Development: HTML Development</h3>
									<p>Multiple Selection (Checkbox based)</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-5">
										<div class="box_general">
                      Thank You for taking part in this month's games, we appreciate it and hope that you are part of the final 100 contestants.
                    </div>
										<!-- /box_general -->
									</div>
								</div>
								<!-- /row -->
							</div>
						</div>
						<!-- /Web-Development > HTML-Development ============================== -->

						<!-- Web-Development > CMS-Development ============================== -->
						<div class="branch" id="CMS-Development">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>Web Development: CMS Development</h3>
									<p>Multiple Selection (Checkbox based)</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-5">
										<div class="box_general">
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_2_answers[]" class="icheck required" value="WordPress">WordPress</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_2_answers[]" class="icheck required" value="Magento">Magento</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_2_answers[]" class="icheck required" value="Drupal">Drupal</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_2_answers[]" class="icheck required" value="Joomla">Joomla</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_2_answers[]" class="icheck required" value="PrestaShop">PrestaShop</label>
											</div>
											<hr>
											<h6 class="add_bottom_15">Any particular notes?</h6>
											<textarea class="form-control" style="height:100px; margin-bottom:0;" placeholder="Typer here" name="cms_development_notes"></textarea>
										</div>
										<!-- /box_general -->
									</div>
								</div>
								<!-- /row -->
							</div>
						</div>
						<!-- /Web-Development > CMS-Development ============================== -->

						<!-- Web-Development > FrontEnd-Development ============================== -->
						<div class="branch" id="FrontEnd-Development">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>Web Development: FrontEnd Development</h3>
									<p>Multiple Selection (Checkbox based)</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-5">
										<div class="box_general">
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Jquery">Jquery</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Angularjs 2">Angularjs 2</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Angularjs 4">Angularjs 4</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Reactjs">Reactjs</label>
											</div>
											<div class="form-group short">
												<label><input type="checkbox" name="branch_2_3_answers[]" class="icheck required" value="Sass">Sass</label>
											</div>
											<hr>
											<h6 class="add_bottom_15">Any particular notes?</h6>
											<textarea class="form-control" style="height:100px; margin-bottom:0;" placeholder="Typer here" name="frontend_development_notes"></textarea>
										</div>
										<!-- /box_general -->
									</div>
								</div>
								<!-- /row -->
							</div>
						</div>
						<!-- /Web-Development > FrontEnd-Development ============================== -->

						<!-- Design > What Type of Design do you need ============================== -->
						<div class="branch" id="Design">
							<div class="step" data-state="budget">
								<div class="question_title">
									<h3>What Type of Design do you need?</h3>
									<p>Multiple Selection (Checkbox based)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="branch_3_answer_1" type="checkbox" name="branch_3_answers[]" value="Web Design">
											<label for="branch_3_answer_1"><img src="img3/design_icon_2.svg" alt=""><strong>Web Design</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="branch_3_answer_2" name="branch_3_answers[]" type="checkbox" value="Print Design">
											<label for="branch_3_answer_2"><img src="img3/design_icon_3.svg" alt=""><strong>Print Design</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="branch_3_answer_3" name="branch_3_answers[]" type="checkbox" value="Logo Design">
											<label for="branch_3_answer_3"><img src="img3/design_icon_4.svg" alt=""><strong>Logo Design</strong>Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
										</div>
									</div>
								</div>
								<!-- /row-->
							</div>
							<!-- /Design > What Type of Design do you need ============================== -->

							<!-- Budget ============================== -->
							<div class="step" id="budget" data-state="end">
								<div class="question_title">
									<h3>Whats the maximum you need to spend on a Love2Shop giftcard?</h3>
									<p>Touchscreen friendly Range Slider</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-5">
										<div class="box_general">
										<div class="rounded_slider">
											<div id="budget_slider" style="margin: 0 auto 20px;"></div>
											</div>
										</div>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /Budget ============================== -->

							<!-- Last step ============================== -->
							<div class="submit step" id="end">
								<div class="question_title">
									<h3>Plase fill with your details</h3>
									<p>Ei duo homero postea dignissim.</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-5">
										<div class="box_general">
                      <p>
                        Thank You for taking part in this month's games, we appreciate it and hope that you are part of the final 100 contestants.

                      </p>
										</div>
										<!-- /box_general -->
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /Last step ============================== -->
						</div>
					</div>
					<!-- /middle-wizard -->
					<div id="bottom-wizard">
						<button type="button" name="backward" class="backward">Backward </button>
						<button type="button" name="forward" class="forward">Forward</button>
            <a class="btn btn-primary" href="/profile" role="button">Submit</a>
					</div>
					<!-- /bottom-wizard -->
				</form>
			</div>
			<!-- /Wizard container -->
		</div>
		<!-- /Container -->
	</main>
	<!-- /main -->


	<!-- COMMON SCRIPTS -->
    <script src="js3/jquery-2.2.4.min.js"></script>
    <script src="js3/common_scripts.min.js"></script>
	<script src="js3/menu.js"></script>
	<script src="js3/main.js"></script>
	<script src="js3/wizard_func_multiple_branch.js"></script>

</body>
</html>
