function showForm(formId) {
    document.querySelectorAll('.form').forEach(form => form.classList.remove('active'));
    document.getElementById(formId).classList.add('active');

    document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
    document.querySelector(`[onclick="showForm('${formId}')"]`).classList.add('active');
}
