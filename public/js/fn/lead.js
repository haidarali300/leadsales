const setCountryData = () => {
    let selected_country = iti.getSelectedCountryData();
    document.getElementById("country").value = selected_country.name;
    document.getElementById("country-iso2").value = selected_country.iso2;
}

window.addEventListener('load', () => {
    let urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has('show_stage'))
        $("#carouselLead").carousel(parseInt(urlParams.get('show_stage')));
    else
        $("#carouselLead").carousel((typeof(stage_id !== 'undefined') ? stage_id : 0));

    $("#category").select2({ placeholder: 'Select a category' });
    $("#origin").select2({ placeholder: 'Select a origin' });
    $("#salesman").select2({ placeholder: 'Select a salesman' });
    $("#supervisor").select2({ placeholder: 'Select a supervisor' });

    let input = document.getElementById("phone");

    iti = intlTelInput(input, {
        separateDialCode: true,
        utilsScript: "/js/utils.js",
        initialCountry: "us",
        autoPlaceholder: "aggressive",
        formatOnDisplay: true,
        onlyCountries: ["us", "gb"],
        hiddenInput: "phone"
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

const update_user = () => {
    let token = window.sessionStorage.getItem('api_token');

    let data = {
        name    : document.getElementById("fullname").value,
        country : document.getElementById("country").value,
        state   : document.getElementById("state").value,
        city    : document.getElementById("city").value,
        email   : document.getElementById("email").value,
        phone   : iti.getNumber()
    };

    
}