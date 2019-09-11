// When the user scrolls the page, execute fixNavBar
window.onscroll = function() {fixNavBar()};

// Get the navbar
var interactivNav = document.querySelector(".interactivNav");

// Add the class to the navbar when you reach the scroll position. Remove it when you leave the scroll position
function fixNavBar() {
  if (window.pageYOffset > 120) {
    interactivNav.classList.remove("interactivNav");
    interactivNav.classList.add("fixedNav");
  } else {
    interactivNav.classList.remove("fixedNav");
    interactivNav.classList.add("interactivNav");
  }
}

//Form validation
// Form capture
var form = document.querySelector('form');

// Fields capture, to array converse
if (form != null) {
  var fields = Array.from(form.elements);

  // last array element, out
  fields.pop();

  // Regex for email
  var regexEmail = /\S+@\S+\.\S+/;

  // errors
  var errors = {};

  // Blur event to all arrary fields
  fields.forEach(function (oneField) {
  	// set the div error
  	var divError = oneField.nextElementSibling;;

  	oneField.addEventListener('blur', function () {
  		// field value capture
  		var fieldValue = oneField.value.trim();

  		// empty field validate
  		if (fieldValue === '') {
  			this.classList.add('is-invalid'); // add is-invalid class
  			divError.style.display = 'block'; // div error visible
  			divError.innerText = `El campo es obligatorio`; // setting text error

  			// add a key to de errors object
  			errors[this.name] = true;
  		} else {
  			// If isn't empty, reverse the above
  			this.classList.remove('is-invalid');
  			divError.style.display = 'none';
  			divError.innerText = '';

  			// If isn't an error, delete the error key
  			delete errors[this.name];

  			// If is the email field
  			if (this.type === 'email') {
  				// valid that the text is a valid email format
  				if (!regexEmail.test(fieldValue)) {
  					this.classList.add('is-invalid'); // add is-invalid class
  					divError.style.display = 'block'; // div error visible
  					divError.innerText = `Ingresá un email válido`; // setting text error

  					// add a key to de errors object
  					errors[this.name] = true;
  				} else {
  					// If it is a valid email format
  					this.classList.remove('is-invalid');
  					divError.style.display = 'none';
  					divError.innerText = '';
  				}
  			}
  		}
  	});
  });
}

// Valid when the form is submitted
form.addEventListener('submit', function (event) {
	fields.forEach(function (oneField) {
		var finalFieldValue = oneField.value.trim();

		if (finalFieldValue === '') {
			errors[oneField.name] = true;
		}
	});

	if (Object.keys(errors).length > 0) {
		alert('Por favor, complete correctamente los campos');
		event.preventDefault();
	}
})
