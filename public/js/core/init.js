// Extension pour comptabilité avec materialize.css
$.validator.setDefaults({
    errorClass: 'validate invalid',
    validClass: "validate valid",
    errorPlacement: function(error, element) {
        $(element).closest("form").find("label[for='" + element.attr("id") + "']").attr('data-error', error.text());
    },
    submitHandler: function(form) {
        form.submit();
    }
});
$(".form-validate").validate();
