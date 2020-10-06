const setCountryData = () => {
    let selected_country = iti.getSelectedCountryData();
    document.getElementById("country").value = selected_country.name;
    document.getElementById("country-iso2").value = selected_country.iso2;
}

window.addEventListener('load', () => {
    $("#salesman").select2({ placeholder: 'Select a salesman' });
    $("#supervisor").select2({ placeholder: 'Select a supervisor' });
    $("#category").select2({ placeholder: 'Select a category' });
    $("#origin").select2({ placeholder: 'Select a origin' });

    let input = document.querySelector("#phone");

    iti = intlTelInput(input, {
        separateDialCode: true,
        utilsScript: "/js/utils.js",
        initialCountry: "us",
        autoPlaceholder: "aggressive",
        formatOnDisplay: true,
        onlyCountries: ["us", "gb"],
        //hiddenInput: "phone"
    });

    input.addEventListener("keyup", () => {
        if (!iti.isValidNumber())
            $("#phone").addClass("form-control-invalid")
        else
            $("#phone").removeClass("form-control-invalid")
    });

    input.addEventListener("countrychange", () => setCountryData());
    window.addEventListener('submit', () => setCountryData());
});

$("#lead").submit((event) => {
    let self = $("#lead");
    event.preventDefault();

    document.getElementById("phone").value = iti.getNumber();

    let data = {
        name    : document.getElementById("fullname").value,
        country : document.getElementById("country").value,
        address : document.getElementById("address").value,
        email   : document.getElementById("email").value,
        phone   : iti.getNumber(),
        description : document.getElementById("description").value,
        category: document.getElementById("category").value,
        origin  : document.getElementById("origin").value,
        salesman: (document.getElementById("salesman")) ? document.getElementById("salesman").value : 'salesman',
        supervisor: (document.getElementById("supervisor")) ? document.getElementById("supervisor").value : 'supervisor'
    };

    let missing_fields = Object.keys(data).map((key,index) => {
        return (!data[key]) ? `<strong>Missing field:</strong> ${key}` : undefined
    }).filter(item => item);

    if (missing_fields.length > 0)
        return Swal.fire({ title: 'Error!', html: missing_fields.join("<br>"), icon: 'error' });

    self.off('submit');
    self.submit();
});

const readURL = (input) => {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#image_display').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  $("#image").change(function() {
    readURL(this);
  });