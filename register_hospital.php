<?php require_once 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 w3-light-grey w3-border w3-padding-16 mt-4 rounded">
			<div class="w3-padding-24">
				<h2>Hospital Register</h2>
			</div>
			<form>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control register" id="username" aria-describedby="usernameHelp" placeholder="Enter username">
					<small id="usernameHelp" class="form-text text-muted">Username is your unique identity which is used for login.<span id="check_hospital"></span></small>
				</div>
				<div class="form-group">
					<label for="hospital_name">Hospital Name</label>
					<input type="text" class="form-control register" id="hospital_name" placeholder="Enter name of hospital">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input onkeyup="trigger()" type="password" class="form-control register" id="password" placeholder="Password must be atleast 6 characters long">
					<div class="indicator">
						<span class="weak"></span>
						<span class="medium"></span>
						<span class="strong"></span>
					</div>
					<div class="text">Your password is weak</div>
				</div>
				<div class="form-group">
					<label for="mobile">Mobile</label>
					<input type="tel" class="form-control register" id="mobile" placeholder="Enter 10 digit mobile number">
				</div>
				<a href="#" class="btn btn-outline-primary" id="register">Register</a>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php require_once 'footer.php'; ?>

<script>
	$("document").ready(function() {
		$("#tab_register").addClass("active");
	});

	$('.register').keypress(function(e) {
		if (e.which == 13) { //Enter key pressed
			$('#register').click(); //Trigger search button click event
		}
	});

	$("#username").blur(function() {
		var username = $("#username").val();
		$.post("api/hospital/profile/check_username.php", {
			username: username
		}, function(data) {
			// console.log(data);
			$("#check_hospital").removeClass();
			if (data == true) {
				$("#check_hospital").text(" ( Available )");
				$("#check_hospital").addClass("text-success");
			} else {
				$("#check_hospital").text(" ( Not Available )");
				$("#check_hospital").addClass("text-danger");
			}
		});
	});

	$("#register").click(function() {
		$.post("api/hospital/profile/register.php", {
			username: $("#username").val(),
			hospital_name: $("#hospital_name").val(),
			password: $("#password").val(),
			mobile: $("#mobile").val()
		}, function(data) {
			console.log(data);
			var arr = JSON.parse(data);
			if (arr["status"] == "success") {
				$(".msg").html(show_alert(arr["remark"], "success"));
			} else {
				$(".msg").html(show_alert(arr["remark"], "warning"));
			}
		})
	});
</script>

<script>
	const indicator = document.querySelector(".indicator");
	const input = document.querySelector("#password");
	const weak = document.querySelector(".weak");
	const medium = document.querySelector(".medium");
	const strong = document.querySelector(".strong");
	const text = document.querySelector(".text");
	let regExpWeak = /[a-z]/;
	let regExpMedium = /\d+/;
	let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;

	function trigger() {
		if (input.value != "") {
			indicator.style.display = "block";
			indicator.style.display = "flex";
			if (input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value.match(regExpStrong))) no = 1;
			if (input.value.length >= 6 && (input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpStrong))) no = 2;
			if (input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong)) no = 3;

			if (no == 1) {
				weak.classList.add("active");
				text.style.display = "block";
				text.textContent = "Your password is too weak";
				text.classList.add("weak");
			}
			if (no == 2) {
				weak.classList.replace("weak", "medium");
				medium.classList.add("active");
				text.textContent = "Your password is medium";
				text.classList.add("medium");
			} else {
				weak.classList.replace("medium", "weak");
				medium.classList.remove("active");
				text.classList.remove("medium");

			}

			if (no == 3) {
				weak.classList.add("active");
				medium.classList.add("active");
				strong.classList.add("active");
				weak.classList.replace("weak", "strong");
				medium.classList.replace("medium", "strong");
				text.textContent = "Your password is strong";
				text.classList.add("strong");
			} else {
				weak.classList.replace("strong", "medium");
				medium.classList.replace("strong", "medium");
				strong.classList.remove("active");
				text.classList.remove("strong");
			}

		} else {
			indicator.style.display = "none";
			text.style.display = "none";
		}
	}
</script>