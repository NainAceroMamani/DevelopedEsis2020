let $country, $city, $type_person;

$(function () {
    $country = $('#country');
    $city = $('#city');
    $type_person = $('#type_person');
    document.getElementById("grade_prefessional").disabled = true;
    const countryId = $country.val();
    const url = `/api/countries/${ countryId }/cities`;
    $.getJSON(url, onCitiesLoaded);
    $country.change(() => {
        const countryId = $country.val();
        const url = `/api/countries/${ countryId }/cities`;
        $.getJSON(url, onCitiesLoaded);
    });

    $type_person.change(() => {
        const selected = $type_person.val();
        if(selected == 1){
            // console.log('Estudiante');
            document.getElementById("year_student").disabled = false;
            document.getElementById("grade_prefessional").disabled = true;
            document.getElementById("grade_prefessional").value = "";
        }else if(selected == 2) {
            // console.log('Profesional');
            document.getElementById("year_student").disabled = true;
            document.getElementById("grade_prefessional").disabled = false;
        }
    });

});

function onCitiesLoaded(data){
    let htmlOptions = '';
    for (const city in data) {
        htmlOptions += `<option value="${data[city].id}">${data[city].name_city}</option>`;
    }
    $city.html(htmlOptions);
}