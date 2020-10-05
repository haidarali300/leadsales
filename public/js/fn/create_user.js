const input = document.querySelector("#phone");
iti = intlTelInput(input, {
    separateDialCode: true,
    utilsScript: "/js/utils.js",
    initialCountry: "us",
    autoPlaceholder: "aggressive",
    formatOnDisplay: true,
    onlyCountries: ["us"],
    hiddenInput: "phone"
});
const setCountryData = () => {
    let selected_country = iti.getSelectedCountryData();
    document.getElementById("country").value = selected_country.name;
    document.getElementById("country-iso2").value = selected_country.iso2;
}
input.addEventListener("keyup", () => {
    if (!iti.isValidNumber())
        $("#phone").addClass("form-control-invalid")
    else
        $("#phone").removeClass("form-control-invalid")
});
input.addEventListener("countrychange", () => setCountryData());
window.addEventListener('submit', () => setCountryData());