let $country, $city, $type_person, $type_docuemnt, $num_document;

$(function () {
    $country = $('#country');
    $city = $('#city');
    $type_person = $('#type_person');
    $type_docuemnt = $('#type_docuemnt');
    $num_document = $('#num_document');
    $num_document.change(() => {
        if($type_docuemnt.val() == 1) {
            const url = `https://dniruc.apisperu.com/api/v1/dni/${ $num_document.val() }?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFfbmFjZXJvbUB1bmpiZy5lZHUucGUifQ.NcV9aUSUuJ0Wul85yvonhMfhzfBcvw7zuXdXZCD6P0A`;
            $.getJSON(url, ondatosUser);
        }
    });
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

function ondatosUser(data) {
    const name = data.nombres;
    const lastname = data.apellidoPaterno + ' ' + data.apellidoMaterno;
    document.getElementById("name_person").value = name;
    document.getElementById("last_name_person").value = lastname;
}

function onCitiesLoaded(data){
    let htmlOptions = '';
    for (const city in data) {
        htmlOptions += `<option value="${data[city].id}">${data[city].name_city}</option>`;
    }
    $city.html(htmlOptions);
    var x = document.getElementById("city");
    var option = document.createElement("option");
    option.text = "Kiwi";
    x.add(option);

}